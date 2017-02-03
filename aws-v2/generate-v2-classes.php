<?php
require("vendor/autoload.php");
function generate($inputFile, $outputDir) {
    $generator = new \Wsdl2PhpGenerator\Generator();
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
                'inputFile' 	=> $inputFile,
                'outputDir' 	=> $outputDir,
        		'namespaceName' => 'ascio\v2'
            )
        )
    );
    $filename = getcwd() . "/" . $outputDir."/"."AscioService.php";
    echo "filename: ".$filename."\n";
   
}
generate('https://aws.ascio.com/2012/01/01/AscioService.wsdl','stub-live');
generate('https://aws.demo.ascio.com/2012/01/01/AscioService.wsdl','stub-testing');

