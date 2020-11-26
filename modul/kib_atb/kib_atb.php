<?php
//aut(array(1));
$a = $_GET['a'];
switch ($a) {
    default:
    ?>
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="column-selectors bg-variants">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Kartu Invertaris Barang ATB (Aset Tidak Berwujud)</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>ID Barang</th>
                                                        <th>Klasifikasi Barang / Penggunaan</th>
                                                        <!-- <th>Tanggal Perolehan</th> -->
                                                        <th>Nilai Perolehan</th>
                                                        <th>Keterangan</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                        $kib = $db->query("SELECT *, YEAR(tgl_perolehan) as y, MONTH(tgl_perolehan) as m, DAY(tgl_perolehan) as d FROM barang a, kib_atb b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY id_brg ASC");
                                                        $no = 0;
                                                        while ($k=$kib->fetch_assoc()) :
                                                            $no++;
                                                            if(empty($k['ket_atb'])){
                                                                $ket = '-';
                                                            } else {
                                                                $ket = $k['ket_atb'];
                                                            }
                                                        ?>
                                                    <tr>
                                                    <tr>
                                                    <tr>
                                                    <tr>
                                                    <tr>
                                                        <td><?= $k['id_brg']; ?></td>
                                                        <td><?= $k['k_brg']; ?> /<br> <?= $k['p_kib_atb']; ?></td>
                                                        <!-- <td><?= tgl_indo(date($k['y'].'-'.$k['m'].'-'.$k['d'])); ?></td> -->
                                                        <td><?= rupiah($k['n_perolehan']); ?></td>
                                                        <td><?= $ket; ?></td>
                                                        <td><ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $k['kd_unit']; ?> | <?= $k['unit']; ?>" class="avatar pull-up">
                                                                    <img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $k['f_brg']; ?>" alt="Avatar" height="30" width="30">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Detail Aset" class="avatar pull-up">
                                                                    <a href="<?= base_url(); ?>kib_atb/det/<?= $k['id_brg_ack']; ?>"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $t += $k['n_perolehan'];
                                                        endwhile;
                                                        ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th>Total</th>
                                                        <th><?= rupiah($t); ?></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->
            </div>
        </div>
    </div>
    <?php break; ?>
    <?php case 'detail':
         $det = $db->query("SELECT *, YEAR(tgl_perolehan) as y, MONTH(tgl_perolehan) as m, DAY(tgl_perolehan) as d,
                                    YEAR(tgl_penghapusan) as yp, MONTH(tgl_penghapusan) as mp, DAY(tgl_penghapusan) as dp FROM barang a, kib_atb b, users c WHERE a.id_brg_ack=b.id_brg_ack AND a.usr_input=c.id_usr AND a.id_brg_ack='$_GET[id]'")->fetch_assoc();
         $tgl_update = $db->query("SELECT YEAR(updated_at) as yu, MONTH(updated_at) as mu, DAY(updated_at) as du FROM kib_atb WHERE id_brg_ack='$_GET[id]'")->fetch_assoc();
         $tgl_create = $db->query("SELECT YEAR(created_at) as yc, MONTH(created_at) as mc, DAY(created_at) as dc FROM kib_atb WHERE id_brg_ack='$_GET[id]'")->fetch_assoc();
        $nama_update = $db->query("SELECT * FROM users a, barang b WHERE a.id_usr=b.usr_update AND b.id_brg_ack='$_GET[id]'")->fetch_assoc();
        if ($det['tgl_imb_d'] == '0000-00-00') {
            $tgl = '-';
        } else {
            $tgl = tgl_indo(date($det['yi'].'-'.$det['mi'].'-'.$det['di']));
        }
        ?>
        
        <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section class="app-ecommerce-details bg-variants">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url(); ?>_upload/f_brg/<?= $det['f_brg']; ?>" class="img-fluid" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                <h5><?= $det['id_brg']; ?> - <?= $det['k_brg']; ?> - <?= $det['p_kib_atb']; ?>
                                    </h5>
                                    <p class="text-muted">
                                    Perolehan - <?= tgl_indo(date($det['y'].'-'.$det['m'].'-'.$det['d'])); ?><br>
                                    </p>
                                    <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p data-toggle="tooltip" data-popup="tooltip-custom" data-placement="right" data-original-title="Nilai Perolehan" class="text-primary font-medium-3 mr-1 mb-0"><?= rupiah($det['n_perolehan']); ?><br>
                                    </p>
                                        <!-- <span class="pl-1 font-medium-3 border-left">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </span> -->
                                        <!-- <span class="ml-50 text-dark font-medium-1"><?= tgl_indo(date($det['y'].'-'.$det['m'].'-'.$det['d'])); ?></span> -->
                                    </div>
                                    <hr>
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Spesifikasi :</th>
                                                <!-- <th>Name</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ID Barang</th>
                                                <td> <?= $det['id_brg']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode Unit</th>
                                                <td> <?= $det['kd_unit']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Unit</th>
                                                <td> <?= $det['unit']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode Sub Unit</th>
                                                <td> <?= $det['kd_sub_unit']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Sub Unit</th>
                                                <td> <?= $det['sub_unit']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode Barang</th>
                                                <td> <?= $det['kd_brg']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Klasifikasi Barang</th>
                                                <td> <?= $det['k_brg']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Registrasi</th>
                                                <td> <?= $det['reg']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama</th>
                                                <td> <?= $det['n_atb']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Developer</th>
                                                <td> <?= $det['develop']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kontak Developer</th>
                                                <td> <?= $det['kontak']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Penggunaan</th>
                                                <td> <?= $det['p_kib_atb']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Keterangan</th>
                                                <td> <?= $det['ket_atb']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Di Input Oleh</th>
                                                <td> <?= $det['nama']; ?> (<?= tgl_indo(date($tgl_create['yc'].'-'.$tgl_create['mc'].'-'.$tgl_create['dc'])); ?>)</td>
                                            </tr>
                                            <?php
                                        if (empty($det['usr_update'])) {
                                            echo '';
                                        } else {
                                            echo '<tr>';
                                            echo '<th scope="row">Di Update Oleh</th>';
                                            echo '<td>'.$nama_update['nama']. ' (' .tgl_indo(date($tgl_update['yu'].'-'.$tgl_update['mu'].'-'.$tgl_update['du'])). ') </td>';
                                        } ?>
                                        <?php
                                        $p = [
                                        'Y' => 'Penghapusan',
                                        'N' => 'Tersedia'
                                        ];
                                        if ($det['penghapusan']=='Y') {
                                            $c = 'text-danger';
                                            $tgl ='(' .tgl_indo(date($det['yp'].'-'.$det['mp'].'-'.$det['dp'])).')';
                                        } else {
                                            $c = 'text-success';
                                            $tgl = '';
                                        }
                                        if ($_SESSION['level']=='1') {
                                            $h = '';
                                        } else {
                                            $h = 'hidden';
                                        }
                                        ?>
                                            <tr>
                                                <th scope="row">Status</th>
                                                <td> <span class="<?= $c; ?>"><?= $p[$det['penghapusan']]; ?></span> <?= $tgl; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="d-flex flex-column flex-sm-row">
                                        <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0" onclick="window.print()"><i class="feather icon-printer mr-25"></i>Print</button>
                                        <a href="<?= base_url(); ?>add/edit/<?= $det['id_brg_ack']; ?>" class="btn btn-outline-warning <?= $h; ?>"><i class="feather icon-edit mr-25"></i>Edit Aset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->
            </div>
        </div>
    </div>
    <?php break; ?>
<?php } ?>