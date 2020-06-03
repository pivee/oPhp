<?php

require_once('getPublicRoot.php');

function buildFilePath($object)
{

    $publicRoot = getPublicRoot();

    $filePath = $publicRoot;
    $filePath .= $object->gpDir;
    $filePath .= $object->_pDir;
    $filePath .= $object->_cDir;
    if (
        $object->gcDir !== '' ||
        $object->gcDir !== NULL
    ) $filePath .= $object->gcDir;

    return $filePath;
}
