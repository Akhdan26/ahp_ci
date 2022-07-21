<section class="content">
    <h2 class="ui header">Perbandingan Kriteria</h2>
    <?= $this->session->flashdata('message'); ?>
    <table class="ui celled selectable collapsing table">
        <thead>
            <?php $no = 1; ?>
            <tr>
                <th colspan="2">Pilih yang lebih penting</th>
                <th>Nilai Perbandingan</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input name="pilih" value="1" checked="" class="hidden" type="radio">
                            <label><?= $nilai->nama ?></label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input name="pilih" value="2" class="hidden" type="radio">
                            <label><?= $nilai2->nama ?></label>
                        </div>
                    </div>

                </td>
                <td>
                    <div class="field">
                        <input type="text" name="bobot" value="<?= $nilai2->nilai ?>" disabled>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <br>
    <form action="<?= base_url('ahp/alternatif'); ?>">
        <button class="ui left labeled icon button" style="float: left;">
            Kembali
            <i class="left arrow icon"></i>
        </button>
    </form>

    <form action="<?= base_url('ahp/bbt_alternatif'); ?>">
        <button class="ui right labeled icon button" style="float: right;">
            <i class="right arrow icon"></i>
            Lanjut
        </button>
    </form>
</section>