<?php $__env->startSection('content'); ?>
<section class="section promo-primary">
    <picture>
        <source srcset="/img/Hyenas.jpg" media="(min-width: 992px)"><img class="img--bg" src="/img/Hyenas.jpg" alt="img">
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
      
    <!-- Start donate Area -->
			<section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 pull-left header-text">
							<h1>Adopt Me</h1>
							<p>
								Keep Me Alive!
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
				<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>				
          <div class="card col-md-12  box-shadow">
                    <?php if($article->photo): ?>
              <img class="card-img-top img img-2 d-flex justify-content-center align-items-center" src="<?php echo e('https://kikosi.com/projects/kws-donate/storage/app/public/'.$article->photo->id.'/' . $article->photo->file_name); ?>" alt="<?php echo e($article->name); ?>" width="150px" height="150px">
                 <?php endif; ?>
                  <small class="text-muted"> <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-info"><?php echo e($item->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </small>
                <div class="card-body">
                <p class="card-title">   <a href="<?php echo e(route('adopt')); ?>?id=<?php echo e($article->id); ?>">
                        <i class="fa fa-pencil-square-o"></i> <?php echo e($article->name); ?></a></p>
                  <p class="card-text"><?php echo e(mb_strimwidth($article->description, 0, 200, "...")); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                   
                    
                    </div>
                    </div>
                </div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div></div>
							<div class="single-info">
								<h4>Transperancy All the Way</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
						
						</div>
						<div class="col-lg-6 contact-right p-4">
                                                    <form method="post" class="booking-form" id="myForm" action="/Adbobt">
                                                        <?php echo csrf_field(); ?>
								 	<div class="form">
								 		<div class="col-lg-12 d-flex flex-column">
							 				<select name="type" class="app-select form-control" required>
												<option data-display="Project you want to donate">Level</option>
												<option value="1">Level 1</option>
												<option value="2">Level 2</option>
												<option value="3">Level 3</option>
											</select>
								 		</div>
							 			<div class="col-lg-6 d-flex flex-column">
											<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
                                                                                        <input type="hidden" name="animalid" value="<?php echo e($article->id); ?>">
                                                                                        <input type="hidden" name='currency' value="USD">
                                                                                </div>
										<div class="col-lg-6 d-flex flex-column">
											<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="form-control mt-20" required="" type="email">
										</div>
										<div class="col-lg-12 d-flex flex-column">
											<input name="amount" placeholder="Adoption amount (USD)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Donation amount (USD)'" class="form-control mt-20" required="" type="text">

											<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>

										<div class="col-lg-12 d-flex justify-content-end send-btn">
											<button class="btn-primary form__submit submit-btn btn btn-success mt-20 text-uppercase  ">Adopt<span class="lnr lnr-arrow-right"></span></button>
										</div>

										<div class="alert-msg"></div>
									</div>
					  		</form>
					  		
						</div>
					</div>
				</div>
			</section>
			<!-- End donate Area -->
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/frontend/pages/adopta.blade.php ENDPATH**/ ?>