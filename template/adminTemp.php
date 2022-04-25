  <?php session_start(); 
if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){?>
  <div><h2>You are now logged in Mr. <?php echo $_SESSION ['username']; ?></h2>
  <a href="logout"><button style="width:100px ;height:40px; background-color: black; color: red; border-radius: 10px;">Logout</button></a></div>
  <?php } 
  else{
  	header("Location: error");
  }
  ?>