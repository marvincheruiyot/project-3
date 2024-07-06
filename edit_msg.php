<?php include_once("templates/heading.php") ; 
require_once("includes/db2_connect.php");
?>
<body style="background-color:  rgb(230, 210, 220);">
  <?php include_once ("templates/nav.php"); ?>
    <marquee style="color: black;" class="blink">
      <h2>Marvin car Dealership and Rental</h2>
    </marquee>
  <?php

$userid=$_GET["userid"];
$spot_msg ="SELECT * FROM users WHERE userid = 'userid' LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);


  if(isset($_POST["update_message"])){
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $userid = mysqli_real_escape_string($conn, $_POST["userid"]);

    $update_message = "UPDATE hire SET fullname='$fullname', 
    email='$email',subject='$subject', message='$message' WHERE userid='$userid' LIMIT 1";


    if ($conn->query($update_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $update_message . "<br>" . $conn->error;
    }
}
?>


<div class="row">
    <div class="content">
    <div class="side-bar">
    <h1>update message</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="fullname" name="fullname" required ><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email" required ><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject" id="sb" required> value="<?php print $spot_msg_row["subject"];?>">
            <option value="<?php print $spot_msg_row["subject"];?>"><?php print $spot_msg_row["subject"];?></option>
            <option value="Car hiring">Car hiring</option>
            <option value="car purchase">car purchase</option>
            <option value="Bamma tours">bamma tours</option>
        </select><br><br>

        <label for="sb">Message:</label><br>
        <textarea name="message" id="" cols="30" rows="5" required value="<?php print $spot_msg_row["message"];?>"></textarea><br><br>
       
        <input type="submit" name="update_message" value="update Message">
        <input type="hidden" name="userid" value="<?php print $spot_msg_row["userid"];?>">
    </form>