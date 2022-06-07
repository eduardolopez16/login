<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
         <div class="container">
             <h3>Llena el formulario para obtener tu numero virtual</h3>
              <hr>
                <form class="" action="/loginqranonimo" method="post">
                  <div class="row">
                        <div class="col-12 col-sm-6">
                        <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?=set_value('nombre')?>">
                        </div>
                        </div>
                              <div class="col-12">
                              <div class="form-group">
                              <label for="email">Correo</label>
                              <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>">
                              </div>
                              </div>
                                 <div class="col-12 col-sm-6">
                                 <div class="form-group">
                                 <label for="telefono">Telefono</label>
                                 <input type="text" class="form-control" name="telefono" id="telefono" value="<?=set_value('telefono')?>">
                                </div>
                                  </div> 
                                  <div class="col-12 col-sm-6 ">
                                   <div class="form-group">
                                   <label for="cantidadacompañantes">Ingresa cantidad de acompañantes</Label>
                                   <input type="number" class="form-control" name="cantidadacompañantes" id="cantidadacompañantes" value="<?=set_value('cantidadacompañantes')?>">
                                   </div>
                                   </div> 
                                        <?php if (isset($validation)): ?>
                                          <div class="col-12">
                                            <div class="alert alert-danger" role="alert">
                                              <?=$validation->listErrors()?>
                                        </div>
                                        </div>
                                          <?php endif;?>
                                    </div>

                                <div class="col-12 col-sm-10 text-right">
                                <a href="/register">Crea tu Cuenta</a>
                                <button type="submit" class="btn btn-primary">Registrar</Button> 
                                </div>
                         </div>
                </form>
                <div class"row">
                           <div class="col-12 col-sm-4">
                           <a href="/numerovirtual"><button class="btn btn-lg btn-primary"></span>Ingresar</button></a>

                           </div>
         </div>
       </div>
   </div>
</div>