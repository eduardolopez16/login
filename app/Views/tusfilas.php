<div class="container">
  <div class="row">
   <div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
       
    

       <?php


foreach ($data as $allfilas){
        echo $allfilas->fila;
        echo $allfilas['hora-comienzo'];
        echo $allfilas['hora-termino'];

}
?>

        </div>
    </div>
</div>  
