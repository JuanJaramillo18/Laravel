<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-6">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-5">
      <form action="{{route('project.update', $proyecto->id)}}" method="post" >
        @csrf
        @method('PUT')
        <input class="form-control" name="titulo" id="titulo" type="text" placeholder="Ingrese el nombre del proyecto" aria-label="Nombre Proyecto">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
  </body>
</html>