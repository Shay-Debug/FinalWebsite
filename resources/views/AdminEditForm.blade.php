
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Update Student Info</title>
   <center> <H2 style=color:white;>Vision Through Faith Academy</H2></center>
   <center><h4 style=color:white>Update User profile</h4></center>


            <form action="/AdminEditForm" method="post">
                @csrf
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
                            
								<div class="col-sm-3">
									<h6 class="mb-0">Student Id</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input  type="text" name="id" class="form-control" value="{{$data->id}}">
								</div>
							</div>

                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Username</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text"  name="username" class="form-control"  value="{{$data->Username}}">
								</div>
							</div>
                            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Firstname</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text"  name="firstname" class="form-control"  value="{{$data->Firstname}}">
								</div>
							</div>

                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Lastname</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text"  name="lastname" class="form-control"  value="{{$data->Lastname}}">
								</div>
							</div>
                            
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text"  name="address" class="form-control"  value="{{$data->Address}}">
								</div>
							</div>



                            <div class="row mb-">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text"  name="email" class="form-control"  value="{{$data->Email}}">
								</div>
							</div>

				
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="phone"   class="form-control"  value="{{$data->Phone}}">
								</div>
							</div>
						
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit"   class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
						</div>
					</div>
					
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
    

    <style type="text/css">
        body{
            margin-top:20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;    
         
          background-image: url('Login/images/sitting.png');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        
        }
        .main-body {
            padding: 15px;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }
        
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }
        
        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }
        
        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }
        
        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }
        
        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }
        
        /* Changes */ 
        
        .breadcrumb {
           
            background-color: #4c1022;
        }
        
        body {
         
            background-color: #4c1022;
        }
        
        a {
            color: whitesmoke;
        }
        
        .breadcrumb-item.active {
            color: white;
        }
        
        .btn-primary {
            color: #fff;
            background-color: #4c1022;
            border-color: black;
        }
        
        </style>
        
        <script type="text/javascript">
        
        </script>
        </body>
        </html>