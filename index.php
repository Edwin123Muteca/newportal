<?php require_once("conexao.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ISPI NOTICIAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Início</a></li>
          <li><a href="index.php">Sobre</a></li>
          <li><a href="index.php">Contacto</a></li>
          <li><a href="index.php">Youtube</a></li>
          <li><a href="repositorio/">Entrar</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="www.twitter.com" class="twitter"></a></li>
            <li><a href="www.facebook.com" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Pesquisar  " id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
                        
                <?php 
                    //Busca todas categorias listadas da base de dados
                 $query = $pdo->query("SELECT * FROM categoria order by id asc ");
                 $res = $query->fetchAll(PDO::FETCH_ASSOC);

                 for ($i=0; $i < count($res); $i++) { 
                  foreach ($res[$i] as $key => $value) {
                  }

                   $descricao = $res[$i]['Descricao'];
                   $id = $res[$i]['Id'];


                  ?>
      <ul id="nav">
        <li><a href="#"><?php echo "$descricao"; ?></a>
        </li>
         <?php } ?>
    </div>
    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="images/1.jpg" alt="" title="Slider caption text" /></li>
          <li><img src="images/2.jpg" alt="" title="Slider caption text" /></li>
          <li><img src="images/3.jpg" alt="" title="Slider caption text" /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">Noticias</h2>

            <a class="more" href="#">Mais</a>
                  <?php 
  //Busca todas Noticias listadas da base de dados
                 $query = $pdo->query("SELECT * FROM noticias order by Id desc ");
                 $res = $query->fetchAll(PDO::FETCH_ASSOC);

                 for ($i=0; $i < count($res); $i++) { 
                  foreach ($res[$i] as $key => $value) {
                  }

                   $titulo = $res[$i]['titulo'];
                   $descricao = $res[$i]['descricao'];
                   $categoria = $res[$i]['categoria'];
                  $foto = $res[$i]['foto'];
                   $id = $res[$i]['Id'];


                  ?>
            <div class="single_left_coloum floatleft"> <img src="images/<?php echo "$foto" ?>" alt="" />
 <h3><?php echo "$titulo"; ?></h3>
              <p><?php echo "$descricao"; ?>.</p>
          
              <a class="readmore" href="page.php?id=<?php echo $id ?>">Ler Mais</a>

               </div>
<?php } ?>
            
            
          </div>
          <div class="single_left_coloum_wrapper">
            <h2 class="title">Ultimas Noticias</h2>
            <a class="more" href="#">Mais</a>
                     <?php 

                 $query = $pdo->query("SELECT * FROM noticias order by Id asc ");
                 $res = $query->fetchAll(PDO::FETCH_ASSOC);

                 for ($i=0; $i < count($res); $i++) { 
                  foreach ($res[$i] as $key => $value) {
                  }

                   $titulo = $res[$i]['titulo'];
                   $descricao = $res[$i]['descricao'];
                   $categoria = $res[$i]['categoria'];
                       $foto = $res[$i]['foto'];
                   $id = $res[$i]['Id'];


                  ?>
            <div class="single_left_coloum floatleft"> <img src="images/<?php echo "$foto"; ?>" alt="" />
        <h3><?php echo "$titulo"; ?></h3>
              <p><?php echo "$descricao"; ?>.</p>
              <a class="readmore" href="page.php?id=<?php echo $id ?>">Ler Mais</a> </div>
            
          <?php } ?>
          </div>
          
          
        </div>
        <div class="right_coloum floatright">
          <div class="single_right_coloum">
            <h2 class="title">Portfolio</h2>
            <ul>
              <li>
                <div class="single_cat_right_content">
                  <h3>Sobre</h3>
                  <p>Neste portal voce encontra noticias atualizadas.</p>
                  
                </div>
              </li>
              <li>
                <div class="single_cat_right_content">
                  <h3>Flash</h3>
                  <p>Aqui encontras noticias frescas num flash, venha desfrutar deste site do jeito que desejar.</p>
                  
                </div>
              </li>
              <li>
                <div class="single_cat_right_content">
                  <h3>Visita o Ispi</h3>
                  <p>De um role ao ISPI por intermedio deste portal de noticias, aposto que vas encontrar muita coisa agradavel.</p>
                  
                </div>
              </li>
            </ul>
            <a class="popular_more" href="#">more</a> </div>
          <div class="single_right_coloum">
            <h2 class="title">editorial</h2>
            <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
              <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
            </div>
            <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
              <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
            </div>
            <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
              <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
            </div>
            <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
              <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="images/add11.png" alt="" /> </div>
        <div class="single_sidebar">
          <div class="news-letter">
            <h2>Registre-se para Newsletter</h2>
            <p>Receba nossos anúncios gratis newsletters!</p>
            <form action="#" method="post">
              <input type="text" value="Name" id="name" />
              <input type="text" value="Email Address" id="email" />
              <input type="submit" value="SUBMIT" id="form-submit" />
            </form>
            <p class="news-letter-privacy">Não enviamos spam e respeitamos a sua privacidade!</p>
          </div>
        </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Popular</h2>
            <ul>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
            </ul>
            <a class="popular_more">more</a> </div>
        </div>
        <div class="single_sidebar"> <img src="images/add11.png" alt="" /> </div>
        <div class="single_sidebar">
          <h2 class="title">ADD</h2>
          <img src="images/add22.png" alt="" /> </div>
      </div>
    </div>
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add33.png" alt="" /> </div>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
            <?php 

                 $query = $pdo->query("SELECT * FROM categoria order by id asc ");
                 $res = $query->fetchAll(PDO::FETCH_ASSOC);

                 for ($i=0; $i < count($res); $i++) { 
                  foreach ($res[$i] as $key => $value) {
                  }

                   $descricao = $res[$i]['Descricao'];
                   $id = $res[$i]['Id'];


                  ?>
          <li><a href="#"><?php echo "$descricao"; ?></a></li>
          <<?php } ?>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2022 ISPI NOTICIAS Inc. All rights reserved | Design by <a target="_blank" rel="nofollow" href="#">ISPI</a></p>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>