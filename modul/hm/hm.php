<?php
aut(array(1,2,3));
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
                <section id="dashboard-analytics">
                <div class="row">
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <a href="<?= base_url(); ?>kib_a"><i class="feather icon-map text-info font-medium-5"></i></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $k_a = $db->query("SELECT id_kib_a FROM kib_a");
                                        $t_ka = mysqli_num_rows($k_a);
                                        ?>
                                        <h2 class="text-bold-700"><?= $t_ka; ?></h2>
                                        <p class="mb-0 line-ellipsis">KIB A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                            <a href="<?= base_url(); ?>kib_b"><i class="feather icon-truck text-warning font-medium-5"></i></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $k_b = $db->query("SELECT id_kib_b FROM kib_b");
                                        $t_kb = mysqli_num_rows($k_b);
                                        ?>
                                        <h2 class="text-bold-700"><?= $t_kb; ?></h2>
                                        <p class="mb-0 line-ellipsis">KIB B</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                            <a href="<?= base_url(); ?>kib_c"><i class="feather icon-shopping-bag text-danger font-medium-5"></i></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $k_c = $db->query("SELECT id_kib_c FROM kib_c");
                                        $t_kc = mysqli_num_rows($k_c);
                                        ?>
                                        <h2 class="text-bold-700"><?= $t_kc; ?></h2>
                                        <p class="mb-0 line-ellipsis">KIB C</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                            <a href="<?= base_url(); ?>kib_d"><i class="feather icon-wind text-primary font-medium-5"></i></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $k_d = $db->query("SELECT id_kib_d FROM kib_d");
                                        $t_kd = mysqli_num_rows($k_d);
                                        ?>
                                        <h2 class="text-bold-700"><?= $t_kd; ?></h2>
                                        <p class="mb-0 line-ellipsis">KIB D</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                            <a href="<?= base_url(); ?>kib_e"><i class="feather icon-award text-success font-medium-5"></i></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $k_e = $db->query("SELECT id_kib_d FROM kib_d");
                                        $t_ke = mysqli_num_rows($k_e);
                                        ?>
                                        <h2 class="text-bold-700"><?= $t_ke; ?></h2>
                                        <p class="mb-0 line-ellipsis">KIB E</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                            <a href="<?= base_url(); ?>kib_atb"><i class="feather icon-monitor text-danger font-medium-5"></i></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $k_atb = $db->query("SELECT id_kib_atb FROM kib_atb");
                                        $t_katb = mysqli_num_rows($k_atb);
                                        ?>
                                        <h2 class="text-bold-700"><?= $t_katb; ?></h2>
                                        <p class="mb-0 line-ellipsis">KIB ATB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Rekap Asset</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>JENIS</th>
                                                    <th>FOTO KLASIFIKASI</th>
                                                    <th>TOTAL BARANG</th>
                                                    <th>TOTAL NILAI PEROLEHAN</th>
                                                    <th>UPDATE TERAKHIR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php 
                                                    $kib_a = $db->query("SELECT * FROM kib_a");
                                                    $kiba = mysqli_num_rows($kib_a);
                                                    $t_a = $db->query("SELECT SUM(n_perolehan) as total FROM barang a, kib_a b WHERE a.id_brg_ack=b.id_brg_ack")->fetch_assoc();
                                                    $update_a = $db->query("SELECT *, YEAR(updated_at) as y_a, MONTH(updated_at) as m_a, DAY(updated_at) as d_a FROM kib_a ORDER BY updated_at DESC")->fetch_assoc();
                                                    ?>
                                                    <td>1</td>
                                                    <td>Kartu Invertaris Barang A (TANAH)</td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <?php 
                                                            $f_kib_a = $db->query("SELECT * FROM kib_a a, barang b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY b.k_brg ASC LIMIT 5");
                                                            $no = 0;
                                                            while ($fka = $f_kib_a->fetch_array()) :
                                                            $no++;
                                                            ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $fka['k_brg']; ?> | <?= $fka['p_kib_a']; ?>" class="avatar pull-up">
                                                                <a href="<?= base_url(); ?>kib_a/det/<?= $fka['id_brg_ack']; ?>"><img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $fka['f_brg']; ?>" alt="Avatar" height="30" width="30"></a>
                                                            </li>
                                                            <?php 
                                                            endwhile ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lihat Lebih Banyak" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_a"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $kiba; ?></td>
                                                    <td><?= rupiah($t_a['total']); ?></td>
                                                    <td><?= tgl_indo(date($update_a['y_a'].'-'.$update_a['m_a'].'-'.$update_a['d_a'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <?php 
                                                    $kib_b = $db->query("SELECT * FROM kib_b");
                                                    $kibb = mysqli_num_rows($kib_b);
                                                    $t_b = $db->query("SELECT SUM(n_perolehan) as total FROM barang a, kib_b b WHERE a.id_brg_ack=b.id_brg_ack")->fetch_assoc();
                                                    $update_b = $db->query("SELECT *, YEAR(updated_at) as y_a, MONTH(updated_at) as m_a, DAY(updated_at) as d_a FROM kib_b ORDER BY updated_at DESC")->fetch_assoc();
                                                    ?>
                                                    <td>2</td>
                                                    <td>Kartu Invertaris Barang B (PERALATAN DAN MESIN)</td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <?php 
                                                            $f_kib_b = $db->query("SELECT * FROM kib_b a, barang b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY b.k_brg ASC LIMIT 5");
                                                            $no = 0;
                                                            while ($fkb = $f_kib_b->fetch_array()) :
                                                            $no++;
                                                            ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $fkb['k_brg']; ?> | <?= $fkb['p_kib_b']; ?>" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_b/det/<?= $fkb['id_brg_ack']; ?>"><img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $fkb['f_brg']; ?>" alt="Avatar" height="30" width="30"></a>
                                                            </li>
                                                            <?php 
                                                            endwhile ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lihat Lebih Banyak" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_b"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $kibb; ?></td>
                                                    <td><?= rupiah($t_b['total']); ?></td>
                                                    <td><?= tgl_indo(date($update_b['y_a'].'-'.$update_b['m_a'].'-'.$update_b['d_a'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <?php 
                                                    $kib_c = $db->query("SELECT * FROM kib_c");
                                                    $kibc = mysqli_num_rows($kib_c);
                                                    $t_c = $db->query("SELECT SUM(n_perolehan) as total FROM barang a, kib_c b WHERE a.id_brg_ack=b.id_brg_ack")->fetch_assoc();
                                                    $update_c = $db->query("SELECT *, YEAR(updated_at) as y_a, MONTH(updated_at) as m_a, DAY(updated_at) as d_a FROM kib_c ORDER BY updated_at DESC")->fetch_assoc();
                                                    ?>
                                                    <td>3</td>
                                                    <td>Kartu Invertaris Barang C (GEDUNG DAN BANGUNAN)</td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <?php 
                                                            $f_kib_c = $db->query("SELECT * FROM kib_c a, barang b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY b.k_brg ASC LIMIT 5");
                                                            $no = 0;
                                                            while ($fkc = $f_kib_c->fetch_array()) :
                                                            $no++;
                                                            ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $fkc['k_brg']; ?> | <?= $fkc['p_kib_c']; ?>" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_c/det/<?= $fkc['id_brg_ack']; ?>"><img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $fkc['f_brg']; ?>" alt="Avatar" height="30" width="30"></a>
                                                            </li>
                                                            <?php 
                                                            endwhile ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lihat Lebih Banyak" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_c"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $kibc; ?></td>
                                                    <td><?= rupiah($t_c['total']); ?></td>
                                                    <td><?= tgl_indo(date($update_c['y_a'].'-'.$update_c['m_a'].'-'.$update_c['d_a'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <?php 
                                                    $kib_d = $db->query("SELECT * FROM kib_d");
                                                    $kibd = mysqli_num_rows($kib_d);
                                                    $t_d = $db->query("SELECT SUM(n_perolehan) as total FROM barang a, kib_d b WHERE a.id_brg_ack=b.id_brg_ack")->fetch_assoc();
                                                    $update_d = $db->query("SELECT *, YEAR(updated_at) as y_a, MONTH(updated_at) as m_a, DAY(updated_at) as d_a FROM kib_d ORDER BY updated_at DESC")->fetch_assoc();
                                                    ?>
                                                    <td>4</td>
                                                    <td>Kartu Invertaris Barang D (JALAN, IRIGASI DAN JARINGAN)</td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <?php 
                                                            $f_kib_d = $db->query("SELECT * FROM kib_d a, barang b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY b.k_brg ASC LIMIT 5");
                                                            $no = 0;
                                                            while ($fkd = $f_kib_d->fetch_array()) :
                                                            $no++;
                                                            ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $fkd['k_brg']; ?> | <?= $fkd['p_kib_d']; ?>" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_d/det/<?= $fkd['id_brg_ack']; ?>"><img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $fkd['f_brg']; ?>" alt="Avatar" height="30" width="30"></a>
                                                            </li>
                                                            <?php 
                                                            endwhile ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lihat Lebih Banyak" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_d"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $kibd; ?></td>
                                                    <td><?= rupiah($t_d['total']); ?></td>
                                                    <td><?= tgl_indo(date($update_d['y_a'].'-'.$update_d['m_a'].'-'.$update_d['d_a'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <?php 
                                                    $kib_e = $db->query("SELECT * FROM kib_e");
                                                    $kibe = mysqli_num_rows($kib_e);
                                                    $t_e = $db->query("SELECT SUM(n_perolehan) as total FROM barang a, kib_e b WHERE a.id_brg_ack=b.id_brg_ack")->fetch_assoc();
                                                    $update_e = $db->query("SELECT *, YEAR(updated_at) as y_a, MONTH(updated_at) as m_a, DAY(updated_at) as d_a FROM kib_e ORDER BY updated_at DESC")->fetch_assoc();
                                                    ?>
                                                    <td>5</td>
                                                    <td>Kartu Invertaris Barang E (ASET TETAP LAINNYA)</td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <?php 
                                                            $f_kib_e = $db->query("SELECT * FROM kib_e a, barang b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY b.k_brg ASC LIMIT 5");
                                                            $no = 0;
                                                            while ($fke = $f_kib_e->fetch_array()) :
                                                            $no++;
                                                            ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $fke['k_brg']; ?> | <?= $fke['p_kib_e']; ?>" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_e/det/<?= $fke['id_brg_ack']; ?>"><img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $fke['f_brg']; ?>" alt="Avatar" height="30" width="30"></a>
                                                            </li>
                                                            <?php 
                                                            endwhile ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lihat Lebih Banyak" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_e"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $kibe; ?></td>
                                                    <td><?= rupiah($t_e['total']); ?></td>
                                                    <td><?= tgl_indo(date($update_e['y_a'].'-'.$update_e['m_a'].'-'.$update_e['d_a'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <?php 
                                                    $kib_atb = $db->query("SELECT * FROM kib_atb");
                                                    $kibatb = mysqli_num_rows($kib_atb);
                                                    $t_atb = $db->query("SELECT SUM(n_perolehan) as total FROM barang a, kib_atb b WHERE a.id_brg_ack=b.id_brg_ack")->fetch_assoc();
                                                    $update_atb = $db->query("SELECT *, YEAR(updated_at) as y_a, MONTH(updated_at) as m_a, DAY(updated_at) as d_a FROM kib_atb ORDER BY updated_at DESC")->fetch_assoc();
                                                    ?>
                                                    <td>6</td>
                                                    <td>Kartu Invertaris Barang ATB (ASET TIDAK BERWUJUD)</td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <?php 
                                                            $f_kib_atb = $db->query("SELECT * FROM kib_atb a, barang b WHERE a.id_brg_ack=b.id_brg_ack ORDER BY b.k_brg ASC LIMIT 5");
                                                            $no = 0;
                                                            while ($fkatb = $f_kib_atb->fetch_array()) :
                                                            $no++;
                                                            ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="<?= $fkatb['k_brg']; ?> | <?= $fkatb['p_kib_atb']; ?>" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_atb/det/<?= $fkatb['id_brg_ack']; ?>"><img class="media-object rounded-circle" src="<?= base_url(); ?>_upload/f_brg/<?= $fkatb['f_brg']; ?>" alt="Avatar" height="30" width="30"></a>
                                                            </li>
                                                            <?php 
                                                            endwhile ?>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lihat Lebih Banyak" class="avatar pull-up">
                                                            <a href="<?= base_url(); ?>kib_atb"><span class="avatar-content"><i class="avatar-icon feather icon-chevrons-right"></i></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $kibatb; ?></td>
                                                    <td><?= rupiah($t_atb['total']); ?></td>
                                                    <td><?= tgl_indo(date($update_atb['y_a'].'-'.$update_atb['m_a'].'-'.$update_atb['d_a'])); ?></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <?php 
                                                $tb  = $kiba + $kibb + $kibc + $kibd + $kibe + $kibatb;
                                                $tnp = $t_a['total'] + $t_b['total'] + $t_c['total'] + $t_d['total'] + $t_e['total'] + $t_atb['total'];
                                                ?>
                                                    <th></th>
                                                    <th></th>
                                                    <th>TOTAL </th>
                                                    <th><?= $tb; ?></th>
                                                    <th><?= rupiah($tnp); ?></th>
                                                    <th></th>
                                                </tr>
                                                </tfoot>
                                        </table>
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
    <?php } ?>