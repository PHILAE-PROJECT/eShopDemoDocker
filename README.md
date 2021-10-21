Philae e-shop
=============

This archive contains the necessary components to run Philae's opencart instance called **e-shop** using Docker.

Preliminaries
-------------

First, [install Docker](https://docs.docker.com/get-docker/)  
Second,[install docker-compose](https://docs.docker.com/compose/install/)

Start and stop the services
------------------

At the root of the unzipped archive, run the following command:  
`$ make up`  
And wait for 30 seconds or so.  
To shut down the website, run:  
`$ make down`  
Not that this will delete all the containers, including the database. The user logs file is preserved as it is stored on the host machine. If you only want to stop the services, run:  
`$ make stop`  
And then to turn them back on, run:  
`$ make start`


Access
------ 

The URL to access e-shop is http://localhost:8080. 
If for some reason you need to access e-shop from another machine, replace **localhost** by the IP address of the machine that runs e-shop in files www/html/opencart/config.php and www/html/opencart/admin/config.php.  
If you want to use another port, open file *docker-compose.yml*, go to line 11 "- 8080:80" and change 8080 with the port you wish to use.
 
The URL of the admin panel is http://localhost:8080/admin

Logs
----

Logs (user traces) are collected in file www/storage/logs/OpenCartAction.txt

Code Coverage
-------------

Code coverage can be enabled by creating the containers with the following command:  
`$ make up-cov`  
Coverage is collected per request by default. After each request, a json file is created in www/html/opencart/codecoverage/coverages and lists, per file, both uncovered lines (value 0) and covered lines (value 1).  
It is possible to merge request coverages by first setting the cookie variable `test-name` to a name of your choosing, then once all requests have been issued, by running:  
`$ make agg-cov #` *Note that the first time that this command is executed, a Docker image is first created.*  
The aggregated coverage file (stored at location www/html/opencart/codecoverage/coverages/aggregated) has a slightly different format: for each executed file, it only lists the covered lines, and for each covered line, it mentions which request(s) covered it.  
**Beware** Code coverage files can quickly accumulate and take up a lot of storage space, especially when you don't aggregate the coverage files on a regular basis. To clean all the per-request coverage files, run:  
`$ make clean`

Credentials
-----------

####Client 1

username: faithfull.client@inter.net
password: client

####Client 2

username: jane.doe@inter.net
password: client2

####Administrator
username: admin
password: admin

Troubleshooting
---------------

If images cannot load, try to `chmod -R 0777` the www/html/opencart folder. 
If e-shop does not start properly and is not reachable, try starting it manually without make, i.e `docker-compose up` to obtain execution logs.