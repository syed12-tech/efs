<?php include 'sidebar.php'; ?>
<form action="savedd2.php" method="post">
  <?php
      $id=$_GET['id'];
      include 'connect.php';
      $s=mysqli_query($con,"select * from pollingstation where id='$id'");
      $r=mysqli_fetch_array($s);
      $pname=$r['pollingstation_name'];
      $ss=mysqli_query($con,"select * from psname where id='$pname'");
      $rr=mysqli_fetch_array($ss);
  ?>

<center>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>Add Polling Station</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Polling Station Name</label>
                        



                         <select class="form-control" id="pname" name="pname" required="">
                        <option selected="" value="<?php echo $rr['id'];?>" > <?php echo $rr['pname'];?></option>

                        <?php
                        include 'connect.php';
                        $sql=mysqli_query($con,"select * from psname");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>

                      <option value="<?php echo $row['id'] ?>"> <?php echo $row['pname'] ?></option>
                    
                       <?php
                     }
                       ?>
                       
                      </select>


                       <div id="role_error" class="error hidden">Please enter pollingstationname </div>
                      </div>

                    </div>

                  </div>
                        
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Polling Station Id</label>
                        <input type="text" class="form-control" id="desig" value="<?php echo $r['pollingstation_id'] ?>" name="pid" placeholder="Enter Polling" required="">
                        <div id="desig_error" class="error hidden">Please enter Polling Station Id </div>
                      </div>

                    </div>

                  </div>
                    <div class="row">

                    <div class="col-sm-12">

                       <div class="form-group col-sm-6">
                      <label for="ccyear">Phone Number</label>
                      <input type="text" class="form-control" id="myform_phone" value="<?php echo $r['phn_no'] ?>"  name="phone" placeholder="Enter Phone Number" maxlength="10" onkeyup ="validateForm();" required="">
                      <div id="phone_error" class="error hidden">Please enter a valid phone number</div>
                        <div id="phone_error_" class="error hidden">Please enter a  phone number</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                
                     
   
<div class="form-group w3-padding">
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="Update Data"  id="btn">  
                  <a  href="d2.php" class="w3-btn w3-card w3-blue w3-small">Cancel </a>   
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
