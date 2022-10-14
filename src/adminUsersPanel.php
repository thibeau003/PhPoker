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
    ?>
    <div class="h-screen w-screen flex justify-center items-center text-white">
        <div class="h-1/2 w-1/3 bg-slate-800 rounded-xl">
            <div class="text-center text-white">
                <?php
                $sql = "select * from tblusers";
                $resultaat = $mysqli->query($sql);
                print "<table align='center'>";
                while ($row = $resultaat->fetch_assoc()) {
                    print "<tr align='center'><td align='center'>" . $row['username'] . "</td><td><a href= 'deleteUser.php?gebruiker=" . $row['username'] . "'>  delete user </tr>";
                }
                print "</table>";
                print "<a href='./index.php'> go back to the main page</a>";
                ?>
            </div>
        </div>
</body>

</html>