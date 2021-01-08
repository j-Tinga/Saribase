<?php 
               $item = $_GET['name'];

               $data = $conn->query("SELECT itemName,itemID FROM item WHERE itemName LIKE '%$item%' LIMIT 2"); // limit to how many results to be shown at default//
                
               while($row = $data->fetch_assoc()){
        
                   echo   "<tbody><tr>
                            <td><center> ".$row['itemName']." </center></td>";
           
                     echo '<center><form action="addToList" method = "POST">
                            <td> Quantity:<input type="number" name = "quantity" min="1" max="50">
                            <td><input type="hidden" name= "itemID" value = "'.$row["itemID"].'">
                            <input type = "submit" name ="addItem" class= "btn btn-warning" value = ADD>
                            </td></form></center>
                            </tr>';
           
               }
//LIVE SEARCH BUT IDK WHY IT WONT WORK
//    <script type = "text/javascript">
//     $(document).ready(function(){

//         fetch_item_data();
//         function fetch_item_data(query = '')
//         {
//             $.ajax({
//                 url: '{{route('request_list.action')}}',
//                 method: 'GET',
//                 data:{'query':query},
//                 dataType: 'json',
//                 success:function(data){
//                     $('tbody').html(data.table_data);
//                     $('#total_data').text(data.total_data);
//                 }
//             })
//         }

//         $(document).on('keyup', '#search', function(){
//             var query = $(this).val();
//             fetch_item_data(query);

//         });
//     });

//     </script> 

// The Controller function 
// public function action (Request $request){
       // if($request->ajax())
       // {
       //     $query = $request->get('query');
       //     if($query != '')
       //     {
       //         $data = DB::table('item')->where('itemName', 'like', '%' .$query. '%')->get();
       //         // ->select('itemID', 'itemName')
       //     }
       //     else
       //     {
       //         $data = DB::table('item')->orderBy('itemID', 'desc')->get();
       //     }

       //     $total_row = $data->count();
       //     if($total_row > 0)
       //     {
       //         foreach($data as $row)
       //         {
       //             $output .='
       //             <tr> 
       //                 <td>'.$row->itemName.'</td>
       //                 <td>'.$row->itemID.'</td>
       //             </tr>';
       //         }
       //     }
       //     else
       //     {
       //         $output = '
       //             <tr> 
       //                 <td align = center >
       //                     No Data Found
       //                 </td>
       //             </tr>
       //         ';
       //     }

       //     $data = array(
       //         'table_data' => $output,
       //         '$total_data' => $total_data

       //     );

       //     echo json_encode($data);
       // };
// }
 // 
    ?>