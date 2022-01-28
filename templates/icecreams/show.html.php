<div class="card-group justify-content-center">
    <div class="cocktail-card m-4">

        <div style="height:40px">
            <form action="?type=icecream&action=removew" method="POST">
                <button value="<?= $icecream->id ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <form action="editIcecream.php">
                <button value="<?= $icecream->id ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form>
            
        </div>
        
        <H1>Ice cream n°<?= $i ?></H1>
        
        <div class="card-footer">
            <h3>Description:</h3>
            <p><?= $icecream->description ?></p>
        </div>
    </div>
</div>