<?php
setcookie("currentRow", "", time() + (86400), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhPoker | Towers</title>  

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-700">
    <?php
        include './header.php';
        include './connect.php';
    ?>

    <?php

        if(isset($_POST['profit'])){
            $sql = "UPDATE tblusers SET balance = balance + " . $_POST['profit'] . " WHERE user_id = " . $_SESSION['user']['user_id'];
            $resultaat = $mysqli->query($sql);
            $_SESSION['user']['balance'] += round($_POST['profit'],2);


            echo "
                <div class='container mx-auto pt-20'>
                    <p class='text-center text-xl font-semibold text-white'>Towers</p>
                
                    <div class='mt-10 w-2/3 mx-auto'>
                        <div class=''>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                            <div class='flex flex-row h-auto my-1'>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                    <p class=''>$0.00</p>
                                </button>
                            </div>
                        </div>

                        <div class='mt-6 '>
                            <form action='' method='POST'>
                                <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='text-white w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                            </form>
                        </div>
                    </div>
                </div>

                <script>                    
                    $.ajax('./updateUserSession.php?user_id=". $_SESSION['user']['user_id'] ."', {
                        success: function(data) {
                            document.getElementById('balanceText').textContent = '$". round($_SESSION['user']['balance'] / 100, 2) ." '
                        },
                        error: function() {
                            alert('There was some error performing the AJAX call!');
                        }
                    });
                </script>
            ";

        
        } else {
            if(isset($_POST['towersBettingAmount']) || (isset($_SESSION['playingTowers']) && $_SESSION['playingTowers'] == 1)){
                if(isset($_SESSION['user'])){
                    if(isset($_POST['towersBettingAmount'])){
                        $amount = $_POST['towersBettingAmount'] * 100;

                        if($_SESSION['user']['balance'] >= $amount){
                            $_SESSION['playingTowers'] = 1;
                            $_SESSION['user']['balance'] -= $amount;
                            $_SESSION['currentWinningTowers'] = 0;
                            $_SESSION['betTowers'] = $amount;
    
                            $sql = "UPDATE tblusers SET balance = balance - " . $amount . " WHERE user_id = " . $_SESSION['user']['user_id'];
                            $resultaat = $mysqli->query($sql);
    
                            echo "
                                <div class='container mx-auto pt-20'>
                                    <p class='text-center text-xl font-semibold text-white'>Towers</p>
                                
                                    <div class='mt-10 w-2/3 mx-auto'>
                                        <div class=''>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(91)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='91'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(92)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='92'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(93)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='93'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(81)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='81'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(82)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='82'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(83)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='83'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(71)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='71'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(72)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='72'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(73)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='73'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(61)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='61'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(62)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='62'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(63)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='63'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(51)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='51'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(52)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='52'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(53)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='53'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(41)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='41'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(42)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='42'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(43)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='43'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(31)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='31'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(32)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='32'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(33)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='33'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(21)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='21'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(22)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='22'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(23)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='23'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(11)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='11'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(12)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='12'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(13)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800' disabled>
                                                    <p id='13'>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button onclick='onClickColumn(01)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p id='01'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(02)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p id='02'>$0.00</p>
                                                </button>
                                                <button onclick='onClickColumn(03)' class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p id='03'>$0.00</p>
                                                </button>
                                            </div>
                                        </div>
            
                                        <div class='mt-6 '>
                                            <div class='w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                                <p class='text-white w-full text-center'>$". $amount / 100 ."</p>
                                            </div>
                                            <form method='post'>
                                                <input type='hidden' name='profit' id='profit' value='0'>
                                                <input type='submit' id='stopGame' value='Current winnings: $". $_SESSION['currentWinningTowers'] / 100 ."' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            ";
    
                            $kolomsTowers = array (
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1),
                                array(1, 1, 1)
                            );
    
                            for($i = 0; $i < 10; $i++){
                                $kolomsTowers[$i][rand(0,2)] = 0;
                            }
    
                            $_SESSION['currentValuesTowers'] = $kolomsTowers;
                            $_SESSION['currentRowTowers'] = 0;
                                 
                            $rowValueTowers = array (
                                0,
                                0,
                                0,
                                0,
                                0,
                                0,
                                0,
                                0,
                                0,
                                0,
                            );

                            echo "                    
                                <script>
                                    document.getElementById('balanceText').textContent = '$' + ". $_SESSION['user']['balance'] ." / 100
                                    
                                    const kolomIds = [['01', '02', '03'], ['11', '12', '13'], ['21', '22', '23'], ['31', '32', '33'], ['41', '42', '43'], ['51', '52', '53'], ['61', '62', '63'], ['71', '72', '73'], ['81', '82', '83'], ['91', '92', '93']]
                                    
                                    for(let i = 0; i < 10; i++){
                                        for(let j = 0; j <= 2; j++) {
                                            value = ". $_SESSION['betTowers'] ." * Math.pow(1.20, (i+1))
                                            document.getElementById(kolomIds[i][j].toString()).textContent = '$' + Math.round(value) / 100
                                        }        
                                    }
                                </script>
                                ";
                            ?>
                                <script>
                                    function onClickColumn(columnId){
                                        if(columnId > 10){
                                            const clickedColumn = document.getElementById(columnId)
                                            const valuesTower = <?php echo json_encode($_SESSION['currentValuesTowers']) ?>


                                            if (valuesTower[clickedColumn.id.charAt(0)][clickedColumn.id.charAt(1)] == 0){
                                                <?php $_SESSION['currentRowTowers'] = 0 ?>
                                                <?php $_SESSION['playingTowers'] = 0 ?>
                                                <?php $_SESSION['currentWinningTowers'] = 0 ?>

                                                document.getElementById((clickedColumn.id.charAt(0) + '1')).parentElement.disabled = true;
                                                document.getElementById((clickedColumn.id.charAt(0) + '2')).parentElement.disabled = true;
                                                document.getElementById((clickedColumn.id.charAt(0) + '3')).parentElement.disabled = true;

                                                clickedColumn.style.backgroundColor = "red"

                                                document.getElementById('profit').value = 0
                                                document.getElementById('stopGame').value = 'Game Over'
                                            } else {
                                                const currentWinnings = <?php echo $_SESSION['betTowers'] ?> * Math.pow(1.20, parseInt(clickedColumn.id.charAt(0)) + 1)
                                        
                                                clickedColumn.style.backgroundColor = "green"

                                                document.getElementById('profit').value = currentWinnings
                                                    
                                                $.ajax('./updateWinningsTowers.php?currentWinnings=' + currentWinnings, {
                                                    success: function(data) {
                                                        document.getElementById('stopGame').value = 'Current winnings: $' + Math.round(currentWinnings) / 100
                                                    },
                                                    error: function() {
                                                        alert('There was some error performing the AJAX call!');
                                                    }
                                                });

                                                for(let i = 1; i <= 3; i++){
                                                    document.getElementById((clickedColumn.id.charAt(0) + i)).parentElement.disabled = true;
                                                    document.getElementById((parseInt(clickedColumn.id.charAt(0)) + 1) + "" + i).parentElement.disabled = false;
                                                }
                                            }

                                        } else {
                                            const clickedColumn = document.getElementById('0' + columnId)
                                            const valuesTower = <?php echo json_encode($_SESSION['currentValuesTowers']) ?>

                                            if (valuesTower[0][columnId-1] == 0){
                                                <?php $_SESSION['currentRowTowers'] = 0 ?>
                                                <?php $_SESSION['playingTowers'] = 0 ?>
                                                <?php $_SESSION['currentWinningTowers'] = 0 ?>

                                                document.getElementById('01').parentElement.disabled = true;
                                                document.getElementById('02').parentElement.disabled = true;
                                                document.getElementById('03').parentElement.disabled = true;

                                                clickedColumn.style.backgroundColor = "red"
                                                document.getElementById('profit').value = 0
                                                document.getElementById('stopGame').value = 'Game Over'
                                            } else {
                                                const currentWinnings = <?php echo $_SESSION['betTowers'] ?> * 1.20
                                              
                                                clickedColumn.style.backgroundColor = "green"
                                                    
                                                document.getElementById('profit').value = currentWinnings

                                                $.ajax('./updateWinningsTowers.php?currentWinnings=' + currentWinnings, {
                                                    success: function(data) {
                                                        document.getElementById('stopGame').value = 'Current winnings: $' + currentWinnings / 100
                                                    },
                                                    error: function() {
                                                        alert('There was some error performing the AJAX call!');
                                                    }
                                                });
                                                
                                                document.getElementById('01').parentElement.disabled = true;
                                                document.getElementById('02').parentElement.disabled = true;
                                                document.getElementById('03').parentElement.disabled = true;

                                                document.getElementById('11').parentElement.disabled = false;
                                                document.getElementById('12').parentElement.disabled = false;
                                                document.getElementById('13').parentElement.disabled = false;
                                            }
                                        }
                                    }
                                </script>
                            <?php
                        } else {
                            $_SESSION['currentWinningTowers'] = 0;
                            echo "
                                <div class='container mx-auto pt-20'>
                                    <p class='text-center text-xl font-semibold text-white'>Towers</p>
                                
                                    <div class='mt-10 w-2/3 mx-auto'>
                                        <div class=''>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                            <div class='flex flex-row h-auto my-1'>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                                <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                    <p class=''>$0.00</p>
                                                </button>
                                            </div>
                                        </div>
        
                                        <div class='mt-6 '>
                                            <form action='' method='POST'>
                                                <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='text-white w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                                <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                            </form>
                                            <p class='text-red-500 mt-1'>You cant't bet more than your current balance.</p>
                                        </div>
                                    </div>
                                </div>
                            ";    
                        }
                    }
                    
                } else {
                    $_SESSION['currentWinningTowers'] = 0;
                    echo "
                        <div class='container mx-auto pt-20'>
                            <p class='text-center text-xl font-semibold text-white'>Towers</p>
                        
                            <div class='mt-10 w-2/3 mx-auto'>
                                <div class=''>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                </div>

                                <div class='mt-6 '>
                                    <form action='' method='POST'>
                                        <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='text-white w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                        <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                    </form>
                                    <p class='text-red-500 mt-1'>You should be logged in to play.</p>
                                </div>
                            </div>
                        </div>
                    ";
                }
            } else {
                $_SESSION['currentWinningTowers'] = 0;
                echo "
                    <div class='container mx-auto pt-20'>
                        <p class='text-center text-xl font-semibold text-white'>Towers</p>
                    
                        <div class='mt-10 w-2/3 mx-auto'>
                            <div class=''>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                            </div>

                            <div class='mt-6 '>
                                <form action='' method='POST'>
                                    <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='text-white w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                    <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
       }
    ?>

    
</body>
</html>