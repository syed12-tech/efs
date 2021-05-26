<?php include 'sidebar.php'; ?>
<form action="savedd4.php" method="post">
<center>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>Group Master</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">

                   <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Group Master Id</label>
                        <input type="text" class="form-control" id="name" name="gid" placeholder="Enter your Group Master Id" required="">
                         <div id="name_error" class="error hidden">Please enter Group Master Id</div>
                      </div>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">First Polling Id</label>
                        <input type="text" class="form-control" id="name" name="fid" placeholder="Enter your First Polling Id" required="">
                         <div id="name_error" class="error hidden">Please enter First Polling Id</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->
                  <div class="row">
                   <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Second Polling Id</label>
                        <input type="text" class="form-control" id="name" name="sid" placeholder="Enter your Second Polling Id" required="">
                         <div id="name_error" class="error hidden">Please enter Second Polling Id</div>
                      </div>

                    </div>

                  </div>
                       <div class="row">
                       <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Third Polling Id</label>
                        <input type="text" class="form-control" id="name" name="tid" placeholder="Enter your Third Polling Id" required="">
                         <div id="name_error" class="error hidden">Please enter Third Polling Id</div>
                      </div>

                    </div>

                  </div>

                       <div class="row">
                       <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Presiding Officer Id</label>
                        <input type="text" class="form-control" id="name" name="pid" placeholder="Enter your Presiding Officer Id" required="">
                         <div id="name_error" class="error hidden">Please enter Presiding Officer Id</div>
                      </div>

                    </div>

                  </div>
                
                  

                 

                
                     
   
<div class="form-group w3-padding">
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="register"  id="btn" onclick="validatedata()">  
</div>
                  </div>
                  <!--/.row-->
                </div>
              </div>

            </div>
            <!--/.col-->
</div></div></div>
</form>
<center>
<div class="w3-content" style="width: 80%;">
   <table class="w3-table-all " id="myTable">
              <thead>
                <tr style="background-color: mediumseagreen; color:white;">
                  <th>Slno</th>
                    
                    <th>Group Master ID</th>
                    <th>First Polling ID</th>
                    <th>Second Polling ID</th>
                    <th>Third Polling ID</th>
                    <th>Presiding Officer ID</th>
                    
                    <th></th>
                    <th></th>
                   

                </tr>
                </thead>
                <?php
                include 'connect.php';
                    $s=mysqli_query($con,"SELECT * FROM groupmaster WHERE status=1");
                    while ($r=mysqli_fetch_array($s)) 
                    {
                      
                     $id=$r['groupmaster_id'];
                  ?>
                  <tr style="font-size: 15px; font-family: roboto; ">
                    <td></td>
                    <td>EMP<?php echo $r['groupmaster_id'] ; ?></td>
                     
                     
                        
                      
                        <td><?php echo $r['fid'] ; ?></td>
                        <td><?php echo $r['sid'] ; ?></td>
                        <td><?php echo $r['tid'] ; ?></td>
                        <td><?php echo $r['pid'] ; ?></td>
                        
                      
                        
                       
                         <td><a href="<?php echo 'editd4.php?id='.$id.''?>" class="w3-btn w3-medium w3-blue w3-card">Edit</a></td>
                        <td><a href="<?php echo 'deleted4.php?id='.$id.''?>" class="w3-btn w3-medium w3-red w3-card " onclick="return confirm('do you really want to delete this record')">Delete</a></td>
                    
                       
                  </tr>
                    
                   <?php      
                    }
                    ?>
               

            </table>
        </div>
</center>

</main>



<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script src="jQueryAssets/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
        $(document).ready(function(){
         var t = $('#myTable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

</script>
</form>
