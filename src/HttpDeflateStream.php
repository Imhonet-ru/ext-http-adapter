<?php

if (\Imhonet\Ext_Http_Adapter\Config\DISABLE) {
    return;
}

/**
 * @todo
 * @link http://php.net/manual/en/class.httpdeflatestream.php
 */
class HttpDeflateStream
{
    const TYPE_GZIP = 16;
    const TYPE_ZLIB = 0;
    const TYPE_RAW = 32;
    const LEVEL_DEF = 0;
    const LEVEL_MIN = 1;
    const LEVEL_MAX = 9;
    const STRATEGY_DEF = 0;
    const STRATEGY_FILT = 256;
    const STRATEGY_HUFF = 512;
    const STRATEGY_RLE = 768;
    const STRATEGY_FIXED = 1024;
    const FLUSH_NONE = 0;
    const FLUSH_SYNC = 1048576;
    const FLUSH_FULL = 2097152;


    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * HttpDeflateStream class constructor
     * @link http://php.net/manual/en/function.httpdeflatestream-construct.php
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
     * Update deflate stream
     * @link http://php.net/manual/en/function.httpdeflatestream-update.php
     * @param string $data <p>
     * data to deflate
     * </p>
     * @return string deflated data on success or false on failure.
     */
    public function update($data)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Flush deflate stream
     * @link http://php.net/manual/en/function.httpdeflatestream-flush.php
     * @param string $data [optional] <p>
     * more data to deflate
     * </p>
     * @return string some deflated data as string on success or false on failure.
     */
    public function flush($data = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Finalize deflate stream
     * @link http://php.net/manual/en/function.httpdeflatestream-finish.php
     * @param string $data [optional] <p>
     * data to deflate
     * </p>
     * @return string the final part of deflated data.
     */
    public function finish($data = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.4.0)<br/>
     * HttpDeflateStream class factory
     * @link http://php.net/manual/en/function.httpdeflatestream-factory.php
     * @param int $flags [optional] <p>
     * initialization flags
     * </p>
     * @param string $class_name [optional] <p>
     * name of a subclass of HttpDeflateStream
     * </p>
     * @return HttpDeflateStream
     */
    public static function factory($flags = null, $class_name = null)
    {
    }
}
