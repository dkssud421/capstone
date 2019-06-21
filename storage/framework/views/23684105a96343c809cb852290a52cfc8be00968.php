


<div class="w3-row-padding">
    <div class="w3-col m12">
        <form method="POST" action="<?php echo e(route('lecture.comments.store', $lecture->id)); ?>" class="form-horizontal">
            <?php echo csrf_field(); ?>


            <div class="form-group <?php echo e($errors->has('content') ? 'has-error' : ''); ?>">
                <textarea name="content" class="form-control" style="width:500px"><?php echo e(old('content')); ?></textarea>
                <?php echo $errors->first('content', '<span class="form-error">:message</span>'); ?>

            </div>
            <br>

            <div class="text-right">
                <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>댓글달기</button>
            </div>
        </form>
    </div>
</div>



