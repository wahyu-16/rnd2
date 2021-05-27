  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
         <form action="modal" method="post">
             <button type="button" class="btn btn-primary" data-toggle="modal"
                     data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>
         </form>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>MATA KULIAH</th>
                <th>DOSEN</th>
                <th>JENIS TUGAS</th>
                <th>NAMA TUGAS</th>
                <th>DEADLINE</th>
                <th>NAMA FILE</th>
                <th>PENGUMPULAN</th>
                <th>KETERANGAN</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            $no=1;
            foreach($tb_tugas as $jdw):
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $jdw->mata_kuliah ?></td>
                <td><?php echo $jdw->dosen ?></td>
                <td><?php echo $jdw->jenis_tugas ?></td>
                <td><?php echo $jdw->nama_tugas ?></td>
                <td><?php echo $jdw->deadline ?></td>
                <td><?php echo $jdw->nama_file ?></td>
                <td><?php echo $jdw->pengumpulan ?></td>
                <td><?php echo $jdw->keterangan ?></td>
                <td onClick="confirm('Hapus data <?php echo $jdw->mata_kuliah; echo " - "; echo $jdw->nama_tugas;  ?>?')">
                        <?php echo anchor('jadwal/hapus/'.$jdw->id, '<button type="button"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>'); ?>
                </td>
                <td onClick="confirm('ubah data <?php echo $jdw->mata_kuliah; echo " - "; echo $jdw->nama_tugas;  ?>?')">
                        <?php echo anchor('jadwal/edit/'.$jdw->id, '<button type="button"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</button>'); ?>
                </td>


            </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Data</h4>
        <button type="button" class="btn-reset" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="<?php echo base_url(). 'jadwal/tambah_aksi'; ?>">
          <div class="form-groub">
              <label>MATA KULIAH</label>
              <input type="text" name="mata_kuliah" class="form-control">
          </div>
          <div class="form-groub">
              <label>DOSEN</label>
              <input type="text" name="dosen" class="form-control">
          </div>
          <div class="form-groub">
              <label>JENIS TUGAS</label>
              <input type="text" name="jenis_tugas" class="form-control">
          </div>
          <div class="form-groub">
              <label>NAMA TUGAS</label>
              <input type="text" name="nama_tugas" class="form-control">
          </div>
          <div class="form-groub">
              <label>DEADLINE</label>
              <input type="datetime-local" name="deadline" class="form-control">
          </div>
          <div class="form-groub">
              <label>NAMA FILE</label>
              <input type="text" name="nama_file" class="form-control">
          </div>
          <div class="form-groub">
              <label>PENGUMPULAN</label>
              <input type="text" name="pengumpulan" class="form-control">
          </div>
          <div class="form-groub">
              <label>KETERANGAN</label>
              <input type="text" name="keterangan" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

          </form>

      </div>
    </div>
  </div>
</div>

</div>
