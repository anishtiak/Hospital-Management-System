<?php
 $user=$_POST['id'];
 $pass=$_POST['pass'];
 if($user=='ishtiak'&&$pass='12345'){
 	echo '        <script type="text/javascript">
            window.location.href = "buttonform.html"
        </script>';
 } else {
	echo '<script language="javascript">';
	echo 'alert("Wrong Id or password")';
	echo '</script>';
	echo '<a href=login.html>Wrong pass</a>';
 }