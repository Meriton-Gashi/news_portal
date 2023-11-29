

<?php $__env->startSection('heading', 'Edit Contact Page Content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    
        <div class="row">
            <div class="col-12">


                <?php $__currentLoopData = $page_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5 style="color:deeppink">Language: <?php echo e($row->rLanguage->name); ?></h5>
                <form action="<?php echo e(route('admin_page_contact_update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($row->id); ?>">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Title *</label>
                                <input type="text" class="form-control" name="contact_title" value="<?php echo e($row->contact_title); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Detail</label>
                                <textarea name="contact_detail" class="form-control snote" cols="30" rows="10"><?php echo e($row->contact_detail); ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Map (iFrame Code)</label>
                                <textarea name="contact_map" class="form-control" cols="30" rows="10" style="height:120px;"><?php echo e($row->contact_map); ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status?</label>
                                <select name="contact_status" class="form-control">
                                    <option value="Show" <?php if($row->contact_status == 'Show'): ?> selected <?php endif; ?>>Show</option>
                                    <option value="Hide" <?php if($row->contact_status == 'Hide'): ?> selected <?php endif; ?>>Hide</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
            
        </div>
        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/admin/page_contact.blade.php ENDPATH**/ ?>