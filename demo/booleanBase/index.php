<?php
require_once "../config/connectByMySQLi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"
        href="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/300582505_457118323100327_5264492577895373431_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=InPEQ7ZBsT0AX8a0OIG&_nc_ht=scontent.fhan2-5.fna&oh=00_AfASMdtDXHBvDXoNHSampgMACiJxHsRrY4Zb-91qH9NOBQ&oe=63F739A5">
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Boolean based</title>
</head>
<body>
<div class="bg-blue-400 h-screen w-screen">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="post">
                            <div class="flex flex-col mt-4">
                                <input id="username" type="text" name="username" class="flex-grow h-8 px-2 border rounded border-grey-400" name="email" value="" placeholder="Username">
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="password" name="password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="password" required placeholder="Password">
                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember" class="text-sm text-grey-dark">Remember Me</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit" name="login" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                    Login
                                </button>
                            </div>
                        </form>
                     
                        <div class="text-center mt-4">
                            <p class="no-underline hover:underline text-blue-dark text-xs">
                                Forgot Your Password?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg flex item-center justify-center" style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80'); background-size: cover; background-position: center center;">
                                        <?php
                                        require "login.php";
                        ?>
</div>
        </div>
    </div>
</div>


    
        

</body>
</html>