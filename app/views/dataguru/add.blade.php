@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Tambah data guru</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/dataguru/add/proses"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nip</label>
                    <div class="col-sm-4">
                       <input type="text" name="nip" class="form-control " placeholder="nip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis kelamin</label>
                    <div class="col-sm-4">
                        <select name="jk" class="form-control">
                            <option value="P">Pria</option>
                            <option value="W">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-4">
                        <input type="text" name="jabatan" class="form-control " placeholder="jabatan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control " placeholder="alamat">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Telpon</label>
                    <div class="col-sm-5">
                        <input type="text" name="notelp" class="form-control " placeholder="no_telp">
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