<div class="container">
   <div class="row">
        <div class="col-12 col-sm10 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
         <div class="container">
             <h3>Registra tu tienda</h3>
              <hr>
              <?php if (session()->get('success')): ?>
                  <div class="alert alert-success" role="alert">
                 <?= session()->get('success') ?>
                 <?php endif; ?> 
                <form class="" action="/tiendas" method="post">
                  <div class="row">
                        <div class="col-12 col-sm-6">
                        <div class="form-group">
                        <label for="tienda">Nombre de tu tienda</label>
                        <input type="text" class="form-control" name="tienda" id="tienda" value="<?=set_value('tienda')?>"> 
                      </div>
                        </div>
                           <div class="col-12 col-sm-10">
                           <div class="form-group">
                           <label for="direccion">Direccion de tienda</label>
                           <input type="text" class="form-control" name="direccion" id="direccion" value="<?=set_value('direccion')?>">
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
                           <button type="submit" class="btn btn-primary">Registrar</Button>                          

                           </form>
                           
                       <form method="POST" action="/dashboard">
                       <button type="submit" class="btn btn-primary">Volver</Button>
                       </form>
                      </div>
                </div>
         </div>
       </div>
   </div>
</div>  