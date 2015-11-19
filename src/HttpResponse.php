<?php

/**
 * @todo
 * @link http://php.net/manual/en/class.httpresponse.php
 */
class HttpResponse
{
    const REDIRECT = 0;
    const REDIRECT_PERM = 301;
    const REDIRECT_FOUND = 302;
    const REDIRECT_POST = 303;
    const REDIRECT_PROXY = 305;
    const REDIRECT_TEMP = 307;

    private static $sent;
    private static $catch;
    private static $mode;
    private static $stream;
    private static $file;
    private static $data;
    protected static $cache;
    protected static $gzip;
    protected static $eTag;
    protected static $lastModified;
    protected static $cacheControl;
    protected static $contentType;
    protected static $contentDisposition;
    protected static $bufferSize;
    protected static $throttleDelay;


    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Set header
     * @link http://php.net/manual/en/function.httpresponse-setheader.php
     * @param string $name <p>
     * the name of the header
     * </p>
     * @param mixed $value [optional] <p>
     * the value of the header;
     * if not set, no header with this name will be sent
     * </p>
     * @param bool $replace [optional] <p>
     * whether an existing header should be replaced
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setHeader($name, $value = null, $replace = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Get header
     * @link http://php.net/manual/en/function.httpresponse-getheader.php
     * @param string $name [optional] <p>
     * specifies the name of the header to read;
     * if empty or omitted, an associative array with all headers will be returned
     * </p>
     * @return mixed either a string containing the value of the header matching name,
     * false on failure, or an associative array with all headers.
     */
    public static function getHeader($name = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set ETag
     * @link http://php.net/manual/en/function.httpresponse-setetag.php
     * @param string $etag <p>
     * unquoted string as parameter containing the ETag
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setETag($etag)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get ETag
     * @link http://php.net/manual/en/function.httpresponse-getetag.php
     * @return string the calculated or previously set ETag as unquoted string.
     */
    public static function getETag()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Set last modified
     * @link http://php.net/manual/en/function.httpresponse-setlastmodified.php
     * @param int $timestamp <p>
     * Unix timestamp representing the last modification time of the sent entity
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setLastModified($timestamp)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Get last modified
     * @link http://php.net/manual/en/function.httpresponse-getlastmodified.php
     * @return int the calculated or previously set Unix timestamp.
     */
    public static function getLastModified()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set content disposition
     * @link http://php.net/manual/en/function.httpresponse-setcontentdisposition.php
     * @param string $filename <p>
     * the file name the &quot;Save as...&quot; dialog should display
     * </p>
     * @param bool $inline [optional] <p>
     * if set to true and the user agent knows how to handle the content type,
     * it will probably not cause the popup window to be shown
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setContentDisposition($filename, $inline = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get content disposition
     * @link http://php.net/manual/en/function.httpresponse-getcontentdisposition.php
     * @return string the current content disposition as string like sent in a header.
     */
    public static function getContentDisposition()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set content type
     * @link http://php.net/manual/en/function.httpresponse-setcontenttype.php
     * @param string $content_type <p>
     * the content type of the sent entity (primary/secondary)
     * </p>
     * @return bool true on success, or false if the content type does not seem to
     * contain a primary and secondary content type part.
     */
    public static function setContentType($content_type)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get content type
     * @link http://php.net/manual/en/function.httpresponse-getcontenttype.php
     * @return string the currently set content type as string.
     */
    public static function getContentType()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.13.0)<br/>
     * Guess content type
     * @link http://php.net/manual/en/function.httpresponse-guesscontenttype.php
     * @param string $magic_file <p>
     * specifies the magic.mime database to use
     * </p>
     * @param int $magic_mode [optional] <p>
     * flags for libmagic
     * </p>
     * @return string the guessed content type on success or false on failure.
     */
    public static function guessContentType($magic_file, $magic_mode = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set cache
     * @link http://php.net/manual/en/function.httpresponse-setcache.php
     * @param bool $cache <p>
     * whether caching should be attempted
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setCache($cache)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get cache
     * @link http://php.net/manual/en/function.httpresponse-getcache.php
     * @return bool true if caching should be attempted, else false.
     */
    public static function getCache()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set cache control
     * @link http://php.net/manual/en/function.httpresponse-setcachecontrol.php
     * @param string $control <p>
     * the primary cache control setting
     * </p>
     * @param int $max_age [optional] <p>
     * the max-age in seconds, suggesting how long the cache entry is valid on the client side
     * </p>
     * @param bool $must_revalidate [optional] <p>
     * whether the cached entity should be revalidated by the client for every request
     * </p>
     * @return bool true on success, or false if control does not match one of public, private or no-cache.
     */
    public static function setCacheControl($control, $max_age = null, $must_revalidate = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get cache control
     * @link http://php.net/manual/en/function.httpresponse-getcachecontrol.php
     * @return string the current cache control setting as a string like sent in a header.
     */
    public static function getCacheControl()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set gzip
     * @link http://php.net/manual/en/function.httpresponse-setgzip.php
     * @param bool $gzip <p>
     * whether GZip compression should be enabled
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setGzip($gzip)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get gzip
     * @link http://php.net/manual/en/function.httpresponse-getgzip.php
     * @return bool true if GZip compression is enabled, else false.
     */
    public static function getGzip()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set throttle delay
     * @link http://php.net/manual/en/function.httpresponse-setthrottledelay.php
     * @param float $seconds <p>
     * seconds to sleep after each chunk sent
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setThrottleDelay($seconds)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get throttle delay
     * @link http://php.net/manual/en/function.httpresponse-getthrottledelay.php
     * @return double a double representing the throttle delay in seconds.
     */
    public static function getThrottleDelay()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set buffer size
     * @link http://php.net/manual/en/function.httpresponse-setbuffersize.php
     * @param int $bytes <p>
     * the chunk size in bytes
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setBufferSize($bytes)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get buffer size
     * @link http://php.net/manual/en/function.httpresponse-getbuffersize.php
     * @return int an int representing the current buffer size in bytes.
     */
    public static function getBufferSize()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set data
     * @link http://php.net/manual/en/function.httpresponse-setdata.php
     * @param mixed $data <p>
     * data to send
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setData($data)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get data
     * @link http://php.net/manual/en/function.httpresponse-getdata.php
     * @return string a string containing the previously set data to send.
     */
    public static function getData()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set file
     * @link http://php.net/manual/en/function.httpresponse-setfile.php
     * @param string $file <p>
     * the path to the file to send
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setFile($file)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get file
     * @link http://php.net/manual/en/function.httpresponse-getfile.php
     * @return string the previously set path to the file to send as string.
     */
    public static function getFile()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set stream
     * @link http://php.net/manual/en/function.httpresponse-setstream.php
     * @param resource $stream <p>
     * already opened stream from which the data to send will be read
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function setStream($stream)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get Stream
     * @link http://php.net/manual/en/function.httpresponse-getstream.php
     * @return resource the previously set resource.
     */
    public static function getStream()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Send response
     * @link http://php.net/manual/en/function.httpresponse-send.php
     * @param bool $clean_ob [optional] <p>
     * whether to destroy all previously started output handlers and their buffers
     * </p>
     * @return bool true on success or false on failure.
     */
    public static function send($clean_ob = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Capture script output
     * @link http://php.net/manual/en/function.httpresponse-capture.php
     * @return void
     */
    public static function capture()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Redirect
     * @link http://php.net/manual/en/function.httpresponse-redirect.php
     * @param string $url [optional]
     * @param array $params [optional]
     * @param bool $session [optional]
     * @param int $status [optional]
     * @return void
     */
    public static function redirect($url = null, array $params = null, $session = null, $status = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Send HTTP response status
     * @link http://php.net/manual/en/function.httpresponse-status.php
     * @param int $status
     * @return bool
     */
    public static function status($status)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request headers
     * @link http://php.net/manual/en/function.httpresponse-getrequestheaders.php
     * @return array
     */
    public static function getRequestHeaders()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request body
     * @link http://php.net/manual/en/function.httpresponse-getrequestbody.php
     * @return string
     */
    public static function getRequestBody()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request body stream
     * @link http://php.net/manual/en/function.httpresponse-getrequestbodystream.php
     * @return resource
     */
    public static function getRequestBodyStream()
    {
    }
}
