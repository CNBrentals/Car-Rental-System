<?php
      
      require '../function/database.php';
      require '../function/loadTem.php';
      if(isset($_GET['page']))
      {
        $page = $_GET['page'];
      }else
        $page = 'admin';
        require '../view/'.$page.'.php';

        $Vars =
          [
             'page_heading'=>$heading,
             'page_content'=>$content,
             'page_title'=>$page_title
          ];

        $htmlContent = loadTemplate('../template/admin_layout.php',$Vars);
        echo $htmlContent;
 ?>

