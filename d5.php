<?php include 'sidebar.php'; ?>
<form action="savedd5.php" method="post">
<center>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>PS  Randomization</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">

  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Sector Master Id</label>
                        <input type="text" class="form-control" id="name" name="sid" placeholder="Enter your Sector Master Id" required="">
                         <div id="name_error" class="error hidden">Please enter Sector Master Id</div>
                      </div>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Group Master Id</label>
                        <input type="text" class="form-control" id="name" name="gid" placeholder="Enter your Group Master Id" required="">
                         <div id="name_error" class="error hidden">Please enter Group Master Id</div>
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
<center>
<div class="w3-content" style="width: 80%;">
   <table class="w3-table-all " id="myTable">
              <thead>
                <tr style="background-color: mediumseagreen; color:white;">
                  <th>Slno</th>
                   <th>ID</th>
                  

                    
                    <th>Sector Master ID</th>
                    <th>Group Master ID</th>
                    
                    <th></th>
                    <th></th>
                   

                </tr>
                </thead>
                <?php
                include 'connect.php';
                    $s=mysqli_query($con,"SELECT * FROM psrandomization WHERE status=1");
                    while ($r=mysqli_fetch_array($s)) 
                    {
                      
                     $id=$r['id'];
                  ?>
                  <tr style="font-size: 15px; font-family: roboto; ">
                    <td></td>
                    <td>EMP<?php echo $r['id'] ; ?></td>
                     
                     
                        <td><?php echo $r['sectormaster_id'] ; ?></td>
                      
                      
                        <td><?php echo $r['groupmaster_id'] ; ?></td>
                      
                        
                       
                         <td><a href="<?php echo 'editd5.php?id='.$id.''?>" class="w3-btn w3-medium w3-blue w3-card">Edit</a></td>
                        <td><a href="<?php echo 'deleted5.php?id='.$id.''?>" class="w3-btn w3-medium w3-red w3-card " onclick="return confirm('do you really want to delete this record')">Delete</a></td>
                    
                       
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
