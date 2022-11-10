<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Belajar Sahabat Al Fitrah</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-blur-dark">
        <div class="container">
            <a class="navbar-brand txt-rb text-uppercase" href="#">
                RB Sahabat <span class="txt-orange">Al Fitrah</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PPDB</a>
                    </li>
                    

                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="hero">
        <div class="panel-blur-dark d-flex justify-content-center align-items-center">
            <div class="container d-flex justify-content-center flex-column">
                <div class="brand-area text-center flex-column" data-aos="fade-down" data-aos-duration="3000">
                    <p class="txt-title text-uppercase text-white">
                        Rumah Belajar Sahabat Al Fitrah
                    </p>
                    <p class="text-white">
                        Hadir untuk pendampingan putra anda yang siap untuk Aqil Baligh
                    </p>
                    <div class="button-selengkapnya">
                        <a href="#" class="btn btn-success">Selengkapnya <i class="fa fa-chevron-down"></i></a>
                        <i class=" alarm"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        AOS.init();
    </script>
</body>

</html>
