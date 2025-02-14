<div class="container mt-5 mb-5 ">
	
	<div class="card" style="margin-top: 170px; border-radius:1rem;">
		<div class="card-body">
			<?php foreach ($detail as $dt) : ?>
				<div class="row">
					<div class="col-md-5">
						<img style="width: 90%" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>">
					</div>
					<div class="col-md-7">
						<div class="table-responsive table-custom">
							<table class="table table-striped table-sm">
								<tbody>
									<tr>
										<th>Merk</th>
										<td><?php echo $dt->merk ?></td>
									</tr>
									<tr>
										<th>Penyedia</th>
										<td><?php echo $dt->nama_rental ?></td>
									</tr>
									<tr>
										<th>Alamat Rental</th>
										<td><?php echo $rental[0]->alamat ?></td>
									</tr>
									<tr>
										<th>Nomor Plat</th>
										<td><?php echo $dt->no_plat ?></td>
									</tr>
									<tr>
										<th>Warna</th>
										<td><?php echo $dt->warna ?></td>
									</tr>
									<tr>
										<th>Tahun Produksi</th>
										<td><?php echo $dt->tahun ?></td>
									</tr>
									<tr>
										<th>Status</th>
										<td>
											<?php 
												if($dt->status == '1'){
													echo "<span class='badge badge-success bagde-custom'>Tersedia</span>";
												}else{
													echo "<span class='badge badge-danger bagde-custom'>Tidak Tersedia/Sedang dirental</span>";
												}
											?>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<a href="<?= base_url(); ?>customer/data_mobil" class="btn btn-outline-secondary">Kembali</a>
											<?php 
												if($dt->status == "0"){
													echo "<span class='btn btn-danger disabled'>Telah di Rental</span>";
												}else{
													echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<button class="btn btn-success"> Rental </button>');
												}
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</div>