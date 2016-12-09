<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html class="no-js" lang="es" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial clinico nutricional</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation-icons/3.0/foundation-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation-datepicker/1.5.3/css/foundation-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.ttf" type="text/css" />
    <link rel="stylesheet" href="../css/style_.css" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.js"></script>


  </head>

  <body>

	<div class="title-bar" data-responsive-toggle="realEstateMenu" data-hide-for="small">
		<button class="menu-icon" type="button" data-toggle></button>
		<div class="title-bar-title">Menu</div>
	</div>

    <div class="top-bar" id="realEstateMenu">
        <div class="top-bar-left">
            <ul class="menu" data-responsive-menu="accordion">
            <li class="menu-text">Interplanetary</li>
            <li><a href="Menu.php">Menu</a></a></li>
            <li><a href="DaPe.php">Datos personales</a></li>
            <li><a href="IndCli.php">Indicadores clínicos</a></li>
            <li><a href="Inge.php">Ingesta de medicamento</a></li>
            <li><a href="Acti.php">Actividades</a></li>
            <li><a href="Aspectos.php">Aspectos ginecológicos</a></li>
            <li><a href="Indicadores.php">Indicadores antropométricos</a></li>
        </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
            <li><a href="#">My Account</a></li>
            <li><a class="button">Login</a></li>
            </ul>
        </div>
    </div>
 <!--<div class="medium-4  columns">-->
 <!--           <label for="right-label" class="text-lefth middle">Fecha de nacimiento-->
 <!--               <input type="text" class="span2" value="02-12-2000" id="dp1">-->
 <!--           </label>-->
 <!--</div>-->

    <div class="row">
        <div class="medium-12 large-12 columns">
        <h1>Historial clinico nutricional</h1>
        <p class="subheader">There is beauty in space, and it is orderly. There is no weather, and there is regularity. It is predictable. Everything in space obeys the laws of physics. If you know these laws, and obey them, space will treat you kindly.</p>

        </div>

    </div>

    <?php include ("v7.php"); ?>
   


  
<hr>	
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
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation-datepicker/1.5.3/js/foundation-datepicker.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/foundation/6.2.1/js/foundation.reveal.js"></script>
    <script src="https://intercom.zurb.com/scripts/zcom.js"></script>
    <script type="text/javascript">
    
        $(document).foundation();
    		$(document).ready(function(){$('#myModal').foundation('reveal', 'open')});
    	
        $('#dp1').fdatepicker({
          format: 'dd-mm-yyyy',
          disableDblClickSelection: true
        });
   
 	
    </script>
 	 
  </body>
</html>