<?php 
include ('header.php'); 
include ('navbar.php'); 
include ('include/functions.php');
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
                        <div class="card" style="background-color:#CCFFCC;">
                            <div class="header">
                                <h4 class="title" >Welcome To Categories Page.</h4>
                            </div>
                            <div class="content">
                            <?php 
                            if(isset($_REQUEST['submit'])){
                                extract($_REQUEST);
                                $obj->insert("categories","cat_name='$category', status='$status'");
                                echo "<div class ='alert alert-success' role ='alert'>Information has been inserted!</div>";
                            }
                            ?>
                            <!-- form start -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="category" >Category:</label>
                                    <input type="text" class="form-control" name="category" placeholder="Please give menu" required>
                                </div>
                                <div class="form-group">
                                <select class="form-select" name="status">
                                    <option selected >Select Status</option>
                                    <option >Active</option>
                                    <option>Inactive</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-center" name="submit">Submit Info</button>       
                            </form>
                            <!-- form end -->
                            
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Show information Table</h4>
                            </div>
                            <div class="content">
                                <!-- start table -->
                               <?php
                                echo $obj->getCategories("categories","*","1","table table-striped table-hover");
                               ?>
                                </div>
                                <!-- end  table -->
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Update 
                                        <i class="fa fa-circle text-danger"></i> Delete
                                        <i class="fa fa-history"></i> last Update Time: <?php ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







<?php include ('footer.php');?>