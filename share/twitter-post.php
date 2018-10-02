<?php

session_start();
if(isset($_GET['denied']))  {
$_SESSION["status"]=false;
header('Location:../index.php');

}


require_once('twitteroauth-master/autoload.php');
require_once('twitter-config.php');

use Abraham\TwitterOAuth\TwitterOAuth;

$oauthVerifier = $_REQUEST['oauth_verifier'];
$oauthToken = $_COOKIE['oauth_token'];
$oauthTokenSecret = $_COOKIE['oauth_token_secret'];

$connection = new TwitterOAuth(CONSUMER_KEY, 
                                CONSUMER_SECRET,
                                $oauthToken,
                                $oauthTokenSecret);

$retAccessToken = $connection->oauth('oauth/access_token', 
                                    ['oauth_verifier' => $oauthVerifier]);

$accessToken = $retAccessToken['oauth_token'];
$accessTokenSecret = $retAccessToken['oauth_token_secret'];

$connection = new TwitterOAuth(CONSUMER_KEY,
                                CONSUMER_SECRET,
                                $accessToken,
                                $accessTokenSecret);

$connection->setTimeouts(30, 30);

$mediaURL = (isset($_COOKIE['image']) ? $_COOKIE['image'] : UPLOAD_IMAGE);
$media = $connection->upload('media/upload', ['media' => $mediaURL]);

$params = [
    'status' => (isset($_COOKIE['status']) ? $_COOKIE['status'] : STATUS),
    'media_ids' => $media->media_id_string
];

$result = $connection->post('statuses/update', $params);

setcookie('image', null, time() - 3600);
setcookie('status', null, time() - 3600);
setcookie('oauth_token', null, time() - 3600);
setcookie('oauth_token_secret', null, time() - 3600);

if($connection->getLastHttpCode() == 200) {
	$_SESSION["status"]=true;
	$_SESSION["pers"]=$_COOKIE['pers'];
	$_SESSION["id"]=$_COOKIE['id'];
	$_SESSION["id_img"]=$_COOKIE['id_img'];
	setcookie('pers', null, time() - 3600);
	setcookie('id', null, time() - 3600);
	setcookie('id_img', null, time() - 3600);

	
	//retirar o comentario quando for para o ambiente real
	/*
	define('HOST', 'localhost:52827');
	define('USER', 'userDO6');
	define('PASS', '5hphBUWguugkOHo6');
	define('DB', 'maratona');
	
	$conn = mysqli_connect(HOST, USER, PASS, DB);
	
	$id=$_SESSION["id"];
	$sql = "SELECT *FROM website_competitor_shares WHERE competitor_id='$id'";
	$query = mysqli_query($conn, $sql);
	$resposta = mysqli_fetch_array($query);
	$total = $resposta['total'];
	$total +=1;
	$sql = "UPDATE shakes SET total='$total' WHERE competitor_id='$id'";
	if(mysqli_query($conn, $sql)){
		print 'Contabilizado';
	}
	*/
	
    header('Location: ../index.php');	
} else {
	setcookie('pers', null, time() - 3600);
    header('Location: ./?status=error&code=' . $connection->getLastHttpCode());
}