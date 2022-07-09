<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../vendorsss/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../vendorsss/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../vendorsss/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendorsss/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendorsss/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendorsss/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
<?php require('includes/header.php') ?>
<div class="mobile-menu-overlay"></div>

<div class="container">
    <div class="main-container">
        <div class="pd-ltr-10 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="h4">Home Section One Website</h4>
                    </div>
                    <div class="container text-secondary">
                        <form action="create_user.php" method="post">
                            <legend>Section Home</legend>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Title Section One</label>
                                        <input type="text" name="sec1_title" id="sec1_title" class="form-control">
                                    </div>
                                </div>	
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Link Href One</label>
                                        <input type="text" name="sec1_href" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Section One Paragraph</label>
                                        <textarea name="sec1_paragraph" class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Your Paragraph"></textarea>										
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label>Link Href Two</label>
                                        <input type="text" name="sec1_href" class="form-control" >                                    
                                </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-block btn-outline-success" name="login" value="Add">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- success Popup html Start -->
                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h3 class="mb-20">Form Submitted!</h3>
                                <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- success Popup html End -->
            </div>
        </div>
    </div>
</div>

	<!-- js -->
	<script src="../vendorsss/scripts/core.js"></script>
	<script src="../vendorsss/scripts/script.min.js"></script>
	<script src="../vendorsss/scripts/process.js"></script>
	<script src="../vendorsss/scripts/layout-settings.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../vendorsss/scripts/dashboard.js"></script>

</body>
</html>