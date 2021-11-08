<div class="row">
    <div class="col-xs-12">
        <br>
        <br>

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
                <h3 class="box-title">Data Bonus</h3>
            </div>




            <!------------------------------------------ USER LIST ------------------------------------------------>


            <div class="box">
                <div class="box-header">


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama </th>
                                <th>Jabatan </th>
                                <th>Bonus</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($bonus as $key => $oke) : ?>
                            <tbody>

                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?= $oke['nama']; ?></td>
                                    <td><?= $oke['jabatan']; ?></td>
                                    <td><?= $oke['hasilbonus']; ?></td>

                                    <td>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $oke['id_bonus']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        <?php endforeach ?>


                        <?php
                        foreach ($bonus2 as $key => $oke) : ?>
                            <tbody>

                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?= $oke['nama']; ?></td>
                                    <td><?= $oke['jabatan']; ?></td>
                                    <td><?= $oke['hasilbonus2']; ?></td>

                                    <td>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete2<?= $oke['id_bonus2']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        <?php endforeach ?>

                        <?php
                        foreach ($bonus3 as $key => $oke) : ?>
                            <tbody>

                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?= $oke['nama']; ?></td>
                                    <td><?= $oke['jabatan']; ?></td>
                                    <td><?= $oke['hasilbonus3']; ?></td>

                                    <td>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete3<?= $oke['id_bonus3']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        <?php endforeach ?>

                        <?php
                        foreach ($bonus4 as $key => $oke) : ?>
                            <tbody>

                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?= $oke['nama']; ?></td>
                                    <td><?= $oke['jabatan']; ?></td>
                                    <td><?= $oke['hasilbonus4']; ?></td>

                                    <td>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete4<?= $oke['id_bonus4']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        <?php endforeach ?>

                        <?php
                        foreach ($bonus5 as $key => $oke) : ?>
                            <tbody>

                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?= $oke['nama']; ?></td>
                                    <td><?= $oke['jabatan']; ?></td>
                                    <td><?= $oke['hasilbonus5']; ?></td>

                                    <td>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete5<?= $oke['id_bonus5']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        <?php endforeach ?>

                    </table>
                </div>
            </div>




            <!------------------------------------------HAPUS USER ------------------------------------------------>
            <?php foreach ($bonus as $key => $oke) { ?>
                <div class="modal modal-danger fade" id="delete<?= $oke['id_bonus']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">HAPUS bonus</h4>
                            </div>
                            <div class="modal-body">

                                <p>Apakah Yakin Ingin Menghapus</p>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <a href="<?= base_url('bonus/delete_bonus/' . $oke['id_bonus']) ?>" type="submit" class="btn btn-outline">HAPUS <i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!----------------------------------------- HAPUS--------------------------------------------->

            <!------------------------------------------HAPUS USER 2------------------------------------------------>
            <?php foreach ($bonus2 as $key => $oke) { ?>
                <div class="modal modal-danger fade" id="delete2<?= $oke['id_bonus2']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">HAPUS bonus</h4>
                            </div>
                            <div class="modal-body">

                                <p>Apakah Yakin Ingin Menghapus</p>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <a href="<?= base_url('bonus/delete_bonus2/' . $oke['id_bonus2']) ?>" type="submit" class="btn btn-outline">HAPUS <i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!----------------------------------------- HAPUS 2-------------------------------------------->

            <!------------------------------------------HAPUS USER 3------------------------------------------------>
            <?php foreach ($bonus3 as $key => $oke) { ?>
                <div class="modal modal-danger fade" id="delete3<?= $oke['id_bonus3']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">HAPUS bonus</h4>
                            </div>
                            <div class="modal-body">

                                <p>Apakah Yakin Ingin Menghapus</p>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <a href="<?= base_url('bonus/delete_bonus3/' . $oke['id_bonus3']) ?>" type="submit" class="btn btn-outline">HAPUS <i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!----------------------------------------- HAPUS 3 -------------------------------------------->

            <!------------------------------------------HAPUS USER 4----------------------------------------------->
            <?php foreach ($bonus4 as $key => $oke) { ?>
                <div class="modal modal-danger fade" id="delete4<?= $oke['id_bonus4']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">HAPUS bonus</h4>
                            </div>
                            <div class="modal-body">

                                <p>Apakah Yakin Ingin Menghapus</p>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <a href="<?= base_url('bonus/delete_bonus4/' . $oke['id_bonus4']) ?>" type="submit" class="btn btn-outline">HAPUS <i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!----------------------------------------- HAPUS 4-------------------------------------------->

            <!------------------------------------------HAPUS USER 5 ----------------------------------------------->
            <?php foreach ($bonus5 as $key => $oke) { ?>
                <div class="modal modal-danger fade" id="delete5<?= $oke['id_bonus5']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title">HAPUS bonus</h5>
                            </div>
                            <div class="modal-body">

                                <p>Apakah Yakin Ingin Menghapus</p>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">BATAL</button>
                                <a href="<?= base_url('bonus/delete_bonus5/' . $oke['id_bonus5']) ?>" type="submit" class="btn btn-outline">HAPUS <i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!----------------------------------------- HAPUS 2-------------------------------------------->



        </div>
    </div>
</div>






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