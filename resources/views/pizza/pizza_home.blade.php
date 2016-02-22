<?php $thisPage="workshop" ?>
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
                <img alt="e-Yantra" src="{!!asset('img/logo.png')!!}">
            </a>
        </div>
        <div class="col-md-4 text-center">
            <h1 style="font-family: WildWest; color: #F3843E;">PIZZA DELIVERY</h1>
        </div>
    </div>
    </br>
    <div class = "row" style="background-color: #73AFB6;">
        <div class="col-md-4 text-center">
            <span class="clock-header deliverytimelabel">COUNTER</span>
            <div class="clockTimer timer">
                <div class="clock flip-clock-wrapper">
                    <span class="flip-clock-divider minutes"><span class="flip-clock-label">Minutes</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">1</div></div><div class="down"><div class="shadow"></div><div class="inn">1</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">2</div></div><div class="down"><div class="shadow"></div><div class="inn">2</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">4</div></div><div class="down"><div class="shadow"></div><div class="inn">4</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">5</div></div><div class="down"><div class="shadow"></div><div class="inn">5</div></div></a></li></ul><span class="flip-clock-divider seconds"><span class="flip-clock-label">Seconds</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul>
                </div>
            </div>
            <h5>
                <span><input id="deliveryTime" type="number" style="width: 40px; height: 20px" value="0"></span>
                <span>&nbsp;<button id="addTime" class="btn">Set</button></span>
            </h5>
            <div class="controls">
                <button class="btn-success btn" id="onswitch">START</button>
                <button class="btn-warning btn" id="offswitch">STOP</button>
                <button class="btn-danger btn" id="resetswitch">RESET</button>
            </div>
        </div>

        <div class="col-md-4">
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
            <button id="save" class="btn btn-success" disabled>Save</button>
        </div>
    </div>
    </br>
    <div class = "row" style="background-color: #393939">
        <div class="col-md-10 col-md-offset-1 text-danger text-center">
            <h3>
                &ensp;&ensp;Team ID
                </br>
                <input id="teamId" type="number" style="margin-left: 0.5cm; width: 100px; height: 30px" value="1">
            </h3>
            <h3 ng-init='homeCount = 4'>
                &ensp;&ensp;Home Count
                </br>
                <input id="homeCount" ng-model="homeCount" type="number" style="margin-left: 0.5cm; width: 100px; height: 30px">
            </h3>
        </div>
    </div>
    <div class = "row" style="background-color: #393939">
        <div class="col-md-10 col-md-offset-1">
            <table class="table ">
                    <tr class="text-danger">
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
                            <h3>Guarantee Time</h3>
                        </th>
                        <th>
                            <h3>Pizza Del. Time</h3>
                        </th>
                        <th>
                            <h3>Del. Status</h3>
                        </th>
                    </tr>

                @for($i = 1; $i < 12; $i++)
                    <tr ng-if="<?php echo $i;?> <= homeCount" class="text-danger" style="font-size:25px;">
                        <div ng-init="OrderTime<?php echo $i;?> = 0">
                            <td class = "text-danger">
                                <input id="HomeNumber<?php echo $i;?>" ng-model="HomeNumber<?php echo $i;?> = <?php echo $i;?>" type="number" style="width: 40px; height: 40px" min="1" max="12"  maxlength="2">
                            </td>
                            <td id="PizzaType<?php echo $i;?>">
                                <button id="bSmall<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = S" onClick="Small(<?php echo $i;?>)" type="button" class="label label-info">S
                                </button>

                                <button id="bMedium<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = M" onClick="Medium(<?php echo $i;?>)" type="button" class="label label-primary">M
                                </button>

                                <button id="bLarge<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = L" onClick="Large(<?php echo $i;?>)" type="button" class="label label-success">L
                                </button>

                                <button id="bBlue<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = S" onClick="Blue(<?php echo $i;?>)" type="button" class="label label-primary" style='display:none'>
                                </button>

                                <button id="bGreen<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = M" onClick="Green(<?php echo $i;?>)" type="button" class="label label-success" style='display:none'>
                                </button>

                                <button id="bRed<?php echo $i;?>" ng-model="PizzaType<?php echo $i;?> = L" onClick="Red(<?php echo $i;?>)" type="button" class="label label-danger" style='display:none'>
                                </button>
                            </td>
                            <td id="OrderType<?php echo $i;?>">
                                <button id="RegularOrder<?php echo $i;?>" onClick="RegularOrder(<?php echo $i;?>)" type="button" class="label label-1">R<span id="RegOr<?php echo $i;?>" style='display:none'>0</span></button>
                                <button id="PreOrder<?php echo $i;?>" onClick="PreOrder(<?php echo $i;?>)" type="button" class="label label-warning">P<span id="PreOr<?php echo $i;?>" style='display:none'>0</span></button>
                            </td>
                            <td>
                                <input id="OrderTime<?php echo $i;?>" ng-model="OrderTime<?php echo $i;?>" type="number" style="width: 60px; height: 40px" min="1" max="999" maxlength="3" name="row<?php echo $i;?>">
                            </td>
                            <td>
                                <div id="deadLine<?php echo $i;?>" style="font-family: fantasy; display:none">{{OrderTime<?php echo $i;?> + 50}}</div>
                                <div id="orderWindow<?php echo $i;?>" style="font-family: fantasy; display:none">{{OrderTime<?php echo $i;?> - 50}} --- {{OrderTime<?php echo $i;?> + 50}}</div>
                            </td>
                            <td>
                                <button id="pizzaDelivered<?php echo $i;?>"  type="button" class="btn btn-primary" onClick="pizzaDelivered(<?php echo $i;?>)">Pizza Delivered</button>
                                <input id="pizzaDeliveredTime<?php echo $i;?>" type="text" style="width: 80px; height: 40px" name="row<?php echo $i;?>" value = '0'>
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

                                <a href="#"><span id="resetStatus<?php echo $i;?>" ng-model="resetStatus<?php echo $i;?>" onClick="resetStatus(<?php echo $i;?>)" class="badge" style="background-color: #d9534f">r</span></a>
                            </td>
                            <!-- <td>
                                <input type="number" ng-model="points<?php echo $i;?>" style="width: 80px; height: 25px" name="row<?php echo $i;?>" value = ''>
                            </td> -->
                        </div>
                        
                    </tr>
                @endfor
            </table>
        </div>

        <div class="col-md-1" style="margin-top: 2cm;">
            <button id="Penalty<?php echo $i;?>" ng-model="Penalty<?php echo $i;?>" onClick="Penalty()" type="button" class="btn btn-danger">Penalty<a href="#"><span id="penalty" class="badge">0</span></a></button>
        </div>
        <div class="col-md-1" style="margin-top: 2cm;">
            <button id="Reset" ng-model="Reset" onClick="Reset()" type="button" class="btn btn-eyrc11">Reset</button>
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
<script>
var clock;
var score;
var audio = new Audio('http://scambuster.info/audio/time_up.wav');
var pizzaType = [];
var orderType = [];

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

    score = $('.counter').FlipClock(00, {
        clockFace: 'Counter',
        minimumDigits: 3,
        countdown: true
    });

    // Managing the Switch Buttons
    $("#onswitch").click(function(){
        clock.setTime(clock.getTime().time);
        $(".deliverytimelabel").addClass("text-success");
        audio.play();
        setTimeout(function() {
            clearInterval(countup);
            countup = setInterval(function() {
                clock.increment();
                var time = clock.getTime().time;
                var ProgressedTime = time/6 + '%';
                $('#incrementalProgressBar').width(ProgressedTime).text(time);
            }, 1000);
        });
    })

    $("#offswitch").click(function(){
        $(".deliverytimelabel").removeClass("text-success");
        clearInterval(countup);
    })

    $("#resetswitch").click(function(){
        clock.setTime(parseInt($("#deliveryTime").val()));
        $(".deliverytimelabel").removeClass("text-success");
        clearInterval(countup);
        audio.play();
    })

    // Add to Session value with + button
    $("#addTime").click(function(){
        deliveryTime = parseInt($("#deliveryTime").val());
        $("#deliveryTime").html(deliveryTime + 1);
        clock.setTime(parseInt($("#deliveryTime").val()));
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
    $("#RegOr"+i).html(1);
    $("#PreOrder"+i).hide();
    $("#deadLine"+i).show();
    orderType[i-1] =  $("#RegularOrder"+i).html();
    audio.play();
}

function PreOrder(i) {
    document.getElementById("OrderTime"+i).style.backgroundColor = "orange";
    $("#PreOr"+i).html(1);
    $("#RegularOrder"+i).hide();
    $("#orderWindow"+i).show();
    orderType[i-1] =  $("#PreOrder"+i).html();
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

function resetStatus(i) {
    //document.getElementById("resetStatus"+i).style.backgroundColor = "#2c8a7e";
    $("#CD"+i).html(0);
    $("#CPD"+i).html(0);
    $("#CPCD"+i).html(0);
    $("#IPD"+i).html(0);
    $("#bCD"+i).show();
    $("#bCPD"+i).hide();
    $("#bCPCD"+i).hide();
    $("#bIPD"+i).show();
    audio.play();
}

var p = 1;
function Penalty(){
    $("#penalty").html(p++);
}

function Small(i) {
    $("#bSmall"+i).hide();
    $("#bMedium"+i).hide();
    $("#bLarge"+i).hide();
    $("#bBlue"+i).show();
    $("#bGreen"+i).show();
    $("#bRed"+i).show();
    $("#bBlue"+i).html('BS');
    $("#bGreen"+i).html('GS');
    $("#bRed"+i).html('RS');
    audio.play();
}

function Medium(i) {
    $("#bSmall"+i).hide();
    $("#bMedium"+i).hide();
    $("#bLarge"+i).hide();
    $("#bBlue"+i).show();
    $("#bGreen"+i).show();
    $("#bRed"+i).show();
    $("#bBlue"+i).html('BM');
    $("#bGreen"+i).html('GM');
    $("#bRed"+i).html('RM');
    audio.play();
}

function Large(i) {
    $("#bSmall"+i).hide();
    $("#bMedium"+i).hide();
    $("#bLarge"+i).hide();
    $("#bBlue"+i).show();
    $("#bGreen"+i).show();
    $("#bRed"+i).show();
    $("#bBlue"+i).html('BL');
    $("#bGreen"+i).html('GL');
    $("#bRed"+i).html('RL');
    audio.play();
}
function Blue(i) {
    $("#bGreen"+i).hide();
    $("#bRed"+i).hide();
    pizzaType[i-1] = $("#bBlue"+i).html();
    audio.play();
}

function Green(i) {
    $("#bBlue"+i).hide();
    $("#bRed"+i).hide();
    pizzaType[i-1] =  $("#bGreen"+i).html();
    audio.play();
}

function Red(i) {
    $("#bGreen"+i).hide();
    $("#bBlue"+i).hide();
    pizzaType[i-1] =  $("#bRed"+i).html();
    audio.play();
}
</script>

<script type="text/javascript">
$(document).ready(function(){
    var dataToSave;
    var i;
    var teamId;
    var counter;
    var total;
    var penalty;
    var homeNumber = [];
    var orderTime = [];
    var pizzaDeliveredTime = [];
    var cd = [];
    var cpd = [];
    var cpcd = [];
    var ipd = [];
    var tip = [];
    var regOr = [];
    var preOr = [];
    var cd_p = 0;
    var cpd_p = 0;
    var cpcd_p = 0;
    var ipd_p = 0;
    var tip_p = 0;
    var pizzaDeliveredPoints = [];
    var totalPoints = 0;
    var homeCount
        
    $("#total").click(function(){
        var i;
        homeCount = parseInt($("#homeCount").val());
        counter = clock.getTime().time;
        penalty = parseInt($("#penalty").html());
        for(i=1; i<=homeCount; i++)
        {
            homeNumber[i-1] = parseInt($("#HomeNumber"+i).val());
            orderTime[i-1] = parseInt($("#OrderTime"+i).val());
            pizzaDeliveredTime[i-1] = parseInt($("#pizzaDeliveredTime"+i).val());
            cd[i-1] = parseInt($("#CD"+i).html());
            cpd[i-1] = parseInt($("#CPD"+i).html());
            cpcd[i-1] = parseInt($("#CPCD"+i).html());
            ipd[i-1] = parseInt($("#IPD"+i).html());
            cd_p = cd_p + parseInt($("#CD"+i).html());
            cpd_p = cpd_p + parseInt($("#CPD"+i).html());
            cpcd_p = cpcd_p + parseInt($("#CPCD"+i).html());
            ipd_p = ipd_p + parseInt($("#IPD"+i).html());
            regOr[i-1] = parseInt($("#RegOr"+i).html());
            preOr[i-1] = parseInt($("#PreOr"+i).html());

            if(regOr[i-1] == 1){
                if(pizzaDeliveredTime[i-1] >= orderTime[i-1] && pizzaDeliveredTime[i-1] <= (orderTime[i-1]+50) && cd[i-1] == 1 && cpd[i-1] == 1 && cpcd[i-1] == 1 && ipd[i-1] == 0){
                    tip_p = tip_p+1;
                    tip[i-1] = 1;
                }
                else{
                    tip[i-1] = 0;
                }
            }
            if(preOr[i-1] == 1){
                if(pizzaDeliveredTime[i-1] >= (orderTime[i-1]-50) && pizzaDeliveredTime[i-1] <= (orderTime[i-1]+50) && cd[i-1] == 1 && cpd[i-1] == 1 && cpcd[i-1] == 1 && ipd[i-1] == 0){
                    tip_p = tip_p+1;
                    tip[i-1] = 1;
                }
                else{
                    tip[i-1] = 0;
                }
            }
        }

        totalPoints = ((600-counter) + (cpd_p*50) +  (cpcd_p*50) + (tip_p*50) + (cd_p*10) - (ipd_p*20) - (penalty*50));

        score.setTime(totalPoints);
        $(this).prop('disabled', true);
        $("#save").prop('disabled', false);
    })

    $("#save").click(function(){
        teamId = $("#teamId").val();
        total = score.getTime().time;
        homeCount = parseInt($("#homeCount").val());

        dataToSave = [teamId, counter, total, penalty, homeNumber, pizzaType, orderType, orderTime, pizzaDeliveredTime, cd, cpd, cpcd, ipd, tip, cd_p, cpd_p, cpcd_p, ipd_p, tip_p, homeCount]
        //ResultToSave = [teamId, counter, total, penalty, homeNumber, orderTime, pizzaDeliveredTime, cd, cpd, cpcd, ipd, tip]
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type    : "POST",
            url     : "{!! route('pizzaDataSave') !!}",
            data    : {"dataToSave" : dataToSave,'_token': '{!! csrf_token() !!}'},
            dataType: 'json'
        }).done(function(data) {
            if(!data.error){
                alert("hi");
            }
            else{
                alert(data.error);
                }
        });

        $(this).prop('disabled', true);
    })

    $("#Reset").click(function(){
        teamId = $("#teamId").val();
        homeCount = parseInt($("#homeCount").val());
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type    : "POST",
            url     : "{!! route('pizzaResetData') !!}",
            data    : {"pizzaResetDataTeamId"   : teamId,'_token': '{!! csrf_token() !!}'},
            dataType: 'json'
        }).done(function(data) {
            if(!data.error){
                //alert(data.resetTableData[0].home_no)
                for(i=1; i<=homeCount; i++)
                {
                    $("#HomeNumber"+i).val(data.resetTableData[i-1].home_no);
                    $("#OrderTime"+i).val(data.resetTableData[i-1].order_time);
                }
            }
            else{

            }
        });
    })
});
</script>
</html>