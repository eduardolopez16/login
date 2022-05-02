<div class="container">
    <div class="row">
       <div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <h1>Bienvenido  a saltate la fila <?=session()->get('nombre')?></h1>

                <div class="container">    
                    <h3>Dashboard</h3>
                        <hr>
                           <div class"row">
                           <div class="col-12 col-sm-4">
                           <form method="POST" action="/administrar">
                           <button type="submit" class="btn btn-primary">Administra tus filas</Button>
                           </div>
                           <div class"row">
                           <div class="col-12 col-sm-4">
                           <button type="submit" class="btn btn-primary">Cuenta</Button>
                           </div>
                           <div class"row">
                           <div class="col-12 col-sm-4">
                           <button type="submit" class="btn btn-primary">Publica tus filas</Button>
                           </div>
                           <div class"row">
                           <div class="col-12 col-sm-4">
                           <button type="submit" class="btn btn-primary">Monitoreo</Button>
                           </div>
                         </div>
         </div>            

        </div>
    </div>
</div>