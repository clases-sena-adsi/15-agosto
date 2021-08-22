<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('users.update',$user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" class="form-control" name="names" value="{{ $user->names }}">
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" class="form-control" name="lastnames" value="{{ $user->lastnames }}">
                </div>
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <hr>
                <div class="form-group">
                    <button class="btn btn-primary">Guardar cambios</button>
                    <a href="{{ url('users') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
