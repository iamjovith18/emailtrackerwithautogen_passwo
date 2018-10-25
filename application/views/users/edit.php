<div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
      <div class="well">
        
          <?php echo form_open('users/update/'.$admins['id']);?>
          <input class="form-control" type="hidden" name="id" ng-model="name" value="<?=$admins['id']; ?>" required>
          <p>Name:<br>
          <input class="form-control" type="text" name="name" ng-model="name" value="<?=$admins['name']; ?>" required>
          </p>

          <p>Username:<br>
            <input type="text" class="form-control" name="username" ng-model="username" value="<?=$admins['username']; ?>" required>
          </p>

          <p>Password:<br>
            <input class="form-control" type="password" name="password" ng-model="password" value="<?=$admins['password']; ?>" required>
          </p>
          <button type="submit" class="btn btn-default">Submit</button>
          </form>
        
     </div>
</div>

<!-- container div end -->
</div>