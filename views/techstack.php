<?php

require_once 'partials/leftside.php';
require_once 'partials/smnavbar.php';
require_once 'api/latestproject.php';
require_once 'api/language.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website">
    <meta name="keywords" content="James Omwoyo, nairobi kenya , Self taught software engineer , developer , full stack developer , frontend developer , backend developer , web and mobile app developer  ">
    <title>my techstack</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
    <div>
        <div class="relative flex flex-col md:flex-row">
            <?php 
              displayLeftSide();
            ?>
             <?php 
              smnavbar();
            ?>
            <div class="mx-auto flex w-full max-w-screen-md overflow-y-auto px-3 py-8">
                <div class="w-full">
                    <div class="mx-auto flex w-full flex-col justify-center md:max-w-screen-sm">
                        <div class="flex flex-col space-y-5">
                            <h1 class="text-gray-700 font-bold md:text-[27px] sm:hidden md:flex xl:flex">🧑‍💻 My Tech Stack</h1>
                            <h2 class="leading-1 text-base font-normal text-gray-600">These technologies form the core of my tech life</h2>
                            <div class="mt-2 flex flex-col space-y-4">
                            <div class="grid grid-cols-1 gap-3 md:grid-cols-4">
                              <?php foreach ($languages as $language): ?>
                                <a class="flex h-full cursor-pointer  flex-col space-y-2 overflow-hidden rounded-sm border bg-white px-3 py-2 hover:bg-gray-200 md:h-auto" href="">
                                    <p class="font-semibold px-5 text-gray-800"><?php echo $language['title']; ?></p>
                                    <p class="flex-1 text-sm px-8 font-normal text-gray-500"><?php echo $language['svg']; ?></p>
                                    
                                </a>
                                <?php endforeach; ?>
                            </div>
                            <h2 class="leading-1 text-base font-normal text-gray-600">In addition I also use</h2>

                            <div class="grid grid-cols-1 gap-3">
                                <?php foreach ($additions as $addition): ?>
                                    <a class="flex cursor-pointer flex-col  space-y-2 overflow-hidden rounded-md border bg-white px-3 py-2 hover:bg-gray-100" href="">
                                        <p class="font-semibold text-gray-800"><?php echo $addition['title']; ?></p>
                                        <p class="flex-1 text-sm flex  font-normal text-gray-700"><?php echo $addition['svg']  . '-- ' . $addition['desc']; ?></p>
                                    </a>
                                    <?php endforeach; ?>
                                    </div>
                        </div>
</div>
</div>
</div>
            </div>
        </div>
    </div>
</body>
</html>