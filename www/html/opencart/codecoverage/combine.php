<?php
    include_once("../vendor/autoload.php");
    $coverages = glob("coverages/*.json");

    #increase the memory in multiples of 128M in case of memory error
    ini_set('memory_limit', '12800M');

    $filter = new SebastianBergmann\CodeCoverage\Filter;
    $filter->includeDirectory('/var/www/html/opencart');
    $filter->excludeDirectory('/var/www/html/opencart/vendor');
    $filter->excludeDirectory('/var/www/html/opencart/codecoverage');
    $count = count($coverages);
    $i = 0;

    $final_coverage = new SebastianBergmann\CodeCoverage\CodeCoverage(
        (new SebastianBergmann\CodeCoverage\Driver\Selector)->forLineCoverage($filter),
        $filter
    );
    
    $final_coverage->excludeUncoveredFiles();
    
    $coverageName = 'coverage_'.explode('-',basename($coverages[0],".json"))[1];

    foreach ($coverages as $coverage_file)
    {
        $i++;
        echo "Processing coverage ($i/$count) from $coverage_file". PHP_EOL;
        $codecoverageData =  SebastianBergmann\CodeCoverage\RawCodeCoverageData::fromXdebugWithoutPathCoverage(json_decode(file_get_contents($coverage_file), JSON_OBJECT_AS_ARRAY));
        $test_name = explode('-',basename($coverage_file,".json"))[1];
        $final_coverage->append($codecoverageData, $test_name . '_req_' . $i);
    }
    $aggcoverageData = json_encode($final_coverage->getData()->lineCoverage());
    file_put_contents('coverages/aggregated/' . $coverageName . '.json', $aggcoverageData);
?>
