<div class="container">
    <form action="editCocktail.php" method="POST">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1>Edit</h1>
            <input type="text" name="name" value="<?= $cocktail["name"] ?>" placeholder="name du cocktail">
            <textarea placeholder="Ingredients" name="ingredients" id="ingredients" cols="18" rows="3"><?= $cocktail["ingredients"] ?></textarea>
            <input placeholder="Addresse URL de l'image" value="<?= $cocktail["image"] ?>" type="text" name="image">

            <button value="<?= $cocktail["id"] ?>" class="btn btn-info" type="submit" name="id">Edit</button>
        </div>
    </form>
</div>