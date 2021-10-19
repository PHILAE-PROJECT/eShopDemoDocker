<?php

/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
 */

/**
 * Action class
 */
class Action
{

    private $id;

    private $route;

    private $method = 'index';

    /**
     * Constructor
     *
     * @param string $route
     */
    public function __construct($route)
    {
        $this->id = $route;

        $parts = explode('/', preg_replace('/[^a-zA-Z0-9_\/]/', '', (string) $route));

        // Break apart the route
        while ($parts) {
            $file = DIR_APPLICATION . 'controller/' . implode('/', $parts) . '.php';

            if (is_file($file)) {
                $this->route = implode('/', $parts);

                break;
            } else {
                $this->method = array_pop($parts);
            }
        }
    }

    /**
     *
     * @return string
     *
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param object $registry
     * @param array $args
     */
    public function execute($registry, array $args = array())
    {
        $logger = new Log("OpenCartAction.txt");

        // Stop any magical methods being called
        if (substr($this->method, 0, 2) == '__') {
            return new \Exception('Error: Calls to magic methods are not allowed!');
        }

        $file = DIR_APPLICATION . 'controller/' . $this->route . '.php';
        $class = 'Controller' . preg_replace('/[^a-zA-Z0-9]/', '', $this->route);

        // Initialize the class
        if (is_file($file)) {
            include_once ($file);
            $controller = new $class($registry);
        } else {
            return new \Exception('Error: Could not call ' . $this->route . '/' . $this->method . '!');
        }
        $reflection = new ReflectionClass($class);

        $requestRoute = "REQUEST_ROUTE_NOT_DEFINED";
        if (isset($_REQUEST['route'])) {
            $requestRoute = preg_replace('/[^a-zA-Z0-9]/', '', $_REQUEST['route']);
        }

        // $logger->write(var_export($_REQUEST, true));

        $this->session = $registry->get('session');

        $sessionId = "SESSION_ID_NOT_DEFINED";
        if (null !== $this->session->getId()) {
            $sessionId = $this->session->getId();
        }
        $customerId = 0;
        if (isset($this->session->data['customer_id'])) {
            $customerId = $this->session->data['customer_id'];
        }

        $controllerName = "CONTROLER_NOT_DEFINED";
        $function_Name = "FUNCTION_NOT_DEFINED";
        $requestData = array();
        $successStatus = "TBD";

        if ($reflection->hasMethod($this->method) && $reflection->getMethod($this->method)->getNumberOfRequiredParameters() <= count($args)) {

            if ((strtolower(substr($reflection->getName(), 10)) == $requestRoute && $this->method == "index") || ($this->method != "override" && $this->method != "index" && $this->method != "after" && $this->method != "before" && $this->method != 
            "info" && ! (strpos(strtolower($reflection->getName()), "google") !== false))) {
                
                $controllerName = $reflection->getName();
                $function_Name = strval($this->method);
                $successStatus = http_response_code();
                $requestData = $_REQUEST;
               
            } 
            
            $arr = array(
                "sessionID" => $sessionId,
                "customerID" => $customerId,
                "controller" => $controllerName,
                "function" => $function_Name,
                "data" => $requestData,
                "httpResponseCode" => $successStatus
            );
            
            
            if ($controllerName != "CONTROLER_NOT_DEFINED") {
               
			$encodedArr = json_encode($arr);
				
			if(preg_match("#\"password\":\".*\",\"confirm\":\".*?\"#", $encodedArr) == 1) {
				$encodedArr = preg_replace("#\"password\":\".*\",\"confirm\":\".*?\"#", "\"password\":\"****\",\"confirm\":\"****\"", $encodedArr);
			}else if(preg_match("#\"password\":\".*?\"#", $encodedArr) == 1) {
				$encodedArr = preg_replace("#\"password\":\".*?\"#", "\"password\":\"****\"", $encodedArr);
			}
                        
  			if(preg_match("#\"telephone\":\".*?\"#", $encodedArr) == 1) {
				$encodedArr = preg_replace("#\"telephone\":\".*?\"#", "\"telephone\":\"0612345678\"", $encodedArr);
			}

				
                	$logger->write($encodedArr);
            }
            
            
            $res = call_user_func_array(array(
                $controller,
                $this->method
            ), $args);
            
            //$logger->write(http_response_code());
            //$arr['resultStatus'] = strlen($res) > 0;
                        
            return $res;
            
        } else {
            return new \Exception('Error: Could not call ' . $this->route . '/' . $this->method . '!');
        }
    }
}

