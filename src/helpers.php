<?php

if (!function_exists('getNameFileConfig')) {
    function getNameFileConfig($path_config)
    {
        $file_config = explode('/', $path_config);
        return array_pop($file_config);
    }
}
