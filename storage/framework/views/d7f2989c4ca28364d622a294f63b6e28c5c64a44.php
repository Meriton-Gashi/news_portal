

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($page_data->faq_title); ?></h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(HOME); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($page_data->faq_title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">

            <?php if($page_data->faq_detail != ''): ?>
            <div class="col-md-12">
                <?php echo $page_data->faq_detail; ?>

            </div>
            <?php endif; ?>

            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <?php $i=0; ?>
                    <?php $__currentLoopData = $faq_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++; ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo e($i); ?>">
                            <button class="accordion-button <?php if($loop->iteration != 1): ?> collapsed <?php endif; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($i); ?>" aria-expanded="<?php if($loop->iteration == 1): ?> true <?php else: ?> false <?php endif; ?>" aria-controls="collapse<?php echo e($i); ?>">
                                <?php echo e($item->faq_title); ?>

                            </button>
                            </h2>
                            <div id="collapse<?php echo e($i); ?>" class="accordion-collapse collapse <?php if($loop->iteration == 1): ?> show <?php endif; ?>" aria-labelledby="heading<?php echo e($i); ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo $item->faq_detail; ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/front/faq.blade.php ENDPATH**/ ?>