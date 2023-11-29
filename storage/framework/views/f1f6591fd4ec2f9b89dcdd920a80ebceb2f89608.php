

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($post_detail->post_title); ?></h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(HOME); ?></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('category',$post_detail->sub_category_id)); ?>"><?php echo e($post_detail->rSubCategory->sub_category_name); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($post_detail->post_title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            

            <div class="col-lg-8 col-md-6">
                <div class="featured-photo">
                    <img src="<?php echo e(asset('uploads/'.$post_detail->post_photo)); ?>" alt="">
                </div>
                <div class="sub">
                    <div class="item">
                        <b><i class="fas fa-user"></i></b>
                        <a href=""><?php echo e($user_data->name); ?></a>

                    </div>
                    <div class="item">
                        <b><i class="fas fa-edit"></i></b>
                        <a href="<?php echo e(route('category',$post_detail->sub_category_id)); ?>"><?php echo e($post_detail->rSubCategory->sub_category_name); ?></a>
                    </div>
                    <div class="item">
                        <b><i class="fas fa-clock"></i></b>
                        <?php
                        $ts = strtotime($post_detail->updated_at);
                        $updated_date = date('d F, Y',$ts);
                        ?>
                        <?php echo e($updated_date); ?>

                    </div>
                    <div class="item">
                        <b><i class="fas fa-eye"></i></b>
                        <?php echo e($post_detail->visitors); ?>

                    </div>
                </div>
                <div class="main-text">
                    <?php echo $post_detail->post_detail; ?>

                </div>
                <div class="tag-section">
                    <h2><?php echo e(TAGS); ?></h2>
                    <div class="tag-section-content">
                        <?php $__currentLoopData = $tag_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('tag_posts_show',$item->tag_name)); ?>"><span class="badge bg-success"><?php echo e($item->tag_name); ?></span></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <?php if($post_detail->is_share == 1): ?>
                <div class="share-content">
                    <h2><?php echo e(SHARE); ?></h2>
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
                <?php endif; ?>

                <?php if($post_detail->is_comment == 1): ?>
                <div class="comment-fb">
                    <h2><?php echo e(COMMENT); ?></h2>
                    <div id="disqus_thread"></div>
                    <?php echo $global_setting_data->disqus_code; ?>

                </div>
                <?php endif; ?>

                <div class="related-news">
                    <div class="related-news-heading">
                        <h2><?php echo e(RELATED_NEWS); ?></h2>
                    </div>
                    <div class="related-post-carousel owl-carousel owl-theme">

                        <?php $__currentLoopData = $related_post_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id == $post_detail->id): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                        <div class="item">
                            <div class="photo">
                                <img src="<?php echo e(asset('uploads/'.$item->post_photo)); ?>" alt="">
                            </div>
                            <div class="category">
                                <span class="badge bg-success"><?php echo e($item->rSubCategory->sub_category_name); ?></span>
                            </div>
                            <h3><a href="<?php echo e(route('news_detail',$item->id)); ?>"><?php echo e($item->post_title); ?></a></h3>
                            <div class="date-user">
                                <div class="user">
                                    <?php if($item->author_id==0): ?>
                                        <?php
                                        $user_data = \App\Models\Admin::where('id',$item->admin_id)->first();
                                        ?>
                                    <?php else: ?>
                                        <?php
                                        $user_data = \App\Models\Author::where('id',$item->author_id)->first();
                                        ?>
                                    <?php endif; ?>
                                    <a href="javascript:void;"><?php echo e($user_data->name); ?></a>
                                </div>
                                <div class="date">
                                    <?php
                                    $ts = strtotime($item->updated_at);
                                    $updated_date = date('d F, Y',$ts);
                                    ?>
                                    <a href="javascript:void;"><?php echo e($updated_date); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sidebar-col">

                <?php echo $__env->make('front.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\news_portal_project\resources\views/front/post_detail.blade.php ENDPATH**/ ?>