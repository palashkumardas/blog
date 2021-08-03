  <?php 
  include ('header.php');               
  include ('navbar.php');               
  include ('include/functions.php');

$id = $_REQUEST['id'];
extract($obj->getByCondition("menus","*","id=$id"));

?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-8" >
                        <div class="card" style="background-color:#f0f2ff;">
                            <div class="header">
                                <h4 class="title" >Welcome To Menu Page.</h4>
                            </div>
                            <div class="content">
                            <?php 
                            
                            if(isset($_REQUEST['update'])){
                                extract($_REQUEST);
                                $id=$_REQUEST['id'];
                                if($obj->update("menus","menu_name='$menu',content='$content',status='$status'","id=$id")){
                                    echo "<div class='alert alert-success' role='alert'>
                                    Information has been updated!
                                  </div>";
                                }else{
                                    echo "<div class='alert alert-danger' role='alert'>
                                   Something has been wrong!
                                  </div>";
                                }
                            }
                            ?>
                            <!-- form start -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="menu" >Menu:</label>
                                    <input type="text" class="form-control" name="menu" value="<?=$menu_name;?>" >
                                </div>
                                <div class="form-group">
                                    <label for="content">Content:</label>
                                    <textarea name="content" class="form-control"  name="content" cols="30" rows="10" ><?=$content;?></textarea>
                                </div>
                                <div class="form-group">
                                <select class="form-select" name="status">
                                    <option ><?=$status;?></option>
                                    <option >Active</option>
                                    <option >Inactive</option>
                                    
                                </select>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-center" name="update">Update Info</button>       
                            </form>
                            <!-- form end -->
                            
                            </div>
                        </div>
                    </div>
                </div>




                   

<!--end body -->
<?php include ('footer.php');?>