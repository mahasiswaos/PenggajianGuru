@extends ('layout.bootstrap3.index')
@section('content')
<div>
    <br/>
    <br/>
    <br/>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"> <center><b>Data Penerimaan Gaji Guru</b></center></h1>
    </div>
    <div class="panel-body">
        <table  class="table">
            <thead>
                <tr class="tab-content">
                    <th>id</th>
                    <th>Nip</th>
                    <th>Gaji</th>
                    <th>Tanggal penerimaan gai</th>
                    <th> <center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($penerimaangaji as $val) { ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->dataguru->nip; ?></td>
                        <td><?php echo $val->datakerja_id ; ?></td>
                        <td><?php echo $val->tgl ?></td>
                        <td><center>
                            <a class="btn btn-info" href="<?php echo URL::to('/penerimaangaji/edit/' . $val->id); ?>"> 
                                <span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a class= "btn btn-danger" href="<?php echo URL::to('/penerimaangaji/delete/' . $val->id); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete </a>
                        </center>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php echo $penerimaangaji->links(); ?> 
    </div>
</div>
<a href="<?php echo URL::to('/penerimaangaji/add'); ?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a>
@stop