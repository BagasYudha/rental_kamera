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
            <div class="md:mt-36 z-10">
                <h3 class="text-2xl">Selamat datang di</h3>
                <h1 class="font-semibold text-8xl" style="background: linear-gradient(to right, #4F46E5, #02CCFE); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent; ">KaryCam!</h1>
                <p class="mt-3 text-xl">
                    Kami merupakan perusahaan jasa rental kamera <br>
                    yang didirikan oleh Adi Alam, Bagas Yudha, Bintang Raka, <br>
                    dan Muhammand Miftahul Karim.
                </p>
            </div>
            <!-- div gambar -->
            <div class="absolute right-[-300px]">
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

    <!-- CONTAIN 2 -->
    <section id="Contact" class="px-[50px] mt-[600px] z-10">
        <div class="font-semibold text-6xl text-black">
            <h1 class="">Ada Project ?</h1>
            <h1 class="mt-3">Konsultasi peralatan ?</h1>
            <h1 class="mt-3">Mau sewa gear produksi ?</h1>
            <h1 class="mt-3">Atau ngajak mimin ngopi ?</h1>
        </div>
        <!-- Footer Start -->
        <footer class="mt-24 mb-16 flex bottom-0 ">
            <div class="flex items-center z-10 ">
                <!-- Contact -->
                <div class="flex border-r-[5px] border-r-[#8152FB] w-[250px]">
                    <a href="https://wa.me/6281331571129" target="_blank">
                        <div class="flex items-center ">
                            <i class="bordertext-black w-16 h-16 text-black hover:text-[#25d366]" data-feather="message-circle"></i>
                            <div class="mx-3 w-40 items-center text-xl font-medium text-black hover:text-[#8152FB]">
                                <h3>Kalo mau chat klik disini!</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Contact End -->

                <!-- Location -->
                <div class="ml-4 flex border-r-[5px] border-r-[#8152FB] w-[250px] ">
                    <a href="https://maps.app.goo.gl/yJyt7GwZaoZVRmHs7?g_st=ic" target="_blank" class="">
                        <div class="flex items-center ">
                            <i class="bordertext-black w-16 h-16 text-black hover:text-red-600" data-feather="map-pin"></i>
                            <div class="mx-3 w-40 items-center text-xl font-medium text-black hover:text-[#8152FB]">
                                <h3>Mau ketemu mimin?</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Location End -->

                <!-- Instagram  -->
                <div class="ml-4 flexs w-[250px] z-10">
                    <a href="https://www.instagram.com/instagram?igsh=MXcycjNmZTFmcW4ycQ==" target="_blank" class="">
                        <div class="flex items-center ">
                            <i class="bordertext-black w-16 h-16 text-black hover:text-[#ee2a7b]" data-feather="instagram"></i>
                            <div class="mx-3 w-40 items-center text-xl font-medium text-black hover:text-[#8152FB]">
                                <h3>Mau stalk yaa?</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Instagram End -->
            </div>
            <!-- Footer Image -->
            <div class="absolute right-[-300px] w-[800px] h-auto">
                <div class="">
                    <img src="Media/Lens-foot.png" alt="Gambar kamera" class="top-0 -z-10">
                    </span>
                </div>
            </div>

            <!-- Footer Image End-->
        </footer>
        <!-- Footer End -->
    </section>
    <!-- CONTAIN 2 END -->
    <script>
        feather.replace();
    </script>
</body>


</html>