
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Penjualan Handphone</title>
  <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
  <meta content="Aguzrybudy" name="author"/>
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Aplikasi Penjualan Handphone</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="index.php">Penjualan</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
  
<div class="container">
<body id="top">

  <p>Menyediakan Berbagai Merk Handphone Seperti : Samsung, Oppo, Vivo, Xiaomi dan Berbagai Tipe Yang Kami Sediakan</p>
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      

<table id="mytable" class="table table-bordered">
    <thead>
      <th>no</th>
      <th>Merk</th>
      <th>Tipe</th>
      <th>Stock</th>
      <th>Satuan</th>
      <th>Harga</th>
      <th>Action</th>
    </thead>
<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $modal=mysqli_query($koneksi,"SELECT * FROM barang");
  while($r=mysqli_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['Merk']; ?></td>
      <td><?php echo  $r['Tipe']; ?></td>
      <td><?php echo  $r['Stock']; ?></td>
      <td><?php echo  $r['Satuan']; ?></td>
      <td><?php echo  $r['Harga']; ?></td>
      <td>
         <a href="#" class='open_modal' id='<?php echo  $r['id_barang']; ?>'>Edit</a>
         <a href="#" onclick="confirm_modal('proses_delete.php?&id_barang=<?php echo  $r['id_barang']; ?>');">Delete</a>
      </td>
  </tr>
 

<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data Penjualan Handphone)</h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <!-- <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Merk</label>
                  <input type="text" name="modal_name"  class="form-control" placeholder="Modal Name" required/>
                </div> -->
                <div class="form-group">
              <label for="Merk">Merk</label>
              <select class="form-control" id="Merk" name="Merk">
                <option value="Samsung">SAMSUNG</option>
                <option value="Oppo">OPPO</option>
                <option value="Vivo">VIVO</option>
                <option value="Xiaomi">XIAOMI</option>
              </select>
            </div>

            <div class="form-group">
            <label for="Tipe">Tipe</label>
              <select class="form-control" id="Tipe" name="Tipe">
                        <option value="Samsung Galaxy M53 5G">Samsung Galaxy M53 5G</option>
                        <option value="Samsung Galaxy M33 5G">Samsung Galaxy M33 5G </option>
                        <option value="Samsung Galaxy S22 Ultra">Samsung Galaxy S22 Ultra</option>
                        <option value="Samsung Galaxy S22+">Samsung Galaxy S22+</option>
                        <option value="Samsung Galaxy A04e">Samsung Galaxy A04e</option>
                        <option value="Oppo A77s">Oppo A77s</option>
                        <option value="Oppo Reno8 4G">Oppo Reno8 4G</option>
                        <option value="Oppo Reno8 5g">Oppo Reno8 5g</option>
                        <option value="Oppo Reno8 Pro 5G">Oppo Reno8 Pro 5G</option>
                        <option value="Vivo V25 Pro 5G">Vivo V25 Pro 5G</option>
                        <option value="Vivo V25 5G">Vivo V25 5G</option>
                        <option value="Vivo Y16">Vivo Y16</option>
                        <option value="Xiaomi Redmi A1">Xiaomi Redmi A1</option>
                        <option value="Xiaomi Redmi 10 5G">Xiaomi Redmi 10 5G</option>
                        <option value="Xiaomi 12 Lite 5G">Xiaomi 12 Lite 5G</option>
              </select>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Stock">Stock</label>
                  <input type="text" name="Stock"  class="form-control" placeholder="Stock" required/>
                </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Satuan">Satuan</label>
                  <input type="text" name="Satuan"  class="form-control" placeholder="Satuan" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Date">Date</label>
                  <input type="text" name="date"  class="form-control" plcaceholder="Timestamp" disabled value="Timestamp" required/>
                </div>

                <div class="form-group">
                <label for="Harga">Harga</label>
              <select class="form-control" id="Harga" name="Harga">
                          <option value="6300000">Samsung Galaxy M53 5G</option>
                          <option value="5000000">Samsung Galaxy M33 5G</option>
                          <option value="19000000">Samsung Galaxy S22 Ultra</option>
                          <option value="16000000">Samsung Galaxy S22+</option>
                          <option value="1300000">Samsung Galaxy A04e</option>
                          <option value="3200000">Oppo A77s</option>
                          <option value="4300000">Oppo Reno8 4G</option>
                          <option value="4400000">Oppo Reno8 5G</option>
                          <option value="10000000">Oppo Reno8 Pro 5G</option>
                          <option value="9000000">Vivo V25 Pro 5G</option>
                          <option value="5500000">Vivo V25 5G</option>
                          <option value="1700000">Vivo Y16</option>
                          <option value="1200000">Xiaomi Redmi A1</option>
                          <option value="2700000">Xiaomi Redmi 10 5G</option>
                          <option value="5500000">Xiaomi 12 Lite 5G</option>
              </select>
              </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {id_barang: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>

  



