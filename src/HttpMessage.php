<?php

if (\Imhonet\Ext_Http_Adapter\Config\DISABLE) {
    return;
}

/**
 * @todo
 * @link http://php.net/manual/en/class.httpmessage.php
 */
class HttpMessage implements Countable, Serializable, Iterator
{
    const TYPE_NONE = 0;
    const TYPE_REQUEST = 1;
    const TYPE_RESPONSE = 2;

    protected $type;
    protected $body;
    protected $requestMethod;
    protected $requestUrl;
    protected $responseStatus;
    protected $responseCode;
    protected $httpVersion;
    protected $headers;
    protected $parentMessage;


    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * HttpMessage constructor
     * @link http://php.net/manual/en/function.httpmessage-construct.php
     * @param string $message [optional] <p>
     * a single or several consecutive HTTP messages
     * </p>
     * @return self
     */
    public function __construct($message = null)
    {
        $this->setBody($message);
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get message body
     * @link http://php.net/manual/en/function.httpmessage-getbody.php
     * @return string the message body as string.
     */
    public function getBody()
    {
        return (string) $this->body;
    }

    /**
     * (PECL pecl_http &gt;= 0.14.0)<br/>
     * Set message body
     * @link http://php.net/manual/en/function.httpmessage-setbody.php
     * @param string $body <p>
     * the new body of the message
     * </p>
     * @return void
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * (PECL pecl_http &gt;= 1.1.0)<br/>
     * Get header
     * @link http://php.net/manual/en/function.httpmessage-getheader.php
     * @param string $header <p>
     * header name
     * </p>
     * @return string|string[] the header value on success or NULL if the header does not exist.
     */
    public function getHeader($header)
    {
        return array_key_exists($header, $this->getHeaders()) ? $this->headers[$header] : null;
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get message headers
     * @link http://php.net/manual/en/function.httpmessage-getheaders.php
     * @return array an associative array containing the messages HTTP headers.
     */
    public function getHeaders()
    {
        return (array) $this->headers;
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set headers
     * @link http://php.net/manual/en/function.httpmessage-setheaders.php
     * @param string[]|array[] $headers <p>
     * associative array containing the new HTTP headers, which will replace all previous HTTP headers of the message
     * </p>
     * @return void
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Add headers
     * @link http://php.net/manual/en/function.httpmessage-addheaders.php
     * @param array $headers <p>
     * associative array containing the additional HTTP headers to add to the messages existing headers
     * </p>
     * @param bool $append [optional] <p>
     * if true, and a header with the same name of one to add exists already, this respective
     * header will be converted to an array containing both header values, otherwise
     * it will be overwritten with the new header value
     * </p>
     * @return void true on success or false on failure.
     */
    public function addHeaders(array $headers, $append = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get message type
     * @link http://php.net/manual/en/function.httpmessage-gettype.php
     * @return int the HttpMessage::TYPE.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set message type
     * @link http://php.net/manual/en/function.httpmessage-settype.php
     * @param int $type <p>
     * the HttpMessage::TYPE
     * </p>
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @todo
     */
    public function getInfo()
    {
    }

    /**
     * @todo
     * @param $http_info
     */
    public function setInfo($http_info)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response code
     * @link http://php.net/manual/en/function.httpmessage-getresponsecode.php
     * @return int the HTTP response code if the message is of type HttpMessage::TYPE_RESPONSE, else FALSE.
     */
    public function getResponseCode()
    {
        return $this->getType() === self::TYPE_RESPONSE ? $this->responseCode : false;
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set response code
     * @link http://php.net/manual/en/function.httpmessage-setresponsecode.php
     * @param int $code <p>
     * HTTP response code
     * </p>
     * @return bool TRUE on success, or FALSE if the message is not of type
     * HttpMessage::TYPE_RESPONSE or the response code is out of range (100-510).
     */
    public function setResponseCode($code)
    {
        $result = $this->getType() === self::TYPE_RESPONSE;

        if ($result) {
            $this->responseCode = $code;
        }

        return $result;
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.23.0)<br/>
     * Get response status
     * @link http://php.net/manual/en/function.httpmessage-getresponsestatus.php
     * @return string the HTTP response status string if the message is of type
     * HttpMessage::TYPE_RESPONSE, else FALSE.
     */
    public function getResponseStatus()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.23.0)<br/>
     * Set response status
     * @link http://php.net/manual/en/function.httpmessage-setresponsestatus.php
     * @param string $status <p>
     * the response status text
     * </p>
     * @return bool TRUE on success or FALSE if the message is not of type
     * HttpMessage::TYPE_RESPONSE.
     */
    public function setResponseStatus($status)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request method
     * @link http://php.net/manual/en/function.httpmessage-getrequestmethod.php
     * @return string the request method name on success, or FALSE if the message is
     * not of type HttpMessage::TYPE_REQUEST.
     */
    public function getRequestMethod()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set request method
     * @link http://php.net/manual/en/function.httpmessage-setrequestmethod.php
     * @param string $method <p>
     * the request method name
     * </p>
     * @return bool TRUE on success, or FALSE if the message is not of type
     * HttpMessage::TYPE_REQUEST or an invalid request method was supplied.
     */
    public function setRequestMethod($method)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Get request URL
     * @link http://php.net/manual/en/function.httpmessage-getrequesturl.php
     * @return string the request URL as string on success, or FALSE if the message
     * is not of type HttpMessage::TYPE_REQUEST.
     */
    public function getRequestUrl()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Set request URL
     * @link http://php.net/manual/en/function.httpmessage-setrequesturl.php
     * @param string $url <p>
     * the request URL
     * </p>
     * @return bool TRUE on success, or FALSE if the message is not of type
     * HttpMessage::TYPE_REQUEST or supplied URL was empty.
     */
    public function setRequestUrl($url)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get HTTP version
     * @link http://php.net/manual/en/function.httpmessage-gethttpversion.php
     * @return string the HTTP protocol version as string.
     */
    public function getHttpVersion()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set HTTP version
     * @link http://php.net/manual/en/function.httpmessage-sethttpversion.php
     * @param string $version <p>
     * the HTTP protocol version
     * </p>
     * @return bool TRUE on success, or FALSE if supplied version is out of range (1.0/1.1).
     */
    public function setHttpVersion($version)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * Guess content type
     * @link http://php.net/manual/en/function.httpmessage-guesscontenttype.php
     * @param string $magic_file <p>
     * the magic.mime database to use
     * </p>
     * @param int $magic_mode [optional] <p>
     * flags for libmagic
     * </p>
     * @return string the guessed content type on success or false on failure.
     */
    public function guessContentType($magic_file, $magic_mode = null)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get parent message
     * @link http://php.net/manual/en/function.httpmessage-getparentmessage.php
     * @return HttpMessage the parent HttpMessage object.
     */
    public function getParentMessage()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Send message
     * @link http://php.net/manual/en/function.httpmessage-send.php
     * @return bool true on success or false on failure.
     */
    public function send()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get string representation
     * @link http://php.net/manual/en/function.httpmessage-tostring.php
     * @param bool $include_parent [optional] <p>
     * specifies whether the returned string should also contain any parent messages
     * </p>
     * @return string the message as string.
     */
    public function toString($include_parent = null)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Create HTTP object regarding message type
     * @link http://php.net/manual/en/function.httpmessage-tomessagetypeobject.php
     * @return HttpRequest|HttpResponse either an HttpRequest or HttpResponse object on success, or NULL on failure.
     */
    public function toMessageTypeObject()
    {
    }

    /**
     * @todo
     */
    public function count()
    {
    }

    /**
     * @todo
     */
    public function serialize()
    {
    }

    /**
     * @todo
     * @param $serialized
     */
    public function unserialize($serialized)
    {
    }

    /**
     * @todo
     */
    public function rewind()
    {
    }

    /**
     * @todo
     */
    public function valid()
    {
    }

    /**
     * @todo
     */
    public function current()
    {
    }

    /**
     * @todo
     */
    public function key()
    {
    }

    /**
     * @todo
     */
    public function next()
    {
    }

    /**
     * @todo
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.4.0)<br/>
     * Create HttpMessage from string
     * @link http://php.net/manual/en/function.httpmessage-factory.php
     * @param string $raw_message [optional] <p>
     * a single or several consecutive HTTP messages
     * </p>
     * @param string $class_name [optional] <p>
     * a class extending HttpMessage
     * </p>
     * @return HttpMessage an HttpMessage object on success or NULL on failure.
     */
    public static function factory($raw_message = null, $class_name = 'HttpMessage')
    {
        return new $class_name($raw_message);
    }

    /**
     * @todo
     * (PECL pecl_http 0.10.0-1.3.3)<br/>
     * Create HttpMessage from string
     * @link http://php.net/manual/en/function.httpmessage-fromstring.php
     * @param string $raw_message [optional] <p>
     * a single or several consecutive HTTP messages
     * </p>
     * @param string $class_name [optional] <p>
     * a class extending HttpMessage
     * </p>
     * @return HttpMessage an HttpMessage object on success or NULL on failure.
     */
    public static function fromString($raw_message = null, $class_name = null)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 1.5.0)<br/>
     * Create HttpMessage from environment
     * @link http://php.net/manual/en/function.httpmessage-fromenv.php
     * @param int $message_type <p>
     * The message type. See HttpMessage type constants.
     * </p>
     * @param string $class_name [optional] <p>
     * a class extending HttpMessage
     * </p>
     * @return HttpMessage an HttpMessage object on success or NULL on failure.
     */
    public static function fromEnv($message_type, $class_name = null)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Detach HttpMessage
     * @link http://php.net/manual/en/function.httpmessage-detach.php
     * @return HttpMessage detached HttpMessage object copy.
     */
    public function detach()
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Prepend message(s)
     * @link http://php.net/manual/en/function.httpmessage-prepend.php
     * @param HttpMessage $message <p>
     * HttpMessage object to prepend
     * </p>
     * @param bool $top [optional] <p>
     * whether to prepend to the top most or right this message
     * </p>
     * @return void
     */
    public function prepend(HttpMessage $message, $top = null)
    {
    }

    /**
     * @todo
     * (PECL pecl_http &gt;= 0.23.0)<br/>
     * Reverse message chain
     * @link http://php.net/manual/en/function.httpmessage-reverse.php
     * @return HttpMessage the most parent HttpMessage object.
     */
    public function reverse()
    {
    }

}
