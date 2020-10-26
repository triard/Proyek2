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
        font-size: 12px;

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

    /* Table Body */
    </style>
</head>

<body>
    <?php if($keluar!= null){ ?>
    <center>
        <h2>Data Pasien Keluar Rumah Sakit Ibnu Sina</h2>
    </center>
    <table class="demo-table responsive">
        <thead>
            <tr>
                <th>pasien</th>
                <th>rekam medis</th>
                <th>tanggal keluar</th>
                <th>kondisi</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keluar as $r): ?>
            <tr>
                <td><?php echo $r->nama_pasien ?></td>
                <td><?php echo $r->nomor_rekam_medis ?></td>
                <td><?php $d = new DateTime($r->tanggal_keluar);
                echo $d->format("d/m/Y");?></td>
                <td><?php echo $r->kondisi_keluar ?></td>
                <td><?php echo $r->status_pulang ?></td>
                <?php endforeach; ?>
                <?php }else{ ?>
                <p>Maaf data yang anda cari tidak ada</p>
                <?php } ?>
    </table>
</body>

</html>
