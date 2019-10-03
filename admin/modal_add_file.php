<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <div class="alert alert-error"><strong><center>Add File </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">

                                <hr>

								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name">

                                 </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="description"  placeholder="Description" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department:</label>
                                    <div class="controls">
                                        <select type="text" name="department" class = "form-control" placeholder="Category" >

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

								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary">Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


								</div>

									   </div>



                                    </div>

									  </form>

									   <?php include ('connect.php');
                            if (isset($_POST['go'])) {

                                $name = $_POST['name'];
                                $description = $_POST['description'];
                                $department = $_POST['department'];
                              

                                //File
                                $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                                $file_name = addslashes($_FILES['file']['name']);
                                $file_size = getimagesize($_FILES['file']['tmp_name']);
//
                                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                                $fileUrl = "upload/" . $_FILES["file"]["name"];


                                mysql_query("insert into files (name,description,department,fileUrl,insertedBy)
                            	values ('$name','$description','$department','$fileUrl','$user_username')
                                ") or die(mysql_error());

                                header('location:files.php');
                            }
                            ?>




                                </div>
                            </div>
