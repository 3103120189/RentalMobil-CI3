<div class="container"><br><br><br><br><br>
    <div class="card" top="100px">
        <div class="card-header">
            Form Rental Mobil
        </div>

        <div class="card-body" >
            <?php foreach($detail as $dt) :?>
                <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi')?>">
                    <div class="form-group row">
                        <label>Harga Sewa/Hari</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil?>">
                        <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga?>"readonly>
                    </div>
                    <div class="form-group row">
                        <label>Denda/Hari</label>
                        <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda?>">
                    </div>
                    <div class="form-group row">
                        <label>Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>
                    <div class="form-group row">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning">Rental</button>
                </form>
            <?php endforeach;?>
        </div>
    </div>
</div>