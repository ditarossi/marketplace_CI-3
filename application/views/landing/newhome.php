<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Landing Page</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img class="logo" src="assets\img\logo.png"></a>
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#">Katalog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="<?php echo base_url('Auth/index')?>">Login</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Hello, welcome to our store!<br><span>Caring Skin Store</span></h2>
                <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Quia autem labore consequatur odit officia maiores magni delectus, 
                nostrum dolor perferendis mollitia voluptates laboriosam excepturi 
                obcaecati dicta corporis neque cupiditate cumque?
                </p>
                <a href="#">Get Product</a>
            </div>
            <div class="imgBox">
                <img src="assets/img/new2.png" class="new1">
            </div>
        </div>
            <ul class="thumb">
                    <li><img width="100px" src="assets/img/new2.png" onclick="imgSlider('assets/img/new2.png');changeColor('#FF416C')"></li>
                    <li><img width="100px" src="assets/img/new1.png" onclick="imgSlider('assets/img/new1.png');changeColor('#ffc062')"></li>
                    <li><img width="100px" src="assets/img/new3.png" onclick="imgSlider('assets/img/new3.png');changeColor('#1af5be')"></li>
            </ul>
            <ul class="sci">
                    <li><a href="#"><img width="50px" src="assets/img/fb.png"></a></li>
                    <li><a href="#"><img width="30px" src="assets/img/ig.png"></a></li>
                    <li><a href="#"><img width="50px" src="assets/img/twt.png"></a></li>
            </ul>
    </section>
    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.new1').src = anything;
        }
        function changeColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
</body>
</html>