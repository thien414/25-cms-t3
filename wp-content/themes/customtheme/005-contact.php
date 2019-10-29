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
  <title>module 005</title>
  <meta charset="UTF-8">

</head>

<body>   
    <div class="type-005-contact">
        <h3 class="headline">What's</h3>
        <div class="row ">
            <ul class="tablist">
                <li class="tab01"><a href="#0"><span>NEW ON OPTIC</span></a></li>
                <li class="tab"><a href="#1"><span>TOP</span></a></li>
                <li class="tab"><a href="#2"><span>ON SALE</span></a></li>
            </ul>
        </div>
    </div> 

</body>
</html>                                    
