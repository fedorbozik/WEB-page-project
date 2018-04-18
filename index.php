<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fedor's reviews</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
</head>
    <?php 
        if(isset($_GET['stranka']) || isset($_GET['jazyk'])){
            $stranka = $_GET['stranka'];
            $jazyk = $_GET['jazyk'];
        }else{
            $stranka = "";
            $jazyk = "";
        }
        include('php_include_html/logo.html');
        include('body.php');
    ?>
</html>