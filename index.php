<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Página Inicial</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/1771/1771385.png">
    <link rel="styleeshet" href="style.css">
  </head>
  <body>

    <div class="container mx-auto mt-1 w-90">
      <header class="row">
          <div id="barra_acessibilidade" class="col-12 d-none">
              <ul id="atalhos">
                  <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                  <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
              </ul>
          </div>
      </header>
  </div>
    
    <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
        <div class="container-fluid col-11 m-auto">
          <a class="navbar-brand" href="#">AGROTEC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index2.html">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index3.html">Serviços</a>
              </li><li class="nav-item">
                <a class="nav-link" href="index4.html">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 shadow-sm texto" src="agro.webp" alt="uma plantação e um celular mostrando maneiras na melhora na Agricultura">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100 shadow-sm texto" src="tec.jpg" alt="uma pessoa com um tablet em uma plantação vendo o custo mensal">
          </div>
          
          <div class="carousel-item">
            <img class="d-block w-100 shadow-sm texto" src="terra.jpg" alt="um broto recem plantado">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

      <hr>
      <div class="container">
      <h2 class="text-center">É natural ser Digital</h2>
      </div>     
      <hr>

      <div class="row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="col">
          <div class="card">
            <img src="tablet.jpg" class="card-img-top" alt="um homem de cabelos brancos abaixado usando tablet">
            <div class="card-body">
              <h5 class="card-title">Natural é aquilo que faz parte do dia a dia das pessoas.</h5>
              <p class="card-text">mundo está cada vez mais digital, dentro e fora das porteiras.Você e todos os envolvidos na cadeia produtiva do agronegócio já são digitais!.</p>
  
  <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>
 </div>
      <div class="col">
        <div class="card">
          <img src="drone.jpg" class="card-img-top" alt="uma mulher manuseando um drone em uma plantação">
          <div class="card-body">
            <h5 class="card-title">Já é natural se comunicar e comprar pelo celular.</h5>
            <p class="card-text">É natural pesquisar pelas cotações na internet e acompanhar a previsão do tempo.Assim como<b> é natural ser digital para plantar, colher e vender</b>.</p>
          </div>
        </div>
      </div>
        <div class="col">
          <div class="card">
            <img src="grama.jpg" class="card-img-top" alt="uma mulher com um notbook em mãos vendo a colheita sendo feita">
            <div class="card-body">
              <h5 class="card-title">Para a AGROTEC, a tecnologia torna nossa vida mais fácil, descomplicada e eficiente.</h5>
              <p class="card-text"><b>É natural usar máquinas e equipamentos inovadores,aplicativos, drones, telas e demais soluções digitais</b> que ajudam na fazenda, para aproveitar ao máximo os recursos do campo.</p>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="col-11 m-auto">
          <h2 class="text-center">Se a tecnologia existe para deixar as coisas mais simples, ágeis e fáceis, por que precisa ser tão complicado falar em Agricultura Digital?</h2>
          <p class="text-center">
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-primary" href="index2.html">Saiba Mais</a>
            </div>
      </div>

      <hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
