<?php

if (!function_exists('getConfigName')) {
    function getConfigName($path)
    {
        $array=explode('/',$path);
        $file_config=array_pop($array);
        return explode('.',$file_config)[0];
    }
}

if (!function_exists('getUrl')) {
    function getUrl()
    {
        return request()->path();
    }
}
