<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="/CSS/nav.css">
        <link rel="stylesheet" href="/CSS/style.css">
        <title>Pipo Papelaria</title>
    </head>

    <body>
        <!-- Primeiras informações pequenas no topo -->
        <header class="superinfo-bg">
            <div class="superinfo">
                <p>Seg / Sex - 08:00 às 18:00</p>
                <a href="">55+ 14 99807-3232</a>
                <p>Av. João Ferraz Neto, 1267, J. Itamaraty, Jaú</p>
            </div>
        </header>

        <!-- Barra onde fica a logo, barra de busca, favoritos, login e carrinho -->
        <div class="navbarlogo-bg">
            <section id="navbarlogo" class="container-fluid">
                <div class="logo">
                    <img src="/img/logo.svg" alt="Logo">
                    <h1 id="logo">Pipo Papelaria</h1>
                </div>
                <div id="search-bar">
                    <input id="bar" type="text" placeholder="O que você procura?">
                    <button id="lupa" type="submit"><img src="/img/lupa.svg" alt=""></button>
                </div>
                <section class="icones">
                    <div id="favoritos">
                        <a href="#"><img src="/img/Favorito.svg"></a>
                    </div>

                    <div id="login">
                        <a href="#"><img src="/img/Login.svg"></a>
                        <p class="facalogin"><b>Olá! <a href="#">Faça Login</a></b><br>
                            ou <a href="#">Cadastre-se</a></p>
                    </div>

                    <div id="carrinho">
                        <a href="#"><img src="/img/Carrinho.svg"></a>
                        <div class="circle">
                            <p>2</p>
                        </div>
                    </div>
                </section>
        </div>
        </section>

        <!-- Fundo da nav -->
        <div class="nav-bg">
            <!--Propriedades do grid, tamanho e tipo da fonte  -->
            <div class="nav-container">
                <!-- Começou o menu da papelaria -->
                <nav class="papelaria">
                    <!-- Lista que vai comportar o menu papelaria e todo o resto -->
                    <ul>
                        <!-- Primeiro item - Papelaria, 1° Categoria -->
                        <li>Papelaria<i class="bi bi-chevron-down"></i>
                            <!-- Dentro da primeira lista, uma div que vai comportar o dropdown normal -->
                            <div class="dropdown-papelaria">
                                <ul>
                                    <!-- dropdown padrão que conhecemos -->
                                    <li>
                                        <!-- Dentro desta li, temos uma div que vai comportar o subdrop da primeira categoria (cadernos) -->
                                        <div class="cadernos">
                                            <!-- Título da 1° categoria, e div dentro de div -->
                                            <a href="#">Cadernos <img src="/img/setinha_dir.svg"></a>
                                            <!-- Div que vai suportar o subdrop -->
                                            <div class="subdrop-cadernos">
                                                <!-- Lista com título do subdrop e itens -->
                                                <ul>
                                                    <li>
                                                        <div class="cadernos-container">
                                                            <h1>Cadernos</h1>
                                                            <a href="#">Cadernos Simples</a>
                                                            <a href="#">Cadernos Decorados</a>
                                                            <a href="#">Cadernos de Time</a>
                                                            <a href="#">Sketchbook</a>
                                                            <a href="#">Cadernos folha A5</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="canetas">
                                            <a href="#">Canetas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-canetas">
                                                <ul>
                                                    <li>
                                                        <h1>Canetas</h1>
                                                        <a href="#">Canetas Esferográficas</a>
                                                        <a href="#">Canetas Brush</a>
                                                        <a href="#">Canetas em Gel</a>
                                                        <a href="#">Canetas Fineliner</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="pastas">
                                            <a href="#">Pastas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-pastas">
                                                <ul>
                                                    <li>
                                                        <h1>Pastas</h1>
                                                        <a href="#">Pastas Simples</a>
                                                        <a href="#">Pastas de Personagem</a>
                                                        <a href="#">Pastas Fichário</a>
                                                        <a href="#">Pastas Escolares</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="mochilas">
                                            <a href="#">Mochilas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-mochilas">
                                                <ul>
                                                    <li>
                                                        <h1>Mochilas</h1>
                                                        <a href="#">Mochilas Simples</a>
                                                        <a href="#">Mochilas Grandes</a>
                                                        <a href="#">Mochilas de Personagens</a>
                                                        <a href="#">Mochilas de Time</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="estojos">
                                            <a href="#">Estojos <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-estojos">
                                                <ul>
                                                    <li>
                                                        <h1>Estojos</h1>
                                                        <a href="#">Estojos Simples</a>
                                                        <a href="#">Estojos de Personagens</a>
                                                        <a href="#">Estojos de Time</a>
                                                        <a href="#">Estojos com Nomes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="borrachas">
                                            <a href="#">Borrachas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-borrachas">
                                                <ul>
                                                    <li>
                                                        <h1>Borrachas</h1>
                                                        <a href="#">Borrachas Simples</a>
                                                        <a href="#">Borrachas de Bixinho</a>
                                                        <a href="#">Borrachas de Time</a>
                                                        <a href="#">Borrachas Coloridas</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="apontadores">
                                            <a href="#">Apontadores <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-apontadores">
                                                <ul>
                                                    <li>
                                                        <h1>Apontadores</h1>
                                                        <a href="#">Apontadores Simples</a>
                                                        <a href="#">Apontadores C/ Formatos</a>
                                                        <a href="#">Apontadores C/ Lixo</a>
                                                        <a href="#">Apontadores S/ Lixo</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lapiseiras">
                                            <a href="#">Lapiseiras <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-lapiseiras">
                                                <ul>
                                                    <li>
                                                        <h1>Lapiseiras</h1>
                                                        <a href="#">Lapiseiras Simples</a>
                                                        <a href="#">Lapiseiras de Plástico</a>
                                                        <a href="#">Lapiseiras de Metal</a>
                                                        <a href="#">Lapiseiras 0.5</a>
                                                        <a href="#">Lapiseiras 0.7</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="tesouras">
                                            <a href="#">Tesouras <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-tesouras">
                                                <ul>
                                                    <li>
                                                        <h1>Tesouras</h1>
                                                        <a href="#">Tesouras Simples</a>
                                                        <a href="#">Tesouras Coloridas</a>
                                                        <a href="#">Tesouras C/ Ponta</a>
                                                        <a href="#">Tesouras S/ Ponta</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="marcatextos">
                                            <a href="#">Marca-Textos <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-marcatextos">
                                                <ul>
                                                    <li>
                                                        <h1>Marca-Textos</h1>
                                                        <a href="#">Marca-Textos Simples</a>
                                                        <a href="#">Marca-Textos Coloridos</a>
                                                        <a href="#">Marca-Textos Ponta Fina</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="planners">
                                            <a href="#">Planners <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-planners">
                                                <ul>
                                                    <li>
                                                        <h1>Planners</h1>
                                                        <a href="#">Planners Simples</a>
                                                        <a href="#">Planners do Ano</a>
                                                        <a href="#">Planners Empresarial</a>
                                                        <a href="#">Planners Escolar</a>
                                                        <a href="#">Planners de Personagens</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="agendas">
                                            <a href="#">Agendas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-agendas">
                                                <ul>
                                                    <li>
                                                        <h1>Agendas</h1>
                                                        <a href="#">Agendas Simples</a>
                                                        <a href="#">Agendas Pessoais</a>
                                                        <a href="#">Agendas Empresariais</a>
                                                        <a href="#">Agendas Comemorativas</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="postits">
                                            <a href="#">Post-its <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-postits">
                                                <ul>
                                                    <li>
                                                        <h1>Post-its</h1>
                                                        <a href="#">Post-it Simples</a>
                                                        <a href="#">Post-it Colorido</a>
                                                        <a href="#">Post-it de Bixinhos</a>
                                                        <a href="#">Post-it Temático</a>
                                                        <a href="#">Post-it Redondo</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="canetinhas">
                                            <a href="#">Canetinhas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-canetinhas">
                                                <ul>
                                                    <li>
                                                        <h1>Canetinhas</h1>
                                                        <a href="#">Canetinhas simples</a>
                                                        <a href="#">Canetinhas Touch</a>
                                                        <a href="#">Canetinhas Bobbie Goods</a>
                                                        <a href="#">Canetinhas 268 Cores</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="reguas">
                                            <a href="#">Réguas <img src="/img/setinha_dir.svg"></a>
                                            <div class="subdrop-reguas">
                                                <ul>
                                                    <li>
                                                        <h1>Réguas</h1>
                                                        <a href="#">Réguas Simples</a>
                                                        <a href="#">Réguas 15cm</a>
                                                        <a href="#">Réguas 30cm</a>
                                                        <a href="#">Réguas de Madeira</a>
                                                        <a href="#">Réguas de Metal</a>
                                                        <a href="#">Réguas Transparentes</a>
                                                        <a href="#">Réguas Coloridas</a>
                                                        <a href="#">Réguas Flexíveis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <nav class="casa">
                    <ul>
                        <li>Casa<i class="bi bi-chevron-down"></i>
                            <div class="dropdown-casa">
                                <ul>
                                    <li>
                                        <div class="vasos">
                                            <a href="#">Vasos <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-vasos">
                                                <ul>
                                                    <li>
                                                        <h1>Vasos</h1>
                                                        <a href="#">Vasos Simples</a>
                                                        <a href="#">Vasos Decorados</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="decoracao">
                                            <a href="#">Decoração <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-decoracao">
                                                <ul>
                                                    <li>
                                                        <h1>Decoração</h1>
                                                        <a href="#">Decoração Simples</a>
                                                        <a href="#">Decoração em 3D</a>
                                                        <a href="#">Decoração de Personagens</a>
                                                        <a href="#">Decoração de Time</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="portacanetas">
                                            <a href="#">Porta Canetas <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-portacanetas">
                                                <ul>
                                                    <li>
                                                        <h1>Porta Canetas</h1>
                                                        <a href="#">Porta Canetas Simples</a>
                                                        <a href="#">Porta Canetas em 3D</a>
                                                        <a href="#">Porta Canetas de Personagens</a>
                                                        <a href="#">Porta Canetas de Time</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <nav class="kits">
                    <ul>
                        <li>Kits<i class="bi bi-chevron-down"></i>
                            <div class="dropdown-kits">
                                <ul>
                                    <li>
                                        <div class="kitlapis">
                                            <a href="#">Kit Lápis <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-kitlapis">
                                                <ul>
                                                    <li>
                                                        <h1>Kit Lápis</h1>
                                                        <a href="#">Kit Lápis de Escrever</a>
                                                        <a href="#">Kit Lápis de Cor</a>
                                                        <a href="#">Kit Lápis de Personagens</a>
                                                        <a href="#">Kit Lápis de Time</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="kitmarcador">
                                            <a href="#">Kit Marcadores <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-kitmarcador">
                                                <ul>
                                                    <li>
                                                        <h1>Kit Marcadores</h1>
                                                        <a href="#">Kit Marcadores Simples</a>
                                                        <a href="#">Kit Marcadores Coloridos</a>
                                                        <a href="#">Kit Marcadores de Personagens</a>
                                                        <a href="#">Kit Marcadores de Time</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="kitanotacao">
                                            <a href="#">Kit Anotações <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-kitanotacao">
                                                <ul>
                                                    <li>
                                                        <h1>Kit Anotações</h1>
                                                        <a href="#">Kit Anotações Simples</a>
                                                        <a href="#">Kit Anotações Escolares</a>
                                                        <a href="#">Kit Anotações Empresariais</a>
                                                        <a href="#">Kit Anotações de Personagens</a>
                                                        <a href="#">Kit Anotações de Time</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <nav class="personalizados">
                    <ul>
                        <li>Personalizados<i class="bi bi-chevron-down"></i>
                            <div class="dropdown-personalizados">
                                <ul>
                                    <li>
                                        <div class="plannerspers">
                                            <a href="#">Planners Personalizados <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-plannerspers">
                                                <ul>
                                                    <li>
                                                        <h1>Planners Personalizados</h1>
                                                        <a href="#">Planners Personalizados C/ Nome</a>
                                                        <a href="#">Planners Personalizados C/ Imagens</a>
                                                        <a href="#">Planners Personalizados C/ Times</a>
                                                        <a href="#">Planners Personalizados C/ Personagens</a>
                                                        <a href="#">Planners Personalizados C/ Filmes</a>
                                                        <a href="#">Planners Personalizados C/ Séries</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="agendaspers">
                                            <a href="#">Agendas Personalizadas <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-agendaspers">
                                                <ul>
                                                    <li>
                                                        <h1>Agendas Personalizadas</h1>
                                                        <a href="#">Agendas Personalizadas C/ Nome</a>
                                                        <a href="#">Agendas Personalizadas C/ Imagens</a>
                                                        <a href="#">Agendas Personalizadas C/ Times</a>
                                                        <a href="#">Agendas Personalizadas C/ Personagens</a>
                                                        <a href="#">Agendas Personalizadas C/ Filmes</a>
                                                        <a href="#">Agendas Personalizadas C/ Séries</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="cadernospers">
                                            <a href="#">Cadernos Personalizados <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-cadernospers">
                                                <ul>
                                                    <li>
                                                        <h1>Cadernos Personalizados</h1>
                                                        <a href="#">Cadernos Personalizados C/ Nome</a>
                                                        <a href="#">Cadernos Personalizados C/ Imagens</a>
                                                        <a href="#">Cadernos Personalizados C/ Times</a>
                                                        <a href="#">Cadernos Personalizados C/ Personagens</a>
                                                        <a href="#">Cadernos Personalizados C/ Filmes</a>
                                                        <a href="#">Cadernos Personalizados C/ Séries</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <nav class="impressao">
                    <ul>
                        <li>Impressão 3D<i class="bi bi-chevron-down"></i>
                            <div class="dropdown-impressao">
                                <ul>
                                    <li>
                                        <div class="personagens">
                                            <a href="#">Personagens <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-personagens">
                                                <ul>
                                                    <li>
                                                        <h1>Personagens</h1>
                                                        <a href="#">Personagens de Filmes</a>
                                                        <a href="#">Personagens de Séries</a>
                                                        <a href="#">Personagens de Jogos</a>
                                                        <a href="#">Personagens de Livros</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="utilidades">
                                            <a href="#">Utilidades <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-utilidades">
                                                <ul>
                                                    <li>
                                                        <h1>Utilidades</h1>
                                                        <a href="#">Porta copos</a>
                                                        <a href="#">Suportes</a>
                                                        <a href="#">Porta Lápis</a>
                                                        <a href="#">Chaveiros</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="miniaturas">
                                            <a href="#">Miniaturas <img src="/img/setinha_dir.svg" alt=""></a>
                                            <div class="subdrop-miniaturas">
                                                <ul>
                                                    <li>
                                                        <h1>Miniaturas</h1>
                                                        <a href="#">Carros</a>
                                                        <a href="#">Bonecos</a>
                                                        <a href="#">Construções</a>
                                                        <a href="#">Lugares</a>
                                                        <a href="#">Monumentos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="banner">
            <div class="escuro"></div>
            <h1>Tudo que você precisa para escrever sua história!</h1>
        </div>


        <div class="carrossel-container">
            <h3 class="compre">Compre por<br> Categoria:</h3>
            <span class="seta" onclick="rolar(-200)">&#10094;</span>

            <div class="carrossel" id="carrossel">
                <div class="item">
                    <a href="#"><img src="/img/caneta.jpg" alt="Canetas"></a>
                    <p>Canetas</p>
                </div>
                <div class="item">
                    <a href="#"><img src="/img/caderno.jpg" alt="Cadernos"></a>
                    <p>Cadernos</p>
                </div>
                <div class="item">
                    <a href="#"><img src="/img/borracha.jpg" alt="Borracha"></a>
                    <p>Borracha</p>
                </div>
                <div class="item">
                    <a href="#"><img src="/img/tesoura.jpg" alt="Tesouras"></a>
                    <p>Tesouras</p>
                </div>
                <div class="item">
                    <a href="#"><img src="/img/marcatexto.jpg" alt="Marca-texto"></a>
                    <p>Marca-texto</p>
                </div>
                <div class="item">
                    <a href="#"><img src="/img/postit.jpg" alt="Post-it"></a>
                    <p>Post-it</p>
                </div>
                <div class="item">
                    <a href="#"><img src="/img/estojo.jpg" alt="Estojos"></a>
                    <p>Estojos</p>
                </div>
            </div>
            <span class="seta" onclick="rolar(-200)">&#10095;</span>
        </div>

        <div class="cardcontainer">
            <div class="card">
                <img class="imgproduto" src="/img/cardestojo.png" alt="">
                <div class="cardheader">
                    <h1>Estojo Panda</h1>
                    <span>R$ 29,90</span>
                </div>
                <div class="cardbody">
                    <p>Charmoso e prático, com design de pandinha fofo e
                        bochechas coradas. Ideal para organizar canetas,
                        lápis e pequenos acessórios do dia a dia com muito estilo.
                    </p>
                </div>
                <div class="cardfooter">
                    <button class="comprarbtn">Comprar agora</button>
                    <button class="carrinhobtn"><img class="carrinhoicon" src="/img/Carrinho.svg" alt=""></button>
                </div>
            </div>

            <div class="card">
                <img class="imgproduto" src="/img/cardgiz.png" alt="">
                <div class="cardheader">
                    <h1>Giz de Cera Foguete</h1>
                    <span>R$ 15,90</span>
                </div>
                <div class="cardbody">
                    <p>Colorir nunca foi tão divertido! Conjunto de giz
                        de cera em formato de foguete, fácil de segurar
                        e cheio de cores vibrantes para soltar a criatividade.
                    </p>
                </div>
                <div class="cardfooter">
                    <button class="comprarbtn">Comprar agora</button>
                    <button class="carrinhobtn"><img class="carrinhoicon" src="/img/Carrinho.svg" alt=""></button>
                </div>
            </div>

            <div class="card">
                <img class="imgproduto" src="/img/cardmarcatexto.jpg" alt="">
                <div class="cardheader">
                    <h1>Kit Marca Texto Aroma</h1>
                    <span>R$ 27,90</span>
                </div>
                <div class="cardbody">
                    <p>
                        Kit de Marca-Textos lindos com 6 cores
                        maravilhosas para ebelezar os seus textos
                        e destacar o que realmente importa. Com técnologia
                        fantástica também possui aroma.
                    </p>
                </div>
                <div class="cardfooter">
                    <button class="comprarbtn">Comprar agora</button>
                    <button class="carrinhobtn"><img class="carrinhoicon" src="/img/Carrinho.svg" alt=""></button>
                </div>
            </div>

            <div class="card">
                <img class="imgproduto" src="/img/cardcorretivo.jpg" alt="">
                <div class="cardheader">
                    <h1>Corretivo Dino</h1>
                    <span>R$ 11,90</span>
                </div>
                <div class="cardbody">
                    <p>Um jeito divertido de corrigir! A Fita Corretiva Dino
                        combina praticidade com um design superfofo que deixa
                        qualquer estojo mais alegre.
                    </p>
                </div>
                <div class="cardfooter">
                    <button class="comprarbtn">Comprar agora</button>
                    <button class="carrinhobtn"><img class="carrinhoicon" src="/img/Carrinho.svg" alt=""></button>
                </div>
            </div>
        </div>

        <div class="quadrosbg">
            <div class="quadros">
                <div class="quadrosgrid">
                    <div class="quadro1">
                        <div class="overlay"></div>
                        <h1>MOCHI<br>LAS</h1>
                    </div>

                    <div class="quadro2">
                        <div class="overlay"></div>
                        <h1>PLANNERS</h1>
                    </div>

                    <div class="quadro3">
                        <div class="overlay"></div>
                        <h1>AGENDAS</h1>
                    </div>

                    <div class="quadro4">
                        <div class="overlay"></div>
                        <h1>LÁ<br>PIS</h1>
                    </div>

                    <div class="quadro5">
                        <a class="maisvendidos" href="#">MAIS VENDIDOS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="enderecobg">
            <section class="endereco">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.9672336838173!2d-48.54583856117385!3d-22.28047211297101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8a7f16e30d33d%3A0x597ee6b96fe1f417!2sAv.%20Jo%C3%A3o%20Ferraz%20Neto%2C%201267%20-%20Jardim%20Ferreira%20Dias%2C%20Ja%C3%BA%20-%20SP%2C%2017209-655!5e0!3m2!1spt-PT!2sbr!4v1759699327614!5m2!1spt-PT!2sbr"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </iframe>
                <div class="enderecotxt">
                    <h1>Venha nos visitar<br>em nossa loja física!</h1>
                    <p class="localizacao">
                        Estamos localizados na Avenida João Ferraz Neto, 1267, Jardim Itamaraty
                    </p>
                    <p class="enderecodesc">
                        Faça-nos uma visita e aproveite a qualidade de nossos produtos com o conforto e excelência no
                        atendimento de nossa loja física!
                    </p>
                    <button>FAZER UMA VISITA</button>
                </div>
            </section>
        </div>

        <div class="midias">
            <div class="youtube">
                <a target="_blank href="#"><img src="/img/youtuberosa.svg" alt=""></a>
            </div>

            <div class="tiktok">
                <a href="https://www.tiktok.com/@papelaria.pipo?is_from_webapp=1&sender_device=pc"  target="_blank"><img src="/img/tiktokrosa.svg" alt=""></a>
            </div>

            <div class="whatsapp">
                <a href="https://wa.me/5514996678293" target="_blank"> <img src="/img/zaprosa.svg" alt=""></a>
            </div>

            <div class="instagram">
                <a href="https://www.instagram.com/papelaria_pipo?igsh=MWlkbjg5djhxbG4wMA==" target="_blank"><img src="/img/instarosa.svg" alt=""></a>
            </div>

            <div class="facebook">
                <a href="#" target="_blank"><img src="/img/facerosa.svg" alt=""></a>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-container">

                <div class="footer-sobre">
                    <div class="logofinal">
                        <img class="logopipofinal" src="/img/logofinal.svg" alt=""><h2 class="logo">Pipo Papelaria</h2>
                    </div>
                    <p>
                        Com uma seleção incrível de produtos para o trabalho, estudo e decoração,
                        trazemos itens que deixam o seu dia a dia mais prático e cheio de estilo.
                        Aqui, você encontra desde material de escritório até acessórios personalizados,
                        tudo pensado para tornar a sua rotina mais colorida e inspiradora.
                        Venha viver essa experiência com a gente!
                    </p>

                    <div class="metodos">
                        <h3>Métodos de Pagamento</h3>
                        <div class="metodos-img">
                            <img src="/img/visa.svg" alt="Visa">
                            <img src="/img/mastercard.svg" alt="Mastercard">
                            <img src="/img/elo.svg" alt="Elo">
                            <img src="/img/pix.png" alt="Pix">
                            <img src="/img/paypal.png" alt="PayPal">
                        </div>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Informações</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Como Comprar</a></li>
                        <li><a href="#">Prazo de Entrega</a></li>
                        <li><a href="#">Trocas e Devoluções</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Navegação</h3>
                    <ul>
                        <li><a href="#">Papelaria</a></li>
                        <li><a href="#">Casa</a></li>
                        <li><a href="#">Kits</a></li>
                        <li><a href="#">Personalizados</a></li>
                        <li><a href="#">Impressão 3D</a></li>
                    </ul>
                </div>

                <div class="footer-contato">
                    <h3>Entre em contato</h3>
                    <a class="telefone" href="tel:55+ 14 99807-3232" target="_blank">55+ 14 99807-3232</a>
                    <a class="email" href="mailto:primassieu@gmail.com" target="_blank">primassieu@gmail.com</a>
                    <p>Avenida João Ferraz Neto, 1267, Jardim Itamaraty<br>Jaú, SP</p>

                    <div class="newsletter">
                        <h3>Newsletter</h3>
                        <form>
                            <input type="email" placeholder="Cadastre seu e-mail">
                            <button>ENVIAR</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2025 Pipo Papelaria. Todos os direitos reservados.</p>
            </div>
        </footer>   
    </body>
</html>
<!-- Sucesso -->