<?php
include "conexion_db.php";
$categorias = get_categorias();
?>
<?php if (count($categorias) > 0): ?>
    <?php foreach ($categorias as $d): ?>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="category_<?php echo $d->id; ?>"> <?php echo $d->name; ?>
            </label>
        </div>
    <?php endforeach; ?>
<?php endif; ?>