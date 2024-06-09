<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-[#E8FFFB] font-['Poppins']">

    <!-- NAVBAR -->
    <nav class="px-2 md:px-5 font-['Poppins'] justify-between items-center flex w-full h-12 md:h-20 bg-[#e8fffb67] backdrop-blur-sm border-b-[1px] md:border-white">
        <a href="/adminlog" class="justify-start w-32 md:w-56 h-full bg-cover flex items-center bg-center" style="background-image: url('Media/Logo-hitam.png')"></a>
        <div class="flex md:hidden">
            <button id="menu-btn" class="text-black focus:outline-none pr-2 md:pr-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div id="menu" class="hidden md:flex justify-end w-full h-full items-center font-sans md:space-x-4">
            <a href="/" class="link font-bold px-3 py-2 mx-3">Beranda</a>
            <a href="/rental" class="link font-bold px-3 py-2 mx-3">Rental</a>
            <a href="/#Contact" class="link font-bold px-3 py-2 mx-3">Hubungi Kami</a>
        </div>
    </nav>

    <!-- DROPDOWN MENU FOR MOBILE -->
    <div id="dropdown-menu" class="hidden md:hidden absolute left-0 right-0 bg-[#e8fffb67] backdrop-blur-sm border-b-[1px] border-white flex flex-col text-sm items-center z-10">
        <a href="/" class="link font-bold px-6 py-2 mx-3 w-full text-end">Beranda</a>
        <a href="/rental" class="link font-bold px-6 py-2 mx-3 w-full text-end">Rental</a>
        <a href="/#Contact" class="link font-bold px-6 py-2 mx-3 w-full text-end">Hubungi Kami</a>
    </div>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');
        const dropdownMenu = document.getElementById('dropdown-menu');

        menuBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>