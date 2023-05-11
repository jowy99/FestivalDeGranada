<x-app-layout>
    <div class="mt-4 mb-2 flex items-center justify-center">
        <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="w-full">
                    <form action="" method="get" role="search">
                        <div class="flex">
                            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                                Buscar por ...
                                <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                                    <li>
                                        <button id="s_dni" type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 hover:text-pink-600 dark:hover:bg-gray-600 dark:hover:text-white">DNI</button>
                                    </li>
                                    <li>
                                        <button id="s_nFriend" type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 hover:text-pink-600 dark:hover:bg-gray-600 dark:hover:text-white">Número amigo</button>
                                    </li>
                                    <li>
                                        <button id="s_name" type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 hover:text-pink-600 dark:hover:bg-gray-600 dark:hover:text-white">Nombre</button>
                                    </li>
                                    <li>
                                        <button id="s_surname" type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 hover:text-pink-600 dark:hover:bg-gray-600 dark:hover:text-white">Apellidos</button>
                                    </li>
                                    <li>
                                        <button id="s_cat" type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 hover:text-pink-600 dark:hover:bg-gray-600 dark:hover:text-white">Categoría</button>
                                    </li>
                                    <li>
                                        <button id="s_cargo" type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 hover:text-pink-600 dark:hover:bg-gray-600 dark:hover:text-white">Cargo</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id="search-dropdown" name="search" value="{{ Request::get('search') }}" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-pink-500" placeholder="Busca amigos por Nombre, Apellidos, DNI...">
                                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-pink-600 rounded-r-lg border border-pink-700 hover:bg-pink-500 focus:ring-4 focus:outline-none focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    <span class="sr-only">Buscar</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="mt-4 sm:mt-0 sm:ml-4 sm:flex-none">

                    <button id="downloaddropdown" data-dropdown-toggle="dropdownDownload" class="text-white bg-pink-600 hover:bg-pink-500 focus:ring-2 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-800" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/> <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/> </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownDownload" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    </div>

                </div>

                <div class="mt-4 sm:mt-0 sm:ml-4 sm:flex-none">
                    <a href="">
                        <button type="button" class="text-white bg-pink-600 hover:bg-pink-500 focus:ring-2 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-0">
                                    <p class="group inline-flex justify-center">
                                        {{ __('Acción') }}
                                    </p>
                                </th>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-0">
                                    <a href="#" class="group inline-flex justify-center">
                                        {{ __('#') }}
                                        <span class="ml-2 flex-none rounded bg-gray-100 text-gray-900 group-hover:bg-gray-200">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="" class="group inline-flex">
                                        {{ __('Nombre') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Apellidos') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Categoria') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Cargo') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('DNI') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Cantidad') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Concepto') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('IBAN') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Email') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Telefono') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Dirección') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('CP') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Provincia') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    <a href="#" class="group inline-flex">
                                        {{ __('Visualizar Nombre') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            @forelse ($amigos as $amigo)
                            <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm sm:pr-2">
                                    <div class="space-x-2">
                                        <a href="{{ route('amigos.delete', $amigo->ID) }}" class="bg-red-500 text-white py-2 px-2.5 rounded-md shadow-sm hover:bg-red-400">
                                            {{ __('Eliminar') }}
                                        </a>
                                        <a href="{{ route('amigos.edit', $amigo->ID) }}" class="bg-amber-500 text-white py-2 px-2.5 rounded-md shadow-sm hover:bg-amber-400">
                                            {{ __('Editar') }}
                                        </a>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-2">{{ $amigo->N_AMIGO }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->NOMBRE }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->APELLIDOS }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->CATEGORIA }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->CARGO }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->DNI }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->CANTIDAD }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->CONCEPTO }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->IBAN }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->EMAIL }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->TELEFONO }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->DIRECCION }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->CP }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->PROVINCIA }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    @if($amigo->VISUALIZAR_NOMBRE == 1)
                                        SI
                                    @else
                                        NO
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ __('Tabla vacía') }}
                                </td>
                            </tr>
                            </tbody>
                            @endforelse
                        </table>
                        <div class="">
                            {{ $amigos->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
