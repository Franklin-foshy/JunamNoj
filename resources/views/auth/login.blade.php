<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>LOGIN</title>
</head>

<body>
    <section class="contLogin">
        <article class="contImgs">
            <div class="logos">
                <img src="{{url('imgs/logoHelvetas.png')}}" alt="LOGO" />
                <img src="{{url('imgs/logoCajaLudica.png')}}" alt="LOGO" />
                <img src="{{url('imgs/logoAsociacionPies.png')}}" alt="LOGO" />

            </div>
            <div class="titulo"> <h1><b>COORESPONSABILIDAD DOMESTICA</b></h1></div>
            <div class="imgPrincipal">
                <img src="{{url('imgs/imgMain.png')}}" alt="Imagen Principal">
            </div>
        </article>
        <article class="contForm">
            <div class="tituloLogin">
                <h1><b>Bienvenidos</b></h1>
                <h2>Junam Noj</h2>
            </div>
            <form method="POST" action="" class="formulario">
                @csrf                
                    <div class="mb-4">
                        <label>Correo Electrónico</label>
                        <div>
                            <input type="email" class="form-control" id="Email" placeholder="foxlaj@gmail.com">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label>Contraseña</label>
                        <div>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button type="submit">Iniciar Sesión</button>
            </form>
            <p><a href="{{url('register')}}">Crear Cuenta</a></p>
            
        </article>
    </section>
    
</body>

</html>