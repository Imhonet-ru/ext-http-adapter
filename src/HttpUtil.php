<?php

if (\Imhonet\Ext_Http_Adapter\Config\DISABLE) {
    return;
}

/**
 * @todo
 */
class HttpUtil
{

    /**
     * @param $timestamp [optional]
     */
    public static function date($timestamp)
    {
    }

    /**
     * @param $url
     * @param $parts [optional]
     * @param $flags [optional]
     * @param $composed [optional]
     */
    public static function buildUrl($url, $parts, $flags, &$composed)
    {
    }

    /**
     * @param $query
     * @param $prefix [optional]
     * @param $arg_sep [optional]
     */
    public static function buildStr($query, $prefix, $arg_sep)
    {
    }

    /**
     * @param $supported
     * @param $result [optional]
     */
    public static function negotiateLanguage($supported, &$result)
    {
    }

    /**
     * @param $supported
     * @param $result [optional]
     */
    public static function negotiateCharset($supported, &$result)
    {
    }

    /**
     * @param $supported
     * @param $result [optional]
     */
    public static function negotiateContentType($supported, &$result)
    {
    }

    /**
     * @param $last_modified
     * @param $for_range [optional]
     */
    public static function matchModified($last_modified, $for_range)
    {
    }

    /**
     * @param $plain_etag
     * @param $for_range [optional]
     */
    public static function matchEtag($plain_etag, $for_range)
    {
    }

    /**
     * @param $header_name
     * @param $header_value
     * @param $case_sensitive [optional]
     */
    public static function matchRequestHeader($header_name, $header_value, $case_sensitive)
    {
    }

    /**
     * @param $message_string
     */
    public static function parseMessage($message_string)
    {
    }

    /**
     * @param $headers_string
     */
    public static function parseHeaders($headers_string)
    {
    }

    /**
     * @param $cookie_string
     */
    public static function parseCookie($cookie_string)
    {
    }

    /**
     * @param $cookie_array
     */
    public static function buildCookie($cookie_array)
    {
    }

    /**
     * @param $param_string
     * @param $flags [optional]
     */
    public static function parseParams($param_string, $flags)
    {
    }

    /**
     * @param $encoded_string
     */
    public static function chunkedDecode($encoded_string)
    {
    }

    /**
     * @param $plain
     * @param $flags [optional]
     */
    public static function deflate($plain, $flags)
    {
    }

    /**
     * @param $encoded
     */
    public static function inflate($encoded)
    {
    }

    /**
     * @param $feature [optional]
     */
    public static function support($feature)
    {
    }
}
