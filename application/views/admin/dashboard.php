<?php $this->load->view("./includes/header.php"); ?>
<?php $this->load->view("./includes/menu.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<br>
	<!-- Main content -->
	<section class="content">

		<!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<div class="card card-default">
					<div class="card-header">
						<h3 class="card-title">Buat Laporan Penindakan</h3>
					</div>
					<div class="card-body p-0">
						<div class="bs-stepper">
							<div class="bs-stepper-header" role="tablist">
								<!-- your steps here -->
								<div class="step" data-target="#logins-part">
									<button type="button" class="step-trigger" role="tab" aria-controls="logins-part"
											id="logins-part-trigger">
										<span class="bs-stepper-circle">1</span>
										<span class="bs-stepper-label">LPTP</span>
									</button>
								</div>
								<div class="line"></div>
								<div class="step" data-target="#information-part">
									<button type="button" class="step-trigger" role="tab"
											aria-controls="information-part" id="information-part-trigger">
										<span class="bs-stepper-circle">2</span>
										<span class="bs-stepper-label">LPHP</span>
									</button>
								</div>
								<div class="line"></div>
								<div class="step" data-target="#information-part3">
									<button type="button" class="step-trigger" role="tab"
											aria-controls="information-part" id="information-part-trigger">
										<span class="bs-stepper-circle">3</span>
										<span class="bs-stepper-label">LP</span>
									</button>
								</div>
								<div class="line"></div>
								<div class="step" data-target="#information-part4">
									<button type="button" class="step-trigger" role="tab"
											aria-controls="information-part" id="information-part-trigger">
										<span class="bs-stepper-circle">4</span>
										<span class="bs-stepper-label">Penanggung Jawab</span>
									</button>
								</div>
							</div>
							<div class="bs-stepper-content">
								<!-- your steps content here -->
								<div id="logins-part" class="content" role="tabpanel"
									 aria-labelledby="logins-part-trigger">

									<div class="card-body">
										<div class="form-group">
											<label for="No_LPTP">Nomor LPTP</label>
											<input type="text" id="No_LPTP" class="form-control"
												   value="LPTP- /WBC.12/2022">
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Surat Perintah Nomor</label>
													<input type="text" id="No_PRIN" class="form-control"
														   value="PRIN- /WBC.12/2022">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Tanggal PRIN</label>
													<input type="date" id="Tgl_PRIN" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="Locus">Locus</label>
											<input type="text" id="Locus" class="form-control">
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Tempus</label>
													<input type="date" id="Tempus" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Jam</label>
													<input type="time" id="Jam" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="Uraian_Penindakan">Kategori dan Uraian Penindakan</label>
											<textarea id="Uraian_Penindakan" class="form-control" rows="4"></textarea>
										</div>
										<h5>A. Sarana Pengangkut</h5>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Jenis</label>
													<input type="text" id="Sarana_Jenis" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Nomor Peti Kemas</label>
													<input type="text" id="Sarana_NoPetiKemas" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>No.Pol/Voy/Flight</label>
													<input type="text" id="Sarana_NoPol" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Ukuran</label>
													<input type="text" id="Sarana_Ukuran" class="form-control">
												</div>
											</div>
										</div>
										<h5>B. Barang</h5>
										<div class="form-group">
											<label for="inputBarang">Komoditi/Jenis</label>
											<select id="inputBarang" class="form-control custom-select">
												<option selected disabled>Pilih Jenis</option>
												<option>BKC HT</option>
												<option>BKC MMEA</option>
											</select>
										</div>
										<div class="form-group">
											<label for="Barang_Jumlah">Jumlah</label>
											<textarea id="Barang_Jumlah" class="form-control" rows="4"></textarea>
										</div>
										<h5>C. Bangunan / Tempat</h5>
										<div class="form-group">
											<label for="Bangunan_Alamat">Alamat</label>
											<textarea id="Bangunan_Alamat" class="form-control" rows="4"></textarea>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>No Reg Bangunan/ NPPBKC/ dll</label>
													<input type="text" id="Bangunan_NoReg" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Pemilik/ Yang Menguasai</label>
													<input type="text" id="Bangunan_Pemilik" class="form-control">
												</div>
											</div>
										</div>
										<h5>D. Orang</h5>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Nama</label>
													<input type="text" id="Orang_Nama" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="Orang_JenisKelamin">Jenis Kelamin</label>
													<select id="Orang_JenisKelamin" class="form-control custom-select">
														<option selected disabled>Pilih Jenis Kelamin</option>
														<option>Pria</option>
														<option>Wanita</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Alamat</label>
													<input type="text" id="Orang_Alamat" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="date" id="Orang_Lahir" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Identitas</label>
													<input type="text" id="Orang_Identitas" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Kewarganegaraan</label>
													<input type="text" id="Orang_Kwn" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>SB Penindakan</label>
													<input type="text" id="No_SBP" class="form-control"
														   value="SBP- /WBC.12/2022">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Tanggal SBP</label>
													<input type="date" id="Tgl_SBP" class="form-control">
												</div>
											</div>
										</div>
										<h5>Diberikan Kepada :</h5>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Nama</label>
													<input type="text" id="Kepada_Nama" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Alamat</label>
													<input type="text" id="Kepada_Alamat" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<!-- text input -->
												<div class="form-group">
													<label>Identitas</label>
													<input type="text" id="Kepada_Identitas" class="form-control">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Selaku</label>
													<input type="text" id="Kepada_Selaku" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="HalYangTerjadi">Hal Yang Terjadi</label>
											<textarea id="HalYangTerjadi" class="form-control" rows="4"></textarea>
										</div>
										<div class="form-group">
											<label for="Alasan">Alasan Tidak Dilakukan Penindakan</label>
											<textarea id="Alasan" class="form-control" rows="4"></textarea>
										</div>
									</div>


									<button class="btn btn-primary" onclick="stepper.next()">Next</button>
								</div>
								<div id="information-part" class="content" role="tabpanel"
									 aria-labelledby="information-part-trigger">
									<div class="form-group">
										<label for="No_LPHP">Nomor LPHP</label>
										<input type="text" id="No_LPHP" class="form-control" value="LPHP- /WBC.12/2022">
									</div>
									<div class="form-group">
										<label for="AnalisaHasil">Analisa Hasil Penindakan</label>
										<textarea id="AnalisaHasil" class="form-control" rows="4"></textarea>
									</div>
									<button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
									<button class="btn btn-primary" onclick="stepper.next()">Next</button>
								</div>
								<div id="information-part3" class="content" role="tabpanel"
									 aria-labelledby="information-part-trigger">
									<div class="form-group">
										<label for="JenisPelanggaran_LP">Jenis Pelanggaran</label>
										<select id="JenisPelanggaran_LP" class="form-control custom-select">
											<option selected disabled>Pilih Jenis</option>
											<option>Cukai</option>
											<option>Pabean</option>
											<option>Narkotika atau Barang Larangan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="UraianModus_LP">Uraian Modus</label>
										<textarea id="UraianModus_LP" class="form-control" rows="4"></textarea>
									</div>
									<h5>Diduga dilakukan Oleh :</h5>
									<div class="row">
										<div class="col-sm-6">
											<!-- text input -->
											<div class="form-group">
												<label>Nama</label>
												<input type="text" id="Orang_Nama_LP" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="Orang_JenisKelamin_LP">Jenis Kelamin</label>
												<select id="Orang_JenisKelamin_LP" class="form-control custom-select">
													<option selected disabled>Pilih Jenis Kelamin</option>
													<option>Pria</option>
													<option>Wanita</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<!-- text input -->
											<div class="form-group">
												<label>Alamat</label>
												<input type="text" id="Orang_Alamat_LP" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Tanggal Lahir</label>
												<input type="date" id="Orang_Lahir_LP" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<!-- text input -->
											<div class="form-group">
												<label>Nomor Identitas</label>
												<input type="text" id="Orang_Identitas_LP" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="DokumenSurat">Dokumen/Surat Terkait</label>
										<textarea id="DokumenSurat" class="form-control" rows="4"></textarea>
									</div>
									<button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
									<button class="btn btn-primary" onclick="stepper.next()">Next</button>
								</div>
								<div id="information-part4" class="content" role="tabpanel"
									 aria-labelledby="information-part-trigger">

									<h5>Pejabat Yang Melaksanakan Penindakan,</h5>

									<div class="form-group">
										<label for="inputKabid">Kabid P2</label>
										<select id="inputSeksi" class="form-control custom-select"
												onchange="myFunction(this.value);">
											<option selected disabled>Pilih Nama</option>
											<?php foreach ($anggota as $key => $data): ?>
												<option value=<?php echo $data->NIP ?>><?php echo $data->username ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group">
										<label for="NIP_Kabid">NIP Kabid P2</label>
										<input type="text" id="NIP_Kabid" class="form-control">
									</div>
									<div class="form-group">
										<label for="inputSeksi">Kepala Seksi Penindakan I</label>
										<select id="inputSeksi" class="form-control custom-select"
												onchange="myFunctionSek(this.value);">
											<option selected disabled>Pilih Nama</option>
											<?php foreach ($anggota as $key => $data): ?>
												<option value=<?php echo $data->NIP ?>><?php echo $data->username ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group">
										<label for="NIP_SeksiSatu">NIP Seksi Penindakan I</label>
										<input type="text" id="NIP_Seksi" class="form-control">
									</div>
									<div class="form-group">
										<label for="inputPelaksana_Satu">Pelaksana Satu</label>
										<select id="inputSeksi" class="form-control custom-select"
												onchange="myFunctionPel1(this.value);">
											<option selected disabled>Pilih Nama</option>
											<?php foreach ($anggota as $key => $data): ?>
												<option value=<?php echo $data->NIP ?>><?php echo $data->username ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group">
										<label for="NIP_PenSatu">NIP Pelaksana Satu</label>
										<input type="text" id="NIP_PenSatu" class="form-control">
									</div>
									<div class="form-group">
										<label for="inputPelaksana_Dua">Pelaksana Dua</label>
										<select id="inputSeksi" class="form-control custom-select"
												onchange="myFunctionPel2(this.value);">
											<option selected disabled>Pilih Nama</option>
											<?php foreach ($anggota as $key => $data): ?>
												<option value=<?php echo $data->NIP ?>><?php echo $data->username ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group">
										<label for="NIP_PenDua">NIP Pelaksana Dua</label>
										<input type="text" id="NIP_PenDua" class="form-control">
									</div>

									<button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">

					</div>
				</div>
				<!-- /.card -->
			</div>
		</div>

	</section>
	<!-- /.content -->

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="card-header">
					<h3 class="card-title">Form Tambah Akun</h3>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('Akun/Tambah_Akun'); ?>

					<?php echo validation_errors(); ?>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form class="form-horizontal">
					<div class="card-body">
						<div class="form-group row">
							<label for="username" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" id="username"
									   placeholder="Username">
							</div>
						</div>
						<div class="form-group row">
							<label for="NIP" class="col-sm-2 col-form-label">NIP</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="NIP" id="NIP" placeholder="NIP">
							</div>
						</div>
						<div class="form-group row">
							<label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="golongan" id="golongan" placeholder="Gol">
							</div>
						</div>
						<div class="form-group row">
							<label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
							<div class="col-sm-10">
								<select name="Jabatan" id="Jabatan" class="form-control custom-select">
									<option selected disabled>Pilih Jabatan</option>
									<option>Kepala Bidang Penindakan dan Penyidikan</option>
									<option>Kepala Seksi Intelijen</option>
									<option>Kepala Seksi Penindakan I</option>
									<option>Kepala Seksi Penindakan II</option>
									<option>Kepala Seksi Penyidikan dan BHP</option>
									<option>Kepala Seksi Narkotika dan Barang Larangan</option>
									<option>Pelaksana Pemeriksa</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="password" id="password"
									   placeholder="Password">
							</div>
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" class="btn btn-info">Buat Akun</button>
						<button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
					</div>
					<!-- /.card-footer -->
				</form>

				<?php echo form_close(); ?>
			</div>
		</div>

	</div>

</div>
<!-- /.content-wrapper -->

<?php $this->load->view("./includes/footer.php") ?>
