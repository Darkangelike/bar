<div class="card-group justify-content-center">

    <?php $i = 1; foreach($icecreams as $icecream) { ?>


    <div class="cocktail-card m-4">

        <div style="height:40px">
            <form action="deleteIcecream.php" method="POST">
                <button value="<?= $icecream["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <!-- <form action="editIcecream.php">
                <button value="<?= $icecream["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form>
    
            <form action="icecream.php">
                <button value="<?= $icecream["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-info">View</button>
            </form> -->

        </div>

        <H1>Ice cream n°<?= $i ?></H1>
        <!-- <img src="images/"/> -->

        <div class="card-footer">
            <h3>Description:</h3>
            <p><?= $icecream["description"] ?></p>
        </div>
    </div>
    <?php $i++; } ?>

</div>