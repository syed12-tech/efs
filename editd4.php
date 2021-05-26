<?php include 'sidebar.php'; ?>
<form action="savedd4.php" method="post">
   <?php
      $id=$_GET['id'];
      include 'connect.php';
      $s=mysqli_query($con,"select * from groupmaster where groupmaster_id='$id'");
      $r=mysqli_fetch_array($s);
  
  ?>

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
                        <input type="text" class="form-control" id="name" value="<?php echo $r['groupmaster_id'] ?>" name="gid" placeholder="Enter your Polling Station Id" required="">
                         <div id="name_error" class="error hidden">Please enter Group Master Id</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">First Polling Id</label>
                        <input type="text" class="form-control" id="desig" name="fid" value="<?php echo $r['fid'] ?>" placeholder="Enter First Polling Id" required="">
                        <div id="desig_error" class="error hidden">Please enter First Polling Id </div>
                      </div>

                    </div>

                  </div>
                    <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccmonth">Second Polling Id</label>
                       <input type="text" class="form-control" id="desig" name="sid" value="<?php echo $r['sid'] ?>" placeholder="Enter Second Polling Id" required="">
                        <div id="desig_error" class="error hidden">Please enter Second Polling Id </div>
                     </div>

                    </div>

                  </div>
                  <!--/.row-->
                   <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Third Polling Id</label>
                        <input type="text" class="form-control" id="desig" name="tid" value="<?php echo $r['tid'] ?>" placeholder="Enter Third Polling Id" required="">
                        <div id="desig_error" class="error hidden">Please enter Third Polling Id </div>
                      </div>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Presiding Officer Id</label>
                        <input type="text" class="form-control" id="desig" name="pid" value="<?php echo $r['pid'] ?>" placeholder="Enter Presiding OfficerId" required="">
                        <div id="desig_error" class="error hidden">Please enter Presiding Officer Id </div>
                      </div>

                    </div>

                  </div>

                

                
                     
   
<div class="form-group w3-padding">
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="Update Data"  id="btn">  
                  <a  href="d4.php" class="w3-btn w3-card w3-blue w3-small">Cancel </a> 
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

</body>
</html>