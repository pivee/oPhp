<?php

function insertFilePath($fileName, $__o, $dir__)
{

    $path = buildFilePath($__o);

    $file = "$path$dir__$fileName";

    if (file_exists($file)) {
        $filePath = $file;
        echo $filePath;
        return;
    }

    echo "404: File not Found";
    return false;
}
