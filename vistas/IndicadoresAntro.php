<?php 
include("../api/dbconfig.php");
session_start();
if(!isset($_SESSION['login_user']))
	{
	header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html class="no-js" lang="es" ng-app="moduloDatos" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial clinico nutricional</title>
        <link rel="stylesheet" media="screen" href="../css/zaa.css"/>
    <script src="../js/zaa.js"></script>
    <?php include ("DBpages/require.php"); ?>
    
    <script type="text/javascript" src="../js/modulos/mainModul.js"></script>
    <script type="text/javascript" src="../js/modulos/Indicadores_CRUD.js"></script>
    <link rel="" href="DBpages/dbIndicaAntro.php">

  </head>

  <body ng-controller="Indicadores_CRUD">
        <div class="grid-block main-body" >

        <div class="left-sidebar" style="width:50px" >
                
                <ul class="property-nav">
                   
                    <li class="library " ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Menu Principal">
                        <a href="Menu.php"  ui-sref="library" ui-sref-opts="{ reload: true }"> <i class="fi-heart" style="font-size:2rem"></i>
                        </a>
                        </span>
                       
                    </li>
                        
                    <li class="library" ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Datos Personales"><a href="DaPe.php" ui-sref="library" ui-sref-opts="{ reload: true }" > <i class="fi-clipboard-pencil" style="font-size:2rem"></i></a></span>
                    </li>
                    <li class="patterntap" ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Indicadores Clinicos">
                            <a href="IndCli.php" ui-sref="patterntap" ui-sref-opts="{ reload: true }"> <i class="fi-check" style="font-size:2rem"></i></a>
                        </span>
                    </li>
                    <li class="buildingblocks" ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Ingesta de Medicamento">
                            <a href="Inge.php" ui-sref="building-blocks" ui-sref-opts="{ reload: true }"><i class="fi-plus" style="font-size:2rem"></i></a></span>
                    </li>
                    
                    
                    <li class="quips " ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Actividades">
                        <a href="Acti.php" ui-sref="quips" ui-sref-opts="{ reload: true }"><i class="fi-mountains" style="font-size:2rem"></i></a>
                        </span>
                    </li>
                    <li class="word" ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Aspectos Ginecológicos">
                        <a href="Aspectos.php" ui-sref="words" ui-sref-opts="{ reload: true }"><i class="fi-torso-female" style="font-size:2rem"></i></a>
                        </span>
                    </li>
                    <li class="friday15 current" ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Indicadores Antropométricos">
                            <a href="IndicadoresAntro.php" ui-sref="friday15" ui-sref-opts="{ reload: true }"><i class="fi-list-bullet" style="font-size:2rem"></i></a>
                        </span>
                    </li>
                    <li class="friday15" ui-sref-active="current">
                        <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" z-index="3" title="Salir">
                            <a href="../api/logout.php" ui-sref="friday15" ui-sref-opts="{ reload: true }"><i class="fi-x-circle" style="font-size:2rem"></i></a>
                        </span>
                    </li>
                    
                </ul>
            </div>
            
            
            
            <div class="grid-block">
                <div class="main-view-container" style="width: 100%" >
                    <div class="quip-content quips-level1">
                        <div class="grid-block align-center">
                            <div class="main-contain grid-content small-12">
                                <div class="grid-block zero prop-header">
                                        <div class="medium-12 large-12 columns">
                                            <h1>Historial clinico nutricional</h1>
                                            <p class="subheader">There is beauty in space, and it is orderly. There is no weather, and there is regularity. It is predictable. Everything in space obeys the laws of physics. If you know these laws, and obey them, space will treat you kindly.</p>
                                            <?php include ("v6.php"); ?>
                                            <?php include ("footer.php");?>
                                        </div>
                                </div>
                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div> 


   

	
<hr>



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
 	  	 <?php
            	if(isset($_SESSION['login_user']))
            	{
            	$login_session=$_SESSION['login_user'];
            // 	echo '<h1>Welcome hola '.$login_session.'</h1>';
            	}
          ?>
  </body>
</html>