<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>
<head>
    <style>
        body{
            background-color: yellow; font-size: 18px; font-family: Times New Roman;
        }
        ul{
            font-size: 18px;font-family: Times New Roman; color: black; margin-left: 10px;
       }
    </style>
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">
         
   <?php require 'message.php'; ?>

<FONT FACE="TAHOMA" SIZE="100%" COLOR="royalblue">
<marquee HEIGHT="50%" vheight="100%" bgcolor="yellow">
    <b>BLOOD BANK MANAGEMENT</b></MARQUEE></FONT>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 40%">
                <div class="card">
                    <img src="image/blood-types1.png" class="card-img-top">
                </div>
            </div>
         
            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A+</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to A+ and AB+.</li> 
							<li>You can receive blood from A+, A-, O+ and O-</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
					<ul>
                        <li>You can give blood to A-, A+, AB- and AB+.</li> 
						<li>You can receive blood from A- and O-.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to B+ and AB+.</li> 
							<li>You can receive blood from B+, B-, O+ and O-.</li>
						 </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to B-, B+, AB+ and AB-.</li>
							<li>You can receive blood from B- and O-.</li>
						</ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
					<ul>
                         <li>People with AB+ can donate only to AB+ blood type.</li> 
						 <li>AB+ are <b>universal red cell recipients</b> because they can receive red cells from all types.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to both AB- and AB+ blood types.</li>
							<li>Donors with AB+ and AB- blood are <b>universal plasma donors</b>.</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
					<ul>
                        <li>You can donate to A+, B+, AB+ and O+ Blood types.</li>
                        <li>You can receive blood from O+ and O-.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
					<ul>
                        <li>Donors with type O- blood are <b>universal red cell donors</b> whose donations can be given to people of all blood types</li>
                        
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">Contact Us</div>
                    <div class="card-body">
                        <i class="fa fa-envelope"> </i> <a > donatewithcare@lifelinebloodbank.com</a><br><br>
                        <i class="fa fa-mobile"> </i> <a > +91 445678923</a><br><br>
                    </div>
                </div>
            </div>
            </div>
            </div>
             
        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>
</html>