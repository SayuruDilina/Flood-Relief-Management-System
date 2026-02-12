<?php
session_start();
session_unset();      // remove session variables
session_destroy();    // destroy session completely

echo json_encode(["status"=>"ok","message"=>"Logged out"]);
exit();
?>