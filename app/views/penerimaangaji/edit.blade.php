@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Ubah Data Penerimaan Gaji</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/penerimaangaji/edit/proses"); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $penerimaangaji->id ?>">
                   <input type="hidden" name="dataguru_id" class="form-control" value="<?php echo $penerimaangaji->dataguru->nip; ?>">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Gaji</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="iddatakerja">
                            <option>--Pilih--</option>
                            <?php foreach ($datakerja as $value1) { ?>
                                <option value="<?php echo $value1->id ?>"
                                        <?php echo($value1->id== $penerimaangaji['datakerja_id']) ? "selected" : ""; ?>><?php echo $value1->gaji?></option>
                                    <?php } ?>
                        </select>
                    </div>
                </div>  
                   
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal penggajian</label>
                    <div class="col-sm-5">
                        <input type="date" name="tgl" class="form-control" value="<?php echo $penerimaangaji->tgl; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"> Simpan</button>
                        <input type="button"  class="btn btn-danger" onclick="history.back(-1)" value="Batal">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop