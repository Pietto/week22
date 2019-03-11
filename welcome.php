<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab 1 - Welcome</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
    <div id="maindiv">
        <div id="namediv">
            <h1>Name</h1>
            <input type="text" name="name" />
        </div>

        <div id="maildiv">
            <h1>Email</h1>
            <input>
        </div>
        <button onclick="function go()">button</button>
    </div>

    <?php
    $firstname = $_GET['name'];

    function go(){
        echo '<h1>i did it!</h1>';
    }
    ?>

</body>
