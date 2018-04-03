<?php
session_start();//using session again
session_unset();//unset all current sessions
session_destroy();//all session removed
header("Location:loginregister.php");//redirect to login page

 ?>
