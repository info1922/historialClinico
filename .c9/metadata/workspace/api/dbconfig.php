{"filter":false,"title":"dbconfig.php","tooltip":"/api/dbconfig.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":0,"column":0},"end":{"row":13,"column":2},"action":"insert","lines":["<?php ","    $host = \"localhost\";","    $user = \"root\";","    $pass = \"root\";","    $database = \"cavas\";","    $con = mysql_connect($host, $user, $pass);","","    if(!$con){","    die ('Error de conexión: '.mysql_error() );","    }","//conexion exitosa","","    mysql_select_db($database, $con);","?>"],"id":1}],[{"start":{"row":13,"column":2},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["<?php ","    $host = \"localhost\";","    $user = \"root\";","    $pass = \"root\";","    $database = \"cavas\";","    $con = mysql_connect($host, $user, $pass);","","    if(!$con){","    die ('Error de conexión: '.mysql_error() );","    }","//conexion exitosa","","    mysql_select_db($database, $con);","?>",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["<?php","$host = 'localhost';","$username = 'root';","$password = '';","$database = 'users';","$dbconfig = mysqli_connect($host,$username,$password,$database);","?>",""],"id":4}],[{"start":{"row":2,"column":13},"end":{"row":2,"column":17},"action":"remove","lines":["root"],"id":5},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["i"]}],[{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":["v"],"id":6}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["a"],"id":7}],[{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["n"],"id":8}],[{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["n"],"id":9}],[{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["1"],"id":10}],[{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"insert","lines":["9"],"id":11}],[{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"insert","lines":["2"],"id":12}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["2"],"id":13}],[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["s"],"id":14}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["r"],"id":15}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["e"],"id":16}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["s"],"id":17}],[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["u"],"id":18}],[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["n"],"id":19}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["u"],"id":20}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["t"],"id":21}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["r"],"id":22}],[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["i"],"id":23}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["B"],"id":24}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["D"],"id":25}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["D"],"id":26}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["B"],"id":27}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["_"],"id":28}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["b"],"id":29}],[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["d"],"id":30}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":0},"end":{"row":7,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":65,"mode":"ace/mode/php"}},"timestamp":1465533034386,"hash":"c703526734dae99a9419be3442b604b71c688076"}