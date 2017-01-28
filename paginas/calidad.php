<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<title>Mineria PKYK</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		
    <meta name="description" content="Seguridad Minera">
<meta name="keywords" content="mineria,drones,seguridad">
<meta name="author" content="Kimberly Munoz">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

        <div class="container">
        <br>
            <header>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#haml">
                             <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             
                                 
                            </button>
                            <img alt="dino" class="img-responsive" src="../imagenes/LOGO5.png" height="110" width=110>
                           
                        </div>
                        <div class="nav navbar-nav navbar-right">
                            <a href="../index.php" class="btn btn-primary btn-lg active" role="button">Logout</a>
                        </div>
                        
                    </div>
                </nav>
               
            </header>
            <div class="container ">
                <div class="row">
                    <div class="col-sm-3">
			    <div style="text-align:center;">
				<h1> Mineria UC </h1>
				<img alt="logo" class="img-responsive" src="../imagenes/logoCompañiaMinera.png">
					
			    </div>
                            <div class="collapse navbar-collapse" id="haml">
                                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                                      <li class="active"><a href="#vtab1" data-toggle="tab">Calidad de Aire</a></li>
                                      <li><a href="#vtab2" data-toggle="tab">Producción</a></li>
                                      <li><a href="#vtab3" data-toggle="tab">Galería</a></li>
                                </ul>
                            </div>   
                    
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                                    <h3>Calidad de Aire</h3>
                                    <script type="text/javascript">
						$(function () {
						    $(document).ready(function () {
							Highcharts.setOptions({
							    global: {
								useUTC: false
							    }
							});

							Highcharts.chart('container', {
							    chart: {
								type: 'spline',
								animation: Highcharts.svg, // don't animate in old IE
								marginRight: 10,
								events: {
								    load: function () {

									// set up the updating of the chart each second
									var series = this.series[0];
									setInterval(function () {
									    var x = (new Date()).getTime(), // current time
										y = Math.random();
									    series.addPoint([x, y], true, true);
									}, 1000);
								    }
								}
							    },
							    title: {
								text: 'Live random data'
							    },
							    xAxis: {
								type: 'datetime',
								tickPixelInterval: 150
							    },
							    yAxis: {
								title: {
								    text: 'Value'
								},
								plotLines: [{
								    value: 0,
								    width: 1,
								    color: '#808080'
								}]
							    },
							    tooltip: {
								formatter: function () {
								    return '<b>' + this.series.name + '</b><br/>' +
									Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
									Highcharts.numberFormat(this.y, 2);
								}
							    },
							    legend: {
								enabled: false
							    },
							    exporting: {
								enabled: false
							    },
							    series: [{
								name: 'Random data',
								data: (function () {
								    // generate an array of random data
								    var data = [],
									time = (new Date()).getTime(),
									i;

								    for (i = -19; i <= 0; i += 1) {
									data.push({
									    x: time + i * 1000,
									    y: Math.random()
									});
								    }
								    return data;
								}())
							    }]
							});
						    });
						});
					</script>


					<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
						<div class="row">
						<div class="col-md-6 ">
							<div style="background-color:aquamarine; text-align:center">
								<br><br>
								<p>Mensual</p> 
								<br><br>
							</div>
	
						</div>
						<div class="col-md-6 ">
							<div style="background-color:#8181F7; text-align:center">
								<br><br>
								<p>Anual</p> 
								<br><br>
							</div>
	
						</div>
							
						</div>

                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="vtab2">
                                	<h3>Producción</h3>
						<div class="col-md-12 ">
							<div>
								<img alt="barra" class="img-responsive" src="../imagenes/barrascontinuo.png">
							</div>
	
						</div>



                                </div>
			
                    <div role="tabpanel" class="tab-pane fade" id="vtab3">
                                    <h3>Galería</h3>
                                    	
                                    
                                
                   
						<div class="col-md-1 ">
							
								<img alt="mina1" class="img-responsive" src="../imagenes/mina1.jpg">
							
						</div>
						<div class="col-md-1 ">
							
								<img alt="mina2" class="img-responsive" src="../imagenes/mina2.jpg">
						
						</div>
						<div class="col-md-1 ">
							
								<img alt="mina3" class="img-responsive" src="../imagenes/mina3.jpg">
							
						</div>
                        <div class="col-md-1 ">
							
								<img alt="mina4" class="img-responsive" src="../imagenes/mina4.jpeg">
							
					</div>
                   
                 </div>
                </div>
                </div>
                    
            </div>
            
            
            
            
            <div class="visible-xs">
             
                   <div id="fondoGris">

                       <a href="../index.html" class="btn btn-primary btn-lg active" role="button">Logout</a>
                   </div>

            </div>
            
            <footer class="hidden-xs">
                 <div id="derechos">
                <br>
                <h6>Todos los Derechos reservados</h6>
            </div>
            </footer>
            
        
    </div>
    </div>
     <script src="js/j3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/npm.js"></script>
    <script src="js/j1.js"></script>
     <script src="js/j2.js"></script>
    <script src="js/j4.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>	
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
      
    </body>
 </html>