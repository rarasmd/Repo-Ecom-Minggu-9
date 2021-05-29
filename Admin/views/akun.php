<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"><?= $title; ?></h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <?= $this->session->flashdata('message'); ?>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">
                        <!-- end card-header -->
                        <div class="card-body">
                            <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush" id="">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID User</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Tlpn</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <?php foreach ($user_role as $a) : ?>
                                            <tr>
                                                <th><?= $a['id']; ?></th>
                                                <th><?= $a['nama']; ?></th>
                                                <th><?= $a['email']; ?></th>
                                                <th><?= $a['no_tlpn']; ?></th>
                                                <th>
                                                    <span class="badge badge-primary"><?= $a['role']; ?></span>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($a['is_active'] == 1) {
                                                        echo "<span class='badge badge-success'> Aktif</span>";
                                                    } else {
                                                        echo "<span class='badge badge-danger'> Non-Aktif</span>";
                                                    }
                                                    ?>
                                                </th>
                                                <th>
                                                    <h5><span class="badge badge-danger" data-toggle="modal" data-target="#emailedit<?= $a['id']; ?>">Edit</span></h5>
                                                </th>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="emailedit<?= $a['id']; ?>" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Hak Akses <?= $a['nama']; ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- form order -->
                                                            <form method="POST" action="<?= base_url('admin/admin/ubah_role') ?>">
                                                                <!-- bikim input hidden -->
                                                                <input type="hidden" class="form-control" name="id" value="<?php echo $a['id'] ?>">
                                                                <div class="form-group">
                                                                    <label for="role">Hak Akses</label>
                                                                    <select class="form-control" id="role" name="role_id">
                                                                        <option value="<?= $a['id_role']; ?>" selected><?= $a['role']; ?></option>
                                                                        <option value="" disabled>-------------------------------------------</option>
                                                                        <?php foreach ($role as $rol) : ?>
                                                                            <option value="<?= $rol['id_role']; ?>"><?= $rol['role']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="lanjut" class="btn btn-primary">Ubah Hak Akses</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- selesaimodal -->
                                        <?php endforeach; ?>
                                    </tfoot>
                                </table>
                            </div>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->