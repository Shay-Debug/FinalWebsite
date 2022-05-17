
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script> --}}
<style>

body {
    margin-top: 20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
    background-image: url(login/images/sitting.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}


.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
</head>

<body>

          </nav>
    
          
                <div class="card-body">
           

              @foreach($application as $applicantinfo)


              <div class="center">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">ApplicationId</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $applicantinfo->Id}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Program Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $applicantinfo->ProgrameName}}
                       </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Student Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $applicantinfo->StudentName}}
                       </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Programe Cost</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $applicantinfo->ProgrameCost}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Application Status</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $applicantinfo->ApplicantStatus}}
                      </div>
                    </div>
                  
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" href="program">Create New Application</a>
                      </center>
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
@endforeach


<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
 
  background-image: url('login/images/sitting.png');
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