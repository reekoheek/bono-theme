<h2><?php echo f('controller.name') ?></h2>

<div>
    <a href="<?php echo f('controller.url', '/null/create') ?>" class="button"><?php ll('Add') ?></a>
</div>

<?php echo f('table', $entries) ?>
