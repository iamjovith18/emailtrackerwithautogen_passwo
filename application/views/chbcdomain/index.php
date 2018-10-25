<div class="col-sm-10">
      <div class="panel panel-default">
            <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
            <?php if($this->session->flashdata('user_created') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>'.$this->session->flashdata('user_created').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('chbcdomain_user_updated') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('chbcdomain_user_updated').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('chbcdomain_user_deleted') ): ?>
                <?php echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('chbcdomain_user_deleted').'</b></div>' ?>
            <?php endif; ?>

      <div class="well">
      <a class="btn btn-primary" href="<?php echo base_url(); ?>chbcdomains/create">Add New CHBCDOMAIN User </a><br><br>
            <!-- Check email account if exists -->
        <?php if(validation_errors()):?>
                <div class="alert alert-danger"><strong><?php echo validation_errors(); ?></strong></div>
        <?php endif;?>
            <!-- Check email account if exists -->

        <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>          
                    <th>Name</th>
                    <th>Username Domain</th>
                    <th>Domain Password</th>
                    <th>Department</th>
                    <th>IP Address</th>
                    <th>Local Admin Password</th>
                    <th>Date Created</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
        <?php foreach($chbcdomains as $chbcdomain){?>
             <tr>
                 <td><?php echo strtoupper($chbcdomain->name); ?></td>
                 <td><?php echo $chbcdomain->username_domain;?></td>
                 <td><p style="font-family:courier; font-size: 12pt;"><?php echo $chbcdomain->password_domain;?></p></td>
                 <td><?php echo strtoupper($chbcdomain->department) ;?></td>
                 <td><?php echo strtoupper($chbcdomain->ip_address);?></td>
                 <td><?php echo  $chbcdomain->local_admin_password;?></td>
                 <td><?php echo  $chbcdomain->date_created;?></td>
                 <td>

                     <a href="<?php echo base_url('chbcdomains/edit/'.$chbcdomain->id); ?>"><button class="btn btn-warning btn-xs pull-left"><i class="glyphicon glyphicon-pencil"></i></button></a>
                     <?=anchor("chbcdomains/delete/".$chbcdomain->id,'<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>',array('onclick' => "return confirm('Do you want delete this record')"))?>
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

 