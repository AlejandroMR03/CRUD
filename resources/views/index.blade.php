<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>CRUD</title>
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle btn btn-warning btn-lg"" data-bs-toggle="modal" data-bs-target="#staticBackdrop"| >Crear Uusuario</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mercadouser-container">
  <div id="mercadouser-checkout">
    <h1 class="text-center">Crear Usuario</h1>
    
    <form class="mercadouser-form text-center" action="submit">
      
      <div class="mercadouser-form-izquierda form-group ">
        <label class="">Nombre</label>
        <input class="form-control text-center" value="" type="text" placeholder="Ej: Juan">
      </div>
        
      <div class="mercadouser-form-derecha form-group">
        <label class="">Apellido</label>
        <input class="form-control text-center" value="" type="text" placeholder="Ej: Perez">
      </div>
        
      <div class="mercadouser-form-izquierda form-group">
        <label class="">E-mail</label>
        <input class="form-control text-center" value="" type="email" placeholder="E-mail">
      </div>
        
      <div class="mercadouser-form-derecha form-group">
        <label class="">Telefono</label>
        <input class="form-control text-center" type="text" placeholder="Ej: 1234">
      </div>  
<br>
      <button id="mercadouser-button" class="btn btn-block btn-success submit-button" type="submit">
        <span class="submit-button-lock"></span>
        <span class="align-middle text-center">Crear Usuario</span>
      </button>

    </form>
  </div>
    
</div>
      </div>
    </div>
  </div>
</div>
<div class="position-absolute top-50 end-50 translate-middle btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Mostrar Usuarios</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-dialog modal-fullscreen-sm-down">
        <div class="table-content">
        <table class="table table-borded table-responsive table-striped " id="table-list">
        <thead class="table-dark">
        <div>
    
        <tr>
            <th>#</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Correo</th>
            <th class="text-center">Telefono</th>
        </tr>
    
</div>
    </thead>

    <tr>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
    </div>
      </div>
    </div>
  </div>

</div>
</body>
</html>