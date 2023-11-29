

<?php $__env->startSection('heading', 'Home Advertisements'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <form action="<?php echo e(route('admin_home_ad_update')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Above Search</h5>                    
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div>
                                <img src="<?php echo e(asset('uploads/'.$home_ad_data->above_search_ad)); ?>" alt="" style="width:100%;">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo</label>
                            <div>
                                <input type="file" name="above_search_ad">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>URL</label>
                            <input type="text" class="form-control" name="above_search_ad_url" value="<?php echo e($home_ad_data->above_search_ad_url); ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label>Status</label>
                            <select name="above_search_ad_status" class="form-control">
                                <option value="Show" <?php if($home_ad_data->above_search_ad_status == 'Show'): ?> selected <?php endif; ?>>Show</option>
                                <option value="Hide" <?php if($home_ad_data->above_search_ad_status == 'Hide'): ?> selected <?php endif; ?>>Hide</option>
                            </select>
                        </div>                       
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Above Footer</h5>
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div>
                                <img src="<?php echo e(asset('uploads/'.$home_ad_data->above_footer_ad)); ?>" alt="" style="width:100%;">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo</label>
                            <div>
                                <input type="file" name="above_footer_ad">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>URL</label>
                            <input type="text" class="form-control" name="above_footer_ad_url" value="<?php echo e($home_ad_data->above_footer_ad_url); ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label>Status</label>
                            <select name="above_footer_ad_status" class="form-control">
                                <option value="Show" <?php if($home_ad_data->above_footer_ad_status == 'Show'): ?> selected <?php endif; ?>>Show</option>
                                <option value="Hide" <?php if($home_ad_data->above_footer_ad_status == 'Hide'): ?> selected <?php endif; ?>>Hide</option>
                            </select>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\news_portal_project\resources\views/admin/advertisement_home_view.blade.php ENDPATH**/ ?>