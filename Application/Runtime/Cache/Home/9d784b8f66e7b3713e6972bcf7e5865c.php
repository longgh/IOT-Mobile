<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>中移物联网</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/Public/Application/Home/Tool/css/Redirect.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <?php echo ($msg); ?>
        </div>
        <div class="small-title m-b-md">
            正在为您跳转
        </div>
    </div>
</div>
</body>

<div style="display:none">
    <div class="time"><?php echo ($time); ?></div>
    <div class="url"><?php echo ($url); ?></div>
</div>

<script src="/Public/Common/js/jquery.min.js"></script>
<script src="/Public/Application/Home/Tool/js/Redirect.js"></script>
</html>