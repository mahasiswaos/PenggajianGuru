@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Tambah Data Kerja Guru</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/datakerja/add/proses"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">nip</label>
                    <div class="col-sm-4">
                    <select class="form-control" name="nip">
                            <option>--Pilih--</option>
                            <?php foreach ($dataguru as $value) {?>
                            <option value="<?php echo $value->nip ?>"><?php echo $value->nip ?></option>
                            <?php } ?>
                   </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-5">
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jam Mengajar</label>
                    <div class="col-sm-5">
                        <input type="text" name="jam_mengajar" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">gaji</label>
                    <div class="col-sm-5">
                        <input type="text" name="gaji" class="form-control">
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

