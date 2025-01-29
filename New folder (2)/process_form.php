<?php
// process_form.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];
  $coins = $_POST["coins"];

  // Validate data
  if ($password != $confirm) {
    echo "Passwords do not match";
    exit;
  }

  // Save data to txt file
  $data = $name . "," . $email . "," . $password . "," . $coins . "\n";
  $file = fopen("login_data.txt", "a");
  fwrite($file, $data);
  fclose($file);

  echo "Data saved to login_data.txt";
}
?>
