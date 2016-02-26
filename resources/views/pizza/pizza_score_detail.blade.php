<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/flipclock.min.css">
    <link rel="stylesheet" href="css/pizza.css">
    </head>
<body ng-app="" style="font-family: Orbitron;">
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
        <div class="col-md-4 text-danger text-center ng-init='homeCount = 8'">
            <h2 style="padding-top: 20px;">
                &ensp;Team ID<br><br>
                <input id="teamId" type="number" style="margin-left: 0.5cm; width: 150px; height: 50px">
            </h2>
        </div>

        <div class="col-md-4 text-center" style="margin-top: 50px;">
            <img src="/img/animation/animated_pizza_image_2.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
        </div>

        <div class="col-md-4 text-danger text-center ng-init='homeCount = 8'">
            <h2 style="padding-top: 20px;">
                &ensp;Total<br><br>
                <input id="teamId" type="number" style="margin-left: 0.5cm; width: 150px; height: 50px">
            </h2>
        </div>
    </div>
    </br>
    <div class = "row" style="background-color: #393939">
        <!-- <div class="col-md-1" style="margin-top: 2cm;">
            <button id="Reset" ng-model="Reset" onClick="Reset()" type="button" class="btn btn-eyrc11">Reset</button>
        </div> -->
    </div>
    <div class = "row" style="background-color: #393939;">
        <div class="col-md-10 col-md-offset-1">
            <table id="PizzaStatusByTeams" class="table text-danger">

            </table>
        </div>
    </div>
     <div class = "row" style="background-color: #393939;">
        <div class="col-md-10 col-md-offset-1">
            <table id="pizzaFinalStatus" class="table text-danger">

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
   $("#teamId").change(function(){
    
    teamId = $("#teamId").val();
    $("#PizzaStatusByTeams").empty();
     $("#pizzaFinalStatus").empty();
   
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type    : "POST",
            url     : "{!! route('scoreDetailData') !!}",
            data    : {"pizzaScoreId"   : teamId,'_token': '{!! csrf_token() !!}'},
            dataType: 'json'
        }).done(function(data) {
            if(!data.error){
                $('#PizzaStatusByTeams').append('<thead>\
                    <tr>\
                    <th><h3>Team ID .</h3></th>\
                    <th><h3>Run CountS.</h3></th>\
                    <th><h3>Home NO.</h3></th>\
                    <th><h3>Pizza Type</h3></th>\
                    <th><h3>Order Type</h3></th>\
                    <th><h3>Order Time</h3></th>\
                    <th><h3>Pizza Delivery Time</h3></th>\
                    <th><h3>CD</h3></th>\
                    <th><h3>CPD</h3></th>\
                    <th><h3>CPCD</h3></th>\
                    <th><h3>IPD</h3></th>\
                    <th><h3>Tip</h3></th></tr>\
                </thead>');
                var trHTML = '';
                for(var i = 0; i < data.TeamDetailData.length; i++){
                    trHTML += '<tr>';
                    trHTML += '<td>' + data.TeamDetailData[i].team_id + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].run_count + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].home_no + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].pizza_type + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].order_type + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].order_time + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].pizza_delivery_time + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].cd + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].cpd + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].cpcd + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].ipd + '</td>';
                    trHTML += '<td>' + data.TeamDetailData[i].tip + '</td>';
                    trHTML +='</tr>';
                }
                $('#PizzaStatusByTeams').append(trHTML);
                

                 $('#pizzaFinalStatus').append('<thead>\
                    <tr>\
                    <th data-tsorter="numeric"><h3>Team ID</h3></th>\
                    <th><h3>Run CountS.</h3></th>\
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
                for(var i = 0; i < data.TeamDetailResultData.length; i++)  
                {
                   trHTML += '<tr>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].team_id + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].run_count + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].total_time + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].count_cd + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].count_cpd + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].count_cpcd + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].count_ipd + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].count_tip + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].count_penalty + '</td>';
                    trHTML += '<td>' + data.TeamDetailResultData[i].score + '</td>';
                    trHTML +='</tr>';
                }

                $('#pizzaFinalStatus').append(trHTML);


            }


            else{
                alert('Something went wrong');
            }
        });
    });
});
</script>
</html>