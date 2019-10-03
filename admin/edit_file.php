<?php include ('session.php');?>
<?php
include('header.php');
$get_id = $_GET['id'];
?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ftsys </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">

					    Welcome : Administrator
                    </a>

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">
                          <div class="hero-unit-table">
                            <?php include ('connect.php');
                            $query = mysql_query("select * from files where id='$get_id'") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                            ?>

                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Product</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="inputEmail" class = "form-control" value="<?php echo $row['name']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description</label>
                                    <div class="controls">
                                        <input type="text"  name="description"  class = "form-control" value="<?php echo $row['description']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department</label>
                                    <div class="controls">
                                        <select type="text" name="department" class = "form-control" >
                                            <option><?php echo $row['category'];  ?></option>
											<option></option>
                                            <option>ICT</option>
                                            <option>Finance</option>
                                            
                                        </select>
                                    </div>
                                </div>
                  
                                <div class="control-group">
                                    <label class="control-label" for="input01">File:</label>
                                    <div class="controls">
                                        <input type="file" name="file">
                                    </div>
                                </div>

									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "files.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
                                </div>
                            </form>

     <?php
                            if (isset($_POST['update'])) {

                                $name = $_POST['name'];
                                $description = $_POST['description'];
                                $department = $_POST['department'];
                               

                                $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                                $file_name = addslashes($_FILES['file']['name']);
                                $file_size = getimagesize($_FILES['file']['tmp_name']);
//
                                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                                $fileUrl = "upload/" . $_FILES["file"]["name"];

                                mysql_query("update files set name='$name',description='$description',department='$department',fileUrl='$fileUrl' where id='$get_id'") or die(mysql_query());
                                header('location:files.php');
                            }
                            ?>                       


                        </div>
                        </div>
                        </div>
                    </div>
                </div>


				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
