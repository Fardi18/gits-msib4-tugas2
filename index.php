<?php
$nama = "Fardi Khalik Ramadhan";

$services = ["Front-End Web Development", "UIUX Design", "No Coding No Cry"];

$portofolio = ["Menthy", "SkilMovie", "Todo List", "Mony", "Interio", "Travelin"];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Websitenya Fardi</title>
    <!-- bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- data aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bgcolor">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="/index.html">Fardi.</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contact">Contact Me</a>
            </li>
          </ul>
          <div class="d-flex social">
            <a href="https://github.com/Fardi18">
              <i class="text-white fa-brands fa-github fs-5"></i>
            </a>
            <a href="https://www.instagram.com/fardi_nasution">
              <i class="text-white fa-brands fa-instagram fs-5 mx-3"></i>
            </a>
            <a href="https://www.linkedin.com/in/fardi-khalik-ramadhan/">
              <i class="text-white fa-brands fa-linkedin fs-5"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- hero -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h3 class="text-white fw-semibold mb-2">Holaaa</h3>
            <h1 class="text-white fw-bold mb-4">Saya <?= $nama ?></h1>
            <p class="text-white mb-5 text-opacity-75">
              Selamat datang di personal website saya
            </p>
            <a href="#about" class="btn btn-primary btn-lg rounded-1 mt-3"
              >Tentang Saya</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- about -->
    <section class="about py-5" id="about">
      <div class="container py-4">
        <div class="row min-vh-100 align-items-center align-content-center">
          <div class="col-md-6 mt-5 mt-md-0" data-aos="zoom-out-left">
            <div class="about-img text-center">
              <img src="assets/me.jpg" alt="foto aing" class="me" />
            </div>
          </div>
          <div class="col-md-6 order-md-first mt-5 mt-md-0" data-aos="zoom-out-right">
            <div class="about-text">
              <p class="text-muted mb-1">Hola</p>
              <h1 class="text-primary text-uppercase fs-1 fw-bold">
                Front-End Web Developer & UIUX Designer
              </h1>
              <h2 class="fs-4"><?= $nama ?></h2>
              <p class="mt-4 text-muted">
                Saya <?= $nama ?> akrab dipanggil Fardi, saya adalah
                mahasiswa semester 6 Program Studi Teknik Informatika di
                Institut Teknologi Indonesia. Saya tertarik dalam dunia
                pengembangan website terutama Front-End Web Development. Selain
                web, saya juga tertarik pada bidang UIUX Design.
              </p>
              <div class="row align-content-center mt-3">
                <div class="col">
                  <a href="#portofolio" class="btn btn-primary rounded-1"
                    >My Portofolio</a
                  >
                  <a
                    href="https://drive.google.com/file/d/1hVtrK1rRNE20ZY6OOUz7nkTJDtqxpPUW/view?usp=share_link"
                    class="btn btn-outline-primary rounded-1 mx-3"
                    >Lihat CV</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- services -->
    <section class="services py-5 bg-light" id="services">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="services-title text-center">
              <h2 class="fw-bold mb-5">Services</h2>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="services-item shadow-sm p-4 rounded bg-white" data-aos="fade-right" data-aos-delay="100">
                <div class="icon my-3">
                  <i class="fa-solid fa-code fs-2 text-primary"></i>
                </div>
                <h3 class="fs-5 py-2"><?= $services[0] ?></h3>
                <p class="text-muted">
                  Membuat website khususnya bagian Front-End Development
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="services-item shadow-sm p-4 rounded bg-white" data-aos="fade-right" data-aos-delay="200">
                <div class="icon my-3">
                  <i class="fa-brands fa-figma fs-2 fw-bold text-primary"></i>
                </div>
                <h3 class="fs-5 py-2"><?= $services[1] ?></h3>
                <p class="text-muted">
                  Membuat UIUX desain website/mobile dengan tools figma dan lain
                  sebagainya
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="services-item shadow-sm p-4 rounded bg-white" data-aos="fade-right" data-aos-delay="300">
                <div class="icon my-3">
                  <i class="fa-brands fa-wordpress fs-2 text-primary"></i>
                </div>
                <h3 class="fs-5 py-2"><?= $services[2] ?></h3>
                <p class="text-muted">
                  Meembuat website tanpa coding dengan tools seperti Wordpress,
                  Webflow & Framer
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- portofolio -->
    <section class="portofolio py-5" id="portofolio">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="portofolio-title text-center">
              <h2 class="fw-bold mb-5">Portofolio</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="portofolio-item" data-aos="fade-right" data-aos-delay="100">
              <img
                src="assets/article.png"
                alt=""
                class="w-100 img-thumbnail"
              />
              <h3 class="fs-4 my-2"><?= $portofolio[0] ?></h3>
              <p class="text-muted">
                Sebuah website yang menyediakan artikel dan daftar psikolog
                untuk mereka yang mengalami gangguan kesehatan mental
              </p>
              <a
                href="https://fe16-menthy-article-react.netlify.app/"
                class="text-white mb-4 btn btn-md btn-primary"
                >Lihat detail</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="portofolio-item" data-aos="fade-right" data-aos-delay="200">
              <img
                src="assets/skillmovile.png"
                alt=""
                class="w-100 img-thumbnail"
              />
              <h3 class="fs-4 my-2"><?= $portofolio[1] ?></h3>
              <p class="text-muted">
                Sebuah website yang menyediakan informasi dari film populer
                dengan menggunakan API TMDB
              </p>
              <a
                href="https://fardi-skil-movie.netlify.app/"
                class="text-white mb-4 btn btn-md btn-primary"
                >Lihat detail</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="portofolio-item" data-aos="fade-right" data-aos-delay="300">
              <img
                src="assets/todolist.png"
                alt=""
                class="w-100 img-thumbnail"
              />
              <h3 class="fs-4 my-2"><?= $portofolio[2] ?></h3>
              <p class="text-muted">
                Website Todo List dengan menggunakan Library React Js dan React
                Redux
              </p>
              <a href="#" class="text-white mb-4 btn btn-md btn-primary"
                >Lihat detail</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="portofolio-item" data-aos="fade-right" data-aos-delay="400">
              <img src="assets/mony.png" alt="" class="w-100 img-thumbnail" />
              <h3 class="fs-4 my-2"><?= $portofolio[3] ?></h3>
              <p class="text-muted">
                Mony adalah UIUX Design sebuah mobile App e-wallet
              </p>
              <a
                href="https://www.figma.com/proto/w1s4p3AkJWdbrqlqVbLtkh/Mony-Aplication-UI?node-id=56%3A642&scaling=scale-down&page-id=31%3A38&starting-point-node-id=56%3A642"
                class="text-white mb-4 btn btn-md btn-primary"
                >Lihat detail</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="portofolio-item" data-aos="fade-right" data-aos-delay="500">
              <img
                src="assets/interio.png"
                alt=""
                class="w-100 img-thumbnail"
              />
              <h3 class="fs-4 my-2"><?= $portofolio[4] ?></h3>
              <p class="text-muted">
                UI Design sebuah website yang bernama Interio yang menyediakan
                kebutuhan perlengkapan rumah
              </p>
              <a
                href="https://www.figma.com/proto/hZhunBv7oGAKZ938OVvaE9/Furniture?node-id=5%3A19&starting-point-node-id=5%3A19"
                class="text-white mb-4 btn btn-md btn-primary"
                >Lihat detail</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="portofolio-item" data-aos="fade-right" data-aos-delay="600">
              <img
                src="assets/travelin.png"
                alt=""
                class="w-100 img-thumbnail"
              />
              <h3 class="fs-4 my-2"><?= $portofolio[5] ?></h3>
              <p class="text-muted">
                UI Design sebuah mobile apps untuk mereka yang menyukai
                traveling
              </p>
              <a
                href="https://www.figma.com/file/Iq5alsteEX2Zv0uhsUiBbh/Travelin?node-id=0%3A1&t=XQA9yYPGvwEXAWFE-0"
                class="text-white mb-4 btn btn-md btn-primary"
                >Lihat detail</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact me -->
    <section class="contact py-5 bg-light" id="contact">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="portofolio-title text-center">
              <h2 class="fw-bold mb-5">Contact Me</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="phone d-flex text-align-center">
              <div class="icon">
                <i class="fa-solid fa-phone text-primary fs-5"></i>
              </div>
              <div class="phone-text mx-3">
                <p>+62 838 9142 8869</p>
              </div>
            </div>
            <div class="mail d-flex text-align-center">
              <div class="icon">
                <i class="fa-solid fa-envelope text-primary fs-5"></i>
              </div>
              <div class="mail-text mx-3">
                <p>fardikhalikramadhan@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="contact-form">
              <form
                action="https://formsubmit.co/6fb13cb49e047f83ae8d395898492395"
                method="POST"
                onsubmit="return validateForm()"
              >
                <div class="row">
                  <div class="col-lg-6">
                    <input
                      name="name"
                      type="text"
                      placeholder="Your Name"
                      class="form-control form-control-lf fs-6 border-0 shadow-sm mb-4"
                    />
                  </div>
                  <div class="col-lg-6">
                    <input
                      name="email"
                      type="email"
                      placeholder="Your Email"
                      class="form-control form-control-lf fs-6 border-0 shadow-sm mb-4"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <input
                      name="subject"
                      type="text"
                      placeholder="Subject"
                      class="form-control form-control-lf fs-6 border-0 shadow-sm mb-4"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <textarea
                      name="message"
                      type="text"
                      placeholder="Your Message"
                      rows="5"
                      class="form-control form-control-lf fs-6 border-0 shadow-sm mb-4"
                    ></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary rounded-1">
                      Send
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="container pt-5">
        <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
          <div class="col col-lg-6 mb-lg-0 mb-4">
            <h2 class="fw-bold text-white mb-3">Fardi.</h2>
            <p class="text-white-50">UIUX Design and Front-End Development</p>
          </div>
          <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
            <h5 class="fw-bold text-white">Menu</h5>
            <a href="#index" class="text-white-50 mt-3"> Home </a>
            <a href="#about" class="text-white-50 mt-2"> About </a>
            <a href="#services" class="text-white-50 mt-2"> Services </a>
            <a href="#portofolio" class="text-white-50 mt-2"> Portofolio </a>
            <a href="#contact" class="text-white-50 mt-2"> Contact Me </a>
          </div>
          <div class="col col-lg-3 d-flex flex-column mb-lg-0 mb-4">
            <h5 class="fw-bold text-white mb-3">Contact</h5>
            <a href="#" class="text-white-50 mt-2"> +62 838 9142 8869 </a>
            <a href="#" class="text-white-50 mt-2">
              fardikhalikramadhan@gmail.com
            </a>
            <p clss="text-white-50 mt-2">Tangerang, Banten, Indonesia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="text-white text-center copytext">
              &copy; Copyright 2023 by Fardi, All Right Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- bootstrap 5 -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- custom js -->
    <script src="index.js"></script>

    <!-- data aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

