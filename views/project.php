<?php

require_once 'partials/leftside.php';
require_once 'partials/smnavbar.php';
require_once 'api/latestproject.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website">
    <meta name="keywords" content="James Omwoyo, nairobi kenya , Self taught software engineer , developer , full stack developer , frontend developer , backend developer , web and mobile app developer  ">
    <title>My timeline</title>
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
                            <h1 class="text-gray-700 font-bold md:text-[27px] sm:hidden md:flex xl:flex">🚧 Projects</h1>
                            <h2 class="leading-1 text-base font-normal text-gray-600">Here's are some of my projects</h2>
                            <div class="mt-2 flex flex-col space-y-4">

                            <div class="grid grid-cols-1 gap-3">
                            <?php foreach ($projectpages as $projectpage): ?>
                                <a target="_blank" class="flex h-[200px] cursor-pointer flex-col items-center space-x-4 rounded-md  border  hover:bg-gray-200 md:h-[180px] md:flex-row md:border-none " href="<?php echo $projectpage['url']; ?>">
                                    <div class="h-full w-full rounded-md bg-cover bg-center md:w-1/3" style="background-image:url(images/<?php echo $projectpage['img']; ?>)">
                                </div>
                                <div class="flex w-full flex-col items-start space-y-2 p-2">
                                    <div class="flex items-center space-x-2 text-xl font-semibold text-gray-800">
                                        <img src="images/<?php echo $projectpage['img']?>;" class="w-5" alt="">
                                        <div><?php echo $projectpage['title']; ?></div>
                                    </div>
                                    <p class="flex-1 text-sm font-normal text-gray-500"><?php echo $projectpage['description']; ?></p>
                                    <p class="text-sm uppercase underline  tracking-widest text-gray-500"><?php echo $projectpage['date']; ?></p>
                                </div>
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