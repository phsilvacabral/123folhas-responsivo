<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img_principais/icon_logo.png" type="image/x-icon">
    <title>123folhas</title>
    <!--<script src="index.js" defer></script>-->
</head>

<body>

<?php
        $conn = new mysqli("localhost", "root", "PUC@1234", "123folhas");
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sqlN = "SELECT Cod_Lugar, Nome_Lugar, Cidade, Estado, Pais, Continente, Nivel_dificul, Preco_aprox, HTML_pagina, Desc_Destino FROM destino WHERE Pais = 'Brasil'";
        $resultN = $conn->query($sqlN);
        if ($resultN->num_rows > 0) {
            while ($row = $resultN->fetch_assoc()) {
                $destinos[] = array(
                    "title" => $row['Nome_Lugar'],
                    "placeName" => $row['Nome_Lugar'],
                    "description" => $row['Desc_Destino'],
                    "preco" => $row['Preco_aprox'],
                    "dificulty" => $row['Nivel_dificul'],
                    "imgUrl" => "img_principais/logo.png",  
                    "link" => "https://biotrip.com.br/destino/petar-com-vale-das-ostras/"
                );
            };
        };

        print_r($destinos); 
    ?>



    <header class="navegar">
        <nav class="barranav">
            <div class="logodentro">
                <a href="perfil/index.html"><img src="img_principais/logo_semfundo.png" alt="logo 123 folhas"
                        class="logo"></a>
            </div>
            <div class="emcoluna">
                <div id="divbusca"><span>Buscar</span><img src="img_principais/lupa.png" alt="Buscar" id="lupa_busca">
                </div>

                <div class="alinharletra">
                    <a href="nacionais/" class="letra">NACIONAIS</a>
                    <a href="internacionais/" class="letra">INTERNACIONAIS</a>
                    <a href="blog/" class="letra">BLOG</a>
                    <a href="123recompensa/" class="letra">123RECOMPENSA</a>
                </div>
            </div>

            <div class="spaceperfil">
                <a href="perfil/">
                    <figure><img src="img_principais/perfil_padrao.jpg" alt="logo 123 folhas" class="perfil">
                        <figcaption>(1º nome)</figcaption>
                    </figure>
                </a>
            </div>
        </nav>
    </header>

    <main>

        <div id="popup" class="popup">
            <span class="close" id="closePopup">&times;</span>
            <div id="titulo_div">
                <span id="titulo">Pesquisa</span>
                <div class="popup-content">
                    <form action="" id="form_pesquisa" method="get">
                        <div style="display: flex; align-items: center;">
                            <img src="img_principais/lupa.png" alt="lupa busca">
                            <input type="text" id="pesquisa_text" name="nome" placeholder="Procure pelo nome">
                        </div>
                        <hr>

                        <span class="filtro_ordenar">Filtros</span>

                        <div id="inputs_filtros">
                            <label class="custom-checkbox">
                                <input type="checkbox" id="meu-checkbox" name="filtro_internacional">
                                <span class="checkbox-text">Internacional</span>
                            </label>

                            <label class="custom-checkbox">
                                <input type="checkbox" id="meu-checkbox" name="filtro_nacionais">
                                <span class="checkbox-text">Nacionais</span>
                            </label>

                            <label class="custom-checkbox">
                                <input type="checkbox" id="meu-checkbox" name="filtro_eua">
                                <span class="checkbox-text">EUA</span>
                            </label>
                        </div>

                        <span class="filtro_ordenar">Ordenar por</span>

                        <div id="inputs_filtros">

                            <label class="custom-checkbox">
                                <input type="checkbox" id="meu-checkbox" name="ordenar_preco">
                                <span class="checkbox-text">Preço</span>
                            </label>

                        </div>

                        <input type="submit" value="Buscar" id="submit_buscar_popup">
                    </form>


                </div>
            </div>

        </div>

        <script>

            document.getElementById("divbusca").addEventListener("click", function () {
                document.getElementById("popup").style.display = "block";
            });

            document.getElementById("closePopup").addEventListener("click", function () {
                document.getElementById("popup").style.display = "none";
            });

            document.getElementById("submit_buscar_popup").addEventListener("click", function () {
                document.getElementById("popup").style.display = "none";
            });

        </script>


    </main>

    <section class="firstnavegarcorpo">
        <div class="destinosN"><a href="" id="destinoslink">Nacionais</a></div>
        <div class="moverallcorpo">
            <p class="descubraN">"Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em
                um só destino!"</p>
        </div>
        <div class="caixas">
            <!--<div class="bordacaixas">
                <a href="#" class="linkcaixa">
                    <img src="../123folhas-main/img_principais/logo.png" alt="" class="fotodentro">
                    <div class="linha0">
                        <div>
                            <p class="titulocaixa">Título Caixa</p>
                            <p class="lugarcaixa">Lugar</p>
                            <div class="escritacaixa">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic eum,
                                    assumenda consequuntur esse quia ullam minima veritatis possimus voluptatibus
                                    officia dolor omnis dignissimos,
                                    recusandae ipsam sit, labore obcaecati. Nisi, soluta.</p>
                            </div>
                        </div>
                    </div>
                        <div class="secaoprecodificuldade">
                            <p class="precocaixa">preço</p>
                            <p class="dificuldadecaixa">Dificuldade</p>
                        </div>
                    </div>

            </div></a>-->
        </div>

    </section>
    <section class="navegarcorpo">
        <div class="destinosN">
            <a href="" id="destinoslink">Internacionais</a>
        </div>
        <div class="moverallcorpo">
            <p class="descubraN">"Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em
                um só destino!"</p>
        </div>

        <div class="caixas"></div>

    </section>

    <section class="navegarcorpo">
        <div class="destinosN"><a href="" id="destinoslink">Blogs</a></div>
        <div class="moverallcorpo">
            <p class="descubraN">Descubra insights e inspirações valiosas para um futuro sustentável em nosso blog.
                Comece a leitura e seja parte da mudança positiva que o mundo precisa</p>
        </div>
        <div class="caixasblog">
            <div class="linhablog">
                <a href="">
                    <div class="bordacaixasblog">
                        <div class="conteudocaixasblog"></div>
                        <div class="alinharescritasblog">
                            <div class="conteudoescritablog">Melhores parques ecológicos do Paraná para
                                levar o mozão nesse dia dos namorados
                            </div>
                            <div class="autordatablog">
                                <div class="autorblog">by Roberto Carlos</div>
                                <div class="datablog">30/06/2005</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bordacaixasblog">
                        <div class="conteudocaixasblog"></div>
                        <div class="alinharescritasblog">
                            <div class="conteudoescritablog">Melhores parques ecológicos do Paraná para
                                levar o mozão nesse dia dos namorados
                            </div>
                            <div class="autordatablog">
                                <div class="autorblog">by Roberto Carlos</div>
                                <div class="datablog">30/06/2005</div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="linhablog">
                <a href="">
                    <div class="bordacaixasblog">
                        <div class="conteudocaixasblog"></div>
                        <div class="alinharescritasblog">
                            <div class="conteudoescritablog">Melhores parques ecológicos do Paraná para
                                levar o mozão nesse dia dos namorados
                            </div>
                            <div class="autordatablog">
                                <div class="autorblog">by Roberto Carlos</div>
                                <div class="datablog">30/06/2005</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bordacaixasblog">
                        <div class="conteudocaixasblog"></div>
                        <div class="alinharescritasblog">
                            <div class="conteudoescritablog">Melhores parques ecológicos do Paraná para
                                levar o mozão nesse dia dos namorados
                            </div>
                            <div class="autordatablog">
                                <div class="autorblog">by Roberto Carlos</div>
                                <div class="datablog">30/06/2005</div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

    </section>







    <script>
    const lista = [{ title: '<?php echo $destinos[7]['title']?>', placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista aaaaaaaa aaaaaaaa aaaaaaaaaa aaaaa", placeName: "Tupi Paulista", description: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic eum, assumenda consequuntur esse quia ullam minima veritatis possimus voluptatibus officia dolor omnis dignissimos, recusandae ipsam sit, labore obcaecati. Nisi, soluta.", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
    { title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" }]
        

    function main() {
        const boxesContainer = document.getElementsByClassName('caixas').item(0);
        for (let n = 0; n < '<?php echo count($destinos)?>'; n++) {
             objectDestination = <?php echo json_encode($elemento); ?>;

            <?php foreach ($destinos as $elemento): ?>
                var elementoJavaScript = <?php echo json_encode($elemento); ?>;
                console.log('Lugar: ' + elementoJavaScript.title);

            <?php endforeach; ?>

            const createBoxElement = document.createElement('div')
            createBoxElement.classList.add('bordacaixas')
            boxesContainer.appendChild(createBoxElement)

            const aElement = document.createElement('a')
            aElement.setAttribute('href', objectDestination.link)
            aElement.classList.add('linkcaixa')
            createBoxElement.appendChild(aElement)

            const imgElement = document.createElement('img')
            imgElement.setAttribute('src', objectDestination.imgUrl)
            imgElement.setAttribute('alt', objectDestination.placeName)
            imgElement.classList.add('fotodentro')
            aElement.appendChild(imgElement)

            const lineBox = document.createElement('div')
            lineBox.classList.add('linha0')
            aElement.appendChild(lineBox)

            const emptyDiv = document.createElement('div');
            lineBox.appendChild(emptyDiv)

            const titleP = document.createElement('p');
            titleP.textContent = objectDestination.title;
            titleP.classList.add('titulocaixa');
            emptyDiv.appendChild(titleP);

            const placeP = document.createElement('p');
            placeP.textContent = objectDestination.placeName;
            placeP.classList.add('lugarcaixa');
            emptyDiv.appendChild(placeP);

            const descP = document.createElement('div');
            descP.classList.add('escritacaixa');
            emptyDiv.appendChild(descP)

            const descriptionP = document.createElement('p')
            descriptionP.textContent = objectDestination.description;
            descP.appendChild(descriptionP);

            const priceDificulty = document.createElement('div');
            priceDificulty.classList.add('secaoprecodificuldade');
            lineBox.appendChild(priceDificulty);

            const boxPrice = document.createElement('p');
            boxPrice.textContent = String("R$" + objectDestination.preco);
            boxPrice.classList.add('precocaixa');
            priceDificulty.appendChild(boxPrice);

            const boxDificulty = document.createElement('p');
            boxDificulty.textContent = String("Dificuldade: " + objectDestination.dificulty);
            boxDificulty.classList.add('dificuldadecaixa');
            priceDificulty.appendChild(boxDificulty);
        }
    }

    main()
</script>





    <footer>
        <div id="dados_div">
            <div class="dados_footer">
                <p>Desenvolvedores</p>
                <ul>
                    <li>Arthur Nsenga &ensp;&ensp;&ensp;&ensp;<a href="linkedin.com" target="_blank"><img
                                src="img_principais/linkedin.png" alt="linkedin"></a><a href="github.com"
                            target="_blank"><img src="img_principais/github.png" alt="github"></a></li>
                    <li>Daniel Mussee&ensp;&ensp;&ensp; &ensp;<a href="linkedin.com" target="_blank"><img
                                src="img_principais/linkedin.png" alt="linkedin"></a><a href="github.com"
                            target="_blank"><img src="img_principais/github.png" alt="github"></a></li>
                    <li>Fábio Gortz &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="linkedin.com"
                            target="_blank"><img src="img_principais/linkedin.png" alt="linkedin"></a><a
                            href="github.com" target="_blank"><img src="img_principais/github.png" alt="github"></a>
                    </li>
                    <li>João Hernandes &ensp;&ensp;<a href="linkedin.com" target="_blank"><img
                                src="img_principais/linkedin.png" alt="linkedin"></a><a href="github.com"
                            target="_blank"><img src="img_principais/github.png" alt="github"></a></li>
                    <li>Lucas Kempa &ensp;&ensp;&ensp;&ensp;&ensp;<a
                            href="https://www.linkedin.com/in/lucas-kempa-90a265286/" target="_blank"><img
                                src="img_principais/linkedin.png" alt="linkedin"></a><a href="github.com"
                            target="_blank"><img src="img_principais/github.png" alt="github"></a></li>
                    <li>Pedro Cabral&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a
                            href="https://www.linkedin.com/in/pedro-henrique-silva-cabral-2b820420b/"
                            target="_blank"><img src="img_principais/linkedin.png" alt="linkedin"></a><a
                            href="https://github.com/phsilvacabral" target="_blank"><img src="img_principais/github.png"
                                alt="github"></a></li>
                </ul>
            </div>

            <div class="dados_footer">
                <p>Professores</p>
                <ul>
                    <li>Cristina de Souza&ensp;&ensp; &ensp;-&ensp;&ensp;&ensp;Banco de Dados</li>
                    <li>Emeson Paraíso&ensp;&ensp;&ensp;&ensp;&ensp;-&ensp;&ensp;&ensp;Interação Humano Computador</li>
                    <li>Maicris Fernandes&ensp;&ensp;&ensp;-&ensp;&ensp;&ensp;Programação WEB</li>
                    <li>Sheila Reinehr&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;-&ensp;&ensp;&ensp;Engenharia de
                        requisitos</li>
                </ul>
            </div>

            <div class="dados_footer" id="links_footer">
                <p>Links</p>
                <ul>
                    <li><a href="nacionais/">Viagens Nacionais</a></li>
                    <li><a href="internacionais/">Viagens Internacionais</a></li>
                    <li><a href="blog/">Blogs</a></li>
                    <li><a href="perfil/">Perfil</a></li>
                    <li><a href="123recompensa/">123recompensa</a></li>
                </ul>
            </div>
        </div>
        <div id="copy123folhas"><a href="../">&copy;123folhas</a></div>
    </footer>

</body>

</html>