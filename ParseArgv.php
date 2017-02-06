<?php

class ParseArgv
{
    private $argsParsed;
    private $argsUnparsed;


    public function __construct()
    {
        $this->argv = $_SERVER['argv'];
        $this->argsParsed = array(
            "One" => "one",
            "Two" => "two"
        );

    }

    public function getParsed()
    {
        return $this ->argsUnparsed;
    }
}