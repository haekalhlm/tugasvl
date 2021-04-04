<?php

function get_CURL($url)
{

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCYmolgsH1BT7Dz9dziFs1Mg&key=AIzaSyD49KebbNMVEFVamSd9okjw6HoTXF6pGuk');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//lastest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyD49KebbNMVEFVamSd9okjw6HoTXF6pGuk&channelId=UCYmolgsH1BT7Dz9dziFs1Mg&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$LatestVideoId = $result['items'][0]['id']['videoId'];

//instagram api
$appid = '936861990452587';
$accessToken = 'EAANUEi4kZCWsBANgk1FJBOVMZBZCJmCon5CRgh1q2ruh6SPaht9dZAjVtYLrj3APDwFkU5TrhQBD8LWGk3Hcx825fbhFMV2xg64QzpyHXXOac49OZBgTZCdzAhS7FWE9JPkyFiVLJs5JpgRKEuG44KOlsOFjHvHUp9maZCh7ZBo1YeIDzstdlDxZBtUvyEpg6RDf7XZBTtXIwRIAZDZD';
$result = get_CURL('https://graph.facebook.com/v10.0/17841400543207234?fields=biography%2Cfollowers_count%2Cfollows_count%2Cid%2Cmedia_count%2Cname%2Cusername%2Cprofile_picture_url&access_token=EAANUEi4kZCWsBANwZCVRFruSPzpuA33gx5e0Yvsq59XslkjeEArXSLZCaVUFUAAY1vJZCU1c1ndEWXHVojU10vUy6TFxRy9adUnXCgiSgd2IXsUdHYnCPQeFLUY4Dh5ERufZCLETwBRQgsspbrmJZATlYAZAgnPg7jikLuA5HHIK775LdMyVGpVtupFRtTPlzVSKXZCaGZClmYAZDZD');

$userig = $result['username'];
$followers = $result['followers_count'];
$follows = $result['follows_count'];
$profile = $result['profile_picture_url'];







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dsutajayaa</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">My portfolio</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Danang Sutajaya</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Selamat datang dihalaman portfolio saya, berikut beberapa hasil karya yang bisa saya tampilkan.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">PROFILE</h2>
                    <hr class="divider light my-4" />
                    <p class="text-cyan-50 mb-4">Nama saya Danang Sutajaya, kelahiran Bekasi 31 Desember 2001. Saya salah satu mahasiswa aktif Universitas Gunadarma jurusan ilmu komunikasi 2019. Saya adalah seseorang yang mudah beradaptasi, dapat bekerja keras, dapat bekerja sama dengan tim, serta suka mempelajari hal-hal baru.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">SKILLS</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x  fa-address-card text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Newscarter</h3>
                        <p class="text-muted mb-0">Kemampuan membawakan berita dengan naskah dua kolom.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-camera-retro text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Fotography</h3>
                        <p class="text-muted mb-0">Kemampuan dalam pengambilan gambar yang cukup mumpuni dengan menggunakan konsep-konsep dalam hal fotography, serta beberapa pengalaman yang pernah saya lakukan dalam maternity footography, jurnalisme, serta food fotography.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-video text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Videography</h3>
                        <p class="text-muted mb-0">Kemampuan dalam pengambilan video yang cukup mumpuni dengan menggunakan konsep-konsep videography dan gerakan pemindahan kamera. Serta beberapa pengalaman yang pernah saya lakukan dalam wedding cinematic, iklan layanan masyarakat dan video promosi.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-file-image text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Adobe</h3>
                        <p class="text-muted mb-0">Kemampuan menggunakan beberapa aplikasi dari adobe seperti adobe photoshop (50%), adobe ilustrator (30%) dan juga adobe premiere (70%).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Youtube & IG-->
    <section class="social bg-light" id="social">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2> Social Media </h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="<?= $youtubeProfilePic; ?>" width="100" class="rounded-circle">
                        </div>
                        <div class="col-md-8">
                            <h5><?= $channelName; ?></h5>
                            <p><?= $subscriber; ?> Subscibers.</p>
                            <div class="g-ytsubscribe" data-channelid="UCYmolgsH1BT7Dz9dziFs1Mg" data-layout="default" data-count="default"></div>

                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $LatestVideoId; ?>?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= $profile ?>" width="90" class="rounded-circle">
                        </div>
                        <div class="col">
                            <h5><?= $userig; ?></h5>
                            <p><?= $followers ?> Followers. <?= $follows ?> Following.</p>



                        </div>
                    </div>

                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="ig-thumbnail">
                                <img src="assets/img/portfolio/ig/22.jpg" width="100" height="100" float="left" overflow="hidden">
                            </div>
                            <div class="ig-thumbnail">
                                <img src="assets/img/portfolio/ig/44.jpg" width="100" height="100" float="left" overflow="hidden">
                            </div>
                            <div class="ig-thumbnail">
                                <img src="assets/img/portfolio/ig/33.jpg" width="100" height="100" float="left" overflow="hidden">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/12.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Foto maternity 1</div>
                            <div class="project-name">Kehamilan adalah momen yang sangat berharga bagi setiap Mama atau calon Mama. Selama kurang lebih sembilan bulan mengandung, banyak perubahan yang dialami salah satunya adalah perubahan bentuk perut. Model foto syilvani honora. Foto ini diambil di studio foto Arah, menggunakan kamera sony a7 mark II dan lensa fix 35mm dengan segitiga exposure f1,7, shuter speed 1/200sec dan iso 400. </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/13.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/13.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Foto maternity 2</div>
                            <div class="project-name">Kehamilan adalah momen yang sangat berharga bagi setiap Mama atau calon Mama. Selama kurang lebih sembilan bulan mengandung, banyak perubahan yang dialami salah satunya adalah perubahan bentuk perut. Model foto devi honora dan suami. Foto ini diambil di studio foto Arah, menggunakan kamera sony a7 mark II dan lensa fix 35mm dengan segitiga exposure f1,4, shuter speed 1/250sec dan iso 400.</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/20.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/20.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Foto maternity 3</div>
                            <div class="project-name">Kehamilan adalah momen yang sangat berharga bagi setiap Mama atau calon Mama. Selama kurang lebih sembilan bulan mengandung, banyak perubahan yang dialami salah satunya adalah perubahan bentuk perut. Model foto syilvani honora dan suami. Foto ini diambil di studio foto Arah, menggunakan kamera sony a7 mark II dan lensa fix 35mm dengan segitiga exposure f1,2, shuter speed 1/100sec dan iso 400.</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/21.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/21.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Foto Human interest 1</div>
                            <div class="project-name">Ke-2 foto ini menggambarkan seorang bapa-bapa pemulung barang bekas yang sedang istirahat dan juga sedang membersihkan aqua gelas yang ia kumpulkan untuk dijual kembali kepada pengepul dengan harga Rp.8500/kilo. Foto ini diambil di stasiun gang sentiong menggunakan kamera canon 750D dan lensa kit 55m dengan menggunakan segitiga eksposure f5,6, shuter speed 1/200 sec dan iso 200.</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/31.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/31.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Foto Human interest 2</div>
                            <div class="project-name">Ke-2 foto ini menggabarkan seorang anak dan ibu yang tinggal di pinggiran rel kereta stasiun gang sentiong, terlihat raut muka anak kecil yang kebingugan saat saya foto ketika ia sedang bermain dengan mainan yang ia peggang ditanganya dan sang ibu yang sedang sibuk dengan mengumpulkan hasil kardus yang dicari oleh suaminya. Foto ini menggunakan segitiga eksposure f8, shuter speed 1/160 sec dan iso 200. </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/30.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/29.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Foto Human interest 3</div>
                            <div class="project-name">ke-2 foto ini menggambarkan seorang pemulung yang akan menuju tempat tinggalnya di pinggir rel untuk menaruh barang yang sudah ia cari dan foto kedua seorang bapa yang sudah berumur mencoba memotong barang yang ia temukan pada saat memulung untuk dikasihkan kepada pengepul. Foto ini menggunakan segitiga eksposure f5,6, shuter speed 1/250sec dan iso 200.</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/40.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/40.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Food fotography 1</div>
                            <div class="project-name">Foto ini diambil untuk memenuhi catalog penjualan kue balok dari akun instagram @balok.in. Foto ini diambil dalam mini studio rumahan dengan menggunakan kamera canon 750D dan lensa kit 55m dengan segitiga eksposure f5,6, shuter speed 1/200 sec dan iso 800. </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/41.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/41.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Food fotography 2</div>
                            <div class="project-name">Foto ini diambil untuk memenuhi catalog penjualan kue balok dari akun instagram @balok.in. Foto ini diambil dalam mini studio rumahan dengan menggunakan kamera canon 750D dan lensa kit 55m dengan segitiga eksposure f5,6, shuter speed 1/200 sec dan iso 1600.</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/42.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/42.jpg" alt="" />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Food fotography 3</div>
                            <div class="project-name">Foto ini diambil untuk memenuhi catalog penjualan kue balok dari akun instagram @balok.in. Foto ini diambil dalam mini studio rumahan dengan menggunakan kamera canon 750D dan lensa kit 55m dengan segitiga eksposure f5, shuter speed 1/200 sec dan iso 800.</div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Call to action-->

    <!-- Contact-->
    <section class="page-section bg-dark text-white" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                    <p class="text-white mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row text-white">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-white"></i>
                    <a class="row" href="https://api.whatsapp.com/send?phone=6289504385350&text=Hallow.">089504385350</a>
                </div>
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-play fa-3x mb-3 text-white"></i>
                    <a class="d-block" href="https://tinyurl.com/samalasapala">https://tinyurl.com/samalasapala</a>
                </div>

                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-white"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:danangsutajaya92@gmail.com">danangsutajaya92@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted"></div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>