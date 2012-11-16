<?php
// The message
$message = "Line 1\nLine 2\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70);

ini_set('sendmail_from', 'john@example.com');
// Send
mail('john@example.com', 'My Subject', $message);

?>
