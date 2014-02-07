<h2><?php echo f('controller.name') ?></h2>

<fieldset>
    <?php echo f('form.ro', @$entry) ?>
</fieldset>

<div class="row">
    <a href="<?php echo f('controller.url') ?>" class="button"><?php ll('Back to List') ?></a>
</div>