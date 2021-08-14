<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Schools | My Portfolio</title>
</head>

<body>

    <?php

    $data_diri = [
        [
            "attribut" => "Nama Lengkap",
            "value" => "Fandi Meylwan Hasnur"
        ],
        [
            "attribut" => "Nama Panggilan",
            "value" => "Fandi"
        ],
        [
            "attribut" => "Jenis Kelamin",
            "value" => "Laki-laki"
        ],
        [
            "attribut" => "Tempat, tanggal lahir",
            "value" => "Buton,  05 Mei 1999"
        ],
        [
            "attribut" => "Agama",
            "value" => "Islam"
        ],
        [
            "attribut" => "Status dalam keluarga",
            "value" => "Anak Kandung"
        ],
        [
            "attribut" => "Anak ke",
            "value" => "1 dari 3 bersaudara"
        ],
        [
            "attribut" => "Alamat",
            "value" => "Jalan Indonesia, Bumi"
        ],
        [
            "attribut" => "Makanan Favorit",
            "value" => "Semua makanan yang halal"
        ],
        [
            "attribut" => "Minuman Favorit",
            "value" => "Semua minuman yang halal"
        ]
    ]
    ?>

    <?php

    $mata_kuliah = [
        [
            "nama_mk" => "Kalkulus I",
            "sks" => "3",
            "angka" => 3.25,
        ],
        [
            "nama_mk" => "Fisika Dasar",
            "sks" => "2",
            "angka" => 2.25,
        ],
        [
            "nama_mk" => "Kimia Dasar",
            "sks" => "2",
            "angka" => 2,
        ],
        [
            "nama_mk" => "Biologi Dasar",
            "sks" => "2",
            "angka" => 3.25,
        ],
        [
            "nama_mk" => "Pendidikan Lingkungan Hidup",
            "sks" => "2",
            "angka" => 3.75,
        ],
        [
            "nama_mk" => "Pendidikan Agama Islam",
            "sks" => "2",
            "angka" => 4,
        ],
        [
            "nama_mk" => "Statistika Dasar",
            "sks" => "2",
            "angka" => 3.75,
        ],
        [
            "nama_mk" => "Landasan Matematika",
            "sks" => "3",
            "angka" => 2.75,
        ],
        [
            "nama_mk" => "Aljabar Elementer",
            "sks" => "2",
            "angka" => 3,
        ],
    ]

    ?>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="./index.php">Funday</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fs-6">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./schools.php">Schools</a>
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

    <!-- Awal Data diri -->
    <section>
        <div class="container">
            <div class="alert alert-light mt-5" role="alert">
                <h3>Data diri</h3>
            </div>
            <table class="table table-striped">
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data_diri); $i++) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i + 1 ?></th>
                            <td><?php echo $data_diri[$i]["attribut"]; ?></td>
                            <td>:</td>
                            <td><?php echo $data_diri[$i]["value"]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Akhir Data diri -->

    <!-- Awal Daftar Nilai -->
    <section>
        <div class="container">
            <div class="alert alert-light mt-5" role="alert">
                <h3>Daftar Nilai </h3>
            </div>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Angka</th>
                        <th>Huruf</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $total_sks = 0;
                    $total_nilai = 0;
                    for ($i = 0; $i < count($mata_kuliah); $i++) { ?>
                        <tr>
                            <th scope="row"><?php echo $i + 1; ?></th>
                            <td><?php echo $mata_kuliah[$i]["nama_mk"]; ?></td>
                            <td><?php echo $mata_kuliah[$i]["sks"]; ?></td>
                            <td><?php echo $mata_kuliah[$i]["angka"]; ?></td>
                            <td>
                                <?php if ($mata_kuliah[$i]["angka"] == 4.00) {
                                    echo "A";
                                } elseif ($mata_kuliah[$i]["angka"] >= 3.75) {
                                    echo "A-";
                                } elseif ($mata_kuliah[$i]["angka"] >= 3.5) {
                                    echo "B+";
                                } elseif ($mata_kuliah[$i]["angka"] >= 3.25) {
                                    echo "B";
                                } elseif ($mata_kuliah[$i]["angka"] >= 3.0) {
                                    echo "B-";
                                } elseif ($mata_kuliah[$i]["angka"] >= 2.75) {
                                    echo "C+";
                                } elseif ($mata_kuliah[$i]["angka"] >= 2.5) {
                                    echo "C";
                                } elseif ($mata_kuliah[$i]["angka"] >= 2.0) {
                                    echo "C-";
                                } else {
                                    echo "D";
                                } ?>
                            </td>
                            <td><?php echo $mata_kuliah[$i]["sks"] * $mata_kuliah[$i]["angka"]; ?></td>
                        </tr>

                        <?php
                        // Total sks
                        $tot = $mata_kuliah[$i]["sks"];
                        $total_sks += $tot;

                        // Total nilai
                        $total = $mata_kuliah[$i]["sks"] * $mata_kuliah[$i]["angka"];
                        $total_nilai += $total;
                        ?>
                    <?php } ?>
                    <tr>
                        <th colspan="2">Jumlah</th>
                        <td><?= $total_sks; ?></td>
                        <td colspan="2"></td>
                        <td><?= $total_nilai; ?></td>
                    </tr>
                    <tr>
                        <th colspan="5">IPK</th>
                        <th><?= number_format($total_nilai / $total_sks, 2, ".", ""); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Akhir Daftar Nilai -->

    <footer>
        <p>2021 All Rights Reserverd by Funday</p>
    </footer>

</body>

</html>