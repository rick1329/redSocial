<x-guest-layout>
    <div class="w-full min-h-screen bg-center bg-cover py-12" style="background-image: url({{ asset('image/wallpaper.webp') }})">
        <div class="mx-auto p-4 lg:p-10 bg-white/75 rounded-3xl w-[90%] lg:w-[410px] relative col gap-14">
            <div class="gap-4 center-content">
                <div>
                    <p class="text-4xl font-bold text-primary">Readme</p>
                    <p class="text-lg font-semibold text-secondary">FeedBack</p>
                </div>

                <x-utils.icons.heart class="w-16 h-16" />
            </div>

            <form action="/login" method="POST">
                @csrf

                <div class="col">
                    <div class="gap-5 col">
                        <div class="gap-1 col">
                            <p class="text-input">Correo electrónico</p>
                            <input type="email" name="email" class="input-form" style="transition: all 0.5s" autofocus>
                        </div>

                        <div class="gap-1 col">
                            <p class="text-input">Contraseña</p>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show === false ? 'password' : 'text'" name="password" class="input-form" style="transition: all 0.5s" autocomplete="off">

                                <div class="absolute top-2 right-3" @click="show = !show">
                                    <div x-show="!show" class="hidden tooltip tooltip-top" data-tip="Ver contraseña">
                                        <x-utils.icons.eye class="eye-form tooltip tooltip-top" />
                                    </div>

                                    <div x-show="show" class="tooltip tooltip-top" data-tip="Ocultar contraseña">
                                        <x-utils.icons.eye-slash class="eye-form" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mt-10 btn-form">
                        <p class="skew-x-[15deg]">Iniciar Sesión</p>
                    </button>

                    <p class="items-center mt-10 col">
                        ¿No tienes cuenta?

                        <a href="/register" wire:navigate class="font-semibold hover:underline text-primary">
                            Crear Cuenta
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
