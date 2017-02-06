<?php
require_once "./ParseArgv.php";

$parsed = new ParseArgv();
//$arguments = $parsed->getParsed();
$arguments = $parsed->argv;

foreach ($arguments as $k => $v) {
    if (($position = strpos($v, "--")) !== FALSE  ) {
        $newStr = substr($v, $position+2);
        print("$k=>$newStr\n");
    }
     else if (($position = strpos($v, "-")) !== FALSE ) {
        $newStr = substr($v, $position+1);
        print("$k=>$newStr\n");
    }
    else
    print("$k=>$v\n");
}