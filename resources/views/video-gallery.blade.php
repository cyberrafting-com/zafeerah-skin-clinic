@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Video </h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item active"><span></span>Video</li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/resources/assets/images/breadscrumb-img.png') }}" alt="Demo Image">
        </div>
    </div>
    <section class="section-view">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="img-view">
                  <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Ae_3EQTGv18" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-view">
                  <iframe width="100%" height="300px" src="https://www.youtube.com/embed/itEzE4Ng_H4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-view">
                  <iframe width="100%" height="300px" src="https://www.youtube.com/embed/jWK8AuXAPUQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-view">
                  <iframe width="100%" height="300px" src="https://www.youtube.com/embed/jgfaeRlpPqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
  


@stop
