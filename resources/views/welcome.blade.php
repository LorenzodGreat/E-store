<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Site Name</title>
</head>

<body>
    <x-main.navbar />
    <x-main.promo />
    <x-main.cards />
    <div class="" style="background-color:#E5E708">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-black sm:text-4xl">
                <span class="block">Get Help Now.</span>
                <span class="block">Seek The Repairs Needed To Fix Your Favorite Phone.</span>
            </h2>
            <p style="color: #e74c1c" class="mt-4 text-lg leading-6 text-indigo-200">Need to fix your phone today contact
                us now and get it done no problem just contact us urgently with your request.</p>
            <a href="#"
                class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-black hover:bg-red-500 sm:w-auto">
                Fix Phone Today </a>
        </div>
    </div>
    <x-main.newest />
    <x-main.footer />
    <script>
        AOS.init();
    </script>
</body>

</html>
