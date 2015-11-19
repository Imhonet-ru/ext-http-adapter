<?php

if (\Imhonet\Ext_Http_Adapter\Config\DISABLE) {
    return;
}

/**
 * @todo
 * @link http://php.net/manual/en/class.httpquerystring.php
 */
class HttpQueryString implements Serializable, ArrayAccess
{
    const TYPE_BOOL = 3;
    const TYPE_INT = 1;
    const TYPE_FLOAT = 2;
    const TYPE_STRING = 6;
    const TYPE_ARRAY = 4;
    const TYPE_OBJECT = 5;

    private static $instance;
    private $queryArray;
    private $queryString;


    /**
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * HttpQueryString constructor
     * @link http://php.net/manual/en/function.httpquerystring-construct.php
     * @param bool $global [optional] <p>
     * whether to operate on $_GET and
     * $_SERVER['QUERY_STRING']
     * </p>
     * @param mixed $add [optional] <p>
     * additional/initial query string parameters
     * </p>
     */
    final public function __construct($global = null, $add = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Get query string as array
     * @link http://php.net/manual/en/function.httpquerystring-toarray.php
     * @return array the array representation of the query string.
     */
    public function toArray()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Get query string
     * @link http://php.net/manual/en/function.httpquerystring-tostring.php
     * @return string the string representation of the query string.
     */
    public function toString()
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Get (part of) query string
     * @link http://php.net/manual/en/function.httpquerystring-get.php
     * @param string $key [optional] <p>
     * key of the query string param to retrieve
     * </p>
     * @param mixed $type [optional] <p>
     * which variable type to enforce
     * </p>
     * @param mixed $defval [optional] <p>
     * default value if key does not exist
     * </p>
     * @param bool $delete [optional] <p>
     * whether to remove the key/value pair from the query string
     * </p>
     * @return mixed the value of the query string param or the whole query string if no key was specified on success or defval if key does not exist.
     */
    public function get($key = null, $type = null, $defval = null, $delete = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Set query string params
     * @link http://php.net/manual/en/function.httpquerystring-set.php
     * @param mixed $params <p>
     * query string params to add
     * </p>
     * @return string the current query string.
     */
    public function set($params)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.1.0)<br/>
     * Modifiy query string copy
     * @link http://php.net/manual/en/function.httpquerystring-mod.php
     * @param mixed $params <p>
     * query string params to add
     * </p>
     * @return HttpQueryString a new HttpQueryString object
     */
    public function mod($params)
    {
    }

    /**
     * @param $name
     * @param $defval [optional]
     * @param $delete [optional]
     */
    public function getBool($name, $defval, $delete)
    {
    }

    /**
     * @param $name
     * @param $defval [optional]
     * @param $delete [optional]
     */
    public function getInt($name, $defval, $delete)
    {
    }

    /**
     * @param $name
     * @param $defval [optional]
     * @param $delete [optional]
     */
    public function getFloat($name, $defval, $delete)
    {
    }

    /**
     * @param $name
     * @param $defval [optional]
     * @param $delete [optional]
     */
    public function getString($name, $defval, $delete)
    {
    }

    /**
     * @param $name
     * @param $defval [optional]
     * @param $delete [optional]
     */
    public function getArray($name, $defval, $delete)
    {
    }

    /**
     * @param $name
     * @param $defval [optional]
     * @param $delete [optional]
     */
    public function getObject($name, $defval, $delete)
    {
    }

    /**
     * @param $global [optional]
     * @param $params [optional]
     * @param $class_name [optional]
     */
    public static function factory($global, $params, $class_name)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.25.0)<br/>
     * HttpQueryString singleton
     * @link http://php.net/manual/en/function.httpquerystring-singleton.php
     * @param bool $global [optional] <p>
     * whether to operate on $_GET and
     * $_SERVER['QUERY_STRING']
     * </p>
     * @return HttpQueryString always the same HttpQueryString instance regarding the global setting.
     */
    public static function singleton($global = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.25.0)<br/>
     * Change query strings charset
     * @link http://php.net/manual/en/function.httpquerystring-xlate.php
     * @param string $ie <p>
     * input encoding
     * </p>
     * @param string $oe <p>
     * output encoding
     * </p>
     * @return bool true on success or false on failure.
     */
    public function xlate($ie, $oe)
    {
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
    }
}
