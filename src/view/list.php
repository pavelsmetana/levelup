<div>


    <?php foreach ($files as $file => $type) : ?>

        <img height="200px" src="/upload/<?php echo $file; ?>"><?php echo $file; ?>

        <?php endforeach; ?>

</div>
