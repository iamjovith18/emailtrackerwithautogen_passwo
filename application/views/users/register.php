<div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
      <!-- Check username if exists -->
      <?php if(validation_errors()):?>
            <div class="alert alert-danger"><strong><?php echo validation_errors(); ?></strong></div>
      <?php endif;?>
      <!-- Check username if exists -->
      
      <div class="well">
        <?php echo form_open('users/register','ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate');?>
        <p>Name:<br>
        <input class="form-control" type="text" name="name" ng-model="name" required>
        <span style="color:red" ng-show="myForm.name.$dirty && myForm.name.$invalid && !myForm.name.$pristine">
        <span ng-show="myForm.name.$error.required">Name is required.</span>
        </span>
        </p>

        <p>Username:<br>
        <input class="form-control" type="text" name="username" ng-model="username" required>
        <span style="color:red" ng-show="myForm.username.$dirty && myForm.username.$invalid && !myForm.username.$pristine">
        <span ng-show="myForm.username.$error.required">Name is required.</span>
        </span>
        </p>

        <p>Password:<br>
        <input class="form-control" type="password" name="password" ng-model="password" required>
        <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid && !myForm.password.$pristine">
        <span ng-show="myForm.password.$error.required">Password is required.</span>
        </span>
        </p>

        <button type="submit" class="btn btn-success" ng-disabled="myForm.$invalid">Save</button>
        </form>
     </div>
</div>

<!-- container div end -->
</div>