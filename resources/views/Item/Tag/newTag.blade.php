<!--Form for Creating New Tag-->
<div class='jumbotron d-flex justify-content-center'>
    <form action='newTag' method='POST'>
        @csrf
        <center><h1>New Tag </h1><center>
        <br>
        <input type='text' name='tagName' class='form-control' placeholder='New Tag Name' required> <br>
        <select id='' name='type' class='form-control'>
            <option value='Material'selected>Materials</option>
            <option value='Tool'>Tools</option>
            <option value='Color'>Colors</option>
        </select>
        
        <input type='submit' name='createTag' class='btn btn-success' value='Create Tag'>
    </form> 
</div>