<?php
function validatingEmail($email) {
  $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  if (preg_match($emailRegex, $email)) {
    return true;
  } else {
    return false;
  }
}

function sendWelcomeEmail($name, $email) {
  $subject = 'Welcome to ICS 2.2! Account Verification';
  $message = 'Hello ' . $name . ',<br><br>You requested an account on ICS 2.2.<br><br>In order to use the account you need to:<br><a href="http://localhost/ics22/verify.php?email=' . $email . '">Click Here</a><br><br> to complete the registration process.<br><br>Regards,<br>Systems Admin<br>ICS 2.2';
  $headers = 'From: ICS 2.2 <no-reply@example.com>' . "\r\n" .
    'Reply-To: no-reply@example.com' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8';
  if (mail($email, $subject, $message, $headers)) {
    return true;
  } else {
    return false;
  }
}
?>