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

<body class="w-100">
    <!--Nav bar-->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <!--Form-->
    <form method="POST" action="/form" class="container mt-5">
        @csrf
        <div>
            <h2>
                Tutor de la empresa
            </h2>

            <div class="form-row">

            <div class="form-group @error('companyName') is-invalid @enderror col-md-4">
                <label for="companyName">@lang('formData.companyName')</label>
                <input type="text" required class="form-control @error('companyName') is-invalid @enderror" name="companyName" value="{{ old('companyName') }}" placeholder="Nombre de la empresa">
                @error('companyName')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>
                <select class="form-select col-md-4" aria-label="Default select example" id="documentType" >
                    <option selected>Sense especificar</option>
                    <option value="DNI">Dni</option>
                    <option value="NIE">Nie</option>
                </select>

                <div class="form-group @error('documentNumber') is-invalid @enderror col-md-4">
                    <label for="documentNumber">@lang('formData.documentNumber')</label>
                    <input type="text" required class="form-control @error('documentNumber') is-invalid @enderror" name="documentNumber" value="{{ old('documentNumber') }}" placeholder="+34 971123456">
                    @error('documentNumber')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">

                <div class="form-group @error('nom') is-invalid @enderror col-md-4">
                    <label for="nom">@lang('formData.nom')</label>
                    <input type="text" required class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" placeholder="Pepe">
                    @error('nom')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group @error('llinatge1') is-invalid @enderror col-md-4">
                    <label for="llinatge1">@lang('formData.llinatge1')</label>
                    <input type="text" required class="form-control @error('llinatge1') is-invalid @enderror" name="llinatge1" value="{{ old('llinatge1') }}" placeholder="Salas">
                    @error('llinatge1')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group @error('llinatge2') is-invalid @enderror col-md-4">
                    <label for="llinatge2">@lang('formData.llinatge2')</label>
                    <input type="text" required class="form-control @error('llinatge2') is-invalid @enderror" name="llinatge2" value="{{ old('llinatge2') }}" placeholder="Rodriguez">
                    @error('llinatge2')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="form-row">

                <select class="form-select col-md-4" aria-label="Default select example" id="pais_documento">
                    <option selected>Sense especificar</option>
                    <option value="España">España</option>
                    <option value="Andorra">Andorra</option>
                </select>

                <select class="form-select col-md-4" aria-label="Default select example" id="provincia">
                    <option selected>Sense especificar</option>
                    <option value="Baleares">Baleares</option>
                    <option value="Madrid">Madrid</option>
                </select>

                <select class="form-select col-md-4" aria-label="Default select example" id="municipio">
                    <option selected>Sense especificar</option>
                    <option value="Palma">Palma</option>
                    <option value="Sineu">Sineu</option>
                </select>

            </div>


            <div class="form-row">

                <select class="form-select col-md-4" aria-label="Default select example" id="status">
                    <option selected>Sense especificar</option>
                    <option value="Activo">Tutor en activo</option>
                    <option value="Inactivo">Tutor sin activar</option>
                </select>

                <div class="form-group @error('telefono') is-invalid @enderror col-md-4">
                    <label for="telefono">@lang('formData.telefono')</label>
                    <input type="tel" required class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" placeholder="Numero de telefono">
                    @error('telefono')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group @error('correo') is-invalid @enderror col-md-4">
                    <label for="correo">@lang('formData.correo')</label>
                    <input type="email" required class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" placeholder="Correo electronico">
                    @error('correo')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
</body>


</html>