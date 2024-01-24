<?php
require_once "../config/connectdb.php";

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
    <title>Error based</title>
</head>
<body class="flex item-center justify-center" style="background: url('https://i.pinimg.com/originals/bf/61/84/bf61847ef276a7e147731e894d844602.jpg'); background-size: cover; background-position: contain; background-repeat: no-repeat;">
<div
  class="container mt-40 max-w-md mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow overflow-hidden"
>
  <div class="relative hidden xl:block xl:w-1/2 h-full">
    <img
      class="absolute h-auto w-full object-cover"
      src="https://images.unsplash.com/photo-1541233349642-6e425fe6190e"
      alt="my zomato"
    />
    <?php
    require "login.php";
 ?>
  </div>
  <div class="w-full xl:w-1/2 p-8">
    <form method="post">
      <h1 class=" text-2xl font-bold">Sign in to your account</h1>
      <div>
        <span class="text-gray-600 text-sm">
          Don't have an account?
        </span>
        <span class="text-gray-700 text-sm font-semibold">
          Sign up
        </span>
      </div>
      <div class="mb-4 mt-6">
        <label
          class="block text-gray-700 text-sm font-semibold mb-2"
          htmlFor="username"
        >
          Username
        </label>
        <input
          class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"
          id="username"
          name="username"
          type="text"
          placeholder="Your username"
        />
      </div>
      <div class="mb-6 mt-6">
        <label
          class="block text-gray-700 text-sm font-semibold mb-2"
          htmlFor="password"
        >
          Password
        </label>
        <input
          class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
          id="password"
          type="password"
          name="password"
          placeholder="Your password"
        />
        <p
          class="inline-block align-baseline text-sm text-gray-600 hover:text-gray-800"
        >
          Forgot Password?
        </p>
      </div>
      <div class="flex w-full mt-8">
        <button
          name="login"
          class="w-full bg-gray-800 hover:bg-grey-900 text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10"
          type="submit"
        >
          Log In
        </button>
      </div>
    </form>
  </div>
</div>



    
        

</body>
</html>