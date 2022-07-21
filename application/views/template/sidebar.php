<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dau SmarTourism SPK AHP</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('template/ahp/') ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('template/ahp/') ?>semantic/dist/semantic.min.css">

    <!-- Favicon-->
    <link rel="icon" type="" href="<?= base_url('template/') ?>assets/globe.svg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('template/') ?>css/styles.css" rel="stylesheet" />
    <!-- leaflet css-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <!-- jquery js-->
    <script src="<?= base_url('/template/js/jquery.js') ?>"></script>
</head>

<body>
    <header>
        <h1>Sistem Pendukung Keputusan dengan metode AHP</h1>
    </header>

    <div class="wrapper">
        <nav id="navigation" role="navigation">
            <ul>
                <li><a class="item" href="<?= base_url() ?>">Home</a></li>
                <li>
                    <a class="item" href="<?= base_url('ahp/kriteria') ?>">Kriteria
                        <div class="ui blue tiny label" style="float: right;">
                            <?= $jml_kriteria ?>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="item" href="<?= base_url('ahp/alternatif') ?>">Alternatif
                        <div class="ui blue tiny label" style="float: right;">
                            <?= $jml_alternatif ?>
                        </div>
                    </a>
                </li>
                <li><a class="item" href="<?= base_url('ahp/bbt_kriteria') ?>">Perbandingan Kriteria</a></li>
                <li><a class="item" href="bobot.php?c=1">Perbandingan Alternatif</a></li>
                <ul hidden>
                    <?php

                    // if ($jml_kriteria > 0) {
                    //     for ($i = 0; $i <= ($jml_kriteria - 1); $i++) {
                    //         echo "<li><a class='item' href='bobot.php?c=" . ($i + 1) . "'>" . $nama_kriteria($i) . "</a></li>";
                    //     }
                    // }

                    ?>
                </ul>
                <li><a class="item" href="..">SmarTourism</a></li>
                <li><a class="item" href="hasil.php">Hasil</a></li>
            </ul>
        </nav>