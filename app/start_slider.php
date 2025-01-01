<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstap Slider</title>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
    <style>
        h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #00274c;    
    text-align: center;
    height: 300px !important;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 20px;
}
        </style>
<!-- partial:index.partial.html -->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2>Data visualization</h2>
                <div class="carousel-caption">
                  <h3>Real-time</h3>
                  <p>Interactive dashboards with key performance indicators (KPIs).</p>
                  <p>

                  Customizable views for different user roles.
                  </p>
                </div>
            </div>
            <div class="item">
                <h2>Data quality</h2>
                <div class="carousel-caption">
                  <h3>Tools for identifying and addressing data quality issues.</h3>
                  <p>Data validation rules and alerts.</p>
                  <p></p>
                </div>
            </div>
            <div class="item">
                <h2>Reporting and analytics</h2>
                <div class="carousel-caption">
                  <h3>Generates customized reports for different stakeholders.</h3>
                  <p>Advanced analytics capabilities for trend analysis and data visualization builder.</p>
                </div>
            </div>
            <div class="item">
                <h2>Better decision-making</h2>
                <div class="carousel-caption">
                  <h3>Interoperable handleling Multiple data sources</h3>
                  <p>Data-driven insights to inform resource allocation and program planning.</p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
</body>
</html>
