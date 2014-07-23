@extends ('layout.bootstrap3.index')
@section('content')
<div>
    <br/>
    <br/>
    <br/>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"> <center><b>Data kerja guru</b></center></h1>
    </div>
    <div class="panel-body">
        <table  class="table">
            <thead>
                <tr class="tab-content">
                    <th>Id</th>
                    <th>Nip</th>
                    <th>Status</th>
                    <th>Jam Mengajar</th>
                    <th>Gaji</th>
                    <th> <center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($datakerja as $val) { ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->nip ?></td>
                        <td><?php echo $val->status ?></td>
                        <td><?php echo $val->jam_mengajar ?></td>
                        <td><?php echo $val->gaji ?></td>
                        <td><center>
                            <a class="btn btn-info" href="<?php echo URL::to('/datakerja/edit/' . $val->id); ?>"> 
                                <span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a class= "btn btn-danger" href="<?php echo URL::to('/datakerja/delete/' . $val->id); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete </a>
                        </center>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php echo $datakerja->links(); ?> 
    </div>
</div>
<a href="<?php echo URL::to('/datakerja/add'); ?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a>
@stop
