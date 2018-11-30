<?php
include_once('database.php');
	if(isset($_POST['btnsubmit']))
	{
		$page ="result";
	}
	else
	{
		$page = "shoose";
	}
?>
<!DOCTYPE html>
<html >
<head><title>Train</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
<link rel="stylesheet" type="text/css" href="mystyle.css" />
    <style>
#appBody
{
     background-color: #EEEEEE;
    margin: 0 auto;
    height:100%;
    min-height: 100%;
    width: 100%;
    background: url(hool.png), url(toot_toot.png), url(cairoTower.png);
    background-repeat: no-repeat, no-repeat, no-repeat;
    background-size: 80% , 30%, 20%;
    background-position: center, bottom left, bottom right;
}

    </style>
</head>
<body id="appBody" hieght="100%">
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container"> 
            <a href="#" class="navbar-brand" id="nav"> DEEB96</a>
        </div>
        </nav>
    <div class="container" >
    <div class="jumbotron">
        <h2 align="center" id="h1head">EGYPT TRAIN</h2>
        </div>
      <div class="formdiv" align="center"> 
          <?php
                    include($page.".php");
          ?>
      </div>

    </div>
</body>
</html>