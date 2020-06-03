<?php

# Databases -------------------------------------------------------------------

## Configuration ------------------------------------------

define("SERVERNAME", "localhost");

define("DB_01_NAME", "bestxsof_public");
define("DB_01_USER", "root");
define("DB_01_PASS", "");

define("DB_02_NAME", "office_db");
define("DB_02_USER", "root");
define("DB_02_PASS", "");

## Connection ---------------------------------------------

// ConnectDB( string "public" | "office" | $dbname, [string $user, string $pass, string $name] );

# =============================================================================

class Database
{
    private $server, $user, $pass, $name;

    function __construct($server, $user, $pass, $name)
    {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;
    }

    function connection()
    {
        #### Create Database Connection
        $conn = new mysqli($this->server, $this->user, $this->pass, $this->name);
        #### Check Database Connection
        if ($conn->connect_error) {
            die("Connection failed: $conn->connect_error");
        }
        mysqli_query($conn, "SET NAMES UTF8");
        return $conn;
    }
}

function connectDB($name, $user = "", $pass = "")
{
    $db = $name;
    $db_arr = getDBConfig($db);

    $user = ($db_arr['user'] == NULL) ? $user : $db_arr['user'];
    $pass = ($db_arr['pass'] == NULL) ? $pass : $db_arr['pass'];
    $name = ($db_arr['name'] == NULL) ? $name : $db_arr['name'];
    #### Create Database Object
    $db = new Database(SERVERNAME, $user, $pass, $name);
    #### Create Connection
    $conn = $db->connection();
    if(__debug__) echo OKAY."connected to <code style='color: steelblue'>".$name."</code>";
    return $conn;
}

function getDBConfig($db)
{
    switch ($db) {
        case "public":
            if (defined("DB_01_NAME")) {
                $db_arr = array(
                    'user' => DB_01_USER,
                    'pass' => DB_01_PASS,
                    'name' => DB_01_NAME,
                );
            }
            break;
        case "office":
            if (defined("DB_02_NAME")) {
                $db_arr = array(
                    'user' => DB_02_USER,
                    'pass' => DB_02_PASS,
                    'name' => DB_02_NAME,
                );
            }
            break;
        default:
            $db_arr = array(
                'user' => NULL,
                'pass' => NULL,
                'name' => NULL,
            );
            break;
    }
    return $db_arr;
}
