<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información de Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualiza la informacion de tu cuenta de perfil y tu correo electronico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="row">
            <div class="col-md-4 mb-4">
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div>
                    <x-input-label for="apPat" :value="__('Apellido Paterno')" />
                    <x-text-input id="apPat" name="apPat" type="text" class="mt-1 block w-full" :value="old('apPat', $user->apPat)" required autofocus autocomplete="apPat" />
                    <x-input-error class="mt-2" :messages="$errors->get('apPat')" />
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div>
                    <x-input-label for="apMat" :value="__('Apellido Materno')" />
                    <x-text-input id="apMat" name="apMat" type="text" class="mt-1 block w-full" :value="old('apMat', $user->apMat)" required autofocus autocomplete="apMat" />
                    <x-input-error class="mt-2" :messages="$errors->get('apMat')" />
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-4">
                <div>
                    <x-input-label for="matricula" :value="__('Matricula')" />
                    <x-text-input id="matricula" name="matricula" type="number" class="mt-1 block w-full" :value="old('matricula', $user->matricula)" required autofocus autocomplete="matricula" />
                    <x-input-error class="mt-2" :messages="$errors->get('matricula')" />
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div>
                    <x-input-label for="fechaNac" :value="__('Fecha de Nacimiento')" />
                    <x-text-input id="fechaNac" name="fechaNac" type="date" class="mt-1 block w-full" :value="old('fechaNac', $user->fechaNac)" required autofocus autocomplete="fechaNac" />
                    <x-input-error class="mt-2" :messages="$errors->get('fechaNac')" />
                </div>
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo Institucional')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Su dirección de correo electrónico no está verificada..') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico..') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado') }}</p>
            @endif
        </div>
    </form>
</section>
