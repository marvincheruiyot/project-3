<?php include_once("templates/heading.php") ; 
require_once("includes/db2_connect.php");
?>
<body style="background-color:  rgb(230, 210, 220);">
  <?php include_once ("templates/nav.php"); ?>
    <marquee style="color: black;" class="blink">
      <h2>Marvin car Dealership and Rental</h2>
    </marquee>
    <h1 style="background-color: azure;">Contact Us</h1>
    <div class="container">
      <div class="image">
        <img src="https://www.searchenginejournal.com/wp-content/uploads/2022/08/contact-us-2-62fa2cc2edbaf-sej.png" width="50%" ;>
      </div>
      <style>img {
  float: right;
  border: 1px dotted black;
  margin: 0px 0px 15px 20px;
}
</style>
  <?php
  if(isset($_POST["send_message"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $insert_message = "INSERT INTO hire (fullname, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')";

    if ($conn->query($insert_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>


<div class="row">
    <div class="content">
    <div class="side-bar">
    <h1>Talk to Us</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="fullname" name="fullname" required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email" required><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject" id="sb" required>
            <option value="">--Select Subject--</option>
            <option value="Car hiring">Car hiring</option>
            <option value="car purchase">car purchase</option>
            <option value="Bamma tours">bamma tours</option>
        </select><br><br>

        <label for="sb">Message:</label><br>
        <textarea name="message" id="" cols="30" rows="5" required></textarea><br><br>
       
        <input type="submit" name="send_message" value="Send Message">
    </form>