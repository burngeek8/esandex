<?php 

 require_once("src/facebook.php");

  $config = array(
      'appId' => '1658190054407453',
      'secret' => '226fd4410c7ad955b8abb8c953ab4804',
      'fileUpload' => false, // optional
      'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
$params = array(
  'scope' => 'read_stream, friends_likes',
  'redirect_uri' => 'http://esandex.joseluisrl.com/facebooklogin/index.php'
);

$loginUrl = $facebook->getLoginUrl($params);

   ?>
   <a href="<?php echo $loginUrl; ?>">Login con facebook</a>
<?php 
	$datos = $facebook->getUser();
 ?>
