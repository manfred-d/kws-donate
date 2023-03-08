<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.donation.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.donations.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($donation->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.donor')); ?>

                        </th>
                        <td>
                            <?php echo e($donation->donor->first_name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.currency')); ?>

                        </th>
                        <td>
                            <?php echo e(App\Models\Donation::CURRENCY_SELECT[$donation->currency] ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.amount')); ?>

                        </th>
                        <td>
                            <?php echo e($donation->amount); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.campaign')); ?>

                        </th>
                        <td>
                            <?php echo e($donation->campaign->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.status')); ?>

                        </th>
                        <td>
                            <?php echo e(App\Models\Donation::STATUS_SELECT[$donation->status] ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.donation.fields.type')); ?>

                        </th>
                        <td>
                            <?php echo e($donation->type); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.donations.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.relatedData')); ?>

    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#donation_transactions" role="tab" data-toggle="tab">
                <?php echo e(trans('cruds.transaction.title')); ?>

            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="donation_transactions">
            <?php if ($__env->exists('admin.donations.relationships.donationTransactions', ['transactions' => $donation->donationTransactions])) echo $__env->make('admin.donations.relationships.donationTransactions', ['transactions' => $donation->donationTransactions], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/admin/donations/show.blade.php ENDPATH**/ ?>