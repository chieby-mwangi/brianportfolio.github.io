<?php

require_once 'partials/leftside.php';
require_once 'api/latestproject.php';
require_once 'partials/smnavbar.php';

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
                            <h1 class="text-gray-700 font-bold md:text-[27px] sm:hidden md:flex xl:flex">✨ Timeline</h1>
                            <h2 class="leading-1 text-base font-normal text-gray-600">Here is what i've been developing</h2>
                            <div class="mt-2 flex flex-col space-y-4">
                                <div class="grid grid-cols-1 gap-3">
                                <?php foreach ($timelines as $timeline): ?>
                                    <a class="flex cursor-pointer flex-col  space-y-2 overflow-hidden rounded-md border bg-white px-3 py-2 hover:bg-gray-100" href="">
                                        <p class="w-fit  rounded-md text-sm font-semibold underline  uppercase text-black">Update</p>
                                        <p class="font-semibold text-gray-800"><?php echo $timeline['title']; ?></p>
                                        <p class="flex-1 text-sm font-normal text-gray-500"><?php echo $timeline['description']; ?></p>
                                        <p class="text-sm uppercase tracking-widest text-gray-800">27 Apr 2024</p>
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