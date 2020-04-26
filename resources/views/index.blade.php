@extends('layouts.layout_master_inicio')

@section('title', 'Verbos LSM')

@section('content')



<div class="container">

    <!-- Cuadrante 1 -->
 <div class="row justify-content-center">
     
         <div class="col-xl-10 col-lg-12 col-md-9">
             </div>

   <div class="col-xl-10 col-lg-12 col-md-9">

     <div class="card border-0 shadow-lg mt-5 my-4">
       <div class="card-body p-0">
         <!-- Nested Row within Card Body -->
         <div class="row">
             <div class="col-lg-1"></div>
           <div class="col-lg-10">
             <div class="p-5">
               <div class="text-center">
                 <h1 class="h4 text-gray-900 mb-2">Deaf Tech</h1>
                 <p class="mb-4">
                  Esta es una página web que tiene como meta ayudar a la comunicación entre la comunidad sorda de la República mexicana. 
                  En esta sección vas a aprender algunos verbos en Lengua de Señas Mexicana (LSM)  
                  y su conjugación en el español.</p>
               </div>
               <hr>
                                <div class="text-center">
               <h2 class="h4 text-gray-900 mb-2">Buscar una palabra de verbo</h2>
               </div>
               
                         <!-- Form -->
                         <form method="GET" action="{{ route('search') }}" autocomplete="off">
                             <div class="input-group ml-lg-6">

                                     <input class="form-control"
                                     name="verbo" id="verbo"
                                     placeholder="Buscar" type="text">

                                     <div class="input-group-append">
                                         <span class="input-group-text"><i class="fas fa-search">
                                             <input type="submit" style="display:none;"/></i></span>
                                     </div>

                                     <div id="autocomplete_VerbosLSM"></div>
                             </div>
                         </form>
                         {{ csrf_field() }}
                             <!-- End of Form -->

             </div>
           </div>
         </div>
       </div>
     </div>

   </div>

 </div>
     <!-- Cuadrante 1-->
 
     <!-- Cuadrante 2 -->
 
    <div class="row justify-content-center">

   <div class="col-xl-10 col-lg-12 col-md-4">

     <div class="card border-0 shadow-lg my-4">
       <div class="card-body p-0">
         <!-- Nested Row within Card Body -->
         <div class="row">
           <div class="col-lg-4">
             <div class="p-5">
               <div class="text-center">
                 <h1 class="h4 text-gray-900 mb-2">AR</h1>

                 @foreach ($videos_ar as $video_ar)
                         <hr>
                         <a href="/search?verbo={{$video_ar->verbos}}" class="mb-4">
                             {{$video_ar->verbos}}
                             </a>
                         @endforeach


               </div>
 

             </div>
           </div> <!-- col 4 AR -->
           <div class="col-lg-4">
             <div class="p-5">
               <div class="text-center">
                 <h1 class="h4 text-gray-900 mb-2">ER</h1>

                     
                 @foreach ($videos_er as $video_er)
                         <hr>
                         <a href="/search?verbo={{$video_er->verbos}}" class="mb-4">
                             {{$video_er->verbos}}
                             </a>

                         @endforeach


               </div>
 

             </div>
           </div> <!-- col 4 ER -->
                         <div class="col-lg-4">
             <div class="p-5">
               <div class="text-center">
                 <h1 class="h4 text-gray-900 mb-2">IR</h1>

                 @foreach ($videos_ir as $video_ir)
                         <hr>
                         <a href="/search?verbo={{$video_ir->verbos}}" class="mb-4">
                             {{$video_ir->verbos}}
                             </a>

                             
                         @endforeach


               </div>
 

             </div>
           </div> <!-- col 4 IR -->
         </div>
       </div>
     </div>

   </div>

 </div>
 <!-- Cuadrante 2 -->




     <!-- Cuadrante 3 -->
 
     <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-4">
   
        <div class="card border-0 shadow-lg my-4">
          <div class="card-header pb-1">
            <h3 class="text-center text-primary">Colaboradores </h3>
          </div>
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                      <div class="p-2">
                      <div class="text-center m-2 ">
                    <div class="avatar">
                      <img src="img/jose_paoletti.jpg" 
                      style=" border-radius: 50%; width: 150px"
                        alt="Sample avatar">
                  </div>
                  <h5 class="font-weight-bold mt-4 mb-3">José Paoletti L.</h5>
                  <p class="text-uppercase blue-text"><strong><a href="https://www.facebook.com/groups/1873104899593976" target="_blank">Fundador de LSM-QUO (Facebook)</a></strong></p>
                </div>
              </div>
            </div>

                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                      <div class="p-2">
                      <div class="text-center m-2">
                    <div class="avatar">
                      <img src="img/renato_paoletti.jpg" 
                      style=" border-radius: 50%; width: 150px"
                        alt="Sample avatar">
                  </div>
                  <h5 class="font-weight-bold mt-4 mb-3">Renato Paoletti L.</h5>
                  <p class="text-uppercase blue-text"><strong><a href="https://www.facebook.com/groups/1873104899593976" target="_blank">Fundador de LSM-QUO (Facebook)</a></strong></p>
                </div>
              </div>
            </div>

                  <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                    <div class="p-2">
                    <div class="text-center m-2">
                  <div class="avatar">
                    <img src="img/jose_carlos.jpg" 
                    style=" border-radius: 50%; width: 150px"
                      alt="Sample avatar">
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">José C. Hernandez</h5>
                </div>
                </div>
                  </div>
            </div>
            </div>

          </div>
        </div>
   
      </div>
   
    </div>
    <!-- Cuadrante 3 -->

</div>


        @endsection




