<div class="jumbotron d-flex justify-content-center">
        <form action="editEmployee" method="POST">
            @csrf 
            <h1> Edit Employee: {{$editEmployee->lastName}}, {{$editEmployee->firstName}}</h1>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="form-control" value="{{$editEmployee->firstName}}"}>

            <label for="lname">Last Name: </label>
            <input type="text" name="lname" id="lname" class="form-control" value="{{$editEmployee->lastName}}">

            <label for="cnumber">Contact Number: </label>
            <input type="text" name="cnumber" id="cnumber" class="form-control" value="{{$editEmployee->contactNumber}}">

            <label for="passw">Password:</label>
            <input type="text" name="passw" id="passw" class="form-control" value="{{$editEmployee->password}}">

            <label for="branch">Branch: </label>
            <select id="branch" name="branch" class="form-control">
                @foreach($branches as $branch)
                    <option value='{{$branch->branchID}}'>{{$branch->branchName}}</option>
                @endforeach
            </select>

            <input type="hidden" name="id" value="{{$editEmployee->employeeID}}"><br>
            <input type="submit" value="Update" name="button" class="btn btn-primary">

        </form>
</div>