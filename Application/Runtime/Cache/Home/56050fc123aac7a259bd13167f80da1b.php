<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload Excel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="/tpt/index.php/Home/Index/upload" enctype="multipart/form-data" method="post" >
        <input type="text" name="name" /><br/>
        <input type='file'  name='file1'><br/>
        <input type="submit" value="提交" ><br/>
    </form>
</body>
</html>