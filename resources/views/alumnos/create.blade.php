<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
</head>
<body>
    <h1>Crear Alumno</h1>
    <a href="{{route('alumnos.index')}}">Volver a Lista de Alumnos</a>
    <br>
    <br>
    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        <div>
            <label">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Carrera</label>
            <select name="carrera">
                <option value="" selected disabled>Elige una carrera</option>
                @foreach($carreras as $carrera)
                    <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <button type="submit">Crear Alumno</button>
        </div>        
    </form>

</body>
</html>