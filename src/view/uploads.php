<?php echo renderHtml("menu"); ?>
    </br><h2>Uploaded files list: </h2></br>

<?php
foreach ($files as $name) :
    $filetype = pathinfo($name, PATHINFO_EXTENSION);
    if ($filetype == "txt") : ?>

        <div><a href="/upload/<?php echo $name; ?>"><?php echo $name; ?></a></div>

    <?php elseif (($filetype == "jpg") || ($filetype == "jpeg") || ($filetype == "png") || ($filetype == "webp")) : ?>

        <div><a><img height="100" src="/upload/<?php echo $name; ?>"></a></div>

    <?php else : ?>

        <div> <a href="/upload/<?php echo $name; ?>"><?php echo $name; ?></a></div>

    <?php endif; ?>
        <a href="/remove-file/<?php echo urlencode($name); ?>">Delete File</a>

<?php endforeach;
