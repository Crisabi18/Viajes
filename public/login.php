<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

  <title>Document</title>
</head>
<body>
<!-- Botón que activa el modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal">
  Abrir modal
</button>

<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Modal con dos pestañas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Pestañas -->
        <ul class="nav nav-tabs" id="miModalTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pestaña1-tab" data-bs-toggle="tab" data-bs-target="#pestaña1" type="button" role="tab" aria-controls="pestaña1" aria-selected="true">Pestaña 1</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pestaña2-tab" data-bs-toggle="tab" data-bs-target="#pestaña2" type="button" role="tab" aria-controls="pestaña2" aria-selected="false">Pestaña 2</button>
          </li>
        </ul>
        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="miModalTabContent">
          <div class="tab-pane fade show active" id="pestaña1" role="tabpanel" aria-labelledby="pestaña1-tab">
            Contenido de la pestaña 1
          </div>
          <div class="tab-pane fade" id="pestaña2" role="tabpanel" aria-labelledby="pestaña2-tab">
            Contenido de la pestaña 2
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>