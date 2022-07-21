<section class="content">
    <h2 class="ui header">Alternatif</h2>
    <?= $this->session->flashdata('message'); ?>
    <table class="ui celled table">
        <thead>
            <?php $no = 1; ?>
            <tr>
                <th class="collapsing">No</th>
                <th colspan="2">Nama Alternatif</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternatif as $a) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td class="right aligned collapsing">
                        <a data-bs-toggle="modal" data-bs-target="#edit_data_Modal<?= $a['id']; ?>" class="ui mini teal left labeled icon button"><i class="right edit icon"></i>EDIT</a>
                        <a href="<?= base_url('ahp/deleteAlternatif/') . $a['id']; ?>" onclick="return confirm('anda yakin ingin hapus?');" class="ui mini red left labeled icon button"><i class="right remove icon"></i>DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot class="full-width">
            <tr>
                <th colspan="3">
                    <a data-bs-toggle="modal" data-bs-target="#add_data_Modal">
                        <div class="ui right floated small primary labeled icon button">
                            <i class="plus icon"></i>Tambah
                        </div>
                    </a>
                </th>
            </tr>
        </tfoot>
    </table>

    <br>
    <form action="<?= base_url('ahp/kriteria'); ?>">
        <button class="ui left labeled icon button" style="float: left;">
            Kembali
            <i class="left arrow icon"></i>
        </button>
    </form>

    <form action="<?= base_url('ahp/bbt_kriteria'); ?>">
        <button class="ui right labeled icon button" style="float: right;">
            <i class="right arrow icon"></i>
            Lanjut
        </button>
    </form>
</section>
<!-- add modal -->
<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Data Alternatif</h4>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('ahp/addAlternatif')  ?>
                <label>Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" />
                <br>
                <input type="submit" name="submit" id="submit" value="Add" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<!--edit modal -->
<?php $no = 0;
foreach ($alternatif as $a) : $no++; ?>
    <div id="edit_data_Modal<?= $a['id']; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Alternatif</h4>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('ahp/editAlternatif/' . $a['id'])  ?>
                    <label>Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= set_value('nama', $a['nama']); ?>" />
                    <br>
                    <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>