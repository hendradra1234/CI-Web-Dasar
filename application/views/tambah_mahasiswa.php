<!DOCTYPE html>
<html>

<head>
	<title>Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="card-body p-4">
		<h4 class="card-title">Data Mahasiswa</h4>
		<?= $this->session->flashdata('pesan'); ?>
		<a href="<?= base_url('mahasiswa_controller/tambah') ?>"><span class="btn btn-primary btn-sm">Tambah
				Data</span></a>
	</div>

	<form method="post">
		<div class="card-body">
			<div class="form-group">
				<label for="nim">NIM</label>
				<input type="text" class="form-control" id="nim" name="nim" placeholder="Enter NIM"> </div>
			<div class="form-group">
				<label for="nm_mhs">Nama Mahasiswa</label>
				<input type="text" class="form-control" id="nm_mhs" name="nm_mhs" placeholder="Enter Nama Mahasiswa"
					required="">
			</div>
			<div class="form-group">
				<label for="tmp_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
					placeholder="Enter Tempat Lahir Mahasiswa" required="">
			</div>
			<div class="form-group">
				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
					placeholder="Enter Tanggal Lahir Mahasiswa" required="">
			</div>
			<div class="form-group">
				<label for="jk">Jenis Kelamin</label>
				<select class="form-control" id="jk" name="jk">
					<option selected="" disabled="">--Pilih Jenis Kelamin--</option>
					<option>Perempuan</option>
					<option>Laki-Laki</option>
				</select>
			</div>
			<input type="submit" name="submit" id="submit" value="Tambah" class="btn btn-primary">
		</div>
	</form>
	</p>
	</div>
</body>

</html>
