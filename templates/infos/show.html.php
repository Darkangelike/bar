<div class="card-group justify-content-center">
    <div class="cocktail-card m-4">

        <div class="card-header">
            <form action="?type=info&action=remove" method="POST">
                <button value="<?= $info->id ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <!-- Edit button -->
            <a class="btn btn-info" style="float:right" href="?type=info&action=new&id=<?= $info->id ?>&i=<?= $i ?>">Edit</a>
            
            <H1>Information n°<?= $i ?></H1>
        </div>
        
        <div class="card-body">
            <h3>Description:</h3>
            <p><?= $info->description ?></p>
        </div>
        
        <div class="card-footer">
            <?php foreach ($reactions->findAll() as $reaction)  { ?>
                <div>
                    <h3><?= $reaction->description ?></h3>
                </div>
            <?php } ?>
        </div>
    </div>
</div>