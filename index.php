<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Vinicius Terriani</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pattaya" rel="stylesheet">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda:700" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize-social.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="menu">
      <nav class="nav-fixed" id="top">
        <div class="nav-wrapper black darken-4">
          <div class="container ri">
            <a href="#" class="logo amber-text text-darken-1 center"> &lt; Vinicius Terriani /&gt;</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about-me" class="scrollspy amber-text text-darken-1">Sobre mim</a></li>
              <li><a href="#skils" class="scrollspy amber-text text-darken-1">Competências</a></li>
              <li><a href="playground/index.html" class="scrollspy amber-text text-darken-1">Playground</a></li>
              <li><a href="#projects" class="scrollspy amber-text text-darken-1">Projetos</a></li>
              <li><a href="#contact" class="scrollspy amber-text text-darken-1">Contatos</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
              <li>
                <div class="userView">
                  <div class="background">
                    <img src="img/mosaic-2790344_640.png" alt="Background Sidenav">
                  </div>
                  <a href="#!user"><img class="circle" src="img/me-circle.jpg" alt="User Image Sidenav"></a>
                  <a href="#!name"><span class="white-text"></span><b> Vinicius Terriani</b></span></a>
                  <a href="#!email"><span class="white-text"><b> viniterriani.vt@gmail.com</b></span></a>
                </div>
              </li>
              <li><a href="#about-me" class="scrollspy"><i class="fa fa-user-o green-text" aria-hidden="true" style="font-size: 20px"></i> Sobre min</a></li>
              <li><a href="#skils" class="scrollspy"><i class="fa fa-address-card-o green-text" aria-hidden="true" style="font-size: 20px"></i> Competências</a></li>
              <li><a href="playground/index.html" class="scrollspy"><i class="fa fa-code green-text" aria-hidden="true" style="font-size: 20px"></i> Playground</a></li>
              <li><a href="#projects" class="scrollspy"><i class="fa fa-bug green-text" aria-hidden="true" style="font-size: 20px"></i> Projetos</a></li>
              <li><a href="#contact" class="scrollspy"><i class="fa fa-handshake-o green-text" aria-hidden="true" style="font-size: 20px"></i> Contatos</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    </header>
    <main class="main" >
      <!-- Your content here -->
      <div class="wellcome section scrollspy" id="up">
         <button class="btn-terminal black btn-small waves-effect waves-light" onclick="openTerminal();">>_</button>
        <div class="wellcome-text">
          <div class="terminal draggable">
          <div class="terminal-bar">
            <a href="#" onclick="closeTerminal();"><div class="circle-1"></div></a>
            <a href="#" onclick="minTerminal();"><div class="circle-2"></div></a> 
            <a href="#" onclick="maxTerminal()"><div class="circle-3"></div></a> 
        </div>
          <div class="text-terminal"><span class="terminal-path">vinicius@terriani:~$</span> <span class="msg-wellcome" id="typed"></span></div> 
        </div>
      </div>
      </div>
     <!-- <div class="center-align btn-down section scrollspy"><a href="#about-me" class="link-down"><i class="material-icons down">arrow_downward</i></a></div>-->
      <div id="top" class="section scrollspy">
      <div class="row about-me section scrollspy">
        <div class="col s12 m6 center-align " id="about-me">
          <img src="img/me-circle.jpg" alt="" class="responsive-img intro-img z-depth-5"/>
        </div>
        <div class="col s12 m6 left-align pull-m1">
            
          <p class="text-intro"> <span class="title"> <span class="material-icons large red-text icons">favorite_border</span> Vinicius Terriani</span><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas unde vitae ut ad quisquam corrupti veniam placeat reprehenderit temporibus aut ratione earum, qui deleniti ex ab impedit sint consequuntur dolore.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col m8 s12 push-m2">
      <div class="skils section scrollspy" id="skils">
          <p class="text-skils"> <span class="title-skils"><span class="material-icons small pink-text icons">code</span> Aqui vai um resumo dos meus conhecimentos</span> <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ea illo amet labore, consequuntur sunt necessitatibus saepe corrupti enim officia alias doloribus nesciunt reiciendis nam incidunt inventore commodi fugit? Asperiores? </p>
      </div>
      <i class="skil">PHP</i>
      <div class="progress progress-php">
          <div class="determinate pink" style="width: 100%;"></div>
      </div>
      <i class=" skil">MySQL</i>
      <div class="progress progress-mysql">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" skil" id="skil">Laravel</i>
      <div class="progress progress-laravel">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil section scrollspy" id="skil">Composer</i>
      <div class="progress progress-composer">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">JavaScript</i>
      <div class="progress progress-javascript">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">jQuery</i>
      <div class="progress progress-jquery">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">HTML5</i>
      <div class="progress progress-html">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">CSS3</i>
      <div class="progress progress-css">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">Bootstrap</i>
      <div class="progress progress-bootstrap">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">Materialize</i>
      <div class="progress progress-materialize">

          <div class="determinate pink" style="width: 100%"></div>
      </div>
      <i class=" darken-4 skil">Git</i>
      <div class="progress progress-git">
          <div class="determinate pink" style="width: 100%"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m8 push-m2">
        <div class="projects section scrollspy" id="projects">
            <p class="text-projects"> <span class="title-projects"> <span class="material-icons small green-text text-light-green text-accent-3 icons">style</span> Conheça alguns dos meus projetos em programação</span> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ea illo amet labore, consequuntur sunt necessitatibus saepe corrupti enim officia alias doloribus nesciunt reiciendis nam incidunt inventore commodi fugit? Asperiores? </p>
        </div>
       <div class="project-area"><a href="http://ContaControlada.esy.es" target="blank" class="title-projects">ContaControlada <span class="material-icons small blue-text icons">link</span></a><p class="text-projects">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis error numquam nihil fugiat cum a corrupti? Repudiandae delectus ducimus eligendi! Vero atque voluptatibus asperiores necessitatibus blanditiis eligendi praesentium. Eligendi, provident.</p><a href="https://github.com/terriani/ContaControlada" target="blank" class="git">GitHub</a><hr></div>
       <div class="project-area"><a href="http://CadastrOnline.16mb.com" target="blank" class="title-projects">CadastrOnline <span class="material-icons small blue-text icons">link</span></a><p class="text-projects">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis error numquam nihil fugiat cum a corrupti? Repudiandae delectus ducimus eligendi! Vero atque voluptatibus asperiores necessitatibus blanditiis eligendi praesentium. Eligendi, provident.</p><a href="https://github.com/terriani/CadastrOnline" target="blank" class="git">GitHub</a><hr></div>        
       <div class="project-area"><a href="https://github.com/terriani/estudosPhpPoo" target="blank" class="title-projects">Evoluir é sempre preciso <span class="material-icons small blue-text icons">link</span></a><p class="text-projects">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis error numquam nihil fugiat cum a corrupti? Repudiandae delectus ducimus eligendi! Vero atque voluptatibus asperiores necessitatibus blanditiis eligendi praesentium. Eligendi, provident.</p><a href="https://github.com/terriani/estudosPhpPoo" target="blank" class="git">GitHub</a><hr></div>        
       <div class="project-area"><a href="https://github.com/terriani/Vinicius_Terriani" target="blank" class="title-projects">Código fonte deste site <span class="material-icons small blue-text icons">link</span></a><p class="text-projects">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis error numquam nihil fugiat cum a corrupti? Repudiandae delectus ducimus eligendi! Vero atque voluptatibus asperiores necessitatibus blanditiis eligendi praesentium. Eligendi, provident.</p><a href="https://github.com/terriani/Vinicius_Terriani" target="blank" class="git">GitHub</a><hr></div>        
    </div>
  </div>
  <br>
  <div class="contact">
    <div class="row">
      <div class="col s12">
        <h3 class="title-contact center-align amber-text text-darken-1">Vamos bater um papo ?</h3>
        <form name="contact" class=" section scrollspy" id="contact">
          <div class="input-field col s12 l6 ">
            <input type="text" id="first_name" class="validate name" name="name" autocomplete="false" required>
            <label for="first_name">Nome</label>
          </div>
          <div class="input-field col s12 l6">
            <input type="text" id="last_name" class="validate last-name" name="last_name" autocomplete="false" required>
            <label for="last_name">Sobrenome</label>
          </div>
          <div class="input-field col s12 email">
            <input type="email" id="email" class="validate email" name="email" autocomplete="false" required>
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
          <div class="input-field col s12 msg">
            <textarea id="textarea1" class="materialize-textarea msg" name="message" autocomplete="0" required></textarea>
            <label for="textarea1">Menssagem</label>
            <button class="btn waves-effect waves-light amber darken-4" type="submit" name="action">Enviar
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>     
    </main>
    <footer class="page-footer grey darken-4 section scrollspy" id="footer">
      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col s12 m3 center-align">
                <a class="waves-effect waves-light btn social github social-btn" href="https://github.com/terriani" target="blank">
                <i class="fa fa-github"></i>github</a>
            </div>
            <div class="col s12 m3 center-align">
                <a class="waves-effect waves-light btn social facebook social-btn" href="https://www.facebook.com/viny.terriani" target="blank">
                <i class="fa fa-facebook"></i>facebook</a>
            </div>
            <div class="col s12 m3 center-align">
              <a class="waves-effect waves-light btn social instagram social-btn" href="https://www.instagram.com/vinicius_terriani/?hl=pt-br" target="blank">
              <i class="fa fa-instagram"></i>instagram</a>
              </div>
            <div class="col s12 m3 center-align">
                <a class="waves-effect waves-light btn social twitter social-btn" href="https://twitter.com/VTerriani?lang=pt-br" target="blank">
                <i class="fa fa-twitter"></i>twitter</a>
            </div>
          </div>
          <div id="end">
            © 2018 Copyright <strong>   -  Vinicius Terriani</strong>
          </div>
        </div>
      </div>
    </footer>
    <div class="fixed-action-btn btn-action">
        <a class="btn-floating btn-large white z-depth-5">
          <i class="large material-icons black-text">touch_app</i>
        </a>
        <ul>
          <li><a class="waves-effect waves-light btn-floating social github" href="https://github.com/terriani" target="blank">
              <i class="fa fa-github"></i> Sign in with github</a>
          </li>
          <li><a class="waves-effect waves-light btn-floating social twitter" href="https://twitter.com/VTerriani?lang=pt-br" target="blank">
              <i class="fa fa-twitter"></i> Sign in with twitter</a>
          </li>
          <li><a class="waves-effect waves-light btn-floating social facebook" href="https://www.facebook.com/viny.terriani" target="blank">
              <i class="fa fa-facebook"></i> Sign in with facebook</a>
          </li>
          <li><a class="waves-effect waves-light btn-floating social instagram" href="https://www.instagram.com/vinicius_terriani/?hl=pt-br" target="blank">
              <i class="fa fa-instagram"></i> Sign in with instagram</a>
          </li>
        </ul>
      </div>
    <a href="#up" class="btn-floating btn-large waves-effect waves-light black  btn-up z-depth-5"><i class="material-icons">expand_less</i></a>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
     <!-- CDN type.js -->
     <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <!-- js local para algumas animações com jQuery-->
    <script src="js/main.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/touchPunch.js"></script>
  </body>
</html>