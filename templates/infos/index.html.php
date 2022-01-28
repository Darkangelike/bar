<div class="card-group justify-content-center">

    <?php $i = 1; foreach($infos as $info) { ?>

    <!-- TOP RIGHT CORNER BUTTONS -->
    <div class="cocktail-card m-4">
        <div style="height:40px">

            <!-- Delete button -->
            <form action="?type=info&action=remove" method="POST">
                <button value="<?= $info->id ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>

            <!-- Edit button -->
            <a class="btn btn-info" style="float:right" href="?type=info&action=new&id=<?= $info->id ?>&i=<?= $i ?>">Edit</a>
        </div>
        
        <H1>Information n°<?= $i ?></H1>
        <!-- <img src="images/"/> -->
        
        <div class="card-footer">
            <h3>Description:</h3>
            <p style="min-height:50px"><?= $info->description ?></p>
            <!-- <form action="?type=info&action=show" class="mb-0 pb-0">
                <input type="hidden" name="i" id="i" value="<?= $i ?>">
                <button value="<?= $info->id ?>" name="id" type="submit" class="btn btn-info">View</button>
            </form> -->
            <a class="btn btn-info" href="?type=info&action=show&id=<?= $info->id ?>&i=<?= $i ?>">More</a>
        </div>
    </div>
    <?php $i++; } ?>

</div>