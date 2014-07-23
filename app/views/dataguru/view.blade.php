@extends ('layout.bootstrap3.index')
@section('content')
<div>
    <br/>
    <br/>
    <br/>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
      <h1 class="panel-title"> <center><b>Data guru</b></center></h1>
  </div>
  <div class="panel-body">
     <table  class="table">
            <thead>
                <tr class="tab-content">
                    <th>Id </th>
                    <th>Nip </th>
                    <th>Nama </th>
                    <th>JK</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataguru as $val) { ?>
                    <tr>
                        <td><?php echo $val->id   ?></td>
                        <td><?php echo $val->nip  ?></td>
                        <td><?php echo $val->nama ?></td>
                        <td><?php echo $val->jk   ?></td>
                        <td><?php echo $val->jabatan ?></td>
                        <td><?php echo $val->alamat  ?></td>
                        <td><?php echo $val->no_telp ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo URL::to('/dataguru/edit/'.$val->id); ?>"> 
                              <span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a class= "btn btn-danger" href="<?php echo URL::to('/dataguru/delete/'.$val->id); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php echo $dataguru->links(); ?> 
      
      <?php echo 'nuraisyah'; ?>
  </div>
</div>
<a href="<?php echo URL::to('/dataguru/add');?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a>
@stop