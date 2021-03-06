<div class="container">
    <form method="POST" action="?action=new&type=info">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-3"><?php if ($edit) { echo "Edit the information n°{$i}"; } else { ?>Add an information<?php } ?></h1>
            <textarea placeholder="Write your new information here" name="description" id="description" cols="18" rows="3"><?php if ($edit) { echo $info->description; } ?></textarea>
            <?php if ($edit) { ?>
                <input type="hidden" name="id" id="id" value="<?= $info->id ?>">
                <input type="hidden" name="i" id="i" value="<?= $i ?>">
            <?php } ?>
            <button class="mt-3 btn btn-info" VALUE="true" type="submit" name="<?php if ($edit) { echo "edit" ; } else { echo "create"; } ?>"><?php if ($edit) { echo "Edit"; } else { ?>Add<?php } ?></button>
        </div>
    </form>
</div>