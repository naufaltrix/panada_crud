<?php
	echo $this->output('header');
	if (isset($this->session)) {
		echo $this->session->getValue('insert_failed');
		$this->session->destroy();
	} else {
		echo "";
	}
?>

<form action="<?php echo $this->uri->baseUri.'index.php/home/proses_insert'?>" method="POST">
	<table>
		<tr>
			<td colspan="3">FORM TAMBAH DATA</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>
				<input type="text" class="form-control" name="nim"  placeholder="Masukan Nim">
			</td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" class="form-control"  placeholder="Nama Siswa"></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td>
				<textarea name="alamat" placeholder="Masukan Alamat" class="form-control" id="alamat" style="width:100%; height:300px;"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" class="btn btn-primary" name="tambah" value="TAMBAH DATA">
			</td>
		</tr>
	</table>
</form>


<?php
	echo $this->output('footer'); 
?>