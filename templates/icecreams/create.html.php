<?php if ($create) { ?> <div class="container">
    <form method="POST" action="createIcecream.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-3"> Add an ice cream</h1>
            <textarea placeholder="Write an ice cream description here" name="description" id="description" cols="18" rows="3"></textarea>
            <button class="mt-3 btn btn-info" type="submit" name="create">Create</button>
        </div>
    </form>
</div>
<?php } else if ($edit) { ?>
<div class="container">
    <form method="POST" action="editIcecream.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-3">Submit edit</h1>
            <textarea placeholder="Write an ice cream description here" name="description" id="description" cols="18" rows="3"></textarea>
            <button class="mt-3 btn btn-info" type="submit" name="create">Create</button>
        </div>
    </form>
</div>

<?php } ?>