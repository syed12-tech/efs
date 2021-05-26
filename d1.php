<?php include 'sidebar.php'; ?>
<form action="savedd1.php" method="post">
<center>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>Add Polling Personnel</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Polling Name</label>
                        <input type="text" class="form-control"  name="pname" placeholder="Enter your Polling name" required="">
                         <div id="name_error" class="error hidden">Please enter Polling Name</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Polling Id</label>
                        <input type="text" class="form-control"  name="pid" placeholder="Enter Polling id" required="">
                        <div id="desig_error" class="error hidden">Please enter Polling Id </div>
                      </div>

                    </div>

                  </div>
                    <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccmonth">Designation</label>
                      <select class="form-control"  name="desig" required="">
                        <option selected="" disabled="" value="">Select Designation</option>
                        <?php
                        include 'connect.php';
                        $sql=mysqli_query($con,"select * from designation");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        <option value="<?php echo $row['id']; ?>" > <?php echo $row['designation']; ?></option>
                       
                       <?php
                     }
                       ?>
                       
                      </select>
                       <div id="role_error" class="error hidden">Please enter Designation </div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                
                     
   
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
</center>
<center>
<div class="w3-content" style="width: 80%;">
   <table class="w3-table-all " id="myTable">
              <thead>
                <tr style="background-color: mediumseagreen; color:white;">
                  <th>Slno</th>
                    <th>ID</th> 
                    <th>Polling Name</th>
                    <th>Designation</th>
                   <th>Polling ID</th>
                    
                    <th></th>
                    <th></th>
                   

                </tr>
                </thead>
                <?php
                    $s=mysqli_query($con,"SELECT * FROM pollingpersonnel WHERE status=1 ");
                    while ($rrr=mysqli_fetch_array($s)) 
                    {
                      $des=$rrr['designation'];
                      $sq=mysqli_query($con,"select * from designation where id='$des'");
                      $r=mysqli_fetch_array($sq);
                      $id=$rrr['id'];
                  ?>
                  <tr style="font-size: 15px; font-family: roboto; ">
                    <td></td>
                      <td>EMP<?php echo $rrr['id'] ; ?></td>
                        
                      
                        <td><?php echo $rrr['name'] ; ?></td>
                       <td><?php echo $r['designation'] ; ?></td>
                        <td><?php echo $rrr['polling_id'] ; ?></td>
                         
                       
                         <td><a href="<?php echo 'editd1.php?id='.$id.''?>" class="w3-btn w3-medium w3-blue w3-card">Edit</a></td>
                        <td><a href="<?php echo 'deleted1.php?id='.$id.''?>" class="w3-btn w3-medium w3-red w3-card " onclick="return confirm('do you really want to delete this record')">Delete</a></td>
                    
                       
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
