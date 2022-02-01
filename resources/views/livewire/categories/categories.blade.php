{{-- Usamos la plantilla --}}
@extends('layouts.layout')

@section('title', 'Categorias')
@section('pagina', 'Categorias')

@section('ubicacion')
<div class="col-lg-6 col-7">
  <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
      <li class="breadcrumb-item active" aria-current="page">Default</li>
    </ol>
  </nav>
</div>
</div>
@endsection

{{-- Todo lo que este aca sera el contenido de la pagina --}}
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header" style="padding-bottom: 10px !important;">
                <div class="row ">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        {{$componentName}} | {{$pagetitle}}
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6  text-right" >
                        <button onclick="limpiar_comercializacion(); modal_comercializacion();"   type="button" class="btn btn-outline-primary px-3 py-2" data-toggle="tooltip" data-html="true">
                            <i class="fas fa-plus-circle"></i>
                            <span > Agregar </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- LISTAMOS LA TABLA COMERCIALIZACION-->
            <div class="card-body" style="padding-top: 10px !important;" >
                {{-- Buscador --}}
                @include('common.searchbox')

                <div class="widget-content">
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort text-center" data-sort="name">N°</th>
                            <th scope="col" class="sort text-center" data-sort="name">Nombre</th>
                            <th scope="col" class="sort text-center" data-sort="status">Acciones</th>  
                          </tr>
                        </thead>
                        <tbody >
                          @foreach($categories as $category)
                          <tr>
                            <td scope="row" class="text-center">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <span class="name mb-0 text-sm">{{$category->id}}</span>
                                </div>
                              </div>
                            </td>
                            <td scope="row" class="text-center">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <span class="name mb-0 text-sm">{{$category->nombre}}</span>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="javascript:void(0)" wire:click="Edit({{$category->id}})" class="btn btn-primary mtmobile" title="Edit">
                                <i class="fas fa-edit"></i>
                              </a>
                              <a href="javascript:void(0)" onclick="Confirm('{{$category->id}}')" class="btn btn-primary mtmobile" title="Delete">
                                <i class="fas fa-trash"></i>
                              </a>
                            </td>                          
                          </tr>
                          @endforeach                     
                        </tbody>
                    </table>
                    {{-- Creamos la paginacion de la tabla --}}
                    {{$categories->links()}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  <script>
   
  </script>
@endsection
