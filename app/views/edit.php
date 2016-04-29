<?php
	echo $this->output('header');
	if (isset($this->session)) {
		echo $this->session->getValue('update_failed');
		$this->session->destroy();
	} else {
		echo "";
	}
?>

<form action="<?php echo $this->uri->baseUri.'index.php/home/proses_edit'?>" method="POST">
	<table>
		<tr>
			<td colspan="3">FORM EDIT DATA</td>
		</tr>
		<?php foreach ($get_siswa_edit as $key => $value): ?>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" class="form-control" name="nim" value="<?php echo $value->siswa_nim; ?>" placeholder="Masukan Nim">
					<input type="hidden" name="siswa_id" value="<?php echo $value->siswa_id; ?>">
				</td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $value->siswa_nama; ?>" placeholder="Nama Siswa"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" class="form-control" id="alamat" style="width:100%; height:300px;">
						<?php echo $value->siswa_alamat; ?>	
					</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" class="btn btn-primary" name="edit" value="EDIT DATA">
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</form>


<?php
	echo $this->output('footer'); 
?>