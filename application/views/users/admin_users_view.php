    <div class="col-sm-10">
      <div class="panel panel-default">
            <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
            <?php if($this->session->flashdata('user_created') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('user_created').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_updated') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('user_updated').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_deleted') ): ?>
                <?php echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('user_deleted').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_registered') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('user_registered').'</b></div>' ?>
            <?php endif; ?>


      <div class="well">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>users/register">Add Admin </a><br><br>
        <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>          
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($admins as $admin){?>
             <tr>
                 <td><?php echo ucwords($admin->name); ?></td>
                 <td><?php echo ucwords($admin->username); ?></td>   
                 <td><?php echo str_repeat('*',strlen($admin->password) );?></td>
                 <td><?php echo $admin->created_at; ?></td>
                 <td>
                     <a href="<?php echo base_url('users/edit/'.$admin->id); ?>"><button class="btn btn-warning btn-xs pull-left"><i class="glyphicon glyphicon-pencil"></i></button></a>
                     <?=anchor("users/delete/".$admin->id,'<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>',array('onclick' => "return confirm('Do you want delete this record')"))?>
                 </td>
              </tr>
             <?php }?>
            </tbody>
        </table>
      </div>
      </div>

    </div>
<!-- container div end -->
  </div>

 