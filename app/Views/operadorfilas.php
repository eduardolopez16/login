<?php
$numero=0;
if (isset($_POST["numero"])) {
    $numero=(int)$_POST["numero"];
}
 
if (isset($_POST['sumar']))
{
	$numero++;
} elseif (isset($_POST['restar'])) {
	$numero--;
}
if (isset($_POST['uno']))
{
	$numero++;
}

if (isset($_POST['dos']))
{
	$numero=$numero+2;
}

if (isset($_POST['tres']))
{
	$numero=$numero+3;
}

if (isset($_POST['cuatro']))
{
	$numero=$numero+4;
}
?>

<div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
        <div class="container">
        <a href="/entradasalida"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>
        <br>
                <h2 style="text-align:center">Indicar si ingresaron los clientes </h2>
        
          <form name = "submit" action = "/operadorfilas" method = "POST">  
           <div class="row align-items-start">
             <div class="col-md-6">
                Numero Virtual
             </div>
              <div class="col-md-3">
             <input type="hidden" name="numero" value="<?php echo $numero?>">
             <input type = "submit" name = "sumar" class="btn btn-lg btn-success" value = "SI">            
             </div>
             <div class="col-md-3">
             <input type = "submit" name = "restar" class="btn btn-lg btn-danger"  value = "NO">
             </div>
          </div>
          <br>
        <div class="row align-items-center">
          <div class="col">
          <h1><?php echo $numero?></h1>
          </div>
          <div class="col">
          <h2> ¿Entro una cantidad de acompañanates diferentes?
           Porfavor indicar cuantos</h2>
          </div>

        </div>
       
        <div class="row align-items-center">
        <div class="col-md-6">
       </div>
        <div class="col-md-3">
        <input type = "submit" name = "uno" class="btn btn-lg btn-success" value ="1">
       </div>
       <div class="col-md-3">
       <input type = "submit" name = "dos" class="btn btn-lg btn-success" value = "2">    
       </div>
    </div>
      <br>
     <div class="row">
      <div class="col-md-6">
        </div>
        <div class="col-md-3">
        <input type = "submit" name = "tres" class="btn btn-lg btn-success" value = "3">    
        </div>
        <div class="col-md-3">
        <input type = "submit" name = "cuatro" class="btn btn-lg btn-success" value = "4">    
       </div>
    </div> 

    </form>





    
  </div>
</div>

