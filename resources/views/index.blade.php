<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raja Hafiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-yEmhQsfdpV8qEC+YOdBYKnQ4E6P7c1Il/qxrYY6Kkn4EU5gD9jvcA+YHhA7C8hW7sRI1vJ5ouL+AV/qZwA3z1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        .banner-image {
            background-image: url('{{ asset('img2/Asset 1.png') }}');
            /* Ganti dengan jalur gambar Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: left;
        }

        .banner-text {
            color: #fff;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .banner-image {
                justify-content: center;
                height: 100vh;
            }

            .banner-image {
                background-position: left center;
                /* Mengatur posisi gambar ke kiri tengah */
            }

            .banner-text {
                text-align: center;
                padding: 10px;
            }

            .banner-text h4,
            .banner-text h1 {
                font-size: 1.2rem;
            }

            .banner-text a {
                display: block;
                margin: 10px auto;
            }
        }

        .bottom-left-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 100%;
            font-weight: 300;
        }

        .bottom-left-text .col {
            padding: 0 10px;
        }

        .bottom-left-text .col i {
            margin-right: 8px;
        }

        .contact-info {
            display: flex;
            align-items: center;
        }

        .contact-info div {
            margin-right: 15px;
        }

        .contact-info span {
            display: block;
        }

        :root {
            --primary-color: #111317;
            --primary-color-light: #1f2125;
            --primary-color-extra-light: #35373b;
            --secondary-color: #1fdd63;
            --secondary-color-dark: #1fdd63;
            --text-light: #d1d5db;
            --white: #ffffff;
            --max-width: 1200px;
        }

        span {
            color: #1fdd63;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--primary-color);
            color: var(--text-light);
        }

        .portfolio-item {
            margin: 20px 0;
            padding: 20px;
            background-color: var(--primary-color-light);
            border-radius: 8px;
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }

        .portfolio-item h2 {
            font-size: 1.5rem;
            margin-top: 10px;
            color: var(--white);
        }

        .portfolio-item p {
            margin-top: 10px;
            color: var (--text-light);
        }

        .about-section {
            margin-top: 5rem;
            margin-bottom: 1rem;
            background-color: var(--primary-color-light);
            border-radius: 8px;
            padding: 5rem;
            padding-top: 6rem;
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
        }


        .about-section .hello {
            padding: 1rem;
            border-radius: 8px;
        }

        .about-section .about-text {
            padding-left: 2rem;
        }

        .contact-box {
            width: 77%;
            /* Sesuaikan lebar untuk layar yang lebih kecil */
            margin: auto;
            padding: 20px;
            border: 1px solid #1fdd63;
            border-radius: 8px;
        }

        .contact-box label {
            display: block;
            margin-bottom: 8px;
            color: #f1f1f1;
            /* Sesuaikan warna label */
        }

        .contact-box input,
        .contact-box textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        .contact-box button {
            width: 100%;
            background-color: #1fdd63;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Media query untuk mobile */
        @media screen and (max-width: 768px) {
            .contact-box {
                width: 70%;
                /* Sesuaikan lebar untuk layar yang lebih kecil */
                padding: 15px;
                /* Sesuaikan padding untuk layar yang lebih kecil */
            }
        }

        h6 {
            font-family: "montserrat";
            src: url(https://fonts.google.com/specimen/Montserrat?query=montserrat);
            top: 0;

        }

        h5 {
            font-family: "poppins";
            src: url(https://fonts.google.com/specimen/Poppins?query=poppins);
            top: 0;

        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark mb-5 ">
        <div class="container">
            <a href="#" style="font-size:x-large" class="navbar-brand nav-link text-white ms-5">Raja Hafiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto me-5" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#Home" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#About" class="nav-link text-white">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Skill" class="nav-link text-white">SKill</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Portfolio" class="nav-link text-white">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Contact" class="nav-link text-white">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/login" class="nav-link text-white">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Gambar Banner -->
    <div id="Home" class="banner-image w-100 vh-100 d-flex align-items-center">
        <div class="container banner-text">
            <h4>Hi, I'm Ramanda Putra</h4>
            <h1>I am a visual Graphic artist</h1>
            <h1>and UI/UX Designer</h1>
            <h4 class="text-white">I make the complex simple</h4>
            <a href="./contact.html" class="btn btn-light rounded-2 px-4 py-2">My Project</a>
        </div>
    </div>

    <!--About-->
    <div id="About" class="container about-section">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 text-center hello">
                <img src="{{ asset('img2/about.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start about-text">
                <span>Who am I?</span>
                <p>Greetings, I'm RajaHafiz, an...</p>
                <p>avid storyteller with a keen eye for detail, weaving narratives both on paper and
                    through the lens. As an editor and filmmaker, I thrive in the realm of visual storytelling, bringing
                    ideas to life with precision and creativity.

                </p>
                <a href="./resume.pdf" download="resume.pdf" class="btn">Resume</a>
            </div>
        </div>
    </div>

    <!--Skill-->
    <section id="Skill" class="section__container explore__container fade-in mt-5 mb-3 ">
        <div class="explore__header justify-content-center">
            <h2 style="color: #1fdd63;" class="section__header ">Skill</h2>
            <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?query=poppins"
                integrity="sha512-WKg1mQ4yZ2SfMCd4Q9xJw6OzJv0m4vS0cqmncgB9snXXVijSffl8SvxFg/KGj7FtM3EJb0/s0K3BEqBVwU43fw=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <div class="explore__nav"></div>
        </div>
        <div class="explore__grid">
            <div class="explore__card">
                <span><i class="bi bi-camera-fill"></i></span>
                <h4>Photography</h4>
                <p>
                    Since 2018, my photography experience has been a captivating journey of mastering technical nuances,
                    cultivating a unique artistic vision, and creating a vibrant tapestry of memories and emotions
                    frozen in time.
                </p>
                <a href="#"><i class="ri--line"></i></a>
            </div>
            <div class="explore__card">
                <span><i class="bi bi-camera-video-fill"></i></span>
                <h4>Videography</h4>
                <p>
                    Since 2018, my videography journey has unfolded as a dynamic exploration,
                    seamlessly blending technical expertise with creative storytelling to capture
                    and convey compelling narratives through the lens.
                </p>
                <a href="#"><i class="ri--line"></i></a>
            </div>
            <div class="explore__card">
                <span><i class="bi bi-film"></i></span>
                <h4>Editing</h4>
                <p>
                    Since 2018, my editing prowess has evolved into a skillful craft,
                    navigating through various software tools to enhance and transform images,
                    resulting in a portfolio that reflects my artistic finesse and commitment to visual storytelling.
                </p>
                <a href="#"><i class="ri--line"></i></a>
            </div>
            <div class="explore__card">
                <span><i class="bi bi-pencil-fill"></i></span>
                <h4>UI/UX Designer</h4>
                <p>
                    Since 2021, my UI/UX design journey has been a dynamic exploration,
                    blending creativity with user-centric principles to craft seamless and visually compelling digital
                    experiences that
                    resonate with both aesthetic elegance and functional efficiency.
                </p>
                <a href="#"><i class="ri--line"></i></a>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <div id="Portfolio" class="section__container mt-5">
        <div class="explore__header justify-content-center ">
            <h2 style="color: #1fdd63;" class="section__header ">Portfolio</h2>
            <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?query=poppins"
                integrity="sha512-WKg1mQ4yZ2SfMCd4Q9xJw6OzJv0m4vS0cqmncgB9snXXVijSffl8SvxFg/KGj7FtM3EJb0/s0K3BEqBVwU43fw=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <div class="explore__nav"></div>
        </div>
        <div class="portfolio-item mb-5">
            <a href="https://www.youtube.com/watch?v=nxtxtz42KwQ">
                <img src="{{ asset('img2/recent.png') }}" alt="Project 1">
            </a>
            <h2 style="color: #1fdd63;">Teknologi Pendidikan</h2>
            <p>This is a documentary film that contains interviews with students of the education faculty.</p>
        </div>
        <div class="portfolio-item mt-5">
            <a href="https://youtu.be/W7Ft5Fs9lAE?feature=shared">
                <img src="{{ asset('img2/famget.png') }}" alt="Project 2">
            </a>
            <h2 style="color: #1fdd63;">Family Gathering Mahasiswa Kepulauan Riau 2023</h2>
            <p>A documentary film of the Riau Islands Family Gathering activity.</p>
        </div>
    </div>

    <!--Contact-->

    <div id="Contact" class="contact-box mb-3">
        <h2 class="text-center" style="color: #1fdd63 ;">Contact Me</h2>
        <form id="contactForm" action="https://formsubmit.co/ramandaputra0104@gmail.com" method="POST"
            onsubmit="return emailSend()">
            <label for="email" style="color: #f1f1f1;">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject" style="color: #f1f1f1;">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="number" style="color: #f1f1f1;">Your Number:</label>
            <input type="text" id="number" name="number" required>

            <label for="message" style="color: #f1f1f1;">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <!--Footer-->
    <footer>
        <div class="footerContainer pt-3">
            <div class="socialIcons ">

                <a href="https://www.linkedin.com/in/ramanda-putra-7256912b9/"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/ptrarmnd/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@ptrarmnd11?_t=8mSQetcpTJI&_r=1"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.youtube.com/@rafdapproduction6647"><i class="bi bi-youtube"></i></a>
            </div>

        </div>
        <div class="footerNav text-center">
            <a href="https://ramandaputra.site/disclaimer.html">Disclaimer</a>
            <a href="https://ramandaputra.site/privpol.html">Privacy Policy</a>
        </div>
        <div class="footerBottom ">
            <p>Copyright &copy;2024 <span class="designer">RajaHafiz | DodyRockzzzzAbiezzzz</span></p>
        </div>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }

        });
    </script>

</body>

</html>
