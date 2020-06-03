<?php

function insertStyle($fileName, $__o)
{

    $path = buildFilePath($__o);

    $file = "$path$__o->dir__Styles$fileName.css";

    if (file_exists($file)) {
        echo "<link rel=\"stylesheet\" href=\"$file\">";
    }

    if (__debug__) "Hello";
    if (__debug__) return "<link rel=\"stylesheet\" href=\"$file\">";
    // return false;
}
