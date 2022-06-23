<?php  $this->load->view("admin/layout/header") ?>
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              EVENT LIST
            </h3>
            <button class="btn btn-info" data-toggle="modal" data-target="#eventmodal">ADD EVENT</button>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >EVENT LIST</h5>

          			</div>
          			<div class="card-body">
          				 <table class="table text-center">
                 <tr>
                   <th>Sr.No</th>
                   <th>TITLE</th>
                  
                   <th>FOR WHOM</th>
                   <th>START DATE</th>
                   <th>END DATE</th>
                   <th>PICTURE</th>
                   <th>ACTION</th>
                 </tr>   
                    <?php if(!empty($data )) {?>

                     <?php foreach($data as $key=> $list ) {?> 
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $list['name']?></td>
                     
                          <td><?php echo $list['details']?></td>
                          <td><?php if($list['status']==1){?>
                            <a href="<?php echo site_url('EVENT/status/').$list['id']?>"><button class="btn btn-success">Active</button></a>

                          <?php } else{ ?>
                          <a href="<?php echo site_url('EVENT/status/').$list['id']?>"><button class="btn btn-danger">Deactive</button></a>

                        <?php }?>
                      </td>
                      <td>
                        <div class="d-flex justify-content-center align-items-center">
                          <a href="<?php echo site_url('EVENT/edit/').$list['id']?>"><button class="btn btn-warning" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>
                            <a href="<?php echo site_url('EVENT/delete/').$list['id']?>" onclick="return confirm('Are you sure')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        </div>
                      </td>
                  </tr>


                 <?php }?>


                    <?php } ?>
                   </table>

                  
          			</div>
          		</div>
          	</div>
          </div>

        </div>
<!---add EVENTs modal ------->
<div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-light py-3">
        <h5 class="modal-title text-dark" id="exampleModalLabel ">ADD EVENT</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url()?>/event/create" method="post" enctype="multipart/form-data">
         <div class="form-group">
           <label>TITLE</label>
           <input type="text" name="name" placeholder="TITLE" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>FOR WHOM</label>
          <select class="form-control shadow-none" name="for-whom">
            <option>Select For Whom</option>
            <?php foreach($role as $role_list) {?>
          <option><?php echo $role_list['name']; ?></option>

            <?php  }?>
          </select>
         </div>
         <div class="form-group">
           <label>Start Date</label>
           <input type="date" name="start_date" class="form-control shadow-none" required="">
         </div>
         <div class="form-group">
           <label>End Date</label>
           <input type="date" name="end_date" class="form-control shadow-none" required="">
         </div>
         
         <div class="form-group">
           <label>Picture</label>
           <input type="file" name="picture" class="form-control shadow-none">
         </div>
          <div class="form-group">
           <label>STATUS</label>
          <select class="form-control" required="" name="status">
            <option value="1">Active</option>
            <option value="0">Deactive</option>
            <
          </select>
         </div>

         <div class="form-group">
           <label>DESCRITPION</label>
          <textarea name="desc"></textarea>
         </div>

         <button class="btn btn-primary mb-0">ADD EVENT</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div>
<!--end add EVENTs modal ----------->
<script>
                        CKEDITOR.replace( 'desc' );
                       
                </script>
<?php  $this->load->view("admin/layout/footer") ?>