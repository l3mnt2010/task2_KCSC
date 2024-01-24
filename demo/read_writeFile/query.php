<?php
require_once "../config/connectdb.php";

if (isset($_GET['name'])) {
    global $conn;  
    $name = $_GET['name'];
    
     $sql = "SELECT * FROM $name";
    $product_query = mysqli_query($conn, $sql);
    
    if ($product_query) {
        while ($row = mysqli_fetch_assoc($product_query)) {
            echo '
                <div class="mt-56 bg-white rounded shadow dark:bg-gray-700">
                    <div class="relative z-20 p-6 group">
                        <div class="relative block h-64 mb-4 -mt-56 overflow-hidden rounded -top-full ">
                            <img class="object-cover w-full h-full transition-all group-hover:scale-110"
                                src="' . $row['image'] . '" alt="">
                            <div class="absolute flex flex-col top-4 right-4">
                                <!-- Wishlist and Cart buttons here -->
                            </div>
                        </div>
                        <a href="#">
                            <h2 class="mb-2 text-xl font-bold text-black dark:text-white">
                                ' . $row['name'] . '
                            </h2>
                        </a>
                        <p class="mb-3 text-lg font-bold text-blue-500 dark:text-blue-300 ">
                            <span>$' . $row['sale'] . '.00</span>
                            <span class="text-xs font-semibold text-gray-400 line-through ">$' . $row['price'] . '.00</span>
                        </p>
                        <div class="flex gap-1 text-orange-400">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star" viewBox="0 0 16 16">
                   <path
                       d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
               </svg>
           </div>
                    </div>
                    
                </div>
            ';
        }
    } else {
        echo '<p class="font-bold text-center mt-48 text-xl">Invalid name or your hack me!!!</p>';
    }
}
?>
