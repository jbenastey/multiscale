<div class="dt-card__body">

	<!-- Form -->
	<?= form_open('admin/produk/tambah',array('enctype'=>'multipart/form-data')) ?>

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Nama Produk</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama Produk" name="nama" required autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Kategori</label>

		<div class="col-md-10 col-sm-9">
			<select class="form-control" id="normal-input-1"
					required autocomplete="off" name="kategori">
				<option disabled="" selected="selected">- Pilih Kategori -</option>
				<?php
				foreach ($kategori as $key => $value):
					?>
					<option value="<?= $value['kategori_id'] ?>"><?= $value['kategori_nama'] ?></option>
				<?php
				endforeach;
				?>
			</select>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="text-area-1-1">Deskripsi</label>

		<div class="col-md-10 col-sm-9">
			<textarea class="form-control" id="text-area-1" rows="3"
					  placeholder="Deskripsi" name="deskripsi" required autocomplete="off"></textarea>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Harga</label>

		<div class="col-md-10 col-sm-9">
			<input type="number" class="form-control" id="normal-input-1" name="harga"
				   placeholder="Harga" required autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="file-field">Foto</label>

		<div class="col-md-10 col-sm-9">
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="file-field" name="foto" required>
				<label class="custom-file-label" for="file-field">Pilih foto...</label>
			</div>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Group -->
	<div class="form-group form-row">
		<div class="col-xl-10 offset-xl-2">
			<a href="<?=base_url('admin/produk')?>" class="btn btn-outline-primary text-uppercase" name="update"><i class="fa fa-backward"></i> &nbsp;Kembali</a>
			<button type="submit" class="btn btn-primary text-uppercase" name="simpan"><i class="fa fa-save"></i> &nbsp;Simpan
			</button>
		</div>
	</div>
	<!-- /form group -->


	<?= form_close() ?>
	<!-- /form -->

</div>
