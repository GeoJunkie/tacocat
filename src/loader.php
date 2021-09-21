<?php

error_log('LOADER LOADED');

function tacocat_autoloader( $class )
{
    // Prevent it firing for any other plugins.
    if (strpos($class, 'Tacocat') !== 0 ) {
        return;
    }

    $path = explode('\\',$class
);

    // Get rid of the plugin namespace
    unset($path[0]);

    $path = array_values(
        $path);
    $path = array_map(fn( $item ) => strtolower($item), $path);

    $class_name = array_pop($path);
    $class_name = str_replace('_', '-', $class_name);
    $file_name  = 'class-' . $class_name . '.php';
    $path[]     = $file_name;

    $class_path = implode('/', $path);
    $class_path = TACOCAT_DIR . 'src/' . $class_path;

    include $class_path;
}

spl_autoload_register('tacocat_autoloader');
