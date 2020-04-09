
<html>

<link href="{{asset ('css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{asset ('css/css.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap-material-design.main.css')}}" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ asset ('css/bootstrap-material-design.min.css') }}" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="{{asset ('font/font-awesome.min.css') }}" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('css/css1.css')}}">
    <link rel="stylesgeet" href="{{asset('font/material-kit.css')}}">

 <title>Abdoo Fteis</title>
</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://localhost/profile/public/AbdooFteis">Profile Me </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    
      				<li class="nav-item">
      					<a class="nav-link" href="https://www.instagram.com/abdoofteis/" target="_blank">
      						<i class="fa fa-instagram"></i>
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="https://www.facebook.com/profile.php?id=100003436528749" target="_blank">
      						<i class="fa fa-facebook-square"></i>
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link"  href="#" target="_blank">
      						<i class="fa fa-google"></i>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('img/black.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="img/Abdoo.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">Abdoo Fteis</h3>
								<h6>Designer</h6>
								<a href="https://www.facebook.com/profile.php?id=100003436528749" class="btn btn-just-icon btn-link btn-dribbble" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="#" class="btn btn-just-icon btn-link btn-twitter"target="_blank"><i class="fa fa-google"></i></a>
                                <a href="https://www.instagram.com/abdoofteis/" class="btn btn-just-icon btn-link btn-pinterest"target="_blank"><i class="fa fa-instagram"></i></a>
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                    <p>Hello people I'm Abdoo Study at Tripoli University Fuctily of sience I Work as web Designer & I'm good of it. </p>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons">camera</i>
                                  Studio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons">palette</i>
                                    Work
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    Favorite
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
  					<div class="col-md-3 ml-auto">
  					    <img src="{{asset('img/1.jpg')}}" class="rounded">
  						<img src="{{asset('img/2.jpg')}}" class="rounded">
  					</div>
  					<div class="col-md-3 mr-auto">
  						<img src="{{asset('img/3.jpg')}}" class="rounded">
  						<img src="{{asset('img/4.jpg')}}" class="rounded">
  					</div>
  				</div>
  			</div>
            <div class="tab-pane text-center gallery" id="works">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
                      <img src="{{asset('img/5.jpg')}}" class="rounded">
  					  <img src="{{asset('img/4.jpg')}}" class="rounded">
                        <img src="{{asset('img/6.jpg')}}" class="rounded"> 
					</div>
      				<div class="col-md-3 mr-auto">
                      <img src="{{asset('img/7.jpg')}}" class="rounded">
                      <img src="{{asset('img/8.jpg')}}" class="rounded">
      				</div>
      			</div>
  			</div>
            <div class="tab-pane text-center gallery" id="favorite">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
      				  <img src="{{asset('img/7.jpg')}}" class="rounded">
                      <img src="{{asset('img/8.jpg')}}" class="rounded">
      				</div>
      				<div class="col-md-3 mr-auto">
      				  <img src="{{asset('img/6.jpg')}}" class="rounded">			
      				  <img src="{{asset('img/5.jpg')}}" class="rounded">
  					  <img src="{{asset('img/4.jpg')}}" class="rounded">
      			    </div>
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	</div>
	
	<footer class="footer text-center ">
        <p>Designed by::<a href="#" target="_blank">Abdoo Fteis</a> </p>
    </footer>
    
    <script src="{{asset('js/popper.js')}}" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
')

    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

    <script src="{{asset('js/bootstrap-material-design.js')}}" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


    <script src="{{asset('js/js.js')}}"></script>
</body>

</html>