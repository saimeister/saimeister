<?php
// define variables and initialize with empty values
$nameErr = $addrErr = $emailErr = $howManyErr;
$name = $address = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["name"];
    }

    if (empty($_POST["address"])) {
        $addrErr = "Missing";
    }
    else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    }
if (isset($_POST['submit'])) {
    $to = $_POST['email']; 
    $subject = $_POST['name'];
    $message = getRequestURI();
    $from = "saithemeister@gmail.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
            }
}
}
?>