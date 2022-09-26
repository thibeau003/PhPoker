<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk</title>
</head>

<body class="bg-slate-700">
    <?php
    require_once "./header.php";
    require_once "./connect.php";

    if (!isset($_SESSION["user"])) {
        header("location: ./");
    }

    if (isset($_POST["sendmessage"])) {
        $userId = $_SESSION["user"]["user_id"];
        $typeOfProblem = $_POST["problem"];
        $message = $_POST["message"];

        $query = "INSERT INTO `tblhelpdesk` (`user_id`, `type_problem`, `message`) VALUES ('$userId', '$typeOfProblem', '$message');";
        $result = $mysqli->query($query);

        header("location: ./helpdesk.php?messagesend");
    }
    ?>

    <div class="h-screen w-screen flex justify-center items-center text-white">
        <div class="h-1/2 w-1/3 bg-slate-800 rounded-xl">
            <form class="text-center h-full flex flex-col justify-between mx-5" method="POST">
                <div>
                    <h1 class="font-bold text-4xl text-center mt-5">Helpdesk</h1>
                    <p class="text-gray-500 text-center mt-5">Fill out the form below and send us a message. We will reply as soon as possible!</p>
                </div>

                <div>
                    <label for="problem">Problem</label>
                    <br>
                    <select class="bg-slate-700 rounded-xl w-full text-center" name="problem" id="problem" required>
                        <option></option>
                        <option value="account">Problem with account</option>
                        <option value="technical">Technical problem</option>
                        <option value="question">Question about game</option>
                    </select>
                </div>

                <div>
                    <div>
                        <label for="message">Message</label>
                        <br>
                        <textarea id="message" name="message" class="bg-slate-700 w-full resize-none rounded-xl" rows="4" cols="50" required></textarea>
                    </div>



                    <?php
                    if (isset($_GET["messagesend"])) {
                        echo "<p class='text-center text-green-400 mt-5'>Message sent!</p>";
                    }
                    ?>
                </div>


                <button class="bg-slate-700 rounded-xl p-2 mb-5" type="submit" name="sendmessage">Send message</button>
            </form>
        </div>

    </div>
</body>

</html>