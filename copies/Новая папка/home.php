<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="common.js"></script>
  <style>
    header ul li, footer ul li {float: left; list-style-type: none; padding-right: 10px;}
    header{margin:0 0 30px 0; background-color: grey; color: white; height: 30px;}
    footer{background-color: #C8D8DE; height: 30px;}
    .current{color: yellow;}
  </style>
</head>
<body>
<?php $page = "home"; ?>
<?php include('header.php'); ?>
<h3><?php echo "hey hey echoed by php"; ?></h3>
<h2>This is Home page</h2>
<section>text <br>text<br>text<br>text<br>text<br>text<br>text<br>text<br>text<br>text</section>
<?php include('footer.php'); ?>
</body>
</html>