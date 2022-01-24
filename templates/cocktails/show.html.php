<div class="card-group justify-content-center">

    <div class="card bg-light mb-3 cocktail-card" style="max-width: 18rem;">

        <div class="card-header"><?= $cocktail["name"] ?></div>
            <div class="card-body">

                <form action="deleteCocktail.php?id=<?= $cocktail["id"] ?>" method="POST">
                    <button value="<?= $cocktail["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
                </form>

                <form action="editCocktail.php">
                    <button value="<?= $cocktail["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
                </form>

                <img src="images/<?= $cocktail["image"] ?>"/>
                <h3>Ingredients:</h3>
                <p class="card-text"><?= $cocktail["ingredients"] ?></p>
                <?php $i = 0; if ($commentaires) { foreach($commentaires as $commentaire) { $i++; ?> 
                    <div class="card-footer text-muted">
                        <form action="deleteComment.php?id=<?= $commentaire["id"] ?>" method="POST">
                            <input type="hidden" name="cocktail_id" value="<?= $cocktail['id'] ?>">
                            <button value="<?= $commentaire["id"] ?>" name="commentaire_id" style="float:right" type="submit" class="btn btn-danger">X</button>
                        </form>
                        <div>
                            <p class="text-left" style="font-size:10px">Comment n°<?= $i ?></p>
                            <h3><?= $commentaire["author"] ?></h3>
                        </div>
                        
                        <p><?= $commentaire["content"] ?></p>
                    </div>
                <?php } ?>
            <div class="card-footer text-muted">
                        <form action="createComment.php" method="POST">
                        <div class="form-group">
                            <input placeholder="Your name"  type="text" name="author"></div>
                        <div class="form-group">
                            <textarea placeholder="Your comment" type="text" name="content"></textarea></div>
                        <div class="form-group">
                            <button type="submit" name="cocktail_id" value="<?= $cocktail['id'] ?>" class="btn btn-info">Add a comment</button>
                        </div>
                        </form>
                        
                    </div>
            <?php } else { ?>
                <div class="card-footer text-muted">
                    <p>Be the first to comment!</p>
                </div>
                <div class="card-footer text-muted">
                    <form action="createComment.php" method="POST">
                        <div class="form-group">
                            <input placeholder="Your name"  type="text" name="author"></div>
                        <div class="form-group">
                            <textarea placeholder="Your comment" type="text" name="content"></textarea></div>
                        <div class="form-group">
                            <button name='cocktail_id' value="<?= $cocktail['id'] ?>" class="btn btn-success">Post</button>
                        </div>
                    </form>
                    
                </div>
                <?php } ?>
                
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>

    
</div>
