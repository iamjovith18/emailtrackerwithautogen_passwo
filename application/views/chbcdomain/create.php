
<div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
      <!-- Check account if exists -->
      <?php if(validation_errors()):?>
            <div class="alert alert-danger"><strong><?php echo validation_errors(); ?></strong></div>
      <?php endif;?>
      <!-- Check account if exists -->
      
      <div class="well">
        <?php echo form_open('chbcdomains/create','ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate');?>
        <p>Name:<br>
        <input class="form-control" type="text" name="name" ng-model="name" required>
        <span style="color:red" ng-show="myForm.name.$dirty && myForm.name.$invalid && !myForm.name.$pristine">
        <span ng-show="myForm.name.$error.required">Name is required.</span>
        </span>
        </p>

        <p>Domain User:<br>
        <input type="text" class="form-control" name="user_domain" ng-model="user_domain"  required>
        <span style="color:red" ng-show="myForm.user_domain.$dirty && myForm.user_domain.$invalid && !myForm.user_domain.$pristine">
        <span ng-show="myForm.user_domain.$error.required">User is required.</span>
        </span>
        </p>
        
        <p>Domain Password:<br>
        <input class="form-control" type="text" name="password_domain" ng-model="password_domain"  required>
        <span style="color:red" ng-show="myForm.password_domain.$dirty && myForm.password_domain.$invalid && !myForm.password_domain.$pristine">
        <span ng-show="myForm.password_domain.$error.required">Password is required.</span>
        </span>
        </p>

        <p>Department:<br>
        <input class="form-control" type="text" name="department" ng-model="department" required>
        <span style="color:red" ng-show="myForm.department.$dirty && myForm.department.$invalid && !myForm.department.$pristine">
        <span ng-show="myForm.department.$error.required">Department is required.</span>
        </span>
        </p>

        <p>I.P Address:<br>
        <input class="form-control" type="text" name="ip_address" ng-model="location" required>
        <span style="color:red" ng-show="myForm.ip_address.$dirty && myForm.ip_address.$invalid && !myForm.ip_address.$pristine">
        <span ng-show="myForm.ip_address.$error.required">I.P Address is required.</span>
        </span>
        </p>
        <p>Local Admin Password:<br>
        <input class="form-control" type="text" name="local_password" ng-model="local_password" required>
        <span style="color:red" ng-show="myForm.local_password.$dirty && myForm.local_password.$invalid && !myForm.local_password$pristine">
        <span ng-show="myForm.local_password.$error.required">Local Password is required.</span>
        </span>
        </p>
        <button type="submit" class="btn btn-default" ng-disabled="myForm.$invalid">Submit</button>
        </form>
     </div>
</div>

<!-- container div end -->
</div>