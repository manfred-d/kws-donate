<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <?php echo e(trans('Make Payment')); ?> <?php echo e(trans('cruds.transaction.title')); ?>

                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="<?php echo e(route('frontend.transactions.index')); ?>">
                                <?php echo e(trans('Pay')); ?>

                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        <?php echo e(trans('cruds.transaction.fields.id')); ?>

                                    </th>
                                    <td>
                                        <?php echo e($transaction->id); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo e(trans('cruds.transaction.fields.donation')); ?>

                                    </th>
                                    <td>
                                        <?php echo e($transaction->donation->donation_id ?? ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo e(trans('cruds.transaction.fields.ref')); ?>

                                    </th>
                                    <td>
                                        <?php echo e($transaction->ref); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo e(trans('cruds.transaction.fields.status')); ?>

                                    </th>
                                    <td>
                                        <?php echo e($transaction->status); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo e(trans('cruds.transaction.fields.amount')); ?>

                                    </th>
                                    <td>
                                       <?php echo e($transaction->donation->currency ?? ''); ?> <?php echo e($transaction->amount); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo e(trans('cruds.transaction.fields.channel')); ?>

                                    </th>
                                    <td>
                                        <?php echo e($transaction->channel); ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                       <a class="btn btn-default" href="<?php echo e(route('frontend.transactions.index')); ?>">
                                <?php echo e(trans('Pay')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kws-donate\resources\views/frontend/transactions/pay.blade.php ENDPATH**/ ?>