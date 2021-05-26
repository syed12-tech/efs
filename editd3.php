<?php include 'sidebar.php'; ?>
<form action="savedd3.php" method="post">
   <?php
      $id=$_GET['id'];
      include 'connect.php';
      $s=mysqli_query($con,"select * from sectormaster where sectormaster_id='$id'");
      $r=mysqli_fetch_array($s);
  
  ?>

<center>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>Sector Master</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Sector Master Id</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $r['sectormaster_id'] ?>" name="sectormaster" placeholder="Enter your Polling Station Id" required="">
                         <div id="name_error" class="error hidden">Please enter Polling Station Id</div>
                      </div>

                    </div>

                  </div>
                                    <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Polling Station Id</label>
                        <input type="text" class="form-control" id="name" name="pid" 
                        value="<?php echo $r['pollingstation_id'] ?>" placeholder="Enter your Polling Station Id" required="">
                         <div id="name_error" class="error hidden">Please enter Polling Station Id</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Zonal Officer Id</label>
                        <input type="text" class="form-control" id="desig" name="zid" placeholder="Enter Zonal Officer Id" required=""  value="<?php echo $r['zonalofficer_id'] ?>">
                        <div id="desig_error" class="error hidden">Please enter Zonal Officer Id </div>
                      </div>

                    </div>

                  </div>
                    <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccmonth">Sector Officer Id</label>
                       <input type="text" class="form-control" id="desig" name="sid" placeholder="Enter Sector Officer Id" required=""  value="<?php echo $r['sectorofficer_id'] ?>">
                        <div id="desig_error" class="error hidden">Please enter Sector Officer Id </div>
                     </div>

                    </div>

                  </div>
                  <!--/.row-->
                   <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Assisting Officer Id</label>
                        <input type="text" class="form-control" id="desig" name="aid" placeholder="Enter Assisting Officer Id" required=""  value="<?php echo $r['assistingofficer_id'] ?>">
                        <div id="desig_error" class="error hidden">Please enter Assisting Officer Id </div>
                      </div>

                    </div>

                  </div>

                
                     
   
<div class="form-group w3-padding">
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="Update Data"  id="btn">  
                  <a  href="d3.php" class="w3-btn w3-card w3-blue w3-small">Cancel </a> 
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