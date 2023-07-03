<?php
if(session_status() == PHP_SESSION_NONE){
session_start();
}
ini_set('display_errors', 1);
Include "conexao.php";

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="loja.jpg" >

<style>
    
*{
  margin:0;
  padding: 0;
  
 
  
}

.menu_opcoes{
  width: 100%;
  height: 50px;
  background-color: #000;
  font-size:20px;
  z-index: 1px !important;

}
.menu_opcoes ul{
  list-style: none;
  position: relative;
}
.menu_opcoes ul li{
width: 140px;
float: left;
}
.menu_opcoes a{
  padding: 15px;
  display: block;
  text-decoration: none;
  text-align: center;
  background-color: #000;
  color: #fff;

}
.menu_opcoes ul ul{
  position: absolute;
  visibility: hidden;
}

.menu_opcoes ul li:hover ul{
  visibility: visible;

}
.menu_opcoes a:hover{
  background-color: #FFBF00;
  color: #000;
  text-decoration: none;
}
.menu_opcoes ul ul li{
  border-bottom: solid 1px #ccc;
}
.menu_opcoes ul ul li a{
  background-color: #000;

}
.entrar{
  margin-top: -80px;
  margin-left: 1000px;
  margin-right: 100px;
  width: 100px;
  height: 50px;

}
.sair{
  margin-top: -80px;
  margin-left: 1000px;
  margin-right: 100px;
 

}
.nav-link dropdown-toggle{
    margin-top: -75px;
  margin-left: 1050px;
  margin-right: 100px;
  width: 100px;
  height: 50px;
}
.entrar a:link{
  color: white;
}

.entrar a:hover{
  color: white !important;
}
.entrar a: visited{
  color: white !important;
}

#nav a:link{
  color: white;
}

#nav a:hover{
  color:white ;
}
#nav a: visited{
  color: white !important;
}
#nav a: active{
  color: white !important;
}
#nav2 a:link{
  color: white;
}

#nav2 a:hover{
  color:black;
  background: gray;
}
#nav2 a: visited{
  color: white !important;
}
#nav2 a: active{
  color: white !important;
}
* { margin: 0; padding: 0; }
#flipkart-navbar {
    background-color: #000000;
    color: #FFFFFF;
height: 290px;

}
.row1{
    padding-top: 10px;
}
.row2 {
    padding-bottom: 20px;
}
.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 2px;
    border: 10;
    outline: 10;
    font-size: 15px;
    color: black;
}
.flipkart-navbar-button {
    background-color: #FFBF00;
    border: 40 solid #000000;
    border-radius: 0 2px 2px 0;
    color: #000000;
    padding: 10px 0;
    height: 403px;
    cursor: pointer;
}
#navbar{
  /*margin-top: -2000px;*/
}
  *{
  margin: 0;
  padding: 0;
}
body{
  /*background-image: url("login.jpg");*/
  background-position:50%  70%;
  color: black;
  font-family: arial;
}
input{
  display: block;
  height: 50px;
  width: 400px;

  border-radius: 30px;
  border:1px solid black;
  font-size: 16pt;
  padding: 10px 20px;
  /*background-color: rgba(255,255,255,0.01);*/
  color: black;
  outline: none;
}
input[type=radio]{
    height: 20px;
display: inline;
width: 30px
}

div#corpo-form{
  /*background-color:#FF0000;*/
  width:420px;
  margin:130px auto 0px auto;
}
div#corpo-form-Cad{
    /*background-color:#FF0000;*/
  width:420px;
  margin:50px auto 0px auto;
}

div#corpo-form h1{
text-align: center;
padding: 5px;

}
div#corpo-form-Cad h1{
text-align: center;
padding: 5px;
}
a{
  color: white;
  text-decoration: none;
  text-align: center;
  display: block;
}
a:hover{
  text-decoration: underline;

}
input[type=submit]{
  background-color: #FFBF00;
  border: none;
  cursor: pointer;
}
span{
  font-size: 20px;
}
</style>
  <meta charset="UTF-8">
  <title>MM Confecções</title>
  </script>
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                
    
<!------ Include the above in your HEAD tag ---------->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>


<!--<h5> <a href="ajuda.php" style="color: black; margin-left: 1290px;"> | Ajuda | </a> </h5>-->
<form action="pesquisar.php" method="POST" name="pesquisa">
  <div id="flipkart-navbar" style="height: 250px;">
    <div class="container" style="height: 200px;">
      <div class="row row1">
      </div>
        <div class="row row2">
          <div class="col-sm-2">
            <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()"></span></h2>
            <a href="pag.inicial.php"> <img src="logo6.JPG" alt="nome"></a>
          </div>
          <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
            <div class="row" style="margin-top:10px">
              <input class="flipkart-navbar-input col-xs-11" name="enviar" style="margin-left: 10px;"  type="text" placeholder="O que você procura?">
              <button  type="submit" class="flipkart-navbar-button col-xs-1" name="pesquisar" style="width:50px; height:50px; margin-left:3px">
                <img src="buscar.jpg">
              </button>
            </div>
          </div>
        
</form>
<?php
//var_dump($_SESSION);
if(isset($_SESSION['logado'])  && $_SESSION['logado'] == true){
  if($_SESSION['usuario'] == 'cliente'){
    

              $id = $_SESSION['id'];
              $sql = "SELECT * FROM cliente WHERE id= '$id'";
              $resultado = mysqli_query($conn, $sql);
              $dados = mysqli_fetch_array($resultado);
              $maiuscula = $dados['nome'];
              $maiuscula = ucfirst($maiuscula);    
              ?>
                 <h4 style="margin-left:980px;  margin-top: -70px;"> Olá, <?php echo $maiuscula; ?> </h4>        

<nav class="navbar navbar-expand-lg" id="navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
      </li>
         <li class="nav-item dropdown"  style="margin-left: 1060px;  margin-top: -110px;"> 
            <h3> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </a>
            <div class="dropdown-menu" id="nav2" aria-labelledby="navbarDropdown" style="margin-left: -10px;  margin-top: -35px;" >
               <h4>  <a class="dropdown-item" href="logout.php"><img src="sair.JPG" style="margin-left: -5px;" > Sair </a> </h4>
              <!--<h4> <a class="dropdown-item" href="#"> <img src="perfil.JPG" style="margin-left: -10px;">Perfil</a></h4>-->
              <h4>  <a class="dropdown-item" href="ajuda.php"><img src="duv.jpg" style="margin-left: -2px;" > Ajuda </a> </h4>
           
            </div>
  </div>
  <a href="carrinho.php"><img src="carrinho.jpg" width="30" style="margin-top: -165px; margin-left: 17px;"></a>

</nav>
<?php
}
elseif($_SESSION['usuario'] = 'administrador'){

      ?>
                 <h4 style="margin-left:970px;  margin-top: -70px;"> Olá, Gerente </h4> 


<nav class="navbar navbar-expand-lg " id="nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item " >
      </li>
         <li class="nav-item dropdown"  style="margin-left: 1050px;  margin-top: -110px;"> 
            <h3> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </a>
            <div class="dropdown-menu" id="nav2" aria-labelledby="navbarDropdown" style="margin-left: -10px;  margin-top: -50px;" >
              <h4> <a class="dropdown-item" href="logout.php"> <img src="sair.jpg" style="margin-left: 0px;" > Sair</a></h4>
         <h4> <a class="dropdown-item" href="index.php"><img src="admin.jpg" style="margin-left: -2px; width: 30px;" > Gerenciar <br><center> Clientes </center></a> </h4>
                <h4> <a class="dropdown-item" href="produtos.php"><img src="admin.jpg" style="margin-left: -2px; width: 30px;" >Gerenciar <br><center> Produtos</center></a> </h4>
                    <h4> <a class="dropdown-item" href="cadastrar.php"><img src="cadastro.jpg" style=" margin-left: -2px; width: 20px;" >Cadastrar <br>  <center> Clientes </center>  </a> </h4>
                    <h4> <a class="dropdown-item" href="cadastroProd.php"><img src="cadastro.jpg" style=" margin-left: -2px; width: 20px;" >Cadastrar <br>  <center> Produtos </center>  </a> </h4>
              
            </div>
  </div>
  
</nav>
<?php
}
}else{



  ?>

<div class="entrar" style="color: white;">
<a href="login.php">   <h4>Entrar</h4></a> </div>
<a href="carrinho.php"><img src="carrinho.jpg" width="30" style="margin-top: -140px; margin-left: 1100px;"></a>

<nav class="navbar navbar-expand-lg" id="nav" style="margin-left: 1000px; margin-top: -40px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item " >
      </li>
         <li class="nav-item dropdown"  style="margin-left: 20px;  margin-top: -95px; color: white;"> 
            <h3> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </a>
            <div class="dropdown-menu" id="nav2" aria-labelledby="navbarDropdown" style="margin-left: -10px;  margin-top: -35px;" >
              <h4> <a class="dropdown-item" href="cadastro.php" ><img src="cadastro.jpg" style="margin-left: 0px;" > Fazer Cadastro</a></h4>
              <h4> <a class="dropdown-item" href="ajuda.php" ><img src="duv.jpg" style="margin-left: 0px; color: black !important;" >Ajuda</a></h4>
            </div>
  </div>
</nav>
          <?php
            
  }
         
         
?>

   
<center> <nav class="menu_opcoes" style="margin-top: 10px; z-index: 1px !important; "> 
  <ul>
    <li><a href="pag.inicial.php" >Início </a></li>
    <li><a href="Feminino.php">Feminino</a>
      <ul>
        <li><a href="VestidosFem.php">Vestidos </a></li>
        <li><a href="CalcasFem.php">Calças </a></li>
        <li><a href="SaiasFem.php">Saias </a></li><br>
        <li><a href="CamisasFem.php">Camisas </a></li>
        <li><a href="ShortsFem.php">Shorts</a></li>
        <li><a href="BlusasFem.php">Blusas</a></li><br>
       
      </ul>
    </li>
      <li><a href="Masculino.php">Masculino </a>
        <ul><li><a href="BermudasMasc.php">Bermudas </a></li>
          <li><a href="CalcasMasc.php">Calças </a></li>
          <li><a href="moletomMasc.php">Moletons </a></li> <br>
          <li><a href="CamisasMasc.php">Camisas </a></li>
          <li><a href="CasacosMasc.php">Casacos </a></li>
          <li><a href="CamisetasMasc.php">Camisetas </a></li> 
          
                 </ul>
      </li>
        <li><a href="Infantil.php">Infantil </a>
          <ul>
            <li><a href="Menina.php">Menina </a></li>
            <li><a href="Menino.php">Menino </a></li>
          </ul>
        </li>
        <li><a href="Indumentaria.php" style="margin-top: -22px;">Indumentária Gauchesca</a>
          <ul>
            <li><a href="Bombachas.php">Bombachas </a></li>
            <li><a href="Lencos.php">Lenços</a></li><br>
            <li><a href="cinto.php">Cintos </a></li>
            <li><a href="alpargata.php">Alpargatas</a></li>
          </ul>
        </li>
        <li><a href="Acessorios.php">Acessórios </a>
          <ul>
            <li><a href="Bolsas.php">Bolsas </a></li>
            <li><a href="Pingentes.php">Pingentes </a></li><br>
             <li><a href="Brincos.php">Brincos </a></li>
            <li><a href="Cintos.php">Cintos</a></li>
          </ul>
        </li>
        <li><a href="Lingerie.php">Lingerie</a>
          <ul>
            <li><a href="Calcinhas.php">Calcinhas</a></li><br>
            <li><a href="Cuecas.php">Cuecas </a></li>
          </ul>
            <li style="margin-top: -22px;"><a href="tabela.php">Tabela de Medidas</a>
              <ul>
            <li><a href="homem.php">Masculino</a></li><br>
            <li><a href="mulher.php">Feminino</a></li>
          </ul>
            </li>
  </ul>
</nav></center>  
</div>
     </div>
</div>
<?

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>