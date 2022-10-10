<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="bg-slate-700">
    <?php
    require_once "./header.php";
    require_once "./connect.php";

    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = hash("sha256", $_POST["password"]);

        $query = "SELECT `user_id`, `username`, `email`, `balance`, `admin`, `join_date` FROM `tblusers` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "';";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();

        print_r($row);

        if (empty($row)) {
            header("location: ./login.php?wrongcredentials");
            exit();
        }
        if ($row['admin'] == '1') {
            $_SESSION['admin'] = $row['admin'];
        }

        $_SESSION["user"] = $row;
        header("location: ./");
    }
    ?>

    <div class="h-screen w-screen flex justify-center items-center text-white">
        <div class="h-1/2 w-1/3 bg-slate-800 rounded-xl">
            <form class="h-full flex flex-col justify-between mx-5" method="POST">
                <h1 class="font-bold text-4xl text-center mt-5">Login</h1>

                <div class="w-full">
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
                    if (isset($_GET["wrongcredentials"])) {
                        echo "<p class='text-center text-red-400 mt-5'>Wrong credentials</p>";
                    }
                    ?>
                </div>


                <button class="bg-slate-700 rounded-xl p-2 mb-5" type="submit" name="login">Log in</button>
            </form>
        </div>

    </div>
</body>

</html>