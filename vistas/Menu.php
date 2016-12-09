<?php 
include("../api/dbconfig.php");
session_start();
if(!isset($_SESSION['login_user']))
	{
	header("Location: ../index.php");
	}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <title>Menu</title>
<link rel="alternate" type="application/rss+xml" title="Pattern Tap" href="http://zurb.com/patterntap/feed.rss"/>
<link rel="stylesheet" media="screen" href="../css/zaa.css"/>
<link rel="stylesheet" href="../css/style_.css">
<script src="../js/zaa.js"></script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" />
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js"></script>
    
        <style type="text/css">

        

</style>
    
</head>

<body style="background-color:#F6F6F6">
    
    
<div class="grid-block main-body" >

    <div class="grid-block">
        
      <div class="main-view-container" style="width: 100%" >
    <div class="quip-content quips-level1">
  <div class="grid-block align-center">
    <div class="main-contain grid-content small-12">
      <div class="grid-block zero prop-header">
        <div class="grid-content small-12 medium-12 large-4">
          <h3>SiHiCoN </h3><p>Sistema de Información para el Historial Clínico Nutricional de la Universidad de la Sierra Sur</p>
        </div>
        <div class="search-nav grid-content small-12 medium-12 large-8 hide-for-small-only">
          <ul>
            
            <!--<li><a href="#" >Type</a></li>-->
            <!--<li><a href="#">Device</a></li>-->
          <?php
            	if(isset($_SESSION['login_user']))
            	{
            	$login_session=$_SESSION['login_user'];
            // 	echo '<h1>Welcome hola '.$login_session.'</h1>';
            	}
          ?>
            <li><a href="../api/logout.php"><i class="fi-x-circle" style="font-size:20px"></i></a></li>
            <li><a href="#"><i class="fi-torso" style="font-size:20px"></i></a></li>
            
            <li><label for=""><?php echo $login_session; ?></label></li>
            <li><label for="">Usuario: </label></li>
            
            
            
           <!--  <li><a href="#">About</a></li> -->
          </ul>
        </div>
      </div>
      <div class="header-hr">
      </div>
     
      <!-- Counter Info -->
      <div class="counter">Unsis</div>
      <!-- Topic Thumbnail Gallery -->
        <div class="row">
        <div class="grid-block small-up-1 medium-up-3 large-up-3 xxlarge-up-4">
         <div style="" class="grid-content card-animate" >
          <div class="card card-style ">
              <a href="De.php" ui-sref="quips.topic({id: topic.slug})">
                <div class="thumb-image text-center"><i class="fi-torso color1" style="font-size:8rem"></i></div>
                <div class="card-item card-content">
                 
                    <hr>
                  <h4 class="">Usuario: </h4><h4 class="ng-binding"><?php echo $login_session; ?></h4>
                  <p class="counter"></p>
                </div>
              </a>
            </div>
          </div> 
          <div style="" class="grid-content card-animate" >
            <div class="card card-style ">
              <a href="DaPe.php" ui-sref="quips.topic({id: topic.slug})">
                <div class="thumb-image text-center"><i class="fi-clipboard-pencil color2" style="font-size:8rem"></i></div>
                <div class="card-item card-content">
                    <hr>
                  <h4 class="ng-binding">Nuevo Historial Clínico Nutricional</h4>
                  <p class="counter"></p>
                </div>
              </a>
            </div>
          </div>
            <div style="" class="grid-content card-animate" >
            <div class="card card-style ">
              <a href="AlmacenHistoriales/Almacen.php" ui-sref="quips.topic({id: topic.slug})">
                <div class="thumb-image text-center"><i class="fi-list-thumbnails color3" style="font-size:8rem"></i></div>
                <div class="card-item card-content">
                    <hr>
                  <h4 class="ng-binding">Almacen de Historiales</h4>
                  <p class="counter ng-binding">Eliminar o Actualizar un Historial</p>
                </div>
              </a>
            </div>
          </div>
            <div style="" class="grid-content card-animate">
            <div class="card card-style ">
              <a href="Esta.php" ui-sref="quips.topic({id: topic.slug})">
                <div class="thumb-image text-center"><i class="fi-graph-bar color4" style="font-size:8rem"></i></div>
                <div class="card-item card-content">
                    <hr>
                  <h4 >Estadisticas</h4>
                  <p class="counter"></p>
                </div>
              </a>
            </div>
          </div>
        </div>
     </div>
      <hr>
    </div>
  </div>
</div>


<!-- Top Footer -->
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-3 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maiores alias ea sunt facilis impedit fuga dignissimos illo quaerat iure in nobis id quos, eaque nostrum! Unde, voluptates suscipit repudiandae!</p>
    </div>
    <div class="small-12 medium-3 large-4 columns">
      <i class="fi-html5"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
    </div>
    <div class="small-6 medium-3 large-2 columns">
      <h4>Work With Me</h4>
      <ul class="footer-links">
        <li><a href="#">What I Do</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">FAQ's</a></li>
      <ul>
    </div>
    <div class="small-6 medium-3 large-2 columns">
      <h4>Follow Me</h4>
      <ul class="footer-links">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Dribbble</a></li>
      <ul>
    </div>
  </div>
</footer>

</div>

</div>  
</div>
    
</body>
          
    <script>$(document).foundation()</script>