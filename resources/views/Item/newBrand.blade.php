<!--Form for Creating New Brand-->
<div class="jumbotron d-flex justify-content-center">
    <form action="newBrand" method="POST">
        @csrf
        <h1>New Brand</h1>
        <label for="inputName">Brand Name:</label>
        <input type="text" name="brandName" id="inputName" class="form-control" placeholder="Input Brand Name" required>
        <input type="submit" value="Add Brand" name="newBrand" class="btn btn-primary" >
    </form>
</div>