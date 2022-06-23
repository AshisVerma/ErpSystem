<?php  $this->load->view("admin/layout/header") ?>

  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<?php  $this->load->view("admin/layout/sidebar") ?>
<style type="text/css">
 
.modal-confirm {    
  color: #636363;
  width: 400px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-size: 14px;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -10px;
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -2px;
}
.modal-confirm .modal-body {
  color: #999;
}
.modal-confirm .modal-footer {
  border: none;
  text-align: center;   
  border-radius: 5px;
  font-size: 13px;
  padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
  color: #999;
}   
.modal-confirm .icon-box {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  z-index: 9;
  text-align: center;
  border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
  color: #f15e5e;
  font-size: 46px;
  display: inline-block;
  margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
  color: #fff;
  border-radius: 4px;
  background: #60c7c1;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  min-width: 120px;
  border: none;
  min-height: 40px;
  border-radius: 3px;
  margin: 0 5px;
}
.modal-confirm .btn-secondary {
  background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
  background: #a8a8a8;
}
.modal-confirm .btn-danger {
  background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
  background: #ee3535;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>
<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              STAFF LIST
            </h3>
          <a href="<?php echo site_url('STAFF') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">STAFF ADD</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >STAFF LIST</h5>

          			</div>
          			<div class="card-body">
          			<table class="table text-center">
               <tr>
                 <th>Sr.No</th>
                 <th>Role</th>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Photo</th>
                 <th>Action</th>
               </tr>  

                  <?php if(!empty($data )) {?>

                     <?php foreach($data as $key=> $list ) {?> 
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $list['role']?></td>
                     
                          <td><?php echo $list['name']?></td>
                           <td><?php echo $list['phone']?></td>
                            <td><img src="<?php echo base_url('./upload/staff/image/'.$list['image'])?>"></td>
                             
                          
                      <td>
                        <div class="d-flex justify-content-center align-items-center">
                          <a href="<?php echo site_url('staff/edit/').$list['id']?>"><button class="btn btn-warning" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>
                            <a href="<?php echo site_url('staff/delete/').$list['id']?>" data-toggle="modal" data-target="#myModal"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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


               
<!---add STAFF modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">ADD STAFF</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
           <label>STAFF NAME</label>
           <input type="text" name="name" placeholder="STAFF Name" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>STAFF CODE</label>
           <input type="text" name="code" placeholder="STAFF Code" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>DESCRITPION</label>
           <input type="text" name="desc" placeholder="Put some description" class="form-control" required="">
         </div>
          <div class="form-group">
           <label>STATUS</label>
          <select class="form-control">
            <option value="1">Active</option>
            <option value="o">Deactive</option>
            <
          </select>
         </div>

         <button class="btn btn-primary mb-0">ADD STAFF</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end add STAFF modal ----------->




 <!-- Modal HTML -->
<div id="myModal" class="modal">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>            
        <h4 class="modal-title w-100">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete these records? This process cannot be undone.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div> 

<?php  $this->load->view("admin/layout/footer") ;?>
<style type="text/css">
  /*#myTab li button{
    border: none !important;

  }*/
  #myTab li button.nav-link.active{
    background: darkblue;
    color: white;
  }
</style>


