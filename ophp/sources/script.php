<?php

function insertScript($fileName, $__o)
{

    $path = buildFilePath($__o);

    $file = "$path$__o->dir__Scripts$fileName.js";

    if (file_exists($file)) {
        echo "<script src=\"$file\"></script>";
    }

    return false;
}
