<?php

# TODO: Move the following definition to `__config.php` if you are regularly 
# switching between virtual hosting and basic addressing during development.
# Try using 5 or 4 instead of 2 as offset when using basic addressing.
define('getPublicRoot_PATH_OFFSET', 2);

function getPublicRoot ()
{
  $self = $_SERVER['PHP_SELF'];
  $self = explode('/', $self);
  $root = '';
  for ($i = count($self); $i > getPublicRoot_PATH_OFFSET; $i--) {
    $root .= '../';
  }
  return $root;
}