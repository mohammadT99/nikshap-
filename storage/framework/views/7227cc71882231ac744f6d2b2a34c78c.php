
<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-9">
                <div class="card forms-card">
                    <div class="card-header">
                        <h4 class="card-title">Create New Post</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Title" class="form-control"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea type="text" name="short_description" rows="6" placeholder="Short Description"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                  
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-label">Description</label>
                                            <textarea name="description" class="form-control" style="min-height: 200px" id="editor" cols="80"><?php echo e(old('description')); ?></textarea>
                                        </div>
                                    </div>
                                    
                                        <input type="file" class="dropify" data-height="300" />
                                    
                                </div>

                                <div class=" mt-5">
                                    <a href="" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-primary btn-xm" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $('.dropify').dropify();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\phpproject\nikshap\resources\views/admin/post/add.blade.php ENDPATH**/ ?>