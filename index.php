<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hyrni</title>

    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="./src/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="./typed.min.js"></script>
</head>
<body class="bg-white text-black font-poppins">

    <!-- Header -->
    <header class="fixed top-0 left-0 w-full p-12 bg-white bg-opacity-50 backdrop-blur-md flex justify-between items-center z-50">
       <?php include "nav.php"?>
    </header>

    <!-- Home Section -->
    <section class="flex flex-col lg:flex-row justify-center items-center gap-8 min-h-screen pt-28 px-36" id="home">
        <div class="w-full lg:w-1/2 flex justify-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
            <img src="assets/ust.jpeg" alt="" class="rounded-full shadow-lg hover:scale-110 transition duration-500">
        </div>
        <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-offset="200" data-aos-duration="2500">
            <h3 class="text-xl font-bold">Assalamu'alaikum Wr Wb saya</h3>
            <h3 class="text-5xl font-bold">Muhammad Ulul Azmi Askandar al-Abshor</h3>
            <h3 class="text-3xl font-bold">Saya adalah <span id="typing" class="text-green-400"></span></h3>
            <p class="text-lg mt-4" data-aos="fade-left" data-aos-offset="200" data-aos-duration="2500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem pariatur veritatis ratione nesciunt earum deleniti natus.</p>

            <!-- Social Icons -->
            <div class="mt-6 flex space-x-6" data-aos="fade-up" data-aos-duration="1000">
                <a href="https://www.linkedin.com/in/hyrichwan" class="text-green-400 text-4xl hover:text-black transition">
                <i class='bx bxl-youtube' ></i>
                </a>
                <a href="https://www.instagram.com/ahyarrrrrrrrrr/?utm_source=ig_web_button_share_sheet" class="text-green-400 text-4xl hover:text-black transition">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                <a href="https://github.com/Ahyarnur" class="text-green-400 text-4xl hover:text-black transition">
                <i class='bx bxl-facebook'></i>
                </a>
            </div>
        </div>
    </section>


    <section class="flex flex-col lg:flex-row justify-center items-center gap-8 min-h-screen pt-28 px-72" id="home">
        
        <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-offset="200" data-aos-duration="2500">
            <h3 class="text-xl font-bold">Assalamu'alaikum Wr Wb saya</h3>
            <h3 class="text-5xl font-bold">Muhammad Ulul Azmi Askandar al-Abshor</h3>
            <h3 class="text-3xl font-bold">Saya adalah <span id="typing" class="text-green-400"></span></h3>
            <p class="text-lg mt-4" data-aos="fade-left" data-aos-offset="200" data-aos-duration="2500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem pariatur veritatis ratione nesciunt earum deleniti natus.</p>

            <!-- Social Icons -->
            <div class="mt-6 flex space-x-6" data-aos="fade-up" data-aos-duration="1000">
                <a href="https://www.linkedin.com/in/hyrichwan" class="text-green-400 text-4xl hover:text-black transition">
                <i class='bx bxl-youtube' ></i>
                </a>
                <a href="https://www.instagram.com/ahyarrrrrrrrrr/?utm_source=ig_web_button_share_sheet" class="text-green-400 text-4xl hover:text-black transition">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                <a href="https://github.com/Ahyarnur" class="text-green-400 text-4xl hover:text-black transition">
                <i class='bx bxl-facebook'></i>
                </a>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex justify-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
            <img src="assets/ust.jpeg" alt="" class="rounded-full shadow-lg hover:scale-110 transition duration-500">
        </div>
    </section>

    <section class="py-96">
            <!-- Misi Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-4 mt-32">Misi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-14">
                    <!-- Misi 1 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-green-400 transition-colors duration-300">
                        <h3 class="text-xl font-bold mb-2">Misi 1</h3>
                        <p class="text-gray-900">
                            Menyebarkan konten dakwah yang mudah diakses melalui platform digital seperti YouTube, website, dan media sosial.
                        </p>
                    </div>
                    <!-- Misi 2 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-green-400 transition-colors duration-300">
                        <h3 class="text-xl font-bold mb-2">Misi 2</h3>
                        <p class="text-gray-900">
                            Membangun komunitas dakwah yang inklusif dengan mengutamakan pesan-pesan Islam yang sejuk dan damai.
                        </p>
                    </div>
                    <!-- Misi 3 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-green-400 transition-colors duration-300">
                        <h3 class="text-xl font-bold mb-2">Misi 3</h3>
                        <p class="text-gray-900">
                            Menyelenggarakan kegiatan pendidikan dan pelatihan secara online maupun offline untuk meningkatkan pemahaman tentang Islam.
                        </p>
                    </div>
                    <!-- Misi 4 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-green-400 transition-colors duration-300">
                        <h3 class="text-xl font-bold mb-2">Misi 4</h3>
                        <p class="text-gray-900">
                            Berkolaborasi dengan berbagai pihak untuk memperluas jangkauan dakwah ke berbagai lapisan masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
   
    <?php include "footer.php"?>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
