<x-config-layout>
    <div x-data="show()" class="flex items-center justify-center">
        <div class="max-w-5xl my-8">
            <div class="w-full lg:grid lg:grid-cols-12 lg:gap-x-5">
                <aside class="py-6 px-2 sm:px-6 lg:col-span-3 lg:py-0 lg:px-0">
                    <nav class="space-y-1">
                        <button x-on:click="open_p()" x-bind:class="{'text-gray-400': !open_b}" class="bg-gray-50 text-pink-700 hover:bg-white hover:text-pink-700 group flex items-center rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
                            <svg class="text-pink-500 group-hover:text-pink-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="truncate">Información personal</span>
                        </button>

                        <button x-on:click="open_b()" x-bind:class="{'text-pink-500': !open_p}" class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md px-3 py-2 text-sm font-medium">
                            <svg class="text-gray-400 group-hover:text-gray-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                            <span class="truncate">Datos bancarios</span>
                        </button>

                        <a href="{{ route('amigos.amigos') }}">
                            <button class="space-x-2 text-gray-900 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md px-3 py-2 text-sm font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" id="mainIconPathAttribute" fill="#737373"></path> </svg>
                                <p>Atrás</p>
                            </button>
                        </a>
                    </nav>
                </aside>

                <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">

                    <form action="{{ route('amigos.store') }}" method="POST">
                        <!--                        Información personal-->

                        <div x-show="show_p" id="personal" class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                                <div>
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">Información personal</h3>
                                    <p class="mt-1 text-sm text-gray-500">Rellene los datos del amigo.</p>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="numero_amigo" class="block text-sm font-medium leading-6 text-gray-900">Número amigo</label>
                                        <input type="text" name="numero_amigo" id="numero_amigo" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="apellidos" class="block text-sm font-medium leading-6 text-gray-900">Apellidos</label>
                                        <input type="text" name="apellidos" id="apellidos" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="dni" class="block text-sm font-medium leading-6 text-gray-900">DNI</label>
                                        <input type="text" name="dni" id="dni" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Teléfono</label>
                                        <input type="text" name="telefono" id="telefono" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                                        <input type="text" name="email" id="email" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">Información empleado</h3>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                                        <input type="text" name="cargo" id="cargo" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="categoria" class="block text-sm font-medium leading-6 text-gray-900">Categoría</label>
                                        <select id="categoria" name="categoria" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                            <option selected disabled>Selecciona uno</option>
                                            <option value="JOVEN">Joven</option>
                                            <option value="AMIGO">Amigo</option>
                                            <option value="BRONCE">Bronce</option>
                                            <option value="PLATA">Plata</option>
                                            <option value="ORO">Oro</option>
                                        </select>
                                    </div>

                                </div>

                                <div>
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">Vivienda</h3>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="provincia" class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
                                        <input type="text" name="provincia" id="provincia" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-3">
                                        <label for="direccion" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                                        <input type="text" name="direccion" id="direccion" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="codigo_postal" class="block text-sm font-medium leading-6 text-gray-900">Código Postal</label>
                                        <input type="text" name="codigo_postal" id="codigo_postal" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <fieldset class="mt-6 col-span-6 sm:col-span-3">
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Visualizar nombre</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="si" name="visualizar" type="radio" value="1" class="h-4 w-4 border-gray-300 text-pink-600 focus:ring-pink-500">
                                                <label for="si" class="ml-3">
                                                    <span class="block text-sm font-medium leading-6 text-gray-900">Si</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="no" name="visualizar" type="radio" value="0" class="h-4 w-4 border-gray-300 text-pink-600 focus:ring-pink-500">
                                                <label for="no" class="ml-3">
                                                    <span class="block text-sm font-medium leading-6 text-gray-900">No</span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                        </div>

                        <!--                        Datos bancarios-->

                        <div x-show="show_b" id="bancario" class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                                <div>
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">Datos bancarios</h3>
                                    <p class="mt-1 text-sm text-gray-500">Rellene los datos bancarios del amigo.</p>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="iban" class="block text-sm font-medium leading-6 text-gray-900">IBAN</label>
                                        <input type="text" name="iban" id="iban" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="cantidad" class="block text-sm font-medium leading-6 text-gray-900">Cantidad</label>
                                        <input type="text" name="cantidad" id="cantidad" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="concepto" class="block text-sm font-medium leading-6 text-gray-900">Concepto</label>
                                        <textarea name="concepto" id="concepto" class="mt-2 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                        Botón guardar-->

                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md bg-pink-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">Save</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function show()
        {
            return{
                show_p: true,
                show_b: false,
                open_b(){
                    this.show_b = true
                    this.show_p = false
                },
                open_p(){
                    this.show_b = false
                    this.show_p = true
                }
            }
        }
    </script>
</x-config-layout>
