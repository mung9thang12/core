<?php
return [

    'namespace'=>'Mung9thang12',

    'providers' => [
        \Mung9thang12\Admin\Providers\AdminServiceProvider::class,
        \Mung9thang12\Permission\PermissionServiceProvider::class,
        \Mung9thang12\Repository\RepositoryServiceProvider::class,
        // \Mung9thang12\Asset\Providers\AssetServiceProvider::class,
    ],
    'aliases' => [],
    'root_path'=>'flatform'
];
