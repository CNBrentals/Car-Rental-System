<?php
session_start();
$_SESSION['message'] = '#modal';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $_SESSION['message'] ='rent?id=';
  // $_SESSION['message'] = 'index.php?page=rent&id=';
  }
  
           $row = $SelectVechile->validation('vechile_type','Car');
           $total = $row->fetchColumn();

            $start = 0;
            $limit = 4;

            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $start = ($id-1)*$limit;
            }
            else
            {
              $id = 1; 
            }

            $page = ceil($total/$limit);
            $limit = $resultt->limitfind('vechile_type','Car',$start,$limit);

            foreach ($limit as $row) {
              ?>
              <div class="vechiles-content--box">
                <div class="vechiles-content__icon">
                  <?php 
                  $source = explode(" | ", $row['image']);
                  $Book = $selectbook->find('vechile_id',$row['vechile_id'])->fetch();
                  if($row['vechile_id'] == $Book['vechile_id']){
                  echo "<img class='img_offer shadow' src='../images/vechiles/$source[0]' >BOOKED!!";
                }
                else{
                  echo "<img class='img_offer' src='../images/vechiles/$source[0]' >";
                }
                ?>
                </div>
              <div class="vechiles-content__title">
              <h3><?php echo $row['vechile_name']; ?></h3>
              </div>
              <div class="vechiles-content__desc">
              <div class="vecinfo">
              <h5>Price<i class="fa fa-dollar-sign deticon"><?php echo $row['price']; ?>/hour&nbsp &nbsp </i></h5>
              <h5>Type<i class="fa fas fa-car-alt deticon"><?php echo $row['vechile_type']; ?>&nbsp &nbsp </i></h5>
              <h5>Engine<i class="fa fas fa-gas-pump deticon"><?php echo $row['engine_type']; ?>&nbsp &nbsp </i></h5>
              <h5>Mileage<i class="fa fas fa-route deticon"><?php echo $row['mileage']; ?></i></h5>
              <h5>Seats<i  class="fa fa-user deticon"><?php echo $row['no_of_seat'];?>&nbsp &nbsp &nbsp&nbsp &nbsp  </i></h5>
              </div>
              <p><?php echo $row['description']; ?></p>
              </div>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $row['vechile_id'] != $Book['vechile_id']){?>
              <a href="<?php echo $_SESSION['message'].$row['vechile_id']; ?>" class="bookbox-btn">Book Now</a>
              <?php }elseif($row['vechile_id'] == $Book['vechile_id']){?>
              <a href="#alert" class="bookbox-btn">Book Now</a>
            <?php }elseif (isset($_SESSION['unactiveloggedin']) && $_SESSION['unactiveloggedin'] == true && $row['vechile_id'] != $Book['vechile_id']){?>
              <a href="<?php echo $_SESSION['message'];?>" class="bookbox-btn">Book Now</a>
              <?php }else{?>
              <a href="<?php echo $_SESSION['message'];?>" class="bookbox-btn">Book Now</a>
              <?php
            }
              ?>

              </div>
            
          <?php } ?>
          

  <ul class="pagination" style="float: right; margin-right: 3%;">
    
    <li class="page-item">
      <?php if($id > 1){ ?>
      <a class="page-link" href="?id=<?php echo ($id-1); ?>">Previous</a>
    </li>
    <?php } ?>
   
    
    <!--how many page making total data field-->
    <?php if($id != $page){ ?>
      <a class="page-link" href="?id=<?php echo ($id+1); ?>">Next</a>
    </li>
    <?php } ?>
  
  </ul>

             <div class="lightbox" id="modal">
            <div class="lightbox-container">
              <a href="#" class="lightbox-close"><i class="fa fa-window-close"></i></a>
              <div class="lightbox-content">
                <div class="lightbox-content__title">
                  <?php
                if (isset($_SESSION['unactiveloggedin']) && $_SESSION['unactiveloggedin'] == true){?>
                <p>Please activate your Account to book</p>
                </div>
                <a href="compreg" class="bookbox-btn">Click here</a>
                <?php }else{?>
                  <p>Register or login to book</p>
                </div>
                <a href="login" class="bookbox-btn">Click here</a>
                  <?php }?>
              </div>
            </div>
          </div>
              <div class="lightbox" id="alert">
            <div class="lightbox-container">
              <a href="#" class="lightbox-close"><i class="fa fa-window-close"></i></a>
              <div class="lightbox-content">
                <div class="lightbox-content__title">
                  <p>Please select others this is on booking</p>
                </div>
                <a href="#" class="bookbox-btn">Ok</a>
              </div>
            </div>
          </div>