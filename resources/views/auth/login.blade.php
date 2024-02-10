<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        
        <section class=" text-center text-lg-start">
            <style>
                .rounded-t-5 {
                    border-top-left-radius: 0.5rem;
                    border-top-right-radius: 0.5rem;
                }
                .container {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100vh;
                margin: 0 auto;
                }
    
                @media (min-width: 992px) {
                    .rounded-tr-lg-0 {
                        border-top-right-radius: 0;
                    }
    
                    .rounded-bl-lg-5 {
                        border-bottom-left-radius: 0.5rem;
                    }
                }
            </style>
            <div class="card mb-3">
                <div class="row g-0 d-flex align-items-center">
                    <div class="col-lg-4 d-none d-lg-flex">
                        <img src="{{asset('assets/img/Home.jpg')}}" alt="Trendy Pants and Shoes"
                            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body py-5 px-md-5">
    
                            <form method="POST" action="{{ route('login') }}" >
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control @error('email') is-invalid @enderror" placeholder="example@utvtol.edu.mx" />
                                    <label class="form-label" for="email">Correo Institucional</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <script>alert('Las Credenciales son erronéas o no existen')</script>
                                    </span>
                                @enderror
                                </div>
    
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña"/>
                                    <label class="form-label" for="password">Contraseña</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                      <script>alert('La contraseña es erronéa')</script>
                                    </span>
                                    @enderror
                                </div>
    
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="remember_me" name="remember" checked />
                                            <label class="form-check-label" for="remember_me">Recordarme</label>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        @if(Route::has('password.request'))
                                        <a href="{{route('password.request')}}">¿Olvidaste tu contraseña?</a>
                                        @endif
                                    </div>
                                </div>
    
                                <!-- Submit button -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-outline-success gap-2">Ingresar</button>
                                </div>
                                
    
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>

</html>

