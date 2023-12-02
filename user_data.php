<?php
// Include your database connection code here
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'));

  // Extract user data
  $facebookId = $data->facebook_id;
  $fb_name = $data->fb_name;
  $fb_email = $data->fb_email;
  $fb_password = data->fb_password;

  // Perform database insertion (you should sanitize and validate data)
  $query = "INSERT INTO admin_accounts (facebook_id, fb_name, fb_email, fb_password) VALUES ('$facebookId', '$fb_name', '$fb_email', '$fb_password')";

  if (mysqli_query($con, $query)) {
    // Data inserted successfully
    echo json_encode(['success' => true]);
  } else {
    // Error in database insertion
    echo json_encode(['success' => false]);
  }
}