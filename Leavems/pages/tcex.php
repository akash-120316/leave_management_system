<?php
include ('calenderscript.php');
$calendar1 = new Calendar('2023-01-1');
$calendar2 = new Calendar('2023-02-1');
$calendar3 = new Calendar('2023-03-1');
$calendar4 = new Calendar('2023-04-1');
$calendar5 = new Calendar('2023-05-1');
$calendar6 = new Calendar('2023-06-1');
$calendar7 = new Calendar('2023-07-1');
$calendar8 = new Calendar('2023-08-1');
$calendar9 = new Calendar('2023-09-1');
$calendar10 = new Calendar('2023-10-1');
$calendar11 = new Calendar('2023-11-1');
$calendar12 = new Calendar('2023-12-1');
$calendar1->add_event('pongal', '2023-01-04', 1, 'red');
$calendar1->add_event('Holiday', '2023-01-16', 7);
$calendar1->add_event('birthday', '2023-01-05', 1, 'green');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SREC CALENDER</title>

		<style>
.calendar {
    display: flex;
    flex-flow: column;
    background-color: #fff;
}
.calendar .header .month-year {
    font-size: 20px;
    font-weight: bold;
    color: #636e73;
    padding: 20px 0;
}
.calendar .days {
    display: flex;
    flex-flow: wrap;
}
.calendar .days .day_name {
    width: calc(100% / 7);
    border-right: 1px solid #000;
    padding: 20px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    color: #818589;
    color: #005B46;
    background-color: #ffecb2;
	
}
.calendar .days .day_name:nth-child(7) {
    border: none;
}
.calendar .days .day_num {
    display: flex;
    flex-flow: column;
    width: calc(100% / 7);
    border-right: 1px solid #e6e9ea;
    border-bottom: 1px solid #e6e9ea;
    padding: 15px;
    font-weight: bold;
    color: #7c878d;
    cursor: pointer;
    min-height: 100px;
}
.calendar .days .day_num span {
    display: inline-flex;
    width: 30px;
    font-size: 14px;
}
.calendar .days .day_num .event {
    margin-top: 10px;
    font-weight: 500;
    font-size: 14px;
    padding: 3px 6px;
    border-radius: 4px;
    background-color: #A16E50;
    color: #fff;
    word-wrap: break-word;
}
.calendar .days .day_num .event.green {
    background-color: #54433A;
	color:#fff;
}
.calendar .days .day_num .event.blue {
    background-color: #54433A;
	color:#fff;

}
.calendar .days .day_num .event.red {
    background-color: #54433A;
	color:#fff;

}
.calendar .days .day_num:nth-child(7n+1) {
    border-left: 1px solid #e6e9ea;
}
.calendar .days .day_num:hover {
    background-color: #fdfdfd;
}
.calendar .days .day_num.ignore {
    background-color: #fdfdfd;
    color: #ced2d4;
    cursor: inherit;
}
.calendar .days .day_num.selected {
    background-color: #f1f2f3;
    cursor: inherit;
}
		</style>
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1><span>SREC CALENDER</span></h1>
	    	</div>
	    </nav>
		<style>
			
			* {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	

}
body {
    background-color: #fff;
    margin: 0;
	
}
.navtop {
    background-color: #FFF;
    height: 60px;
    width: 100%;
    border: 0;
	
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 800px;
    height: 100%;
    alginment:center;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
	font-size:190px:
	
	
}
.navtop div h1 {
    flex: 1;
    font-size: 16px;
    padding: 0;
    margin: 0;
    color: #000;
    font-weight: bold;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c4c8cc;
    font-weight: bold;

}
.navtop div a i {
    padding: 2px 8px 0 0;
	
	
}
.navtop div a:hover {
    color: #ffecb2;
}
.content {
    width: 800px;
    margin: 0 auto;
	
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #ffecb2;
	
}
		</style>
		<div class="content home">
        <?=$calendar1?>
            <?=$calendar2?><?=$calendar3?><?=$calendar4?><?=$calendar5?><?=$calendar6?><?=$calendar7?><?=$calendar8?><?=$calendar9?><?=$calendar10?><?=$calendar11?><?=$calendar12?>
		</div>
	</body>
</html>