<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">
Customer Users
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
        </tr>
    </thead>
    <tbody>
     <?php
            $Users = $SelectUsers->findmultiple('acess_level','type','user','new');
            $i=1;
            $j=0;
            $keywords = explode( ', ', '"success", "info", "warning", "danger"' );
            foreach ($Users as $row) {
                if($j<count($keywords)){
                  echo '<tr class='.$keywords[$j++].'>';
                }
                else{
                   $j=0;
                }
                echo "<td>";
                echo $i++;
                echo '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['acess_level'] . '</td>';
                echo '</tr>';
                $date = date("Y-m-d");
                $new = strtotime($date);
                $date1 = $row['Registered_On'];
                $date2 = date( "Y-m-d", strtotime( "$date1 +7 day" ));
                $old = strtotime($date2);
                if($new > $old){
                     $record =[
                    'user_id'=>$row['user_id'],
                    'type'=>'old'
                    ];
                $updateold->update($record,'user_id');
                }
            }
            ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
});
</script>
