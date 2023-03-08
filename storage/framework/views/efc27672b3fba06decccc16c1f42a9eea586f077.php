<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.crmCustomer.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.crm-customers.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="first_name"><?php echo e(trans('cruds.crmCustomer.fields.first_name')); ?></label>
                <input class="form-control <?php echo e($errors->has('first_name') ? 'is-invalid' : ''); ?>" type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name', '')); ?>" required>
                <?php if($errors->has('first_name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('first_name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.first_name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="last_name"><?php echo e(trans('cruds.crmCustomer.fields.last_name')); ?></label>
                <input class="form-control <?php echo e($errors->has('last_name') ? 'is-invalid' : ''); ?>" type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', '')); ?>">
                <?php if($errors->has('last_name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('last_name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.last_name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id"><?php echo e(trans('cruds.crmCustomer.fields.status')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('status') ? 'is-invalid' : ''); ?>" name="status_id" id="status_id" required>
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('status_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('status')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('status')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.status_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="email"><?php echo e(trans('cruds.crmCustomer.fields.email')); ?></label>
                <input class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" type="text" name="email" id="email" value="<?php echo e(old('email', '')); ?>">
                <?php if($errors->has('email')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.email_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="phone"><?php echo e(trans('cruds.crmCustomer.fields.phone')); ?></label>
                <input class="form-control <?php echo e($errors->has('phone') ? 'is-invalid' : ''); ?>" type="text" name="phone" id="phone" value="<?php echo e(old('phone', '')); ?>">
                <?php if($errors->has('phone')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('phone')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.phone_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="address"><?php echo e(trans('cruds.crmCustomer.fields.address')); ?></label>
                <input class="form-control <?php echo e($errors->has('address') ? 'is-invalid' : ''); ?>" type="text" name="address" id="address" value="<?php echo e(old('address', '')); ?>">
                <?php if($errors->has('address')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('address')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.address_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="skype"><?php echo e(trans('cruds.crmCustomer.fields.skype')); ?></label>
                <input class="form-control <?php echo e($errors->has('skype') ? 'is-invalid' : ''); ?>" type="text" name="skype" id="skype" value="<?php echo e(old('skype', '')); ?>">
                <?php if($errors->has('skype')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('skype')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.skype_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="website"><?php echo e(trans('cruds.crmCustomer.fields.website')); ?></label>
                <input class="form-control <?php echo e($errors->has('website') ? 'is-invalid' : ''); ?>" type="text" name="website" id="website" value="<?php echo e(old('website', '')); ?>">
                <?php if($errors->has('website')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('website')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.website_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="description"><?php echo e(trans('cruds.crmCustomer.fields.description')); ?></label>
                <textarea class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" name="description" id="description"><?php echo e(old('description')); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.crmCustomer.fields.description_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kws-donate\resources\views/admin/crmCustomers/create.blade.php ENDPATH**/ ?>