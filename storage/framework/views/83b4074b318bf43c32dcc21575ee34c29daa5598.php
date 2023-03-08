<?php $__env->startSection('content'); ?>
<section class="section home info-block"><img class="img--bg" src="img/kws-Rhino.jpg" alt="img">
					<div class="container">
						<div class="row">
							<div class="col-xl-6">
								<div class="heading heading--primary">
									<h2 class="heading__title color--white"><span>Help keep wildlife alive in </span> <br><span>the 21st century and beyond</span></h2>
									<p class="color--white">Your partnership & donations will help support wildlife conservation and management efforts.	</p><a class="info-block__button buttons button--primary" href="/corporate">DONATE</a>
								</div>
							</div>
						</div>
					</div>
				</section>
<section class="section about no-padding-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xl-5">
								<div class="heading heading--style-2 bottom-30"><span class="heading__pre-title">About us</span>
									<h2 class="heading__title no-margin-bottom"><span>our main goal is to</span> <span>protect animals</span></h2>
								</div><a class="video-trigger video-trigger--primary video-trigger--about bottom-30" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span class="video-trigger__icon"><i class="fa fa-play" aria-hidden="true"></i></span><span>Watch Video</span></a>
							</div>
							<div class="col-xl-7">
								<p><strong>The central mandate of Kenya Wildlife Service is to conserve the natural environment, fauna and flora of Kenya for the benefit of present and future generations. For Kenya Wildlife Service EVERY PENNY COUNTS to ensure that it continues to play this pivotal role in creating a level of certainty for Kenya’s wildlife conservation and management efforts..</strong></p>
								<p class="no-margin-bottom">In our work at KWS, we never forget that in spirit, our natural legacy belongs not just to Kenyans but to humanity as a whole. In conserving and protecting, we take pride in knowing we undertake a most sensitive task but one with greater ramifications for this nation.  Your partnership will help support wildlife conservation and management efforts.</p><a class="button button--primary top-30" href="#">Join us. Make a Difference! </a>
							</div>
						</div>
					</div>
				</section>
<section class="section">

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadows sm:rounded-lg">
                <div class="container theme-background-white main-body">
      <div class="col-md-12 ml-12">
        <div class="row donate-bar">  
          <div class="col-md-4 theme-dark">
            GIVE WHERE NEEDED MOST
          </div>
          <div class="col-md-8">
            <ul class="nav navbar-nav navbar-left donate-buttons" id="donate-buttons">
              <li><a href="#">
                <button class="btn-blue active" data-dollars='25' data-impact="Helps to support our conservation work">
                  $25
                </button>
              </a></li>
              <li><a href="#">
                <button class="btn-blue" data-dollars='50' data-impact="Helps to support our conservation work">
                  $50
                </button>
              </a></li>
              <li><a href="#">
                <button class="btn-blue" data-dollars='100' data-impact="Helps to support our conservation work">
                  $100
                </button>
              </a></li>
              <li><a href="#">
                <button class="btn-blue" data-dollars='500' data-impact="Helps to support our conservation work">
                  $500
                </button>
              </a></li>
              <li id="other"><a href="#">
                <button class="btn-blue-other" data-dollars='other' data-impact="Thank you!">
                  OTHER
                </button>
              </a></li>
              <li id="other-input">
                <span>$</span>
               <input data-impact="That’s great. Thank you!">
              </li>
              <li><a href="#">
                <button class="btn-green" data-toggle="modal" data-target="#myModal">
                  DONATE
                </button>
              </a></li>
              <li style="display: none;"><a href="#">
                LEARN MORE<i class="fa fa-chevron-right margin-left"></i>
              </a></li>
            </ul>
            <p class="impact">
              Helps in conservation work
            </p>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header well text-center theme-background-orange">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h2>You’re Donating:</h2>
                    <h1 style="font-size: 5.5em; margin-top: 0;">$<span id="price"></span></h1>
                    <em>Thank you!</em>
                  </div>
                  <div class="modal-body">
                    <div class="row">  
                      <section class="col-md-12">
                      <form method="POST" action="/donate" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                          <fieldset class="col-md-12 ml-6">
                            <legend>
                              Your personal info
                            </legend>
                            <label>First Name</label>
                            <input type="string" name="first_name" class="form-control">
                            <label>Last Name</label>
                            <input type="string" name="last_name" class="form-control">
                            <label>Your email</label>
                            <input type="email" name="email" class="form-control">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control">
                            <label>City, State, Zip Code</label>
                            <input type="text" name="location" class="form-control">
                            <input id="bacon" type="hidden" class="bacon" value="" name="amount">
                            <input id="curr" type="hidden" class="bacon" value="USD" name="currency">
                            <?php if(config('services.recaptcha.key')): ?>
    <div class="g-recaptcha"
        data-sitekey="<?php echo e(config('services.recaptcha.key')); ?>">
    </div>
<?php endif; ?>
                          </fieldset>
                          
                        
                      </section>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                    <button type="submit" class="btn-green">CONTINUE</button>
                  </div>
                  </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
        </div><!--/.donate-bar-->
      </div><!-- /.col-md-12 -->
    </div>


                        </div>
                  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kws-donate\resources\views/welcome.blade.php ENDPATH**/ ?>