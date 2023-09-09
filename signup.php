<!DOCTYPE html>
	<html lang="en">
	<!--begin::Head-->
	<head><base href="../"/>
		<title>Admin-Panel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="Admin/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="Admin/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="Admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="Admin/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="Admin/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <script src="Admin/assets/js/myjsajax.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>


    <body class="bd-body" style="baxkground:#eee !important">
        <div class="container mx-auto px-20 w-50 vh-50 m-auto bg-light mt-20 align-item-center transparent" style="box-shadow: 1px 3px 10px rgba(30, 30, 30, 0.3);">
            <div class="row mt-5">
                <div class="col-6 align-item-center">
                    <h1 class="text-dark ">Welcome Sir!</h1>
                    <p class="text-muted mb-3 fs-5">Create management account here.</p>
                </div>
                <div class="col-6"><img src="Admin/assets/img/loginlogo.jpg" class="w-100" alt=""></div>
            </div>
            <div class="row p-3">
                <div class="col-12">

                    <form id="mgsignInForm">
                        <div id="signErrorAlert"></div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Phone Number</label>
                            <input class="form-control my-2" value="" type="text" name="signphone" id="mgsignInId" placeholder="Enter Your Phone Number">      
                            <div id="signPhErrorAlert"></div>
                        </div>
                        
                        <div class="fv-row mb-10">
                        <label class="form-label fs-6 fw-bolder text-dark">Password</label>
                            <input class="form-control my-2" type="password" name="signpassword" id="mgsignInPass" value="" placeholder="Enter Your Password">
                            <div id="signPsErrorAlert"></div>
                        </div> 
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">System Key</label>
                            <input class="form-control my-2" type="text" name="signsecretkey" id="mgsignInKey" value="" placeholder="Enter secret key of Bondipathshala">
                        </div> 
                        
                        <button type="submit" href="#" class="btn btn-block btn-primary btn-active-primary" style="width:100% !important">Create</button>       
                    </form>
                    <div class="fv-row mb-10 mt-5">
                        <a href="Admin/index.php" id="signInBtn" class="text-gray-800 flex-glow fs-4"><u>Already have an account? Sign in.</u></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

 
