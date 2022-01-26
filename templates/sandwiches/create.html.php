<div class="container">
    <form method="POST" action="createSandwich.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-3">Create a sandwich</h1>
            <textarea placeholder="Write a sandwich description here" name="description" id="description" cols="18" rows="3"></textarea>
            <input type="number" placeholder="Price of the sandwich" name="price"/>
            <button class="mt-3 btn btn-info" type="submit" name="create">Create</button>
        </div>
    </form>
</div>