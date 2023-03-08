<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.contactCompany.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.contact-companies.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="company_name"><?php echo e(trans('cruds.contactCompany.fields.company_name')); ?></label>
                <input class="form-control <?php echo e($errors->has('company_name') ? 'is-invalid' : ''); ?>" type="text" name="company_name" id="company_name" value="<?php echo e(old('company_name', '')); ?>">
                <?php if($errors->has('company_name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('company_name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contactCompany.fields.company_name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="company_address"><?php echo e(trans('cruds.contactCompany.fields.company_address')); ?></label>
                <input class="form-control <?php echo e($errors->has('company_address') ? 'is-invalid' : ''); ?>" type="text" name="company_address" id="company_address" value="<?php echo e(old('company_address', '')); ?>">
                <?php if($errors->has('company_address')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('company_address')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contactCompany.fields.company_address_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="company_website"><?php echo e(trans('cruds.contactCompany.fields.company_website')); ?></label>
                <input class="form-control <?php echo e($errors->has('company_website') ? 'is-invalid' : ''); ?>" type="text" name="company_website" id="company_website" value="<?php echo e(old('company_website', '')); ?>">
                <?php if($errors->has('company_website')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('company_website')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contactCompany.fields.company_website_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="company_email"><?php echo e(trans('cruds.contactCompany.fields.company_email')); ?></label>
                <input class="form-control <?php echo e($errors->has('company_email') ? 'is-invalid' : ''); ?>" type="text" name="company_email" id="company_email" value="<?php echo e(old('company_email', '')); ?>">
                <?php if($errors->has('company_email')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('company_email')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contactCompany.fields.company_email_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kws-donate\resources\views/admin/contactCompanies/create.blade.php ENDPATH**/ ?>