<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.userAlert.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.user-alerts.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="alert_text"><?php echo e(trans('cruds.userAlert.fields.alert_text')); ?></label>
                <input class="form-control <?php echo e($errors->has('alert_text') ? 'is-invalid' : ''); ?>" type="text" name="alert_text" id="alert_text" value="<?php echo e(old('alert_text', '')); ?>" required>
                <?php if($errors->has('alert_text')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('alert_text')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.userAlert.fields.alert_text_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="alert_link"><?php echo e(trans('cruds.userAlert.fields.alert_link')); ?></label>
                <input class="form-control <?php echo e($errors->has('alert_link') ? 'is-invalid' : ''); ?>" type="text" name="alert_link" id="alert_link" value="<?php echo e(old('alert_link', '')); ?>">
                <?php if($errors->has('alert_link')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('alert_link')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.userAlert.fields.alert_link_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="users"><?php echo e(trans('cruds.userAlert.fields.user')); ?></label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0"><?php echo e(trans('global.select_all')); ?></span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0"><?php echo e(trans('global.deselect_all')); ?></span>
                </div>
                <select class="form-control select2 <?php echo e($errors->has('users') ? 'is-invalid' : ''); ?>" name="users[]" id="users" multiple>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('users', [])) ? 'selected' : ''); ?>><?php echo e($user); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('users')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('users')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.userAlert.fields.user_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/admin/userAlerts/create.blade.php ENDPATH**/ ?>