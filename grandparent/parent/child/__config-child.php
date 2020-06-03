<?php

require_once(__DIR__. '/../__config-parent.php');

$grandPDir = 'grandparent';
$parentDir = 'parent';
$childDir = 'child';
$grandCDir = NULL;
$workingDirectory = __DIR__;

# -------------------------------------------------------------------------- #|
# WEB_ROOT                                                                   #|
#  └───GrandParent                                                           #|
#      └───Parent                                                            #|
#          └───Child                                                         #|
#              └───GrandChild                                                #|
# -------------------------------------------------------------------------- #|
# Don't edit $dirDetails array unless you know what you're doing ----------- #|
$gp = $grandPDir; #--------------------------------------------------------- #|
$_p = $parentDir; #--------------------------------------------------------- #|
$_c = $childDir; #---------------------------------------------------------- #| 
$gc = $grandCDir; #--------------------------------------------------------- #|
$dirDetails = [ #----------------------------------------------------------- #|
    "grandParent" => ($grandPDir === NULL) ? NULL : $gp."/",                 #|
    "parent" => ($parentDir === NULL) ? NULL : $_p."/",                      #|
    "child" => ($childDir === NULL) ? NULL : $_c."/",                        #|
    "grandChild" => ($grandCDir === NULL) ? NULL : $gc."/",                  #|
    "workingDirectory" => $workingDirectory,                                 #|
    "dir__Images" => "assets/images/",                                       #|
    "dir__Styles" => "assets/styles/",                                       #|
    "dir__Scripts" => "assets/scripts/",                                     #|
    "dir__Plugins" => "plugins/",                                            #|
    "dir__Databases" => "",                                                  #|
    "dir__Components" => "components/",                                      #|
]; #------------------------------------------------------------------------ #|
$dirDetailsJSON = json_encode($dirDetails); #------------------------------- #|
# -------------------------------------------------------------------------- #|


$___C = O::createOPHPFolder($dirDetailsJSON);