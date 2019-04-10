<?php
include('process_login.php');
session_destroy();
echo "Logging out.................";
header('refresh:2;url=index.php');

?>