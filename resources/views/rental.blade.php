<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental | KaryCam</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-[#E8FFFB] font-['Poppins'] w-full overflow-x-hidden">

    <!-- NAVBAR -->
    <div class="fixed w-full z-20">
        @include('navbar')
    </div>
    <!-- NAVBAR END -->

    <!-- CONTAIN 1 -->
    <section id="Home" class="pt-32 px-[50px]">
        <div class="flex w-full">
            <!-- div teks -->
            <div class="md:mt-14 z-10 fixed w-1/3">
                <h3 class="text-xl">Selamat datang di</h3>
                <h1 class="font-semibold text-6xl" style="background: linear-gradient(to right, #4F46E5, #02CCFE); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent; ">KaryCam!</h1>
                <p class="mt-3 text-lg">
                    Kamu lagi butuh alat apa nih?<br>
                    Kayanya ada disini!<br>
                </p>

                <!-- Menu -->
                <div class="mt-2 font-bold text-black flex-wrap">
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block  border-2 border-[#8152fb] hover:text-[#8152FB] rounded-full p-1 px-6">Kamera</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-6">Lensa</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-6">Lightning</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-6">Tripod</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-6">Aksesoris</h1>
                    </a>
    
                </div>
                <!-- Menu End  -->

            </div>
            <!-- div gambar -->
            <div class="absolute right-[-300px] mt-[-30px]">
                <div class="relative">
                    <img src="Media/imageadminlogin.png" alt="Gambar kamera" class="top-0 z-1">
                    <span class="absolute top-0 w-full -z-10">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full">
                            <g transform="scale(1)">
                                <path fill="#02CCFE" d="M61.1,-17.4C69.3,5.2,59.1,36.3,37,52.7C15,69.1,-18.9,70.8,-37.7,56.1C-56.6,41.4,-60.5,10.3,-51.7,-13.3C-42.9,-36.8,-21.4,-52.7,2.5,-53.5C26.5,-54.4,53,-40.1,61.1,-17.4Z" transform="translate(100 100)" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
    </section>
    <!-- CONTAIN 1 END -->

</body>

</html>