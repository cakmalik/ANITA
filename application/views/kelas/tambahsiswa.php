 <div class="form-group">
          <label>Wali Kelas</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>No Hp</label>
          <input type="text" name="nohp_siswa" class="form-control">
        </div>
        <div>
        <label>Kelas</label>
          <select class="form-control">
            <?php foreach ($kelas->result() as $row ): ?>
              
            <option><?= $row->kelas ?></option>
            <?php endforeach; ?>
          </select>
        </div>