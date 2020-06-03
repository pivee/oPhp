<?php

function insertComponent($fileName, $__o)
{

    $publicRoot = getPublicRoot();

    $filePHP = "$publicRoot$__o->gpDir$__o->_pDir$__o->dir__Components$fileName.php";

    qwe($filePHP);

    if (file_exists($filePHP)) {
        echo "<!-- <o> " . strtoupper($fileName) . " -->\n";
        include_once($filePHP);
        echo "\n";
        echo "<!-- </> " . strtoupper($fileName) . " -->\n";
        return;
    }

    $fileHTML = "$publicRoot$__o->gpDir$__o->_pDir$__o->dir__Components$fileName.html";

    if (file_exists($fileHTML)) {
        echo "<!-- " . strtoupper($fileName) . " -->";
        include_once($fileHTML);
        echo "\n";
        return;
    }

    echo "404: File not found.";
    return false;
}
