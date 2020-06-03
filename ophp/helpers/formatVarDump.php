<?php

# Until a better alternative to var_dump is built...
function qwe ($object, $objectName = "")
{
  $fontFamily = "
  Roboto Mono, Consolas, monospace
  ";
  $fontSize = "
  9pt
  ";
  $tableStyle = "
  margin: 5px;
  padding: 5px 10px 10px;
  display: inline-block;
  border-radius: 4px;
  font-family: $fontFamily;
  font-size: $fontSize;
  background-color: whitesmoke;
  box-shadow: 0 0 5px grey;
  ";
  $headingStyle = "
  color: seagreen;
  font-weight: bold;
  ";
  $bodyStyle = "
  color: steelblue;
  font-family: $fontFamily;
  letter-spacing: 1px;
  line-height: 20pt;
  ";
  echo "<table style=\"$tableStyle\">";
  echo "<tr style=\"$headingStyle\"><td>$objectName</td></tr>";
  echo "<tr><td><pre style=\"$bodyStyle\">";
  var_dump($object);
  echo "</pre></td></tr></table>";
}