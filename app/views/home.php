<body>
<h1 class="logo" style="text-align:center;">
    <img alt="Logo" src="<?php echo $this->uri->baseUri;?>assets/img/logo.png" />
</h1>
<?php 
    $this->output('header');
    if (isset($this->session))
    {
        echo $this->session->getValue('delete_success');
        echo $this->session->getValue('delete_failed');
        echo $this->session->getValue('update_success');
        echo $this->session->getValue('insert_success');
        $this->session->destroy();
    } else {
        echo "";
    }
?>
<br/><br/>
<a href="<?php echo $this->uri->baseUri.'index.php/home/menu_insert'?>" class="btn btn-success">
    + Tambah Data Siswa
</a><br/><br/>
<table class="table table-hover" style="width:100%;">
    <tr>
        <td>NIM</td>
        <td>Nama Siswa</td>
        <td>Alamat</td>
        <td>Navigation</td>
    </tr>
<?php 
    if ($set_siswa) {
        foreach ($set_siswa as $key => $value) {
            echo '  <tr>
                        <td>'. $value->siswa_nim .'</td>
                        <td>'. $value->siswa_nama .'</td>
                        <td>'. $value->siswa_alamat .'</td>
                        <td>
                            <a class="btn btn-primary" href="'. $this->uri->baseUri .'index.php/home/menu_edit/'. $value->siswa_id .'">Edit</a>
                            <a class="btn btn-danger" href="'. $this->uri->baseUri .'index.php/home/proses_hapus/'. $value->siswa_id .'" onclick="return confirm(\'Anda Yakin Data Ini di Hapus ?\')">Hapus</a>
                        </td>
                    </tr>';
        }
    } else {
        echo '<tr>
                <td colspan="3">Tidak Ada Data</td>
              </tr>
            ';
    }
  
?>
</table>

<div class="col-md-12">
    Powered by <a href="http://panadaframework.com/">Panada</a> version 1.0.0-alfa | Development By <a href="http://naufaltrix.com/">Muhammad Naufal</a>
</div>
<a href="https://github.com/naufaltrix/panada_crud">
<img src="<?php echo $this->uri->baseUri; ?>assets/img/forkgithub.png" style="position: absolute; top: 0; right: 0; border: 0;" alt="Fork me on GitHub"></a>	
</body>
</html>