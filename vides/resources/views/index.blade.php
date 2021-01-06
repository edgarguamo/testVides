<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vides</title>
    
    <!-- Styles-->
    <link rel="stylesheet" href="{{asset('css.normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet"> 
</head>
<body>
    <x-navbar/>
    <section class="page-name">
        <div class="position-title">
            <h1>
                Vides: Repositorio Dinamico de Hoteleria<br>
            </h1>

        </div>
        
        <div class="video-index">
            <video src="{{asset('videos/videoInicio.m4v')}}" autoplay loop muted></video>    
        </div>
        
    </section>
    <!-- Hoteles -->
    <section class="container-principal shadow-box">
        <h2>Hoteleria</h2>
        <div class="index-hospitality" >
            <article class="article-hospitality">
                <h3>Ocupacion de Hoteles</h3>
                <img class="imageGraphs" src="{{asset('img/home/exampleImage2.PNG')}}" alt="Image1">
                <a  class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <h3>Ocupacion de Hoteles</h3>
                <img class="imageGraphs" src="{{asset('img/home/exampleImage2.PNG')}}" alt="Image1">
                <a class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <a class="link-index" href="#">
                    <h3>Ocupacion de Hoteles</h3>
                    <img class="imageGraphs" src="{{asset('img/home/moreInformation.PNG')}}" alt="Image1">
                </a>
            </article>
        </div>
    </section>
    <div class="collage">
        <img class= "img1" src="{{asset('img/collage/collage3.jpg')}}" alt="">
        <img class= "img2" src="{{asset('img/collage/collage2.jpg')}}" alt="">
        <img class= "img3" src="{{asset('img/collage/collage4.jpg')}}" alt="">
        <img class= "img4" src="{{asset('img/collage/collage5.jpg')}}" alt="">
        <img class= "img5" src="{{asset('img/collage/collage6.jpg')}}" alt="">
        <img class= "img6" src="{{asset('img/collage/collage7.jpg')}}" alt="">
    </div>
    
    <Section class="container-principal shadow-box">
        <h2>Zonas de Interes</h2>
        <div class="index-hospitality">
            <article class="article-hospitality">
                <h3>Parques</h3>
                <img class="imageGraphs" src="{{asset('img/home/exampleImage2.PNG')}}" alt="Image1">
                <a class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <h3>Monumentos</h3>
                <img class="imageGraphs" src="{{asset('img/home/exampleImage2.PNG')}}" alt="Image1">
                <a class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <a class="link-index" href="#">
                    <h3>Ocupacion de Hoteles</h3>
                    <img class="imageGraphs" src="{{asset('/img/home/turismMoreInformation.PNG')}}" alt="Image1">
                </a>
            </article>
        </div>
    </Section>
    <x-footer/>
</body>
</html>