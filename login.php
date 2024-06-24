<?php require_once ("includes/db_connect.php"); ?>
<?php include_once ("templates/heading.php") ; ?>
<?php include_once ("templates/nav.php"); ?> 
<style>
    body {
        background-color:  rgb(230, 210, 220);
    }
</style>

<body>
<pr> Please login </pr>
    <form action="" method="post">
    <label for="email">email</label><br>
    <input type="email" id="email" placeholder="email"><br><br>
        <label for="password">password</label><br>
        <input type="password" id="password" placeholder="password"><br><br>

        <input type="button" value="login">
        <style>
            button{
                background-color="orange";
            }
        </style>
    </form>
</body>
