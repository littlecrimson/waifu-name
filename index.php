<?php

/*

Crafted by kiirin

inspired by :

https://raw.githubusercontent.com/vsec7/Your-Waifu-of-Name

*/



include("src/db.php");
error_reporting(0);
$c = $data[shuffle($data)];
if(isset($_GET["name"])){
?>


<html>
<head>
    <title>Waifu <?= $_GET["name"]; ?> <?= $c[0]." ".$c[1]; ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="Waifu <?= $_GET["y"]; ?> adalah <?= $c[0]." ".$c[1]; ?>" />
    <meta property="og:image" content="<?= $c[2]; ?>" />
    <meta property="og:description" content="YourWaifu" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    </head>
    
<body>
    
    <div class="title">
        <h1>Waifumu</h1>
    </div>    
    
    <div class="box">
        <div class="box-child">
            <img src="<?= $c[2] ?>">
            <div class="name">
            <span class="first-name"><?= $c[0] ?></span>
            <span class="last-name"><?= $c[1] ?></span>
        </div>
        </div>
        
        <div class="container">
            <div class="share">
                <p>Share : </p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=yoursite.com">
                    <span class="fa fa-facebook-square">
                    <p>Facebook</p>
                </span>
                </a>
            </div>
        </div>
    </div>
</body>

<?php }else{
	echo '<div align="center">';
    echo "<p>Isi nama dulu ya !!!!<p>";
	echo "<p>yoursite.com/namakamu</p>";
	echo '<div>';
    }?>
</html>