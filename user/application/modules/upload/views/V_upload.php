<?php echo form_open_multipart(site_url('tambah_proses'));?>
<div class="form-group"><label>Gambar</label>
  <input type="file" name="userfile[]" multiple>
</div>
<?php echo form_close() ?>