<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Caring Skin Store</h2>
            </div>
            <div class="col">
                <ul class="nav nav-pills nav justify-content-end">
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/User/katalog')?>">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manfaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/LandingPage/logoutUser')?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br/>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="..\assets\img\1.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
            <img src="..\assets\img\2.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
            <img src="..\assets\img\3.jpg" class="d-block w-100" >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br/>
    <h3 align="center">WHY ?</h3>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col">
            <img src="..\assets\img\4.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Memberikan Nutrisi Bagi Kulir
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Merawat wajah dengan skin care sejak dini dapat menutrisi kulit setelah seharian beraktivitas. Kulit akan menjadi sehat dan terawat berkat kandungan yang terdapat di dalam skin care, seperti kolagen yang dapat mengencangkan kulit, vitamin C yang mampu menetralisir radikal bebas pada kulit, hyaluronic acid yang dapat melembapkan, atau AHA BHA yang mampu mencerahkan kulit.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Menunda Munculnya Kerutan dan Garis Halus
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Selama masa remaja, apakah Anda pernah ingin tampil lebih tua agar dilihat dewasa? Sebaliknya, di saat Anda memasuki usia 20-an dan 30-an, Anda justru ingin terlihat lebih muda, termasuk dalam urusan kesehatan kulit. Seiring bertambahnya usia, kulit Anda akan kehilangan kekuatan dan elastisitasnya. Agar tetap kencang, penting untuk meremajakan kulit dengan menggunakan rangkaian skin care yang tepat sejak dini. Anda bisa memperlambat proses penuaan secara signifikan dengan rutinitas perawatan kulit yang tepat.    
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Meminimalisir dark-spot
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dark spot bisa disebabkan oleh banyak faktor, salah satunya yaitu karena paparan sinar UV. Jika Anda sering beraktivitas keluar rumah, sebaiknya lindungi kulit, khususnya wajah, dengan menggunakan sunscreen. Suncsreen merupakan salah satu rangkaian skin care yang tidak boleh sampai Anda lupakan. Kandungan SPF di dalamnya mencegah timbulnya dark spot yang merusak kesehatan kulit. Gunakanlah sunscreen yang nyaman dan tidak lengket di wajah. 
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col">
            <img src="..\assets\img\5.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col">
            <img src="..\assets\img\6.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col">
            <img src="..\assets\img\7.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col">
            <img src="..\assets\img\8.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col">
            <img src="..\assets\img\9.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col">
            <img src="..\assets\img\11.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
    <br/>
</body>
</html>