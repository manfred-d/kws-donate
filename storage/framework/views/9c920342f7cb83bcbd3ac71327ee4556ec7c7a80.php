<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.donation.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.donations.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="donor_id"><?php echo e(trans('cruds.donation.fields.donor')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('donor') ? 'is-invalid' : ''); ?>" name="donor_id" id="donor_id">
                    <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('donor_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('donor')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('donor')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.donation.fields.donor_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required"><?php echo e(trans('cruds.donation.fields.currency')); ?></label>
                <select class="form-control <?php echo e($errors->has('currency') ? 'is-invalid' : ''); ?>" name="currency" id="currency" required>
                    <option value disabled <?php echo e(old('currency', null) === null ? 'selected' : ''); ?>><?php echo e(trans('global.pleaseSelect')); ?></option>
                    <?php $__currentLoopData = App\Models\Donation::CURRENCY_SELECT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('currency', '') === (string) $key ? 'selected' : ''); ?>><?php echo e($label); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('currency')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('currency')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.donation.fields.currency_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="amount"><?php echo e(trans('cruds.donation.fields.amount')); ?></label>
                <input class="form-control <?php echo e($errors->has('amount') ? 'is-invalid' : ''); ?>" type="number" name="amount" id="amount" value="<?php echo e(old('amount', '')); ?>" step="0.01" required>
                <?php if($errors->has('amount')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('amount')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.donation.fields.amount_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="campaign_id"><?php echo e(trans('cruds.donation.fields.campaign')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('campaign') ? 'is-invalid' : ''); ?>" name="campaign_id" id="campaign_id" required>
                    <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('campaign_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('campaign')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('campaign')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.donation.fields.campaign_helper')); ?></span>
            </div>
            <div class="form-group">
                <label><?php echo e(trans('cruds.donation.fields.status')); ?></label>
                <select class="form-control <?php echo e($errors->has('status') ? 'is-invalid' : ''); ?>" name="status" id="status">
                    <option value disabled <?php echo e(old('status', null) === null ? 'selected' : ''); ?>><?php echo e(trans('global.pleaseSelect')); ?></option>
                    <?php $__currentLoopData = App\Models\Donation::STATUS_SELECT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('status', '') === (string) $key ? 'selected' : ''); ?>><?php echo e($label); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('status')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('status')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.donation.fields.status_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="type"><?php echo e(trans('cruds.donation.fields.type')); ?></label>
                <input class="form-control <?php echo e($errors->has('type') ? 'is-invalid' : ''); ?>" type="text" name="type" id="type" value="<?php echo e(old('type', '')); ?>">
                <?php if($errors->has('type')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('type')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.donation.fields.type_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kws-donate\resources\views/admin/donations/create.blade.php ENDPATH**/ ?>