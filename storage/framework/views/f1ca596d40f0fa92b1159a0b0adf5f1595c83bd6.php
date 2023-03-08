<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.faqCategory.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.faq-categories.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="category"><?php echo e(trans('cruds.faqCategory.fields.category')); ?></label>
                <input class="form-control <?php echo e($errors->has('category') ? 'is-invalid' : ''); ?>" type="text" name="category" id="category" value="<?php echo e(old('category', '')); ?>" required>
                <?php if($errors->has('category')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('category')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.faqCategory.fields.category_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/admin/faqCategories/create.blade.php ENDPATH**/ ?>