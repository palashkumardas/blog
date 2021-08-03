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
                                 if(isset($_REQUEST['id'])){
                                     extract($_REQUEST);
                                     $id = $_REQUEST['id'];
                                     $obj->delete("menus","id=$id");
                                        echo "<div class='alert alert-danger' role='alert'>Information has been deleted!</div>";
                                 }else{
                                    echo "<div class='alert alert-danger' role='alert'>Something has been wroong!</div>";
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