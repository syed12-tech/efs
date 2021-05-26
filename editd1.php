<?php include 'sidebar.php'; ?>
<form action="savedd1.php" method="post">
  <?php
      $id=$_GET['id'];
      include 'connect.php';
      $s=mysqli_query($con,"select * from pollingpersonnel where id='$id'");
      $r=mysqli_fetch_array($s);
      $role=$r['designation'];
      $ss=mysqli_query($con,"select * from designation where id='$role'");
      $rr=mysqli_fetch_array($ss);
  ?>

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
                        <input type="text" class="form-control" value="<?php echo $r['name'] ?>" name="pname" placeholder="Enter your Polling name" required="">
                         <div id="name_error" class="error hidden">Please enter Polling Name</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Polling Id</label>
                        <input type="text" class="form-control"  name="pid" value="<?php echo $r['polling_id'] ?>" placeholder="Enter Polling id" required="">
                        <div id="desig_error" class="error hidden">Please enter Polling Id </div>
                      </div>

                    </div>

                  </div>
                    <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccmonth">Designation</label>
                      <select class="form-control"  name="desig" required="">
                        <option selected=""  value="<?php echo $rr['id']?>"><?php echo $rr['designation'];?></option>
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
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="Update Data"  id="btn">  
                  <a  href="d1.php" class="w3-btn w3-card w3-blue w3-small">Cancel </a>   
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
