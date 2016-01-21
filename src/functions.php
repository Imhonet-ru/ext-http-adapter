<?php

if (!\Imhonet\Ext_Http_Adapter\Config\DISABLE) {
    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Compose HTTP RFC compliant date
     * @link http://php.net/manual/en/function.http-date.php
     * @param int $timestamp [optional] <p>
     * Unix timestamp; current time if omitted
     * </p>
     * @return string the HTTP date as string.
     */
    function http_date($timestamp = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.23.0)<br/>
     * Build query string
     * @link http://php.net/manual/en/function.http-build-str.php
     * @param array $query <p>
     * associative array of query string parameters
     * </p>
     * @param string $prefix [optional] <p>
     * top level prefix
     * </p>
     * @param string $arg_separator [optional] <p>
     * argument separator to use (by default the INI setting arg_separator.output will be used, or &quot;&amp;&quot; if neither is set
     * </p>
     * @return string the built query as string on success or false on failure.
     */
    function http_build_str(array $query, $prefix = null, $arg_separator = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Negotiate clients preferred language
     * @link http://php.net/manual/en/function.http-negotiate-language.php
     * @param array $supported <p>
     * array containing the supported languages as values
     * </p>
     * @param array $result [optional] <p>
     * will be filled with an array containing the negotiation results
     * </p>
     * @return string the negotiated language or the default language (i.e. first array entry) if none match.
     */
    function http_negotiate_language(array $supported, array &$result = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Negotiate clients preferred character set
     * @link http://php.net/manual/en/function.http-negotiate-charset.php
     * @param array $supported <p>
     * array containing the supported charsets as values
     * </p>
     * @param array $result [optional] <p>
     * will be filled with an array containing the negotiation results
     * </p>
     * @return string the negotiated charset or the default charset (i.e. first array entry) if none match.
     */
    function http_negotiate_charset(array $supported, array &$result = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.19.0)<br/>
     * Negotiate clients preferred content type
     * @link http://php.net/manual/en/function.http-negotiate-content-type.php
     * @param array $supported <p>
     * array containing the supported content types as values
     * </p>
     * @param array $result [optional] <p>
     * will be filled with an array containing the negotiation results
     * </p>
     * @return string the negotiated content type or the default content type (i.e. first array entry) if none match.
     */
    function http_negotiate_content_type(array $supported, array &$result = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Issue HTTP redirect
     * @link http://php.net/manual/en/function.http-redirect.php
     * @param string $url [optional] <p>
     * the URL to redirect to
     * </p>
     * @param array $params [optional] <p>
     * associative array of query parameters
     * </p>
     * @param bool $session [optional] <p>
     * whether to append session information
     * </p>
     * @param int $status [optional] <p>
     * custom response status code
     * </p>
     * @return void &returns.http.false.orexits; with the specified redirection status code.
     * &see.http.configuration.force_exit;
     */
    function http_redirect($url = null, array $params = null, $session = null, $status = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * HTTP throttling
     * @link http://php.net/manual/en/function.http-throttle.php
     * @param float $sec [optional] <p>
     * seconds to sleep after each chunk sent
     * </p>
     * @param int $bytes [optional] <p>
     * the chunk size in bytes
     * </p>
     * @return void
     */
    function http_throttle($sec = null, $bytes = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Send HTTP response status
     * @link http://php.net/manual/en/function.http-send-status.php
     * @param int $status <p>
     * HTTP status code (100-599)
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_status($status)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Send Last-Modified
     * @link http://php.net/manual/en/function.http-send-last-modified.php
     * @param int $timestamp [optional] <p>
     * a Unix timestamp, converted to a valid HTTP date;
     * if omitted, the current time will be sent
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_last_modified($timestamp = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Send Content-Type
     * @link http://php.net/manual/en/function.http-send-content-type.php
     * @param string $content_type [optional] <p>
     * the desired content type (primary/secondary)
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_content_type($content_type = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Send Content-Disposition
     * @link http://php.net/manual/en/function.http-send-content-disposition.php
     * @param string $filename <p>
     * the file name the &quot;Save as...&quot; dialog should display
     * </p>
     * @param bool $inline [optional] <p>
     * if set to true and the user agent knows how to handle the content type,
     * it will probably not cause the popup window to be shown
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_content_disposition($filename, $inline = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Match last modification
     * @link http://php.net/manual/en/function.http-match-modified.php
     * @param int $timestamp [optional] <p>
     * Unix timestamp; current time, if omitted
     * </p>
     * @param bool $for_range [optional] <p>
     * if set to true, the header usually used to validate HTTP ranges will be checked
     * </p>
     * @return bool true if timestamp represents an earlier date than the header, else false.
     */
    function http_match_modified($timestamp = null, $for_range = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Match ETag
     * @link http://php.net/manual/en/function.http-match-etag.php
     * @param string $etag <p>
     * the ETag to match
     * </p>
     * @param bool $for_range [optional] <p>
     * if set to true, the header usually used to validate HTTP ranges will be checked
     * </p>
     * @return bool true if ETag matches or the header contained the asterisk (&quot;*&quot;), else false.
     */
    function http_match_etag($etag, $for_range = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Caching by last modification
     * @link http://php.net/manual/en/function.http-cache-last-modified.php
     * @param int $timestamp_or_expires [optional] <p>
     * Unix timestamp
     * </p>
     * @return bool &returns.http.false.orexits; with 304 Not Modified if the entity is cached.
     * &see.http.configuration.force_exit;
     */
    function http_cache_last_modified($timestamp_or_expires = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Caching by ETag
     * @link http://php.net/manual/en/function.http-cache-etag.php
     * @param string $etag [optional] <p>
     * custom ETag
     * </p>
     * @return bool &returns.http.false.orexits; with 304 Not Modified if the entity is cached.
     * &see.http.configuration.force_exit;
     */
    function http_cache_etag($etag = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Send arbitrary data
     * @link http://php.net/manual/en/function.http-send-data.php
     * @param string $data <p>
     * data to send
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_data($data)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Send file
     * @link http://php.net/manual/en/function.http-send-file.php
     * @param string $file <p>
     * the file to send
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_file($file)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Send stream
     * @link http://php.net/manual/en/function.http-send-stream.php
     * @param resource $stream <p>
     * stream to read from (must be seekable)
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_send_stream($stream)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Decode chunked-encoded data
     * @link http://php.net/manual/en/function.http-chunked-decode.php
     * @param string $encoded <p>
     * chunked encoded string
     * </p>
     * @return string the decoded string on success or false on failure.
     */
    function http_chunked_decode($encoded)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Parse HTTP messages
     * @link http://php.net/manual/en/function.http-parse-message.php
     * @param string $message <p>
     * string containing a single HTTP message or several consecutive HTTP messages
     * </p>
     * @return object a hierarchical object structure of the parsed messages.
     */
    function http_parse_message($message)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Parse HTTP headers
     * @link http://php.net/manual/en/function.http-parse-headers.php
     * @param string $header <p>
     * string containing HTTP headers
     * </p>
     * @return array an array on success or false on failure.
     */
    function http_parse_headers($header)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.20.0)<br/>
     * Parse HTTP cookie
     * @link http://php.net/manual/en/function.http-parse-cookie.php
     * @param string $cookie <p>
     * string containing the value of a Set-Cookie response header
     * </p>
     * @param int $flags [optional] <p>
     * parse flags (HTTP_COOKIE_PARSE_RAW)
     * </p>
     * @param array $allowed_extras [optional] <p>
     * array containing recognized extra keys;
     * by default all unknown keys will be treated as cookie names
     * </p>
     * @return stdClass|object a stdClass object on success or false on failure.
     */
    function http_parse_cookie($cookie, $flags = null, array $allowed_extras = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.2.0)<br/>
     * Build cookie string
     * @link http://php.net/manual/en/function.http-build-cookie.php
     * @param array $cookie <p>
     * a cookie list like returned from http_parse_cookie
     * </p>
     * @return string the cookie(s) as string.
     */
    function http_build_cookie(array $cookie)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * Parse parameter list
     * @link http://php.net/manual/en/function.http-parse-params.php
     * @param string $param <p>
     * Parameters
     * </p>
     * @param int $flags [optional] <p>
     * Parse flags
     * </p>
     * @return stdClass|object parameter list as stdClass object.
     */
    function http_parse_params($param, $flags = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request headers as array
     * @link http://php.net/manual/en/function.http-get-request-headers.php
     * @return array an associative array of incoming request headers.
     */
    function http_get_request_headers()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request body as string
     * @link http://php.net/manual/en/function.http-get-request-body.php
     * @return string the raw request body as string on success or NULL on failure.
     */
    function http_get_request_body()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.22.0)<br/>
     * Get request body as stream
     * @link http://php.net/manual/en/function.http-get-request-body-stream.php
     * @return resource the raw request body as stream on success or NULL on failure.
     */
    function http_get_request_body_stream()
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Match any header
     * @link http://php.net/manual/en/function.http-match-request-header.php
     * @param string $header <p>
     * the header name (case-insensitive)
     * </p>
     * @param string $value <p>
     * the header value that should be compared
     * </p>
     * @param bool $match_case [optional] <p>
     * whether the value should be compared case sensitively
     * </p>
     * @return bool true if header value matches, else false.
     */
    function http_match_request_header($header, $value, $match_case = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.5.0)<br/>
     * Stat persistent handles
     * @link http://php.net/manual/en/function.http-persistent-handles-count.php
     * @return stdClass|object persistent handles statistics as stdClass object on success or false on failure.
     */
    function http_persistent_handles_count()
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.5.0)<br/>
     * Clean up persistent handles
     * @link http://php.net/manual/en/function.http-persistent-handles-clean.php
     * @param string $ident [optional]
     * @return string
     */
    function http_persistent_handles_clean($ident = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.5.0)<br/>
     * Get/set ident of persistent handles
     * @link http://php.net/manual/en/function.http-persistent-handles-ident.php
     * @param string $ident <p>
     * the identification string
     * </p>
     * @return string the prior ident as string on success or false on failure.
     */
    function http_persistent_handles_ident($ident)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Perform GET request
     * @link http://php.net/manual/en/function.http-get.php
     * @param string $url <p>
     * URL
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * Will be filled with request/response information
     * </p>
     * @return string &returns.http.response;
     */
    function http_get($url, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Perform HEAD request
     * @link http://php.net/manual/en/function.http-head.php
     * @param string $url [optional] <p>
     * URL
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_head($url = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.1.0)<br/>
     * Perform POST request with pre-encoded data
     * @link http://php.net/manual/en/function.http-post-data.php
     * @param string $url <p>
     * URL
     * </p>
     * @param string $data [optional] <p>
     * String containing the pre-encoded post data
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_post_data($url, $data = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Perform POST request with data to be encoded
     * @link http://php.net/manual/en/function.http-post-fields.php
     * @param string $url <p>
     * URL
     * </p>
     * @param array $data [optional] <p>
     * Associative array of POST values
     * </p>
     * @param array $files [optional] <p>
     * Array of files to post
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_post_fields($url, array $data = null, array $files = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.25.0)<br/>
     * Perform PUT request with data
     * @link http://php.net/manual/en/function.http-put-data.php
     * @param string $url <p>
     * URL
     * </p>
     * @param string $data [optional] <p>
     * PUT request body
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_put_data($url, $data = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Perform PUT request with file
     * @link http://php.net/manual/en/function.http-put-file.php
     * @param string $url <p>
     * URL
     * </p>
     * @param string $file [optional] <p>
     * The file to put
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_put_file($url, $file = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Perform PUT request with stream
     * @link http://php.net/manual/en/function.http-put-stream.php
     * @param string $url <p>
     * URL
     * </p>
     * @param resource $stream [optional] <p>
     * The stream to read the PUT request body from
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_put_stream($url, $stream = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * Perform custom request
     * @link http://php.net/manual/en/function.http-request.php
     * @param int $method <p>
     * Request method
     * </p>
     * @param string $url [optional] <p>
     * URL
     * </p>
     * @param string $body [optional] <p>
     * Request body
     * </p>
     * @param array $options [optional] <p>
     * &link.http.request.options;
     * </p>
     * @param array $info [optional] <p>
     * &link.http.request.info;
     * </p>
     * @return string &returns.http.response;
     */
    function http_request($method, $url = null, $body = null, array $options = null, array &$info = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * Encode request body
     * @link http://php.net/manual/en/function.http-request-body-encode.php
     * @param array $fields <p>
     * POST fields
     * </p>
     * @param array $files <p>
     * POST files
     * </p>
     * @return string encoded string on success or false on failure.
     */
    function http_request_body_encode(array $fields, array $files)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Register request method
     * @link http://php.net/manual/en/function.http-request-method-register.php
     * @param string $method <p>
     * the request method name to register
     * </p>
     * @return int the ID of the request method on success or false on failure.
     */
    function http_request_method_register($method)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Unregister request method
     * @link http://php.net/manual/en/function.http-request-method-unregister.php
     * @param mixed $method <p>
     * The request method name or ID
     * </p>
     * @return bool true on success or false on failure.
     */
    function http_request_method_unregister($method)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Check whether request method exists
     * @link http://php.net/manual/en/function.http-request-method-exists.php
     * @param mixed $method <p>
     * request method name or ID
     * </p>
     * @return int true if the request method is known, else false.
     */
    function http_request_method_exists($method)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get request method name
     * @link http://php.net/manual/en/function.http-request-method-name.php
     * @param int $method <p>
     * request method ID
     * </p>
     * @return string the request method name as string on success or false on failure.
     */
    function http_request_method_name($method)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * ETag output handler
     * @link http://php.net/manual/en/function.ob-etaghandler.php
     * @param string $data
     * @param int $mode
     * @return string
     */
    function ob_etaghandler($data, $mode)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.15.0)<br/>
     * Deflate data
     * @link http://php.net/manual/en/function.http-deflate.php
     * @param string $data <p>
     * String containing the data that should be encoded
     * </p>
     * @param int $flags [optional] <p>
     * deflate options
     * </p>
     * @return string the encoded string on success, or NULL on failure.
     */
    function http_deflate($data, $flags = null)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.15.0)<br/>
     * Inflate data
     * @link http://php.net/manual/en/function.http-inflate.php
     * @param string $data <p>
     * string containing the compressed data
     * </p>
     * @return string the decoded string on success, or NULL on failure.
     */
    function http_inflate($data)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Deflate output handler
     * @link http://php.net/manual/en/function.ob-deflatehandler.php
     * @param string $data
     * @param int $mode
     * @return string
     */
    function ob_deflatehandler($data, $mode)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Inflate output handler
     * @link http://php.net/manual/en/function.ob-inflatehandler.php
     * @param string $data
     * @param int $mode
     * @return string
     */
    function ob_inflatehandler($data, $mode)
    {
    }

    /**
     * (PECL pecl_http &gt;= 0.15.0)<br/>
     * Check built-in HTTP support
     * @link http://php.net/manual/en/function.http-support.php
     * @param int $feature [optional] <p>
     * feature to probe for
     * </p>
     * @return int integer, whether requested feature is supported,
     * or a bitmask with all supported features if feature was omitted.
     */
    function http_support($feature = null)
    {
    }


    /**
     * don't urldecode values
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_COOKIE_PARSE_RAW', 1);

    /**
     * whether &quot;secure&quot; was found in the cookie's parameters list
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_COOKIE_SECURE', 16);

    /**
     * whether &quot;httpOnly&quot; was found in the cookie's parameter list
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_COOKIE_HTTPONLY', 32);
    define('HTTP_DEFLATE_LEVEL_DEF', 0);
    define('HTTP_DEFLATE_LEVEL_MIN', 1);
    define('HTTP_DEFLATE_LEVEL_MAX', 9);
    define('HTTP_DEFLATE_TYPE_ZLIB', 0);
    define('HTTP_DEFLATE_TYPE_GZIP', 16);
    define('HTTP_DEFLATE_TYPE_RAW', 32);
    define('HTTP_DEFLATE_STRATEGY_DEF', 0);
    define('HTTP_DEFLATE_STRATEGY_FILT', 256);
    define('HTTP_DEFLATE_STRATEGY_HUFF', 512);
    define('HTTP_DEFLATE_STRATEGY_RLE', 768);
    define('HTTP_DEFLATE_STRATEGY_FIXED', 1024);

    /**
     * don't flush
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_ENCODING_STREAM_FLUSH_NONE', 0);

    /**
     * synchronized flush only
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_ENCODING_STREAM_FLUSH_SYNC', 1048576);

    /**
     * full data flush
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_ENCODING_STREAM_FLUSH_FULL', 2097152);

    /**
     * use &quot;basic&quot; authentication
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_AUTH_BASIC', 1);

    /**
     * use &quot;digest&quot; authentication
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_AUTH_DIGEST', 2);

    /**
     * use &quot;NTLM&quot; authentication
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_AUTH_NTLM', 8);

    /**
     * use &quot;GSS-NEGOTIATE&quot; authentication
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_AUTH_GSSNEG', 4);

    /**
     * try any authentication scheme
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_AUTH_ANY', -1);
    define('HTTP_VERSION_NONE', 0);

    /**
     * HTTP version 1.0
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_VERSION_1_0', 1);

    /**
     * HTTP version 1.1
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_VERSION_1_1', 2);

    /**
     * no specific HTTP protocol version
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_VERSION_ANY', 0);

    /**
     * use TLSv1 only
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SSL_VERSION_TLSv1', 1);

    /**
     * use SSLv2 only
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SSL_VERSION_SSLv2', 2);

    /**
     * use SSLv3 only
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SSL_VERSION_SSLv3', 3);

    /**
     * no specific SSL protocol version
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SSL_VERSION_ANY', 0);

    /**
     * use IPv4 only for name lookups
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_IPRESOLVE_V4', 1);

    /**
     * use IPv6 only for name lookups
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_IPRESOLVE_V6', 2);

    /**
     * use any IP mechanism only for name lookups
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_IPRESOLVE_ANY', 0);

    /**
     * the proxy is a SOCKS4 type proxy
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PROXY_SOCKS4', 4);

    /**
     * the proxy is a SOCKS5 type proxy
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PROXY_SOCKS5', 5);

    /**
     * standard HTTP proxy
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PROXY_HTTP', 0);
    define('HTTP_METH_GET', 1);
    define('HTTP_METH_HEAD', 2);
    define('HTTP_METH_POST', 3);
    define('HTTP_METH_PUT', 4);
    define('HTTP_METH_DELETE', 5);
    define('HTTP_METH_OPTIONS', 6);
    define('HTTP_METH_TRACE', 7);
    define('HTTP_METH_CONNECT', 8);
    define('HTTP_METH_PROPFIND', 9);
    define('HTTP_METH_PROPPATCH', 10);
    define('HTTP_METH_MKCOL', 11);
    define('HTTP_METH_COPY', 12);
    define('HTTP_METH_MOVE', 13);
    define('HTTP_METH_LOCK', 14);
    define('HTTP_METH_UNLOCK', 15);
    define('HTTP_METH_VERSION_CONTROL', 16);
    define('HTTP_METH_REPORT', 17);
    define('HTTP_METH_CHECKOUT', 18);
    define('HTTP_METH_CHECKIN', 19);
    define('HTTP_METH_UNCHECKOUT', 20);
    define('HTTP_METH_MKWORKSPACE', 21);
    define('HTTP_METH_UPDATE', 22);
    define('HTTP_METH_LABEL', 23);
    define('HTTP_METH_MERGE', 24);
    define('HTTP_METH_BASELINE_CONTROL', 25);
    define('HTTP_METH_MKACTIVITY', 26);
    define('HTTP_METH_ACL', 27);

    /**
     * guess applicable redirect method
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_REDIRECT', 0);

    /**
     * permanent redirect (301 Moved permanently)
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_REDIRECT_PERM', 301);

    /**
     * standard redirect (302 Found)
     * RFC 1945 and RFC 2068 specify that the client is not allowed
     * to change the method on the redirected request. However, most
     * existing user agent implementations treat 302 as if it were a 303
     * response, performing a GET on the Location field-value regardless
     * of the original request method. The status codes 303 and 307 have
     * been added for servers that wish to make unambiguously clear which
     * kind of reaction is expected of the client.
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_REDIRECT_FOUND', 302);

    /**
     * redirect applicable to POST requests (303 See other)
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_REDIRECT_POST', 303);

    /**
     * proxy redirect (305 Use proxy)
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_REDIRECT_PROXY', 305);

    /**
     * temporary redirect (307 Temporary Redirect)
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_REDIRECT_TEMP', 307);

    /**
     * querying for this constant will always return true
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SUPPORT', 1);

    /**
     * whether support to issue HTTP requests is given, ie. libcurl support was compiled in
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SUPPORT_REQUESTS', 2);

    /**
     * whether support to guess the Content-Type of HTTP messages is given, ie. libmagic support was compiled in
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SUPPORT_MAGICMIME', 4);

    /**
     * whether support for zlib encodings is given, ie. libz support was compiled in
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SUPPORT_ENCODINGS', 8);

    /**
     * whether support to issue HTTP requests over SSL is given, ie. linked libcurl was built with SSL support
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_SUPPORT_SSLREQUESTS', 32);
    define('HTTP_SUPPORT_EVENTS', 128);

    /**
     * allow commands additionally to semicolons as separator
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PARAMS_ALLOW_COMMA', 1);

    /**
     * continue parsing after an error occurred
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PARAMS_ALLOW_FAILURE', 2);

    /**
     * raise PHP warnings on parse errors
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PARAMS_RAISE_ERROR', 4);

    /**
     * all three values above, bitwise or'ed
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_PARAMS_DEFAULT', 7);

    /**
     * replace every part of the first URL when there's one of the second URL
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_REPLACE', 0);

    /**
     * join relative paths
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_JOIN_PATH', 1);

    /**
     * join query strings
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_JOIN_QUERY', 2);

    /**
     * strip any user authentication information
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_USER', 4);

    /**
     * strip any password authentication information
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_PASS', 8);

    /**
     * strip any authentication information
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_AUTH', 12);

    /**
     * strip explicit port numbers
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_PORT', 32);

    /**
     * strip complete path
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_PATH', 64);

    /**
     * strip query string
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_QUERY', 128);

    /**
     * strip any fragments (#identifier)
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_FRAGMENT', 256);

    /**
     * strip anything but scheme and host
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_URL_STRIP_ALL', 492);
    define('HTTP_URL_FROM_ENV', 4096);

    /**
     * runtime error
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_RUNTIME', 1);

    /**
     * an invalid parameter was passed
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_INVALID_PARAM', 2);

    /**
     * header() or similar operation failed
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_HEADER', 3);

    /**
     * HTTP header parse error
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_MALFORMED_HEADERS', 4);

    /**
     * unknown/invalid request method
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_REQUEST_METHOD', 5);

    /**
     * with operation incompatible message type
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_MESSAGE_TYPE', 6);

    /**
     * encoding/decoding error
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_ENCODING', 7);

    /**
     * request failure
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_REQUEST', 8);

    /**
     * request pool failure
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_REQUEST_POOL', 9);

    /**
     * socket exception
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_SOCKET', 10);

    /**
     * response failure
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_RESPONSE', 11);

    /**
     * invalid URL
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_URL', 12);

    /**
     * querystring operation failure
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_E_QUERYSTRING', 13);

    /**
     * the message is of no specific type
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_MSG_NONE', 0);

    /**
     * request style message
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_MSG_REQUEST', 1);

    /**
     * response style message
     * @link http://php.net/manual/en/http.constants.php
     */
    define('HTTP_MSG_RESPONSE', 2);
    define('HTTP_QUERYSTRING_TYPE_BOOL', 3);
    define('HTTP_QUERYSTRING_TYPE_INT', 1);
    define('HTTP_QUERYSTRING_TYPE_FLOAT', 2);
    define('HTTP_QUERYSTRING_TYPE_STRING', 6);
    define('HTTP_QUERYSTRING_TYPE_ARRAY', 4);
    define('HTTP_QUERYSTRING_TYPE_OBJECT', 5);
}
