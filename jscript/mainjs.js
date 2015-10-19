var player = document.getElementById('audio');
var progressbar = document.getElementById('progressbar');
var currenttime = document.getElementById('currenttime');
var maxtime = document.getElementById('maxtime');

var home = document.getElementById('home');
var act = document.getElementById('act');
var about = document.getElementById('about');
var sett = document.getElementById('sett');
var out = document.getElementById('out');
var contact = document.getElementById('contact');

//var colorheader = document.getElementById('colorheader');
//var headertext = document.getElementById('headertext');
var colorcoding = "rgba(244, 64, 52, 1)";

//colorheader.style.transition = "background .8s";
//headertext.style.transition = "color .8s";

player.src = "audio/bgmusic" + checkAudio();
player.autoplay = "true";
player.loop = "true";
load_home();
updateTime();
setInterval(updateTime, 1000);

function checkAudio(){
	if(!!(player.canPlayType && player.canPlayType('audio/mpeg;').replace(/no/, ''))){
		return ".mp3";
	}
	
	if(!!(player.canPlayType && player.canPlayType('audio/ogg; codecs="vorbis"').replace(/no/, ''))){
		return ".ogg";
	}
	
	if(!!(player.canPlayType && player.canPlayType('audio/wav; codecs="1"').replace(/no/, ''))){
		return ".wav";
	}
	
	return alert("Your Browser does not support any of this audio extension: mp3, wav, ogg.");
}

function updateTime(){
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
	var month = convertMonth(currentTime.getMonth());
	var date = currentTime.getDate();
	var year = currentTime.getFullYear();
	var day = convertDay(currentTime.getDay());
	var ampm;
	
    if (minutes < 10){
        minutes = "0" + minutes
    }
	
	if(hours > 11){
		ampm = " PM";
    } else {
        ampm = " AM";
    }
	
	if(hours > 12){
		hours = hours - 12;
	}
	
    var t_str = hours + ":" + minutes + ampm;
 
    document.getElementById('time').innerHTML = t_str;
	document.getElementById('date').innerHTML = day + " | " + month + " " + date + ", " + year;
}

function convertDay(day){
	switch(day){
		case 0:
			return "Sunday";
		case 1:
			return "Monday";
		case 2:
			return "Tuesday";
		case 3:
			return "Wednesday";
		case 4:
			return "Thursday";
		case 5:
			return "Friday";
		case 6:
			return "Saturday";
	}
}

function convertMonth(monthnum){
	switch(monthnum){
		case 0:
			return "January";
		case 1:
			return "February";
		case 2:
			return "February";
		case 3:
			return "February";
		case 4:
			return "February";
		case 5:
			return "February";
		case 6:
			return "February";
		case 7:
			return "February";
		case 8:
			return "February";
		case 9:
			return "October";
		case 10:
			return "November";
		case 11:
			return "December";
	}
}

function load_out(){
	unload_tabcolors();
	colorcoding = "rgba(121, 85, 72, 1)";
	
	out.style.background = colorcoding;
}

function load_contact(){
	unload_tabcolors();
	document.getElementById("content").innerHTML='<object width="100%" height="100%" type="text/html" data="contact.html" ></object>';

	contact.style.background = colorcoding;
}

function load_about(){
	unload_tabcolors();
	document.getElementById("content").innerHTML='<object width="100%" height="100%" type="text/html" data="about.php" ></object>';

	about.style.background = colorcoding;
}

function load_act(){
	unload_tabcolors();
	document.getElementById("content").innerHTML='<object width="100%" height="100%" type="text/html" data="activity.html" ></object>';

	act.style.background = colorcoding;
}

function load_sett(){
	unload_tabcolors();
	document.getElementById("content").innerHTML='<object width="100%" height="100%" type="text/html" data="settings.php" ></object>';

	sett.style.background = colorcoding;
}		
	
function load_home(){
	unload_tabcolors();
	document.getElementById("content").innerHTML='<object width="100%" height="100%" type="text/html" data="home.php" ></object>';

	home.style.background = colorcoding;
}

function unload_tabcolors(){
	home.style.background = "";
	sett.style.background = "";
	act.style.background = "";
	about.style.background = "";
	contact.style.background = "";
}

function progressHold(){
	player.pause();
	currenttime.innerHTML = progressbar.value;
}

function playmusic(){
	player.play();
}		
		
function pausemusic(){
	player.pause();
}
		
function updateadio(){
	player.currentTime = progressbar.value; 
	currenttime.innerHTML = formatTime(player.currentTime);
	player.play();
}
		
player.addEventListener('timeupdate', function() {
	progressbar.max = player.duration;
	currenttime.innerHTML = formatTime(player.currentTime);
	progressbar.value = player.currentTime;
	maxtime.innerHTML = formatTime(player.duration);
}, false);
		
function formatTime(seconds) {
	minutes = Math.floor(seconds / 60);
	minutes = (minutes >= 10) ? minutes : "" + minutes;
	seconds = Math.floor(seconds % 60);
	seconds = (seconds >= 10) ? seconds : "0" + seconds;
	return minutes + ":" + seconds;
}		