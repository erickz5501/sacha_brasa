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
                        <button onclick="limpiar_comercializacion(); modal_comercializacion();"   type="button" class="btn btn-outline-primary px-3 py-2" data-toggle="tooltip" data-html="true" title="Agregar una nueva comercialización." >
                            <i class="fas fa-plus-circle"></i>
                            <span > Agregar </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- LISTAMOS LA TABLA COMERCIALIZACION-->
            <div class="card-body" style="padding-top: 10px !important;" >
                <div class="row" >
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 " >
                        <label class="media align-items-center">
                            <span style="padding-right: 10px;">Ver </span>
                            <select name="filtro_cant" id="filtro_cant" onchange="lista_comercializacion(1);" aria-controls="datatable-basic" class="form-control form-control-sm"  style="color: black !important; font-weight: bold !important; display: inline-block;" >
                                <option value="3">3</option>
                                <option selected value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                            </select>
                            <span style="padding: 0px 30px 0px 10px;"> registros</span>
                        </label>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-6 col-xl-5 ">
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 ">
                        <div class="input-group input-group-merge"">

                            <div class="input-group-prepend">
                                <span class="input-group-text" style="padding: 2px 8px 2px 8px !important;"><i  class="fas fa-search"></i></span>
                            </div>
                            <input id="filtro_search" name="filtro_search" class="form-control form-control-sm" placeholder="Buscar cliente..." type="search" >
                        </div>
                    </div>
                </div>
                <div class="table-responsive " id="lista_tabla_comercializacion" >
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort text-center" data-sort="name">N°</th>
                            <th scope="col" class="sort text-center" data-sort="name">Nombre</th>
                            <th scope="col" class="sort text-center" data-sort="status">Acciones</th>  
                          </tr>
                        </thead>
                        <tbody class="list">
                          @foreach($categories as $category)
                          <tr>
                            <th scope="row" class="text-center">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <span class="name mb-0 text-sm">{{$category->id}}</span>
                                </div>
                              </div>
                            </th>
                            <th scope="row" class="text-center">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <span class="name mb-0 text-sm">{{$category->nombre}}</span>
                                </div>
                              </div>
                            </th>
                            <td class="text-center">
                              <a href="javascript:void(0)" class="btn btn-primary mtmobile" title="Edit">
                                <i class="fas fa-edit"></i>
                              </a>
                              <a href="javascript:void(0)" class="btn btn-primary mtmobile" title="Delete">
                                <i class="fas fa-trash"></i>
                              </a>
                            </td>                          
                          </tr>
                          @endforeach                     
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  <script>
    document.addEventListener('DOMContentLoaded', function(){

    });
  </script>
@endsection
