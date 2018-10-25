<div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
      <div class="well">
        
          <?php echo form_open('emails/update/'.$emails['id']);?>
          <input class="form-control" type="hidden" name="id" ng-model="name" value="<?=$emails['id']; ?>" required>
          <p>Name:<br>
          <input class="form-control" type="text" name="name" ng-model="name" value="<?=$emails['name']; ?>" required>
          </p>

          <p>Email:<br>
            <input type="email" class="form-control" name="email" ng-model="email" value="<?=$emails['emailAddress']; ?>" required>
          </p>

          <p>Password:<br>
            <input class="form-control" type="text" name="password" ng-model="password" value="<?=$emails['password']; ?>" required>
          </p>

          <p>Designation:<br>
            <input class="form-control" type="text" name="designation" ng-model="designation" value="<?=$emails['designation']; ?>" required>
          </p>

          <p>Location:<br>
            <input class="form-control" type="text" name="location" ng-model="location" value="<?=$emails['location']; ?>" required>
          </p>
          <button type="submit" class="btn btn-default">Submit</button>
          </form>
        
     </div>
</div>

<!-- container div end -->
</div>