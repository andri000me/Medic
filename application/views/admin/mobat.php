<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER OBAT</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<button data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Obat</button> <button data-toggle="modal" data-target="#cari" class="btn btn-primary">Cari Obat</button> <button data-toggle="modal" data-target="#upload" class="btn btn-primary">Import Obat (Excel)</button> 
							<a href="<?php echo base_url("/assets/TEMPLATE-OBAT-EMEDIC.xlsx"); ?>"><button class="btn btn-success">Download Contoh Excel</button></a>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Obat ditemukan.</div>
							<p>
							<div class="table-responsive">
                                <table id="tabel" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Kadaluarsa</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($mobat as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->namaobat; ?></td>
                                            <td><?php echo $v->satuanobat; ?></td>
                                            <td>Rp.<?php echo number_format($v->hargaobat,0,".","."). ''; ?></td>
											<?php error_reporting(0); if($v->kadaluarsa == "") { ?>
											<?php } ?>
											<?php if($v->kadaluarsa != null) { ?>
                                            <td><?php echo tgl_indo($v->kadaluarsa); ?></td>
											<?php } ?>
                                            <td><?php echo $v->stok; ?></td>
                                            <td><a href="<?php echo base_url("admin/edit_obat/$v->id_obat"); ?>"><button class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url("admin/hapus_obat/$v->id_obat"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
								<?php echo $this->pagination->create_links(); ?>
                            </div>
							
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>
	  <div class="modal fade" id="tambah">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/tambah_obat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Obat</label>
                                        <input name="namaobat" type="text" class="form-control" placeholder="Nama Obat" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="satuan" class="form-control">
											<option value="Botol">Botol</option>
											<option value="Tablet"> Tablet</option> 
											<option value="Kapsul"> Kapsul</option>
											<option value="Tube"> Tube</option>
											<option value="Ampul"> Ampul</option>
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Harga per Satuan</label>
                                        <input name="hargaobat" type="number" class="form-control" placeholder="Harga Obat" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
									<label>Tanggal Kadaluarsa</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="kadaluarsa" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
								  <div class="form-group">
								  <div class="form-line">
										<label>Stok</label>
                                        <input name="stok" type="number" class="form-control" placeholder="Stok" REQUIRED>
                                    </div>
                                    </div>

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
	  <div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/post_cari_obat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Masukan Kata Kunci</label>
                                        <input name="namaobat" type="text" class="form-control" placeholder="Cari Berdasarkan Nama Obat" REQUIRED>
                                    </div>
                                    </div>
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
						
						 <div class="modal fade" id="upload">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/uploadobat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Pilih File Excel</label>
                                        <input name="file" type="file" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-upload"></i> Upload</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
	 
	 