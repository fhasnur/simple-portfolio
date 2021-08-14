<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>My Portfolio | Fandi Hasnur</title>
</head>

<body>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Funday</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fs-6">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./schools.php">Schools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <main>
        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img src="./img/funday-profile.jpg" alt="funday-profile">
                <h2>Hi, Saya Fandi</h2>
                <p class="fs-5 mt-3">Mahasiswa Jurusan Matematika<br>
                    Universitas Negeri Makassar
                </p>
            </div>
        </div>
        <!-- Akhir Jumbotron -->

        <!-- Awal My Skills -->
        <section class="my-skills" data-aos-offset="3000">
            <h2>My Skills</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="./img/coding.jpg" class="card-img-top" alt="produk-image">
                            <div class=" card-body">
                                <h4 class="card-title text-center">Programming</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <img src="./img/design.jpg" class="card-img-top" alt="produk-image">
                            <div class=" card-body">
                                <h4 class="card-title text-center">Graphic Design</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <img src="./img/video.jpg" class="card-img-top" alt="produk-image">
                            <div class=" card-body">
                                <h4 class="card-title text-center">Video Editing</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir My Skills -->

        <!-- Awal My Campus -->
        <section class="my-campus" data-aos-offset="3000">
            <div class="container">
                <div class="row">
                    <div class="col-lg shadow-lg p-3 bg-white rounded" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        <img class="img-fluid rounded" src="./img/phinisi.jpg" alt="phinisi">
                    </div>
                    <div class="col-lg my-auto mx-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <h2>My Campus</h2>
                        <p class="fs-5 fw-bold">Universitas Negeri Makassar</p>
                        <p class="unm-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis natus nesciunt fugit beatae error odio corporis blanditiis laboriosam consectetur minima, enim sapiente vero at cumque possimus delectus inventore recusandae?</p>
                        <a href="https://unm.ac.id/" target="blank" class="btn btn-primary my-2">Lihat</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir My Campus -->
    </main>

    <footer>
        <p>2021 All Rights Reserverd by Funday</p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>