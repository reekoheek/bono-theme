<h2><?php echo f('controller.name') ?></h2>

<form action="" method="POST">
    <fieldset>
        <?php echo f('form', @$entry) ?>
    </fieldset>
    <div class="row">
        <input type="submit" value="<?php ll('Save') ?>" class="button">
        <a href="<?php echo f('controller.url') ?>" class="button"><?php ll('Back to List') ?></a>
    </div>

</form>