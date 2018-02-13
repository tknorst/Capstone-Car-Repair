<!--Facebook API code has been edited from
https://www.codexworld.com/login-with-facebook-using-php/
By CodexWorld Last Updated July 10, 2017 
files: User, facebook_connection, fbConfig, SQL_for_fb-->


<?php
include 'header.php';
    switch($_GET['page']){
        default:
            include 'main.php';
            break;
	}
    include 'footer.php';
?>

