<div class="container">
    <form method="POST" action="createSandwich.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-3"><?php if ($id) { echo "Edit the sandwich n°{$i}"; } else { echo "Create a sandwich"; } ?></h1>
            <textarea placeholder="Write a sandwich description here" name="description" id="description" cols="18" rows="3"><?php if ($id) { ?><?= $sandwich["description"] ?><?php } ?></textarea>
            <input value="<?php if ($id) { echo $sandwich["price"]; } ?>" type="number" placeholder="Price of the sandwich" name="price"/>
            <button class="mt-3 btn btn-info" type="submit" name="<?php if ($id) { echo "edit"; } else { echo "create"; } ?>"><?php if ($id) { echo "Edit"; } else { echo "Create"; } ?></button>
        </div>
    </form>
</div>