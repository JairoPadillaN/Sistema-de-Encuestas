<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página Principal') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
{{--                     <div class="card-group">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/img/vectores/Usuarios_lista.jpg') }}" class="card-img-top"
                                style="height: 50vh" alt="...">
                            <div class="card-body">
                                <p style="text-align: center"><strong>Usuarios</strong></p><br>
                                <p class="card-text"> Es una herramienta eficiente para gestionar información laboral.
                                    Permite agregar, editar y eliminar perfiles de empleados, incluyendo datos como
                                    nombres, roles y contactos. Facilita la organización y búsqueda rápida de
                                    información vital del personal administrativo y estudiantes.</p><br>
                                <div class="row">
                                    <div class="col 4"></div>
                                    <div class="col 4">
                                        <a class="btn btn-outline-info" id="UsuariosList">Ver lista completa</a>
                                    </div>
                                    <div class="col 4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/img/vectores/Encuesta.jpg') }}" class="card-img-top"
                                style="height: 50vh" alt="...">
                            <div class="card-body">
                                <p style="text-align: center"><strong>Encuestas</strong></p><br>
                                <p class="card-text">Es una solución versátil para recopilar opiniones y
                                    retroalimentación de manera eficiente. Permite crear, distribuir y analizar
                                    encuestas personalizadas con facilidad. Con características como preguntas variadas,
                                    análisis de datos en tiempo real y generación de informes detallados, es ideal para
                                    la toma de desiciones informadas.</p><br>
                                <div class="row">
                                    <div class="col 4"></div>
                                    <div class="col 4">
                                        <a class="btn btn-outline-info" id="EncuestaList">Ver lista completa</a>
                                    </div>
                                    <div class="col 4"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card">
                            <img src="{{ asset('assets/img/vectores/Usuarios_lista.jpg') }}" class="card-img-top"
                                style="height: 50vh" alt="...">
                            <div class="card-body">
                              <h5 class="card-title" style="text-align: center"><strong>Usuarios</strong></h5>
                              <p class="card-text"> Es una herramienta eficiente para gestionar información laboral.
                                Permite agregar, editar y eliminar perfiles de empleados, incluyendo datos como
                                nombres, roles y contactos. Facilita la organización y búsqueda rápida de
                                información vital del personal administrativo y estudiantes.</p><br>
                                <div class="row">
                                    <div class="col 4"></div>
                                    <div class="col 4">
                                        <a class="btn btn-outline-info" id="UsuariosList">Ver lista</a>
                                    </div>
                                    <div class="col 4"></div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card">
                            <img src="{{ asset('assets/img/vectores/Encuesta.jpg') }}" class="card-img-top"
                            style="height: 50vh" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center"><strong>Encuestas</strong></h5>
                                <p class="card-text">
                                    Permite crear, distribuir y analizar
                                    encuestas personalizadas con facilidad. Con características como preguntas variadas,
                                    análisis de datos en tiempo real y generación de informes detallados, es ideal para
                                    la toma de desiciones informadas.</p><br>
                                    <div class="row">
                                        <div class="col 4"></div>
                                        <div class="col 4">
                                            <a class="btn btn-outline-info" id="EncuestaList">Ver lista</a>
                                        </div>
                                        <div class="col 4"></div>
                                    </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    {{--     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 text-gray-900">
                    <a class="btn btn-outline-info" id="pruebaBtn">prueba</a>
                    <a class="btn btn-outline-info" id="prueba2Btn">prueba2</a>
                </div>
            </div>
        </div>
    </div> --}}
    {{--             <div class="row">
                <div class="col-1"></div>
                <div class="col-10"><br> --}}
    <!--Grid Component Placement[2]-->
    {{--                     <zing-grid    
                    caption="Hello Futurama"  
                    editor-controls
                    pager
                    page-size = "3"
                    page-size-options = "3,6,9"
                    sort
                    search  
                    layout = "row"
                    layout-control
                    viewport-stop
                   src="https://cdn.zinggrid.com/datasets/users.json"
                     data='[
                        {        "name": "Philip J. Fry",        
                                "origin": "Earth"      },      
                        {        "name": "Turanga Leela",
                                "origin": "Earth"      },      
                        {        "name": "Bender Bending Rodriguez",        
                                "origin": "Earth"      },      
                        {        "name": "Amy Wong",        
                                "origin": "Mars"      },      
                        {        "name": "Doctor John Zoidberg",        
                                "origin": "Decapod 10"      },      
                        {        "name": "Lord Nibbler",        
                                "origin": "Earth"      }    ]'  >
                        <zg-colgroup>
                            <zg-column 
                                index="name,actor" 
                                header="Character" 
                                cell-class="character-info">  
                                <span class="character-info--header">
                                    <strong>Name:</strong> 
                                    [[index.name]]
                                </span>  <br>  
                                <span class="character-info--subheader">
                                    <strong>Voice By:</strong> 
                                    [[index.actor]]
                                </span>
                            </zg-column>
                        </zg-colgroup>

                        

                    </zing-grid>  --}}
    {{--                     <table is="zing-grid" data-zg-columns-control data-zg-filter data-zg-search data-zg-sort data-zg-pager data-zg-info-text="Mostrando datos {start} al {end} de {total} datos totales">
                        <colgroup>
                          <col data-zg-index="first" data-zg-sort-asc="true">
                          </col>
                          <col data-zg-index="last">
                          </col>
                          <col data-zg-index="number" data-zg-header="ID Number" data-zg-hidden="true" data-zg-type="number">
                          </col>
                        </colgroup>
                        <tr>
                          <th>First</th>
                          <th>Last</th>
                          <th data-zg-ignore-row>Number</th>
                        </tr>
                        <tr>
                          <td><b>Maria</b></td>
                          <td>John</td>
                          <td>123</td>
                        </tr>
                        <tr>
                          <td><ins>David</ins></td>
                          <td>Smith</td>
                          <td>456</td>
                        </tr>
                        <tr>
                          <td><i>Felicity</i></td>
                          <td>Snow</td>
                          <td>789</td>
                        </tr>
                      </table>
                </div> --}}
    {{--                 <div class="col-1"></div>
            </div> --}}




</x-app-layout>

<script>
    $(document).ready(function() {
        $("#pruebaBtn").on("click", function() {

            Swal.fire({
                title: "Sweet!",
                text: "Modal with a custom image.",
                imageUrl: "https://unsplash.it/400/200",
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: "Custom image"
            });

        });

        $("#prueba2Btn").on("click", function() {
            Swal.fire({
                title: "<strong>HTML <u>Ejemplo</u></strong>",
                icon: "success",
                html: `
            <div
                class="table-responsive"
            >
                <table
                    class="table table-striped table-hover table-borderless table-primary align-middle"
                >
                    <thead class="table-light">
                        <caption>
                            Tabla de ejemplo
                        </caption>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr
                            class="table-primary"
                        >
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                        <tr
                            class="table-primary"
                        >
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            `,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: `
                <i class="fa fa-thumbs-up"></i> Great!
            `,
                confirmButtonAriaLabel: "Thumbs up, great!",
                cancelButtonText: `
                <i class="fa fa-thumbs-down"></i>
            `,
                cancelButtonAriaLabel: "Thumbs down"
            });
        });

        $('#UsuariosList').on("click", function() {
            Swal.fire({
                title: "<strong>Usuarios</strong>",
                html: `
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>Lista de Usuarios</strong></h5>
                                            <p class="card-text">Visualiza, edita y elimina a los usuarios registrados.</p><br>
                                            <button class="btn btn-outline-info btn-sm">Ver Lista</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>Roles</strong></h5>
                                            <p class="card-text">Visualiza los permisos destinados a cada usuario.</p><br>
                                            <button class="btn btn-outline-info btn-sm">Ver Permisos</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `,
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText: `
                <i class="fa-regular fa-circle-xmark"></i> Cerrar!
            `,
                confirmButtonAriaLabel: "Cerrar",
            });
        });

        $('#EncuestaList').on("click", function() {
            Swal.fire({
                title: "<strong>Encuestas</strong>",
                html: `
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>Crear Encuesta</strong></h5>
                                            <p class="card-text">Crea una encuesta nueva.</p><br>
                                            <button class="btn btn-outline-info btn-sm">Crear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>Lista de Encuestas</strong></h5>
                                            <p class="card-text">Visualiza, edita y elimina las encuestas creadas.</p><br>
                                            <button class="btn btn-outline-info btn-sm">Ver Lista</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `,
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText: `
                <i class="fa-regular fa-circle-xmark"></i> Cerrar!
            `,
                confirmButtonAriaLabel: "Cerrar!",
            });
        });

    });
</script>
