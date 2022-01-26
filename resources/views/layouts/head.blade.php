<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>CMR - @yield('pagina')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/img/icono.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Page plugins -->
    {{-- <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/quill/dist/quill.core.css')}}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('/argon/assets/css/argon.css?v=1.2.0')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}" type="text/css">

    @yield('extra-css')

    <style>
        /* ESTYLO PARA LOS SELECT CON BOTON AGREGAR */
        .input-group span.select2-container{
        width: calc(100% - 56.36px) !important;
        }

        /* ESTYLO PARA EL COLOR DEL ACTIVE NAV */
        .active_color_blue{
            background: #ccddef !important;
        }
    </style>
    @livewireStyles
</head>
