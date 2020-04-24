@extends('layouts.layout_master')

@section('title', 'Verbos LSM')

@section('content')


        <!-- Begin Page Content -->
<div class="container-fluid">
 
@if($condicion == true)

@foreach ($videos as $video)
         
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          </div>
        </div> 

                      <!-- Content Row -->
          <div class="row">
                         <div class="col-lg-2 mb-1">
                             </div>
            <div class="col-lg-8 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{$video->verbos}}</h6>

                 
                </div>
                <div class="card-body">
                  <div class="text-center">
                  <iframe width="100%" height="480" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <hr>
                    <a href="#" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="pull-left d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-thumbs-down fa-sm text-white-50"></i> Reporta</a>
                    
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">¿Que deseas una reporta?</div>
                      <a class="dropdown-item" href="#">Esa seña esta mal</a>
                      <a class="dropdown-item" href="#">El vídeo no se ve muy claro</a>
                      <a class="dropdown-item" href="#">Ha equivocado</a>
                    </div>
                  </div>
                                

                </div>
              </div>
              </div>
              
              
            <div class="col-lg-2 mb-1">
                             </div>
            <!-- Border Left Utilities -->
            <div class="col-lg-4">

              <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">                 
                    Presente
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <span class="text-danger">Yo</span> {{substr($video->presente_yo,0,-1)}}<span class="text-primary">{{substr($video->presente_yo,-1)}}</span><br/>
                      <span class="text-danger">Tú</span> {{substr($video->presente_tu,0,-2)}}<span class="text-primary">{{substr($video->presente_tu,-2)}}</span><br/>
                      <span class="text-danger">Él/Ella</span> {{substr($video->presente_el_ella,0,-2)}}<span class="text-primary">{{substr($video->presente_el_ella,-2)}}</span><br/>
                      <span class="text-danger">Nosotros</span> {{substr($video->presente_nosotros,0,-4)}}<span class="text-primary">{{substr($video->presente_nosotros,-4)}}</span><br/>
                      <span class="text-danger">Ustedes</span> {{substr($video->presente_ustedes,0,-3)}}<span class="text-primary">{{substr($video->presente_ustedes,-3)}}</span><br/>

                    </div>
                </div>
              </div>
              
              </div>
                          <!-- Border Left Utilities -->
            <div class="col-lg-4">

              <div class="card mb-4 py-3 border-left-warning">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">                 
                        Pasado
                    </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <span class="text-danger">Yo</span> {{substr($video->pasado_yo,0,-2)}}<span class="text-warning">{{substr($video->pasado_yo,-2)}}</span><br />
                    <span class="text-danger">Tú</span> {{substr($video->pasado_tu,0,-3)}}<span class="text-warning">{{substr($video->pasado_tu,-3)}}</span><br />
                    <span class="text-danger">Él/Ella</span> {{substr($video->pasado_el_ella,0,-2)}}<span class="text-warning">{{substr($video->pasado_el_ella,-2)}}</span><br />
                    <span class="text-danger">Nosotros</span> {{substr($video->pasado_nosotros,0,-4)}}<span class="text-warning">{{substr($video->pasado_nosotros,-4)}}</span><br />
                    <span class="text-danger">Ustedes</span> {{substr($video->pasado_ustedes,0,-2)}}<span class="text-warning">{{substr($video->pasado_ustedes,-2)}}</span><br />
                    </div>
                </div>
              </div>
              
              </div>
                          <!-- Border Left Utilities -->
            <div class="col-lg-4">
                
      

              <div class="card mb-4 py-3 border-left-success">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-success text-uppercase mb-1">                 
                    Futuro
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <span class="text-danger">Yo</span> {{substr($video->futuro_yo,0,-2)}}<span class="text-success">{{substr($video->futuro_yo,-2)}}</span><br />
                      <span class="text-danger">Tú</span> {{substr($video->futuro_tu,0,-3)}}<span class="text-success">{{substr($video->futuro_tu,-3)}}</span><br />
                      <span class="text-danger">Él/Ella</span> {{substr($video->futuro_el_ella,0,-2)}}<span class="text-success">{{substr($video->futuro_el_ella,-2)}}</span><br />
                      <span class="text-danger">Nosotros</span> {{substr($video->futuro_nosotros,0,-4)}}<span class="text-success">{{substr($video->futuro_nosotros,-4)}}</span><br />
                      <span class="text-danger">Ustedes</span> {{substr($video->futuro_ustedes,0,-3)}}<span class="text-success">{{substr($video->futuro_ustedes,-3)}}</span><br />
                </div>
 
                </div>
              </div>
              
              </div>

      </div>
      

@endforeach
     <!-- Section -->

@else 


<div class="d-sm-flex align-items-center justify-content-between mb-4">

          </div>
        </div> 

                      <!-- Content Row -->
          <div class="row">
                         <div class="col-lg-2 mb-1">
                             </div>
            <div class="col-lg-8 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">

                 
                </div>
                <div class="card-body">
                  <div class="text-left mb-0">
                  <h5>No se han encontrado esa palabra ({{$verbo}}) para tu búsqueda, 
                porque en nuestra base de datos no hay registrado.</h4>


                                
            <hr/>
                <b>Sugerencias:</b>
            <br>
                <ul>
                    <li>Revisa la ortografía de tus palabras de búsqueda.</li>
                    <li>Todas las palabras son escritas correctamente.</li>
                    <li>Intenta usar sinónimos.</li>
                    <li>Prueba buscar otra palabra sino no hay palabra -> <a href="agregarPalabra">+ Agrega una Palabra</a></li>
                </ul>
                  </div>
                                

                </div>
              </div>
              </div>
              
              
                  <div class="col-lg-2 mb-1">
          </div>
   </div>

   @endif

  
  


 
        @endsection




