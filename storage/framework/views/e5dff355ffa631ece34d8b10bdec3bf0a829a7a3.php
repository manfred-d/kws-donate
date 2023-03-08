
<?php $__env->startSection('content'); ?>
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
				 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="panel-body">
                                        <div class="panel-group" id="accordionQuestions<?php echo e($category->id); ?>" role="tablist" aria-multiselectable="true">
                                         
                                            <?php $__currentLoopData = $category->faqQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingQuestion<?php echo e($question->id); ?>">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordionQuestions<?php echo e($category->id); ?>" href="#collapseQuestion<?php echo e($question->id); ?>" aria-expanded="true" aria-controls="collapseQuestion<?php echo e($question->id); ?>">
                                                                <?php echo e($question->question); ?>

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseQuestion<?php echo e($question->id); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQuestion<?php echo e($question->id); ?>">
                                                        <div class="panel-body">
                                                            <?php echo $question->answer; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                   
                          </div></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		
		</div>
	</div>
	<div class="container-fluid home-content2">
	
        </div>
             
      </section>

 
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/frontend/pages/faq.blade.php ENDPATH**/ ?>