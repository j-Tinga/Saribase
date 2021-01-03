<!--Main Page for Item-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    

    @if(isset($newEmployee))
        @include('Employee.newEmployee')
    @else
    <div class='jumbotron d-flex justify-content-center'>
        <form action='showMaker' method='POST'>
            @csrf
            <input type='submit' name='button' class='btn btn-success' value='Add Employee'>
        </form>
    </div>
    @endif

    @if(isset($editEmployee))
        @include('Employee.editEmployee')
    @endif

    <div class='jumbotron d-flex justify-content-center'>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Branch</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->employeeID}}</td>
                    <td>{{$employee->lastName}}, {{$employee->firstName}}</td>
                    <td>{{$employee->contactNumber}}</td>
                    <td>@foreach($branches as $branch)
                            @if($branch->branchID == $employee->branchID)
                                {{$branch->branchName}}
                            @endif
                        @endforeach</td>
                    <td><form action='employeeActions' method='POST'>
                        @csrf
                        <input type='hidden' name='id' value='{{$employee->employeeID}}'> 
                        <input type='submit' name='button' class='btn btn-success' value='Edit'>
                        <input type='submit' name='button' class='btn btn-danger' value='Delete'>
                    </form></td>
                </tr>
            @endforeach
        </table>
    </div>
    

    
</body>
</html>