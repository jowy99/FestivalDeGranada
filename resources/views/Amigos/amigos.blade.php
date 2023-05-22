<x-app-layout>
    <div class="mt-4 mb-2 flex items-center justify-center">
        <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="w-full">
                    <form action="" method="get" role="search">
                        <div class="flex">
                            <div class="flex z-10 items-center text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-700 dark:text-white dark:border-gray-600">
                                <select class="text-sm focus:ring-none active:ring-none border-transparent rounded-l-lg focus:ring-festival-500 focus:border-festival-500" name="searchby" id="">
                                    <option value="dni">DNI</option>
                                    <option value="nombre">Nombre</option>
                                    <option value="apellidos">Apellidos</option>
                                    <option value="categoria">Categoria</option>
                                    <option value="iban">IBAN</option>
                                    <option value="email">Email</option>
                                    <option value="telefono">Teléfono</option>
                                    <option value="provincia">Provincia</option>
                                </select>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id="search-dropdown" name="search" value="{{ Request::get('search') }}" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-festival-500 focus:border-festival-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-festival-500" placeholder="Busca amigos por...">
                                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-festival-600 rounded-r-lg border border-festival-700 hover:bg-festival-300 focus:ring-4 focus:outline-none focus:ring-festival-300 dark:bg-festival-600 dark:hover:bg-festival-300 dark:focus:ring-festival-800">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    <span class="sr-only">Buscar</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="mt-4 sm:mt-0 sm:ml-4 sm:flex-none">
                    <a href="{{ route('amigos.download') }}" class="text-white bg-festival-600 hover:bg-festival-300 focus:ring-2 focus:outline-none focus:ring-festival-300 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center dark:bg-festival-600 dark:hover:bg-festival-600 dark:focus:ring-festival-800" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                            <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                    </a>
                </div>

                <div class="mt-4 sm:mt-0 sm:ml-4 sm:flex-none">
                    <a href="{{ route('amigos.add') }}">
                        <button type="button" class="text-white bg-festival-600 hover:bg-festival-300 focus:ring-2 focus:outline-none focus:ring-festival-300 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center dark:bg-festival-600 dark:hover:bg-festival-600 dark:focus:ring-festival-800">
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
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'n_amigo|desc';
                                        }
                                        else
                                        {
                                            $ord = 'n_amigo|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex justify-center">
                                        {{ __('#') }}
                                        <span class="ml-2 flex-none rounded bg-gray-100 text-gray-900 group-hover:bg-gray-200">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'nombre|desc';
                                        }
                                        else
                                        {
                                            $ord = 'nombre|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Nombre') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'apellidos|desc';
                                        }
                                        else
                                        {
                                            $ord = 'apellidos|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Apellidos') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'categoria|desc';
                                        }
                                        else
                                        {
                                            $ord = 'categoria|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Categoria') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'cargo|desc';
                                        }
                                        else
                                        {
                                            $ord = 'cargo|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Cargo') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'dni|desc';
                                        }
                                        else
                                        {
                                            $ord = 'dni|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('dni') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'cantidad|desc';
                                        }
                                        else
                                        {
                                            $ord = 'cantidad|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Cantidad') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'concepto|desc';
                                        }
                                        else
                                        {
                                            $ord = 'concepto|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Concepto') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'iban|desc';
                                        }
                                        else
                                        {
                                            $ord = 'iban|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('iban') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'email|desc';
                                        }
                                        else
                                        {
                                            $ord = 'email|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Email') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'telefono|desc';
                                        }
                                        else
                                        {
                                            $ord = 'telefono|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Telefono') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'direccion|desc';
                                        }
                                        else
                                        {
                                            $ord = 'direccion|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Dirección') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'cp|desc';
                                        }
                                        else
                                        {
                                            $ord = 'cp|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('cp') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'provincia|desc';
                                        }
                                        else
                                        {
                                            $ord = 'provincia|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
                                        {{ __('Provincia') }}
                                        <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    @php
                                        if(Str::contains(Request::get('order'), 'asc'))
                                        {
                                            $ord = 'visualizar_nombre|desc';
                                        }
                                        else
                                        {
                                            $ord = 'visualizar_nombre|asc';
                                        }
                                    @endphp
                                    <a href="{{ route('amigos.amigos', ['search' => Request::get('search'), 'searchby' => Request::get('searchby'), 'order' => $ord, 'page' => Request::get('page')]) }}" class="group inline-flex">
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
                                        <a href="{{ route('amigos.delete', $amigo->id) }}" class="bg-red-500 text-white py-2 px-2.5 rounded-md shadow-sm hover:bg-red-400">
                                            {{ __('Eliminar') }}
                                        </a>
                                        <a href="{{ route('amigos.edit', $amigo->id) }}" class="bg-yellow-300 text-white py-2 px-2.5 rounded-md shadow-sm hover:bg-yellow-400">
                                            {{ __('Editar') }}
                                        </a>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-2">{{ $amigo->n_amigo }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->nombre }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->apellidos }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->categoria }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->cargo }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->dni }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->cantidad }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->concepto }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->iban }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->email }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->telefono }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->direccion }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->cp }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $amigo->provincia }}</td>
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
