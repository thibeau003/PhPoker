<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user data</title>
</head>

<body class="bg-slate-700">
    <?php
    require_once "./header.php";
    require_once "./connect.php";


    if (isset($_POST["settings"])) {

        if (!empty($_POST["username"])) {
            $sql = "UPDATE tblusers SET username = '" . $_POST["username"] . "' WHERE user_id = " . $_SESSION['user']['user_id'];
            $resultaat = $mysqli->query($sql);
        }
        if (!empty($_POST["email"])) {

            $sql = "UPDATE tblusers SET email = '" . $_POST["email"] . "' WHERE user_id = " . $_SESSION['user']['user_id'];
            $resultaat = $mysqli->query($sql);
        }
        if (!empty($_POST["password"])) {

            $sql = "UPDATE tblusers SET password = '" . hash("sha256", $_POST["password"]) . "' WHERE user_id = " . $_SESSION['user']['user_id'];
            $resultaat = $mysqli->query($sql);
        }
    } else {
        header("Location: ./");
    }


    ?>

    <div class="h-screen w-screen flex justify-center items-center text-white">
        <div class="h-1/2 w-1/3 bg-slate-800 rounded-xl">
            <form class="h-full flex flex-col justify-between mx-5" action="./settings.php" method="POST">
                <h1 class="font-bold text-4xl text-center mt-5">Edit user settings</h1>

                <div class="w-full">
                    <div class="w-3/4 mx-auto">
                        <label for="username">Username</label>
                        <br>
                        <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" id="username" name="username">
                    </div>

                    <br>

                    <div class="w-3/4 mx-auto">
                        <label for="email">Email</label>
                        <br>
                        <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" type="email" id="email" name="email">
                    </div>

                    <br>

                    <div class="w-3/4 mx-auto">
                        <label for="password">Password</label>
                        <br>
                        <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" type="password" id="password" name="password">
                    </div>

                    <?php
                    if (!empty($_POST["username"])) {
                        echo "<p class='text-center text-green-400 mt-5'>Your username has been changed.</p>";
                    }
                    if (!empty($_POST["email"])) {
                        echo "<p class='text-center text-green-400 mt-5'>Your email has been changed.</p>";
                    }
                    if (!empty($_POST["password"])) {
                        echo "<p class='text-center text-green-400 mt-5'>Your password has been changed.</p>";
                    }
                    ?>

                </div>


                <button class="bg-slate-700 rounded-xl p-2 mb-5" type="submit" name="settings">change</button>

                <a href="./">
                    <p class="bg-slate-700 rounded-xl p-2 mb-5 w-1/6 text-center">Go back</p>
                </a>
            </form>
        </div>

    </div>
</body>

</html>