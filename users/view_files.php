<?php include ('session.php');?>
<?php include ('header.php');?>
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
                <a class="navbar-brand" href="# "><font  color="gold">ftsys</font></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">

    <font  color="gold">        Welcome : <?php echo "$user_username"; ?></font>
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
                    <div class="col-md-12">
                        <h1 class="page-header">

               <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              Add File
                            </button>


                        </h1>
            <?php include ('modal_add_file.php');?>

            <div class="hero-unit-table">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                           
                                <thead>
                                    <tr>
                                       <th>Insert Date</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysql_query("select * from files where insertedBy = '$user_username' ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $id = $row['id'];

                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['timeInserted']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['department']; ?></td>
                                            
                                            
                                         
                                            <td width="50" align="center">  
                                                <a href="<?php echo $row['fileUrl'];?>" target="_blank">  
                                                <img src="../admin/<?php echo $row['fileUrl']; ?>" class="img-rounded" width="50" height="40"></td></a>
                                                                  <td width="160">
                                        <a href="<?php echo $row['fileUrl'];?>" target="_blank" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Download File</a>
                                    </td>
                                            <!-- product delete modal -->
                              
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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
