

<?php $__env->startSection('content'); ?>
<section class="section home info-block"><img class="img--bg" src="img/tembo2.png" alt="img">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="heading heading--primary">
                    <h2 class="heading__title color--white"><span>Help keep wildlife alive  </span> <br><span></span></h2>
<!--                    <p class="color--white">Your partnership & donations will help support wildlife conservation and management efforts.	</p>
                    -->
                    <a class="form__submit" href="/corporate#donate"><i class="fas fa-heart"></i> DONATE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section about no-padding-bottom" style="background-color: #323232; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="heading heading--style-2 bottom-30"><span class="heading__pre-title " >About us</span>
                    <h2 class="heading__title no-margin-bottom"><span>our main goal is to</span> <span>protect wildlife.</span></h2>
                </div><a class="video-trigger video-trigger--primary video-trigger--about bottom-30" href="https://www.youtube.com/watch?v=W1XpKG-ftJc"><span class="video-trigger__icon"><i class="fa fa-play" aria-hidden="true"></i></span><span>Watch Video</span></a>
            </div>
            <div class="col-xl-7">
                <p>The central mandate of Kenya Wildlife Service is to conserve the natural environment, fauna and flora of Kenya for the benefit of present and future generations. For Kenya Wildlife Service EVERY PENNY COUNTS to ensure that it continues to play this pivotal role in creating a level of certainty for Kenya’s wildlife conservation and management efforts.</p>
                <p class="no-margin-bottom">In our work at KWS, we never forget that in spirit, our natural legacy belongs not just to Kenyans but to humanity as a whole. In conserving and protecting, we take pride in knowing we undertake a most sensitive task but one with greater ramifications for this nation.  Your partnership will help support wildlife conservation and management efforts.</p><a class="form__submit" href="#donate"><i class="fa fa-handshake-o" aria-hidden="true"></i> Help us. Make a Difference! </a>
            </div>
        </div>
    </div>
</section>
<!-- Start donate Area -->
<section class="donate-area relative section-gap" id="donate">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-end">
            <div class="col-lg-6 col-sm-12 pb-80 header-text">
                <h1 style="margin-top: 24px;" >Donate Now</h1>
                <p>Your donations will help support wildlife conservation and management efforts.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 contact-left">
                 <div class="single-info">
                    <h4>Donor Benefits</h4>
                <p>Participation on the biodiversity programme supported e.g. translocation, collaring</p>
                <p>Participate in conservation events (e.g., World Wildlife Day, World Elephant Day, Recovery action plans and Park Management Plans launch</p>
                <p>Recognition on KWS social media and website</p>
                <p>Quartely visits to the supported park.</p>
                </div>
                <div class="single-info">
                    <h4>DONATE AND HELP KEEP WILDLIFE ALIVE</h4>

                </div>

            </div>
            <div class="col-lg-6 contact-right">
                <form class="booking-form" id="myForm" action="/donate">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <select class="app-select form-control form__select form-control select2 <?php echo e($errors->has('campaign') ? 'is-invalid' : ''); ?>"  name="campaign_id" id="campaign_id" required>
                                
                                <?php echo e($campaigns = App\Models\Campaign::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '')); ?>


                                <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>" <?php echo e(old('campaign_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="first_name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="form-control mt-20" required="" type="email">
                        </div>
                        <div class="col-lg-12 d-flex flex-column">
                            <input name="amount" placeholder="Donation amount (USD)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Donation amount (USD)'" class="form-control mt-20" required="" type="text">
                            <input id="curr" type="hidden" class="bacon" value="USD" name="currency">
                            <textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-end send-btn">
                            <button class="form__submit mt-20 text-uppercase "><i class="fas fa-heart"></i> donate<span class="lnr lnr-arrow-right"></span></button>
                        </div>

                        <div class="alert-msg"></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- End donate Area -->
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
                                    <div class="modal-header well text-center theme-background-grey">
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\kws_donate\resources\views/welcome.blade.php ENDPATH**/ ?>