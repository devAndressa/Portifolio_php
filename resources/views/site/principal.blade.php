<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio de Desenvolvedora Full Stack</title>

    <link rel="stylesheet" href="css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <header class="header">
        <a href="#" class="logo">Andressa Monteiro.</a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="{{ route('site.principal')}}" class="active">Home</a>
            <a href="{{ route('site.sobre')}}">Sobre</a>
            <a href="{{ route ('site.projeto')}}">Projetos</a>
            <a href="{{ route ('site.contato')}}">Contatos</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1><span>Portifólio</span></h1>
            <div class="text-animate">
                <h3>Desenvolvedora Full Stack</h3>
            </div> 
            <br>

                <div class="btn-box">
                    <a href="#" class="btn">Contrate-me</a>
                    <a href="#" class="btn">Fale Comigo</a>
                </div>
                        
            </div>
        </div>

        <div class="home-sci">
            <a href="#"><i class='bx bxl-linkedin-square'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
        </div>

        <div class="home-imgHover"></div>
    </section>


    <script src="js/script.js"></script>
</body>
</html>