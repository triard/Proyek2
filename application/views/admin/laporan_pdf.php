<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <style type="text/css">
    body {
        font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
    }

    /* Table */
    table {
        margin: auto;
        font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        font-size: 10px;

    }

    .demo-table {
        border-collapse: collapse;
        font-size: 12px;
    }

    .demo-table th,
    .demo-table td {
        border-bottom: 1px solid #e1edff;
        border-left: 1px solid #e1edff;
        padding: 5px 10px;
    }

    .demo-table th,
    .demo-table td:last-child {
        border-right: 1px solid #e1edff;
    }

    .demo-table td:first-child {
        border-top: 1px solid #e1edff;
    }

    .demo-table td:last-child {
        border-bottom: 0;
    }

    caption {
        caption-side: top;
        margin-bottom: 10px;
    }

    /* Table Header */
    .demo-table thead th {
        background-color: #508abb;
        color: #FFFFFF;
        border-color: #6ea1cc !important;
        text-transform: uppercase;
    }

    .kop-surat a {
        font-family: Arial, Helvetica, sans-serif;
        line-height: 50%;
		font-size: 15px;
    }

    .ttd {
        font-size: 15px;
        text-align: right;
        margin-right: 30px;
    }


    /* Table Body */
    </style>
</head>

<body>
    <?php if($all!= null){ ?>
    <table>
        <tr>
            <td>
                <img src="<?php echo base_url('assets/images/logo/logo-rsud-ibnu-sina.png') ?>" alt="logo">
            </td>
            <td>
                <div class="kop-surat">
                    <center>
                        <a><b>RUMAH SAKIT IBNU SINA BOJONEGORO</b></a><br>
                        <a>Jl. Lisman No. 07 Campurejo Bojonegoro</a><br>
                        <a>Telp/Fax (0353) 883238/880835</a><br>
                        <a>Email : rs.ibnusinabjnjatim@yahoo.co.id</a><br>
                    </center>
                </div>
            </td>
        </tr>
    </table>
    <hr>
    <width="70" height="50">
		</hr>
		<center><h4>Data Riwayat Pasien Rumah Sakit Ibnu Sina</h4></center>
        <table class="demo-table responsive">
            <thead>
            <tr>
			<th>Nama</th>
                <th>KTP</th>
                <th>nomor rekam medis</th>
                <th>nomor (ruangan)(kelas)</th>
                <th>tanggal masuk</th>
                <th>tanggal keluar</th>
                <th>keterangan pasien</th>
                <th>penyakit</th>
                <th>tindakan</th>
                <th>obat</th>
                <th>kondisi keluar</th>
                <th>status pulang</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($all as $r): ?>
            <tr>
                <td><?php echo $r->nama_user ?></td>
                <td><?php echo $r->no_ktp ?></td>
                <td><?php echo $r->tgl_lahir?>
                </td>
				<td><?php echo $r->nomor_rekam_medis?></td>
				<td><?php echo $r->nomor_ruangan?>
				(<?php echo $r->nama_ruangan?>)(<?php echo $r->nama ?>)</td>
                <td>
                 <?php $d = new DateTime($r->tanggal_masuk);
                echo $d->format("d/m/Y");?>
                </td>
                <td>
                    <?php $d = new DateTime($r->tanggal_keluar);
                    echo $d->format("d/m/Y");?>
                </td>
                <td><?php echo $r->keterangan_pasien?></td>
                <td><?php echo $r->nama_penyakit?></td>
                <td><?php echo $r->tindakan?></td>
                <td><?php echo $r->nama_obat?></td>
                <td><?php echo $r->kondisi_keluar?></td>
                <td><?php echo $r->status_pulang?></td>
            </tr>
			<?php endforeach; ?>
                <?php }else{ ?>
                <p>Maaf data yang anda cari tidak ada</p>
                <?php } ?>
        </table> <br><br>
        <?php
							
							function hari_ini(){
								$hari = date ("D");
							 
								switch($hari){
									case 'Sun':
										$hari_ini = "Minggu";
									break;
									case 'Mon':			
										$hari_ini = "Senin";
									break;
									case 'Tue':
										$hari_ini = "Selasa";
									break;
									case 'Wed':
										$hari_ini = "Rabu";
									break;
									case 'Thu':
										$hari_ini = "Kamis";
									break;
									case 'Fri':
										$hari_ini = "Jumat";
									break;
									case 'Sat':
										$hari_ini = "Sabtu";
									break;
									default:
										$hari_ini = "Tidak di ketahui";		
									break;
								}
								return "" . $hari_ini . "";
							}
							function tgl_indo($tanggal){
								$bulan = array (
									1 =>   'Januari',
									'Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'
								);
								$pecahkan = explode('-', $tanggal); 
								return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
							}
							
							?>
        <div class="ttd">
            <a><?php echo hari_ini().', ';
		echo  tgl_indo(date('Y-m-d'));date('l'); ?></a>
            <p>Mengetahui</p>
            <br><br><br>
            <p>...........................................</p>
            <p>Direktur RS Ibnu Sina</p>
        </div>
</body>

</html>
