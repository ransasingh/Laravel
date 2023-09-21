<?php
session_start();
if(isset($_session['username'])){
    echo "welcome" . $_session['username'];
     echo "<br> your password is " . $_session['password'];
}
else {
  echo   "please login to continour";
}


?>