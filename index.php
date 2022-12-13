<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

  if(isset($_POST["enviarMensagem"])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);
    
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
    
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isHTML(true);
    
        $mail->Username = 'thi.canato@gmail.com';
        $mail->Password = 'voihgcqwcjxxnpeu';
        $mail->Subject = "Mensagem Portfólio" ;
        $mail->MsgHTML("Email: " . $email."<br> Nome: " . $name . " <br> Mensagem: " . $message);
        $mail->addAddress("thi.canato@gmail.com");
    
        $mail->send();
        echo  "<script>alert('Email enviado com Sucesso!');</script>";

  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/thiago.png">

    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Folio Designer">
    <meta name="twitter:description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
    <meta name="twitter:creator" content="@ui8">
    <meta name="twitter:image" content="https://ui8-folio.herokuapp.com/img/twitter-card.jpg">
    <meta property="og:title" content="Folio Designer">
    <meta property="og:type" content="Article">
    <meta property="og:url" content="https://ui8.net/ui8/products/folio-designer">
    <meta property="og:image" content="https://ui8-folio.herokuapp.com/img/fb-og-image.jpg">
    <meta property="og:description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
    <meta property="og:site_name" content="Folio Designer">
    <meta property="fb:admins" content="132951670226590">
    <link rel="stylesheet" media="all" href="css/app.css">
    <script>var viewportmeta = document.querySelector('meta[name="viewport"]');
if (viewportmeta) {
  if (screen.width < 375) {
    var newScale = screen.width / 375;
    viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
  } else {
    viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
  }
}</script>
  </head>
  <body>
    <div class="page">
      <div class="main">
        <div class="header js-header" id="header">
          <div class="header__center center"><a class="header__logo" href="index.html"><img class="header__pic" src="img/logo.svg" alt="" /></a>
            <div class="header__social header__social_main"><a class="header__link" href="https://linktr.ee/ThiagoCanato"><svg class="icon icon-dribbble">
                </svg>Linktree</a></div>
            </div>
          </div>
        </div>
        <div class="main__bg"><img class="main__pic" src="img/bg-main.jpg" alt=""></div>
        <div class="main__center center">
          <div class="main__wrap">
            <div class="main__stage stage" id="sobre" data-aos="transform">Thiago Canato de Azevedo</div>
            <h1 class="main__title title h1"><span data-aos="transform" data-aos-delay="150">Olá, meu</span><span data-aos="transform" data-aos-delay="300">nome é Thiago.</span><span data-aos="transform" data-aos-delay="450">Estou estudando</span><span data-aos="transform" data-aos-delay="600">Programação.</span></h1><a class="scroll js-scroll" href="#details" data-aos="transform">
              <div class="scroll__icon"><img class="scroll__pic" src="img/scroll.svg" alt=""></div>
              <div class="scroll__text">Rolar para baixo </div>
            </a>
          </div>
        </div>
        <div class="main__view" data-aos>
          <div class="main__preview"><img class="main__pic" src="img/main-pic-6.png" alt=""></div>
          <div class="main__preview"><img class="main__pic js-parallax" data-scale="2.5" data-orientation="up" src="img/main-pic-1.png" alt=""></div>
          <div class="main__preview"><img class="main__pic js-parallax" data-scale="1.5" data-orientation="up" src="img/main-pic-2.png" alt=""></div>
          <div class="main__preview"><img class="main__pic" src="img/main-pic-3.png" alt=""></div>
          <div class="main__preview"><img class="main__pic" src="img/main-pic-4.png" alt=""></div>
          <div class="main__preview"><img class="main__pic js-parallax" data-scale="4.5" data-orientation="up" src="img/main-pic-5.png" alt=""></div>
          <div class="main__preview"><img class="main__pic js-parallax" data-scale="1.5" data-orientation="down" src="img/main-pic-7.png" alt=""></div>
        </div>
        <div class="main__figures">
          <div class="main__figure" data-aos="animation-translate-y"><img class="main__pic js-parallax" data-scale="2.2" data-orientation="down" src="img/figure-1.png" alt=""></div>
          <div class="main__figure" data-aos="animation-translate-y" data-aos-delay="200"><img class="main__pic js-parallax" data-scale="2.2" data-orientation="up" src="img/figure-2.png" alt=""></div>
          <div class="main__figure" data-aos="animation-translate-y" data-aos-delay="400"><img class="main__pic" src="img/figure-3.png" alt=""></div>
        </div>
      </div>
      <div class="details" id="details">
        <div class="details__center center">
          <div class="details__head" data-aos="animation-scale-y">
            <div class="details__stage stage">O que eu faço</div>
            <h3 class="details__info h3">Gosto muito de criar<br>novas aplicações e programas.</h3>
          </div>
          <h2 class="details__title" data-aos="animation-scale-y">Pensar. Fazer. <br>Resolver. </h2>
          
        <div class="details__figures">
          <div class="details__figure"><img class="details__pic js-parallax" data-scale="2" data-orientation="down" src="img/figure-1.png" alt=""></div>
          <div class="details__figure"><img class="details__pic js-parallax" data-scale="2" data-orientation="up" src="img/figure-2.png" alt=""></div>
          <div class="details__figure"><img class="details__pic js-parallax" data-scale="1.2" data-orientation="up" src="img/figure-3.png" alt=""></div>
        </div>
      </div>
      <div class="work">
        <div class="work__circles"></div>
        <div class="work__center center">
          <div class="work__wrap">
            <div class="work__stage stage stage_pink" data-aos="animation-scale-y">O que estou estudando</div>
            <h2 class="work__title title h1" data-aos="animation-scale-y" data-aos-delay="150">Estou me envolvendo na área de programação.</h2>
            <div class="work__text" data-aos="animation-scale-y" data-aos-delay="300">Com ênfase em algumas liguagens como<br> Python, MySQL, PHP e JavaScript</div><a class="scroll js-scroll" data-aos="animation-scale-y" href="#cases">
              <div class="scroll__icon"><img class="scroll__pic" src="img/scroll.svg" alt=""></div>
              <div class="scroll__text">Rolar para baixo</div>
            </a>
          </div>
        </div>
        <div class="work__preview"><img class="work__pic js-parallax" data-scale="2" data-orientation="down" src="img/work-cube.png" alt=""></div>
        <div class="work__figures" data-aos>
          <div class="work__figure"><img class="work__pic js-parallax" data-scale="1.3" data-orientation="up" src="img/work-cube-1.png" alt=""></div>
          <div class="work__figure"><img class="work__pic js-parallax" data-scale="1.5" data-orientation="up left" src="img/work-cube-2.png" alt=""></div>
          <div class="work__figure"><img class="work__pic js-parallax" data-scale="1.3" data-orientation="up right" src="img/work-cube-3.png" alt=""></div>
          <div class="work__figure"><img class="work__pic" src="img/work-cube-4.png" alt=""></div>
          <div class="work__figure"><img class="work__pic js-parallax" data-scale="1.1" data-orientation="left" src="img/work-cube-5.png" alt=""></div>
          <div class="work__figure"><img class="work__pic js-parallax" data-scale="1.2" data-orientation="right" src="img/work-cube-6.png" alt=""></div>
          <div class="work__figure"><img class="work__pic js-parallax" data-scale="1.2" data-orientation="down" src="img/work-cube-7.png" alt=""></div>
        </div>
      </div>
      <div class="wrapper wrapper_gradient">
        <div class="cases cases_main" id="cases">
          <div class="cases__center center">
            <div class="cases__stage stage" id="projetos" data-aos="animation-scale-y">Portfólio</div>
            <h2 class="cases__title h1" data-aos="animation-scale-y" data-aos-delay="150">Aqui estão meus<br>Projetos.</h2>
            <div class="cases__nav" data-aos="animation-scale-y" data-aos-delay="300"><a class="cases__link active" href="#">Programas</a></div>
            <div class="cases__list js-owl" data-items-mobile-portrait="1" data-items-mobile-album="1" data-autoheight><a class="cases__item" data-aos="animation-translate-y" data-aos-delay="" href="https://github.com/ThiagoCanatoAzevedo/AmigoSecreto">
                <div class="cases__preview">
                  <div class="cases__box">Olhar</div>
                </div>
                <div class="cases__body">
                  <h4 class="cases__info h4">AmigoSecreto - 1</h4>
                  <div class="cases__text">Parte 1 do projeto AmigoSecreto</div>
                </div>
              </a><a class="cases__item" data-aos="animation-translate-y" data-aos-delay="200" href="http://amigosecreto.epizy.com/?i=1">
                <div class="cases__preview">
                  <div class="cases__box">Olhar</div>
                </div>
                <div class="cases__body">
                  <h4 class="cases__info h4">AmigoSecreto - 2</h4>
                  <div class="cases__text">Segunda parte do projeto AmigoSecreto</div>
                </div>
              </a><a class="cases__item" data-aos="animation-translate-y" data-aos-delay="" href="https://github.com/ThiagoCanatoAzevedo/ToDoList-App">
                <div class="cases__preview">
                  <div class="cases__box">Olhar</div>
                </div>
                <div class="cases__body">
                  <h4 class="cases__info h4"> ToDoList</h4>
                  <div class="cases__text">Lista de tarefas a fazer, feito em PHP</div>
                </div>
              </a><a class="cases__item" data-aos="animation-translate-y" data-aos-delay="200" href="https://github.com/ThiagoCanatoAzevedo/Ajudador-tarefas">
                <div class="cases__preview">
                  <div class="cases__box">Olhar</div>
                </div>
                <div class="cases__body">
                  <h4 class="cases__info h4">Ajudante tarefas</h4>
                  <div class="cases__text">Mesma ideia do ToDoList, porém feito em C</div>
                  <br>
                </div>
                <br>
              </a>
                </div>
                <br>
              </a></div>
          </div>
          <div class="cases__figures">
            <div class="cases__figure"><img class="cases__pic js-parallax" data-scale="2" data-orientation="down" src="img/figure-2.png" alt=""></div>
            <div class="cases__figure"><img class="cases__pic js-parallax" data-scale="1.8" data-orientation="down" src="img/figure-3.png" alt=""></div>
          </div>
        </div>
<br>
          <div class="review__bg">
            <div class="review__preview"><img class="review__pic js-parallax" data-scale="1.5" data-orientation="down" src="img/review-cube.png" alt=""></div>
            <div class="review__preview"><img class="review__pic" src="img/review-cube.png" alt=""></div>
          </div>
        </div>
        <div class="wrapper wrapper_dark">
          <div class="contacts">
            <div class="contacts__center center">
              <div class="contacts__container">
                <div class="contacts__wrap">
                  <div class="contacts__stage stage" data-aos="animation-scale-y">Mande uma mensagem👋</div>
                  <h2 class="contacts__title h1" data-aos="animation-scale-y" data-aos-delay="200">Vamos criar <br>Juntos.</h2>
                  <div class="contacts__info" data-aos="animation-scale-y" data-aos-delay="400">Adoraria conhecer você para pensar e desenvolver ideias novas.</div>
                </div>
                <div class="contacts__row">
                  <div class="contacts__details" data-aos="animation-translate-y"><a class="contacts__line" href="mailto:hello@ui8.net">
                      <div class="contacts__icon"><svg class="icon icon-email">
                          <use xlink:href="img/sprite.svg#icon-email"></use>
                        </svg></div>
                      <div class="contacts__text">thi.canato@gmail.com</div>
                    </a>
                    <div class="contacts__line">
                      <div class="contacts__icon"><svg class="icon icon-place">
                          <use xlink:href="img/sprite.svg#icon-place"></use>
                        </svg></div>
                      <div class="contacts__text">
                        <p>Mauá, Parque São Vicente, Rua Presidente Carlos Luz</p>
                      </div>
                    </div><a class="contacts__line" href="tel:+441236547890">
                      <div class="contacts__icon"><svg class="icon icon-phone">
                          <use xlink:href="img/sprite.svg#icon-phone"></use>
                        </svg></div>
                      <div class="contacts__text">+55 11 975004815</div>
                    </a>
                  </div>
                  <form method="post" action="" class="contacts__form" data-aos="animation-translate-y" data-aos-delay="200">
                    <div class="contacts__field field">
                      <div class="field__wrap"><input class="field__input" type="text" name="name" placeholder="Nome" />
                        <div class="field__icon"><svg class="icon icon-profile">
                            <use xlink:href="img/sprite.svg#icon-profile"></use>
                          </svg></div>
                      </div>
                    </div>
                    <div class="contacts__field field">
                    <form method="post" action="">
                      <div class="field__wrap"><input class="field__input" type="email" name="email" id="email" placeholder="E-mail" />
                        <div class="field__icon"><svg class="icon icon-send">
                            <use xlink:href="img/sprite.svg#icon-send"></use>
                          </svg></div>
                      </div>
                    </div>
                    <div class="contacts__field field">
                      <div class="field__wrap">
                        <div class="field__icon"><svg class="icon icon-arrows">
                            <use xlink:href="img/sprite.svg#icon-arrows"></use>
                          </svg></div>
                      </div>
                    </div>
                    <div class="contacts__field field field_textarea">
                      <div class="field__wrap"><textarea class="field__textarea" name="message" placeholder="Mensagem"></textarea>
                        <div class="field__icon"><svg class="icon icon-message">
                            <use xlink:href="img/sprite.svg#icon-message"></use>
                          </svg></div>
                      </div>
                    </div>
                    <div class="contacts__btn">
                      <script type="text/javascript" src="valores.js"> </script>
                      <form method="POST" action="">
                      <button type="submit" id="enviarMensagem" name="enviarMensagem" class="btn btn_purple"><span class="btn__text">Vamos conversar</span><svg class="icon icon-arrow-right">
                          <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                        </svg></button></div>
                  </form>
                </div>
                <div class="contacts__social">
                  <div class="contacts__box" data-aos="animation-translate-y"><a class="contacts__link" href="https://www.instagram.com/canato_834/"><svg class="icon icon-instagram">
                      </svg>
                      <div class="contacts__text">Instagram</div>
                    </a></div>
                  <div class="contacts__box" data-aos="animation-translate-y" data-aos-delay="150"><a class="contacts__link" href="https://linktr.ee/ThiagoCanato"><svg class="icon icon-instagram">
                      </svg>
                      <div class="contacts__text">Linktree</div>
                    </a></div>
                  <div class="contacts__box" data-aos="animation-translate-y" data-aos-delay="300"><a class="contacts__link" href="https://www.twitch.tv/thiagocanato05"><svg class="icon icon-instagram">
                        
                      </svg>
                      <div class="contacts__text">GitHub</div>
                    </a></div>
                  <div class="contacts__box" data-aos="animation-translate-y" data-aos-delay="450"><a class="contacts__link" href="https://www.linkedin.com/in/thiago-canato-de-azevedo-5825b0207/"><svg class="icon icon-instagram">
                      </svg>
                      <div class="contacts__text">LinkedIn</div>
                    </a></div>
                </div>
                <div class="figures">
                  <div class="figures__preview"><img class="figures__pic" src="img/figures-1.png" alt="" /></div>
                  <div class="figures__preview"><img class="figures__pic js-parallax" data-scale="1.6" data-orientation="up" src="img/figures-2.png" alt="" /></div>
                  <div class="figures__preview"><img class="figures__pic js-parallax" data-scale="1.3" data-orientation="up" src="img/figures-3.png" alt="" /></div>
                  <div class="figures__preview"><img class="figures__pic" src="img/figures-4.png" alt="" /></div>
                  <div class="figures__preview"><img class="figures__pic js-parallax" data-scale="2.3" data-orientation="down" src="img/figures-5.png" alt="" /></div>
                  <div class="figures__preview"><img class="figures__pic js-parallax" data-scale="2" data-orientation="up" src="img/figures-6.png" alt="" /></div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="footer__center center">
              <div class="footer__body"><a class="footer__logo" href="index.html"><img class="footer__pic" src="img/logo-empty.svg" alt="" /></a>
                <div class="footer__wrap">
                  <div class="footer__title h1">Você está tendo a oportunidade de me conhecer agora.</div>
                  <div class="footer__info h4">Aproveite para entrar em contato!</div>
                </div>
            
              </div>
              <div class="footer__bottom">
              <div class="footer__copyright">Créditos:<br>© 2020, UI8 LLC.<br></div><a class="footer__scroll js-scroll" href="#header">Voltar ao topo</a>
              </div>
            </div>
            <div class="footer__bg">
              <div class="footer__preview"><img class="footer__pic js-parallax" data-scale="1.5" data-orientation="down" src="img/footer-cube-1.png" alt="" /></div>
              <div class="footer__preview"><img class="footer__pic js-parallax" data-scale="1.8" data-orientation="up" src="img/footer-cube-1.png" alt="" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
    <script src="js/common.js"></script>
  </body>
</html>
