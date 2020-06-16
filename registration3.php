

<!DOCTYPE html>
<html lang="en">
<head>
<title> Student Registration</title>
<meta charset="utf-8">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 24px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #DB7093;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="signupform">
    
        <h1><img src="img/bmiit.png" height="80" width="80" /> Student Register Form</h1>
    
	<div class="container">
		
		<div class="agile_info">
			<div class="w3_info">
				<h2>Register Here</h2>
						<form action="#" method="post">
						
                                                <div class="left margin">
							<label>7th Semester SGPA</label>
							<div class="input-group">
								<span><i class="fa fa-percentage"></i></span>
								<input type="number" placeholder="7th Semester SGPA" required=""> 
							</div>
						</div>
						<div class="left">
							<label>8th Semester SGPA</label>
							<div class="input-group">
								<span><i class="fa fa-percentage"></i></span>
								<input type="number" placeholder="8th semester SGPA" required="">
							</div>
						</div>
                                                <div class="left margin">
							<label>placement City</label>
							<div class="input-group">
								<span><i class="fa fa-city"></i></span>
                                                                <select>
                                                                    <option>Surat</option>
                                                                    <option>Navsari</option>
                                                                    <option>Valsad</option>
                                                                </select>
							</div>
						</div>
                                                <div class="left" id='gayab'>
                                                    <i class="fa fa-question-circle" aria-hidden="true" style="color: #777;"></i>
                                                    <label>
                                                        Why..?
                                                    </label>
                                                    <textarea  id='textbox1'  cols="40"  style="border: none; border-bottom: 1px solid #ccc; height: 48px; font-size: 16px;"></textarea>
                                                </div>
                                                <div class="left margin">
                                                    <label>
                                                    Don't Need Placement..? 
                                                    </label>
                                                    <label class="switch">
                                                        <input type="checkbox" id="checkbox1">
                                                        <span class="slider round"></span>
                                                    </label>
							
						</div>      
						
						<div class="clear"></div>
                                                <div class="left margin">	       
                                                <a class="btn btn-danger btn-block" href="registration3.php" >Submit <i class="fas fa-long-arrow-alt-right"></i></a > 
                                                </div> 
						<div class="left">	       
                                                <a class="btn btn-danger btn-block" href="registration2.php" >Prev <i class="fas fa-long-arrow-alt-left"></i></a > 
                                                </div>      
					</form>
			</div>
			<div class="w3l_form">
				<div class="left_grid_info">
					<h3>Already Registered?</h3>
					<p> Nam eleifend velit eget dolor vestibulum ornare. Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui. Nulla tellus nisl, semper id justo vel, rutrum finibus risus. Cras vel auctor odio.</p>
                                        <a href="index.php" class="btn">Login <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
			<div class="clear"></div>
			</div>
			
		</div>
		<div class="footer">

 <p>&copy; 2018 Quick Register form. All Rights Reserved | Design by <a href="#" target="blank">Vision</a></p>
 </div>
	</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
//set initial state.
$('#gayab').hide();

$('#checkbox1').change(function() {
if($(this).is(":checked")) {
    var returnVal = confirm("Are you sure?");
    $("#gayab").toggle(500);
}
else{ $("#gayab").toggle(100); }
    
});
});
</script>
	</body>
</html>