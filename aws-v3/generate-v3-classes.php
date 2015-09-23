<?php
require("vendor/autoload.php");
function generate($inputFile, $outputDir) {
    $generator = new \Wsdl2PhpGenerator\Generator();
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
                'inputFile' => $inputFile,
                'outputDir' => $outputDir
            )
        )
    );
    $filename = getcwd() . "/" . $outputDir."/"."AscioService.php";
    echo "filename".$filename;
    $fp = fopen($filename,"r");
    $content = fread($fp, filesize($filename));
    $content = str_replace("'\\\\","'", $content);
    fclose($fp);
    $fp = fopen($filename,"w");
    fwrite($fp,$content);
    fclose($fp);
    echo $content;
}
generate('https://aws.ascio.com/v3/aws.wsdl','live');
generate('https://awstest.ascio.com/v3/aws.wsdl','ote');
generate(getcwd(). '/aws.wsdl','dev');

