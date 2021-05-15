<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$show_modal = false;
$nameError = "";
$emailError = "";
$questionError = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $post = $_SESSION['postdata'] = $_POST;
  $name = $post['name'];
  $email = $post['email'];
  $question = $post['question'];
  $to      = 'thijskosterman@gmail.com, ca.vd.berg@hotmail.com';
  $subject = 'Contactformulier AcuQiBalans.nl';
  $headers = 'From: info@acuqibalans.nl'       . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

  if (empty($name)) {
    $nameError = "Vul uw naam in";
  }

  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Dit emailadres lijkt niet correct";
  }

  if (empty($email)) {
    $emailError = "Vul uw email in";
  }

  if (empty($question)) {
    $questionError = "Schrijf hier uw vraag/opmerking";
  }

  $show_modal = true;

  if (empty($nameError) && empty($mailError) && empty($questionError)) {
    $message = "Email van: " . $name . " \n\n" .
    "Afzender Email: " . $email . "\n\n\n\n" .
    $question;

    mail($to, $subject, $message, $headers);

    header("Location: /contact.php?suc=cess");
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>
    AcuQibalans
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom -->
  <link rel="stylesheet" href="../includes/css/styles.css">
  <!-- fonts -->
  <link href='https://fonts.googleapis.com/css?family=Lobster Two' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<?php  include 'navbar.php';?>
