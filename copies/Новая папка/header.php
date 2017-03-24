<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    header ul li {float: left; list-style-type: none; padding-right: 10px;}
    header a{text-decoration: none; color: white;}
    header{margin:0 0 30px 0; background-color: grey; color: white; height: 30px;}
    .active{color: orange;}
  </style>
</head>
<body>
<header>
  <ul>
    <li><a href="home.php" class="<?php echo ($page == 'home' ? 'active':'');?>">Home</a></li>
    <li><a href="about.php" class="<?php echo ($page == 'about' ? 'active':'');?>">About</a></li>
    <li><a href="products.php" class="<?php echo ($page == 'products' ? 'active':'');?>">Produtcts</a></li>
  </ul>
</header>
</body>
</html>