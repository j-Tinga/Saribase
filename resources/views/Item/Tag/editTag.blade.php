<!--Form for Editing Tag-->
<div class='jumbotron d-flex justify-content-center'>
    
    <form action='editTag' method='POST'>
        @csrf
        <center><h1>Edit Tag </h1><center>
        <br>
        <input type='hidden' name='id' value= "{{$editTag->tagID}}">
        <input type='text' name='newName' class='form-control' placeholder='New tag name' value = "{{$editTag->tagName}}" required> <br>
        <input type='submit' name='button' class='btn btn-success' value='Update Tag'>
        <input type='submit' name='button' class='btn btn-danger' value='Delete Tag'>
    </form>
</div>