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
		<a href="<?= base_url('mahasiswa_controller/tambah') ?>"><span class="btn btn-primary btn-sm">Tambah Data</span></a>
	</div>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th style="width: 10px">No</th>
					<th>NIM</th>
					<th>Nama mahasiswa</th>
					<th>TTL</th>
					<th>Jenis Kelamin</th>
					<th>Action</th>
				</tr>
			</thead>
			<td>

				<tbody>
					<?php $no-1; ?>
					<?php foreach ($data_mhs as $hasil) : ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $hasil['nim'] ?></td>
						<td><?= $hasil['nm_mhs'] ?></td>
						<td><?= $hasil['tmp_lahir'] ?>, <?= $hasil['tgl_lahir'] ?></td>
						<td><?= $hasil['jenkel'] ?></td>
						<a href="<?= base_url('mahasiswa_controller/hapus/'). $hasil['nim'] ?>"
							onclick=" return confirm(" Apakah Anda Ingin Menghapus Data Tersebut?')"><span
								class="badge bg-danger">Hapus</span></a>
			</td>
			</tr>
			<?php $no++?>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>

</html>
