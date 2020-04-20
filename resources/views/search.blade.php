@extends('layouts.layout_master')

@section('title', 'Verbos LSM')

@section('content')


@if($condicion == true)

@foreach ($videos as $video)
 
<!-- Videos Recientamente -->
<section class="section bg-soft">
        <div class="container">
                <h3 class="mb-4">{{$video->verbos}}</h3>
                <div class="row align-items-center">




        <div class="col-md-12 col-lg-12 mb-0">
            <!-- Contact Card -->
            <div class="card shadow-sm border-light p-0 p-md-0 p-lg-0">
                <div class="card-header">
                    <div class="row justify-content-center">
                        <div class="col-10 text-center mb-2">

                                <iframe width="100%" height="480" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                            <div class="col-md-4 col-lg-4 text-left" style="border-left:.25rem solid;border-color:#4e73df;">
                                <h3 style="color:#4e73df">Presente </h3>
                                   <h5> Yo {{$video->presente_yo}}</h5>
                                   <h5>Tú {{$video->presente_tu}}</h5>
                                    <h5>Él/Ella {{$video->presente_el_ella}}</h5>
                                    <h5>Nosotros {{$video->presente_nosotros}}</h5>
                                    <h5>Ustedes {{$video->presente_ustedes}}</h5>
                            </div>
                            <div class="col-md-4 col-lg-4 text-left" style="border-left:.25rem solid;border-color:#f6c23e;">
                                    <h3 style="color:#f6c23e;">Pasado </h3>
                                        <h5>Yo {{$video->pasado_yo}} </h5>
                                        <h5>Tú {{$video->pasado_tu}}</h5>
                                        <h5>Él/Ella {{$video->pasado_el_ella}}</h5>
                                        <h5>Nosotros {{$video->pasado_nosotros}}</h5>
                                        <h5>Ustedes {{$video->pasado_ustedes}}</h5>
                                </div>
                            <div class="col-md-4 col-lg-4 text-left" style="border-left:.25rem solid;border-color:#1cc88a;">
                                    <h3 style="color:#1cc88a;">Futuro </h3>
                                    <h5> Yo {{$video->futuro_yo}} <br />
                                    <h5>  Tú {{$video->futuro_tu}}</h5> 
                                    <h5>Él/Ella {{$video->futuro_el_ella}}</h5>
                                    <h5>Nosotros {{$video->futuro_nosotros}}</h5>
                                    <h5>Ustedes {{$video->futuro_ustedes}}</h5>
                                </div>
                    </div>
                </div>
             </div>
            <!-- End of Contact Card -->
        </div>

            <!-- Videos Recientamente-->


             </div>
         </div>
     </section>

     @endforeach
     <!-- Section -->

@else 

<section class="section bg-soft">
    <div class="container">

            <div class="row align-items-center">




    <div class="col-md-12 col-lg-12 mb-4">
        <!-- Contact Card -->
        <div class="card shadow-sm border-light p-4 p-md-4 p-lg-4">
            <div class="card-header">


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
</div>
</section>

@endif


 
        @endsection




