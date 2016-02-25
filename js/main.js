$(document).ready(function() {
	hidediv('success');
	hidediv('info');
	hidediv('warning');
	hidediv('danger');
	
    
	
	$(function() {
		$(window).bind('hashchange', function() {
			hash = window.location.hash.substring(1);
			page = hash.split("/");
			setTimeout(function(){ $(".edit").click(divClicked); }, 102);
			if(hash=="logout"){
				$.post('func/logout.php', function(data) {
					var json = JSON.parse(data);
					if(json.logout == true){
						showsuccess(json.msg,1000);
						setTimeout("location.reload();",1010);
					}else if(json.logout == false){
						showdanger(json.msg,5000);
					}
					window.location.hash = "";
				});
			}else if(page[0]=="home"){
				site = "page/Home.php?";
				showdiv("klassen");
				hidediv("btn-schueler-li");
				hidediv("btn-anwesenheit-li");
				hidediv("btn-formulare-li");
				hidediv("btn-hausaufgaben-li");
				hidediv("btn-sonstieges-li");
				var html = document.getElementById("l_id").innerHTML;
				setTimeout(function(){ loadUnterricht(html); }, 100);
				loadPg(site);
			}else if(page[0]=="Klassen"){
				site = "page/Klassen.php?Klasse="+page[1]+"&kz_id="+page[2];
				
				
				hidediv("klassen");
				showdiv("btn-schueler-li");
				showdiv("btn-anwesenheit-li");
				showdiv("btn-formulare-li");
				showdiv("btn-hausaufgaben-li");
				showdiv("btn-sonstieges-li");
				
				document.getElementById("btn-schueler-a").href="#Klassen/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-anwesenheit-a").href="#Anwesenheit/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-formulare-a").href="#Formulare/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-hausaufgaben-a").href="#Hausaufgaben/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-sonstieges-a").href="#Sonstieges/"+page[1]+"/"+page[2]+"/";
				
				loadPg(site);
			}else if(page[0]=="Anwesenheit"){
				site = "page/Anwesenheit.php?Klasse="+page[1]+"&kz_id="+page[2];
				
				
				hidediv("klassen");
				showdiv("btn-schueler-li");
				showdiv("btn-anwesenheit-li");
				showdiv("btn-formulare-li");
				showdiv("btn-hausaufgaben-li");
				showdiv("btn-sonstieges-li");
				
				document.getElementById("btn-schueler-a").href="#Klassen/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-anwesenheit-a").href="#Anwesenheit/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-formulare-a").href="#Formulare/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-hausaufgaben-a").href="#Hausaufgaben/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-sonstieges-a").href="#Sonstieges/"+page[1]+"/"+page[2]+"/";
				
				loadPg(site);
			}else if(page[0]=="Formulare"){
				site = "page/Formulare.php?Klasse="+page[1]+"&kz_id="+page[2];
				
				
				hidediv("klassen");
				showdiv("btn-schueler-li");
				showdiv("btn-anwesenheit-li");
				showdiv("btn-formulare-li");
				showdiv("btn-hausaufgaben-li");
				showdiv("btn-sonstieges-li");
				
				document.getElementById("btn-schueler-a").href="#Klassen/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-anwesenheit-a").href="#Anwesenheit/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-formulare-a").href="#Formulare/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-hausaufgaben-a").href="#Hausaufgaben/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-sonstieges-a").href="#Sonstieges/"+page[1]+"/"+page[2]+"/";
				
				loadPg(site);
			}else if(page[0]=="Hausaufgaben"){
				site = "page/Hausaufgaben.php?Klasse="+page[1]+"&kz_id="+page[2];
				
				
				hidediv("klassen");
				showdiv("btn-schueler-li");
				showdiv("btn-anwesenheit-li");
				showdiv("btn-formulare-li");
				showdiv("btn-hausaufgaben-li");
				showdiv("btn-sonstieges-li");
				
				document.getElementById("btn-schueler-a").href="#Klassen/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-anwesenheit-a").href="#Anwesenheit/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-formulare-a").href="#Formulare/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-hausaufgaben-a").href="#Hausaufgaben/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-sonstieges-a").href="#Sonstieges/"+page[1]+"/"+page[2]+"/";
				
				loadPg(site);
			}else if(page[0]=="Sonstieges"){
				site = "page/Sonstieges.php?Klasse="+page[1]+"&kz_id="+page[2];
				
				
				hidediv("klassen");
				showdiv("btn-schueler-li");
				showdiv("btn-anwesenheit-li");
				showdiv("btn-formulare-li");
				showdiv("btn-hausaufgaben-li");
				showdiv("btn-sonstieges-li");
				
				document.getElementById("btn-schueler-a").href="#Klassen/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-anwesenheit-a").href="#Anwesenheit/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-formulare-a").href="#Formulare/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-hausaufgaben-a").href="#Hausaufgaben/"+page[1]+"/"+page[2]+"/";
				document.getElementById("btn-sonstieges-a").href="#Sonstieges/"+page[1]+"/"+page[2]+"/";
				
				loadPg(site);
			}
		});		
	$(window).trigger('hashchange');
	});
	
	
    $('#login_form').ajaxForm(function() { 
		var queryString = $('#login_form').formSerialize(); 
		$.post('func/login.php', queryString, function(data) {
			var json = JSON.parse(data);
			if(json.login == true){
				showsuccess(json.msg,1000);
				window.location.hash = "home";
				setTimeout("location.reload();",1010);
			}else if(json.login == false){
				showwarning(json.msg,5000);
			}
		});
    }); 
});

function loadPg(pg) {
	$.get(pg, function(data) {
			$("#page").html("");
			$("#page").html(data);
	});
}


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
		document.getElementById("1drop").innerHTML="";
		var id = 1;
		jQuery.each(json.Klassen, function(klasse, val) {
				jQuery.each(val, function(kz_id, val2) {
					var html = document.getElementById("1drop").innerHTML;
					if (val2.zph_bezeichnung != undefined)
					{
						document.getElementById("1drop").innerHTML=html+'<li id="1drop'+id+'-l1"><a id="1drop'+id+'-a" data-toggle="tooltip" title="'+val.k_bezeichnung+'" href="#Klassen/'+klasse+'/'+kz_id+'/">'+klasse+' ('+val2.zph_bezeichnung+')</a></li>';
						id++;
					}else{
						
					}
				});
		});

		
		
	});
}

function loadUnterricht (l_id)
{
	$.post('func/loadUnterricht.php?l_id='+l_id, function(data) {
		var json = JSON.parse(data);
		jQuery.each(json, function(fach, val) {
			var fname = val.f_name;
			jQuery.each(val.Item, function(uid, val2) {
				var kz_id = val2.kz_id;
				var r_kuerzel = val2.r_kuerzel;
				var u_tag = val2.u_tag;
				var u_stunde = val2.u_stunde;
				var u_doppelstunde = val2.u_doppelstunde;
				
				document.getElementById(u_tag+"-"+u_stunde).innerHTML=fname+" | "+r_kuerzel;
				if (u_doppelstunde == 1)
				{
					u_stunde++;
					document.getElementById(u_tag+"-"+u_stunde).innerHTML=fname+" | "+r_kuerzel;
				}
			});
		});
	});
}

function loadNotizen (typ,l_id)
{
	$.post('func/loadNotizen.php?l_id='+l_id+'&typ='+typ, function(data) {
		var json = JSON.parse(data);
		var no_text = json.no_text;
		var no_fremd_id = json.no_fremd_id;
		
		document.getElementById("Notizen-"+typ+"-"+no_fremd_id).innerHTML = no_text;
			
		console.log(json);
	});
}

function editNotizen (no_text,l_id)
{
	$.post('func/editNotizen.php?l_id='+l_id+'&no_text='+no_text, function(data) {
		
		var json = JSON.parse(data);
		var no_text = json.no_text;
		var no_fremd_id = json.no_fremd_id;
		
		document.getElementById("Notizen-"+typ+"-"+no_fremd_id).innerHTML = no_text;
			
		console.log(json);
	});
	
}

function divClicked() {
    var divHtml = $(this).prev('div').html();
	var typ = $(this).prev('div').data("typ");
    var editableText = $("<textarea id='"+typ+"' data-typ='"+typ+"' />");
    editableText.val(divHtml);
    $(this).prev('div').replaceWith(editableText);
    editableText.focus();
	alert(typ);
    // setup the blur event for this new textarea
    editableText.blur(editableTextBlurred);
}

function editableTextBlurred() {
    var html = $(this).val();
	var typ = $(this).data("typ");
    var viewableText = $("<div id='"+typ+"' data-typ='"+typ+"' >");
    viewableText.html(html);
    $(this).replaceWith(viewableText);
	alert(typ);
    // setup the click event for this new div
    viewableText.click(divClicked);
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