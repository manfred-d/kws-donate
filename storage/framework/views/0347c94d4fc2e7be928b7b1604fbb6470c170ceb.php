<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.adoption.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.adoptions.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="adpotee_id"><?php echo e(trans('cruds.adoption.fields.adpotee')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('adpotee') ? 'is-invalid' : ''); ?>" name="adpotee_id" id="adpotee_id" required>
                    <?php $__currentLoopData = $adpotees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('adpotee_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('adpotee')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('adpotee')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.adoption.fields.adpotee_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="transaction_id"><?php echo e(trans('cruds.adoption.fields.transaction')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('transaction') ? 'is-invalid' : ''); ?>" name="transaction_id" id="transaction_id">
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('transaction_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('transaction')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('transaction')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.adoption.fields.transaction_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="animal_id"><?php echo e(trans('cruds.adoption.fields.animal')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('animal') ? 'is-invalid' : ''); ?>" name="animal_id" id="animal_id" required>
                    <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('animal_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('animal')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('animal')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.adoption.fields.animal_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/admin/adoptions/create.blade.php ENDPATH**/ ?>