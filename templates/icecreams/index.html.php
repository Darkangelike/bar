<div class="card-group justify-content-center">

    <?php $i = 1; foreach($icecreams as $icecream) { ?>


    <div class="cocktail-card m-4">

        <div style="height:40px">
            <form action="deleteIcecream.php" method="POST">
                <button value="<?= $icecream["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <!-- <form action="editIcecream.php">
                <button value="<?= $icecream["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form> -->
    
            
        </div>
        
        <H1>Ice cream n°<?= $i ?></H1>
        <!-- <img src="images/"/> -->
        
        <div class="card-footer">
            <h3>Description:</h3>
            <p style="min-height:50px"><?= $icecream["description"] ?></p>
            <form action="icecream.php" class="mb-0 pb-0">
                <input type="hidden" name="i" id="i" value="<?= $i ?>">
                <button value="<?= $icecream['id'] ?>" name="id" type="submit" class="btn btn-info">View</button>
            </form>
        </div>
    </div>
    <?php $i++; } ?>

</div>