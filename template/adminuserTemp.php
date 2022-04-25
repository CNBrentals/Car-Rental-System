<?php
session_start();

if (isset($_GET['id'])) {
        $delete->delete('user_id', $_GET['id']);
        echo "<script>alert('Deleted!');
        window.location.href='adminusers';</script>";
        }

$_SESSION['message'] = '';

    if (isset($_POST['register'])) {
        if($_POST['password'] == $_POST['confpassword']){
            $uservalidation = $user->validation('username',$_POST['username']);
            $row = $uservalidation->fetch();
          if($row['row'] > 0 ){
            $_SESSION['message'] = "User with this username already exist please try another!!!";
          }
          else{
               $criteria =[
                    'user_id' => '',
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                    'email' => $_POST['email'],
                    'acess_level'=>'admin'

                  ];
               $addusers->inorup($criteria);
               echo "<script>alert('User Added!');</script>";
            }
        }
    else{
        $_SESSION['message'] = "password didn't match";
    }
    }
    ?>

<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">
Admin Users
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table" id="data" >
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
        </tr>
    </thead>
    <tbody id="dataa">
        <?php
            $Users = $SelectUsers->find('acess_level','admin');
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

                echo '<a id="'.$row['user_id'].'">'.$i++.'</a>';
                echo '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['acess_level'] . '</td>';
                echo '</tr>';
            }
            ?>
        </a>
    </tbody>
</table>
</div>
</div>
</div>
</div>
 <section id="form" style="margin-bottom: 10%;">
  <form id="TextBoxContainer" action="adminusers" method="POST" enctype="multipart/form-data">
    <div class="register-body" style="display: inline-block;">
    <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="fa fa-plus-circle"></i>&nbsp; Register&nbsp;</button>
    <a href="" id="delete" type="button" class="btn btn-danger"><i class="fa fa-minus-circle"></i>&nbsp; Delete&nbsp;</a>
    <div id="error" style="background-color: white;color: red;width: 100.7%; text-align: center; margin: 3%;"><?= $_SESSION['message'] ?> </div>
    </div>
  </form>
  </section>

<script>
$(document).ready(function() {

$("#removebtn").hide();

    $("#btnAdd").bind("click", function () {
        var div = $('<div class="register-body" />');
        div.html(DynamicContainer(""));
        $("#TextBoxContainer").append(div);
        $("#btnAdd").unbind("click");
        $("#removebtn").show();
        $("#error").hide();
        $("#delete").hide();
    });
       $("body").on("click", "#removebtn", function () {
        $("#delete").show();
        $(this).closest("div").remove();
        $("#removebtn").hide();
        $("#btnAdd").bind("click", function () {
        var div = $('<div class="register-body" />');
        div.html(DynamicContainer(""));
        $("#TextBoxContainer").append(div);
        $("#btnAdd").unbind("click");
        $("#removebtn").show();
        $("#error").hide();
        $("#delete").hide();
    });
    });


    function DynamicContainer(value) {
        return '<button id="removebtn" type="button" class="btn btn-danger remove"><i class="fa fa-minus-circle"></i>&nbsp; Remove&nbsp;</button><br><div class="input-section"><i class="fas fa-user"></i><input class="user-input" type="text" placeholder="Username" name="username"> </div><div class="input-section"><i class="fas fa-envelope"></i><input class="user-input" type="email" placeholder="Email" name="email"></div><div class="input-section"><i class="fas fa-lock"></i><input class="user-input" type="password" placeholder="Password" name="password"></div><div class="input-section"><i class="fas fa-lock"></i><input class="user-input" type="password" placeholder="Confirm Password" name="confpassword"></div><input class="button" id="button-login" type="submit" name="register" value="Register">'
    }

});
</script>
<style type="text/css">
    .remove{
    margin:-35px 0% 0% 25%;
    width: 20%;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {

    $('data').DataTable({
            responsive: true
    });

 
    $('tr a').click(function () {
        if ( $(this).hasClass('highlighted') ) {
            $(this).removeClass('highlighted');
        }
        else {
            var cid= $(this).attr('id');
            $('#delete').attr("href", "adminusers&id="+cid);
            $('tr a').removeClass('highlighted');
            $(this).addClass('highlighted');

        }
    } );


});
</script>
<style type="text/css">
.highlighted{
    background: red;
}
a{
 cursor: pointer;
 text-decoration: none;
}

.highlight { background-color: red; }
</style>