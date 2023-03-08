@extends('layouts.frontend')
@section('content')
<section class="section promo-primary">
    <picture>
        <source srcset="img/Hyenas.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/Hyenas.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><span class="promo-primary__pre-title">Our</span>
                        <h1 class="promo-primary__title"><span>Adopt an </span> <span>Animal</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container section" >
    </br>
      <div class="row justify-content-start mb-5 pb-3">
              
                   
              @foreach($products as $key => $article)
              <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
              <div class="card box-shadow">
              <img class="card-img-top img img-2 d-flex justify-content-center align-items-center" src="{{'https://kikosi.com/projects/kws-donate/storage/app/public/'.$article->photo->id.'/' . $article->photo->file_name }}" alt="{{ $article->name }}" width="150px" height="150px">
                 
                  <small class="text-muted"> @foreach($article->categories as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                  </small>
                <div class="card-body">
                <p class="card-title">   <a href="{{ route('adopts',$article->id) }}">
                        <i class="fa fa-pencil-square-o"></i> {{ $article->name }}</a></p>
                  <p class="card-text">{{ mb_strimwidth($article->description, 0, 200, "...") }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                   <a class="btn btn-success btn-servicesz  scrollto" href="{{ route('adopts',md5($article->id)) }}?id={{$article->id}}">
                        <i class="fa fa-book"></i> Adopt</a></span> </div>
                      
                    
                    </div>
                    </div>
                </div>
              </div>
              @endforeach
            </div>



@endsection