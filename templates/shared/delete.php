<h2><?php echo f('controller.name') ?></h2>

<form action="?confirm" method="POST">
    <fieldset>
        <?php ll('Are you sure want to delete?') ?>
    </fieldset>

    <input type="submit" value="<?php ll('OK') ?>">
    <a href="<?php echo f('controller.url') ?>" class="button"><?php ll('Cancel') ?></a>
</form>
