<?php include_once("templates/heading.php") ; ?>
<?php include_once ("templates/nav.php"); ?> 
<style>
    body {
        background-color:  rgb(230, 210, 220);
    }
</style>

<body>
    <pr>
        You are required to fill in the folling
    </pr> <br><br>
    <form action="" method="post">

        <label for="fn">fullname</label><br>
        <input type="text" id="fn" placeholder="fullname"><br><br>

        <label for="id">idnumber</label><br>
        <input type="text" id="id" placeholder="idnumber"><br><br>

        <label for="num">age</label><br>
        <input type="number" id="num" placeholder="number"><br><br>

        <label for="email">email</label><br>
        <input type="email" id="email" placeholder="email"><br><br>

        <label for="date">date</label><br>
        <input type="date" id="date" placeholder="date"><br><br>

        <label for="hiring hours">hiring hours</label><br>
        <input type="hiring hours" id="hiring hours" placeholder="number"><br><br>

        <label for="car type">car type</label><br>
        <input type="car type" id="car type" placeholder="name"><br><br>

        <input type="time" placeholder="deadline "><br><br>

        <input type="checkbox" id="checkbox">
        <label for="Swahili">Swahili</label><br>

        <input type="checkbox" id="checkbox">
        <label for="Swahili">chinese</label><br>

        <input type="checkbox" id="checkbox">
        <label for="Swahili">french</label><br>

        <input type="checkbox" id="checkbox">
        <label for="japanese">japanese</label><br>

        <input type="checkbox" id="checkbox">
        <label for="English">English</label><br><br>

        <label for="freeform">Tell us the car descriptions you want to hire or purshase</label>
<br>

<textarea id="freeform" name="freeform" rows="4" cols="50">
Enter text here...
</textarea> <br>

        <input type="button" value="save details">
        <input type="button" value="save other details">






    </form>
</body> 
