<?php
include'conexion.php';
$stmt = $conn->prepare("CALL ingresar_motos_enduro (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssiisisssssssssssssssssss", $referencia,$color,$modelo,$marca,$cantidad,$precio,$cilindraje,$clasificacionmotos,$transmision,
$motor,$sistemavalvulas,$diametrocarrera,$potenciamaxima,$torque,$sistemacombustible,$sistemaarranque,$largo,$ancho,$altura,
$alturaasiento,$distanciapiso,$pesoseco,$llantadelantera,$llantatrasera,$frenodelantero,$frenotrasero,$capacidadtanque);

$referencia=$_POST['txtreferencia'];
$color=$_POST['txtcolor'];
$modelo=$_POST['txtmodelo'];
$marca=$_POST['txtmarca'];
$cantidad=$_POST['txtcantidad'];
$precio=$_POST['txtprecio'];
$cilindraje=$_POST['txtcilindraje'];
$clasificacionmotos=$_POST['txtclasificacionmotos'];
$transmision=$_POST['txttransmision'];
$motor=$_POST['txtmotor'];
$sistemavalvulas=$_POST['txtsistemavalvulas'];
$diametrocarrera=$_POST['txtdiametrocarrera'];
$potenciamaxima=$_POST['txtpotenciamaxima'];
$torque=$_POST['txttorque'];
$sistemacombustible=$_POST['txtsistemacombustible'];
$sistemaarranque=$_POST['txtsistemaarranque'];
$largo=$_POST['txtlargo'];
$ancho=$_POST['txtancho'];
$altura=$_POST['txtaltura'];
$alturaasiento=$_POST['txtalturaasiento'];
$distanciapiso=$_POST['txtdistanciapiso'];
$pesoseco=$_POST['txtpesoseco'];
$llantadelantera=$_POST['txtllantadelantera'];
$llantatrasera=$_POST['txtllantatrasera'];
$frenodelantero=$_POST['txtfrenodelantero'];
$frenotrasero=$_POST['txtfrenotrasero'];
$capacidadtanque=$_POST['txtcapacidadtanque'];


$stmt->execute();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Nuevo Registro</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Material Dashboard CSS -->
  <link rel="stylesheet" href="material-dashboard.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<center>
<div class="card card-nav-tabs text-center "style= width: 20rem;>
  <div class="card-header card-header-success">
  <h3>Registrado Satisfactoriamente</h3>
  </div>     
<!-- partial:index.partial.html -->
<center>
<svg width="900" height="500" viewBox="0 0 1205 1015" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">                                        
<g id="Canvas" transform="translate(657 439)">
<clipPath id="clip-0" clip-rule="evenodd">
<path d="M -657 -439L 548 -439L 548 576L -657 576L -657 -439Z" fill="#FFFFFF"/>
</clipPath>
<g id="Frame" clip-path="url(#clip-0)">
<path d="M -657 -439L 548 -439L 548 576L -657 576L -657 -439Z" fill="#FFFFFF"/>

<g class="buildings2">
<g id="buildings">
<use xlink:href="#path0_fill" transform="translate(-666 -181)" fill="#F6F6F7"/>
</g>
</g>

<g class="buildings1">
<g id="buildings">
<use xlink:href="#path0_fill" transform="translate(-666 -181)" fill="#F6F6F7"/>
</g>
</g>
    
<g class="flits">
<g id="Vector 27">
<use xlink:href="#path1_fill" transform="translate(-127 -277)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path2_fill" transform="translate(202.062 -227.417)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path2_fill" transform="translate(280 -211)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path3_fill" transform="translate(339.815 166.233)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path2_fill" transform="translate(-606 -255)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path2_fill" transform="translate(-434.062 -177.9)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path4_fill" transform="translate(-618.357 40.2667)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path3_fill" transform="translate(-476 199)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path5_fill" transform="translate(9 216)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path6_fill" transform="translate(86.125 -113.733)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path6_fill" transform="translate(-298 -112)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path7_fill" transform="translate(264.016 152.117)" fill="#DFEDFB"/>
</g>
<g id="Vector 27">
<use xlink:href="#path6_fill" transform="translate(-421 81)" fill="#DFEDFB"/>
</g>
</g>
<g class="shadow">
    <g id="Ellipse 2" class="motor">
    <use xlink:href="#path8_fill" transform="translate(-265 131)" fill="#BCBCBC"/>
    </g>
</g>
<g class="bumps">
<g class="wielen">
<g id="Group" class="wiel1">
    <g id="Ellipse 9">
    <use xlink:href="#path9_fill" transform="translate(-274.962 11)" fill="#3A3E4C"/>
    </g>
    <g id="Ellipse 9">
    <use xlink:href="#path10_fill" transform="translate(-256.962 29)" fill="#FFFFFF"/>
    </g>
    <g id="Ellipse 10">
    <use xlink:href="#path11_fill" transform="translate(-233.962 52)" fill="#C0C0C0"/>
    </g>
    <g id="Vector 31">
    <use xlink:href="#path12_fill" transform="matrix(0.999793 0.0203536 -0.0203536 0.999793 -203.751 33.466)" fill="#E4E0E0"/>
    </g>
</g>
<g id="Group" class="wiel2">
    <g id="Ellipse 9">
    <use xlink:href="#path9_fill" transform="translate(26.038 11)" fill="#3A3E4C"/>
    </g>
    <g id="Ellipse 9">
    <use xlink:href="#path10_fill" transform="translate(44.038 29)" fill="#FFFFFF"/>
    </g>
    <g id="Ellipse 10">
    <use xlink:href="#path11_fill" transform="translate(67.038 52)" fill="#C0C0C0"/>
    </g>
    <g id="Vector 31">
    <use xlink:href="#path12_fill" transform="matrix(0.999793 0.0203536 -0.0203536 0.999793 97.2487 33.466)" fill="#E4E0E0"/>
    </g>
</g>
</g>
</g>
    <g class="wolkjes">    
    <g id="Group" class="wolk">
    <g id="Ellipse 5">
    <use xlink:href="#path46_fill" transform="translate(291 -153)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 6">
    <use xlink:href="#path47_fill" transform="translate(314 -182)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 7">
    <use xlink:href="#path48_fill" transform="translate(364 -164)" fill="#E7F5FB"/>
    </g>
    </g>
 
    <g id="Group" class="wolk">
    <g id="Ellipse 5">
    <use xlink:href="#path49_fill" transform="translate(-299.645 -313.581)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 5">
    <use xlink:href="#path49_fill" transform="translate(-343 -327.774)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 5">
    <use xlink:href="#path50_fill" transform="translate(-185.065 -322.613)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 6">
    <use xlink:href="#path51_fill" transform="translate(-264.032 -351)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 7">
    <use xlink:href="#path52_fill" transform="translate(-316.677 -349.71)" fill="#E7F5FB"/>
    </g>
    </g>

    <g id="Group" class="wolk">
    <g id="Ellipse 5">
    <use xlink:href="#path53_fill" transform="matrix(-1 0 0 1 -546.645 -89.5807)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 5">
    <use xlink:href="#path53_fill" transform="matrix(-1 0 0 1 -506 -103.774)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 5">
    <use xlink:href="#path54_fill" transform="matrix(-1 0 0 1 -654.065 -98.6129)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 6">
    <use xlink:href="#path55_fill" transform="matrix(-1 0 0 1 -580.032 -127)" fill="#E7F5FB"/>
    </g>
    <g id="Ellipse 7">
    <use xlink:href="#path56_fill" transform="matrix(-1 0 0 1 -530.677 -125.71)" fill="#E7F5FB"/>
    </g>
    </g>
</g>   
<g id="Group" class="motor">
    <g id="Group">
    <g id="Vector 37">
    <use xlink:href="#path13_fill" transform="translate(12.538 -77)" fill="#C4C4C4"/>
    </g>
    <g id="Vector 36">
    <use xlink:href="#path14_fill" transform="translate(64.038 -62)" fill="#A2CADE"/>
    </g>
    <g id="Vector 35">
    <use xlink:href="#path15_fill" transform="translate(33.038 -96)" fill="#4B4B4B"/>
    </g>
    <g id="Vector 34">
    <use xlink:href="#path16_fill" transform="translate(-279 -47)" fill="#4B4B4B"/>
    </g>
    <g id="Vector 36">
    <use xlink:href="#path17_fill" transform="translate(57.038 -45.5)" fill="#E38F11"/>
    </g>
    <g id="Vector 24">
    <use xlink:href="#path18_fill" transform="translate(30.3009 -52.5)" fill="#D44646"/>
    </g>
    <g id="Vector 39">
    <use xlink:href="#path19_fill" transform="translate(24.2042 7.55762)" fill="#D44646"/>
    </g>
    <g id="Vector 32">
    <use xlink:href="#path20_fill" transform="translate(-189.962 -43.1547)" fill="#4B4B4B"/>
    </g>
    <g id="Vector 24">
    <use xlink:href="#path21_fill" transform="translate(-260.462 -68.717)" fill="#D44646"/>
    </g>
    <g id="Vector 33">
    <use xlink:href="#path22_fill" transform="translate(-261.962 -68)" fill="#4B4B4B"/>
    </g>
    <g id="Vector 24">
    <use xlink:href="#path23_fill" transform="translate(-111.962 -68.717)" fill="#EB5C5C" fill-opacity="0.8"/>
    </g>
    <g id="Vector 30">
    <use xlink:href="#path24_fill" transform="matrix(0.997073 0.0764547 -0.0764547 0.997073 -12.1653 -29)" fill="#636667"/>
    </g>
    <g id="Vector 24">
    <use xlink:href="#path25_fill" transform="translate(-16.962 -122)" fill="#4B4B4B"/>
    </g>
    <g id="Vector 26">
    <use xlink:href="#path26_fill" transform="translate(-170.962 49)" fill="#4B4B4B"/>
    </g>
    <g id="Vector 25">
    <use xlink:href="#path27_fill" transform="translate(-102.462 -10)" fill="#CFCFCF"/>
    </g>
    <g id="Vector 38">
    <use xlink:href="#path28_fill" transform="translate(-262.962 2.5)" fill="#B7B7B7"/>
    </g>
    <g id="Vector 26">
    <use xlink:href="#path29_fill" transform="translate(-256.266 10.5217)" fill="#E1E1E1"/>
    </g>
    <g id="Vector 27">
    <use xlink:href="#path30_fill" transform="matrix(0.858149 0.513401 -0.513401 0.858149 -245.911 18)" fill="#D7D7D7"/>
    </g>
    </g>
</g>
<g class="motor">
    <g  class="shake">
        <g id="Engine">
            <g id="Vector 29">
            <use xlink:href="#path32_fill" transform="translate(-93.962 51.0279)" fill="#6E6E6E"/>
            </g>
            <g id="Vector 28">
            <use xlink:href="#path33_fill" transform="translate(-93.962 -2.0076)" fill="#8D8D8D"/>
            </g>
            <g id="Vector 27">
            <use xlink:href="#path34_fill" transform="translate(-60.4613 18.2151)" fill="#373737"/>
            </g>
            <g id="Vector 27">
            <use xlink:href="#path34_fill" transform="translate(-64.6697 29.0296)" fill="#373737"/>
            </g>
            <g id="Vector 27">
            <use xlink:href="#path34_fill" transform="translate(-68.4753 39.8199)" fill="#373737"/>
            </g>
        </g>
    </g>
</g>
<g class="motor">   
    <g id="Rider">
    <g id="Vector 15">
    <use xlink:href="#path35_fill" transform="matrix(0.982526 0.186127 -0.186127 0.982526 -30.135 -87.3189)" fill="#7D83BE"/>
    </g>
    <g id="Vector 14">
    <use xlink:href="#path36_fill" transform="matrix(0.964345 0.264648 -0.264648 0.964345 -74.8107 -135.749)" fill="#50547D"/>
    </g>
    <g id="Vector 14">
    <use xlink:href="#path37_fill" transform="matrix(0.964345 0.264648 -0.264648 0.964345 -150.76 -170.267)" fill="#202659"/>
    </g>
    <g id="Vector 15">
    <use xlink:href="#path38_fill" transform="matrix(0.982526 0.186127 -0.186127 0.982526 -31.1936 -83.4615)" fill="#2D357C"/>
    </g>
    <g id="Vector 14">
    <use xlink:href="#path39_fill" transform="matrix(0.964345 0.264648 -0.264648 0.964345 -92.5469 -141.993)" fill="#1E2244"/>
    </g>
    <g id="Vector 16">
    <use xlink:href="#path40_fill" transform="matrix(0.964345 0.264648 -0.264648 0.964345 -42.9855 -167.62)" fill="#8A8A8A"/>
    </g>
    <g id="Vector 12">
    <use xlink:href="#path41_fill" transform="matrix(0.88761 0.460595 -0.478139 0.878284 -52.8621 -201)" fill="#3B4384"/>
    </g>
    <g id="Vector 18">
    <use xlink:href="#path42_fill" transform="matrix(0.979345 0.202197 -0.202197 0.979345 -176.271 -61.2483)" fill="#333652"/>
    </g>
    <g id="Vector 18">
    <use xlink:href="#path43_fill" transform="matrix(0.979345 0.202197 -0.202197 0.979345 -170.347 -36.326)" fill="#373A54"/>
    </g>
    <g id="Vector 18">
    <use xlink:href="#path44_fill" transform="matrix(0.979345 0.202197 -0.202197 0.979345 -177.291 -53.9003)" fill="#292C4B"/>
    </g>
    <g id="Vector 22">
    <use xlink:href="#path45_fill" transform="matrix(0.990129 0.140156 -0.140156 0.990129 -131.755 33.9857)" fill="#161616"/>
    </g>
    </g>
</g>  
</g>
</g>
<defs>
<path id="path0_fill" d="M 87.2432 41.8419L 0 41.8419L 0 268L 1637 268L 1637 50.8458L 1553.46 50.8458L 1553.46 131.352L 1438.72 131.352L 1438.72 85.8024L 1362.05 85.8024L 1362.05 176.901L 1305.48 176.901L 1305.48 0L 1219.82 0L 1219.82 61.9684L 1152.67 61.9684L 1152.67 116.522L 1121.47 116.522L 1050.62 176.901L 1050.62 131.352L 1003.56 131.352L 1003.56 61.9684C 1003.56 34.4269 981.248 11.1225 944.87 11.1225C 908.493 11.1225 885.122 32.8379 885.122 61.9684L 885.122 131.352L 815.856 131.352L 815.856 102.221L 750.292 102.221L 750.292 176.901L 717.509 158.893L 677.325 176.901L 677.325 131.352L 593.783 131.352L 593.783 41.8419L 506.011 0L 506.011 189.613L 467.941 158.893L 445.734 176.901L 445.734 41.8419L 354.789 41.8419L 354.789 131.352L 300.328 131.352L 300.328 85.8024L 194.579 85.8024L 194.579 176.901L 145.405 131.352L 87.2432 176.901L 87.2432 41.8419Z"/>
<path id="path1_fill" d="M 138.53 7.65704L 11.6657 7.65704C 7.29104 7.65704 0 7.65704 0 3.84421C 0 0.793947 7.77711 0.0313812 11.6657 0.0313813L 138.53 0.0313813C 144.363 0.0313813 154.57 -0.60409 154.57 3.84421C 154.57 7.40285 143.876 7.86886 138.53 7.65704Z"/>
<path id="path2_fill" d="M 138.53 7.65704L 11.6657 7.65704C 7.29104 7.65704 0 7.65704 0 3.84421C 0 0.793947 7.77711 0.0313812 11.6657 0.0313813L 138.53 0.0313813C 144.363 0.0313813 154.57 -0.60409 154.57 3.84421C 154.57 7.40285 143.876 7.86886 138.53 7.65704Z"/>
<path id="path3_fill" d="M 165.17 7.65704L 13.9091 7.65704C 8.69316 7.65704 0 7.65704 0 3.84421C 0 0.793947 9.2727 0.0313812 13.9091 0.0313813L 165.17 0.0313813C 172.125 0.0313813 184.295 -0.60409 184.295 3.84421C 184.295 7.40285 171.545 7.86886 165.17 7.65704Z"/>
<path id="path4_fill" d="M 117.217 7.65704L 9.87094 7.65704C 6.16934 7.65704 0 7.65704 0 3.84421C 0 0.793947 6.58063 0.0313812 9.87094 0.0313813L 117.217 0.0313813C 122.153 0.0313813 130.79 -0.60409 130.79 3.84421C 130.79 7.40285 121.742 7.86886 117.217 7.65704Z"/>
<path id="path5_fill" d="M 182.486 10.2094L 15.3673 10.2094C 9.60454 10.2094 0 10.2094 0 5.12561C 0 1.0586 10.2448 0.0418416 15.3673 0.0418417L 182.486 0.0418417C 190.17 0.0418417 203.616 -0.805453 203.616 5.12561C 203.616 9.87047 189.53 10.4918 182.486 10.2094Z"/>
<path id="path6_fill" d="M 155.846 7.65704L 13.1239 7.65704C 8.20242 7.65704 0 7.65704 0 3.84421C 0 0.793947 8.74925 0.0313812 13.1239 0.0313813L 155.846 0.0313813C 162.408 0.0313813 173.891 -0.60409 173.891 3.84421C 173.891 7.40285 161.861 7.86886 155.846 7.65704Z"/>
<path id="path7_fill" d="M 94.5732 7.65704L 7.96406 7.65704C 4.97754 7.65704 0 7.65704 0 3.84421C 0 0.793947 5.30937 0.0313812 7.96406 0.0313813L 94.5732 0.0313813C 98.5552 0.0313813 105.524 -0.60409 105.524 3.84421C 105.524 7.40285 98.2234 7.86886 94.5732 7.65704Z"/>
<path id="path8_fill" d="M 434 5.5C 434 8.53757 336.846 11 217 11C 97.1542 11 0 8.53757 0 5.5C 0 2.46243 97.1542 0 217 0C 336.846 0 434 2.46243 434 5.5Z"/>
<path id="path9_fill" d="M 127 63.5C 127 98.5701 98.5701 127 63.5 127C 28.4299 127 0 98.5701 0 63.5C 0 28.4299 28.4299 0 63.5 0C 98.5701 0 127 28.4299 127 63.5Z"/>
<path id="path10_fill" d="M 91 45.5C 91 70.629 70.629 91 45.5 91C 20.371 91 0 70.629 0 45.5C 0 20.371 20.371 0 45.5 0C 70.629 0 91 20.371 91 45.5Z"/>
<path id="path11_fill" d="M 45 22.5C 45 34.9264 34.9264 45 22.5 45C 10.0736 45 0 34.9264 0 22.5C 0 10.0736 10.0736 0 22.5 0C 34.9264 0 45 10.0736 45 22.5Z"/>
<path id="path12_fill" d="M 5.5 0L 0 15.5C 10.4 18.7 17.5645 24.6778 19.5 35.5L 34 30.5C 31.6295 16.3936 20.8976 5.10968 5.5 0Z"/>
<path id="path13_fill" d="M 0 19.5L 3.5 26L 35.5 14.5L 23 4.5L 11.5 0L 3 2.5L 6 8L 1.5 10L 4.5 17L 0 19.5Z"/>
<path id="path14_fill" d="M 11 21C 12.6 14.6 8.66667 4.33333 7 0L 0 18.5C 0.333333 25.3333 1.7 38.6 4.5 37C 8 35 9 29 11 21Z"/>
<path id="path15_fill" d="M 12.5 10L 0 24.5L 11.5 32.5C 11 33.5 9.4 36.8 7 42C 4.6 47.2 10.3333 58.5 13.5 63.5C 17.6667 66.6667 27.3 73.1 32.5 73.5C 39 74 37.5 67 38 65C 38.5 63 33 59.5 33 56.5C 33 53.5 42 47.5 38 31C 34.8 17.8 22 4.83333 16 0L 16 12L 12.5 10Z"/>
<path id="path16_fill" d="M 40.0379 14.5L 56.5379 10L 60.5379 7.5L 49.0379 0L 33.5379 2.5L 32.0379 12.5L 6.03795 15C 4.03795 15.5 1.53795 15.4189 1.53795 17C 1.53795 19 2.53795 19 5.03795 20L 19.0379 25L 0.537943 58C 0.0379426 58.5 -0.562057 59.8 1.03794 61C 2.63794 62.2 4.37128 61.1667 5.03794 60.5L 40.0379 14.5Z"/>
<path id="path17_fill" d="M 0 9L 0 0C 1.5 0.166667 4.5 1.3 4.5 4.5C 4.5 7.7 1.5 8.83333 0 9Z"/>
<path id="path18_fill" d="M 54.7371 133.5L 3.7371 18.5C 2.89112 17.5 -2.30089 5.5 1.19909 4.5C 3.93942 3.71705 6.87845 0.333333 9.19913 0L 63.2371 129L 54.7371 133.5Z"/>
<path id="path19_fill" d="M 30.3336 6.44239C 9.53364 16.4424 -2.1662 42.9424 0.333638 45.9424C 3.79093 50.0914 10.3336 46.4424 13.8336 42.9424C 19.8336 36.9424 23.0644 32.9424 30.3336 28.4424C 38.7336 23.2424 46.3336 19.7757 51.3336 18.9424L 64.8336 51.4424C 64.8336 51.4424 68.3336 52.9424 70.8336 51.9424C 74.3336 50.5424 74.8336 47.9424 74.8336 47.9424C 74.8336 47.9424 67.8336 29.9424 67.8336 28.4424C 67.8336 26.9424 76.5003 17.9424 82.3336 16.9424C 88.167 15.9424 96.0336 17.4424 98.8336 17.4424C 101.634 17.4424 102.334 16.9424 103.334 14.9424C 101.734 11.7424 93.8336 6.44239 84.8336 3.44239C 75.3336 0.275722 51.1336 -3.55761 30.3336 6.44239Z"/>
<path id="path20_fill" d="M 1.84476 0.762731C 5.99595 -3.8202 24 13.6547 39 15.8656C 54 18.0765 75.0095 16.3864 78.1229 15.8656C 80.6136 15.4489 80.3716 17.6016 80.7175 18.4695C 81.0634 20.2055 81.9629 24.1982 82.7931 26.2814C 83.6233 28.3645 81.7553 28.5381 80.7175 28.3645C 68.7827 26.3681 62.556 26.2814 51.1402 35.1347C 40.2954 43.5452 18.5631 32.5308 8.59046 24.719C 0.806992 18.6219 -2.30643 5.34566 1.84476 0.762731Z"/>
<path id="path21_fill" d="M 140 110.217L 0 16.717C 2.51122e-05 4.71698 76 16.717 76 16.717L 73.5 25.717C 62.5 46.217 106 72.5027 122 59.217C 138 45.9313 151.5 56.717 151.5 52.717C 151.5 49.517 149.5 41.717 148.5 38.217C 157 17.217 170.5 -2.28301 222 0.216986C 263.2 2.21699 270.5 18.0503 269 25.717L 168.5 65.217C 148.932 73.914 132.667 75.8837 125 75.217L 97 71.217L 143.5 102.717L 151.5 75.217L 280.5 25.717L 276 16.717L 304.5 6.21698C 302.5 12.217 303.167 20.3837 304 25.717C 304.482 29.717 297.868 33.3837 294.5 34.717L 285 38.217C 273 70.217 248.1 136.417 244.5 145.217C 240.9 154.017 234 160.717 214.5 160.717L 151.5 160.717L 143.5 134.217L 40 148.217L 38.5 138.717L 140 124.717L 140 110.217Z"/>
<path id="path22_fill" d="M 16.5169 11.6372L 16.5169 17.2492C 34.2607 18.4964 69.8442 17.5867 74.0643 17.9609C 78.2844 18.335 79.0198 15.9343 78.8599 14.6872C 78.7001 12.5047 79.2436 10.3277 78.8599 8.83119C 78.4763 7.33465 73.5847 7.42819 73.5847 7.42819C 60.4767 7.42819 32.822 6.96052 28.9855 6.96052C 25.149 6.96052 18.7549 5.24573 16.5169 4.62217L 2.60964 0.413159C 1.97022 0.101379 0.595482 -0.335112 0.211833 0.413159C -0.171817 1.16143 0.0519787 1.97206 0.211833 2.28384L 16.5169 11.6372Z"/>
<path id="path23_fill" d="M 120.5 25.717C 120.5 25.717 118.5 14.217 101 9.21698C 83.5 4.21698 54.1667 0.716991 45 25.717C 35.8333 50.717 1 41.717 0 38.217C 8.5 17.217 22 -2.28301 73.5 0.216986C 114.7 2.21699 122 18.0503 120.5 25.717Z"/>
<path id="path24_fill" d="M 30 0L 0 15L 15.5 23.5L 22.5 23.5L 30 0Z"/>
<path id="path25_fill" d="M 6.03205 52.7751C 4.19872 53.2751 0.432054 53.3751 0.0320544 49.7751C -0.467946 45.2751 5.03205 45.7751 6.03205 45.7751L 15.5321 45.7751C 15.5321 44.4418 17.1321 41.7752 23.5321 41.7752C 31.5321 41.7752 33.0321 42.2752 33.0321 39.2752L 33.0321 28.2752C 30.6987 26.1085 24.8321 21.5752 20.0321 20.7752C 15.2321 19.9752 16.3654 7.44182 17.5321 1.27516C 17.0321 0.608489 16.6321 -0.524844 19.0321 0.275156C 22.0321 1.27516 36.5321 11.2751 35.5321 19.7751C 34.8067 25.9411 34.3005 26.5434 34.0882 25.9809L 35.5321 31.2751L 35.5321 35.2751L 45.5321 36.2751L 45.5321 44.7751L 51.5321 44.7751L 53.032 50.2751C 52.8654 50.9418 50.532 52.2751 50.532 52.2751C 50.532 52.2751 48.0321 50.4418 47.5321 49.7751L 40.0321 51.7751L 37.5321 49.7751C 37.5321 49.7751 32.7562 55.7751 28.532 55.7751L 20.532 55.7751C 18.8654 55.9418 15.5321 55.5751 15.5321 52.7751L 6.03205 52.7751Z"/>
<path id="path26_fill" d="M 123 47.5C 161 47.5 164.833 20.8333 162.5 8L 165.5 0C 168 4.5 168.36 9.05448 168.5 13.5C 169.101 32.5175 160.291 43.3838 149.5 48.5C 138.384 53.7704 125.146 53 116.5 53L 60.5 53C 47.7 52.6 14.8333 32.5 0 22.5L 5 14C 12.5 20 45.5 42 59.5 42.5C 73.5 43 116.5 43 116.5 43L 116.5 47.5L 123 47.5Z"/>
<path id="path27_fill" d="M 0 61L 6.5 96L 52.5 96C 74 96 75 90 80.5 79L 103 22.5L 103 12L 82 0L 9 27.5L 0 61Z"/>
<path id="path28_fill" d="M 0 15.5C 3 17.5 8.3 20.7 9.5 21.5L 16 10.5L 0 0L 0 15.5Z"/>
<path id="path29_fill" d="M 6.80442 2.47831C 9.20442 -1.12169 13.8044 -0.0216882 15.8044 0.978312L 87.8044 44.9783C 91.8044 47.9783 91.8044 49.9783 90.3044 52.4783L 83.8044 63.4783C 82.3044 66.9783 78.3044 63.9783 75.8044 62.4783L 3.30442 19.4783C -1.49558 16.6783 -0.0289173 12.3116 1.30442 10.4783L 6.80442 2.47831Z"/>
<path id="path30_fill" d="M 78.8126 5.90982L 6.63685 5.90982C 4.14803 5.90982 0 5.90982 0 2.96702C 0 0.612781 4.42457 0.0242205 6.63685 0.0242206L 78.8126 0.0242206C 82.131 0.0242206 87.9383 -0.466246 87.9383 2.96702C 87.9383 5.71364 81.8545 6.07331 78.8126 5.90982Z"/>
<path id="path31_fill" d="M 4.62585 40.0356C 3.35253 42.9794 -5.11383 51.9599 4.62585 61.2309C 11.4091 67.6877 5.59693 71.6208 14.1758 74.1836C 22.7546 76.7465 19.9091 82.4102 19.9091 82.4102L 24.6546 79.6704C 24.6546 74.9603 25.6357 76.5386 31.3657 73.0061C 34.3368 72.0248 40.1516 68.1783 39.6423 60.6422C 39.1329 53.106 41.1278 48.4745 42.1889 47.1007C 40.9156 47.1007 37.7323 49.4557 37.7323 54.7546C 37.7323 60.0534 35.2636 64.6704 32.0023 62.4084C 26.909 58.8759 33.2046 54.8765 37.7323 47.1007C 42.1889 39.4468 35.1856 30.0267 35.1856 30.0267C 35.1856 30.0267 37.0956 36.503 37.0956 40.0356C 37.0956 43.5681 35.8223 46.5119 32.0023 45.9232C 28.1824 45.3344 30.0923 40.0356 30.729 38.2693C 31.3657 36.503 32.639 25.3166 23.0891 16.4852C 16.3899 10.2901 13.7513 2.94379 14.1758 0C 11.6291 4.12131 16.0858 13.5415 20.5424 17.6628C 24.999 21.7841 26.909 30.0267 22.4524 31.793C 19.4685 32.9756 16.0858 30.0267 14.1758 25.9054C 10.6287 18.2515 11.6291 17.074 12.9025 11.7752C 12.9025 11.7752 8.53817 15.9144 9.08249 22.9616C 9.71915 31.2042 16.0858 36.503 17.9958 45.3344C 19.3917 51.7891 16.7224 55.9321 11.6291 57.1096C 6.53584 58.2871 2.71587 50.0445 7.80917 42.3906C 11.8838 36.2675 6.1114 28.8492 2.71586 25.9054C 6.53584 30.0267 5.89918 37.0918 4.62585 40.0356Z"/>
<path id="path32_fill" d="M 2.85423 22.7129C 0.449136 17.2067 0 0 0 0L 66.6314 0C 70.9381 0 70.5238 2.81564 70.0913 4.64581C 69.2375 8.25922 66.7615 16.9314 63.6878 22.7129C 60.6141 28.4943 53.2287 30.9721 48.3193 30.9721L 21.4245 30.9721C 11.6911 30.9721 5.25933 28.219 2.85423 22.7129Z"/>
<path id="path33_fill" d="M 67.5283 53.1082C 67.5283 53.1082 86.5 10.5076 86 8.50757C 85.5 6.50754 73.1552 0.507573 69.8276 0.00757075C 66.5 -0.492432 5.58621 23.9405 5.58621 23.9405L 0 53.1082L 67.5283 53.1082Z"/>
<path id="path34_fill" d="M 44.4225 5.90982L 3.74084 5.90982C 2.33802 5.90982 0 5.90982 0 2.96702C 0 0.612781 2.49389 0.0242205 3.74084 0.0242206L 44.4225 0.0242206C 46.2929 0.0242206 49.5661 -0.466246 49.5661 2.96702C 49.5661 5.71364 46.137 6.07331 44.4225 5.90982Z"/>
<path id="path35_fill" d="M 18.7959 0L 0 2.24025L 6.26531 12.8814L 15.3785 17.922L 30.757 10.0811L 18.7959 0Z"/>
<path id="path36_fill" d="M 12.8527 59.6733C 7.70834 55.8724 -2.15167 8.18883 0.420492 4.38797C 2.99266 0.587115 13.1418 -1.49741 17 1.26686C 20.8582 4.03112 21.3565 36.6205 23.5 40.7669C 25.6435 44.9133 54.2213 32.5392 58.0796 34.6124C 61.9378 36.6856 62.8574 39.466 62 43.2669C 61.1426 47.0677 17.997 63.4742 12.8527 59.6733Z"/>
<path id="path37_fill" d="M 54.5983 14.4541C 63.0736 3.95407 83.7173 2.06156 86.7094 0L 104.134 9.03916C 104.134 9.03916 83.6234 91.1412 80.5541 103.454C 78.4352 111.954 74.1976 112.019 74.1976 112.019L 59.3657 112.019L 6.19269 112.126C -1.22322 112.126 0.265251 101.56 0.0384047 99.9541C -1.021 92.4541 20.1673 65.4541 22.8158 58.4541C 22.8158 58.4541 46.123 24.9541 54.5983 14.4541Z"/>
<path id="path38_fill" d="M 20.6956 0L 0 2.24025L 6.89853 12.8814L 16.9328 17.922L 33.8655 10.0811L 20.6956 0Z"/>
<path id="path39_fill" d="M 12.1445 74.0652C 4.67388 69.4316 -5.34348 15.8119 3.40053 6.66693C 12.1445 -2.478 21.6755 -1.96289 28.9442 6.66694C 36.2129 15.2968 25.8314 46.5539 28.9442 51.6088C 32.0569 56.6637 71.2869 40.366 76.8898 42.8935C 82.4928 45.4209 87.4732 50.4758 86.2281 55.1094C 84.983 59.743 19.6151 78.6988 12.1445 74.0652Z"/>
<path id="path40_fill" d="M 37.3803 7.41593C 37.3803 13.5055 29.9043 25.6528 25.4186 31.2032L 0 18.8338L 5.98085 5.51295L 15.4505 0.27972C 19.1055 -0.830352 37.3803 1.32639 37.3803 7.41593Z"/>
<path id="path41_fill" d="M 6.85265 51.2141C 8.04628 55.029 20.1152 59.4796 26.2491 61.2281C 32.383 62.9765 42.7608 65.5198 47.1375 65.5198C 52.6082 65.5198 64.1554 49.1564 60.0684 48.8299C 48.1322 47.8762 35.6986 41.2002 33.7092 40.2465C 31.7198 39.2928 32.7145 27.8482 38.6826 27.8482C 43.4571 27.8482 59.0737 26.8946 64.0472 25.9408C 68.0259 24.5103 71.5073 22.6029 68.5232 21.1723C 64.1214 19.062 62.2231 11.0388 59.0737 8.7741C 39.18 -5.53154 19.2862 1.62128 15.8048 3.05183C 11.6906 4.74239 6.85265 10.6815 4.36593 14.0195C 2.03532 17.1479 -1.10485 21.6491 0.387183 27.8482C 1.87921 34.0474 5.36062 46.4456 6.85265 51.2141Z"/>
<path id="path42_fill" d="M 18.2248 30C -0.238468 23.2 -0.832956 7.66667 0.390932 0L 73.3874 2.97093C 88.4237 10.6376 116.52 28.9 125.752 34.5C 134.984 40.1 130.648 50.5 127.326 55L 96.9033 92.5L 82.2166 83.5L 96.9033 53.5C 79.594 48.5 36.688 36.8 18.2248 30Z"/>
<path id="path43_fill" d="M 86.0625 30.2902C 68.7532 25.2902 25.8472 13.5902 7.38396 6.79021C 4.50981 5.73167 2.06868 4.46148 0 3.04229L 94.3333 0C 103.251 4.71898 111.078 8.96463 114.911 11.2902C 124.143 16.8902 119.807 27.2902 116.485 31.7902L 86.0625 69.2902L 71.3758 60.2902L 86.0625 30.2902Z"/>
<path id="path44_fill" d="M 17.7378 22.5976C 5.81103 18.2049 1.34058 10.168 0 2.96148C 3.8807 -0.290356 5.77442 -0.27291 8.05115 0.278124C 8.75884 3.70583 11.8296 8.68783 16.409 11.3162C 17.4292 15.7045 17.7499 20.0313 17.7378 22.5976Z"/>
<path id="path45_fill" d="M 0.00554932 27.017C -0.381728 24.281 19.6314 0 19.6314 0L 34.1187 9.62729C 31.6861 12.6822 27.803 19.6918 27.803 23.0822C 27.803 29.3168 29.3115 33.7392 40.6234 35.1678C 50.782 36.4508 50.441 43.8778 50.8615 46.8482C 48.2447 47.1946 40.3096 48.3996 34.0293 49.2309C 27.749 50.0622 22.0847 47.1065 19.6314 45.2015C 19.6314 45.2015 0.392827 29.753 0.00554932 27.017Z"/>
<path id="path46_fill" d="M 33 16.5C 33 25.6127 25.6127 33 16.5 33C 7.3873 33 0 25.6127 0 16.5C 0 7.3873 7.3873 0 16.5 0C 25.6127 0 33 7.3873 33 16.5Z"/>
<path id="path47_fill" d="M 62 31C 62 48.1208 48.1208 62 31 62C 13.8792 62 0 48.1208 0 31C 0 13.8792 13.8792 0 31 0C 48.1208 0 62 13.8792 62 31Z"/>
<path id="path48_fill" d="M 44 22C 44 34.1503 34.1503 44 22 44C 9.84974 44 0 34.1503 0 22C 0 9.84974 9.84974 0 22 0C 34.1503 0 44 9.84974 44 22Z"/>
<path id="path49_fill" d="M 51.0968 21.2903C 51.0968 33.0486 39.6584 42.5806 25.5484 42.5806C 11.4384 42.5806 0 33.0486 0 21.2903C 0 9.532 11.4384 0 25.5484 0C 39.6584 0 51.0968 9.532 51.0968 21.2903Z"/>
<path id="path50_fill" d="M 34.0645 14.1935C 34.0645 22.0324 26.4389 28.3871 17.0323 28.3871C 7.6256 28.3871 0 22.0324 0 14.1935C 0 6.35467 7.6256 0 17.0323 0C 26.4389 0 34.0645 6.35467 34.0645 14.1935Z"/>
<path id="path51_fill" d="M 96 40C 96 62.0914 74.5097 80 48 80C 21.4903 80 0 62.0914 0 40C 0 17.9086 21.4903 0 48 0C 74.5097 0 96 17.9086 96 40Z"/>
<path id="path52_fill" d="M 68.129 28.3871C 68.129 44.0649 52.8778 56.7742 34.0645 56.7742C 15.2512 56.7742 0 44.0649 0 28.3871C 0 12.7093 15.2512 0 34.0645 0C 52.8778 0 68.129 12.7093 68.129 28.3871Z"/>
<path id="path53_fill" d="M 47.9032 21.2903C 47.9032 33.0486 37.1797 42.5806 23.9516 42.5806C 10.7235 42.5806 0 33.0486 0 21.2903C 0 9.532 10.7235 0 23.9516 0C 37.1797 0 47.9032 9.532 47.9032 21.2903Z"/>
<path id="path54_fill" d="M 31.9355 14.1935C 31.9355 22.0324 24.7865 28.3871 15.9677 28.3871C 7.149 28.3871 0 22.0324 0 14.1935C 0 6.35467 7.149 0 15.9677 0C 24.7865 0 31.9355 6.35467 31.9355 14.1935Z"/>
<path id="path55_fill" d="M 90 40C 90 62.0914 69.8528 80 45 80C 20.1472 80 0 62.0914 0 40C 0 17.9086 20.1472 0 45 0C 69.8528 0 90 17.9086 90 40Z"/>
<path id="path56_fill" d="M 63.871 28.3871C 63.871 44.0649 49.573 56.7742 31.9355 56.7742C 14.298 56.7742 0 44.0649 0 28.3871C 0 12.7093 14.298 0 31.9355 0C 49.573 0 63.871 12.7093 63.871 28.3871Z"/>
</defs>
</svg>
</center>
<center>
<a href="formulario_motos_enduro.html" class="btn btn-success">Nuevo Registro</a>
<a href="/material1/template.html" class="btn btn-success btn-lg">Regresar</a>

</center>
</center>
</body>
</html>