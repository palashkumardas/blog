  <?php 
  include ('header.php');               
  include ('navbar.php');               
  include ('include/functions.php');
?>
<!-- start body -->
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                  <?php
                                  extract($_REQUEST);
                                  if ($obj->insert("menus","menu_name= '$menu', content='$content',status='$status'")) {
                                    echo "<div class='alert alert-success' role='alert'> Data insert successfully</div>";
                                  }
                                  else
                                  {
                                    echo "<div class='alert alert-danger' role='alert'>Data insert fail</div>";
                                  }
                                  ?>
                            </div>                        
                        </div>
                    </div>  
                </div> <!--end row-->
            </div> <!--content fluid-->
</div> <!--end content-->
                 

                   

<!--end body -->
    


 <?php include ('footer.php');?>