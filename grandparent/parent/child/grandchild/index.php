<?php

require_once('__config-grandchild.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grandchild</title>
    <?php $__GC->style('main'); ?>
</head>
<body>
    <h1>Test</h1>
    <img src="<?php $__GC->image('tree.png'); ?>" alt="">
</body>
</html>