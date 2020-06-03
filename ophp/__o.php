<?php

require_once('helpers/formatVarDump.php');

class O {

    public $gpDir;
    public $_pDir;
    public $_cDir;
    public $gcDir;
    public $w_Dir;
    public $dir__Images;
    public $dir__Styles;
    public $dir__Scripts;
    public $dir__Plugins;
    public $dir__Databases;
    public $dir__Components;

    private function __construct () {
    }

    public static function createOPHPModule($dirDetailsJSON) {

        $selfObject = new self();

        $dirDetails = json_decode($dirDetailsJSON);

        $selfObject->gpDir = $dirDetails->grandParent;
        $selfObject->_pDir = $dirDetails->parent;
        $selfObject->w_Dir = $dirDetails->workingDirectory;
        $selfObject->dir__Images = $dirDetails->dir__Images;
        $selfObject->dir__Styles = $dirDetails->dir__Styles;
        $selfObject->dir__Scripts = $dirDetails->dir__Scripts;
        $selfObject->dir__Plugins = $dirDetails->dir__Plugins;
        $selfObject->dir__Databases = $dirDetails->dir__Databases;
        $selfObject->dir__Components = $dirDetails->dir__Components;

        return $selfObject;

    }

    public static function createOPHPFolder($dirDetailsJSON) {

        $selfObject = new self();

        $dirDetails = json_decode($dirDetailsJSON);

        $selfObject->gpDir = $dirDetails->grandParent;
        $selfObject->_pDir = $dirDetails->parent;
        $selfObject->_cDir = $dirDetails->child;
        $selfObject->gcDir = $dirDetails->grandChild;
        $selfObject->w_Dir = $dirDetails->workingDirectory;
        $selfObject->dir__Images = $dirDetails->dir__Images;
        $selfObject->dir__Styles = $dirDetails->dir__Styles;
        $selfObject->dir__Scripts = $dirDetails->dir__Scripts;
        $selfObject->dir__Plugins = $dirDetails->dir__Plugins;
        $selfObject->dir__Databases = $dirDetails->dir__Databases;
        $selfObject->dir__Components = $dirDetails->dir__Components;

        return $selfObject;

    }

    function component ($fileName) {
        require_once('sources/component.php');
        # returns___ include_once($filePHP); __OR__ include_once($fileHTML);
        insertComponent($fileName, $this);
    }

    function database ($dbAlias, $dbUsername = "", $dbPassword = "") {
        require_once('sources/database.php');
        # returns___ if(__debug__) echo SUCCESS."connected to <code style='color: steelblue'>".$name."</code>";
        connectDB($dbAlias, $dbUsername, $dbPassword);
    }

    function image ($fileName) {
        require_once('sources/filePath.php');
        # returns___ echo $filePath;
        insertFilePath($fileName, $this, $this->dir__Images);
    }

    function script ($fileName) {
        require_once('sources/script.php');
        # returns___ echo "<script src=\"$file\"></script>";
        insertScript($fileName, $this);
    }

    function style ($fileName) {
        require_once('sources/style.php');
        # returns___ echo "<link rel=\"stylesheet\" href=\"$file\">";
        insertStyle($fileName, $this);
    }

    

}

# Helper functions ---------------------------------------------------------- #

require_once('helpers/formatVarDump.php');
require_once('helpers/getPublicRoot.php');
require_once('helpers/buildFilePath.php');