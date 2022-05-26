<!DOCTYPE html>
<html>
   <head>
    <title>
        <?php 
            if(isset($_GET['opcao']) == FALSE) {
                echo "Celeste";

            }elseif($_GET['opcao'] == 2 ){
                echo "Celeste - Sobre";
            }elseif($_GET['opcao'] == 3){
                echo "Celeste - Personagens";               
            }elseif($_GET['opcao'] == 4){
                echo "Celeste - Criticas do jogo";
            }else {
                echo "Página não encontrada";
            }
        ?>
   </title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img1/logo.png" type="image/x-png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

   </head>
<body style="background-color: #fde2e4;">
    <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-light" style="background-color: #b9375e;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="img1/logo.png" alt="" width="65" height="35" class="d-inline-block align-text-top">
                      <i><strong>Celeste game</strong></i>
                  </a>
                </div>
              </nav>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e27396;">
                <div class="container-fluid">
                 
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #ffafcc">
                          <li><a class="dropdown-item" href="index.php?opcao=2">Sobre</a></li>
                          <li><a class="dropdown-item" href="index.php?opcao=3">Personagens</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="index.php?opcao=4">Críticas Socias no jogo </a></li>
                        </ul>
                      </li>
                  </div>
                </div>
              </nav>
          </div>
        </div>
      </div>
      
      <?php if(isset($_GET['opcao'] )== FALSE) { ?>                               
      <div class="container">
        <div class="row">
          <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img1/celeste.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img1/celeste2.jfif" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img1/celeste3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          &nbsp;   
     </div>
        </div>
        <div class="row">
          <div class="col">
            &nbsp;   
          </div>
        </div>
        <div class="container">
      <div class="row">
        <div class="col" style="text-align: right">

            <figure class="figure">
              <img src="img1/celeste7.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
              <figcaption class="figure-caption" style="text-align: justify;">Ajude Madeline a enfrentar seus demônios internos em sua jornada até o topo da 
                Montanha Celeste, nesse jogo meticuloso e super afiado de plataforma dos criadores do clássico multiplayer TowerFall
              </figcaption>
            </figure>
           </div>
      <div class="col" style="text-align: center;">

        <figure class="figure">

            <img src="img1/celest6.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

            <figcaption class="figure-caption" style="text-align: justify;">
            Uma aventura para um jogador focada em narrativa, com gostinho de infância, que conta com um elenco encantador e uma história
             emocionante de autodescoberta
            </figcaption>

        </figure>

    </div>



    <div class="col" style="text-align: left">

        <figure class="figure">

            <img src="img1/celest5.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

            <figcaption class="figure-caption" style="text-align: justify;">
              Uma montanha gigantesca com mais de 700 telas de desafios de plataforma exigentes e segredos ardilosos
              </figcaption>

        </figure>
 
    </div>
    </div>
    <?php }elseif ($_GET['opcao'] == 2) { ?>
        <div class="container">
            <div class="row">
              <div class="col">
              <img src="img1/celeste8.jpeg" class="d-block w-100">  
              <br>
              <h3 style="text-align: center;"><i>"Celeste" jogo com participação brasileira</i></h3>
              <br>
              <h5>
              
              Repleto de desafios e nós na garganta, Celeste joga uma luz forte e definitiva em um assunto delicado (e muito evitado pela maioria das pessoas até
              pouco tempo atrás), de um jeito tão impactante que nada vai voltar a ser o que era antes.</h5> 
              <br>
            <p style="text-align:justify">
              Celeste é um game de plataforma que narra a tentativa de uma jovem menina de escalar a montanha Celeste. Escape de todos os perigos do caminho para chegar ao 
              topo da montanha em uma jornada que combina aventura e autoconhecimento. Celeste foi eleito melhor jogo indie de 2018 no Game Awards. 
          </p>
          </div>
            <div class="col">
              <div class="accordion" id="accordionExample" >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #e27396;">
                      Introdução
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Introdução</i></h4>
                     <p> No jogo, você controla Madeline, uma garota que quer chegar ao topo da montanha Celeste, sendo que no começo, você acha que seu objetivo é apenas simples,
                        mas ao desenrolar da história você descobre que ela sofre de depressão e tem crises de pânico, assim sendo, que ao subir a montanha, ela quer se libertar das
                         coisas do passado, demonstrando que ela pode conseguir seguir em frente com a vida.
                     </p>
                       <p>
                        O jogo foi desenvolvido em parceria pelo estúdio canadense Matt Make Games (responsável pelo desenvolvimento) e do estúdio brasileiro MiniBoss (design do jogo).
                       </p>

                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #e27396;">
                      Som
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                         <h4><i>Som</i></h4>
                          <p style="text-align: justify;"> 
                            Os efeitos sonoros do game combinam e são extremamente agradáveis, sendo que um ponto alto, é para as vozes dos personagens,
                            tanto Madeline quanto os personagens secundários, conversam no sistema parecido com o do Banjo Kazooie, ou seja, ao conversar
                            com alguém você ouve um “Blá Blá Blá” cada um com um timbre, e outro detalhe, é que o tom da conversa muda, por exemplo,
                            Madeline quando está com vergonha ou brava, ela fala num tom mais baixo passando um ar de sarcasmo, já quando está alegre 
                            ela fala num tom mais alto.
                          </p>
                          <p style="text-align: justify;">
                            As músicas do game são excelente, em cada fase do jogo, a música combina com o fundo, e com o animo, passando alegria, 
                            preocupação, dó entre outros sentimentos em cada contexto
                          </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #e27396;">
                      Gráfico 
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Gráfico</i></h4>
                      <p style="text-align: justify;">
                        Os gráficos e efeitos do jogo são feitos totalmente em Pixel Art, com uma riqueza de detalhes incríveis.
                        Além disso, ao usar dash por exemplo, a cor do cabelo de Madeline muda, para termos uma noção se ainda podemos 
                        ou não usar o dash, além de que outros efeitos, como ao escalar, ela ficar cansada, e ficar piscando perdendo 
                        assim as forças ao escalar as paredes.
                      </p>
                      <p style="text-align: justify;">
                        O jogo possui também algumas imagens conceituais ao passar as fases, e ao tirar selfie no meio da campanha.
                      </p>
                      <p style="text-align: justify;">
                        O menu para escolher as fases, lembra um pouco o Donkey Kong Country, sendo que é uma montanha em 3D, e facilita
                         você identificar onde que Madeline está exatamente.
                      </p>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: #e27396;">
                      Controles 
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Controles</i></h4>
                      <p style="text-align: justify;">
                        Os controles do game são:<br>
                         A / Y – Pular<br>
                         X / B – Usar Dash<br>
                         RT / LT / RB / LB – Segurar-se na parede (usar para escalar)<br>
                         B – Conversar com personagens secundários<br>
                      </p>
                      <p style="text-align: justify;">
                        Os controles do game são extremamente exatos e precisos, e cada fase possui partes, se você morre na fase, você volta pro começo de cada parte.
                      </p>
                      <p style="text-align: justify;">
                        O jogo lembra uma mistura de Super Meat Boy com Mega Man X, mesclando assim uma dificuldade, e algumas vezes alguns puzzles com agilidade, e o 
                        sistema de Dash do Mega Man X.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="background-color: #e27396;">
                      Diversão
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Diversão</i></h4>
                      <p style="text-align: justify;">
                        Celeste conseguiu me cativar de uma forma, que faz tempo que não sinto, onde ao começar a jogar o game, queria passar as fases o mais rápido
                         possível para descobrir o que acontecia com ela, eu realmente fiquei curioso com a história.
                      </p>
                      <p style="text-align: justify;">
                        Um ponto interessante, é que dificilmente vemos games tratando de assuntos tão tristes, para quem já teve alguém próximo com depressão, ou sabe
                         o quanto essa doença é prejudicial, os autores do game passaram uma forma de encarar o problema, até mesmo dando dicas de como pode enfrentar 
                         dando um passo de cada vez e respirando fundo.
                      </p>
                      <p style="text-align: justify;">
                        O jogo mesmo na campanha normal (sem o lado B) já tem trechos bem difíceis de serem concluídos, eu não me arrisquei a passar as fases no mais difícil.
                         Eu levei cerca de 5 horas e meia para zerar o game, sendo que coletei 60 morangos (de 175) e morri 978 vezes.
                      </p>
                      <p style="text-align: justify;">
                        Apesar do número elevado de mortes, como o nascimento é rápido, não foi algo frustrante, na verdade foi prazeroso zerar o game, e ver o final da história da Madeline.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="background-color: #e27396;">
                      Outras informações
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Outras informações</i></h4>
                      <p style="text-align: justify;">
                        Ao zerar o game, você entende o motivo de serem Morangos que estão sendo coletados.
                      </p>
                      <p style="text-align: justify;">
                        Outro detalhe, é que ao terminar o game, você abre uma fase extra dentro da montanha, mas para acessar ela, você precisa encontrar os
                         corações azuis escondidos nas outras fases.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="background-color: #e27396;">
                      Preços
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Preços</i></h4>
                      <p style="text-align: justify;">
                        Na PSN, o jogo está R$ 61,50<br>
                        Na Steam, o jogo está R$ 36,99<br>
                        Na Xbox Live, o jogo está R$ 39,00<br>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth" style="background-color: #e27396;">
                      Considerações Finais
                    </button>
                  </h2>
                  <div id="collapseEigth" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Considerações Finais</i></h4>
                      <p style="text-align: justify;">
                        Celeste passa um sensação de algo nostálgico e agradável, sendo que ao jogar poucas vezes, você provavelmente irá querer zerar para 
                        ver o que acontece na história.
                      </p>
                      <p style="text-align: justify;">
                        Fazia um certo tempo que um jogo não me prendia tanto assim, se você gosta de desafios, e de pixel art, tente reservar um tempo para jogar Celeste.
                      </p>
                    </div>
                  </div>
                </div>
                 
                <div class="row">
                  <div class="col">
                    &nbsp;  
                  </div>
                </div>
     
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wpPbNgFEetU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <br>
                 <div class="row">
                  <div class="col">
                    &nbsp;  
                  </div>
                </div>
                <p style="text-align: justify;">
                  Level Design é a área de desenvolvimento de jogos responsável por criar os ambientes do jogo, tanto do ponto de vista do gameplay quanto da ficção.
                   É a partir desses ambientes (chamados de fases, mundos, missões, etc) que o jogador irá interagir com o universo do jogo.
                </p>
                <p style="text-align: justify;">
                  Celeste é um jogo indie de plataforma bastante desafiador e complexo, mas que consegue cativar jogadores de todos os níveis de habilidade.
                </p>

              </div>
            </div>
          
            </div>    
          </div>    
  </div>    
  </div>
</div>
</div>
           <?php }elseif($_GET['opcao'] == 3){ ?>     
            <div class="row">
        <div class="col">
          &nbsp;  
        </div>
      </div>
         <div class="container">
            <div class="row">
              <div class="col">
              <img src="img1/celeste9.jpg" class="d-block w-100">  
              <br>
              <h3><i>Celeste: Conheça os personagens</i></h3>
              <br>
              <h5>
              
                Esta é uma lista de personagens que aparecem em Celeste. (Nem todos os personagens ainda foram adicionados aqui)</h5> 
              <br>
            <p style="text-align:justify">
              Madeline é forte e determinada, escalando a montanha muitos personagens ressaltam a sua coragem, pórem alguns não concordaram muito, chamando-a de tola.
              Ainda sim a mesma continua escalando com a finalidade de dispersar pensamentos indesejados e assumir o controle de sua vida. Madeline tem linhas de voz
              escondidas no jogo.  
          </p>
          </div>

            <div class="col">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                    style="background-color: #e27396;">
                      Madeline
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Madeline</i></h4>
                     <p style="text-align: justify;">
                       Madeline é uma jovem canadense baixa e com pele pálida, olhos castanhos e longos cabelos ruivos/marsala, ela usa uma jaqueta de neve aquática,
                       calças cinza escuras, botas pretas e cinza, e sua mochila de escalada marrom equipada com um tapete vermelho para dormir e garrafa de
                       ela usa uma jaqueta de neve aquática, calças cinza escuras. De acordo com os criadores de <i>Celeste</i>, ela é transgênero. A mãe de Madeline
                      tem cabelo azul e o pai tem cabelo branco. O cabelo de Madeline realmente gira essas cores uma vez que ela se esgotou e como ela recupera seu traço,
                       respectivamente.</p> 
                     <p>
                       <strong> Madeline é forte e determinada, escalando a montanha muitos personagens ressaltam a sua coragem, pórem alguns não concordaram muito, chamando-a de tola.
                       Ainda sim a mesma continua escalando com a finalidade de dispersar pensamentos indesejados e assumir o controle de sua vida.  
                       Madeline tem linhas de voz escondidas no jogo. </strong> Elas estão presentes na faixa "In the Mirror" e são executados pela compositora do jogo, Lena Raine.
                        Se as linhas são invertidas, elas revelam um lamento falado sobre a condição de Madeline e como ela se assusta com os processos de pensamento resultantes 
                        de sua ansiedade. Então você ouve o som de soluçar depois que ela termina de falar.
                     </p>
                     <div class="row">
                      <div class="col">
                        &nbsp;  
                      </div>
                    </div>
                    <img src="img1/madelineaccordion.png" class="d-block w-100"> 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="background-color: #e27396;">
                      Theo
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Theo</i></h4>
                       <p>Theo é um homem alto brasileiro-americano com pele castanho escuro, olhos castanhos e cabelos castanhos encaracolados com uma barba grande. 
                          Ele usa um casaco xadrez verde, calças azuis escuras, um cachecol amarelo e uma mochila marrom. Ele tem várias tatuagens, dois desenhos de 
                          círculos em seu ombro, uma pena em seu pescoço,e um desenho floral em seu antebraço. Theo é um jovem descontraído, amigável e feliz, com uma obsessão
                           pelas mídias sociais. Ele adora tirar fotos, e só quer se divertir explorando a Montanha Celeste. Ele frequentemente faz coisas "patetas" durante o jogo, 
                           como cair de cara de um pequeno penhasco para se reunir com Madeline e tirar selfies de espelho aleatoriamente em um templo antigo.
                      </p>
                      <div class="row">
                        <div class="col">
                          &nbsp;  
                        </div>
                      </div>
                      <p><b>Selfie capítulo 4</b></p>
                      <img src="img1/theoaccordion.png"  class="d-block w-100">
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="background-color: #e27396;">
                       Badeline
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Badeline</i></h4>
                      <P style="text-align: justify;">Badeline é pequena como Madeline e tem longos cabelos roxos, pele pálida e olhos vermelhos. Ela usa uma jaqueta roxa com calças 
                        pretas e botas, lembrando, nos olhos de Theo, uma "versão gótica de Madeline". No jogo, ela geralmente aparece levitando no ar 
                        cercada por uma aura roxa. Em sua arte oficial ela não tem aura, mas ainda é retratada levitando no ar. Como Madeline, ela tem um 
                        cacho desviado no cabelo.
                      </P>  
                      <p>
                        Ela parece ser a parte insegura de Madeline, incorporando, entre outras coisas, seus medos: solidão, inadequação, fracasso, desesperança, 
                        etc. Ela pensa de uma forma mais lógica ao invés de seguir seu coração como Madeline é visto para fazer ao longo da história. Badeline odeia ser
                         incriminada, e isso provoca sua raiva no templo Espelho. Ela acredita em lidar com seus problemas de antemão em vez de cometer erros e resolvê-los 
                         mais tarde. Badeline é uma poderosa entidade mágica, capaz de romper vários pés de hard rock quando em um estado animado ou deprimido.Ela é referida
                          apenas como Badeline internamente e nas cartas de negociação steam do jogo. [2] Durante todo o jogo ela é referida apenas como "Parte de Você/Eu".
                      </p> 
                      <div class="row">
                        <div class="col">
                          &nbsp;  
                        </div>
                      </div>  
                      <img src="img1/Badeline.jpeg"  class="d-block w-100">                  
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                    style="background-color: #e27396;">
                      Velha (Old woman)
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Velha (Old Woman)</i></h4>
                      <p style="text-align: justify;">
                        A velha é baixinha, tem cabelo branco e tem rugas no rosto. Ela usa uma jaqueta verde, calças marrons e sapatos (verde-azulado escuro na arte
                         promocional), e se sustenta em uma equipe.
                      </p>
                      <p style="text-align: justify;">
                        Old Woman é uma personagem em Celeste e uma das poucas pessoas conhecidas que habitam a montanha. Ela demonstra grande conhecimento sobre a montanha,
                       constantemente alertando Madeline sobre seus poderes. Sua atitude tende a ser despreocupada, servindo principalmente como um meio para Madeline 
                       desabafar seus sentimentos e revelar mais sobre seu caráter. Madeline se refere a ela como "Vovó" no capítulo 9, possivelmente revelando que ela seja
                        avó de Madeline 
                      </p>  
                      <div class="row">
                        <div class="col">
                          &nbsp;  
                        </div>
                      </div>  
                      <img src="img1/oldwoman.jpeg"  class="d-block w-50">               
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                    style="background-color: #e27396;">
                       Sr. Oshiro
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Sr. Oshiro</i></h4>
                      <p style="text-align: justify;">
                        O Sr. Oshiro é residente na Montanha Celeste e um dos personagens que Madeline encontra em sua escalada. Ele aparece pela primeira vez dentro 
                        do Celestial Resort no Capítulo 3, e aparece pela última vez no epílogo. Ele é o antigo proprietário do Celestial Resort e administra o hotel de 
                        forma independente, apesar da evidente falta de clientes. Segundo a Velha, a razão pela qual ele fica no hotel é que ele é uma alma perdida, e o
                         hotel é "muito mais do que apenas um hotel para ele", como evidente pelos documentos encontrados no nível. No epílogo, o Sr. Oshiro abre e sai do
                          hotel para assistir à "festa" com todos para ter uma torta caseira de morango.
                      </p>
                      <p>
                        Embora sua forma possa ser mudada, o Sr. Oshiro geralmente aparece como um homem japonês com um grande nariz rosa e cabelo verde-escuro. Ele usa um
                         suéter verde, calças pretas, um cinto marrom e sapatos marrons. Em sua forma enfurecida, sua cabeça é muito aumentada, sua pele fica branca, ele 
                         ganha quatro presas (duas no topo, duas na parte inferior), olhos vermelhos e orelhas pontiagudas.
                      </p>
                      <div class="row">
                        <div class="col">
                          &nbsp;  
                        </div>
                      </div>  
                      <img src="img1/sr.jpeg"  class="d-block w-50" >                 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"
                    style="background-color: #e27396;">
                       Pássaro
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p style="text-align: justify;">
                        <h4><i>Pássaro</i></h4>
                        O Pássaro é um personagem azul, parecido com um corvo. O propósito habitual do Pássaro é ensinar ao jogador um novo elemento de jogabilidade em Celeste, 
                        ou anunciar a chegada da Velha Mulher (como o Pássaro é frequentemente encontrado perto dela).
                      </p>   
                      <p style="text-align: justify;">
                        No Prólogo, o Pássaro primeiro ensina o jogador a se mover e escalar, depois salva Madeline de cair em um abismo ensinando o jogador a correr, permitindo que
                       Madeline faça isso para o outro lado com segurança. O Pássaro mais tarde aparece perto da Velha Mulher no Capítulo 4, Capítulo 6, O Epílogo e Capítulo 8, além 
                       de aparecer por conta própria no B-Side do Capítulo 2 (para ensinar o jogador que eles podem saltar de Blocos de Sonhos), O Lado B do Capítulo 7 (para ensinar o
                        jogador como wallbounce), no C-Side do Capítulo 8 (para ensinar o jogador como fazer um hiper), e no Capítulo 9 (para ensinar o jogador como acenar).
                      </p>      
                      <div class="row">
                        <div class="col">
                          &nbsp;  
                        </div>    
                      <img src="img1/passaro.png" class="d-block w-50">    
                    </div>
                  </div>
                </div> 

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"
                    style="background-color: #e27396;">
                      Alex
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Alex</i></h4>
                    <p style="text-align: justify;">
                      Alex é irmã de Theo, que ele descreve como uma "rockstar" e tendo uma noção muito boa do que ela quer fazer na vida. Ela está estudando para se tornar uma advogada de 
                      direitos civis, enquanto também luta com questões semelhantes a Madeline; Theo espera apoiá-la da melhor maneira possível.
                    </p>  
                    <p style="text-align: justify;">
                      Se você nomear Madeline Alex no início do jogo, Theo se refere a ela como Maddy em seu lugar.
                    </p> 
                    <p style="text-align: justify;">
                      Quando Theo menciona o nome de Alex, o texto é vermelho, da mesma cor de quando ele menciona o nome de Madeline.
                    </p>           
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth"
                    style="background-color: #e27396;">
                      Carlos
                    </button>
                  </h2>
                  <div id="collapseEigth" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Carlos</i></h4>
                      <p style="text-align: justify;">
                       é o falecido avô de Theo, que havia escalado a Montanha Celeste muito antes de seu neto nascer. Ele nunca falou muito sobre a montanha para Theo, 
                       mas deixou para trás várias lembranças que Theo e Alex olham. Ele era amigo da vovó em uma idade adulta.
                       </p>                  
                    </div>
                  </div>
                </div>
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"
                    style="background-color: #e27396;">
                      
                      Ex da Madeline
                    </button>
                  </h2>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p style="text-align: justify;">
                        <h4><i>Carlos</i></h4>
                        Nunca referida por qualquer nome, a pessoa de cabelos verdes faz sua única aparição quando Madeline tenta chamá-los em seu sonho.
                         A maneira como eles falam com Madeline implica que os dois datam em um ponto, mas desde então se separaram. Eles não falam com ela 
                         há muito tempo na vida real.
                      </p>                                     
                    </div>
                  </div>
                </div>
                 
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"
                    style="background-color: #e27396;">
                     Mamãe
                    </button>
                  </h2>
                  <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p style="text-align: justify;">
                        <h4><i>Mamãe</i></h4>
                        A mãe de Madeline só aparece uma vez no jogo, ouvindo Madeline pelo telefone depois que este acorda de um pesadelo. Em geral, ela está ciente do que Madeline
                        luta e tenta apoiá-la, mas não tem certeza de como. Ela sabe que Madeline fica deprimida e tem ataques de pânico, com um ataque de pânico visto no Capítulo 4:
                        Golden Ridge.
                      </p>                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            </div>    
          </div>   
  </div>    
  </div>
</div>
</div>   
            <?php }elseif($_GET['opcao'] == 4) { ?>
                <div class="row">
        <div class="col">
          &nbsp;  
        </div>
      </div>
         <div class="container">
            <div class="row">
              <div class="col">
              <img src="img1/celeste10.jpg" class="d-block w-100">  
              <br>
              <h3><i>Celeste: Referências e metáforas introduzidas no jogo</i></h3>
              <br>
              <h5>
              
                Já adiantamos: Celeste é lindo! Com delicadeza e sensibilidade certeiras, o game de plataforma lançado em janeiro de 2018, 
                pela desenvolvedora canadense Matt Makes Games (do jogo TowerFall), fala sobre saúde mental e depressão, mas principalmente 
                sobre superação e olhar para si com um pouco mais de carinho.</h5> 
              <br>
            <p style="text-align:justify">
              Celeste é também repleto de metáforas sobre a vida: simples e bonita à primeira vista, mas às vezes muito difícil, extremamente frustrante
               e cheia de obstáculos que precisam ser superados, para que se consiga avançar e chegar a algum lugar. Além da narrativa incrível, Celeste 
               é protagonizado por uma personagem feminina, a fofíssima, impetuosa e super cativante Madeline.  
          </p>
          </div>

            <div class="col">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                    style="background-color: #e27396;">
                    Simples, mas não tão simples…
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Simples, mas não tão simples…</i></h4>
                     <p style="text-align: justify;">
                      A princípio Celeste é apenas a montanha mágica que dá nome ao jogo, mas não se engane, ela é fundamental para a história de Madeline, 
                      que parte em uma aventura com o objetivo de chegar ao seu topo. No início, ninguém sabe o porquê, aparentemente nem a protagonista,
                       mas isso é o de menos.</p> 
                     <p style="text-align: justify;">
                      À medida que a jogadora vai conhecendo Madeline, torna-se impossível não torcer por ela e fazer o necessário para vencer a escalada. 
                      E para isso é preciso muita destreza, atenção e às vezes paciência, pois apesar das mecânicas simples (agarrar/escalar, pular e realizar 
                      um dash), errar o timing ou a direção pode te levar de volta ao início de cada tela.
                     </p>
                     <p style="text-align: justify;">
                      Mesmo na jogabilidade, reside a primeira alegoria sobre a vida: superar os obstáculos – independente de quais sejam – até alcançar aquilo que deseja.
                       Às vezes você erra e dá com a cara em paredes espinhosas, “morre” mas levanta, volta pro início e então tenta de novo. Recomeça de outras formas, 
                       talvez inúmeras vezes, apesar da vontade de desistir… E Celeste também ensina que está tudo bem ficar cansada. Em alguns momentos Madeline precisa
                        fazer uma pausa para recuperar o fôlego e rever a melhor trajetória antes de continuar, e às vezes essa é a melhor solução!
                    </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="background-color: #e27396;">
                    Saúde mental é importante, sim!
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Saúde mental é importante, sim!</i></h4>
                       <p style="text-align: justify;">
                        Ao longo da escalada a jogadora descobre mais sobre a depressão, a ansiedade e os ataques de pânico que impedem Madeline de ter uma vida “normal”, e que seu desejo de
                       aventurar-se na montanha Celeste é uma tentativa de superar tudo que a impede de seguir adiante. Ainda que esse tudo seja ela mesma, ou melhor, outra versão de si… 
                       E então temos mais uma metáfora sobre ela, a vida: às vezes é preciso abraçar aquela parte ruim que vive dentro da gente para entender os motivos que nos levam à
                        autossabotagem, e enfim poder superar e seguir em frente. Apesar de tão fofa quanto a original, a versão ~gótica suave~ de Madeline tenta impedi-la de seguir escalando
                         durante boa parte do jogo, mas quando Madeline aceita e tenta compreender seu outro eu é que as coisas começam a ficar mais fáceis.
                      </p>
                      <p style="text-align: justify;"> 
                        Madeline fala sobre seus problemas e inquietações de uma forma muito honesta. Quem já teve que lidar, em algum momento da vida, com problemas relacionados à saúde mental
                         vai se identificar com a trajetória de Madeline. É transformador perceber que independente do gatilho, muito de nossos transtornos são alimentados por nós e pela cobrança
                          em ser uma pessoa “boa o suficiente” para alguém ou para fazer algo. Resumindo, para ser “aceita”.
                      </p>
                      <p style="text-align: justify;"> 
                        Enxergar que a sensação ao falhar miseravelmente – porque a gente falha mesmo nisso – contribui muito para que nossos monstros continuem nos assombrando, também transforma. 
                        Se Madeline expõe a vulnerabilidade a que estamos sujeitas, também ensina que a ajuda para lidar com isso é fundamental! MESMO! Por mais que seja um monstro só seu, 
                        por mais forte que você seja, depressão e outros transtornos psicológicos são monstros reais e a gente precisa de ajuda especializada.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="background-color: #e27396;">
                    Uma grande jornada não se faz sozinha
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Uma grande jornada não se faz sozinha</i></h4>
                      <P style="text-align: justify;">
                        Celeste também conta com outros personagens que participam dessa luta interna de Madeline, seja representando a vida nos jogando pra baixo ou aqueles que vão deixar o 
                        caminho menos difícil. A vovó que insiste para que ela não suba a montanha, avisando sobre os poderes mágicos de Celeste, e o fantasma do Sr. Oshiro, que faz de tudo 
                        para que Madeline fique um pouco mais em seu ~maravilhoso~ hotel, lembram aquelas pessoas que insistem em ficar na zona de conforto – e que, de alguma forma, não querem 
                        que a gente saia dela também.
                      </P>  
                      <p style="text-align: justify;">
                        O fotógrafo Theo, por outro lado, com suas histórias e apoio (sem nunca julgar Madeline) oferece outros pontos de vista para a protagonista entender a si mesma e seus motivos
                         para estar ali. E claro, a versão dark de Madeline é aquela parte de nós que às vezes não é muito legal para os outros ou para nós, mas que precisa sim ser superada e vencida.
                      </p>      
                      <p style="text-align: justify;">
                        Madeline, portanto, é um show à parte. A fofura de sua arte, seus gráficos, a honestidade para falar daquilo que a atormenta, além de seus momentos de fragilidade, são equilibrados 
                        com doses certeiras de um humor ácido. As conversas e os momentos em que ela insiste que precisa sim chegar ao topo da montanha, emocionam e cativam. Muito bem construídos, cada um
                         à sua maneira, eles ajudam a protagonista em sua jornada ao topo, e Madeline mesmo sem saber os ajuda também.
                      </p>  
                      <p style="text-align: justify">
                        Celeste mostra de uma forma única que as pessoas podem te lembrar o quanto você é importante, te acolher e te ouvir sem julgar, mas que a cura está em você. Muitas vezes a gente vai 
                        precisar de companhia e ajuda especializada mais ainda, e está tudo bem nisso! O jogo traz uma importante lição que o primeiro passo precisa partir da gente.
                      </p>          
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                    style="background-color: #e27396;">
                    Aclamado pela crítica, pelo público, indicado e vencedor de prêmios
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h4><i>Aclamado pela crítica, pelo público, indicado e vencedor de prêmios</i></h4>
                      <p style="text-align: justify;">
                        Além da narrativa incrível, das mensagens essenciais que nos fazem refletir, e da abordagem delicada sobre saúde mental, Celeste tem ótimas artes 
                        com gráficos pixelados em mais de 700 telas de plataforma! E se quer desafio, o jogo conta com as fitas Lado B que desbloqueiam capítulos mais ousados 
                        para as jovens alpinistas.
                      </p>
                      <p style="text-align: justify;">
                        A música e os efeitos sonoros também são maravilhosos, proporcionando uma imersão muito grande para quem acha que jogos de plataforma são simples 
                        demais – tão maravilhosos que renderam uma indicação para “Excelência em áudio”, pelo Independent Games Festival Awards, no qual também ganhou o
                         prêmio “Escolha do público”. Celeste também recebeu notas altas em vários veículos especializados, incluindo 10/10 no Destructoid, IGN e Nintendo
                          World Report, e 9/10 pela Game Informer e GameSpot. 
                      </p>  
                      <p style="text-align: justify;">
                        A montanha Celeste, com todas as suas metáforas sobre a vida, é cheia de obstáculos visíveis e palpáveis (que você sabe de antemão que precisa superar),
                         e outros tantos invisíveis, inesperados e frutos de nós mesmos (mas tão reais quanto os outros). O jogo surpreende a cada tela, a cada diálogo, com uma 
                         narrativa que diz mais sobre autoconhecimento e superação pessoal do que chegar a algum lugar ou ao topo, propriamente dito.
                      </p>
                      <p style="text-align: justify;">
                        A protagonista é a Madeline, mas poderia ser qualquer uma de nós em algum momento da vida. Celeste é super aclamado, recomendado, emocionante e, cá entre nós,
                         é um jogo lindo! <3
                      </p>              
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    &nbsp;  
                  </div>
                </div>
                     <h4><i>Sonhos e obstáculos…</i></h4>
                     <p style="text-align: justify;">
                      Todos nós temos sonhos.
                      Todos nós buscamos algo na vida, e lutamos diariamente para conquistar esse objetivo.
                      Muitas vezes a vida nos apresenta dificuldades que parecem impossíveis de serem superadas.
                      Muitas pessoas podem dizer que o que nós buscamos não faz sentido, que é inútil ou impossível.
                      Que é melhor desistir.
                      Que nunca seremos capazes.
                    </p>
                     <p style="text-align: justify;">
                    Às vezes chega um determinado ponto que até para nós mesmos esse objetivo deixa de fazer sentido, e uma 
                    parte dentro de nós, o nosso lado sombrio, prefere deixar pra lá, ele nos joga para baixo e tenta fazer a
                    gente desistir. É como se o nosso lado sombrio estivesse nos protegendo de quebrar a cara.
                    Quando isso acontece, nós nos tornamos o nosso pior inimigo, nos auto sabotamos, deixamos de acreditar no 
                    nosso potencial e assim falhamos de fato.
                    </p>
                    <div class="row">
                      <div class="col">
                        &nbsp;  
                      </div>
                    </div>
                    <h4><i>O nosso pior inimigo</i></h4>
                     <p style="text-align: justify;">
                      Na verdade essa parte nossa só está com medo, com medo de falhar.
                      E o medo de falhar é algo que sempre vai existir em nossos corações.
                      O que devemos buscar é a coragem de enfrentar esse medo.
                      Somente quando colocamos a cabeça no lugar, e entramos em harmonia com o nosso lado sombrio, sabendo que ele existe, mas sem dar ouvidos a ele.
                      Somente quando nós entendemos que somos capazes, e que a conquista de nossos objetivos só depende de nós mesmos.
                      Do nosso esforço e dedicação.
                      Somente nesse momento, somos capazes de conseguir o que nos é almejado.
                    </p>
                    <div class="row">
                      <div class="col">
                        &nbsp;  
                      </div>
                    </div>
                    <img src="img1/celeste12.jpg" class="d-block w-100">
                    <div class="row">
                      <div class="col">
                        &nbsp;  
                      </div>
                    </div>
              </div>
            </div>
            </div>    
          </div>   
  </div>    
  </div>
</div>
</div>
             <?php }else {?>   
                <h1>Página não identificada</h1>
            <?php } ?>

           

</body>

</html>
