<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/flipclock.min.css">
    <link rel="stylesheet" href="css/pizza.css">
    </head>
<body ng-app="">
    </br>
    <div class="row" style="background-color: #393939;">
        <div class="col-md-4">
            <a class="" href="#">
                <img alt="e-Yantra" src="{!!asset('img/logo.png')!!}" style="margin-top:10px; width:250px; height:50px;">
            </a>
        </div>
        <div class="col-md-4 text-center">
            <h1 style="font-family: WildWest; color: #F3843E;">PIZZA DELIVERY</h1>
        </div>
    </div>
    </br>
    <div class = "row" style="background-color: #73AFB6;">
        <div class="col-md-4 text-center">

        </div>

        <div class="col-md-4 text-center" style="margin-top: 50px;">
			<img src="/img/animation/animated_pizza_image_2.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
		</div>

        <div class="col-md-4 text-center">

        </div>
    </div>
    </br>
    <div class = "row" style="background-color: #393939">
        <!-- <div class="col-md-1" style="margin-top: 2cm;">
            <button id="Reset" ng-model="Reset" onClick="Reset()" type="button" class="btn btn-eyrc11">Reset</button>
        </div> -->
    </div>
    <div class = "row" style="background-color: #393939;font-family: Orbitron;">
        <div class="col-md-10 col-md-offset-1">
            <table id="PizzaStatusByTeams" class="table text-danger">

            </table>
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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/flipclock.min.js"></script>
<script src="js/tsorter.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    function init() {
        var sorter = tsorter.create('PizzaStatusByTeams');
    }

    window.onload = init;

    window.onload = retrieveTeamStatus();
	/*$("#Reset").click(*/
    function retrieveTeamStatus(){
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type    : "POST",
            url     : "{!! route('scoreResultData') !!}",
            data    : {'_token': '{!! csrf_token() !!}'},
            dataType: 'json'
        }).done(function(data) {
            if(!data.error){
    			$('#PizzaStatusByTeams').append('<thead>\
					<tr>\
					<th data-tsorter="numeric"><h3>ID</h3></th>\
					<th data-tsorter="numeric"><h3>Team ID</h3></th>\
                    <th><h3>Run Count</h3></th>\
					<th><h3>Total Time</h3></th>\
					<th><h3>Correct Detection</h3></th>\
					<th><h3>Correct Pizza Detection</h3></th>\
					<th><h3>Correct Pizza Correct Delivery</h3></th>\
					<th><h3>Incorrect Pizza Delivery</h3></th>\
					<th><h3>Tips</h3></th>\
					<th><h3>Penalty</h3></th>\
					<th><h3>Score</h3></th></tr>\
				</thead>');
				var trHTML = '';
				for(var i = 0; i < data.length; i++){
					trHTML += '<tr>';
					trHTML += '<td>' + data[i].id + '</td>';
					trHTML += '<td>' + data[i].team_id + '</td>';
                    trHTML += '<td>' + data[i].run_count + '</td>';
					trHTML += '<td>' + data[i].total_time + '</td>';
					trHTML += '<td>' + data[i].count_cd + '</td>';
					trHTML += '<td>' + data[i].count_cpd + '</td>';
					trHTML += '<td>' + data[i].count_cpcd + '</td>';
					trHTML += '<td>' + data[i].count_ipd + '</td>';
					trHTML += '<td>' + data[i].count_tip + '</td>';
					trHTML += '<td>' + data[i].count_penalty + '</td>';
					trHTML += '<td>' + data[i].score + '</td>';
					trHTML +='</tr>';
				}
				$('#PizzaStatusByTeams').append(trHTML);
			}
            else{
            	alert('Something went wrong');
            }
        });
    }
});
</script>
</html>