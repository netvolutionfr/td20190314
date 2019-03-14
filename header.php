<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grid System tutorial from BootstrapBay.com">
    <meta name="author" content="BootstrapBay.com">
    <title>BootstrapBay Tutorial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Mon site</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li<?php if (basename($_SERVER['REQUEST_URI'])=='index.php') { ?> class="active"<?php } ?>><a href="index.php">Accueil</a></li>
                <li<?php if (basename($_SERVER['REQUEST_URI'])=='page1.php') { ?> class="active"<?php } ?>><a href="page1.php">Page 1</a></li>
                <li<?php if (basename($_SERVER['REQUEST_URI'])=='page2.php') { ?> class="active"<?php } ?>><a href="page2.php">Page 2</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Themes <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Admin & Dashboard</li>
                        <li><a href="#">Admin 1</a></li>
                        <li><a href="#">Admin 2</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Portfolio</li>
                        <li><a href="#">Portfolio 1</a></li>
                        <li><a href="#">Portfolio 2</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
