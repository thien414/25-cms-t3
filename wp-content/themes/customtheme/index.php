


<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);




?>
<!DOCTYPE html>

<html>
<head>
    <title>Trang Chu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet"  />
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo $url_path ?>/css/331.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
    <script src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $url_path ?>/js/331.js"></script>
</head>

<body>   
    <div class="container">
                <?php  include'009-contact.php'; ?>
        
    </div>


</body>
</html>