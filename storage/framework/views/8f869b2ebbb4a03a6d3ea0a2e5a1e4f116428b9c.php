


<div class="media item__comment<?php echo e($isReply ? 'sub': 'top'); ?>" data-id="<?php echo e($comment->id); ?>" id="comment_<?php echo e($comment->id); ?>">

    <div class=" w3-container w3-card w3-white w3-round w3-margin ">
        <h4>작성자 : <?php echo e($comment->user->name); ?></h4><br>
           <p> 내용 : <?php echo e($comment->content); ?></p>
        <hr class="w3-clear">
        <small>
        <p><?php echo e($comment->created_at->diffForHumans()); ?></p>
        </small>

    </div>


    <?php $__empty_1 = true; $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <?php echo $__env->make('comments.partial.comment',[
        'comment'=>$reply,
        'isReply' => true,
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>

</div>
