<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio Desenvolvedora Andressa Monteiro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <section class="about" id="about">
        <h2 class="heading"><span>Sobre</span></h2>

        <div class="about-img">
            <img src="img/img.jpg" alt="">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h3>Desenvolvedora Full Stack!</h3>
            <p>Como desenvolvedora iniciante, 
                estou focada em aprender e aplicar as melhores práticas em PHP e Laravel,
                com um forte interesse no desenvolvimento e gerenciamento de bancos de dados. 
                Estou comprometida em construir uma base sólida de conhecimentos, 
                explorando cada etapa do desenvolvimento full stack para criar aplicações funcionais e seguras.
                Busco constantemente aprimorar minhas habilidades e expandir meu entendimento das tecnologias
                para entregar soluções eficazes, que atendam às necessidades dos usuários e se adaptem às demandas
                do mercado.
            </p> 

            <div class="btn-box btns">
                <a href="#" class="btn">Leia Mais</a>
            </div>
        </div>
    </section>

    <section class="education" id="education">
        <h2 class="heading">Minha <span>Jornada</span></h2>

        <div class="education-row">
            <div class="education-collumn">
                <h3 class="title">Formação</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar-check'></i>2007 - 2009</div>
                            <h3>Ensino Médio - Unidade Escolar Paulo Ferraz</h3>
                            <p>Período de conclusão do Ensino Médio</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar-check'></i>2022 - Em Andamento</div>
                            <h3>Ensino Superior - Universidade Caxias do Sul (UCS)</h3>
                            <p>Cursando Análise de Desenvolvimento de Sistemas, 
                                no 2° semestre.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="education-collumn">
                <h3 class="title">Experiencia</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar-check'></i>2021 - 2024</div>
                            <h3>Atacado do Xuxa</h3>
                            <p>Durante o periodo de 2 anos e 8 meses tive várias experiências como trabalhar no caixa, 
                                no pacote e com marketing digital.  </p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar-check'></i>2017 - 2021</div>
                            <h3>Prefeitura Municipal de Altos</h3>
                            <p>Trabalhei como auxiliar administrativo durante 4 anos e 7 meses, 
                                cuidando do atendimento ao público, agendando consultas e almoxarifado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <header class="header">
        <a href="#" class="logo">Andressa Monteiro.</a>
        <nav class="navbar">
            <a href="{{route('site.principal')}}" class="active">Home</a>
            <a href="{{ route('site.projeto')}}">Projetos</a>
            <a href="{{ route('site.contato')}}">Contato</a>
        </nav>
    </header>

</body>
</html>