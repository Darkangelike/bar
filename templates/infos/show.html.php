<div class="card-group justify-content-center">
    <div class="cocktail-card m-4">

        <div style="height:40px">
            <form action="?type=info&action=remove" method="POST">
                <button value="<?= $info->id ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <form action="?type=info&action=new">
                <button value="<?= $info->id ?>" name="id" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form>
            
        </div>
        
        <H1>Information n°<?= $i ?></H1>
        
        <div class="card-footer">
            <h3>Description:</h3>
            <p><?= $info->description ?></p>
        </div>
    </div>
</div>