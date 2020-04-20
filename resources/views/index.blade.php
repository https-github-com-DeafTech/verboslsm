@extends('layouts.layout_master')

@section('title', 'Verbos LSM')

@section('content')




        <!-- Section -->
        <section class="section section-xl bg-soft overflow-hidden z-2">
            <div class="container z-2">

                 <div class="row align-items-center justify-content-around pt-6 pt-md-4 pb-4 mb-2">

                     <div class="col-md-6 col-xl-5 mb-2 mr-4">
                         <img class="img-fluid" src="/public/img/logo_VerbosLSM.png" alt="Image">
                     </div>

                     <div class="col-md-6 col-xl-6 text-center text-md-left card shadow-sm border-light p-2 p-md-4 p-lg-4">

                         <h4 class="mb-4">Verbos LSM</h4>
                         <p class="lead">Página web con videos para aprender algunos verbos y sus conjugaciones en Lengua de Señas Mexicana (LSM)
                             y ayudar a la comunicación entre la comunidad sorda de la República Mexicana.</p>
                     </div>
                 </div>

             </div>
         </section>
         <!-- Section -->



        <!-- Section -->
        <section class="section bg-soft overflow-hidden z-2">
                <div class="container z-2">

                     <div class="row align-items-center justify-content-around pt-6 pt-md-4 pb-4 mb-2">

                        <div class="col-4 col-md-4 col-xl-4 card shadow-sm border-light">

                            <h3 style="color:#4e73df">AR</h3>
                            @foreach ($videos_ar as $video_ar)
                            <h5>
                            <a href="/search?verbo={{$video_ar->verbos}}" class="mb-4">
                                {{$video_ar->verbos}}
                                </a>

                                   </h5>
                            @endforeach
                        </div>

                        <div class="col-4 col-md-4 col-xl-4 card shadow-sm border-light">
                            <h3 style="color:#4e73df">ER</h3>
                            @foreach ($videos_er as $video_er)
                            <h5>
                            <a href="/search?verbo={{$video_er->verbos}}" class="mb-4">
                                {{$video_er->verbos}}
                                </a>

                                   </h5>
                            @endforeach
                        </div>
                        <div class="col-4 col-md-4 col-xl-4 card shadow-sm border-light">
                            <h3 style="color:#4e73df">IR</h3>
                            @foreach ($videos_ir as $video_ir)
                            <h5>
                            <a href="/search?verbo={{$video_ir->verbos}}" class="mb-4">
                                {{$video_ir->verbos}}
                                </a>

                                   </h5>
                            @endforeach
                        </div>
                     </div>

                 </div>
             </section>
             <!-- Section -->


        @endsection




