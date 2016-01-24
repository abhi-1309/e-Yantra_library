<?php $thisPage="workshop" ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Orbitron|Lobster">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css">
	<link rel="stylesheet" href="css/pizza.css">
	</head>
<body ng-app="">
	<nav class="navbar navbar-inverse">
		<div class="col-md-3">
			<a class="navbar-brand" href="#">
				<img alt="e-Yantra" src="{!!asset('img/logo.png')!!}">
			</a>
		</div>
		<div class="col-md-6 text-center">
			<h2 style="color: #00ff40;">PIZZA DELIVERY</h2>
		</div>
	</nav>

	<div class = "row" style="background-color: #7D1935;">
		<div class="col-md-4 text-center">
			<span class="clock-header deliverytimelabel">COUNTER</span>
			<div class="clockTimer timer">
				<div class="clock flip-clock-wrapper">
					<span class="flip-clock-divider minutes"><span class="flip-clock-label">Minutes</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">1</div></div><div class="down"><div class="shadow"></div><div class="inn">1</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">2</div></div><div class="down"><div class="shadow"></div><div class="inn">2</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">4</div></div><div class="down"><div class="shadow"></div><div class="inn">4</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">5</div></div><div class="down"><div class="shadow"></div><div class="inn">5</div></div></a></li></ul><span class="flip-clock-divider seconds"><span class="flip-clock-label">Seconds</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul>
				</div>
			</div>
			<h5>
				<span><button id="decreaseTime" class="btn">-</button>&nbsp;</span>
				<span id="deliveryTime">00</span>
				<span>&nbsp;<button id="addTime" class="btn">+</button></span>
			</h5>
			<div class="controls">
				<button class="btn-success btn" id="onswitch">START</button>
				<button class="btn-warning btn" id="offswitch">STOP</button>
				<button class="btn-danger btn" id="resetswitch">RESET</button>
			</div>
		</div>

		<div class="col-md-4">
			</br></br></br>
			<div class="progress progress-striped active">
				<div class="progress-bar progress-bar-info popover-example" role="progressbar" style="width:@{{OrderTime1/6}}%">
				</div>
				@for($i = 1; $i < 6; $i++)
				<div class="progress-bar mypopover" role="progressbar" title="" data-content="OT {{OrderTime<?php echo $i;?>}}<br>PT {{PizzaType<?php echo $i;?>}}<br>OTy {{OrderType<?php echo $i;?>}}"
					data-html="true" data-placement="top" data-original-title="H.No. {{HomeNumber<?php echo $i;?>}}" style="width:0.5%">
				</div>
				<div class="progress-bar  progress-bar-<?php echo $i;?>" role="progressbar" style="width:{{(OrderTime<?php echo $i+1;?> - OrderTime<?php echo $i;?>)/6}}%;">
					{{HomeNumber<?php echo $i;?>}} -- {{PizzaType<?php echo $i;?>}} -- {{OrderType<?php echo $i;?>}} -- {{OrderTime<?php echo $i;?>}}
				</div>

				@endfor
			</div>
			<div class="progress progress-striped active" >
				<div id = 'incrementalProgressBar' class="progress-bar progress-bar-danger" width="40%"></div>
			</div>
			<div class="progress progress-striped active">
				<div class="progress-bar progress-bar-info" role="progressbar" style="width:@{{OrderTime1/6}}%">
				</div>
				<div class="progress-bar progress-bar-success" role="progressbar" style="width:@{{50/6}}%">
				</div>
				@for($i = 1; $i < 6; $i++)
				<div class="progress-bar progress-bar-info mypopover popover-example" role="progressbar" title="" data-content="DL {{OrderTime<?php echo $i;?> + 50}}<br> PT {{PizzaType<?php echo $i;?>}}<br>OTy {{OrderType<?php echo $i;?>}}" data-html="true" data-placement="bottom" data-original-title="H.No. {{HomeNumber<?php echo $i;?>}}" style="width:0.5%">
				</div>
				<div class="progress-bar progress-bar-<?php echo $i;?>" role="progressbar" style="width:{{(OrderTime<?php echo $i+1;?> - OrderTime<?php echo $i;?>)/6}}%">
					{{HomeNumber<?php echo $i;?>}} -- {{PizzaType<?php echo $i;?>}} -- {{OrderType<?php echo $i;?>}} -- {{OrderTime<?php echo $i;?>}}
				</div>
				@endfor
			</div>
		</div>

		<div class="col-md-4 text-center">
			<span class="clock-header scorelabel">&emsp;SCORE</span>
			<div class="clockTimer2 timer">
				<div class="score counter clearfix flip-clock-wrapper"><ul class="flip play"><li data-digit="0" class=""><a href="#">
					<div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li><li data-digit="1" class=""><a href="#"><div class="up"><div class="shadow"></div><div class="inn">1</div></div><div class="down"><div class="shadow"></div><div class="inn">1</div></div></a></li><li data-digit="2" class=""><a href="#"><div class="up"><div class="shadow"></div><div class="inn">2</div></div><div class="down"><div class="shadow"></div><div class="inn">2</div></div></a></li><li data-digit="3" class=""><a href="#"><div class="up"><div class="shadow"></div><div class="inn">3</div></div><div class="down"><div class="shadow"></div><div class="inn">3</div></div></a></li><li data-digit="4" class=""><a href="#"><div class="up"><div class="shadow"></div><div class="inn">4</div></div><div class="down"><div class="shadow"></div><div class="inn">4</div></div></a></li><li data-digit="5" class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">5</div></div><div class="down"><div class="shadow"></div><div class="inn">5</div></div></a></li><li data-digit="6" class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">6</div></div><div class="down"><div class="shadow"></div><div class="inn">6</div></div></a></li><li data-digit="7"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">7</div></div><div class="down"><div class="shadow"></div><div class="inn">7</div></div></a></li><li data-digit="8"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">8</div></div><div class="down"><div class="shadow"></div><div class="inn">8</div></div></a></li><li data-digit="9"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li></ul><ul class="flip play"><li data-digit="0" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li><li data-digit="1" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">1</div></div><div class="down"><div class="shadow"></div><div class="inn">1</div></div></a></li><li data-digit="2" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">2</div></div><div class="down"><div class="shadow"></div><div class="inn">2</div></div></a></li><li data-digit="3" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">3</div></div><div class="down"><div class="shadow"></div><div class="inn">3</div></div></a></li><li data-digit="4" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">4</div></div><div class="down"><div class="shadow"></div><div class="inn">4</div></div></a></li><li data-digit="5" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">5</div></div><div class="down"><div class="shadow"></div><div class="inn">5</div></div></a></li><li data-digit="6" class="flip-clock-before"><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">6</div></div><div class="down"><div class="shadow"></div><div class="inn">6</div></div></a></li><li data-digit="7" class="flip-clock-active"><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">7</div></div><div class="down"><div class="shadow"></div><div class="inn">7</div></div></a></li><li data-digit="8" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">8</div></div><div class="down"><div class="shadow"></div><div class="inn">8</div></div></a></li><li data-digit="9" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li></ul><ul class="flip play"><li data-digit="0" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li><li data-digit="1" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">1</div></div><div class="down"><div class="shadow"></div><div class="inn">1</div></div></a></li><li data-digit="2" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">2</div></div><div class="down"><div class="shadow"></div><div class="inn">2</div></div></a></li><li data-digit="3" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">3</div></div><div class="down"><div class="shadow"></div><div class="inn">3</div></div></a></li><li data-digit="4" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">4</div></div><div class="down"><div class="shadow"></div><div class="inn">4</div></div></a></li><li data-digit="5" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">5</div></div><div class="down"><div class="shadow"></div><div class="inn">5</div></div></a></li><li data-digit="6" class="flip-clock-before"><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">6</div></div><div class="down"><div class="shadow"></div><div class="inn">6</div></div></a></li><li data-digit="7" class="flip-clock-active"><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">7</div></div><div class="down"><div class="shadow"></div><div class="inn">7</div></div></a></li><li data-digit="8" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">8</div></div><div class="down"><div class="shadow"></div><div class="inn">8</div></div></a></li><li data-digit="9" class=""><a href="#" class=""><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li></ul>
				</div>
				</br></br></br>
			</div>
			&emsp;&emsp;&emsp;<button id="total" class="btn btn-danger">Total</button>
			<button id="save" class="btn btn-success">Save</button>
		</div>
	</div>
	</br>
	<div class = "row" style="background-color: #FF9C5F">
		<div class="col-md-10 col-md-offset-1">
			<table class="table ">
					<tr class="text-danger" style="font-family: fantasy; padding-bottom:0px;">
						<th>
							<h3>H.No.</h3>
						</th>
						<th>
							<h3>Pizza Size</h3>
						</th>
						<th>
							<h3>Order Type</h3>
						</th>
						<th>
							<h3>Order Time</h3>
						</th>
						<th>
							<h3>Dead Line</h3>
						</th>
						<th>
							<h3>Order Time</br>Window</h3>
						</th>
						<th>
							<h3>Pizza Del. Time</h3>
						</th>
						<th>
							<h3>Del. Status</h3>
						</th>
						<!-- <th>
							<h3>Points</h3>
						</th> -->
					</tr>
				@for($i = 1; $i < 6; $i++)
					<tr class="progress-bar-<?php echo $i;?>">
						<div ng-init="OrderTime<?php echo $i;?> = 0">
							<td class = "text-danger">
								<input id="HomeNumber<?php echo $i;?>" ng-model="HomeNumber<?php echo $i;?>" type="number" style="width: 40px; height: 25px" min="1" max="12"  maxlength="2">
							</td>
								<!-- <input id="PizzaType<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?>" type="text" style="width: 40px; height: 25px" maxlength="1">&nbsp;&nbsp;&nbsp; -->
							<td>
								<button id="bSmall<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = S" onClick="Small(<?php echo $i;?>)" type="button" class="label label-info">S
								</button>

								<button id="bMedium<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = M" onClick="Medium(<?php echo $i;?>)" type="button" class="label label-primary">M
								</button>

								<button id="bLarge<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = L" onClick="Large(<?php echo $i;?>)" type="button" class="label label-success">L
								</button>
							</td>
							<td>
								<!-- <input id="OrderType<?php echo $i;?>" ng-model="OrderType<?php echo $i;?>" type="text" style="width: 40px; height: 25px" maxlength="1"> -->
								<button id="RegularOrder<?php echo $i;?>" onClick="RegularOrder(<?php echo $i;?>)" type="button" class="label label-1">Reg Or.</button>
								<button id="PreOrder<?php echo $i;?>" onClick="PreOrder(<?php echo $i;?>)" type="button" class="label label-warning">Pre Or.</button>
							</td>
							<td>
								<input id="OrderTime<?php echo $i;?>" ng-model="OrderTime<?php echo $i;?>" type="number" style="width: 60px; height: 25px" min="1" max="999" maxlength="3" name="row<?php echo $i;?>">
							</td>
							<td>
								<div style="font-family: fantasy;">{{OrderTime<?php echo $i;?> + 50}}</div>
							</td>
							<td>
								<div style="font-family: fantasy;">{{OrderTime<?php echo $i;?> - 50}} --- {{OrderTime<?php echo $i;?> + 50}}</div>
							</td>
							<td>
								<button id="pizzaDelivered<?php echo $i;?>"  type="button" class="btn btn-primary" onClick="pizzaDelivered(<?php echo $i;?>)">Pizza Delivered</button>
								<input id="pizzaDeliveredTime<?php echo $i;?>" type="text" style="width: 80px; height: 25px" name="row<?php echo $i;?>" value = ''>
							</td>
							<td style="text-align: center; font-family: cursive;">
								<button id="bCD<?php echo $i;?>" ng-model="CD<?php echo $i;?>" onClick="CD(<?php echo $i;?>)" type="button" class="label label-info">CD
									<a href="#"><span id="CD<?php echo $i;?>" class="badge">0</span></a>
								</button>

								<button id="bCPD<?php echo $i;?>" onClick="CPD(<?php echo $i;?>)" type="button" class="label label-primary" style='display:none'>CPD
									<a href="#"><span id="CPD<?php echo $i;?>" class="badge">0</span></a>
								</button>

								<button id="bCPCD<?php echo $i;?>" onClick="CPCD(<?php echo $i;?>)" type="button" class="label label-success" style='display:none'>CPCD
									<a href="#"><span id="CPCD<?php echo $i;?>" class="badge">0</span></a>
								</button>

								<button id="bIPD<?php echo $i;?>" ng-model="IPD<?php echo $i;?>" onClick="IPD(<?php echo $i;?>)" type="button" class="label label-warning">IPD
									<a href="#"><span id="IPD<?php echo $i;?>" class="badge">0</span></a>
								</button>
							</td>
							<!-- <td>
								<input type="number" ng-model="points<?php echo $i;?>" style="width: 80px; height: 25px" name="row<?php echo $i;?>" value = ''>
							</td> -->
						</div>
					</tr>
	 	    	@endfor
	 	    </table>
		</div>
		<div id = "totalPoints" style="visibility: hidden">
	 	    @{{100}}
	 	</div>
		<div class="col-md-1" style="margin-top: 5cm;">
			<button id="Penalty<?php echo $i;?>" ng-model="Penalty<?php echo $i;?>" onClick="Penalty()" type="button" class="btn btn-danger">Penalty<a href="#"><span id="penalty" class="badge">0</span></a></button>
		</div>
	</div>
	<div class="col-md-10 col-md-offset-1" style="padding-top: 15px;">
		<span class="pull-left"><p class="text-muted">&copy; Copyright e-Yantra, 2015</p></span>
		<span class="pull-right">
			<a target="_blank" href="https://twitter.com/eyantra_iitb" class="btn btn-primary">t</a>
			<a target="_blank" href="https://plus.google.com/u/0/115192232830737300162/posts" class="btn btn-danger">g+</a>
			<a target="_blankk" href="https://www.facebook.com/eyantra" class="btn btn-primary">f</a>
		</span>
	</div>
</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>
<script>
var clock;
var audio = new Audio('http://scambuster.info/audio/time_up.wav');

$(document).ready(function(){
	$("button").addClass("btn");
	$('.mypopover').popover();
	var deliveryTime;

	deliveryTime = parseInt($("#deliveryTime").html() * 60);

	var countup;

    clock = $('.clock').FlipClock(deliveryTime,{
        clockFace: 'Counter',
        minimumDigits: 3,
        callbacks: {
            interval: function(){
	        	var time = clock.getTime().time;
	        }
        }
    });

	var score = $('.counter').FlipClock(00, {
		clockFace: 'Counter',
		minimumDigits: 3,
		countdown: true
	});

	$("#total").click(function(){
		$(".scorelabel").addClass("text-success");
		score.setTime(parseInt($("#totalPoints").html()));
		audio.play();
	})

	$("#save").click(function(){
		alert("Database is not connected");
	})

	// Managing the Switch Buttons
	$("#onswitch").click(function(){
		clock.setTime(clock.getTime().time);
		$(".deliverytimelabel").addClass("text-success");
		audio.play();
		setTimeout(function() {
			clearInterval(countup);
     		countup = setInterval(function() {
     			clock.increment();
     			var ProgressedTime = clock.getTime().time/6 + '%';
	        	$('#incrementalProgressBar').width(ProgressedTime).text(time);
     		}, 1000);
    	});
	})

	$("#offswitch").click(function(){
		$(".deliverytimelabel").removeClass("text-success");
		clearInterval(countup);
	})

	$("#resetswitch").click(function(){
		clock.setTime(parseInt($("#deliveryTime").html()));
		$(".deliverytimelabel").removeClass("text-success");
		clearInterval(countup);
	 	audio.play();
	})

	// Add to Session value with + button
	$("#addTime").click(function(){
		deliveryTime = parseInt($("#deliveryTime").html());
		$("#deliveryTime").html(deliveryTime + 1);
		clock.setTime(parseInt($("#deliveryTime").html()));
	})

	// Remove from Session value with - button
	$("#decreaseTime").click(function(){
		deliveryTime = parseInt($("#deliveryTime").html());
		$("#deliveryTime").html(deliveryTime - 1);
		if(deliveryTime === 1){
			$("#deliveryTime").html(1);
		}
		clock.setTime(parseInt($("#deliveryTime").html()));
	})
});

function pizzaDelivered(i) {
	var snapTime = clock.getTime().time;
	document.getElementById("pizzaDeliveredTime"+i).value = snapTime;
	document.getElementById("pizzaDeliveredTime"+i).html(snapTime);
	audio.play();
}

function RegularOrder(i) {
	document.getElementById("OrderTime"+i).style.backgroundColor = "#2c8a7e";
	$("#PreOrder"+i).hide();
	audio.play();
}

function PreOrder(i) {
	document.getElementById("OrderTime"+i).style.backgroundColor = "orange";
	$("#RegularOrder"+i).hide();
	audio.play();
}

function CD(i) {
	document.getElementById("CD"+i).style.backgroundColor = "#329ACD";
	$("#CD"+i).html(1);
	$("#bCPD"+i).show();
	audio.play();
}

function CPCD(i) {
	document.getElementById("CPCD"+i).style.backgroundColor = "#408000";
	//CPCD = parseInt($("#CPCD"+i).html());
	$("#CPCD"+i).html(1);
	audio.play();
}

function CPD(i) {
	document.getElementById("CPD"+i).style.backgroundColor = "#0080FF";
	$("#CPD"+i).html(1);
	$("#bCPCD"+i).show();
	$("#bIPD"+i).hide();
	audio.play();
}

function IPD(i) {
	document.getElementById("IPD"+i).style.backgroundColor = "#cc6600";
	if($("#CD"+i).html() == 0){
		$("#IPD"+i).html(1);
		$("#bCD"+i).hide();
	}
	else{
		$("#IPD"+i).html(1);
		$("#bCPD"+i).hide();
	}
	audio.play();
}

var p = 1;
function Penalty(){
	$("#penalty").html(p++);
}

function Small(i) {
	$("#bMedium"+i).hide();
	$("#bLarge"+i).hide();
	audio.play();
}

function Medium(i) {
	$("#bSmall"+i).hide();
	$("#bLarge"+i).hide();
	audio.play();
}

function Large(i) {
	$("#bSmall"+i).hide();
	$("#bMedium"+i).hide();
	audio.play();
}
</script>

<script type="text/javascript">
$(document).ready(function(){

});
</script>
</html>