{"filter":false,"title":"prueba.php","tooltip":"/prueba.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":189,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->","<html class=\"no-js\" lang=\"es\" >","  <head>","    <meta charset=\"utf-8\">","    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">","    <title>Historial clinico nutricional</title>","    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.css\">","    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/foundation-icons/3.0/foundation-icons.min.css\">","    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css\" />","    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/foundation-datepicker/1.5.3/css/foundation-datepicker.min.css\">","    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css\" />","    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.ttf\" type=\"text/css\" />","    ","    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js\"></script>","    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.js\"></script>","    <!--<script type=\"text/javascript\" src=\"js/controller.js\"></script>-->","","  </head>","","  <body ng-app>","","\t<div class=\"title-bar\" data-responsive-toggle=\"realEstateMenu\" data-hide-for=\"small\">","\t\t<button class=\"menu-icon\" type=\"button\" data-toggle></button>","\t\t<div class=\"title-bar-title\">Menu</div>","\t</div>","","    <div class=\"top-bar\" id=\"realEstateMenu\">","        <div class=\"top-bar-left\">","            <ul class=\"menu\" data-responsive-menu=\"accordion\">","            <li class=\"menu-text\">Interplanetary</li>","            <li><a href=\"vistas/DaPe.php\">Datos personales</a></li>","            <li><a href=\"vistas/IndCli.php\">Indicadores clínicos</a></li>","            <li><a href=\"vistas/Inge.php\">Ingesta de medicamento</a></li>","            <li><a href=\"vistas/Acti.php\">Actividades</a></li>","            <li><a href=\"vistas/Aspectos.php\">Aspectos ginecológicos</a></li>","            <li><a href=\"vistas/Indicadores.php\">Indicadores antropométricos</a></li>","        </ul>","        </div>","        <div class=\"top-bar-right\">","            <ul class=\"menu\">","            <li><a href=\"#\">My Account</a></li>","            <li><a class=\"button\">Login</a></li>","            </ul>","        </div>","    </div>","        <!--<div class=\"medium-4  columns\">-->","        <!--    <label for=\"right-label\" class=\"text-lefth middle\">Fecha de nacimiento-->","        <!--        <input type=\"text\" class=\"span2\" value=\"02-12-2000\" id=\"dp1\">-->","        <!--    </label>-->","        <!--</div>-->","","    <div class=\"row\">","        <div class=\"medium-12 large-12 columns\">","        <h1>Historial clinico nutricional</h1>","        <p class=\"subheader\">There is beauty in space, and it is orderly. There is no weather, and there is regularity. It is predictable. Everything in space obeys the laws of physics. If you know these laws, and obey them, space will treat you kindly.</p>","","        </div>","","    </div>","    ","<div class=\"row\">","","        <div class=\"medium-4  columns\">","          <label for=\"right-label\" class=\"text-lefth middle\">Diarrea","            <input type=\"text\" ng-model=\"nombre\" id=\"\" placeholder=\"Nombre\">","          </label>","          <h5>hola {{nombre}}</h5>","        </div>","        ","        <div class=\"medium-4  columns\">","          <label for=\"right-label\" class=\"text-lefth middle\">Estreñimiento","            <input type=\"number\" value=\"20\">","          </label>","        </div>","        <div class=\"medium-4 columns\">","            <label for=\"right-label\" class=\"text-lefth middle\">Gastritis","                <select name=\"\" id=\"\">","                    <option value=\"masculino\">Masculino</option>","                    <option value=\"femenino\">Femenino</option>","                </select>","            </label>","        </div>","</div>","    ","    <!--<div class=\"row\">-->","       ","    <!--    <div class=\"medium-4 medium-offset-4\">-->","    <!--        <div class=\"expanded button-group radius\">-->","    <!--            <a href=\"#\" class=\"small button success\">Anterior</a>-->","                ","    <!--            <a href=\"#\" class=\"small button success\">Siguiente</a>-->","    <!--        </div>-->","    <!--    </div>-->","     ","    <!--</div>-->","    ","","",""," <!--   <div class=\"row\">-->","\t",""," <!--   \t<p><a data-open=\"exampleModal11\"> modal 1</a></p>-->","    "," <!--   \t<div class=\"reveal\" id=\"exampleModal11\" data-reveal>-->"," <!--   \t  <h1>Awesome. I Have It.</h1>-->"," <!--   \t  <p class=\"lead\">Your couch. It is mine. Modal 1</p>-->"," <!--   \t  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>-->"," <!--   \t  <button type=\"button\" class=\"success button\">Save</button>-->","    \t  "," <!--   \t  <button class=\"close-button\" data-close aria-label=\"Close reveal\" type=\"button\">-->"," <!--   \t    <span aria-hidden=\"true\">&times;</span>-->"," <!--   \t  </button>-->"," <!--   \t</div>-->","\t<!--</div>-->","\t","\t<!--<div class=\"row\">-->","\t"," <!--   \t<p><a data-open=\"exampleModal2\">modal 2</a></p>-->","    "," <!--   \t<div class=\"reveal\" id=\"exampleModal2\" data-reveal>-->"," <!--   \t  <h1>Awesome. I Have It.</h1>-->"," <!--   \t  <p class=\"lead\">Your couch. It is mine. Modal 2</p>-->"," <!--   \t  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>-->"," <!--   \t  <button type=\"button\" class=\"success button\">Save</button>-->","    \t  "," <!--   \t  <button class=\"close-button\" data-close aria-label=\"Close reveal\" type=\"button\">-->"," <!--   \t    <span aria-hidden=\"true\">&times;</span>-->"," <!--   \t  </button>-->"," <!--   \t</div>-->","\t<!--</div>-->","<hr>\t","<footer class=\"footer\">","  <div class=\"row full-width\">","    <div class=\"small-12 medium-3 large-4 columns\">","      <i class=\"fi-laptop\"></i>","      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maiores alias ea sunt facilis impedit fuga dignissimos illo quaerat iure in nobis id quos, eaque nostrum! Unde, voluptates suscipit repudiandae!</p>","    </div>","    <div class=\"small-12 medium-3 large-4 columns\">","      <i class=\"fi-html5\"></i>","      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>","    </div>","    <div class=\"small-6 medium-3 large-2 columns\">","      <h4>Work With Me</h4>","      <ul class=\"footer-links\">","        <li><a href=\"#\">What I Do</a></li>","        <li><a href=\"#\">Pricing</a></li>","        <li><a href=\"#\">Events</a></li>","        <li><a href=\"#\">Blog</a></li>","        <li><a href=\"#\">FAQ's</a></li>","      <ul>","    </div>","    <div class=\"small-6 medium-3 large-2 columns\">","      <h4>Follow Me</h4>","      <ul class=\"footer-links\">","        <li><a href=\"#\">GitHub</a></li>","        <li><a href=\"#\">Facebook</a></li>","        <li><a href=\"#\">Twitter</a></li>","        <li><a href=\"#\">Instagram</a></li>","        <li><a href=\"#\">Dribbble</a></li>","      <ul>","    </div>","  </div>","</footer>","    <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>","    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js\"></script>","    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/foundation-datepicker/1.5.3/js/foundation-datepicker.min.js\"></script>","    ","    ","    <script src=\"https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js\"></script>","    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/foundation/6.2.1/js/foundation.reveal.js\"></script>","    <script src=\"https://intercom.zurb.com/scripts/zcom.js\"></script>","    <script type=\"script/javascript\">","    ","    $(document).foundation();","\t\t$(document).ready(function(){$('#myModal').foundation('reveal', 'open')});","\t","    $('#dp1').fdatepicker({","      format: 'dd-mm-yyyy',","      disableDblClickSelection: true","    });","   "," \t"," \t</script>"," \t ","  </body>","</html>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":138,"column":7},"action":"insert","lines":["<?php ","include(\"dbconfig.php\");","session_start();","if($_SERVER[\"REQUEST_METHOD\"] == \"POST\")"," {","// username and password received from loginform ","$username=mysqli_real_escape_string($dbconfig,$_POST['username']);","$password=mysqli_real_escape_string($dbconfig,$_POST['password']);","","$sql_query=\"SELECT id FROM user WHERE username='$username' and password='$password'\";","$result=mysqli_query($dbconfig,$sql_query);","$row=mysqli_fetch_array($result,MYSQLI_ASSOC);","$count=mysqli_num_rows($result);","","","// If result matched $username and $password, table row must be 1 row","if($count==1)","{","$_SESSION['login_user']=$username;","","header(\"location: welcome-home.php\");","}","else","{","$error=\"Username or Password is invalid\";","    echo $error;","}","}","?>","<!DOCTYPE html>","<html>","<head>","<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>","<meta charset=\"UTF-8\">","<title>PHP login script tutorial - click4knowledge.com</title>","<style>","body {","    background-size: cover;","    font-family: Montserrat;","}","",".logo {","    width: 213px;","    height: 36px;","    margin: 30px auto;","}","",".login-block {","    width: 320px;","    padding: 20px;","    background: #fff;","    border-radius: 5px;","    border-top: 5px solid #ff656c;","    margin: 0 auto;","}","",".login-block h1 {","    text-align: center;","    color: #000;","    font-size: 18px;","    text-transform: uppercase;","    margin-top: 0;","    margin-bottom: 20px;","}","",".login-block input {","    width: 100%;","    height: 42px;","    box-sizing: border-box;","    border-radius: 5px;","    border: 1px solid #ccc;","    margin-bottom: 20px;","    font-size: 14px;","    font-family: Montserrat;","    padding: 0 20px 0 50px;","    outline: none;","}","",".login-block input#username {","    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;","    background-size: 16px 80px;","}","",".login-block input#username:focus {","    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;","    background-size: 16px 80px;","}","",".login-block input#password {","    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;","    background-size: 16px 80px;","}","",".login-block input#password:focus {","    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;","    background-size: 16px 80px;","}","",".login-block input:active, .login-block input:focus {","    border: 1px solid #ff656c;","}","",".login-block button {","    width: 100%;","    height: 40px;","    background: #ff656c;","    box-sizing: border-box;","    border-radius: 5px;","    border: 1px solid #e15960;","    color: #fff;","    font-weight: bold;","    text-transform: uppercase;","    font-size: 14px;","    font-family: Montserrat;","    outline: none;","    cursor: pointer;","}","",".login-block button:hover {","    background: #ff7b81;","}","","</style>","</head>","","<body>","","<div class=\"logo\"></div>","<div class=\"login-block\">","    <h1>Login</h1>","    <form method=\"post\" action=\"\" name=\"loginform\">","    <input type=\"text\" value=\"\" placeholder=\"Username\" id=\"username\" name=\"username\" />","    <input type=\"password\" value=\"\" placeholder=\"Password\" id=\"password\" name=\"password\" />","    <button type=\"submit\">Submit</button>","    </form>","</div>","</body>","","</html>"],"id":3}],[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["a"],"id":4}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["p"],"id":5}],[{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["i"],"id":6}],[{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"insert","lines":["/"],"id":7}],[{"start":{"row":20,"column":18},"end":{"row":20,"column":30},"action":"remove","lines":["welcome-home"],"id":8},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["s"]}],[{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":["s"],"id":9}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["s"],"id":10}]]},"ace":{"folds":[],"customSyntax":"php","scrolltop":420,"scrollleft":0,"selection":{"start":{"row":21,"column":1},"end":{"row":21,"column":1},"isBackwards":false},"options":{"tabSize":4,"useSoftTabs":true,"guessTabSize":false,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1465532953111,"hash":"b11f332188cf001ff0ee541217f31c02b4dcd4dc"}