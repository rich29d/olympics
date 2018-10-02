<?php

define('CONSUMER_KEY', 'ioDxSJNLcajcLOTC7Zb7XTeqd');
define('CONSUMER_SECRET', 'J7gdwWdyMF2ATW6Drcw0UMwn7KLVjA04tC5nBUhAMHRSwxaW31');
define('AUTH_REDIR', 'http://www.fireedev.com.br/olympics/v3/share/twitter-post.php');

if(isset($_GET['image'])) {
    define('UPLOAD_IMAGE', $_GET['image']);
    setcookie('image', $_GET['image'], time() + 60 * 10);
} else {
    define('UPLOAD_IMAGE', '');
}

if(isset($_GET['status'])) {
    define('STATUS', $_GET['status']);
    setcookie('status', $_GET['status'], time() + 60 * 10);
} else {
    define('STATUS', "Maratona de Gifs");
}

if(isset($_GET['pers'])) {
    define('PERS', $_GET['pers']);
    setcookie('pers', $_GET['pers'], time() + 60 * 10);
} else {
    define('PERS', "nenhum");
}

if(isset($_GET['id'])) {
    define('ID', $_GET['id']);
    setcookie('id', $_GET['id'], time() + 60 * 10);
} else {
    define('id', "nenhum");
}

if(isset($_GET['id_img'])) {
    define('ID_IMG', $_GET['id_img']);
    setcookie('id_img', $_GET['id_img'], time() + 60 * 10);
} else {
    define('ID_IMG', "nenhum");
}