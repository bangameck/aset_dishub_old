<?php 
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

#javascript
function javascript($m, $t, $pesan = '')
{ //$t=redirect,alert,confirm
    global $base_url;
    if ($t == 'redirect') {
        echo "<script>window.location='" . $base_url . "$m';</script>";
    } elseif ($t == 'alert-error') {
        echo "<br>
                   <div class='col-md-offset-3 col-lg-6 alert alert-danger'>
                   <strong>Error !</strong> " . $pesan . "
                   </div>
               ";
    } elseif ($t == 'alert-sukses') {
        echo "<script>alert('$pesan');
				window.location='" . $base_url . "$m';</script>";
    } elseif ($t == 'confirm') {
        echo "			<script language='JavaScript'>
			function konfirmasi()
			{
			tanya = confirm('Anda Yakin Akan Menghapus Data ?');
			if (tanya == true) return true;
			else return false;
			}
			function non()
			{
			tanya = confirm('Anda Yakin Untuk Menon-Aktifkan Akun Ini ?');
			if (tanya == true) return true;
			else return false;
			}
			function aktif()
			{
			tanya = confirm('Anda Yakin Untuk Meng-Aktifkan Akun Ini ?');
			if (tanya == true) return true;
			else return false;
			}
			function logout()
			{
			tanya = confirm('Anda Yakin Untuk Keluar Dari Sistem ?');
			if (tanya == true) return true;
			else return false;
			}
			</script>";
    }
}
