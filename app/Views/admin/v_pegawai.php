<div class="row">
    <div class="col-xs-12">
        <br>
        <br>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
            Tambah
        </button>
        <br>
        <div class="box">
            <div class="box-header">
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
                }

                ?>
                <h3 class="box-title">Data Pegawai</h3>
            </div>

            <div class="modal modal-success fade" id="modal-info">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">TAMBAH PEGAWAI</h4>
                        </div>
                        <div class="modal-body">
                            <div class="register-box-body">








                                <?php echo form_open('user/tambah_pegawai/') ?>
                                <label>Nama Lengkap</label>
                                <div class="form-group has-feedback">
                                    <input name="nama" class="form-control" placeholder="Nama Lengkap">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <label>Email</label>
                                <div class="form-group has-feedback">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <label>Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option value=""> --JABATAN-- </option>
                                    <option value="PROGRAMMER"> PROGRAMMER </option>
                                    <option value="KONTEN KREATOR"> KONTEN KREATOR </option>
                                    <option value="DIGITAL MARKETING"> DIGITAL MARKETING </option>
                                </select>
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value=""> --STATUS PEGAWAI-- </option>
                                    <option value="PEGAWAI AKTIF"> PEGAWAI AKTIF </option>
                                    <option value="CUTI"> CUTI </option>

                                </select>
                                <label>Password</label>
                                <div class="form-group has-feedback">
                                    <input name="password" class="form-control" placeholder="Password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <!-- select -->

                                <div class="row">
                                    <div class="col-xs-8">

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Tambah</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <?php echo form_close() ?>



                            </div>
                            <!-- /.form-box -->
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>


            <!------------------------------------------ USER LIST ------------------------------------------------>


            <div class="box">
                <div class="box-header">


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama </th>
                                <th>email</th>
                                <th>Password</th>
                                <th>Jabatan</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($pegawai as $key => $oke) : ?>
                            <tbody>

                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?= $oke['nama']; ?></td>
                                    <td><?= $oke['email']; ?></td>
                                    <td><?= $oke['password']; ?></td>
                                    <td><?= $oke['jabatan']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $oke['id_user']; ?>">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $oke['id_user']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>


            <!------------------------------------------EDIT USER ------------------------------------------------>
            <?php foreach ($pegawai as $key => $oke) { ?>
                <div class="modal modal-info fade" id="edit<?= $oke['id_user']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">EDIT PEGAWAI</h4>
                            </div>
                            <div class="modal-body">

                                <!----------------------------------------- /.FORM --------------------------------------------->

                                <?php echo form_open('user/editpegawai/' . $oke['id_user']) ?>
                                <label>Nama Lengkap</label>
                                <div class="form-group has-feedback">
                                    <input name="nama" class="form-control" value="<?= $oke['nama']; ?>" placeholder="Nama Lengkap">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <label>Email</label>
                                <div class="form-group has-feedback">
                                    <input type="email" name="email" value="<?= $oke['email']; ?>" class="form-control" placeholder="Email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <label>Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option value=""> --JABATAN-- </option>
                                    <option value="PROGRAMMER"> PROGRAMMER </option>
                                    <option value="KONTEN KREATOR"> KONTEN KREATOR </option>
                                    <option value="DIGITAL MARKETING"> DIGITAL MARKETING </option>
                                </select>
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value=""> --STATUS PEGAWAI-- </option>
                                    <option value="PEGAWAI AKTIF"> PEGAWAI AKTIF </option>
                                    <option value="CUTI"> CUTI </option>

                                </select>
                                <label>Password</label>
                                <div class="form-group has-feedback">
                                    <input type="text" name="password" value="<?= $oke['password']; ?>" class="form-control" placeholder="password">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>


                                <!----------------------------------------- /.FORM --------------------------------------------->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-outline">EDIT <i class="fa fa-pencil"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
            <?php } ?>


            <!------------------------------------------HAPUS USER ------------------------------------------------>
            <?php foreach ($pegawai as $key => $oke) { ?>
                <div class="modal modal-danger fade" id="delete<?= $oke['id_user']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">HAPUS PEGAWAI</h4>
                            </div>
                            <div class="modal-body">

                                <p>Apakah Yakin Ingin Menghapus</p>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <a href="<?= base_url('user/delete_pegawai/' . $oke['id_user']) ?>" type="submit" class="btn btn-outline">HAPUS <i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!----------------------------------------- HAPUS--------------------------------------------->





            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
echo view('layout/v_footer');

?>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->


<!-- page script -->
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(400, 0).slideUp(400, function() {
            $(this).remove();
        });

    }, 4000);
</script>
</body>

</html>