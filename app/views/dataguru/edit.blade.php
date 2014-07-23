@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Ubah Data Guru</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/dataguru/edit/proses"); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $dataguru->id?>">
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nip</label>
                    <div class="col-sm-4">
                        <input type="text" name="nip" class="form-control " value="<?php echo $dataguru->nip?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " value="<?php echo $dataguru->nama?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">jenis kelamin</label>
                    <div class="col-sm-4">
                        <input type="text" name="jk" class="form-control " value="<?php echo $dataguru->jk?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-4">
                        <input type="text" name="jabatan" class="form-control " value="<?php echo $dataguru->jabatan?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control " value="<?php echo $dataguru->alamat?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Telpon</label>
                    <div class="col-sm-4">
                        <input type="text" name="notelp" class="form-control " value="<?php echo $dataguru->no_telp?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">Ubah</button> 
                        <input type="button"  class="btn btn-danger" onclick="history.back(-1)" value="Batal">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop