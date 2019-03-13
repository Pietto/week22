<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab 3 - validation</title>
    <link rel="stylesheet" type="text/css" href="validatie.css">
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
echo '<h1>De ingevulde gegevens zijn:</h1>';
echo '<p>Naam: ',$_POST["name"],'</p>';
echo '<p>Emailadres: ',$_POST["email"],'</p>';
?>
</body>