<?php
//pesan errors 
$errors = session()->getFlashdata('errors');
if (!empty($errors)) { ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>

<?php } ?>

<?php

if (session()->getFlashdata('pesan')) {
    echo '<div class="alert alert-success" role="alert">';
    echo session()->getFlashdata('pesan');
    echo '</div>';
} ?>




<!-- =========================================================== -->
<?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger" role="alert">
        <h4>Periksa Entrian Form</h4>
        </hr />
        <?php echo session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>

<br>
<div class="alert alert-info alert-dismissible">
    <h4><i class="icon fa fa-dollar"></i>Input Bonus</h4>
    Halaman Input Bonus Pegawai
</div>

<br>
<form action="bonus/input_bonus" method="post" name="hitungbonus" enctype="multipart/form-data">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Input Pembayaran</h3>
        </div>
        <div class="box-body">
            <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-money"></i></span>
                <input type="text" name="pembayaran" class="form-control" placeholder="Pembayaran">

            </div>
            <br>
        </div>
    </div>

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Pegawai</h3>
        </div>

        <br>


        <div class="box-body">
            <div class="row">
                <div class="col-xs-4">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <select class="form-control" name="id_user">
                        <option value="100">--PILIH PEGAWAI-- </option>
                        <?php foreach ($pegawai as $key => $oke) : ?>

                            <option value="<?= $oke['id_user']; ?>"> <?= $oke['nama']; ?> </option>

                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="col-xs-2">
                    <span class="input-group-addon">%</span>
                    <input type="text" name="persen" class="form-control" placeholder="Persentase Bonus">&nbsp;
                </div>
                <div class="col-xs-3">
                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    <input type="text" name="hasilbonus" class=" form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <div class="col-xs-3">

                    <input type="hidden" name="sisabonus" class="form-control" placeholder="Sisa Bonus">&nbsp;
                </div>



                <div class="col-xs-4">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <select class="form-control" name="id_user2">
                        <option value="100">--PILIH PEGAWAI-- </option>
                        <?php foreach ($pegawai as $key => $oke) : ?>

                            <option value="<?= $oke['id_user']; ?>"> <?= $oke['nama']; ?> </option>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-xs-2">
                    <span class="input-group-addon">%</span>
                    <input type="text" name="persen2" class="form-control" placeholder="Persentase Bonus">&nbsp;
                </div>
                <div class="col-xs-3">
                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    <input type="text" name="hasilbonus2" class=" form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <div class="col-xs-3">

                    <input type="hidden" name="sisabonus2" class="form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>

                <div class="col-xs-4">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <select class="form-control" name="id_user3">
                        <option value="100">--PILIH PEGAWAI-- </option>
                        <?php foreach ($pegawai as $key => $oke) : ?>

                            <option value="<?= $oke['id_user']; ?>"> <?= $oke['nama']; ?> </option>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-xs-2">
                    <span class="input-group-addon">%</span>
                    <input type="text" name="persen3" class="form-control" placeholder="Persentase Bonus">&nbsp;
                </div>
                <div class="col-xs-3">
                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    <input type="text" name="hasilbonus3" class=" form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <div class="col-xs-3">

                    <input type="hidden" name="sisabonus3" class="form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>

                <div class="col-xs-4">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <select class="form-control" name="id_user4">
                        <option value="100">--PILIH PEGAWAI-- </option>
                        <?php foreach ($pegawai as $key => $oke) : ?>

                            <option value="<?= $oke['id_user']; ?>"> <?= $oke['nama']; ?> </option>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-xs-2">
                    <span class="input-group-addon">%</span>
                    <input type="text" name="persen4" class="form-control" placeholder="Persentase Bonus">&nbsp;
                </div>
                <div class="col-xs-3">
                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    <input type="text" name="hasilbonus4" class=" form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <div class="col-xs-3">

                    <input type="hidden" name="sisabonus4" class="form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>

                <div class="col-xs-4">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <select class="form-control" name="id_user5">
                        <option value="100">--PILIH PEGAWAI-- </option>
                        <?php foreach ($pegawai as $key => $oke) : ?>

                            <option value="<?= $oke['id_user']; ?>"> <?= $oke['nama']; ?> </option>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-xs-2">
                    <span class="input-group-addon">%</span>
                    <input type="text" name="persen5" class="form-control" placeholder="Persentase Bonus">&nbsp;
                </div>
                <div class="col-xs-3">
                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    <input type="text" name="hasilbonus5" class=" form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <div class="col-xs-3">

                    <input type="hidden" name="sisabonus5" class="form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <div class="col-xs-12">

                    <input type="hidden" id="persentase2" name="persentase" class="form-control" placeholder="Bonus Yang Didapat">&nbsp;
                </div>
                <br>
                <br>
                <button type="button" class="btn btn-success btn-sm" onclick="hitung()" value="proses">Proses</button>
                <button type="reset" class="btn btn-warning btn-sm">Reset</button>



            </div>
        </div>



    </div>

    <button type="submit" id="btSubmit" class="btn btn-success btn-block btn-flat">Simpan</button>
</form>
<br>
<br>
<br>

<script type="text/javascript">
    function hitung() {
        var pembayaran = parseFloat(document.hitungbonus.pembayaran.value);
        if (isNaN(pembayaran)) {
            pembayaran = 0.0;
        }

        var persen = parseFloat(document.hitungbonus.persen.value);
        if (isNaN(persen)) {
            persen = 0.0;
        }
        var persen2 = parseFloat(document.hitungbonus.persen2.value);
        if (isNaN(persen2)) {
            persen2 = 0.0;
        }

        var persen3 = parseFloat(document.hitungbonus.persen3.value);
        if (isNaN(persen3)) {
            persen3 = 0.0;
        }

        var persen4 = parseFloat(document.hitungbonus.persen4.value);
        if (isNaN(persen4)) {
            persen4 = 0.0;
        }


        var persen5 = parseFloat(document.hitungbonus.persen5.value);
        if (isNaN(persen5)) {
            persen5 = 0.0;
        }

        var bonus = pembayaran * persen / 100;
        var hasil = pembayaran - bonus;
        document.hitungbonus.sisabonus.value = hasil;
        document.hitungbonus.hasilbonus.value = bonus;

        var bonus2 = pembayaran * persen2 / 100;
        var hasil2 = pembayaran - bonus2;
        document.hitungbonus.sisabonus2.value = hasil2;
        document.hitungbonus.hasilbonus2.value = bonus2;

        var bonus3 = pembayaran * persen3 / 100;
        var hasil3 = pembayaran - bonus3;
        document.hitungbonus.sisabonus3.value = hasil3;
        document.hitungbonus.hasilbonus3.value = bonus3;

        var bonus4 = pembayaran * persen4 / 100;
        var hasil4 = pembayaran - bonus4;
        document.hitungbonus.sisabonus4.value = hasil4;
        document.hitungbonus.hasilbonus4.value = bonus4;

        var bonus5 = pembayaran * persen5 / 100;
        var hasil5 = pembayaran - bonus5;
        document.hitungbonus.sisabonus5.value = hasil5;
        document.hitungbonus.hasilbonus5.value = bonus5;

        var persenok = persen + persen2 + persen3 + persen4 + persen5;
        document.hitungbonus.persentase.value = persenok;

        var bt = document.getElementById('btSubmit');
        if (persentase2.value == 100) {
            bt.disabled = false;
        } else {
            alert("Persentase Masih Salah, Harus = 100%");
            bt.disabled = true;
        }

    }
</script>