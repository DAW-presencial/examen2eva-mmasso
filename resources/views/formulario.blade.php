<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom styles for this template 
    <link href="pricing.css" rel="stylesheet">-->

</head>

<body>

    <!--Form-->
    <form method="POST" action="/form" class="container mt-5">
        <div class="form-row">

            <select class="form-select" aria-label="Default select example">
                <option selected>Sense especificar</option>
                <option value="Activo">Tutor en activo</option>
                <option value="Inactivo">Tutor sin activar</option>
            </select>

            <div class="form-group @error('telefono') is-invalid @enderror col-md-4">
                <label for="telefono">@lang('formData.telefono')</label>
                <input type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" placeholder="Numero de telefono">
                @error('telefono')
                <div class="text-danger my-2">{{ $message }}</div>
                @telefono
            </div>

            <div class="form-group @error('correo') is-invalid @enderror col-md-4">
                <label for="correo">@lang('formData.correo')</label>
                <input type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" placeholder="Correo electronico">
                @error('correo')
                <div class="text-danger my-2">{{ $message }}</div>
                @correo
            </div>

        </div>
    </form>
</body>


</html>