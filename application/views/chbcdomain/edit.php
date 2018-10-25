<div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
      <div class="well">
        
          <?php echo form_open('chbcdomains/update/'.$chbcdomain['id']);?>
          <input class="form-control" type="hidden" name="id"  value="<?=$chbcdomain['id']; ?>" required>
          <p>Name:<br>
          <input class="form-control" type="text" name="name" value="<?=$chbcdomain['name']; ?>" required>
          </p>

          <p>Chbcdomain user:<br>
            <input type="text" class="form-control" name="user_domain" value="<?=$chbcdomain['username_domain']; ?>" required>
          </p>

          <p>Password:<br>
            <input class="form-control" type="text" name="password_domain" value="<?=$chbcdomain['password_domain']; ?>" required>
          </p>

          <p>Designation:<br>
            <input class="form-control" type="text" name="department" value="<?=$chbcdomain['department']; ?>" required>
          </p>

          <p>I.P Address<br>
            <input class="form-control" type="text" name="ip_address" value="<?=$chbcdomain['ip_address']; ?>" required>
          </p>
          <p>Local Admin Password:<br>
            <input class="form-control" type="text" name="local_password" value="<?=$chbcdomain['local_admin_password']; ?>" required>
          </p>
        
          <button type="submit" class="btn btn-default">Submit</button>
          </form>
        
     </div>
</div>

<!-- container div end -->
</div>