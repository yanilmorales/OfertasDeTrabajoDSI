<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Descripción de trabajo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/descripcion_trabajo.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="bg-header">
        <header>
            <a class="logo" href={{route('index')}}><img src={{ asset("Imagenes/Logo_BuscaTuEmpleo.png")}} alt="BuscaTuEmpleoIdeal.com"></a>
            <div></div>
            <a class="btn-header" onclick="toogleModal('m-iniciarSesion')">Iniciar Sesión</a>
            <a class="btn-header" onclick="toogleModal('m-registrarse')">Registrarse</a>
        </header>

        <nav>
            <ul class="menu">
                <li><a href={{route('index')}}>Inicio</a></li>
                <li><a href={{route('publicar_oferta')}}>Publicar empleo</a></li>
                <li><a href={{route('contacto')}}>Contacto</a></li>
                <li><a onclick="toogleModal('m-faq')">FAQ's</a></li>
                <li class="search-form"><form method="GET" action={{route('busqueda')}}>
                    <input type="search" name="search" placeholder="ej. Tecnologia de Información">
                    <button type="submit">Buscar<i class="fa fa-search" aria-hidden="true"></i></button>
                </form></li>
            </ul>
        </nav>

        <!-- Modales -->
        <div id="m-faq" class="hidden modal" title="FAQ">
            <iframe src={{route('faqs')}}></iframe>
            <button onclick="toogleModal('m-faq')"><i class="fas fa-times"></i></button>
        </div>
        <div id="m-registrarse" class="hidden modal" title="Registrarse">
            <iframe src={{route('registrarse')}}></iframe>
            <button onclick="toogleModal('m-registrarse')"><i class="fas fa-times"></i></button>
        </div>
        <div id="m-iniciarSesion" class="hidden modal" title="Iniciar Sesión">
            <iframe src={{route('iniciar_sesion')}}></iframe>
            <button onclick="toogleModal('m-iniciarSesion')"><i class="fas fa-times"></i></button>
        </div>
    </div>

    <div id="body">
        <aside>
            <img src={{ asset("storage/".$ofert->logo) }} alt="Logo de la empresa">
            <h2>{{$ofert->nempresa}}</h2>
        </aside>
        <div>
            <section>
                <h1>{{$ofert->cargo_solicitado}}</h1>
                <ul>
                    <li>La oferta expira en:&nbsp;<span>{{$ofert->expiracion}}</span> </li> 
                    <li>Ubicación:&nbsp;<span>{{$ofert->ubicacion}}</span> </li>
                    <li>Salario Mensual:&nbsp;<span>{{$ofert->moneda}} {{$ofert->salario}}</span></li>
                </ul>
                <button>Agregar a favoritos</button>
                <button>Aplicar al trabajo</button>
            </section>
            <section>
                <h2>Detalle de la Oferta</h2>
                <ul>
                    <li>Area de la empresa:&nbsp;<span>{{$ofert->aempresa}}</span></li>
                    <li>Cargo solicitado:&nbsp;<span>{{$ofert->npuesto}}</span></li>
                    <li>Tipo de Contratación:&nbsp;<span>{{$ofert->contrato}}</span></li>
                    <li>Nivel de experiencia:&nbsp;<span>{{$ofert->experiencia}}</span></li>
                    <li>Sexo:&nbsp;<span>{{$ofert->sexo}}</span></li>
                    <li>Edad minima:&nbsp;<span>{{$ofert->edad}}</span></li>
                    <li>Vehiculo:&nbsp;<span>{{$ofert->vehiculo}}</span></li>
                    <li>Pais:&nbsp;<span>{{$ofert->pais}}</span></li>
                    <li>Estado | Departamento:&nbsp;<span>{{$ofert->departamento}}</span></li>
                </ul>
            </section>
            <section>
                <h2>Descripción</h2>
                @foreach (explode("\n",$ofert->descripcion) as $parrafo)
                    <p>{{$parrafo}}</p>
                @endforeach
            </section>
        </div>
    </div>

    <footer>            
        <svg viewBox="0 0 1440 158" fill="none" xmlns="http://www.w3.org/2000/svg">            
            <path d="M0 59.947L60 70.4347C120 80.9224 240 101.898 360 91.4101C432 85.1175 504 67.4982 576 49.8788C624 38.1326 672 26.3864 720 17.9962C840 -2.97918 960 -2.97918 1080 7.50852C1200 17.9962 1320 38.9716 1380 49.4593L1440 59.947V122.873H1380H1080H720H360H60H0V59.947Z" fill="#00B3DB" fill-opacity="0.65"/>
            <path d="M0 94.3099H60C120 94.3099 240 94.3099 360 89.0705C408 86.9747 456 84.0406 504 81.1065C576 76.7054 648 72.3043 720 70.7324C760 69.8592 800 69.8592 840 69.8592C920 69.8592 1000 69.8592 1080 62.8733C1200 52.3944 1320 26.1972 1380 13.0986L1440 0V157.183H1380H1080H720H360H60H0V94.3099Z" fill="#00B3DB" fill-opacity="0.47"/>
            <path d="M0 0.619629L60 5.85907C120 11.0985 240 21.5774 360 39.9154C411.429 47.7746 462.857 57.0773 514.286 66.38C582.857 78.7835 651.429 91.1871 720 100.169C840 115.887 960 121.127 1080 113.268C1200 105.408 1320 84.4507 1380 73.9718L1440 63.4929V157.803H1380H1080H720H360H60H0V0.619629Z" fill="#00B3DB"/>
      </svg>
        
        <div class="footer-body">    
            <div>
                <img class="logo" src={{asset("Imagenes/Logo_BuscaTuEmpleo.png")}} alt="BuscaTuEmpleoIdeal.com">      
                <p>Creadores: Jarov Davila | Flavio Arauz | Elliott Alvarez</p>
                <p>Todos los derechos reservados &copy; 2021 - {{date("Y")}}</p>
                <p id="reloj"></p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.6373895808924!2d-86.22629628565328!3d12.136944235926562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe7867ce5fad%3A0x842c4aeae5cf3cda!2sUniversidad%20Nacional%20de%20Ingenier%C3%ADa%20(RUPAP)!5e0!3m2!1ses-419!2sni!4v1623696860922!5m2!1ses-419!2sni" width="300" height="300" style="border:0;" allowfullscreen></iframe>
        </div>
    </footer>
    <script src={{ asset('js/reloj.js') }}></script>
    <script src={{ asset('js/modal.js') }}></script>
</body>
</html>