<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vides</title>
  <link rel="stylesheet" href="{{asset('css.normalize.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/style2.css')}}">



</head>
<body class="bg-gray-100">
  <x-navbar/>

  <div class="w-full h-screen bg-center bg-no-repeat bg-cover wallpaper2" >
      <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center">
          <div class="mx-4 text-center text-white">
              <h1 class="font-bold text-6xl mb-4">Vides <span>Repositorio dinamico de Turismo</span></h1>
              <h2 class="font-bold text-3xl mb-12">Descubriendo las maravillas de nuestra tierra</h2>

          </div>
      </div>
  </div>

    <!-- Inicio Hoteles-->
    <div class="w-full ">
      <div class="flex bg-white mt-16" style="height:600px;">
          <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
              <div>
                  <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Hoteles <span class="text-indigo-600">Loja</span></h2>
                  <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
                  <div class="flex justify-center lg:justify-start mt-6">
                      <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Get Started</a>
                      <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Learn More</a>
                  </div>
              </div>
          </div>
          <div class="block lg:block lg:w-1/2 divsionHotel">
              <div class="h-full object-cover z-0 divide-opacity-75" style="background-image: url(https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_1300,q_auto,w_2000/itemimages/15/15/15154902.jpeg">
                  <div class="h-full bg-black opacity-25"></div>
              </div>
          </div>
      </div>
  </div>

    <!-- Fin Hoteles-->

    <h2 class="my-16 mx-32 text-4xl">Imagenes</h2>

  <!-- Inicio Collage-->

  <div class="w-full my-16">
    <!-- Inicio bloque 1 -->
      <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-4 2xl:row-span-2 2xl:pb-8 ml-2 pt-4 px-6 rounded-lg">
        <div class="bg-gray-900 lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:my-2">
          <div class="2xl:w-1/3 rounded-lg static">
            <div class="md:flex-shrink-0 static">
              <img src="{{asset('img/collage/collage4.jpg')}}" alt="mountains" class="w-full h-52 rounded-lg rounded-b-none object-cover opacity-75">
            </div class=" mt-3 space-x-4">
            <p class="text-white text-xl 2xl:text-2xl font-semibold px-7 lg:px-9 2xl:pxt-4 2xl:mx-2 text-center">Calles Historicas</p>
        </div>
      </div>

    <!-- Fin bloque 1 -->

    <!-- Inicio bloque 2 -->

        <div class="bg-gray-900 lg:order-2 lg:row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl pb-4 mb-5 lg:mb-0">
          <div class="md:flex-shrink-0">
            <img src="{{asset('img/collage/collage5.jpg')}}" alt="mountains" class="w-full h-52 rounded-lg rounded-b-none object-cover opacity-75">
          </div>
          <div class="mt-8 mx-1 lg:mx-1">
            <p class="text-white text-lg lg:text-xl 2xl:text-4xl font-semibold px-6 2xl:px-8 lg:pl-5 lg:pr-8 text-center">Parques</p>
          </div>
        </div>

      <!-- Fin bloque 2 -->

      <!-- Inicio bloque 3 -->

        <div class="bg-gray-900 lg:order-3 lg:row-span-2 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:mb-0 ">
          <div class="md:flex-shrink-0 static">
            <img src="{{asset('img/collage/collage6.jpg')}}" alt="mountains" class="w-full h-56 rounded-lg rounded-b-none object-cover opacity-75">
          </div class="lg:mx-1">
          <div class=" ml-5 mr-11">
            <p class="text-white text-xl 2xl:text-4xl font-bold px-2 lg:px-3 text-center">Edificios</p>
          </div>
        </div>
      
      <!-- Fin bloque 3 -->

      <!-- Inicio bloque 4 -->

        <div class="bg-gray-900 lg:order-4 lg:row-span-2 2xl:row-span-1 col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0  lg:pb-14 ">
          <div class="md:flex-shrink-0 static">
            <img src="{{asset('img/collage/collage2.jpg')}}" alt="mountains" class="w-full h-56 rounded-lg rounded-b-none object-cover opacity-75">
          </div class="lg:mx-1">
          <div class="px-3 mb-5 lg:mb-0">
            <p class="text-white text-lg 2xl:text-4xl font-semibold px-4 text-center ">Lugares de Interes</p>
          </div>
        </div>

      <!-- Fin bloque 4 -->

      <!-- Inicio bloque 5 -->

        <div class="bg-gray-900 lg:order-2 lg:row-span-4 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:pb-4 2xl:h-screen">
          <div class="md:flex-shrink-0 static">
            <img src="{{asset('img/collage/collage3.jpg')}}" alt="mountains" class="w-full h-full rounded-lg rounded-b-none object-cover opacity-75">
          </div class="lg:mx-1">
          <div class="px-3 lg:px-5  mb-5 lg:mb-0">
            <p class="text-white text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 text-center">Monumentos</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin bloque 5 -->

    <!-- Fin Collage-->

    <h2 class="my-16 mx-32 text-4xl">Hoteles</h2>

    <!-- Inicio Hoteles-->
  
    <div
        class="container mx-auto mt-16 mb-32 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3 2xl:px-64"
      >
        <div class="rounded-xl bg-gray-800 flex flex-col p-8 shadow-2xl">
          <img src="{{asset('img/home/exampleImage2.PNG')}}" alt="imagen">
          <div class="flex-grow text-white">
            <h2 class="text-xl title-font font-medium mb-3 text-center">Distribucion de Hoteles</h2>
            <p class="leading-relaxed text-sm text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci blanditiis earum optio iusto eveniet 
              expedita nesciunt voluptatem debitis laudantium molestias provident beatae 
            </p>
          </div>
        </div>
        <div class="rounded-xl bg-gray-800 flex flex-col p-8 shadow-2xl">
          <img src="{{asset('img/home/exampleImage2.PNG')}}" alt="imagen">
          <div class="flex-grow text-white">
            <h2 class="text-xl title-font font-medium mb-3 text-center">Distribucion de Habitaicones</h2>
            <p class="leading-relaxed text-sm text-justify ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci blanditiis earum optio iusto eveniet 
              expedita nesciunt voluptatem debitis laudantium molestias provident beatae 
            </p>
          </div>
        </div>
        <div class="rounded-xl bg-gray-800 flex flex-col p-8 shadow-2xl">
          <div class="flex-grow text-white">
            <h2 class="text-xl title-font font-medium mb-3 text-center">Mas informacion</h2>
            <img class="content-center items-center text-center" src="{{asset('img/home/moreInformation.PNG')}}" alt="imagen">
          </div>
        </div>
      </div>
  
      <!-- Fin Hoteles-->
      <x-footer/>
</body>
</html>