

<?php $__env->startSection('heading', 'Languages'); ?>

<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_language_create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Short Name</th>
                                    <th>Is Default?</th>
                                    <th>Update Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $language_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->short_name); ?></td>
                                    <td><?php echo e($row->is_default); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin_language_update_detail',$row->id)); ?>" class="btn btn-success">Update Detail</a>
                                    </td>
                                    <td class="pt_10 pb_10">
                                        
                                        <a href="<?php echo e(route('admin_language_edit',$row->id)); ?>" class="btn btn-primary">Edit</a>
                                        
                                        <?php if($loop->iteration != 1): ?>
                                        <a href="<?php echo e(route('admin_language_delete',$row->id)); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/admin/language_show.blade.php ENDPATH**/ ?>