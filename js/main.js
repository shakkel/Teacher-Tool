$(document).ready(function() {
	hidediv('success');
	hidediv('info');
	hidediv('warning');
	hidediv('danger');
	
	$(function() {
		$(window).bind('hashchange', function() {
			hash = window.location.hash.substring(1);
			if(hash=="logout"){
				$.post('func/logout.php', function(data) {
					console.log(data);
					var json = JSON.parse(data);
					if(json.logout == true){
						showsuccess(json.msg,1000);
						setTimeout("location.reload();",1010);
					}else if(json.logout == false){
						showdanger(json.msg,5000);
					}
					window.location.hash = "";
				});
			}
		});		
	$(window).trigger('hashchange');
	});
	
	
    $('#login_form').ajaxForm(function() { 
		var queryString = $('#login_form').formSerialize(); 
		$.post('func/login.php', queryString, function(data) {
			console.log(data);
			var json = JSON.parse(data);
			if(json.login == true){
				showsuccess(json.msg,1000);
				setTimeout("location.reload();",1010);
			}else if(json.login == false){
				showwarning(json.msg,5000);
			}
		});
    }); 
});

function showdiv(id)
{
document.getElementById(id).style.display='block';
}

function hidediv(id)
{
document.getElementById(id).style.display='none';
}	

function showsuccess(text,time) {
		document.getElementById('success').innerHTML="<strong>Success!</strong> "+text;
		showdiv("success");
		setTimeout("document.getElementById('success').innerHTML='Nichts';",time);
		setTimeout("hidediv('success');",time);
}

function showinfo(text,time) {
		document.getElementById('info').innerHTML="<strong>Info!</strong> "+text;
		showdiv("info");
		setTimeout("document.getElementById('info').innerHTML='Nichts';",time);
		setTimeout("hidediv('info');",time);
}

function showwarning(text,time) {
		document.getElementById('warning').innerHTML="<strong>Warning!</strong> "+text;
		showdiv("warning");
		setTimeout("document.getElementById('warning').innerHTML='Nichts';",time);
		setTimeout("hidediv('warning');",time);
}

function showdanger(text,time) {
		document.getElementById('danger').innerHTML="<strong>Danger!</strong> "+text;
		showdiv("danger");
		setTimeout("document.getElementById('danger').innerHTML='Nichts';",time);
		setTimeout("hidediv('danger');",time);
}

function hidelogin()
{
	hidediv("login");
	showdiv("navbar");
	showdiv("page");
}

function loadKlassen()
{
	$.post('func/loadKlassen.php', function(data) {
		var json = JSON.parse(data);
		console.log(json);
		
	});
}

Cookie = {
	get: function (name) {
		var data    = document.cookie.split(";");
		var cookies = {};
		for(var i = 0; i < data.length; ++i) {
			var tmp = data[i].split("=");
			cookies[tmp[0]] = tmp[1];
		}
	
		if (name) {
			return (cookies[name] || null);
		} else {
			return cookies;
		}
	},
	
	set: function (name, value, days) {
		if(days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}else{
			var expires = "";
		}
		document.cookie = name + "=" + value+expires;
	},
	
	del: function (name) {
		document.cookie = name + "= ; Expires=Thu, 01-Jan-1970 00:00:01 GMT";
	}
};