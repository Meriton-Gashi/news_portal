

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($page_data->login_title); ?></h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(HOME); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($page_data->login_title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo e(route('login_submit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="login-form">
                        <div class="mb-3">
                            <label for="" class="form-label"><?php echo e(EMAIL_ADDRESS); ?></label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><?php echo e(PASSWORD); ?></label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website"><?php echo e(LOGIN); ?></button>
                            <a href="<?php echo e(route('forget_password')); ?>"><?php echo e(FORGET_PASSWORD); ?></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/front/login.blade.php ENDPATH**/ ?>