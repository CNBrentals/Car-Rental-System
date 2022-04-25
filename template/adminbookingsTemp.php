<?php 
session_start();
if (isset($_GET['id'])) {
        $delete->delete('rent_id', $_GET['id']);
        echo "<script>alert('Deleted!');</script>";
        }

?>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Vechiles Database
</div>
<div class="panel-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>#</th>
                <th>Pickup Date</th>
                <th>Return Date</th>
                <th>Vechile Name</th>
                <th>Rented By</th>
            </tr>
        </thead>
        <tbody>
           <?php
            $Bookings = $Selectbookings->findAll();
            $count = 1;
            $full = date('F j, Y g:i A');
            $today = date('F j, Y');
            $comparefull = strtotime($full);
            $todaycompare = strtotime($today);
            $day = date("F j, Y");
            foreach ($Bookings as $row) {
                $time = strtotime($row['return_date_time']);
                $dd = date('F j, Y', $time);
                $rentcompare = strtotime($dd);
                if ($rentcompare == $todaycompare) {
                echo '<tr id="'.$row['rent_id'].'" style="color:orange;">';
                }
                elseif($comparefull > $time){
                echo '<tr id="'.$row['rent_id'].'" style="color:red;">';  
                }
                else{
                echo '<tr id="'.$row['rent_id'].'" style="color:green;">'; 
                }

                echo '<td>'.$count++.'</td>';
                echo '<td>' . $row['pickup_date_time'] . '</td>';
                echo '<td>' . $row['return_date_time'] . '</td>';
                $Vechile = $SelectVec->find('vechile_id',$row['vechile_id'])->fetch();
                echo '<td>' . $Vechile['vechile_name'] . '</td>';
                echo '<td>' . $row['Booked_By_User'] . '</td>';
                echo '</tr>';
                // $date = date("Y-m-d");
                // $new = strtotime($date);
                // $date1 = $row['return_date_time'];
                // $old = strtotime($date2);
                // if($new > $old){
                // $deletebooking->delete('rent_id',$row['rent_id']);
                // }
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
  <div  class="delete" style="margin-left: 1%; margin-bottom: 5%;">
    <a id="dd" href=""><button style="background-color: #dc0d0d;" id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="fa fa-minus-circle"></i>&nbsp; Delete&nbsp;</button></a>
    </div>

<script>
$(document).ready(function() {

    $('#dataTables-example').DataTable({
            responsive: true
    });

        // Add event listener for opening and closing details
    var table = $('#dataTables-example').DataTable();
 
    $('#dataTables-example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            var cid= $(this).attr('id');
            $('#dd').attr("href", "adminbooking&id="+cid);
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');


        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

});
</script>
