<?php

/**
 * @todo
 * @link http://php.net/manual/en/class.httpinflatestream.php
 */
class HttpInflateStream
{
    const FLUSH_NONE = 0;
    const FLUSH_SYNC = 1048576;
    const FLUSH_FULL = 2097152;


    /**
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * HttpInflateStream class constructor
     * @link http://php.net/manual/en/function.httpinflatestream-construct.php
     * @param int $flags [optional] <p>
     * initialization flags
     * </p>
     * @return void
     */
    public function __construct($flags = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Update inflate stream
     * @link http://php.net/manual/en/function.httpinflatestream-update.php
     * @param string $data <p>
     * data to inflate
     * </p>
     * @return string inflated data on success or false on failure.
     */
    public function update($data)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Flush inflate stream
     * @link http://php.net/manual/en/function.httpinflatestream-flush.php
     * @param string $data [optional] <p>
     * more data to inflate
     * </p>
     * @return string some inflated data as string on success or false on failure.
     */
    public function flush($data = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Finalize inflate stream
     * @link http://php.net/manual/en/function.httpinflatestream-finish.php
     * @param string $data [optional] <p>
     * data to inflate
     * </p>
     * @return string the final part of inflated data.
     */
    public function finish($data = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.4.0)<br/>
     * HttpInflateStream class factory
     * @link http://php.net/manual/en/function.httpinflatestream-factory.php
     * @param int $flags [optional] <p>
     * initialization flags
     * </p>
     * @param string $class_name [optional] <p>
     * name of a subclass of HttpInflateStream
     * </p>
     * @return HttpInflateStream
     */
    public static function factory($flags = null, $class_name = null)
    {
    }

}
