<?php 
    require("dadosmapa.php");
    //include($Cardapio);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="css/meu02.css">
    <link rel="stylesheet" type="text/css" href="css/indexmapa.css">
    <link rel="stylesheet" text="text/css" href="css/dadosmapa.css">
  </head>
  <style> 
  .container{ 
    flex-direction:column;
    background-color: wheat;
    justify-content: center;
  }
 </style>
  
  <body>
    <main class="container">
      <div class="main_cta"> 
        <article class="main_cta_content"> 
          <div class="main_content_spacer">  
            <header> 
              <div><h1><p style="font-size: 75px;">Restaurante Dona Rita!! <br/>Servindo o Melhor para Você.</p></h1>  
                <nav> 
                  <ul>  
                    <li><a href="#Home" title="Home" alt="Home">Home </a></li>  
                    <li><a href="#Cardapio" title="Cardapio" alt="Cardapio">Cardapio</a></li>  
                    <li><a href="#Contato" title="Contato" alt="Contato">Contato</a></li>  
                  </ul>  
                </nav>  
              </div>  
            </header>  
          </div>  
        </article> 
      </div>   
      <br/>
      
      <section class="main_Home">
        <header>
          <?php
           if(is_array($Cardapio) && !empty($Cardapio)){
           foreach($Cardapio as $key => $value){
          ?>
          <article>
            <a href="meu02.php?id<?=$value['id'];?>">
            <img src=<?=$value['title_img'];?> title="<?=$value['titulo'];?>" alt="<?=$value['title_img'];?>" width="350px"> </a>
            <h2><?=$value['titulo'];?></h2>
                
          </article>
                
          <?php
           } 
            }else{
              echo"opção invalida";
            }
          ?>
      </section> 
      
      <article class="main_Contato"> 
        <header class="main_Contato_header">
          <h1>Quem Somos? <br/>
          <p>Whatsapp (xx)xxxxx-xxxx </p>
          <br/>
          Entre em contato via E-mail ou Whatsapp, para receber novidades. </h1><br/>
          <form action="enviar.php" method="post">
           Email: <input type="text" name="email"><input type="submit" velue="Enviar"> <br/>
          </form>
        </header>
      </article>    
    </main>
  </body>
 <br>
  <footer>
    <table>
      <tr>
        feito por Ana Cris veiga <br/> R.A.21088419-5
      </tr>
    </table>
  </footer>







</html>