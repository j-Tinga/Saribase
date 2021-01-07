<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Table</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

    <a href="{{route('itemPage')}}" class='btn btn-success'>Back to Item Page</a>
    <div class='jumbotron d-flex justify-content-center'>
        <table>
            <thead>
                <tr><th colspan='2'>Active Tags</th></tr>
                <tr>
                    <th>Tag Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($activeTags as $activeTag)
                <tr><td>{{$activeTag->tagName}}</td>
                <td>
                    <form action='activeTagActions' method='POST'>
                        <input type='hidden' name='id' value='{{$activeTag->tagID}}'> 
                        <input type='hidden' name='tagListID' value='{{$activeTag->tagListID}}'> 
                        <input type='submit' name='button' class='btn btn-danger' value='Remove'>
                        <input type='submit' name='button' class='btn btn-warning' value='Edit'>
                    </form>
                </td></tr>
            @endforeach
        </table>
    </div>

    <div class='jumbotron d-flex justify-content-center'>
        <table>
            <thead>
                <tr><th colspan='2'>Materials</th></tr>
                <tr>
                    <th>Tag Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($materialTags as $materialTag)
                <tr><td>{{$materialTag->tagName}}</td>
                <td>
                    <form action='tagActions' method='POST'>
                        <input type='hidden' name='id' value='{{$materialTag->tagID}}'>
                        <input type='submit' name='button' class='btn btn-success' value='Add'>
                        <input type='submit' name='button' class='btn btn-warning' value='Edit'>
                    </form>
                </td></tr>
            @endforeach
        </table>
        <table>
            <thead>
                <tr><th colspan='2'>Tools</th></tr>
                <tr>
                    <th>Tag Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($toolTags as $toolTag)
                <tr><td>{{$toolTag->tagName}}</td>
                <td>
                    <form action='tagActions' method='POST'>
                        <input type='hidden' name='id' value='{{$toolTag->tagID}}'>
                        <input type='submit' name='button' class='btn btn-success' value='Add'>
                        <input type='submit' name='button' class='btn btn-warning' value='Edit'>
                    </form>
                </td></tr>
            @endforeach
        </table>
        <table>
            <thead>
                <tr><th colspan='2'>Colors</th></tr>
                <tr>
                    <th>Tag Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($colorTags as $colorTag)
                <tr><td>{{$colorTag->tagName}}</td>
                <td>
                    <form action='tagActions' method='POST'>
                        <input type='hidden' name='id' value='{{$colorTag->tagID}}'>
                        <input type='submit' name='button' class='btn btn-success' value='Add'>
                        <input type='submit' name='button' class='btn btn-warning' value='Edit'>
                    </form>
                </td></tr>
            @endforeach
        </table>
    </div>
</body>
</html>