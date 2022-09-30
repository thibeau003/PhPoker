<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin users panel</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    session_start();
    $sql = "select * from users";
    $resultaat = $mysqli->query($sql);
    print "<table>";
    while ($row = $resultaat->fetch_assoc()) {
        print "<tr><td>" . $row['username'] . "</td><td><a href= 'deleteUser.php?gebruiker=" . $row['username'] . "'> delete user </tr>";
    }
    print "</table>";
    print "<a href='index.php'> go back to the main page</a>";
    ?>
</body>

</html>