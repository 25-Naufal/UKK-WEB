 <!--sidebar end-->

 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <!--main content start-->
 <?php 
	$id = $_GET['user'];
	$hasil = $lihat -> user_edit($id);
?>
 <a href="index.php?page=userList" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
 <h4>Edit User</h4>
 <?php if(isset($_GET['success'])){?>
 <div class="alert alert-success">
     <p>Edit Data Berhasil !</p>
 </div>
 <?php }?>
 <?php if(isset($_GET['remove'])){?>
 <div class="alert alert-danger">
     <p>Hapus Data Berhasil !</p>
 </div>
 <?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<form action="fungsi/edit/edit.php?userList=edit" method="POST">
				<tr>
					<td>ID Login</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_login'];?>"
							name="id"></td>
				</tr>
                <tr>
					<td>ID Member</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_member'];?>"
							name="id"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['nm_member'];?>" name="nama"></td>
				</tr>
				
				<tr>
					<td>User</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['user'];?>" name="user"></td>
				</tr>
                <tr>
					<td>User</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['pass'];?>" name="pass"></td>
				</tr>

				<tr>
					<td>Tanggal Update</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>"
							name="tgl"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
				</tr>
			</form>
		</table>
	</div>
</div>