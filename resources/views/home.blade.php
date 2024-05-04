<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" src="public/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="bar-header">
    <header>
        <div class="logo-marca">
            <i class='bx bxl-dev-to'></i>
            Agência
        </div>

        <nav class="nav-bar">
            <div class="container-header">
                <ul class="list">
                    <li>Inicio</li active>
                    <li>Sobre</li>
                    <li>Soluções</li>
                    <li>Contato</li>
                    <li>Depoimentos</li>
                </ul>
            </div>
        </nav>

        <button class="btn-button">
            WhatsApp
        </button>
    </header>
  </div>
    <div class="container">
        <main class="home">
            <div class="container-home">
                
                <h1>Informações Sobre</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni earum delectus cupiditate voluptatum,
                sequi amet quibusdam reprehenderit porro asperiores optio voluptatem odio, quas tenetur, harum suscipit
                llo natus pariatur? Numquam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni earum delectus cupiditate voluptatum,
                    sequi amet quibusdam reprehenderit porro asperiores optio voluptatem odio, quas tenetur, harum suscipit
                    llo natus pariatur? Numquam.</p>
                
            </div>
            <div class="img-home" id="foto">
                <img src="{{asset('img/img1.png')}}" alt="">
            </div>
         
        </main>

     
    </div>

    <section id="section01" class="quemsomos">
        <div class="title">
            <h1 id="sobre">Sobre</h1>
        </div>
        <div class="container-sobre">
            <div class="container-section">
        
                <div class="div-container-section">
                    <h1 id="title-somos">Quem Somos</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae officiis praesentium atque? Magnam perferendis voluptas qui, in illo rerum soluta? Alias reprehenderit nam, ratione sint magni architecto ullam libero voluptas!</p>
                 
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae officiis praesentium atque? Magnam perferendis voluptas qui, in illo rerum soluta? Alias reprehenderit nam, ratione sint magni architecto ullam libero voluptas!</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae officiis praesentium atque? Magnam perferendis voluptas qui, in illo rerum soluta? Alias reprehenderit nam, ratione sint magni architecto ullam libero voluptas!</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae officiis praesentium atque? Magnam perferendis voluptas qui, in illo rerum soluta? Alias reprehenderit nam, ratione sint magni architecto ullam libero voluptas!</p>
                    <br>
                    
                </div>
            </div>
    
            <div class="div-container-section2">
                <div class="group">
                    <div class="cassiodev">
                        <div class="div-img">
                            <img src="{{asset('img/image.png')}}" alt="">
                            <h1>Cassio Estevão</h1>
                            <div id="icon">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </div>
                        </div>
                        
                       
                        <h6>Developer FullStack</h6>
                        <i id="github" class='bx bxl-github'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum nulla ducimus magni repellat voluptatem a nemo voluptas esse sit doloremque corporis itaque, cum animi ex in quaerat, laudantium dignissimos.</p>
                        
                    </div>
                    <div class="douglasdev">
                        <div class="div-img">
                            <img src="{{asset('img/image.png')}}" alt="">
                            <h1>Cassio Estevão</h1>
                            <div id="icon">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </div>
                        </div>
                        
                       
                        <h6>Developer FullStack</h6>
                        <i id="github" class='bx bxl-github'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum nulla ducimus magni repellat voluptatem a nemo voluptas esse sit doloremque corporis itaque, cum animi ex in quaerat, laudantium dignissimos.</p>
                        
                    </div>
                </div>
        </div>
        </div>

    </section>


</body>

</html>
