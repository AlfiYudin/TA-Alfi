<section class="content pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-center">Daftar Petugas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i>Tambah</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Nama Petugas</th>
                                    <th class="text-center">Level</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($daftar_petugas as $petugas) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="text-center"><?php echo $petugas->username; ?></td>
                                        <td class="text-center"><?php echo $petugas->nama_user; ?></td>
                                        <td class="text-center"><?php echo $petugas->level; ?></td>
                                        <td class="">
                                            <div>
                                                <!-- Modal Edit -->
                                                <section class="content">
                                                    <div class="modal fade" id="modal-edit<?php echo $petugas->id_user ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Petugas</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form name="frmpengguna" method="post" action="<?php base_url() ?>/pengguna/simpan_edit">
                                                                        <div class="card-body">
                                                                            <div class="form-group">
                                                                                <label for="">Username</label>
                                                                                <input value="<?php echo $petugas->username ?>" type="text" class="form-control" id="" name="username">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Nama Petugas</label>
                                                                                <input type="text" value="<?php echo $petugas->nama_user ?>" class="form-control" id="" name="nama_user">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Password</label>
                                                                                <input type="password" value="<?= $petugas->password ?>" class="form-control" id="" name="password">
                                                                            </div>
                                                                            <div class="">
                                                                                <label for="Pilih Kategori">Level</label>
                                                                                <select name="level" id="" class="form-control" required>
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="Administrator" <?php if ($petugas->level == 'Administrator') echo "selected" ?>>Administrator</option>
                                                                                    <option value="Petugas" <?php if ($petugas->level == 'Petugas') echo "selected" ?>>Petugas</option>
                                                                                </select>
                                                                            </div><br>
                                                                        </div>
                                                                        <!-- /.card-body -->
                                                                        <div class="box-footer col-12 pb-3 d-flex justify-content-between float-right">
                                                                            <button type="button" class="btn btn-danger ml-3" data-dismiss="modal">BATAL</button>
                                                                            <button id="simpan" type="submit" class="btn  btn-primary mr-3">SIMPAN</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </section>
                                            </div>
                                            <div class="text-center">

                                                <a data-toggle="modal" data-target="#modal-edit<?php echo $petugas->id_user ?>" class=" btn btn-warning edit"><i class="fa fa-edit" title="Edit"></i> </a>
                                                <a href="petugas/hapus/<?php echo $petugas->username; ?>" onclick="return confirm('Hapus Data Petugas <?php echo $petugas->nama_user; ?> ?')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- modal tambah -->
<section class="content">
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Petugas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="frmbuku" method="post" action="<?php base_url() ?>/pengguna/simpan">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" id="" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Petugas</label>
                                <input type="text" class="form-control" id="" name="nama_user" placeholder="Nama Petugas" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="" name="password" placeholder="Password" required>
                            </div>
                            <div class="">
                                <label for="Pilih Kategori">Level</label>   
                                <select name="level" id="" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Petugas">Petugas</option>
                                </select>
                            </div><br>
                        </div>
                        <!-- /.card-body -->
                        <div class="box-footer col-12 pb-3 d-flex justify-content-between float-right">
                            <button type="button" class="btn btn-danger ml-3" data-dismiss="modal">BATAL</button>
                            <button id="simpan" type="submit" class="btn  btn-primary mr-3">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>