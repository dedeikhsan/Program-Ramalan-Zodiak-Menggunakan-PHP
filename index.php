<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Zodiak</title>
</head>

<body class="bg-light">
    <div class="container mt-4">
        <form method="POST">
            <div class="row">
                <div class="col-md-4 offset-md-4 auto shadow p-3 mb-3 bg-white rounded">
                    <h4 class="text-center" style="font-family: Viga, Cursive;">Ramalan Zodiakmu</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 offset-md-4 auto shadow-lg p-3 mb-5 bg-white rounded" style="height: 750px">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control datepicker" placeholder="Tanggal" aria-describedby="button-addon2" id="tanggal" name="inputTanggal">

                        <select id="bulan" name="inputBulan" class="selectpicker form-control" data-live-search="true">
                            <option value="Januari" selected>Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>

                        <select name="tahun" class="selectpicker form-control" data-live-search="true">
                            <option selected>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option>
                            <option>2000</option>
                            <option>1999</option>
                            <option>1998</option>
                            <option>1997</option>
                            <option>1996</option>
                            <option>1995</option>
                            <option>1994</option>
                            <option>1993</option>
                            <option>1992</option>
                            <option>1991</option>
                        </select>

                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit" name="submit">Check</button>
                        </div>

                        <?php

                        error_reporting(E_ERROR | E_PARSE);

                        if (isset($_POST['submit'])) {
                            $inputTanggal   = $_POST['inputTanggal'];
                            $inputBulan     = $_POST['inputBulan'];
                        }

                        //Januari
                        if ($inputBulan === "Januari") {

                            if ($inputTanggal <= 19) {
                                $zodiak = "Capricorn";
                                $karakteristik = "Kamu sebagai sosok yang serius dalam menjalani hidup. Memiliki sifat mandiri, disiplin, dan sangat gigih saat untuk meraih apa yang dicita-citakan.";
                                $percintaan = "Capricorn pun dikenal berdedikasi dalam mengejar targetnya. Karena itu, kamu akan cocok dengan Taurus, Virgo, atau Cancer terlebih karena sama-sama romantis.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 20 && $inputTanggal <= 31) {
                                $zodiak = "Aquarius";
                                $karakteristik = "Kamu sebagai sosok yang serius dalam menjalani hidup. Memiliki sifat mandiri, disiplin, dan sangat gigih saat untuk meraih apa yang dicita-citakan.";
                                $percintaan = "Kepribadian Aquarius yang bisa dibilang unik bisa membuat pasangannya tidak bosan. Kamu juga kreatif dalam berbagai hal meski juga bisa jadi sensitif. Sama-sama punya visi besar, Aquarius dinilai akan serasi dengan Gemini atau Libra. Sedangkan jika dijodohkan Leo, mereka bisa jadi pasangan yang dinamis.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Februari
                        } else if ($inputBulan === "Februari") {

                            if ($inputTanggal <= 18) {
                                $zodiak = "Aquarius";
                                $karakteristik = "Kamu sebagai sosok yang serius dalam menjalani hidup. Memiliki sifat mandiri, disiplin, dan sangat gigih saat untuk meraih apa yang dicita-citakan.";
                                $percintaan = "Kepribadian Aquarius yang bisa dibilang unik bisa membuat pasangannya tidak bosan. Kamu juga kreatif dalam berbagai hal meski juga bisa jadi sensitif. Sama-sama punya visi besar, Aquarius dinilai akan serasi dengan Gemini atau Libra. Sedangkan jika dijodohkan Leo, mereka bisa jadi pasangan yang dinamis.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 19 && $inputTanggal <= 29) {
                                $zodiak = "Pisces";
                                $karakteristik = "Kamu memiliki afeksi dan empati yang tinggi, tapi di sisi lain mereka juga dikenal egois dan dramatis. Zodiak berelemen air ini juga memiliki jiwa seni yang tinggi dan dikenal sebagai sosok yang bijaksana.";
                                $percintaan = "Kamu menyukai berbagai bentuk seni dan keindahan, pasangan Pisces bisa jadi beruntung saat dihadiahi kado-kado cantik atau puisi. Mereka pun dikenal cukup berpikiran terbuka sehingga bisa menerima ide-ide tak biasa. Karena itu, zodiak yang paling serasi untuk mereka adalah Scorpio, Virgo, dan Cancer.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Maret
                        } else if ($inputBulan === "Maret") {

                            if ($inputTanggal <= 20) {
                                $zodiak = "Pisces";
                                $karakteristik = "Kamu memiliki afeksi dan empati yang tinggi, tapi di sisi lain mereka juga dikenal egois dan dramatis. Zodiak berelemen air ini juga memiliki jiwa seni yang tinggi dan dikenal sebagai sosok yang bijaksana.";
                                $percintaan = "Kamu menyukai berbagai bentuk seni dan keindahan, pasangan Pisces bisa jadi beruntung saat dihadiahi kado-kado cantik atau puisi. Mereka pun dikenal cukup berpikiran terbuka sehingga bisa menerima ide-ide tak biasa. Karena itu, zodiak yang paling serasi untuk mereka adalah Scorpio, Virgo, dan Cancer.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 21 && $inputTanggal <= 31) {
                                $zodiak = "Aries";
                                $karakteristik = "Kamu suka menjadi nomor satu dan hal itu tak mengejutkan. Mereka dikenal berani dan ambisius. Dalam setiap situasi, mereka kerap kali bersikap spontan dan tidak lebih dulu mempertimbangkan risiko setiap tindakan mereka. Sebagai zodiak dengan elemen api ini juga dikenal kompetitif dan sangat menyukai lingkungan yang dinamis.";
                                $percintaan = "Kamu cenderung menjadi sosok yang menyenangkan ketika berkencan dan mencari pasangan yang bisa mengimbanginya. Berdasarkan ramalan, Aries cukup cocok dengan Leo, Sagitarius, dan Libra yang sama-sama spontan.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //April
                        } else if ($inputBulan === "April") {

                            if ($inputTanggal <= 19) {
                                $zodiak = "Aries";
                                $karakteristik = "Kamu suka menjadi nomor satu dan hal itu tak mengejutkan. Mereka dikenal berani dan ambisius. Dalam setiap situasi, mereka kerap kali bersikap spontan dan tidak lebih dulu mempertimbangkan risiko setiap tindakan mereka. Sebagai zodiak dengan elemen api ini juga dikenal kompetitif dan sangat menyukai lingkungan yang dinamis.";
                                $percintaan = "Kamu cenderung menjadi sosok yang menyenangkan ketika berkencan dan mencari pasangan yang bisa mengimbanginya. Berdasarkan ramalan, Aries cukup cocok dengan Leo, Sagitarius, dan Libra yang sama-sama spontan.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 20 && $inputTanggal <= 30) {
                                $zodiak = "Taurus";
                                $karakteristik = "Kamu dikenal sebagai sosok yang kuat, dapat diandalkan, dan kreatif. Meski terkesan ‘keras’ di luar, Taurus sebenarnya berhati lembut. Selain Taurus juga dikenal sebagai zodiak yang mencintai kemewahan.";
                                $percintaan = "Kamu juga menyukai hal-hal berbau keindahan dan kemewahan sehingga bisa menghadiahi kamu dengan kado-kado menarik. Zodiak itu diramalkan cocok dengannya adalah Virgo yang pragmatis dan Capricorn yang pekerja keras karena kesamaan sifat mereka. Sedangkan Scorpio dianggap cocok karena persamaan nilai.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Mei
                        } else if ($inputBulan === "Mei") {

                            if ($inputTanggal <= 20) {
                                $zodiak = "Taurus";
                                $karakteristik = "Kamu dikenal sebagai sosok yang kuat, dapat diandalkan, dan kreatif. Meski terkesan ‘keras’ di luar, Taurus sebenarnya berhati lembut. Selain Taurus juga dikenal sebagai zodiak yang mencintai kemewahan.";
                                $percintaan = "Kamu juga menyukai hal-hal berbau keindahan dan kemewahan sehingga bisa menghadiahi kamu dengan kado-kado menarik. Zodiak itu diramalkan cocok dengannya adalah Virgo yang pragmatis dan Capricorn yang pekerja keras karena kesamaan sifat mereka. Sedangkan Scorpio dianggap cocok karena persamaan nilai.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 21 && $inputTanggal <= 31) {
                                $zodiak = "Gemini";
                                $karakteristik = "Kamu sering dilabeli sebagai seorang ‘player’, sebenarnya Gemini ini memang seseorang yang ramah pada semua orang dan mudah bergaul dengan siapa saja. Pesona Gemini, sebagai zodiak dengan elemen udara, memang nggak bisa dipungkiri, sih!";
                                $percintaan = "Gemini tertarik dengan mereka yang berbeda karakter. Dikatakan jika zodiak Libra, Aquarius, dan Sagitarius sering kali menarik hati Gemini karena membuat hubungan jadi dinamis.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Juni
                        } else if ($inputBulan === "Juni") {

                            if ($inputTanggal <= 20) {
                                $zodiak = "Gemini";
                                $karakteristik = "Kamu sering dilabeli sebagai seorang ‘player’, sebenarnya Gemini ini memang seseorang yang ramah pada semua orang dan mudah bergaul dengan siapa saja. Pesona Gemini, sebagai zodiak dengan elemen udara, memang nggak bisa dipungkiri, sih!";
                                $percintaan = "Gemini tertarik dengan mereka yang berbeda karakter. Dikatakan jika zodiak Libra, Aquarius, dan Sagitarius sering kali menarik hati Gemini karena membuat hubungan jadi dinamis.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 21 && $inputTanggal <= 30) {
                                $zodiak = "Cancer";
                                $karakteristik = "Kamu dikenal sebagai sosok yang intituitif, sentimental, protektif, dan selalu berusaha menolong sesama. Sama halnya dengan kepiting yang memiliki cangkang keras, seorang kepiting biasanya tak mudah dekat dengan orang baru. Namun begitu kamu sudah mendapatkan hati dan perhatiannya, dia akan menjadi teman atau pasangan yang sangat manis.";
                                $percintaan = "Dalam hubungan, Cancer bisa jadi orang yang sensitif untuk masalah kepercayaan. Mereka harus merasa nyaman dan aman sebelum mengungkap kelemahan pada pasangan. Karena itu, zodiak-zodiak bersifat air lain seperti Scorpio dan Pisces dikatakan cocok dengan Cancer. Capricorn juga dinilai bisa mengapresiasi kesensitifan Cancer.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Juli
                        } else if ($inputBulan === "Juli") {

                            if ($inputTanggal <= 22) {
                                $zodiak = "Cancer";
                                $karakteristik = "Kamu dikenal sebagai sosok yang intituitif, sentimental, protektif, dan selalu berusaha menolong sesama. Sama halnya dengan kepiting yang memiliki cangkang keras, seorang kepiting biasanya tak mudah dekat dengan orang baru. Namun begitu kamu sudah mendapatkan hati dan perhatiannya, dia akan menjadi teman atau pasangan yang sangat manis.";
                                $percintaan = "Dalam hubungan, Cancer bisa jadi orang yang sensitif untuk masalah kepercayaan. Mereka harus merasa nyaman dan aman sebelum mengungkap kelemahan pada pasangan. Karena itu, zodiak-zodiak bersifat air lain seperti Scorpio dan Pisces dikatakan cocok dengan Cancer. Capricorn juga dinilai bisa mengapresiasi kesensitifan Cancer.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 23 && $inputTanggal <= 31) {
                                $zodiak = "Leo";
                                $karakteristik = "Kamu yang diwakili dengan simbol singa memiliki rasa percaya diri yang tinggi. Zodiak dengan elemen api ini juga suka menjadi pusat perhatian dan hal itu tak sulit mereka dapat, karena mereka tahu caranya menjadi pemecah suasana. Supel, berambisi, dan penuh gairah, merupakan karakter inti dari seorang Leo.";
                                $percintaan = "Leo tidak takut untuk mengekspresikan dirinya, termasuk rasa sayang kepada pasangan. Jangan heran jika pemilik zodiak ini akan menghadiahimu dengan barang dan kencan romantis. Berdasarkan horoskop, Leo paling cocok dengan Aries dan Sagitarius yang sama-sama bersifat api. Cancer dan Aquarius pun diramalkan serasi karena lebih seimbang.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Agustus
                        } else if ($inputBulan === "Agustus") {

                            if ($inputTanggal <= 22) {
                                $zodiak = "Leo";
                                $karakteristik = "Kamu yang diwakili dengan simbol singa memiliki rasa percaya diri yang tinggi. Zodiak dengan elemen api ini juga suka menjadi pusat perhatian dan hal itu tak sulit mereka dapat, karena mereka tahu caranya menjadi pemecah suasana. Supel, berambisi, dan penuh gairah, merupakan karakter inti dari seorang Leo.";
                                $percintaan = "Leo tidak takut untuk mengekspresikan dirinya, termasuk rasa sayang kepada pasangan. Jangan heran jika pemilik zodiak ini akan menghadiahimu dengan barang dan kencan romantis. Berdasarkan horoskop, Leo paling cocok dengan Aries dan Sagitarius yang sama-sama bersifat api. Cancer dan Aquarius pun diramalkan serasi karena lebih seimbang.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 23 && $inputTanggal <= 31) {
                                $zodiak = "Virgo";
                                $karakteristik = "Kamu dikenal sebagai seseorang yang loyal dan selalu berpikir analitis. Zodiak berelemen tanah ini juga sangat perfeksionis dan mereka selalu berusaha untuk meningkatkan setiap keahlian yang mereka miliki.";
                                $percintaan = "Virgo yang perfectionist juga akan mencari pasangan yang dirasa benar-benar serasi dengannya. Dikenal rasional dan detail dalam berbagai hal, Capricorn dan Taurus diramalkan akan serasi dengan Virgo. Meski begitu, Virgo juga dikatakan cocok dengan orang yang bersifat berseberangan, contohnya Pisces.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //September
                        } else if ($inputBulan === "September") {

                            if ($inputTanggal <= 22) {
                                $zodiak = "Virgo";
                                $karakteristik = "Kamu dikenal sebagai seseorang yang loyal dan selalu berpikir analitis. Zodiak berelemen tanah ini juga sangat perfeksionis dan mereka selalu berusaha untuk meningkatkan setiap keahlian yang mereka miliki.";
                                $percintaan = "Virgo yang perfectionist juga akan mencari pasangan yang dirasa benar-benar serasi dengannya. Dikenal rasional dan detail dalam berbagai hal, Capricorn dan Taurus diramalkan akan serasi dengan Virgo. Meski begitu, Virgo juga dikatakan cocok dengan orang yang bersifat berseberangan, contohnya Pisces.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 23 && $inputTanggal <= 30) {
                                $zodiak = "Libra";
                                $karakteristik = "Sesuai dengan lambangnya, yaitu timbangan, kamu sangat suka keseimbangan dan kedamaian. Mereka selalu berusaha menjaga keharmonisan hidup mereka dalam berbagai aspek, mulai dari cinta, karier, dan keluarga. Libra juga sosok yang senang bersosialisi. Dalam menghadapi masalah, seorang Libra bisa menjadi seseorang yang diplomatis dalam mencapai solusi.";
                                $percintaan = "Kamu butuh keseimbangan antara percintaan, keluarga, dan teman-teman. Beberapa zodiak yang diramalkan berjodoh dengan Libra adalah Gemini, Aquarius, dan Libra karena karakteristik-karakteristik mereka cocok.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //Oktober
                        } else if ($inputBulan === "Oktober") {

                            if ($inputTanggal <= 22) {
                                $zodiak = "Libra";
                                $karakteristik = "Sesuai dengan lambangnya, yaitu timbangan, kamu sangat suka keseimbangan dan kedamaian. Mereka selalu berusaha menjaga keharmonisan hidup mereka dalam berbagai aspek, mulai dari cinta, karier, dan keluarga. Libra juga sosok yang senang bersosialisi. Dalam menghadapi masalah, seorang Libra bisa menjadi seseorang yang diplomatis dalam mencapai solusi.";
                                $percintaan = "Kamu butuh keseimbangan antara percintaan, keluarga, dan teman-teman. Beberapa zodiak yang diramalkan berjodoh dengan Libra adalah Gemini, Aquarius, dan Libra karena karakteristik-karakteristik mereka cocok.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 23 && $inputTanggal <= 31) {
                                $zodiak = "Scorpio";
                                $karakteristik = "Kamu dikenal memiliki sifat keras kepala dan pemberani. Mereka adalah tipe orang yang tak ragu mengejar passion dan mimpi-mimpinya. Zodiak dengan elemen air ini juga dikenal mampu beradaptasi dalam di berbagai lingkungan. Saat berada di sebuah lingkungan baru, mereka nggak butuh waktu lama untuk berteman dengan siapa saja.";
                                $percintaan = "Scorpio bisa jadi orang yang misterius tapi akan jadi bucin untuk urusan cinta. Tak heran jika Scorpio akan mengejar targetnya hingga berhasil mendapatkan hati si dia. Cancer dan Pisces diprediksi bisa mengimbangi intensitas Scorpio. Taurus pun diramalkan cocok dengan Scorpio karena sama-sama zodiak paling sensual.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }

                            //November
                        } else if ($inputBulan === "November") {

                            if ($inputTanggal <= 21) {
                                $zodiak = "Scorpio";
                                $karakteristik = "Kamu dikenal memiliki sifat keras kepala dan pemberani. Mereka adalah tipe orang yang tak ragu mengejar passion dan mimpi-mimpinya. Zodiak dengan elemen air ini juga dikenal mampu beradaptasi dalam di berbagai lingkungan. Saat berada di sebuah lingkungan baru, mereka nggak butuh waktu lama untuk berteman dengan siapa saja.";
                                $percintaan = "Scorpio bisa jadi orang yang misterius tapi akan jadi bucin untuk urusan cinta. Tak heran jika Scorpio akan mengejar targetnya hingga berhasil mendapatkan hati si dia. Cancer dan Pisces diprediksi bisa mengimbangi intensitas Scorpio. Taurus pun diramalkan cocok dengan Scorpio karena sama-sama zodiak paling sensual.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal >= 22 && $inputTanggal <= 30) {
                                $zodiak = "Sagitarius";
                                $karakteristik = "Kamu dikenal sebagai sosok yang ekstrovert, meski begitu Sagitarius juga sangat menghargai kesendirian. Sebagai zodiak Sagitarius dengan elemen api, Sagitarius paling tak suka dikekang dan sangat menyukai kebebasan.";
                                $percintaan = "Untuk menyeimbangkan sifat-sifat Sagitarius, diramalkan bahwa zodiak yang paling serasi denganmu adalah Aries dan Leo karena sama-sama petualang. Gemini dan Sagitarius juga bisa berjodoh karena sikapnya saling melengkapi.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }
                        } else if ($inputBulan === "Desember") {

                            if ($inputTanggal >= 22 && $inputTanggal <= 32) {

                                $zodiak = "Capricorn";
                                $karakteristik = "Kamu sebagai sosok yang serius dalam menjalani hidup. Memiliki sifat mandiri, disiplin, dan sangat gigih saat untuk meraih apa yang dicita-citakan.";
                                $percintaan = "Capricorn pun dikenal berdedikasi dalam mengejar targetnya. Karena itu, kamu akan cocok dengan Taurus, Virgo, atau Cancer terlebih karena sama-sama romantis.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else if ($inputTanggal < 22) {
                                $zodiak = "Sagitarius";
                                $karakteristik = "Kamu dikenal sebagai sosok yang ekstrovert, meski begitu Sagitarius juga sangat menghargai kesendirian. Sebagai zodiak Sagitarius dengan elemen api, Sagitarius paling tak suka dikekang dan sangat menyukai kebebasan.";
                                $percintaan = "Untuk menyeimbangkan sifat-sifat Sagitarius, diramalkan bahwa zodiak yang paling serasi denganmu adalah Aries dan Leo karena sama-sama petualang. Gemini dan Sagitarius juga bisa berjodoh karena sikapnya saling melengkapi.";

                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:#17a2b8;color:#fff'>
                                        <b>$zodiak</b>
                                    </div>
                                    <ul class='list-group list-group-flush'>
                                        <li class='list-group-item'>Karakteristik : &nbsp;&nbsp;<b>$karakteristik</b></li>
                                        <li class='list-group-item'>Jodoh : &nbsp;&nbsp;<b>$percintaan</b></li>
                                    </ul>
                                </div><br>
                                <hr>
                                ";
                            } else {
                                echo "
                                <div class='card mt-2' style='width: 25rem;'>
                                    <div class='card-header' style='background-color:red;color:#fff'>
                                        <b>Inputan Anda Salah!</b>
                                    </div>
                                </div><br>
                                <hr>
                                ";
                            }
                        }

                        ?>

                        <p class="mt-3" style="font-family: Poppins, Cursive; font-weight: 300; font-size: 12px;">Ini hanyalah aplikasi, selebihnya hanya percaya kepada Tuhan YME. CMIIWWW</p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer class="">
        <div class="container text-center">
            <p style="font-family: Poppins, Cursive; font-size: 14px;"><span style="font-weight: 600;">@Copyright</span> 2021 | Kelompok 3.</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>