<div class="container">
   <div class="row">
        <div class="col-12 col-sm10 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
          
             <h2>Crea Tu Tienda</h2>
             <a href="/entradasalida"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>

              <hr>
              <?php if (session()->get('success')): ?>
              <div class="alert alert-success" role="alert">
              <?= session()->get('success') ?>
              <?php endif; ?> 
                     <form class="" action="/crearfila" method="post">
                     <div class="row">
                     <div class="col-12 col-sm-6">
                     <div class="form-group">
                     <label for="nombrefila">Nombre Fila</label>
                     <input type="text" class="form-control" name="nombrefila" id="nombrefila" value="<?=set_value('nombrefila')?>"> 
                     </div>
                     </div>
                     </div>
                           <div class="row">
                           <div class="col-12 col-sm-10">
                           <div class="form-group">
                           <label for="Hora De Inicio">Hora de Inicio de Fila</label>
                           <input type="time" class="form-control" name="horainicio" id="horainicio" value="<?=set_value('horainicio')?>">
                           </div>
                           </div>
                           </div> 
                                <div class="row">
                                <div class="col-12 col-sm-10">
                                <div class="form-group">
                                <label for="horatermino">Hora de Finalizacion</label>
                                <input type="time" class="form-control" name="horatermino" id="horatermino" value="<?=set_value('horatermino')?>">
                                </div>
                                </div>
                                </div>
                                      <div class="row">
                                      <div class="col-12 col-sm-10">
                                      <div class="form-group">
                                      <label for="diascomienzo">Dias comienzo</label>
                                      <input type="date" class="form-control" name="diascomienzo" id="diascomienzo" value="<?=set_value('diascomienzo')?>">
                                      </div>
                                      </div>
                                      </div>
                                            <div class="row">
                                            <div class="col-12 col-sm-10">
                                            <div class="form-group">
                                            <label for="diastermino">Dias termino</label>
                                            <input type="date" class="form-control" name="diastermino" id="diastermino" value="<?=set_value('diastermino')?>">
                                            </div>
                                            </div>
                                            </div>
                                 <div class="row">
                                 <?php if (isset($validation)): ?>
                                 <div class="col-12">
                                 <div class="alert alert-danger" role="alert">
                                 <?=$validation->listErrors()?>
                                </div>
                                </div>
                                <?php endif;?>
                                </div>
                           <div class="row">    
                           <div class="col-md-2">
                           <button type="submit" class="btn btn-primary">Registrar</Button>                          
                           </div>
                           </div>
                </div>
       </div>
   </div>
</div>  