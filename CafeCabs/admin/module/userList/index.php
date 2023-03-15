<h4>Data User</h4>
        <br />
        <?php if(isset($_GET['success'])){?>
        <div class="alert alert-success">
            <p>Tambah Data Berhasil !</p>
        </div>
        <?php }?>
        <?php if(isset($_GET['remove'])){?>
        <div class="alert alert-danger">
            <p>Hapus Data Berhasil !</p>
        </div>
        <?php }?>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Insert Data</button>
        <a href="index.php?page=userList" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Refresh Data</a>
        <div class="clearfix"></div>
        <br />
        <!-- view barang -->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>ID Login</th>
                            <th>ID Member</th>
                            <th>Nama</th>
                            <th>User</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$totalBeli = 0;
						$totalJual = 0;
						$totalStok = 0;
						if($_GET['stok'] == 'yes')
						{
							$hasil = $lihat -> barang_stok();

						}else{
							$hasil = $lihat -> member();
						}
						$no=1;
						foreach($hasil as $isi) {
					?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $isi['id_login'];?></td>
                            <td><?php echo $isi['id_member'];?></td>
                            <td><?php echo $isi['nm_member'];?></td>
                            <td><?php echo $isi['user'];?></td>
   
                            <td>
                               
                                
                                <a href="index.php?page=userList/details&userList=<?php echo $isi['id_login'];?>"><button
                                        class="btn btn-primary btn-xs">Details</button></a>

                                <a href="index.php?page=userList/edit&userList=<?php echo $isi['id_login'];?>"><button
                                        class="btn btn-warning btn-xs">Edit</button></a>
                                <a href="fungsi/hapus/hapus.php?userList=hapus&id=<?php echo $isi['id_login'];?>"
                                    onclick="javascript:return confirm('Hapus Data user ?');"><button
                                        class="btn btn-danger btn-xs">Hapus</button></a>
                                <?php }?>
                        </tr>
                        <?php 
							$no++; 
							
						
					?>
                    </tbody>
                    
                </table>
            </div>
        </div>
        <!-- end view barang -->
        <!-- tambah barang MODALS-->
        <!-- Modal -->

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style=" border-radius:0px;">
                    <div class="modal-header" style="background:#285c64;color:#fff;">
                        <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Barang</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="fungsi/tambah/tambah.php?userList=tambah" method="POST">
                        <div class="modal-body">
                            <table class="table table-striped bordered">
                                <?php
									$format = $lihat -> member();
								?>
                                <tr>
                                    <td>ID Login</td>
                                    <td><input type="text" readonly="readonly" required value="<?php echo $format;?>"
                                            class="form-control" name="id"></td>
                                </tr>
                                
                                <tr>
                                    <td>ID Member</td>
                                    <td><input type="text" readonly="readonly" required value="<?php echo $format;?>"
                                            class="form-control" name="id"></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><input type="text" placeholder="Nama" required class="form-control"
                                            name="nama"></td>
                                </tr>
                                <tr>
                                    <td>User</td>
                                    <td><input type="text" placeholder="User" required class="form-control"
                                            name="beli"></td>
                                </tr>
                                <tr>
                                    <td>Pass</td>
                                    <td><input type="password" placeholder="Password" required class="form-control"
                                            name="pass"></td>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert
                                Data</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>