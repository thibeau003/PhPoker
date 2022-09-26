<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete user</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "connect.php";
    session_start();
    $sql = "DELETE FROM users where username =" . $_GET['gebruiker'];
    if ($mysqli->query($sql)) {
        print "Record succesfully deleted.";
    } else {
        print "Error record delete " . $mysqli->error;
    }
    $mysqli->close();
    print "<br><a href='./'> go back to the list of users</a>";
    ?>
</body>

</html>