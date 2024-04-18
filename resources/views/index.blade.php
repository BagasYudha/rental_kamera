<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | KaryCam</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body class="font-['Poppins'] w-full overflow-x-hidden">

    <!-- NAVBAR -->
    <div class="fixed w-full z-10">
        @include('navbar')
    </div>
    <!-- NAVBAR END -->

    <!-- CONTAIN 1 -->
    <section id="Home" class="pt-32 px-[50px]">
        <div class="flex w-full">
            <!-- div teks -->
            <div class="">
                <h3 class="">Selamat datang di</h3>
                <h1 class="font-bold text-6xl text-zinc-600">KaryCam</h1>
                <p>
                    Kami merupakan perusahaan jasa rental kamera <br>
                    yang didirikan oleh Adi Alam, Bagas Yudha, Bintang Raka, <br>
                    dan Muhammand Miftahul Karim.
                </p>
            </div>
            <!-- div gambar -->
            <div class="absolute right-[-400px]">
                <div class="relative">
                    <img src="Media/imageadminlogin.png" alt="Gambar kamera" class="top-0 z-1">
                    <span class="absolute top-0 w-full -z-10">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full">
                            <g transform="scale(1)"> <!-- Tambahkan transformasi skala di sini -->
                                <path fill="#02CCFE" d="M61.1,-17.4C69.3,5.2,59.1,36.3,37,52.7C15,69.1,-18.9,70.8,-37.7,56.1C-56.6,41.4,-60.5,10.3,-51.7,-13.3C-42.9,-36.8,-21.4,-52.7,2.5,-53.5C26.5,-54.4,53,-40.1,61.1,-17.4Z" transform="translate(100 100)" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
    </section>
    <!-- CONTAIN 1 END -->

    <!-- CONTAIN 2 -->
    <section>
        <div>
        </div>
    </section>
</body>
<!-- CONTAIN 2 END -->

</html>