<div class="container">
    <div class="row">
        <div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
         <div class="container">    
             <h3>Admin</h3>
              <hr>
              <?php if (session()->get('success')):?>
                   <div class="alert alert-success" role="alert">
                       <?=session()->get('success') ?> 
                <?php endif;?>
                <form class="" action="/loginadmin" method="post">
                 <div class="form-group">
                 <label for="email">Correo</Label>
                 <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>">
                 </div>
                      <div class="form-group">
                      <label for="password">Contraseña</Label>
                      <input type="password" class="form-control" name="password" id="password" value="">
                      </div>                                      
                                       <?php if (isset($validation)): ?>
                                       <div class="col-12">
                                       <div class="alert alert-danger" role="alert">
                                       <?=$validation->listErrors()?>
                                        </div>
                                        </div>
                                        <?php endif;?>
                           <div class"row">
                           <div class="col-12 col-sm-4">
                           <button type="submit" class="btn btn-primary">Ingresa</Button>
                           </div>
                                <div class="col-12 col-sm-10 text-right">
                                <a href="/registeradmin">Crea tu cuenta para administrar tus filas</a>

                                </div>
                         </div>
                </form>
         </div>
       </div>
   </div>
</div>