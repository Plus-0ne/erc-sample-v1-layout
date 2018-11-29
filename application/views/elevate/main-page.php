<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Elevate Review
		</title>
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/Favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/main-style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/main-style-mobile.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/carousel-css.css">

	<style>
		body
		{

		}
		.img-contact
		{
			
		}
		#map 
		{
			background-image: url('<?=base_url()?>assets/img/ElevateReviewMap.png');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
	        height: 300px;
	        width: 70%;
       }
		#myCanvas
		{
			
			background-color: black;
		}
	  .carousel-inner > .item > img,
	  .carousel-inner > .item > a > img {
	      width: 100%;

	      margin: auto;
	  }
	  .carousel
	  {
	  	width: 88%;
	  	margin-right: 6%;
	  	margin-left: 6%;
	  }
	  .image h3 
	  {
	    text-shadow: 0 0 3px black;
	  }
	  </style>
</head>
<body id="home">
<div class="col-12 header">
	<a href="<?=base_url()?>"><img class="col-3" src="<?=base_url()?>assets/img/Logo.png"></a>
	<div class="col-7 nav-container">
		<ul>
			<a href="#home"><li> Home </li></a>
			<a href="#updates"><li> Updates </li></a>
			<a href="#aboutus"><li> About </li></a>
			<a href="#programs"><li> Programs </li></a>
			<a href="#contactus"><li> Contact </li></a>
			
		</ul>
	</div>
	<div class="col-2 er-links">
		<a href="https://www.facebook.com/elevate.review.5"><img src="<?=base_url()?>assets/img/fb.png" width="35"></a>
		<img src="<?=base_url()?>assets/img/ig.png" width="40">
		<img src="<?=base_url()?>assets/img/tt.png" width="35">
	</div>
</div>
<div class="row">
	
	<div class="col-12 slideshow">
	
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	    
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">


	      <div class="item active">
	        <img src="<?=base_url()?>assets/img/image1.jpg" alt="Image1" width="460" height="345">
	      </div>

	      <div class="item">
	        <img src="<?=base_url()?>assets/img/image2.jpg" alt="Image2" width="460" height="345">
	      </div>

	      <div class="item">
	        <img src="<?=base_url()?>assets/img/ERC-building.jpg" alt="Image3" width="460" height="345">
	      </div>
	      <div class="item">
	        <img src="<?=base_url()?>assets/img/stock-holder.jpg" alt="Image4" width="460" height="345">
	      </div>
	   
	      

	      
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  
	</div>

	
	</div>

	<div class="line-spacing col-12"></div>
	<div id="updates" class="col-12 updates">
		<div class="image" style="position: relative;">
			<h3 class="aboutus-back"> <strong>N e w &nbsp U p d a t e s &nbsp a n d &nbsp A n n o u n c e m e n t s</strong></h3>
			<h3 class="about-us-text"> <strong>N e w &nbsp U p d a t e s &nbsp a n d &nbsp A n n o u n c e m e n t s</strong> </h3>
			<img src="<?=base_url()?>assets/img/shapte-circle.png" width="100">
		</div>
	</div>
	
	<div class="col-12 nua-container">
		<div class="col-4 left-details">
		<iframe class="iframe-video-" height="315" src="https://www.youtube.com/embed/x1E2wLW9pn8" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="col-4 center-details">
		<h2> Offices </h2>
		<div class="lining-"></div>
		<h4> Marikina Office </h4>
		<h4>(Unit 8&9 2nd Flr. AEROSTAR11 Bldg. #2 Beta Corner Ditchoy St., Midtown Subd.)</h4>
		<div class="lining-"></div>
		<h4> Upcoming Branches </h4>
		<ul>
			<li>Ortigas</li>
			<li>Bulucan</li>
			<li>Pampanga</li>
			<li>Nueva Ecija</li>
			<li>Baguio</li>
			<li>Cebu</li>
			<li>Davao</li>
		</ul>
	</div>
	<div class="col-4 right-details">
		<h2> Activities </h2>
		<div class="lining-"></div>

		<div class="activities-date-time">
			April 1, 2017
			9:00 A.M
		</div>
		<div class="activities-details">
			<p>Blessing Ceremony and Ribbon Cutting</p>
		</div>
		<div class="lining-"></div>

		<div class="activities-date-time">
			April 3, 2017
			
		</div>
		<div class="activities-details">
			<p>IELTS Review Class Opening (Free Seminar)</p>
		</div>
		<div class="lining-"></div>

		<div class="activities-date-time">
			April 4, 2017
			
		</div>
		<div class="activities-details">
			<p>TOEFL Review Class Opening (Free Seminar)</p>
		</div>
		<div class="lining-"></div>

		<div class="activities-date-time">
			April 10, 2017
			
		</div>
		<div class="activities-details">
			<p>IELTS (Free Seminar)</p>
		</div>
		<div class="lining-"></div>

		<div id="hiddenAct" class="Show-all-activities" style="display: none;">
			<div class="activities-date-time">
				April 17, 2017
				
			</div>
			<div class="activities-details">
				<p>LET Review Class Opening (Free Seminar)</p>
			</div>
			<div class="lining-"></div>

			<div class="activities-date-time">
				April 22, 2017
				
			</div>
			<div class="activities-details">
				<p>Electronics Technology (Free Seminar)</p>
			</div>
			<div class="lining-"></div>

			<div class="activities-date-time">
				April 24, 2017
				
			</div>
			<div class="activities-details">
				<p>TOEFL (Free Seminar)</p>
			</div>
			<div class="lining-"></div>

			<div class="activities-date-time">
				April 29, 2017
				
			</div>
			<div class="activities-details">
				<p>LET Review (Free Seminar)</p>
			</div>
			<div class="lining-"></div>
		</div>

		<a onclick="javascript:check_show()" id="showall" class="button-activities">
			Show all
		</a>
		
		
	</div>
	</div>
	


	<div class="line-spacing col-12"></div>
	<div id="aboutus" class="col-12 aboutus">
		<div class="image" style="position: relative;">
			<h3 class="aboutus-back"> <strong> A b o u t &nbsp u s </strong></h3>
			<h3 class="about-us-text"> <strong> A b o u t &nbsp u s</strong> </h3>
			<img src="<?=base_url()?>assets/img/shapte-circle.png" width="100">
		</div>
		
		<div class="col-12 m-and-v aboutus-m">
			<p class="about-us-paragraph">
				Elevate Review Center Started April 1, 2017 from the group of proficient and highly calibrated educators headed by CEO/ President Henry De Jesus Hinate Specialized in Teaching, Management and Supervision.
			</p>
			<p class="about-us-paragraph">
				Elevate Review Center is the most convenient and affordable review center in the country equipped with advance technology and high quality Training programs. The company was founded to help Filipinos to elevate efficient performance in English and their field of specialization. The founder believe that through quality education, we can eradicate the poverty and help our country to become progressive and well develop. 
			</p>
			<p class="about-us-paragraph">
				Elevate Review Center is a local business with global impact that gears towards quality of life with stability, formidable management, innovative programs and lifelong partners in helping people.
			</p>
			<p class="about-us-paragraph">
				The company also has its helping arm in which percentage of the company earnings will goes to the programs that will help the less fortunate people. The system entitles ELEVATE HELPS for Filipino Citizen started the same day of foundation of Elevate Review Center.
			</p>
		</div>
		<div class="col-6 mission-design">
			<div class="mission-heading">
					Mission
			</div>
			<div class="mission-text">
				To develop proficiency in different expertise that will equip learners to achieve better output for national and international competency.
			</div>
		</div>
		<div class="col-6 vision-design">
			<div class="vision-heading">
				Vision
			</div>
			<div class="vision-text">
				To be the first internationally renowned Filipino-owned review provider that will elevate expertise towards global competitiveness.
			</div>
		</div>
	</div>

	<div class="line-spacing col-12"></div>
	<div id="programs" class="col-12 programs">
		<div class="image" style="position: relative;">
			<h3 class="aboutus-back"> <strong> P r o g r a m s </strong></h3>
			<h3 class="about-us-text"> <strong> P r o g r a m s </strong> </h3>
			<img src="<?=base_url()?>assets/img/shapte-circle.png" width="100">
		</div>
	</div>
	<div class="col-12 programs-container" style="">
		<div class="col-4 ielts-container">
		<div class="ielts-content">
			<img class="ielts-image" src="<?=base_url()?>assets/img/IELTS Course Offering.jpg">
			<br   />
			
			<div class="ielts-content-text">
				<h3> &nbsp&nbsp Intensive Review Program</h3>
				<ul>
					<li> One (1) week live lecture </li>
					<li> One (1) week Practice Examination w/ One on One Coaching</li>
				</ul>
				<h3> &nbsp&nbsp Unlimited Review Program</h3>
				<ul>
					<li> One (1) week live lecture (Unlimited sit-ins)</li>
					<li> Unlimited Practice Examination w/ One on One Coaching</li>
					<li> Free Grammar Class </li>
					<li> Free Speaking Enrichment Lesson </li>
				</ul>
			</div>
			<div class="ielts-content-text">
				<h1 style="font-family: Calibri"> THE ELEVATE ADVANTAGE </h1>
				<p> - High passing percentage </p>
				<p> - Maximum of ten (20) students per class </p>
				<p> - In-depth review to all the four sections of IELTS:</p>
				<p> &nbsp&nbsp Reading, Listening, Speaking, Writing </p>
				<p> - Individualized Coaching and Assessment </p>
				<p> - Competent and efficient instructors who passed and obtained high scores in IELTS examination</p>
				<p> - Multifaceted learning modules</p>
				<p> - Student-friendly facilities</p>
				<p> &nbsp&nbsp (Comfortable lecture area)</p>
				<p> &nbsp&nbsp (Convenient student lounge)</p>
				<p> &nbsp&nbsp (Adequate Library Materials)</p>
				<p> &nbsp&nbsp (Perfect location for Rizaleno's and neighboring towns)</p>
				<p> &nbsp </p>
			</div>
		</div>
	</div>
	<div class="col-4 toefl-container">
		<div class="toefl-content">
			<img class="toefl-image" src="<?=base_url()?>assets/img/TOEFL Course Offering.jpg">
			<br   />
			
			<div class="toefl-content-text">
				<h3> &nbsp&nbsp Intensive Review Program</h3>
				<ul>
					<li> Two (2) weeks Live Lecture </li>
					<li> Free one (1) Week Coaching</li>
				</ul>
				<h3> &nbsp&nbsp Unlimited Review Program</h3>
				<ul>
					<li> One (1) week Live Lecture (Unlimited Sit-ins)</li>
					<li> Unlimited Practice Examination w/ One on One Coaching</li>
					<li> Free Grammar Class </li>
					<li> Free Speaking Enrichment Lesson</li>
				</ul>
			</div>
			<div class="ielts-content-text">
				<br>
				<h1 style="font-family: Calibri"> THE ELEVATE ADVANTAGE </h1>
				<p> - High passing percentage </p>
				<p> - Maximum of ten (10) students per class </p>
				<p> - In-depth review to all the four sections of TOEFL-ibt:</p>
				<p> &nbsp&nbsp Reading, Listening, Speaking, Writing </p>
				<p> - Individualized Coaching and Assessment </p>
				<p> - Competent and efficient instructors who passed and obtained high scores in TOEFL-ibt examination</p>
				<p> - Multifaceted learning modules</p>
				<p> - Student-friendly facilities</p>
				<p> &nbsp&nbsp (Comfortable lecture area)</p>
				<p> &nbsp&nbsp (Convenient student lounge)</p>
				<p> &nbsp&nbsp (Adequate Computer Laboratory and updated Library</p>
				<p> &nbsp&nbsp materials)</p>
				<p> &nbsp&nbsp (Perfect location for Rizaleno's and neighboring towns)</p>
				<p> </p>
			</div>
			
		</div>
	</div>
	<div class="col-4 let-other-container" style="padding: 2%; color: white;">
		<div class="let-other-content">
			<img class="let-other-image" src="<?=base_url()?>assets/img/LET Course Offering with Others.png">
			<br   />
			<div class="let-other-content-text">
				<h3> &nbsp&nbsp Intensive Review Program</h3>
				<ul>
					<li> Twelve (12) session of Interactive Lecture and Practice </li>
				</ul>
				<h3> &nbsp&nbsp General Education</h3>
				<h3> &nbsp&nbsp Professional Education</h3>
				<h3> &nbsp&nbsp Major Subjects</h3>
				<ul>
					<li> Academic Subjects </li>
					<li> Technical Subjects</li>
				</ul>
				<br>
				
			</div>
			<img class="let-other-image" src="<?=base_url()?>assets/img/OTHER.png">
			<br   />
			<div class="let-other-content-text">
				<h3> &nbsp&nbsp Intensive Review Program</h3>
				<ul>
					<li> Twelve (12) session of Interactive Lecture and Practice </li>
				</ul>
				<h3> &nbsp&nbsp General Education</h3>
				<h3> &nbsp&nbsp Professional Education</h3>
				<h3> &nbsp&nbsp Major Subjects</h3>
				<ul>
					<li> Academic Subjects </li>
					<li> Technical Subjects</li>
				</ul>
				<br>
			</div>
		</div>
	</div>
	<
	</div>
	

	<div class="line-spacing col-12"></div>
	<div id="contactus" class="col-12 aboutus">
		<div class="image" style="position: relative;">
			<h3 class="aboutus-back"> <strong> C o n t a c t &nbsp us </strong></h3>
			<h3 class="about-us-text"> <strong> C o n t a c t &nbsp us </strong> </h3>

			<img src="<?=base_url()?>assets/img/shapte-circle.png" width="100">
			
		</div>
	</div>
	<div class="col-12 aboutus-container">
		<div class="col-6" style="color: white;padding: 30px; text-align: center;">
			<h3>Unit 8&9 2nd Flr. AEROSTAR11 Bldg.</h3>
			<h3>#2 Beta Corner Ditchoy St.,</h3>
			<h3>Midtown Subd. City of Marikina</h3>
			<br />
			<br />
			<div class="contact-info" style="color: white;position: relative; text-align: left; margin-left: 20%;">
				<img style="position: absolute;" src="<?=base_url()?>assets/img/Contact.png" width="50">
				<h4 style="position: absolute;margin-left: 13%;"> Globe: (+63) 956-6336767</h4>
				<h4 style="position: absolute;margin-left: 16%; margin-top: 30px;"> Sun: (+63) 923-9463928</h4>
			</div>
		</div>
		<div class="col-6 mapERC" style="color: white;">
			<h3>Elevate Review Center Location</h3>
	    <div class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="map" style="cursor: zoom-in;box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
	    
	    
		</div>
	</div>

	<div class="line-spacing col-12"></div>
	<div class="col-12 footer">
		<div class="col-3">
			&copy 2017 Elevate Review Center 
		</div>
		 <div class="col-8">
		 	<p> </p>
		 </div>
		<div class="col-1">
			<p><a href="#home"> back to top </a></p>
		</div>
		
	</div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<h1 style="float: right; color: white; cursor: pointer;" data-dismiss="modal">X</h1>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
    <img src="<?=base_url()?>assets/img/ElevateReviewMap.png">
  </div>
</div>

</body>

  
  <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/carousel-js.js"></script>
  <script src="<?=base_url()?>assets/js/carousel-js-min.js"></script>
  <script type="text/javascript">
  	function check_show()
  	{
  		

  		var btnShow = document.getElementById('showall');
  		var hiddentItem = document.getElementById('hiddenAct');

  		if (hiddentItem.style.display == "none") 
  		{
  			btnShow.innerHTML = "Hide All";
  			hiddentItem.style.display = "block";
  		}
  		else
  		{
  			btnShow.innerHTML = "Show All";
  			hiddentItem.style.display = "none";
  		}
  	}

  	function ShowHide()
  	{

  	}
  </script>
</html>