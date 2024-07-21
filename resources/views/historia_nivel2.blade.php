<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles3.css')}}">
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css')}}">

    <title>{{_('hirtoria_nivel_2')}}</title>
</head>
<body>
<!---------------------- header ------------------------>
@include('componenetes_nivel2.header')
<!---------------------- header ------------------------>


<!---------------------- mensaje corresponsabilidad ------------------------>
@include('componenetes_nivel2.titulo_corresponsabilidad')
<!---------------------- mensaje corresponsabilidad ------------------------>

<!------------------------------ marco historia ------------------------------------>

@include('componenetes_nivel2.marco_historia')

<!------------------------------ marco historia ------------------------------------>


!<!-------------------------------------- Boton siguiente --------------------------------------------->

@include('componenetes_nivel2.boton_historia')

!<!-------------------------------------- Boton siguiente --------------------------------------------->



    <script src="{{ asset('js/historia_nivel2.js')}}"></script>
</body>

</html>


