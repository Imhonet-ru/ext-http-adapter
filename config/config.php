<?php

namespace Imhonet\Ext_Http_Adapter\Config;

defined('Imhonet\Ext_Http_Adapter\Config\DISABLE') or define('Imhonet\Ext_Http_Adapter\Config\DISABLE', extension_loaded('http') && 2 > (new \ReflectionExtension('http'))->getVersion());
