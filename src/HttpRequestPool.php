<?php

if (\Imhonet\Ext_Http_Adapter\Config\DISABLE) {
    return;
}

/**
 * @todo
 * @link http://php.net/manual/en/class.httprequestpool.php
 */
class HttpRequestPool implements Countable, Iterator, Traversable
{

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * HttpRequestPool constructor
     * @link http://php.net/manual/en/function.httprequestpool-construct.php
     * @param HttpRequest $request [optional] <p>
     * HttpRequest object to attach
     * </p>
     */
    public function __construct(HttpRequest $request = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * HttpRequestPool destructor
     * @link http://php.net/manual/en/function.httprequestpool-destruct.php
     * @return void
     */
    public function __destruct()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Attach HttpRequest
     * @link http://php.net/manual/en/function.httprequestpool-attach.php
     * @param HttpRequest $request <p>
     * an HttpRequest object not already attached to any HttpRequestPool object
     * </p>
     * @return bool true on success or false on failure.
     */
    public function attach(HttpRequest $request)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Detach HttpRequest
     * @link http://php.net/manual/en/function.httprequestpool-detach.php
     * @param HttpRequest $request <p>
     * an HttpRequest object attached to this HttpRequestPool object
     * </p>
     * @return bool true on success or false on failure.
     */
    public function detach(HttpRequest $request)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Send all requests
     * @link http://php.net/manual/en/function.httprequestpool-send.php
     * @return bool true on success or false on failure.
     */
    public function send()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Reset request pool
     * @link http://php.net/manual/en/function.httprequestpool-reset.php
     * @return void
     */
    public function reset()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.15.0)<br/>
     * Perform socket actions
     * @link http://php.net/manual/en/function.httprequestpool-socketperform.php
     * @return bool TRUE until each request has finished its transaction.
     */
    protected function socketPerform()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Perform socket select
     * @link http://php.net/manual/en/function.httprequestpool-socketselect.php
     * @return bool true on success or false on failure.
     */
    protected function socketSelect()
    {
    }

    public function valid()
    {
    }

    public function current()
    {
    }

    public function key()
    {
    }

    public function next()
    {
    }

    public function rewind()
    {
    }

    public function count()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.16.0)<br/>
     * Get attached requests
     * @link http://php.net/manual/en/function.httprequestpool-getattachedrequests.php
     * @return array an array containing all currently attached HttpRequest objects.
     */
    public function getAttachedRequests()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.16.0)<br/>
     * Get finished requests
     * @link http://php.net/manual/en/function.httprequestpool-getfinishedrequests.php
     * @return array an array containing all attached HttpRequest objects that already have finished their work.
     */
    public function getFinishedRequests()
    {
    }

    /**
     * @param $enable [optional]
     */
    public function enablePipelining($enable)
    {
    }

    /**
     * @param $enable [optional]
     */
    public function enableEvents($enable)
    {
    }
}
