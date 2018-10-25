    <div class="col-sm-10">
      <div class="panel panel-default">
            <div class="panel-body"><h4 class="text-center"><?php echo $title; ?></h4></div>
      </div>
            <?php if($this->session->flashdata('email_created') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>'.$this->session->flashdata('email_created').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('email_updated') ): ?>
                <?php echo '<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('email_updated').'</b></div>' ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('email_deleted') ): ?>
                <?php echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('email_deleted').'</b></div>' ?>
            <?php endif; ?>

      <div class="well">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>Emails/create">Add New Email </a>
        <a class="btn btn-success" target="_blank" href="https://www.networksolutions.com/manage-it/index.jsp">Network Solutions</a><br><br>
        <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>          
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Designation</th>
                    <th>Location</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($emails as $email){?>
             <tr>
                 <td><?php echo strtoupper($email->name); ?></td>
                 <td><a target="_blank" href="https://webmail1.networksolutionsemail.com/interfaces/sso/login.php?redirected=yes&user_domain=mail.cebuoversea.com"><?php echo $email->emailAddress;?></a></td>
                 <td><p style="font-family:courier; font-size: 12pt;"><?php echo $email->password;?></p></td>
                 <td><?php echo strtoupper($email->designation) ;?></td>
                 <td><?php echo strtoupper($email->location);?></td>
                 <td><?php echo  $email->created_at;?></td>
                 <td>

                     <a href="<?php echo base_url('emails/edit/'.$email->id); ?>"><button class="btn btn-warning btn-xs pull-left"><i class="glyphicon glyphicon-pencil"></i></button></a>
                     <?=anchor("emails/delete/".$email->id,'<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>',array('onclick' => "return confirm('Do you want delete this record')"))?>
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

 