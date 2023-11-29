

<?php $__env->startSection('heading', 'Language Update Detail'); ?>

<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_language_show')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Back to Previous Page</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_language_update_detail_submit',$lang_id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">SL</th>
                                        <th style="width:45%;">Key</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $json_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($key); ?></td>
                                        <td>
                                            <input type="hidden" name="arr_key[]" class="form-control" value="<?php echo e($key); ?>">
                                            <input type="text" name="arr_value[]" class="form-control" value="<?php echo e($value); ?>">
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/admin/language_update_detail.blade.php ENDPATH**/ ?>