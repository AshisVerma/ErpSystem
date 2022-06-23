<?php  $this->load->view("admin/layout/header") ?>
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add STAFF
            </h3>
          <a href="<?php echo site_url('STAFF/list') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">STAFF LIST</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >ADD STAFF</h5>

          			</div>
          			<div class="card-body">
          				 <form action="<?php echo site_url('/staff/create')?>" method="post" enctype="multipart/form-data">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="letter-spacing: 2px;font-weight: 300;font-family:  sans-serif;"><b>BASIC INFORMATION</b></button>
  </li>
  
  
</ul>
<div class="tab-content" id="home">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div class="row">
     <div class="col">
        <div class="form-group">
      <label>ROLE</label>
     <div class="input-group">
        <select class="form-control shadow-none" name="role">
        <option>Select Role</option>
       <?php foreach($role as $list){?>
      <option><?php echo $list['name']?></option>


       <?php }?>
      </select>
      <div class="input-group-append">
        <button class="btn btn-success" type="button" data-target="#rolemodal" data-toggle="modal"><i class="fa fa-plus"></i></button>
      </div>
     </div>
    </div>
     </div>
     <div class="col">
        <div class="form-group">
      <label>NAME</label>
      <input type="text" name="name" class="form-control shadow-none" placeholder="Name">
    </div>
     </div>
     <div class="col">
        <div class="form-group">
      <label>EMAIL</label>
      <input type="email" name="email" class="form-control shadow-none" placeholder="Email">
    </div>
     </div>
   </div>
   <div class="row">
     <div class="col">
       <div class="form-group">
         <label>MOBILE NO</label>
         <input type="number" name="phone" class="form-control shadow-none" placeholder="Mobile No">
       </div>
     </div>
     <div class="col">
       <div class="form-group">
         <label>PASSWORD (MINIMUM 8 LETTER)</label>
         <input type="text" name="password" class="form-control shadow-none" placeholder="Password">
       </div>
     </div>
     <div class="col">
       <div class="form-group">
         <label>DEPARTMENT</label>
       <div class="input-group">
          <select class="form-control shadow-none" name="department">
            <option>Select Department</option>
          <?php foreach($department as $department_list){?>
          <option><?php echo $department_list['name']  ?></option>


        <?php }?>
        </select>
        <div class="input-group-append">
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#departmentmodal"><i class="fa fa-plus"></i></button>
      </div>
       </div>
       </div>
     </div>
   </div>
    <div class="row">
     
   
     <div class="col">
       <div class="form-group">
         <label>DATE OF BIRTH</label>
        <input type="date" name="dob" class="form-control shadow-none">
       </div>
     </div>
   </div>
    <div class="row">
     <div class="col">
       <div class="form-group">
         <label>CURRENT ADDRESS</label>
         <input type="text" name="current-address" class="form-control shadow-none" placeholder="Current Address">
       </div>
     </div>
     <div class="col">
       <div class="form-group">
         <label>PERMANENT ADDRESS</label>
         <input type="text" name="permanent-adddress" class="form-control shadow-none" placeholder="Permanent Address">
       </div>
     </div>
     <div class="col">
       <div class="form-group">
         <label>OPENING BALANCE</label>
        <input type="number" name="open-balance" class="form-control shadow-none" placeholder="Opening Balance">
       </div>
     </div>
   </div>
    <div class="row">
     <div class="col">
       <div class="form-group">
         <label>PROFILE PICTURE</label>
         <input type="file" name="image" class="form-control shadow-none" placeholder="Mobile No">
       </div>
     </div>
     <div class="col">
       <div class="form-group">
         <label>APPLICATION FOR LEAVE </label>
         <input type="date" name="leave" class="form-control shadow-none" placeholder="Password">
       </div>
     </div>
     <div class="col">
       <div class="form-group">
         <label>SIGNATURE</label>
        <input type="file" name="signature" class="form-control shadow-none">
       </div>
     </div>
   </div>

  </div>
  
 
</div>  
<br> 
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="letter-spacing: 2px;font-weight: 300;font-family:  sans-serif;"><b>BANK INFORMATION</b></button>
  </li>
  
  
</ul>
<div class="tab-content" id="home">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div class="row">
     <div class="col">
        <div class="form-group">
      <label>BANK NAME</label>
      <input type="text" name="bank-name" class="form-control shadow-none" placeholder="Bank Name">
    </div>
     </div>
     <div class="col">
        <div class="form-group">
      <label>BRANCH NAME</label>
      <input type="text" name="branch-name" class="form-control shadow-none" placeholder="Branch Name">
    </div>
     </div>
    
   </div>
   <div class="row">
      <div class="col">
        <div class="form-group">
      <label>ACCOUNT NAME</label>
      <input type="text" name="account-name" class="form-control shadow-none" placeholder="Account Name">
    </div>
     </div>
      <div class="col">
        <div class="form-group">
      <label>ACCOUNT NUMBER</label>
      <input type="number" name="account-number" class="form-control shadow-none" placeholder="Account Number">
    </div>
     </div>
   </div>

  </div>
  
 
</div>   
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="letter-spacing: 2px;font-weight: 300;font-family:  sans-serif;"><b>PAYROLL INFORMATION</b></button>
  </li>
  
  
</ul>
<div class="tab-content" id="home">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div class="row">
     <div class="col">
        <div class="form-group">
      <label>DATE OF JOINING</label>
      <input type="date" name="date-of-join" class="form-control shadow-none">
    </div>
     </div>
     <div class="col">
        <div class="form-group">
      <label>BASIC SALARY</label>
      <input type="text" name="salary" class="form-control shadow-none" placeholder="Basic Salary">
    </div>
     </div>
    
   </div>
   <div class="row">
     <div class="col">
        <div class="form-group">
      <label>JOB TYPE</label>
    <select class="form-control shadow-none" name="emp-type">
      <option>Select Employee Type</option>
      <option>Provision</option>
      <option>Contract</option>
      <option>Permanent</option>
      <option>Part Time</option>
    </select>
    </div>
     </div>
     <div class="col">
        <div class="form-group">
      <label>PROVISION TIME (IN MONTH)</label>
      <input type="number" name="provision-month" class="form-control shadow-none" placeholder="0">
    </div>
     </div>
    
   </div>

  </div>
  
 
</div>   
<br>
<div class="form-group">
  <label>Notes About Staff</label>
  <textarea name="desc"></textarea>
</div>

<button class="btn " style="letter-spacing: 2px;font-weight: 300;font-family:  sans-serif;background: green;color: white;border-radius: 2px !important;">ADD STAFF</button>

                   </form>
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
<!-- ROLE MODAL ----->
<div class="modal fade" tabindex="-1" role="dialog" id="rolemodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header py-3 bg-light">
        <h5 class="modal-title">Add Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0">
       <form class="" action="<?php echo base_url(); ?>staff/role" method="post">
         <div class="form-group">
         <label>Role Name</label>
         <input type="text" name="name" class="form-control shadow-none" placeholder="Role Name" required="">
       </div>
       <div class="form-group">
         <label>Status</label>
         <select class="form-control shadow-none" required="" name="status">
           <option>Active</option>
           <option>Deactive</option>
         </select>
       </div>

       <button class="btn btn-primary mb-0">Add Role</button>
       </form>
      </div>
     
    </div>
  </div>
</div>

<!---END ROLE MODAL ------->

<!---warehouse modal   ---->
<div class="modal fade" tabindex="-1" role="dialog" id="departmentmodal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header py-3 bg-light">
        <h5 class="modal-title">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0">
       <form class="" action="<?php echo base_url(); ?>staff/department" method="post">
         <div class="form-group">
         <label>Department Name</label>
         <input type="text" name="name" class="form-control shadow-none" placeholder="Department Name" required="">
       </div>
       <div class="form-group">
         <label>Status</label>
         <select class="form-control shadow-none" required="" name="status">
           <option>Active</option>
           <option>Deactive</option>
         </select>
       </div>

       <div class="form-group">
         <label>Details</label>
         <textarea name="notes" required=""></textarea>
       </div>

       <button class="btn btn-primary mb-0">Add Role</button>
       </form>
      </div>
     
    </div>
  </div>
</div>
<!--- warehouse modal --------->

 <script>
                        CKEDITOR.replace( 'desc' );
                         CKEDITOR.replace( 'notes' );
                </script>

<?php  $this->load->view("admin/layout/footer") ?>
<style type="text/css">
  /*#myTab li button{
    border: none !important;

  }*/
  #myTab li button.nav-link.active{
    background: darkblue;
    color: white;
  }
</style>


