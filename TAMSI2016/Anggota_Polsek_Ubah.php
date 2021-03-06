<?php 
include 'Header.php';
include 'includes/Anggota.inc.php'; 

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$eks = new Anggota($db);
$eks->NRP = $id;
$eks->readOne();

if($_POST){
    $nrp = $id;
    $nama = $_POST['Nama'];
    $alamat = $_POST['alamat'];
    $Jabatan = $_POST['Jabatan'];
    $hp = $_POST['hp'];

    if($nrp =="" || $nama =="" ||$alamat =="" || $hp =="" || $Jabatan ==""){
    ?>
        <script>alert('Data Kosong')
        location.href='Anggota_Polsek_Ubah.php?id=<?php echo $id; ?>'</script>
    <?php
    }else{
        $eks->nrp = $nrp;
        $eks->nama = $nama;
        $eks->alamat = $alamat;
        $eks->hp =  $hp;
        $eks->jabatan = $Jabatan;
        if($eks->update()){
        ?>
            <script>alert('Data Berhasil diubah')
            location.href='Anggota_Polsek.php'</script>
        <?php
        }else{
        ?>
            <script>alert('Data Sudah Ada atau Gagal diubah !!')
            location.href='Anggota_Polsek_Ubah.php?id=<?php echo $id; ?>'</script>
        <?php
        }
    }
}
?>
<ul class="breadcrumb">
        <li>
            <a href="#">Master / Data Anggota Polsek / Ubah</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Data Anggota Polsek</h2>
                <div class ="text-right">
                    <a href="Anggota_Polsek.php" data-toggle="tooltip" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12"> 
                
                <form method="post">
                 <div class="form-group has-success col-md-8">
                    <label class="control-label" >NRP</label>
                    <input disabled type="text" class="form-control" id="inputSuccess1" name="nrp" placeholder="NRP" value ="<?php echo $eks->nrp; ?>">

                    <label class="control-label" >Nama Anggota</label>
                    <input type="text" class="form-control" id="inputSuccess1" name="Nama" placeholder="Nama Anggota" value ="<?php echo $eks->nama; ?>">

                    <label class="control-label">Jabatan</label>
                    <select name="Jabatan" class="form-control"  tabindex="2" >
                        <option value="<?php echo $eks->jabatan; ?>"><?php echo $eks->jabatan; ?></option>
                        <option value="BRIPDA">BRIPDA</option>
                        <option value="BRPTU">BRPTU</option>
                        <option value="Brigadir Polisi">Brigadir Polisi</option>
                        <option value="BRIPKA">BRIPKA</option>
                        <option value="AIPDA">AIPDA</option>
                        <option value="IPDA">IPDA</option>
                        <option value="IPTU">IPTU</option>
                        <option value="AKP">AKP</option>
                        <option value="Komisaris Polisi">Komisaris Polisi</option>
                        <option value="KOMBES">KOMBES</option>
                        <option value="BRIGJEN">BRIGJEN</option>
                        <option value="IRJEN">IRJEN</option>
                        <option value="KOMJEN">KOMJEN</option>
                        <option value="Kapolri">Kapolri</option>
                    </select>

                    <label class="control-label" >Alamat</label>
                    <textarea class="form-control" rows="5" id="inputSuccess1" name="alamat" placeholder="Alamat"><?php echo $eks->alamat; ?></textarea>

                    <label class="control-label" >No Handphone</label>
                    <input type="text" class="form-control" id="inputSuccess1" name="hp" placeholder="No Handphone" value ="<?php echo $eks->hp; ?>">
                    </br>
                    <div class="control-group">
                    <div class="controls">
                    <button type="submit" class="btn btn-primary ">Ubah Data</button>
                    </div>
                    
                </div>
                  
            </div>
            <div class="form-group has-success col-md-4">
            <div class="control-group">
                    
            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'Footer.php'; ?>