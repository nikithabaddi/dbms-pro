<html>
    <head>
        <title>Display</title>
        <style >
            body
            {
              background: #d071f9;
            }
            table
            {
                background-color: white;
            }
            .update, .delete
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height:23px;
                width:80px;
                font-weight: bold;
                cursor: pointer;
            }

            .delete
            {
                background-color: red;
                
            }
            </style>
    </head>
    
<?php
include("db_connect.php");
error_reporting(0);
$query = "SELECT * FROM booking";
$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);
//echo $total;




if($total !=0)
{
    ?>
   <h2 align="center"><mark>Displaying All Records </mark></h2>
<center><table border="1" cellspacing="7" width="85%">
    <tr>
    <th width="2%">ID</th>
     <th width="5%">name</th>
     <th width="8%">email</th>
     <th width="4%">number</th>
     <th width="5%">type</th>
     <th width="5%">brand</th>
     <th width="10%">service</th>
     <th width="3%">vehicle_number</th>
     <th width="5%">oil_type</th>
     <th width="8%">date</th>
     <th width="3%">Payment_method</th>
     <th width="20%">Operations</th>
     </tr>
    <?php

   while(($result = mysqli_fetch_assoc($data)))
   {
       echo" <tr>
       <td>".$result['ID']."</td>
       <td>".$result['name']."</td>
       <td>".$result['email']."</td>
       <td>".$result['number']."</td>
       <td>".$result['type']."</td>
       <td>".$result['brand']."</td>
       <td>".$result['service']."</td>
       <td>".$result['vehicle_number']."</td>
       <td>".$result['oil_type']."</td>
       <td>".$result['date']."</td>
       <td>".$result['Payment_method']."</td>

       <td><button><a href='update_design.php?id=$result[ID]& nm=$result[name]& em=$result[email] &no=$result[number] & ty=$result[type] &br=$result[brand] &sr=$result[service] & vno=$result[vehicle_number]& oil=$result[oil_type]& dt=$result[date]& pay=$result[Payment_method]'><input type='submit' value='update' class= 'update'</a></button>

       <button><a href='delete.php?id=$result[ID]'><input type='submit' value='delete' class='delete' onclick = 'return checkdelete()'</a></td>

       </tr>";
   }
}
else
{
    echo " no records found";
}
?>
</table>


<script>
function checkdelete()
{
    return confirm('Are you sure you want to delete this data?');
}
    </script>

   </html> 