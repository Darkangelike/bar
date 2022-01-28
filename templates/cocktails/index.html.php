<!-- CARD GROUP -->
<div class="card-group justify-content-center">
    <?php foreach($cocktails as $cocktail) { ?>

    <!-- CARD -->
    <div class="cocktail-card m-4">

        <!-- Buttons group -->
        <div style="height:40px">

            <!-- Delete button -->
            <form action="?type=cocktail&action=delete&id=<?= $cocktail->id ?>" method="POST">
                <!-- <input type="hidden" name="type" value="cocktail">
                <input type="hidden" name="action" value="delete"> -->
                <button value="<?= $cocktail->id ?>" name="id" style="float:right" class="btn btn-danger">X</button>
            </form>

            <!-- Edit button -->
                <a href="?id=<?= $cocktail->id ?>&action=new&type=cocktail" style="float:right" class="btn btn-info">Edit</a>
    
            <!-- View button -->
                <a href="?id=<?= $cocktail->id ?>&action=show&type=cocktail" style="float:right" class="btn btn-info">View</a>
        </div>

        <!-- TITLE -->
        <H1><?= $cocktail->name ?></H1>

        <!-- Image -->
        <img src="images/<?= $cocktail->image ?>"/>

        <!-- Footer -->
        <div class="card-footer">
            <h3>Ingredients:</h3>
            <p><?= $cocktail->ingredients ?></p>
        </div>
    </div>
    <?php } ?>
    <!-- End of card -->
    
</div>