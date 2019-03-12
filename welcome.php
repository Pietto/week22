<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab 1 - Welcome</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
    <div id="maindiv">

        <form action="welcome.php" method="post">

        <div id="namediv">
            <h1>Name: </h1><input type="text" name="name"><br>
        </div>

        <div id="maildiv">
            <h1>E-mail: </h1><input type="text" name="email"><br>
        </div>

        <input id='btn' type="submit">
    </div>

    <?

    ?>


    Welcome <? echo $_POST["name"]; ?><br>
    Your email address is: <? echo $_POST["email"]; ?>

</body>