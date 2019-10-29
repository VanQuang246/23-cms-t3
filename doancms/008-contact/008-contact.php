<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/demo.less', 'css/demo.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/swiper.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>

    <link href="css/demo.css" rel="stylesheet"/>
    <script src="js/demo.js" type="text/javascript"></script>

    <title>Demo</title>
</head>

<body>
    <footer>
        <div class="container">
    <div class="row folow">
        <div class="col-md-3">
            <div class="kallyas">
                <span style="color: #000000; font-size: 30px; font-family: Poppins; letter-spacing: 10px;">KALLYAS</span>
                <br>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
            </div>
        </div>
        <div class="col-md-2" style="font-size: 11px; line-height: 36px; font-weight: 500; color: #333333;">
            <ul>
                <br>MEN                      
                <br>WOMEN
                <br>LOOKBOOK
                <br>ABOUT
            </ul>
        </div>
        <div class="col-md-2" style="font-size: 11px; line-height: 36px; font-weight: 500; color: #333333;">
            <ul>
                <br>SHOP
                <br>ABOUT
                <br>JOURNAL
                <br>PRESS
                <br>CONTACT
            </ul>
        </div>
        <div class="col-md-2" style="font-size: 11px; line-height: 36px; font-weight: 500; color: #333333;">
            <ul>
                <br>SHOP
                <br>ABOUT
                <br>JOURNAL
                <br>PRESS
                <br>CONTACT
            </ul>
        </div>
        <div class="col-md-3 clo-3">
            <span class="zn-uppercase" style="color: #000000; text-transform: uppercase; font-size: 11px; font-family: 'Josefin Sans';">Subscribe to our newsletter</span>
            <div class="button-ser">
                <input type="text" name="mc_email" class="mail" value="" placeholder="your.address@email.com" required="required">
                <button type="submit" name="submit" class="sub">Subscribe </button>    
            </div>
        </div>

    </div>
</div>
<div class="slogan">
    <center>© 2019 KALLYAS WORDPRESS THEME. ALL RIGHTS RESERVED.</center>
</div>
</footer>
</body>