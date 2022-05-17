<div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
        <div class="container">
        <a href="/entradasalida"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>
        <hr>
        <h2 style="text-align:center">¿Que Numero se Retiro? </h2>
         
                   <div class="row align-items-center">
                  <div class="col-md-12">
                  <form class="" action="/operadorfilasalida" method="post">
                  <div class="form-group">
                  <label for="numerosalida">Indicar Numero Salida</Label>
                  <input type="text" class="form-control" name="numerosalida" id="numerosalida" value="<?=set_value('numerosalida')?>">
                  </div>            
                  </div>
                  </div>
          <hr>
          <h2 style="text-align:center">¿Cantidad de Acompañantes que se retiran</h2>
                   <div class="row align-items-center">
                  <div class="col-md-3">
                  <form class="" action="/operadorfilasalida" method="post">
                  <div class="form-group">
                  <label for="numerosalida">Indicar Numero Salida</Label>
                  <input type="number" class="form-control" name="numerosalida" id="numerosalida" value="<?=set_value('numerosalida')?>">
                  </div>            
                  </div>
                  </div>
        <div class="row align-items-center">
          <div class="col-md-5">
          </div>
          <div class="col-md-4">
             <a href="#" class="btn btn-lg btn-primary"><h1>Ingresar</h1></a>
             </div>
          </div>

</div>
</div>