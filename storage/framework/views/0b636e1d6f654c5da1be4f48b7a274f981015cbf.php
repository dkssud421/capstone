

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>공지사항 작성</h1>
        <hr/>
            <form method="POST" action="<?php echo e(route('notice.store')); ?>">
               <?php echo csrf_field(); ?>


            <div class="from-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
                <label for="title">제목</label>
                <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>" class="form-control"/>
                <?php echo $errors->first('title', '<span class="from-error">:message</span>'); ?>

            </div>

            <div class="from-group <?php echo e($errors->has('content') ? 'has-error' : ''); ?>">
                <label for="content">본문</label>
                <textarea name="content" id="content" rows="10" class="from-control"><?php echo e(old('content')); ?></textarea>
                <?php echo $errors->first('content', '<span class="from-error">:message</span>'); ?>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    저장하기
                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>