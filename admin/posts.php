<?php 
include ('include/functions.php');  

include ('header.php');  
include ('navbar.php'); 
?>
<!-- start body -->
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
                                <h4 class="title" >Welcome To Posts Page.</h4>
                            </div>
                            <div class="content">
                            <!-- form start -->
                            <form action="#" method="POST">
                                <div class="form-group">
                                <select class="form-select" name="cat_id">
                                    <option selected >Select cat_id</option>
                                    <option >Active</option>
                                    <option>Inactive</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="title" >Title:</label>
                                    <textarea name="title" class="form-control"  cols="10" rows="10" placeholder="Please give content" required></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="content">Content:</label>
                                    <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Please give content" required></textarea>
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

                   

<!--end body -->
<?php include ('footer.php');?>