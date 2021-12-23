<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Katalog</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <style>
                         @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
            *
            {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body{
                margin: 20px;
                background: #ffff;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                font-family: 'Montserrat', sans-serif;
                height: 100vh;
            }
            header{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                padding: 20px 100px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            header .logo{
                position: relative;
                max-width: 100px;
            }
            header ul{
                position: relative;
                display: flex;
            }
            header ul li{
                list-style: none;
                text-decoration: none;
            }
            header ul li a{
                display: inline-block;
                color: #333;
                font-weight: 400;
                margin-left: 40px;
                text-decoration: none;
            }
        </style>
    </head>
</head>
<body>
    <section>
        <header>
            <a href="#"><img class="logo" src="..\assets\img\logo.png"></a>
            <ul>
                <li><a href="<?php echo base_url();?>User">Home</a></li>
                <li><a href="<?php echo base_url();?>User/katalog">Katalog</a></li>
                <li><a href="#">Manfaat</a></li>
                <li><a href="#">Keranjang</a></li>
                <li><a href="#">Pemesanan</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="<?php echo base_url('Auth/logout')?>">Logout</a></li>
            </ul>
        </header>
    </section>
    <div class="container-fluid">
            <div class="row">
                <?php foreach ($produk as $p) : ?>

                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php $p->Nama_Produk ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                <?php endforeach ; ?>
            </div>
        </div>
</body>
</html>