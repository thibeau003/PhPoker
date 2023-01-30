<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete user</title>
</head>

<body class="bg-slate-700">
    <div class="pt-20 text-center text-white">
        <?php
        include "./tailwind.php";
        include "connect.php";
        session_start();
        ?>
        <div class="pt-20 text-center text-white">
            <?php
            
            $stmt = $mysqli->prepare("DELETE FROM tblusers where username ='?'");
            $var = filter_var($_GET['gebruiker'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
            $stmt->bind_param('i', $var);
            $stmt->execute(); 
            $resultaat = $stmt->get_result();
            if ($resultaat) {
                print "Record succesfully deleted.";
            } else {
                print "Error record delete " . $mysqli->error;
            }

            print "<br><a href='./'> go back to the list of users</a>";
            ?>
        </div>
</body>

</html>