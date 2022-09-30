<?php
session_start();

require_once "tailwind.php";

// $_SESSION['user'] = Array("username" => "Warre", "balance" => "1000");

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];

    $username = $user['username'];
    $first2Characters = substr($username, 0, 2);
    $balance = $user['balance'] / 100;
    $username = $user['username'];
    $first2Characters = substr($username, 0, 2);
    $balance = $user['balance'];

    echo "
            <header>
                <nav class='fixed w-screen bg-slate-800 px-4 lg:px-6 py-2.5'>
                    <div class='flex flex-wrap justify-between items-center mx-auto max-w-screen-xl'>
                        <a href='./' class='flex items-center'>
                            <!-- <img src='https://flowbite.com/docs/images/logo.svg' class='mr-3 h-6 sm:h-9' alt='Flowbite Logo' /> -->
                            <span class='self-center text-xl font-bold whitespace-nowrap text-white'>PhPoker</span>
                        </a>
                        <div class='flex items-center lg:order-2'>
                            <div class='bg-slate-900 rounded-full mr-6'>
                                <a href='./balance.php'>
                                    <p class='text-left text-white pl-4 pr-12 py-2'>$" . $balance . "</p>
                                </a>
                            </div>

                            <button type='button' onclick='handleAccountMenu()' class='aspect-square flex mr-3 rounded-full md:mr-0 bg-slate-900 text-white' id='user-menu-button' aria-expanded='false' data-dropdown-toggle='user-dropdown' data-dropdown-placement='bottom'>
                                <span class='p-2'>" . $first2Characters . "</span>
                            </button>
      
                            <div class='absolute w-auto top-14 ml-32 float-right'>
                                <div class='hidden z-50 mt-2 text-white list-none bg-slate-800 rounded divide-y divide-slate-900 shadow' id='user-dropdown'>
                                    <ul class='py-1' aria-labelledby='user-menu-button'
                                        <li>
                                            <a href='./helpdesk.php' class='block py-2 px-4 text-sm text-white'>Helpdesk</a>
                                        </li>
                                        <li>
                                            <a href='#' class='block py-2 px-4 text-sm text-white'>Settings</a>
                                        </li>
                                        <li>
                                            <a href='./logout.php' class='block py-2 px-4 text-sm text-white'>Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1' id='mobile-menu-2'>
                            <ul class='flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0'>
                                <li>
                                    <a href='./higherlower.php' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Higher Lower</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0 '>Game</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        ";
} else {
    echo "
            <header>
                <nav class='fixed w-screen bg-slate-800 px-4 lg:px-6 py-2.5'>
                    <div class='flex flex-wrap justify-between items-center mx-auto max-w-screen-xl'>
                        <a href='./' class='flex items-center'>
                            <!-- <img src='https://flowbite.com/docs/images/logo.svg' class='mr-3 h-6 sm:h-9' alt='Flowbite Logo' /> -->
                            <span class='self-center text-xl font-bold whitespace-nowrap text-white'>PhPoker</span>
                        </a>
                        <div class='flex items-center lg:order-2'>
                            <a href='./login.php' class='text-white font-semibold rounded-lg px-4 lg:px-5 py-1 lg:py-1.5 mr-1 focus:outline-none'>Login</a>
                            <a href='#' class='text-white font-semibold rounded-lg px-4 lg:px-5 py-1 lg:py-1.5 mr-1 focus:outline-none'>Register</a>
            
                            <button data-collapse-toggle='mobile-menu-2' type='button' class='inline-flex items-center p-2 ml-1 text-white rounded-lg lg:hidden'>
                                <svg class='w-6 h-6' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
                                    <path fill-rule='evenodd' d='M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z' clip-rule='evenodd'></path>
                                </svg>
                                <svg class='hidden w-6 h-6' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
                                    <path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path>
                                </svg>
                            </button>
                        </div>
                        <div class='hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1' id='mobile-menu-2'>
                            <ul class='flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0'>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0'>Game</a>
                                </li>
                                <li>
                                    <a href='#' class='block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0 '>Game</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        ";
}
?>

<script>
    function handleAccountMenu() {
        document.getElementById('user-dropdown').classList.toggle("hidden")
    }
</script>