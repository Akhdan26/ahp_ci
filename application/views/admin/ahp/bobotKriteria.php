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
            <?php
            // $n = $jml_kriteria;
            // //inisialisasi
            // $urut = 0;

            // for ($x = 0; $x <= ($n - 2); $x++) {
            //     for ($y = ($x + 1); $y <= ($n - 1); $y++) {

            //         $urut++;
            for ($urut = 1; $urut <= $jml_kriteria; $urut++) {
                // echo "<input name='pilih$urut'>\n";
                // echo "<label>" . $nilai[$urut - 1]['nama1'] . "</label>\n";
                // echo "<input name='pilih$urut'>\n";
                // echo "<label>" . $nilai[$urut - 1]['nama2'] . "</label>\n";
                // echo "<input name='bobot$urut' value='" . $nilai[$urut - 1]['nilai'] . "'>\n";
                // echo "\n";
                // if ($nilai['nilai'] == 0) {

            ?>
                <tr>
                    <td>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input name="pilih<?php echo $urut ?>" value="1" checked="" type="radio">
                                <label><?= $nilai[$urut - 1]['nama1']; ?></label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input name="pilih<?php echo $urut ?>" value="2" type="radio">
                                <label><?= $nilai[$urut - 1]['nama2']; ?></label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="field">
                            <input type="text" name="bobot<?php echo $urut ?>" value="<?php echo $nilai[$urut - 1]['nilai'] ?>" required>
                        </div>
                    </td>

                </tr>
            <?php
            }
            // }
            ?>
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