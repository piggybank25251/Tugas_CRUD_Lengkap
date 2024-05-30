<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Kelas</div>
                <div>
                    <a href="?m=mapel&s=add" class="btn btn-primary float-end"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mapel</th>  
                        <th>SKS</th>
                        <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    include_once('config.php');
                    $sql = "SELECT * FROM mapel";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows ($result)>0 ) {
                        $no = 1;                
                        while ($r = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$r['mapel'].'</td>
                                <td>'.$r['sks'].'</td>
                                <td>
                                <a href="?m=mapel&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?m=mapel&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin mapel akan dihapus?, Hapus 1 mapel akan menghapus semua data siswa di mapel tersebut\')">Hapus</a>
                            </td>
                            </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="5" align="center">Data Kosong</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>