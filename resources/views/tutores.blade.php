<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulario Tutores</title>
</head>
<body>
<h1>Formulario Tutor de la Empresa</h1>
    <form method="POST" action="/form/guardar">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @csrf
        <div class="form-group">
            <label for="nombreEmpresa">{{__("messages.nombreEmpresa")}}</label>
            <input required type="text" name="companyName" class="form-control" placeholder="Introduce nombre" value="{{ old('nombreEmpresa') }}"><br>
            <p>{{ $errors->first('nombreEmpresa') }}</p>
        </div>
        <div class="form-group">
            <label for="tipoDocumento">{{__("messages.tipoDocumento")}}</label>
            <select required class="form-control" id="tipoDocumento">
                <option>Pasaporte</option>
                <option>DNI</option>
                <option>NIE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numeroDocumento">{{__("messages.numeroDocumento")}}</label>
            <input required type="text" name="numeroDocumento" class="form-control" placeholder="Introduce Numero Documento" value="{{ old('numeroDocumento') }}"><br>
        </div>
        <div class="form-group">
            <label for="nombre">{{__("messages.nombre")}}</label>
            <input required type="text" name="nombre" class="form-control" placeholder="Introduce Nombre" value="{{ old('nombre') }}"><br>
        </div>
        <div class="form-group">
            <label for="primerApellido">{{__("messages.primerApellido")}}</label>
            <input required type="text" name="primerApellido" class="form-control" placeholder="Introduce Primer Apellido" value="{{ old('primerApellido') }}"><br>
        </div>            
        <div class="form-group">
            <label for="segundoApellido">{{__("messages.segundoApellido")}}</label>
            <input required type="text" name="segundoApellido" class="form-control" placeholder="Introduce Segundo Apellido" value="{{ old('segundoApellido') }}"><br>
        </div> 
        <div class="form-group">
            <label for="paisDocumento">{{__("messages.paisDocumento")}}</label>
            <select class="form-control" id="paisDocumento">
                <option>España</option>
                <option>Francia</option>
                <option>Inglaterra</option>
            </select>
        </div>
        <div class="form-group">
            <label for="provincia">{{__("messages.provincia")}}</label>
            <select class="form-control" id="provincia">
                <option>Baleares</option>
                <option>Bearn</option>
                <option>Yorkshire</option>
            </select>
        </div>     
        <div class="form-group">
            <label for="municipio">{{__("messages.municipio")}}</label>
            <select class="form-control" id="municipio">
                <option>Palma</option>
                <option>Llucmajor</option>
                <option>Londres</option>
            </select>
        </div>   
        <div class="form-group">
            <label for="estado">{{__("messages.estado")}}</label>
            <select required class="form-control" id="estado">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numeroTelefono">{{__("messages.numeroTelefono")}}</label>
            <input required type="tel" name="numeroTelefono" class="form-control" placeholder="Introduce Número Teléfono" value="{{ old('numeroTelefono') }}"><br>
        </div>
        <div class="form-group">
            <label for="email">{{__("messages.email")}}</label>
            <input required type="mail" name="email" class="form-control" placeholder="Introduce Email" value="{{ old('email') }}"><br>
            <p>{{ $errors->first('email') }}</p>
        </div>          

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>