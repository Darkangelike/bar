<div class="card-group justify-content-center">

    <?php $i = 1; foreach($sandwiches as $sandwich) { ?>


    <div class="cocktail-card m-4">

        <div style="height:40px">
            <form action="deleteSandwich.php" method="POST">
                <button value="<?= $sandwich["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <form action="editSandwich.php">
                <button value="<?= $sandwich["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form>
    
            
        </div>
        
        <H1>Sandwich n°<?= $i ?></H1>
        <!-- <img src="images/"/> -->
        
        <div class="card-footer">
            <button class="btn btn-warning"><?= $sandwich['price'] ?> €</button>
            <h3>Description:</h3>
            <p style="min-height:50px"><?= $sandwich["description"] ?></p>
            <form action="sandwich.php" class="mb-0 pb-0">
                <input type="hidden" name="i" id="i" value="<?= $i ?>">
                <button value="<?= $sandwich['id'] ?>" name="id" type="submit" class="btn btn-info">View</button>
            </form>
        </div>
    </div>
    <?php $i++; } ?>

</div>