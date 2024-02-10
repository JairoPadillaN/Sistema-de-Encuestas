
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->
            <div class=" bg-image"
                style="
                    background-image: url('{{ asset('assets/img/rectoria.jpg') }}');
                    height: 300px;
                    ">
            </div>
            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong"
                style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Registrate</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="name" name="name" required autofocus autocomplete="name" class="form-control" />
                                            <label class="form-label" for="name">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apPat" name="apPat" required autocomplete="apPat" class="form-control" />
                                            <label class="form-label" for="apPat">Apellido Paterno</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apMat" name="apMat" required autocomplete="apMat" class="form-control" />
                                            <label class="form-label" for="apMat">Apellido Materno</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="matricula" name="matricula" required title="Tú matricula debe de tener un rango de 9 digitos" autofocus autocomplete="matricula" class="form-control"/>
                                            <label class="form-label" for="matricula">Matricula</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="date" id="fechaNac" name="fechaNac" required autocomplete=fechaNac" class="form-control" />
                                            <label class="form-label" for="fechaNac">Fecha de Nacimiento</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" required autocomplete="username" class="form-control" />
                                    <label class="form-label" for="email">Correo Institucional</label>
                                </div>
                                <div class="row" id="passwordForm">
                                    <div class="col-md mb-4">
                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password" required autocomplete="new_password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                            title="Debe contener un numero [0-9],Una letra Mayúscula [A-Z] y debe ser mayo a 8 carácteres"/>
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="col-md mb-4">
                                        <!--repeat Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new_password" class="form-control"
                                            title="Debe contener un numero [0-9], Una letra Mayúscula [A-Z] y debe ser mayo a 8 carácteres"/>
                                            <label class="form-label" for="password_confirmation">Repetir Contraseña</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-outline-success">
                                        Registrarse
                                    </button><br>
                                </div>
                                <div class="d-grip gap-2">
                                    <a href="{{ route('login') }}">Ya tienes cuenta?</a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- Section: Design Block -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>
<script>
    const passwordForm = document.getElementById('passwordForm')
const passwordInput = document.getElementById('password')
const passwordConfirmationInput = document.getElementById('password_confirmation')

passwordForm.addEventListener('submit', (event) => {
  event.preventDefault()

  if (passwordInput.value !== passwordConfirmationInput.value) {
    alert('The password confirmation does not match the password.')
    passwordConfirmationInput.focus()
  } else {
    // Password and password confirmation match, proceed with form submission
    // ...
  }
})

passwordConfirmationInput.addEventListener('input', () => {
  if (passwordInput.value !== passwordConfirmationInput.value) {
    passwordConfirmationInput.setCustomValidity('Las contraseñas no coinciden.')
  } else {
    passwordConfirmationInput.setCustomValidity('')
  }
})
</script>


</html>
