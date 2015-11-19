<?php

/**
 * @todo
 */
class HttpRequestDataShare implements Countable
{
    private static $instance;
    public $cookie;
    public $dns;
    public $ssl;
    public $connect;


    public function __destruct()
    {
    }

    public function count()
    {
    }

    /**
     * @param HttpRequest $request
     */
    public function attach(HttpRequest $request)
    {
    }

    /**
     * @param HttpRequest $request
     */
    public function detach(HttpRequest $request)
    {
    }

    public function reset()
    {
    }

    /**
     * @param $global [optional]
     * @param $class_name [optional]
     */
    public static function factory($global, $class_name)
    {
    }

    /**
     * @param $global [optional]
     */
    public static function singleton($global)
    {
    }
}
