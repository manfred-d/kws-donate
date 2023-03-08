<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            <?php echo e(trans('panel.site_title')); ?>

        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="<?php echo e(route("admin.home")); ?>" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                <?php echo e(trans('global.dashboard')); ?>

            </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/permissions*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/roles*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/users*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/audit-logs*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.userManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.permissions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.permission.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.roles.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.role.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.users.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.user.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('audit_log_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.audit-logs.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.auditLog.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('basic_c_r_m_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/crm-statuses*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/crm-customers*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/crm-notes*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/crm-documents*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.basicCRM.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_status_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-statuses.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-statuses") || request()->is("admin/crm-statuses/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmStatus.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_customer_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-customers.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-customers") || request()->is("admin/crm-customers/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmCustomer.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_note_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-notes.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-notes") || request()->is("admin/crm-notes/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-sticky-note c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmNote.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_document_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-documents.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-documents") || request()->is("admin/crm-documents/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmDocument.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/content-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/content-tags*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/content-pages*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.contentManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.content-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/content-categories") || request()->is("admin/content-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contentCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_tag_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.content-tags.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/content-tags") || request()->is("admin/content-tags/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contentTag.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.content-pages.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/content-pages") || request()->is("admin/content-pages/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-file c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contentPage.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_alert_access')): ?>
            <li class="c-sidebar-nav-item">
                <a href="<?php echo e(route("admin.user-alerts.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "c-active" : ""); ?>">
                    <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.userAlert.title')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/contact-companies*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/contact-contacts*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-phone-square c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.contactManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.contact-companies.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/contact-companies") || request()->is("admin/contact-companies/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contactCompany.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_contact_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.contact-contacts.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/contact-contacts") || request()->is("admin/contact-contacts/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contactContact.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign_access')): ?>
            <li class="c-sidebar-nav-item">
                <a href="<?php echo e(route("admin.campaigns.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/campaigns") || request()->is("admin/campaigns/*") ? "c-active" : ""); ?>">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.campaign.title')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('donation_access')): ?>
            <li class="c-sidebar-nav-item">
                <a href="<?php echo e(route("admin.donations.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/donations") || request()->is("admin/donations/*") ? "c-active" : ""); ?>">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.donation.title')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_access')): ?>
            <li class="c-sidebar-nav-item">
                <a href="<?php echo e(route("admin.transactions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/transactions") || request()->is("admin/transactions/*") ? "c-active" : ""); ?>">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.transaction.title')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/product-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/product-tags*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/products*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.productManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.product-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.productCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_tag_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.product-tags.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/product-tags") || request()->is("admin/product-tags/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.productTag.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.products.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.product.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/faq-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/faq-questions*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.faqManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.faq-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.faqCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_question_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.faq-questions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.faqQuestion.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('adoption_access')): ?>
            <li class="c-sidebar-nav-item">
                <a href="<?php echo e(route("admin.adoptions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/adoptions") || request()->is("admin/adoptions/*") ? "c-active" : ""); ?>">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.adoption.title')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php ($unread = \App\Models\QaTopic::unreadCount()); ?>
            <li class="c-sidebar-nav-item">
                <a href="<?php echo e(route("admin.messenger.index")); ?>" class="<?php echo e(request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : ""); ?> c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span><?php echo e(trans('global.messages')); ?></span>
                    <?php if($unread > 0): ?>
                        <strong>( <?php echo e($unread); ?> )</strong>
                    <?php endif; ?>

                </a>
            </li>
            <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : ''); ?>" href="<?php echo e(route('profile.password.edit')); ?>">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            <?php echo e(trans('global.change_password')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
    </ul>

</div><?php /**PATH C:\wamp64\www\kws-donate\resources\views/partials/menu.blade.php ENDPATH**/ ?>