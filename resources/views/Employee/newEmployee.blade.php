<div class="jumbotron d-flex justify-content-center">
    <form action="addEmployee" method="POST">
        @csrf
        <h1> New Employee</h1>
        <label for='fname'>First Name: </label>
		<input type='text' name='fname' id='fname' class="form-control"><p></p>

		<label for='lname'>Last Name: </label>
	    <input type='text' name='lname' id='lname' class="form-control"><p></p>

		<label for='cnumber'>Contact Number: </label>
		<input type='text' name='cnumber' id='cnumber' class="form-control"><p></p>

		<label for='passw'>Password: </label>
		<input type='text' name='passw' id='passw' class="form-control"><p></p>

		<label for='level'>Level: </label>
		<select name='level' id='level' class="form-control">
        @foreach($levels as $level)
            <option value='{{$level->employeeLevelID}}'>{{$level->levelName}}</option>
        @endforeach
		</select><p></p>

		<label for='branch'>Branch: </label>
		<select name='branch' id='branch' class="form-control">
        @foreach($branches as $branch)
            <option value='{{$branch->branchID}}'>{{$branch->branchName}}</option>
        @endforeach
		</select><p></p>

		<input type='submit' name='newEmployee' value='Create New User' class="btn btn-primary">
    </form>
</div>