@include('admin.head')
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  	@include('admin.sidebar')

  	<div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('admin.topbar')

        <div class="container-fluid">

        	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            	<h1 class="h3 mb-0 text-gray-800">Add User</h1>
          	</div>

          	<div class="row">
          		<div class="col-xl-4 col-md-6 mb-4">
          			<div class="card border-left-primary shadow h-100 py-2">
                		<div class="card-body">
                  			<div class="row no-gutters align-items-center">
                  				<form class="user" style="width: 100%" action="" method="">
					                <div class="form-group">
					                  <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
					                </div>
					                <div class="form-group">
					                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
					                </div>
					                <div class="form-group">
					                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
					                </div>
					                <div class="form-group">
					                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
					                </div>
					                <div class="form-group">
					                	Deactive : <input type="checkbox" name="deactive" value="1">
					                </div>
					               <div class="form-group">
					                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
					               </div>
					            </form>
                  			</div>
                  		</div>
                  	</div>
          		</div>
          	</div>

        </div>
      </div>

   @include('admin.footer')