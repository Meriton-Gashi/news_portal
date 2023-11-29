

<?php $__env->startSection('heading', 'Posts'); ?>

<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('author_post_create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                    <th>Thumbnail</th>
                                    <th>Post Title</th>
                                    <th>Sub Category</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Language</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset('uploads/'.$row->post_photo)); ?>" alt="" style="width:200px;">
                                    </td>
                                    <td><?php echo e($row->post_title); ?></td>
                                    <td><?php echo e($row->rSubCategory->sub_category_name); ?></td>
                                    <td><?php echo e($row->rSubCategory->rCategory->category_name); ?></td>
                                    <td>
                                        <?php if($row->author_id != 0): ?>
                                        <?php echo e(Auth::guard('author')->user()->name); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($row->rLanguage->name); ?></td>
                                    <td class="pt_10 pb_10">
                                        <a href="<?php echo e(route('author_post_edit',$row->id)); ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?php echo e(route('author_post_delete',$row->id)); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
<?php echo $__env->make('author.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\news_portal_project\resources\views/author/post_show.blade.php ENDPATH**/ ?>