<?php 
  //create random generated password
  function generateRandomString($length = 14) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
?>

<div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
      <!-- Check email account if exists -->
      <?php if(validation_errors()):?>
            <div class="alert alert-danger"><strong><?php echo validation_errors(); ?></strong></div>
      <?php endif;?>
      <!-- Check email account if exists -->
      
      <div class="well">
        <?php echo form_open('emails/create','ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate');?>
        <p>Name:<br>
        <input class="form-control" type="text" name="name" ng-model="name" required>
        <span style="color:red" ng-show="myForm.name.$dirty && myForm.name.$invalid && !myForm.name.$pristine">
        <span ng-show="myForm.name.$error.required">Name is required.</span>
        </span>
        </p>

        <p>Email:<br>
        <input type="email" class="form-control" name="email" required>
        <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid && !myForm.email.$pristine">
        <span ng-show="myForm.email.$error.required">Email is required.</span>
        <span ng-show="myForm.email.$error.email">Invalid email address.</span>
        </span>
        </p>
        
        <p>Password:<br>
        <input class="form-control" type="text" name="password" value='<?php echo generateRandomString(); ?>' required>
        <!-- <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid && !myForm.password.$pristine">
        <span ng-show="myForm.password.$error.required">Password is required.</span>
        </span> -->
        </p>

        <p>Designation:<br>
        <input class="form-control" type="text" name="designation" ng-model="designation" required>
        <span style="color:red" ng-show="myForm.designation.$dirty && myForm.designation.$invalid && !myForm.designation.$pristine">
        <span ng-show="myForm.designation.$error.required">Designation is required.</span>
        </span>
        </p>

        <p>Location:<br>
        <input class="form-control" type="text" name="location" ng-model="location" required>
        <span style="color:red" ng-show="myForm.location.$dirty && myForm.location.$invalid && !myForm.location.$pristine">
        <span ng-show="myForm.location.$error.required">Location is required.</span>
        </span>
        </p>
        <button type="submit" class="btn btn-default" ng-disabled="myForm.$invalid">Submit</button>
        </form>
     </div>
</div>

<!-- container div end -->
</div>