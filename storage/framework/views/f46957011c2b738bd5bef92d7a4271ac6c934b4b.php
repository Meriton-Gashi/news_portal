

<?php $__env->startSection('heading', 'Top Advertisements'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <form action="<?php echo e(route('admin_top_ad_update')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Top Ad Section</h5>                    
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div>
                                <img src="<?php echo e(asset('uploads/'.$top_ad_data->top_ad)); ?>" alt="" style="width:100%;">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo</label>
                            <div>
                                <input type="file" name="top_ad">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>URL</label>
                            <input type="text" class="form-control" name="top_ad_url" value="<?php echo e($top_ad_data->top_ad_url); ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label>Status</label>
                            <select name="top_ad_status" class="form-control">
                                <option value="Show" <?php if($top_ad_data->top_ad_status == 'Show'): ?> selected <?php endif; ?>>Show</option>
                                <option value="Hide" <?php if($top_ad_data->top_ad_status == 'Hide'): ?> selected <?php endif; ?>>Hide</option>
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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\news_portal_project\resources\views/admin/advertisement_top_view.blade.php ENDPATH**/ ?>