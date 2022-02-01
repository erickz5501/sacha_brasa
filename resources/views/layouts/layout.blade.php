{{-- Esto es la plantilla principal --}}
<!DOCTYPE html>
<html lang="es">
    @include('layouts.head')
<body>
    <!-- gola pading -->
    @include('layouts.sidenav')
    <div class="main-content" >
        @include('layouts.topnav')
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        @yield('ubicacion')
                    {{-- Este div esta en el contenido de ubicacion --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6">
            @yield('content')

            @include('layouts.footer')

        </div>
    </div>
    <!-- =================== YIELD MODAL =================== -->
    {{-- @yield('hola') --}}

    @include('layouts.script')
    
</body>
@livewireScripts
</html>
