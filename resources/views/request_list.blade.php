<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Requesting Items</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<style>
    		.jumbotron {width: 50%; margin-left: 25%; margin-bottom: 1%; background-color:  #ffd59a ; border-radius: 25px;}
		h2{color: yellow; }input{margin-bottom: 10px} 

        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }

        td {
            padding: 10px 0;
        }

        div.req_list{
            background-color:#32CD32;
        }
</style>
  
</head>
<body>

    <div class = "jumbotron">
        <h2>Request in Item</h2>
     
        <form action="/request" method = "GET">
             <div>
            <center>Item Request:<input type="text" id="search" name ="search" placeholder = "Item to request"></center>
            <center>
                <h3>Total Record: <span id ='#total_data'></span></h3>
                <table>
                    <thead>
                    <tr>
                    <th> Item ID </th>
                    <th> Item Name </th>
                    <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
            
                </table></center><br>
            </div>
            <center><button> Return to Request Form </button></center>
        </form>

        <!-- TO show the request list -->
            <!-- <button onclick="window.location='{{ url("showList") }}'"> View Request List </button>

       
    
    </div> -->

    <!-- Live search ajax  -->
    <!-- <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
                $.ajax({
                type : 'get',
                url : '{{URL::to('live_search')}}',
                data:{'search':$value},
                success:function(data){
                $('tbody').html(data);
                }
            });
        })

    </script>
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>

</body>
</html> --> -->


@extends('layout.layout')

@section('content')
<center><h1> REQUEST LIST PAGE</h1></center>

<div align= "center" id= "requestlist" class = "jumbotron" >
        <h2>Request in Item</h2>
     
            <center>Item Request:<input type="text" id="search" name ="search" placeholder = "Item to request"></center>
            <center>
                <h3>Total Record: <span id ='#total_data'></span></h3>
                <table>
                    <thead>
                    <tr>
                    <th> Item ID </th>
                    <th> Item Name </th>
                    <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
            </table></center><br>

        <!-- Buttons -->
            <button onclick="window.location='{{ url('/request') }}'" class= "btn btn-primary"> Return to Request page </button>
            <button onclick="window.location='{{ url('/showList') }}'" class= "btn btn-primary"> View Request List </button>
            <button onclick="window.location='{{ url('/logout') }}'" class= "btn btn-primary"> Logout</button>

        </form>
    </div>

    <!-- Live search ajax  -->
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
                $.ajax({
                type : 'get',
                url : '{{URL::to('live_search')}}',
                data:{'search':$value},
                success:function(data){
                $('tbody').html(data);
                }
            });
        })

    </script>
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>

@endsection