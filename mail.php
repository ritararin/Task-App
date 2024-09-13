<?php
function validatingEmail($email) {
  $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  if (preg_match($emailRegex, $email)) {
    return true;
  } else {
    return false;
  }
}
?>