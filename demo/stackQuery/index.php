
<!DOCTYPE html>
<html lang="en">
<head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                                        <title>StackQuery</title>
</head>
<body >
<section style="background-image: url('https://i.pinimg.com/originals/bf/61/84/bf61847ef276a7e147731e894d844602.jpg')"  class="bg-cover bg-center flex items-center bg-gray-100 dark:bg-gray-800 lg:h-screen">
    
        <div class="p-4 mx-auto max-w-7xl">
        <label for="product" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Select an option</label>
<div class="flex gap-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
<a href="index.php?name=items" id="item" name="item" >
Items
</a>
<a href="index.php?name=trips" id="trips" name="trips" >
Trips
</a>
<a href="index.php?name=foods" id="foods" name="foods" >
 Foods
</a>
</div>

            <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php
              require 'logic.php';

            ?>
            
            </div>
        </div>
    </section>
                                        
</body>
</html>