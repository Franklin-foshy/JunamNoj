
    <!-- Session Status -->
    
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        
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
                    <img src="{{ asset('imgs/logoHelvetas.png') }}" alt="LOGO" />
                    <img src="{{ asset('imgs/logoCajaLudica.png') }}" alt="LOGO" />
                    <img src="{{ asset('imgs/logoAsociacionPies.png') }}" alt="LOGO" />
                </div>
                <div class="titulo"> 
                    <h1><b>COORESPONSABILIDAD DOMESTICA</b></h1>
                </div>
                <div class="imgPrincipal">
                    <img src="{{ asset('imgs/imgMain.png') }}" alt="Imagen Principal">
                </div>
            </article>
            <article class="contForm">
                <div class="tituloLogin">
                    <h1><b>Bienvenidos</b></h1>
                    <h2>Junam Noj</h2>
                </div>
                <form method="POST" action="{{ route('login') }}" class="formulario">
                    @csrf
                    <div class="mb-4">
                        <label for="email">Correo Electrónico</label>
                        <div>
                            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password">Contraseña</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Iniciar Sesión</button>
                </form>
                <p><a href="{{ route('register') }}">Crear Cuenta</a></p>
            </article>
        </section>
    </body>

    </html>
