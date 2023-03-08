<?php $__env->startSection('content'); ?>
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
              
                   
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
              <div class="card box-shadow">
              <img class="card-img-top img img-2 d-flex justify-content-center align-items-center" src="<?php echo e('https://kikosi.com/projects/kws-donate/storage/app/public/'.$article->photo->id.'/' . $article->photo->file_name); ?>" alt="<?php echo e($article->name); ?>" width="150px" height="150px">
                 
                  <small class="text-muted"> <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-info"><?php echo e($item->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </small>
                <div class="card-body">
                <p class="card-title">   <a href="<?php echo e(route('adopts',$article->id)); ?>">
                        <i class="fa fa-pencil-square-o"></i> <?php echo e($article->name); ?></a></p>
                  <p class="card-text"><?php echo e(mb_strimwidth($article->description, 0, 200, "...")); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                   <a class="btn btn-success btn-servicesz  scrollto" href="<?php echo e(route('adopts',md5($article->id))); ?>?id=<?php echo e($article->id); ?>">
                        <i class="fa fa-book"></i> Adopt</a></span> </div>
                      
                    
                    </div>
                    </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/frontend/pages/adopts.blade.php ENDPATH**/ ?>