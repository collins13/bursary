
<?php
ob_start();
include 'config/config.php';

$id = $_POST['id'];
$sql1 = "SELECT * FROM apply WHERE id ='$id'";
$result = $conn->query($sql1);
$result1 = mysqli_fetch_assoc($result);
 ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" onclick="closeModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="card" style="width: 18rem;">
                <div class="card-header bg-warning">
                   Personal details
               </div>
               <div class="card-body">
                 <tr>
                   <td class="text-uppercase">Email: <?=$result1['email']?></td><br>
                   <td class="text-uppercase">Phone: <?=$result1['phone']?></td><br>
                   <td class="text-uppercase">Adm NO: <?=$result1['adm']?></td><br>
                   <td>ID No: <?=$result1['id_no']?></td><br>
                   <td>Gender: <?=$result1['gender']?></td><br>
                   <td>parent status: <?=$result1['parent']?></td><br>
                   <td>social status: <?=$result1['social']?></td>
                 </tr>

              </div>
          </div>
            </div>
            <div class="col-md-6">
              <div class="card" style="width: 18rem; margin-bottom:4rem;">
                <div class="card-header bg-warning text-uppercase">
                   region details
               </div>
               <div class="card-body">
                 <tr>
                   <td>sub-county: <?=$result1['s_county']?></td><br>
                   <td>ward: <?=$result1['ward']?></td><br>
                   <td>village: <?=$result1['village']?></td>
                 </tr>

              </div>
          </div>
            </div>

            <div class="col-md-6">
              <div class="card" style="width: 18rem;">
                <div class="card-header bg-warning text-uppercase">
                   institution details
               </div>
               <div class="card-body">
                 <tr>
                   <td>institution name: <?=$result1['institution']?></td><br>
                   <td>course name: <?=$result1['cn']?>
                 </tr>

              </div>
          </div>
            </div>

          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-danger" onclick="closeModal()">Close</button>
        <!--<button  class="btn btn-outline-success" onclick="approveModal(<?=$result1['id']?>)" >Approve</button>-->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function closeModal() {
  $('#myModal').modal('hide');
  setTimeout(function(){
    $('#myModal').remove();
  },500)
}

function approveModal(id){
  var data = {"id" : id};
  $.ajax({
    url:'approve.php',
    method:'post',
    data:data,
    success:function(data){

      $('body').append(data);
        $('#myModal').modal('hide');

    },
    error:function(){
      alert('something went wrong');
    }
  });
}

</script>


<?php echo ob_get_clean(); ?>
