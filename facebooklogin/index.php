<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('src/facebook.php');

  $config = array(
    'appId' => '1658190054407453',
    'secret' => 'bd67f5f51919c05be828564e546e1e6d',
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();


?>
<html>
  <head>
  	<meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
  </head>
  <body>
  <?php
    if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        $user_profile = $facebook->api('/me','GET');
        // Obtener álbumes 
		$albums = $facebook->api('/me/albums');
		//var_dump($albums);
			foreach($albums['data'] as $album)
			{
			        // get all photos for album
			        $photos = $facebook->api("/{$album['id']}/photos");
			        foreach($photos['data'] as $photo)
			        {
			                echo "<img src='{$photo['source']}' />", "<br />";
			        }
			}
        //var_dump($user_profile);
        echo "id: ".$user_profile['id']."</br>";
        echo "Name: " . $user_profile['name'];

        //foto de perfil
        $fotoPerfil = "</br><img src='http://graph.facebook.com/".$user_profile['id']."/picture?type=large'/>";
        echo $fotoPerfil;
        

      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
         $params = array(
		  'scope' => 'user_photos ',
		  'redirect_uri' => 'https://www.myapp.com/post_login_page'
		);
        $login_url = $facebook->getLoginUrl(); 
        echo 'Please <a href="' . $login_url . '">login.</a>';
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
    	 $params = array(
		  'scope' => 'user_photos ',
		  'redirect_uri' => 'https://www.myapp.com/post_login_page'
		);
      $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';

    }

  ?>

  </body>
</html>