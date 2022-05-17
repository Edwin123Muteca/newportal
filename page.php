<?php 

    require_once("conexao.php"); 



    //variaveis para o menu
    $id = @$_GET["id"];


    //RECUPERAR DADOS DO POST
$query = $pdo->query("SELECT * FROM noticias where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$titulo = @$res[0]['titulo'];
$descricao = @$res[0]['descrcicao'];

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Page</title>
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
          <li><a href="www.youtube.com">Youtube</a></li>
          <li><a href="#">Entrar</a></li>
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
            <input type="text" value="Pesquisar" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">

                <?php 

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
    
    <div class="content_area">
    
      <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
              <div class="carousel-item-b">
                <img src="images/2.jpg" alt="">
              </div>
              
            </div>
            <div class="row justify-content-between">
              
              <div class="col-md-12 col-lg-12 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d"><<?php echo $titulo; ?>/h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                    nibh pulvinar quam id dui posuere blandit.
                  </p>
                  <p class="description color-text-a no-margin">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                    malesuada. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                  </p>
                </div>
      
              </div>
            </div>
          </div>
          
        
        </div>
      </div>
    </section>
       ?>
    </div>
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add33.png" alt="" /> </div>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
        
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2022 ISPI NOTICIAS Inc. All rights reserved | Design by <a target="_blank" rel="nofollow" href="#">ISPI</a></p>
        
      </div>
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