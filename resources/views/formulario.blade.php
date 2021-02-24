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
        @csrf
        <div>
            <h2>
                Tutor de la empresa
            </h2>
            <div class="form-group">
                <label for="companyName">@lang('formData.companyName')</label>
                <input type="text" class="form-control @error('companyName') is-invalid @enderror" name="companyName" value="{{ old('companyName') }}" placeholder="Nombre de la empresa">
                @error('companyName')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Sense especificar</option>
                    <option value="DNI">Dni</option>
                    <option value="NIE">Nie</option>
                </select>

                <div class="form-group @error('documentNumber') is-invalid @enderror col-md-4">
                    <label for="documentNumber">@lang('formData.documentNumber')</label>
                    <input type="text" class="form-control @error('documentNumber') is-invalid @enderror" name="documentNumber" value="{{ old('documentNumber') }}" placeholder="+34 971123456">
                    @error('documentNumber')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @documentNumber
                </div>
            </div>

            <div class="form-row">

                <div class="form-group @error('nom') is-invalid @enderror col-md-4">
                    <label for="nom">@lang('formData.nom')</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" placeholder="Pepe">
                    @error('nom')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @nom
                </div>


                <div class="form-group @error('llinatge1') is-invalid @enderror col-md-4">
                    <label for="llinatge1">@lang('formData.llinatge1')</label>
                    <input type="text" class="form-control @error('llinatge1') is-invalid @enderror" name="llinatge1" value="{{ old('llinatge1') }}" placeholder="Salas">
                    @error('llinatge1')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @llinatge1
                </div>


                <div class="form-group @error('llinatge2') is-invalid @enderror col-md-4">
                    <label for="llinatge2">@lang('formData.llinatge2')</label>
                    <input type="text" class="form-control @error('llinatge2') is-invalid @enderror" name="llinatge2" value="{{ old('llinatge2') }}" placeholder="Rodriguez">
                    @error('llinatge2')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @llinatge2
                </div>

            </div>

            </form>
</body>


</html>