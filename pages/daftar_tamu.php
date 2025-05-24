<h4>Daftar Tamu</h4>
<div class="table-responsive">
    <table class="table table-striped" id="table_data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No. Handphone</th>
                <th>Alamat</th>
                <th>Instansi</th>
                <th>Tujuan Kunjungan</th>
                <th>Tanggal Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            $data_tamu = $mysqli->daftar_tamu();
            
            if(!empty($data_tamu[0])) { 
                foreach($data_tamu as $x){
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($x['nama']); ?></td>
                        <td><?= htmlspecialchars($x['hp']); ?></td>
                        <td><?= htmlspecialchars($x['alamat']); ?></td>
                        <td><?= htmlspecialchars($x['instansi'] ?? '-'); ?></td>
                        <td><?= htmlspecialchars($x['tujuan_kunjungan'] ?? '-'); ?></td>
                        <td><?= htmlspecialchars($x['tanggal']); ?></td>
                    </tr>
            <?php 
                } 
            } else { 
                echo '<tr><td colspan="7" class="text-center">Belum ada data tamu!</td></tr>'; 
            } 
            ?>
        </tbody>
    </table>
</div>
