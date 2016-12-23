<?php
  if(isset($_GET['user']) && $_GET['pass']) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    /* connect to the db */
  	$link = mysql_connect('localhost','root','') or die('Cannot connect to the DB');
  	mysql_select_db('empresaxpto',$link) or die('Cannot select the DB');

    $query = "SELECT * from users WHERE username='$user' and password='$pass'";
    $result = mysql_query($query,$link) or die('Errant query:  '.$query);

    $posts = array();
  	if(mysql_num_rows($result)) {
  		while($post = mysql_fetch_assoc($result)) {
  			$posts[] = array('post'=>$post);
  		}
  	}

    header('Content-type: application/json');
		echo json_encode(array('posts'=>$posts));
    @mysql_close($link);
  }
