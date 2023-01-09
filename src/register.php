<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body class="bg-slate-700">
    <?php
    require_once "./header.php";
    require_once "./connect.php";

    if (isset($_POST["login"])) {
        $user = strtolower($_POST['user']);
        $email = $_POST["email"];
        $password = hash("sha256", $_POST["password"]);

        
        $sqluser = "SELECT username FROM tblusers WHERE username='".$user."'";
        $resultuser = $mysqli->query($sqluser);
        $sqlemail = "SELECT email FROM tblusers WHERE email='".$email."'";
        $resultemail = $mysqli->query($sqlemail);

        if (mysqli_num_rows($resultuser) == 0 && mysqli_num_rows($resultemail) == 0) {
            $sql = "INSERT INTO tblusers (username, email, password) VALUES ('".$user."', '".$email."', '".$password."')";
            $resultsql = $mysqli->query($sql);
            $query = "SELECT `user_id`, `username`, `email`, `balance`, `admin`, `join_date` FROM `tblusers` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "';";
            $result = $mysqli->query($query);
            $row = mysqli_fetch_assoc($result);

            $_SESSION["user"] = $row;
            header("location: ./index.php");
        } else if (mysqli_num_rows($resultuser) > 0) {
            header("Location: ./register.php?useduser");
            exit();
        } else if (mysqli_num_rows($resultemail) > 0) {
            header("Location: ./register.php?usedemail");
            exit();
        }

    }
    ?>

    <div class="h-screen w-screen flex justify-center items-center text-white">
        <div class="h-1/2 w-1/3 bg-slate-800 rounded-xl">
            <form class="h-full flex flex-col justify-between mx-5" method="POST">
                <h1 class="font-bold text-4xl text-center mt-5">Register</h1>

                <div class="w-full">
                    <div class="w-3/4 mx-auto">
                        <label for="password">Username</label>
                        <br>
                        <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" type="text" id="user" name="user" required>
                    </div>
                    
                    <br>
                    
                    <div class="w-3/4 mx-auto">
                        <label for="email">Email</label>
                        <br>
                        <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" type="email" id="email" name="email" required>
                    </div>

                    <br>

                    <div class="w-3/4 mx-auto">
                        <label for="password">Password</label>
                        <br>
                        <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" type="password" id="password" name="password" required>
                    </div>

                    <?php
                    if (isset($_GET["useduser"])) {
                        echo "<p class='text-center text-red-400 mt-5'>Username taken</p>";
                    }

                    if (isset($_GET["usedemail"])) {
                        echo "<p class='text-center text-red-400 mt-5'>Email taken</p>";
                    }

                    ?>
                </div>


                <button class="bg-slate-700 rounded-xl p-2 mb-5" type="submit" name="login">Register</button>
            </form>
        </div>

    </div>
</body>

</html>