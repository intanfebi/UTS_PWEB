<!--
buat ngedit ya brooo.......!
-->
<?php
    include "koneksi.php";
	$id_barang=$_GET['id_barang'];
	$modal=mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Menggunakan Modal Boostrap (Model popup)</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Merk">Merk</label>
                    <input type="hidden" name="id_barang"  class="form-control" value="<?php echo $r['id_barang']; ?>" />
     				<input type="text" name="Merk"  class="form-control" value="<?php echo $r['Merk']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Tipe">Tipe</label>
     				<input type="text" name="Tipe"  class="form-control" value="<?php echo $r['Tipe']; ?>" readonly/>
                </div>

				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="Stock">Stock</label>
     				<input type="text" name="Stock"  class="form-control" value="<?php echo $r['Stock']; ?>"/>
                </div>

				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="Satuan">Satuan</label>
     				<input type="text" name="Satuan"  class="form-control" value="<?php echo $r['Satuan']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Date">Date</label>       
     				<input type="text" name="date"  class="form-control" value="<?php echo $r['date']; ?>" disabled/>
                </div>

				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="Harga">Harga</label>
     				<input type="text" name="Harga"  class="form-control" value="<?php echo $r['Harga']; ?>" readonly/>
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

             <?php } ?>

            </div>

           
        </div>
    </div>