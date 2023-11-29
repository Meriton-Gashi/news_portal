<?php if(!session()->get('session_short_name')): ?>
    <?php
    $current_short_name = $global_short_name;
    ?>
<?php else: ?>
    <?php
    $current_short_name = session()->get('session_short_name');
    ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>        
		
        <link rel="icon" type="image/png" href="<?php echo e(asset('uploads/'.$global_setting_data->favicon)); ?>">

        <?php echo $__env->make('front.layout.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('front.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6212352ed76fda0a"></script>        
        
        <!-- Google Analytics -->
        <?php if($global_setting_data->analytic_status == 'Show'): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($global_setting_data->analytic_id); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo e($global_setting_data->analytic_id); ?>');
        </script>
        <?php endif; ?>
        
        <style>
            .website-menu,
            .website-menu .bg-primary,
            .acme-news-ticker-label,
            .search-section button[type="submit"],
            .home-content .left .news-total-item .see-all a,
            .video-content,
            .footer ul.social li a,
            .footer input[type="submit"],
            .scroll-top,
            .widget .poll button,
            .nav-pills .nav-link.active,
            .related-news .owl-nav .owl-prev,
            .related-news .owl-nav .owl-next,
            .bg-website,
            .page-item.active .page-link {
                background: #<?php echo e($global_setting_data->theme_color_1); ?>!important;
            }

            .acme-news-ticker,
            .page-item.active .page-link {
                border-color: #<?php echo e($global_setting_data->theme_color_1); ?>!important;
            }

            ul.my-news-ticker li a,
            .home-content .left .news-total-item .left-side h3 a:hover,
            .home-content .left .news-total-item .right-side-item .right h2 a:hover,
            .home-content .left .news-total-item .left-side .date-user .user a:hover, 
            .home-content .left .news-total-item .left-side .date-user .date a:hover,
            .home-content .left .news-total-item .right-side-item .right .date-user .user a:hover, 
            .home-content .left .news-total-item .right-side-item .right .date-user .date a:hover,
            .widget .news-item .right h2 a:hover,
            .widget .news-item .right .date-user .user a:hover, 
            .widget .news-item .right .date-user .date a:hover,
            .nav-pills .nav-link,
            .video-carousel .owl-nav .owl-prev,
            .video-carousel .owl-nav .owl-next,
            li.breadcrumb-item a,
            .category-page-post-item h3 a:hover,
            .category-page-post-item .date-user .user a:hover, 
            .category-page-post-item .date-user .date a:hover,
            .related-news .item h3 a:hover,
            .related-news .item .date-user .user a:hover, 
            .related-news .item .date-user .date a:hover,
            .accordion-button:not(.collapsed),
            .login-form a,
            ul.pagination .page-link {
                color: #<?php echo e($global_setting_data->theme_color_1); ?>!important;
            }


            .home-main .inner .text-inner .category span, 
            .home-main .inner .text-inner .category span a,
            .home-content .left .news-total-item .left-side .category span, 
            .home-content .left .news-total-item .left-side .category span a,
            .home-content .left .news-total-item .right-side-item .right .category span, 
            .home-content .left .news-total-item .right-side-item .right .category span a,
            .widget .news-item .right .category span, 
            .widget .news-item .right .category span a,
            .category-page-post-item .category span, 
            .category-page-post-item .category span a,
            .tag-section-content span {
                background: #<?php echo e($global_setting_data->theme_color_2); ?>!important;
            }

            .nav-pills .nav-link.active,
            .page-item.active .page-link {
                color: #fff!important;
            }

        </style>

    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <?php if($global_setting_data->top_bar_date_status == 'Show'): ?>
                            <li class="today-text"><?php echo e(TODAY); ?>: <?php echo e(date('F d, Y')); ?></li>
                            <?php endif; ?>

                            <?php if($global_setting_data->top_bar_email_status == 'Show'): ?>
                            <li class="email-text"><?php echo e($global_setting_data->top_bar_email); ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="right">

                            <?php
                            $current_lang_id = \App\Models\Language::where('short_name',$current_short_name)->first()->id;

                            $page_data = \App\Models\Page::where('language_id',$current_lang_id)->first();
                            ?>

                            <?php if($page_data->faq_status == 'Show'): ?>
                            <li class="menu"><a href="<?php echo e(route('faq')); ?>"><?php echo e($page_data->faq_title); ?></a></li>
                            <?php endif; ?>

                            <?php if($page_data->about_status == 'Show'): ?>
                            <li class="menu"><a href="<?php echo e(route('about')); ?>"><?php echo e($page_data->about_title); ?></a></li>
                            <?php endif; ?>

                            <?php if($page_data->contact_status == 'Show'): ?>
                            <li class="menu"><a href="<?php echo e(route('contact')); ?>"><?php echo e($page_data->contact_title); ?></a></li>
                            <?php endif; ?>

                            <?php if($page_data->login_status == 'Show'): ?>
                            <li class="menu"><a href="<?php echo e(route('login')); ?>"><?php echo e($page_data->login_title); ?></a></li>
                            <?php endif; ?>

                            <li>
                                <div class="language-switch">
                                    <form action="<?php echo e(route('front_language')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <select name="short_name" onchange="this.form.submit()">
                                            <?php $__currentLoopData = $global_language_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->short_name); ?>" <?php if($item->short_name == $current_short_name): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="logo">
                            <a href="<?php echo e(route('home')); ?>">
                                <img src="<?php echo e(asset('uploads/'.$global_setting_data->logo)); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <?php if($global_top_ad_data->top_ad_status == 'Show'): ?>
                        <div class="ad-section-1">
                            <?php if($global_top_ad_data->top_ad_url == ''): ?>
                                <img src="<?php echo e(asset('uploads/'.$global_top_ad_data->top_ad)); ?>" alt="">
                            <?php else: ?>
                                <a href="<?php echo e($global_top_ad_data->top_ad_url); ?>"><img src="<?php echo e(asset('uploads/'.$global_top_ad_data->top_ad)); ?>" alt=""></a>
                            <?php endif; ?>
                            
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('front.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('main_content'); ?>


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading"><?php echo e(FOOTER_COL_1_HEADING); ?></h2>
                            <p>
                                <?php echo e(FOOTER_COL_1_TEXT); ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading"><?php echo e(FOOTER_COL_2_HEADING); ?></h2>
                            <ul class="useful-links">
                                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(HOME); ?></a></li>

                                <?php if($page_data->terms_status == 'Show'): ?>
                                <li><a href="<?php echo e(route('terms')); ?>"><?php echo e($page_data->terms_title); ?></a></li>
                                <?php endif; ?>

                                <?php if($page_data->privacy_status == 'Show'): ?>
                                <li><a href="<?php echo e(route('privacy')); ?>"><?php echo e($page_data->privacy_title); ?></a></li>
                                <?php endif; ?>

                                <?php if($page_data->disclaimer_status == 'Show'): ?>
                                <li><a href="<?php echo e(route('disclaimer')); ?>"><?php echo e($page_data->disclaimer_title); ?></a></li>
                                <?php endif; ?>

                                <?php if($page_data->contact_status == 'Show'): ?>
                                <li><a href="<?php echo e(route('contact')); ?>"><?php echo e($page_data->contact_title); ?></a></li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading"><?php echo e(FOOTER_COL_3_HEADING); ?></h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right">
                                    <?php echo e(FOOTER_ADDRESS); ?>

                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="right">
                                    <?php echo e(FOOTER_EMAIL); ?>

                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="right">
                                    <?php echo e(FOOTER_PHONE); ?>

                                </div>
                            </div>
                            <ul class="social">
                                <?php $__currentLoopData = $global_social_item_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($item->url); ?>" target="_blank"><i class="<?php echo e($item->icon); ?>"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading"><?php echo e(FOOTER_COL_4_HEADING); ?></h2>
                            <p>
                                <?php echo e(NEWSLETTER_TEXT); ?> 
                            </p>
                            <form action="<?php echo e(route('subscribe')); ?>" method="post" class="form_subscribe_ajax">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="<?php echo e(EMAIL_ADDRESS); ?>">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="<?php echo e(SUBSCRIBE_NOW); ?>">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            <?php echo e(COPYRIGHT_TEXT); ?>

        </div>
     
        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>
		
        <?php echo $__env->make('front.layout.scripts_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <script>
            (function($){
                $(".form_subscribe_ajax").on('submit', function(e){
                    e.preventDefault();
                    $('#loader').show();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                            $(form).find('span.error-text').text('');
                        },
                        success:function(data)
                        {
                            $('#loader').hide();
                            if(data.code == 0)
                            {
                                $.each(data.error_message, function(prefix, val) {
                                    $(form).find('span.'+prefix+'_error').text(val[0]);
                                });
                            }
                            else if(data.code == 1)
                            {
                                $(form)[0].reset();
                                iziToast.success({
                                    title: '',
                                    position: 'topRight',
                                    message: data.success_message,
                                });
                            }
                            
                        }
                    });
                });
            })(jQuery);
        </script>
        <div id="loader"></div>



        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    iziToast.error({
                        title: '',
                        position: 'topRight',
                        message: '<?php echo e($error); ?>',
                    });
                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(session()->get('error')): ?>
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '<?php echo e(session()->get('error')); ?>',
                });
            </script>
        <?php endif; ?>

        <?php if(session()->get('success')): ?>
            <script>
                iziToast.success({
                    title: '',
                    position: 'topRight',
                    message: '<?php echo e(session()->get('success')); ?>',
                });
            </script>
        <?php endif; ?>
		
   </body>
</html><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/front/layout/app.blade.php ENDPATH**/ ?>