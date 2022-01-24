    <div class="container">
    <form method="POST" action="createCocktail.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1>Add a cocktail</h1>
            <input type="text" name="name" value="Second class" placeholder="name du cocktail">
            <textarea placeholder="Ingredients" name="ingredients" id="ingredients" cols="18" rows="3">Water, syrup, something else, ice</textarea>
            <input placeholder="Addresse URL de l'image" value="2.png" type="text" name="image">

            <button class="btn btn-info" type="submit" name="create">Create</button>
        </div>
    </form>
</div>