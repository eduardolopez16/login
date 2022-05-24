<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
         <div class="container">
             <h3><?= $admin['nombre'].' '.$admin['apellido'] ?></h3>
              <hr>
              <?php if (session()->get('success')): ?>
                  <div class="alert alert-success" role="alert">
                 <?= session()->get('success') ?>
                 <?php endif; ?> 
                </div>
                <form class="" action="/profileadmin" method="post">
                  <div class="row">
                        <div class="col-12 col-sm-6">
                        <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?=set_value('nombre', $admin['nombre'])?>">
                        </div>
                        </div>
                           <div class="col-12 col-sm-6">
                           <div class="form-group">
                           <label for="apellido">Apellidos</label>
                           <input type="text" class="form-control" name="apellido" id="apellido" value="<?=set_value('apellido', $admin['apellido'])?>">
                           </div>
                           </div> 
                              <div class="col-12">
                              <div class="form-group">
                              <label for="email">Correo</label>
                              <input type="text" class="form-control" readonly id="email" value="<?= $admin['email']?>">
                              </div>
                              </div>
                                  <div class="col-12 col-sm-6">
                                   <div class="form-group">
                                   <label for="password">Contraseña</Label>
                                   <input type="password" class="form-control" name="password" id="password" value="">
                                   </div>
                                   </div> 
                                        <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                        <label for="password_confirm">Confirmar Contraseña</Label>
                                        <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
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
                      <div class"row">
                           <div class="col-12 col-sm-4">
                           <button type="submit" class="btn btn-primary">Actualizar</Button>

                         </div>
                </form>
         </div>
       </div>
   </div>
</div>