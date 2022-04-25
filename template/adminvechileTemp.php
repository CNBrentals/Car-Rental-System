<?php 
session_start();
if (isset($_GET['id'])) {
        $delete->delete('vechile_id', $_GET['id']);
        echo "<script>alert('Deleted!');</script>";
}

if (isset($_POST['submit'])) {
$dir = "../images/vechiles/";
 $imageData = array();
if(isset($_FILES['image'])){
    $errors= array();
    foreach($_FILES['image']['tmp_name'] as $key => $tmp_name ){
        $file_name = $_FILES['image']['name'][$key];
        $file_tmp =$_FILES['image']['tmp_name'][$key];        
        array_push($imageData, $file_name);
       
        $desired_dir="user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);        // Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,$dir.$file_name);
            }else{                                  //rename the file if another one exist
                $imgDt = "";               
            }
                    
        }else{
                print_r($errors);
        }
    }
    if(empty($error)){
        $imgDt = implode(" | ", $imageData);
    }
}

        // $record = $_POST;
        $record =[
        'vechile_name'=>$_POST['vechile_name'],
        'no_of_seat'=>$_POST['number_of_seat'],
        'price'=>$_POST['price'],
        'mileage'=>$_POST['mileage'],
        'description'=>$_POST['description'],
        'engine_type'=>$_POST['engine_type'],
        'regestration_Number'=>$_POST['regestration_Number'],
        'vechile_type'=>$_POST['vechile_type'],
        'image'=>$imgDt
        ];
        // unset($record['submit']);
        $addvec->add($record);

    echo "<script>alert('Vechile Added!');</script>";

    }
if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){
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
                <th>Vechile Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Registration No.</th>
                <th>Engine type</th>
                <th>No of Seat</th>
                <th width="10%">Image</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $Vechile = $SelectVechile->findAll();

            foreach ($Vechile as $row) {
                echo '<tr id="'.$row['vechile_id'].'">';
                // $id=$row['vechile_id'];
                echo '<td>' . $row['vechile_name'] . '</td>';
                echo '<td>' . $row['vechile_type'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td>' . $row['regestration_Number'] . '</td>';
                echo '<td>' . $row['engine_type'] . '</td>';
                echo '<td>' . $row['no_of_seat'] . '</td>';
                // $source = explode(" | ", $row['image']);
                // for($i = 0; $i < count($source); $i++){
                //     echo "<td $source[$i]></td>";
                // }
                echo "<td style='float:left;'>";
                $source = explode(" | ", $row['image']);
                for($i = 0; $i < count($source); $i++){
                    echo "<img style='margin-left:5%; height='25%' width='25%' src='../images/vechiles/$source[$i]' >";
                }
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

  <section id="form" style="margin-bottom: 10%; display: flex; flex-direction: row;">
  <div>
  <form id="TextBoxContainer" action="adminvechile" method="POST" enctype="multipart/form-data">
    <div class="form-row">
    <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="fa fa-plus-circle"></i>&nbsp; Add&nbsp;</button>
    </div>
  </form>
  </div>
  <div  class="edit" style="margin-left: 1%;">
    <a id="aa" href=""><button style="background-color: green;" id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="fa fa-plus-circle"></i>&nbsp; Edit&nbsp;</button></a>
    </div>
  <div  class="delete" style="margin-left: 1%;">
    <a id="dd" href=" "><button style="background-color: #dc0d0d;" id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="fa fa-minus-circle"></i>&nbsp; Delete&nbsp;</button></a>
    </div>
  </section>
<script>
    <?php } 
  else{
    header("Location: error");
  }
?>

$(document).ready(function() {

    $("#btnAdd").bind("click", function () {
        var div = $('<div class="form-row" />');
        div.html(DynamicContainer(""));
        $("#TextBoxContainer").append(div);
    });

    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
    });

    function DynamicContainer(value) {
        return '<br><br><div class="form-group col-md-6"><label>Vechile Name</label><input name="vechile_name" type="text" class="form-control" id="inputEmail4" placeholder="Vechile Name"></div><div class="form-group col-md-5"><label>Number of Seat</label><input name="number_of_seat" type="text" class="form-control" id="inputPassword4" placeholder="Number of Seat"></div><div class="form-group col-md-6"><label>Rent Price</label><input name="price" type="text" class="form-control" id="inputEmail4" placeholder="Price/day"></div><div class="form-group col-md-5"><label>mileage</label><input name="mileage" type="text" class="form-control" id="inputEmail4" placeholder="mileage"></div><div class="form-group col-md-6"><label>Description</label><input name="description" type="text" class="form-control" id="inputEmail4" placeholder="Description"></div><div class="form-group col-md-5"><label for="inputState">Engine Type</label><select name="engine_type" id="inputState" class="form-control"><option selected>petrol</option><option>Disel</option><option>Electric</option><option>None</option></select></div><div class="form-group col-md-6"><label>Regestration Number</label><input name="regestration_Number" type="text" class="form-control" id="inputPassword4" placeholder="Regestration Number"></div><div class="form-group col-md-5"><label for="inputState">Vechile Type</label><select name="vechile_type" id="inputState" class="form-control"><option selected>Choose.......</option><option>Car</option><option>Motor Bike</option><option>ATV Bike</option><option>Bicycle</option></select></div><div class="form-group" style="margin-left: 1.5%; margin-top: 3%;"><label style="width:100%;">Images</label><input type="file" name="image[]" multiple/></div><input type="submit" name="submit" value="submit" class="btn btn-primary" style="margin-top: 3%; margin-left:2%; background-color:green;">&nbsp;&nbsp;&nbsp;<button style="margin-top: 3%;" type="button" class="btn btn-danger remove"><i class="fa fa-minus-circle"></i>&nbsp; Remove&nbsp;</button>'
    }

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
            $('#aa').attr("href", "edit&id="+cid);
            $('#dd').attr("href", "adminvechile&id="+cid);
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');


        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

});
</script>
