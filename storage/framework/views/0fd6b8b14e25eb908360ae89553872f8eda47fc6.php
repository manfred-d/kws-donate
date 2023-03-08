<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.faqQuestion.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.faq-questions.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="category_id"><?php echo e(trans('cruds.faqQuestion.fields.category')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('category') ? 'is-invalid' : ''); ?>" name="category_id" id="category_id" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('category_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('category')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('category')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.faqQuestion.fields.category_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="question"><?php echo e(trans('cruds.faqQuestion.fields.question')); ?></label>
                <textarea class="form-control <?php echo e($errors->has('question') ? 'is-invalid' : ''); ?>" name="question" id="question" required><?php echo e(old('question')); ?></textarea>
                <?php if($errors->has('question')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('question')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.faqQuestion.fields.question_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="answer"><?php echo e(trans('cruds.faqQuestion.fields.answer')); ?></label>
                <textarea class="form-control <?php echo e($errors->has('answer') ? 'is-invalid' : ''); ?>" name="answer" id="answer" required><?php echo e(old('answer')); ?></textarea>
                <?php if($errors->has('answer')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('answer')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.faqQuestion.fields.answer_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/admin/faqQuestions/create.blade.php ENDPATH**/ ?>