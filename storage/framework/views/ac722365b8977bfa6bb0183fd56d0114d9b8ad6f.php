<?php $__env->startSection('content'); ?>
  <section class="section promo-primary">
    <picture>
        <source srcset="/img/donation.jpg" media="(min-width: 992px)"><img class="img--bg" src="/img/donation.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item">
                        <h1 class="promo-primary__title"><span>Check </span> <span>Out</span></h1>
                        <span class="promo-primary__pre-title">Make payment</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
               <?php echo $data; ?>

       

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/frontend/transactions/visa.blade.php ENDPATH**/ ?>