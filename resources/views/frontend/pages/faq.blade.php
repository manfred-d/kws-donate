@extends('layouts.frontend')
@section('content')
  <!-- ======= Intro Section ======= -->
  <section class="section promo-primary">
    <picture>
        <source srcset="img/Hyenas.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/Hyenas.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><span class="promo-primary__pre-title">Our</span>
                        <h1 class="promo-primary__title"><span>Frequently Asked  </span> <span>Questions </span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



      <section>
  
         <div class="card"> 

	<div class="container home-content1">
		<div class="row">
			<div class="col-md-12 accordion_one">
				 @foreach($categories as $category)
                          <div class="panel-body">
                                        <div class="panel-group" id="accordionQuestions{{ $category->id }}" role="tablist" aria-multiselectable="true">
                                         
                                            @foreach($category->faqQuestions as $question)
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingQuestion{{ $question->id }}">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordionQuestions{{ $category->id }}" href="#collapseQuestion{{ $question->id }}" aria-expanded="true" aria-controls="collapseQuestion{{$question->id}}">
                                                                {{ $question->question }}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseQuestion{{ $question->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQuestion{{ $question->id }}">
                                                        <div class="panel-body">
                                                            {!! $question->answer !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                   
                          </div></div>
                        @endforeach
			
		
		</div>
	</div>
	<div class="container-fluid home-content2">
	
        </div>
             
      </section>

 
@endsection
  