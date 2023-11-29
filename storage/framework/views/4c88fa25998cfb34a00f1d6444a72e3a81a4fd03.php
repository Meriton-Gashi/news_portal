<?php if(!session()->get('session_short_name')): ?>
    <?php
    $current_short_name = $global_short_name;
    ?>
<?php else: ?>
    <?php
    $current_short_name = session()->get('session_short_name');
    ?>
<?php endif; ?>
<?php
    $current_language_id = \App\Models\Language::where('short_name',$current_short_name)->first()->id;
?>

<div class="website-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>"><?php echo e(HOME); ?></a>
                            </li>

                            <?php $__currentLoopData = $global_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                           
                            <?php if($current_language_id == $item->language_id): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javscript:void;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e($item->category_name); ?>

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php $__currentLoopData = $item->rSubCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('category',$item2->id)); ?>"><?php echo e($item2->sub_category_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(GALLERY); ?>

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?php echo e(route('photo_gallery')); ?>"><?php echo e(PHOTO_GALLERY); ?></a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('video_gallery')); ?>"><?php echo e(VIDEO_GALLERY); ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\laragon\www\news_portal_project\resources\views/front/layout/nav.blade.php ENDPATH**/ ?>