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
        @csrf
        <div class="form-group">
            {{-- Añado el campo de input de nombre y le añado una clase que añadirá mensaje de error en caso de haberlo--}}
            <label for="nombreEmpresa">Nombre Empresa</label>
            <input type="text" name="companyName" class="form-control" placeholder="Introduce nombre"><br>
        </div>
        <div class="form-group">
            <label for="tipoDocumento">Tipo Documento</label>
            <select class="form-control" id="tipoDocumento">
                <option>Pasaporte</option>
                <option>DNI</option>
                <option>NIE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numeroDocumento">Documento Identidad</label>
            <input type="text" name="numeroDocumento" class="form-control" placeholder="Introduce Numero Documento"><br>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Introduce Nombre"><br>
        </div>
        <div class="form-group">
            <label for="primerApellido">Primer Apellido</label>
            <input type="text" name="primerApellido" class="form-control" placeholder="Introduce Primer Apellido"><br>
        </div>            
        <div class="form-group">
            <label for="segundoApellido">Segundo Apellido</label>
            <input type="text" name="segundoApellido" class="form-control" placeholder="Introduce Segundo Apellido"><br>
        </div> 
        <div class="form-group">
            <label for="paisDocumento">País de Documento</label>
            <select class="form-control" id="paisDocumento">
                <option>España</option>
                <option>Francia</option>
                <option>Inglaterra</option>
            </select>
        </div>
        <div class="form-group">
            <label for="provincia">Provincia</label>
            <select class="form-control" id="provincia">
                <option>Baleares</option>
                <option>Bearn</option>
                <option>Yorkshire</option>
            </select>
        </div>     
        <div class="form-group">
            <label for="municipio">Municipio</label>
            <select class="form-control" id="municipio">
                <option>Palma</option>
                <option>Llucmajor</option>
                <option>Londres</option>
            </select>
        </div>   
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numeroTelefono">Número Teléfono</label>
            <input type="tel" name="numeroTelefono" class="form-control" placeholder="Introduce Número Teléfono"><br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="mail" name="email" class="form-control" placeholder="Introduce Email"><br>
        </div>          

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>