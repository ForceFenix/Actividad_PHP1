<?php 
    $num="";
    $result="";
    $cookie_num1="num";
    $cookie_valor1="";

    if(isset($_POST["submit"])){
        $cookie_valor1 =$_POST["submit"];
        $num= $_POST["submit"];
        $result= $num+$_COOKIE["num"];
        setcookie($cookie_num1,$result,time()+ 720);
        
    }
    else(
        $num=""
    );
    if(isset($_POST["ce"])){
        $result= 0;
        setcookie($cookie_num1,$result,time()+ 720);
        
    }
    else(
        $num=""
    )
   
?>  
<!DOCTYPE html>
<html lang="es">
    <head>    
        <title> Actividad Obligatoria PHP </title>
        <meta charset = "iso-8559-1"/>
        <meta name="description" content="Actividad Obligatoria PHP"/>
        <meta name="keywords" content="PHP, HTML, CSS, MySQL, Visual Studio"/>
        <link rel="stylesheet" href="Estilo_calc.css"/>
                
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');  
        </style>
    </head>

    <body>
        <div>
            
            <nav class="menu_principal">
                <ul>
                    <div class="logo">
                        <a href="index.php">
                            <img src="imagenes/Logo.png" height=60px/>
                        </a> 
                    </div>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pagina_axies.php">Axies</a></li>
                    <li><a href="calculadora.php">Calculadora</a></li>
                </ul>
            </nav>
            <header>
                <h1>Calculadora :3</h1>
            </header>
            <table class="botones">            
                <form action="#" method="post" id=res>
                    <h3><?php echo $result; ?></h3>
                        <tr>
                            <input type="submit" name="ce" value="CLEAR" id="ce">
                        </tr>
                        <div class="clear"></div>
                        <tr>
                            <td><input type="submit" name="submit" value="75" id="chomp"></td>
                            <td><input type="submit" name="submit" value="30" id="lagging"></td>
                            <td><input type="submit" name="submit" value="40" id="sticky"></td>
                            <td><input type="submit" name="submit" value="100" id="allergic"></td>
                        </tr>
                    
                </form>
            </table>
        </div>
        

        <div class="clear"></div>
        <footer>
        <address>Alumno: Federico Luis Perez</address>
        <address>E-mail: federicperez@frba.utn.edu.ar</address>
        </footer>
    </body>




   
</html> 
