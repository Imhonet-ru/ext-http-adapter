<?php

// Start of http v.1.6.6

class HttpException extends Exception
{
    public $innerException;
}

class HttpRuntimeException extends HttpException
{
}

class HttpInvalidParamException extends HttpException
{
}

class HttpHeaderException extends HttpException
{
}

class HttpMalformedHeadersException extends HttpException
{
}

class HttpRequestMethodException extends HttpException
{
}

class HttpMessageTypeException extends HttpException
{
}

class HttpEncodingException extends HttpException
{
}

class HttpRequestException extends HttpException
{
}

class HttpRequestPoolException extends HttpException
{
}

class HttpSocketException extends HttpException
{
}

class HttpResponseException extends HttpException
{
}

class HttpUrlException extends HttpException
{
}

class HttpQueryStringException extends HttpException
{
}
