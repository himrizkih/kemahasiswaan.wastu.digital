<?php echo validation_errors()?>

<form action="<?php echo base_url() ?>admin/kemahasiswaan/masuk/proseseditpass" method="post">
    <div class="form-group">
      <div class="alert alert-warning"><i class="fa fa-exclamation-triangle"> Password yang telah berhasil diubah akan langsung dialihkan ke halaman Login, untuk login dengan password yang baru.</i></div>
      <label for="newpass">New Password :</label>
      <input type="password" class="form-control" name="new" placeholder="Enter New Password" required="required" autofocus="autofocus">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password :</label>
      <input type="password" class="form-control" name="confirm" placeholder="Enter Confirm password" required="required">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>