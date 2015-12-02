<?php
require("vendor/autoload.php");
function generate($inputFile, $outputDir) {
    $generator = new \Wsdl2PhpGenerator\Generator();
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
                'inputFile' 	=> $inputFile,
                'outputDir' 	=> $outputDir,
        		'namespaceName' => 'ascio\v3'
            )
        )
    );
    $filename = getcwd() . "/" . $outputDir."/"."AscioService.php";
    echo "filename: ".$filename."\n";
   
}
generate(getcwd(). '/aws.wsdl','live');
generate(getcwd(). '/awstest.wsdl','ote');

