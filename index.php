<!DOCTYPE html>
<html lang="en">
<head>
	<title>TES CAL BMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/weight.jpg');">
		<form class="contact3-form validate-form" action=index.php method=post>
		<div class="container-contact3">
			<div class="wrap-contact3">
				<span class="contact3-form-title">
						Calculator BMI
					</span>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="jk" value="laki" checked="checked">
							<label class="label-radio3" for="radio1">
								Laki-laki
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="jk" value="perempuan">
							<label class="label-radio3" for="radio2">
								Perempuan
							</label>
						</div>
					</div>

					
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="name" placeholder="Your Name" value="">
						<span class="focus-input3"></span>
					</div>

					<!-- <div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="Your Email" value="">
						<span class="focus-input3"></span>
					</div> -->

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="berat" placeholder="Berat Anda (kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" >
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="tinggi" placeholder="Tinggi Anda (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
						<span class="focus-input3"></span>
					</div>

					<?php
										if(!empty($_POST['hitung'])) { 
									    $berat = $_POST['berat'];
									    $tinggi = $_POST['tinggi'];
									    function bmi($berat,$tinggi) {
									        $bmi = $berat/($tinggi*$tinggi);
									        return $bmi;
									    }   
									    $bmi = bmi($berat,$tinggi);
									    if ($bmi <= 18.5) {
									        $output = "UNDERWEIGHT";
									        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
									        $output = "NORMAL WEIGHT";
									        } else if ($bmi > 24.9 AND $bmi<=29.9) {
									        $output = "OVERWEIGHT";
									        } else if ($bmi > 30.0) {
									        $output = "OBESE";
									    }
									    // echo "Your BMI value is  " . $bmi . "<br>  and you are : ";
									    // echo "$output";
									}
									?>


					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="yourbmi" placeholder="Your BMI is"  value="<?php if (!empty($bmi)){echo $bmi;} ?>" disable>
						<span class="focus-input3">

					</span>
					</div>


					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="youare" placeholder="Your are "  value="<?php if (!empty($output)){echo $output;} ?>" disable>
						<span class="focus-input3">
						</span>
					</div>

				

					<!-- <div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="service">
								<option>Needed Services</option>
								<option>eCommerce Bussiness</option>
								<option>UI/UX Design</option>
								<option>Online Services</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="budget">
								<option>Budget</option>
								<option>1500 $</option>
								<option>2000 $</option>
								<option>3000 $</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>
 -->
<!-- 					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="hasil" placeholder="hasil" disabled></textarea>
						<span class="focus-input3">
							
					</span>
					</div> -->
					

					<div class="container-contact3-form-btn">
						<table>
							<th>

							<button class="contact3-form-btn" type="submit" name="hitung" value="hitung">
								Hitung
							</button>
							</th>


							<th><button class="contact3-form-btn" type="submit" name="reset" value="reset">
							Reset
							</button>
							</th>
						</table>


					</div>
				
			</div>
		</div>

	</form>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
