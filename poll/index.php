<?php
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/bans.php');
	require_once ('inc/functions.php');
	loadConfig();
	
	if($config['ban_block']){
		if(!isset($t2)){
			$t1 = explode(" ", microtime())[0];
			checkDNSBL();
			checkBan();
			$t2 = explode(" ", microtime())[0];
		}
		else{
			echo ($t2 - $t1);
		}
	}

?><!doctype html>
<html>
<head>
	<meta charset="utf-8">

        <script type="text/javascript">
	  var
                        active_page = "index"
            , board_name = "poll";
	          </script>

			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js?12"></script>
								<title>/poll/ - polling</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-2.png" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	
        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", 'https://kissu.moe/motd.txt');
                request.onreadystatechange = function() { 
                if (this.readyState === 4 && this.status === 200) {
                        motd = this.responseText;
                        console.log(motd);
                        var request = new XMLHttpRequest(); 
                        localStorage.firstLoad = 3;
                        alert(
                        "<h1>Welcome to kissu.moe!</h1><br/>\
                         <h2>Message Of the Day</h2>\
                        <p><strong>" + motd + "</strong></p>\
                        <h2>Boards</h2>\
                        <ul style='text-align: left;'><li>/qa/ - Random content(NSFW spoilered)</li><li>/b/ - Site Developement</li><li>/megu/ - NSFW content</li></ul>\
                        <h2>Select Default Theme</h2>\
                        Other options are selectable later in options<br/><br/>\
                        <label>Default Theme: <select onchange='$(\"#style-select-\" + $(this).val()).click();'><option value='1'>Light</option><option selected='selected' value='2'>Dark</option><option value='3'>Special</option></select></label><br/>\
                        <h2>Rules</h2>\
                        <p>Don't post obnoxious stuff. Bans are only reserved for the worst cases of people. A deletion does not mean it's personal</p><hr/>\
                        <br/>Contact Vermin for issues, site bugs and feedback</p>\
                        "
                        );

                };

        }
        request.send();
}
</script>


	<header>
	<h1 style="padding-top:10px;">/poll/ - polling</h1>
	<div class="subtitle">
					</div>
	</header>
	<h1 id="pollheader" style="display:none">New poll</h1>

	<div id="topcontainer">
	
	

	<div>
						<form id="pollform" class="form_submit" style="display:none" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none"><input type="text" name="text" value="&#100;&#9902;&#107;&#56;K&#98;ar?&#9933;0G&#43;!&#79;NS:Hh"></div>
<input style="display:none" type="text" value="{g%⛭?⛀DRsj" name="t79vqw2ob6cjgruxs♝☣♷38end♄lz4ykp15m">
<input type="hidden" name="board" value="poll">
<input type="hidden" value="&#42;!Z0{" name="pib0s97u3⛍oq52⚗tkm">
	<input type="hidden" name="page" value="1">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="username" value="&#98;ql5⛵&#87;0&#68; c}7">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" name="⛍zr0y2c9☋ax64psqo⛑k3wbifmt" value="">
			</td>
		</tr>		<tr id="emailrow" style="display:none">
			<th>
				Options				<input type="hidden" name="bzr6a7l♫t3jswci4kd59vfnh" value="">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
								<input style="display:none" type="text" value="&lt;Q3$j_" name="url">
			
			
				<input name="q" value="}J!:Uz/g=$h♗0Xw\9DxK♎PmYvM6]⛠+u⚟B&amp;k ['" type="hidden">
			</td>
		</tr>		<tr id="subjectrow" style="display:table-row">
			<th>
				Subject				<input   type="hidden"   name="7hdpox5wkt6mac3f4lbegn"   value="?_fbKAd&#117;5&lt;&#77;&#9896;&#9976;&#9892;'&#32;wPo&#125;k{⛎m g&amp;7i2">
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
			</td>
		</tr>
		
<tr id="pollrow"><th>Poll Questions</th>
<td id="polldata">
<span><span>Option 1: </span><input type="text" name="pollopt1" id="pollopt1"><br/></span>
<span><span>Option 2: </span><input type="text" name="pollopt2" id="pollopt2"> <input type="button" id="boostcount" onclick="
if(this.previousElementSibling.name=='pollopt2'){
	this.nextElementSibling.removeAttribute('disabled')
}
input_container = this.parentNode.cloneNode(true);
input_container.firstChild.nextElementSibling.id = 'pollopt' + (1 + parseInt(input_container.firstChild.textContent.split(' ')[1].replace(':','')));
input_container.firstChild.nextElementSibling.name = input_container.firstChild.nextSibling.id;
document.getElementById('polldata').appendChild(input_container);
input_container.firstChild.textContent = 'Option ' + (1 + parseInt(input_container.firstChild.textContent.split(' ')[1].replace(':',''))) + ': '; 
document.getElementById('polldata').appendChild(input_container);

this.parentNode.removeChild(this.nextElementSibling);
this.parentNode.removeChild(this);

return false

" value="+"/><input type="button" id="retractcount" onclick="

if(this.previousElementSibling.previousElementSibling.name=='pollopt3'){
	this.setAttribute('disabled','');
}
var next_in_line = this.parentNode.previousSibling;
next_in_line.removeChild(next_in_line.lastChild);
next_in_line.appendChild(this.previousElementSibling.cloneNode());
next_in_line.appendChild(this.cloneNode());
next_in_line.appendChild(document.createElement('br'));
this.parentNode.parentNode.removeChild(this.parentNode);
	
return false
" value="-" disabled/><br/></span></td>
</tr>
<tr id="polloptrow"><th>Poll Options</th><td>
<label><input type="checkbox" name="multisel"> Multi-Choice</label><br/>
<label><input type="number" name="postthresh" style="width:38px" value="0">Min Kissu Posts</label>
<label><input type="number" name="lifespan" style="width:38px" value="24"> Poll life(default 24 hours)</label>

</td></tr>


		<tr>
			<th>
				Comment				<div style="display:none"><input type="text" name="message" value=""></div>
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				
				
			</td>
		</tr>
										
		
		<tr id="additional_clicker"><td colspan="2"><button onclick="
visible = $('tr[id=namerow]').css('display') == 'table-row';
if(!visible){
	$('tr[id=namerow]').css('display', 'table-row');
	$('tr[id=emailrow]').css('display', 'table-row');
	$('tr[id=filerow]').css('display', 'table-row');
	$('input[id=email_submit]').css('display', 'none');
	$('input[id=subject_submit]').css('display', 'table-row');
	$('tr[id=embedrow]').css('display','table-row');
	$('tr[id=advancedoptrow]').css('display', 'table-row');
	$('tr[id=captcharow]').css('display', 'table-row');
	$('tr[id=spoilerrow]').css('display', 'table-row');
        $('tr[id=pswrdrow]').css('display', 'table-row');
this.textContent = '[Remove Hidden Options]';
}
else{
	$('tr[id=namerow]').css('display', 'none');
	$('tr[id=emailrow]').css('display', 'none');
	$('tr[id=filerow]').css('display', 'none');
	$('input[id=subject_submit]').css('display', 'table-row');
	$('input[id=email_submit]').css('display', 'none');
	$('tr[id=embedrow]').css('display','none');
	$('tr[id=advancedoptrow]').css('display', 'none');
	$('tr[id=captcharow]').css('display', 'none');
	$('tr[id=spoilerrow]').css('display', 'none');
	$('tr[id=pswrdrow]').css('display', 'none');
this.textContent = '[View Hidden Options]';
}
return false;
">[View Hidden Options]</a></td></tr>
<tr id="filerow" style="display:none">
			<th>
				File			</th>
			<td>
				<input type="file" name="file" id="upload_file" style="width: 190px;"> 
				<script type="text/javascript">if (typeof init_file_selector !== 'undefined') init_file_selector(1);</script>
<button onclick="
$('input[id=upload_file]').val('');
return false;
" id="remove_img">X</button>
									<div style="float:none;text-align:left" id="upload_url">
						<label for="file_url">Or URL: </label>
						<input style="display:inline" type="text" id="file_url" name="file_url" size="35">
					</div>
								
			</td>
		</tr>

		<tr  style="display:none" id="embedrow">
			<th>
				Video Stream Embedding				
			</th>
			<td>
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
<tr id="advancedoptrow" style="display:none"><th>Advanced Options</th><td>
<label><input type="checkbox" id="force_noko" onchange="
localStorage.AlwaysNoko = this.checked;
if(this.checked == true)
        $('input[id=option_input]').val($('input[id=option_input]').val() + ' noko');
">Always Noko</label>
<label><input type="checkbox" id="force_sage" onchange="
localStorage.AlwaysSage = this.checked;
if(this.checked == true)
	$('input[id=option_input]').val($('input[id=option_input]').val() + ' sage');
">Always Sage</label>

<script>
if(localStorage.AlwaysSage == "true")
        $('input[id=option_input]').val($('input[id=option_input]').val() + ' sage');
$('input[id=force_sage]').prop('checked', localStorage.AlwaysSage == "true");

if(localStorage.AlwaysNoko == "true")
        $('input[id=option_input]').val($('input[id=option_input]').val() + ' noko');
$('input[id=force_noko]').prop('checked', localStorage.AlwaysNoko == "true");

</script>

				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select> 
</td></tr>
<tr id="captcharow"  style="display:none"><th>Captcha Type</th><td>				<span name='captchasel'>
				<label><input type="radio" name="captype" class="rec" value="recaptcha"> Recaptcha </label>
				<label><input type="radio" name="captype" class="cap" value="captchouli"> Captchouli </label>
				</span>
</td>
<tr id="spoilerrow"  style="display:none"><th>Spoiler</th><td> <input id="spoiler" name="spoiler" type="checkbox"> <label for="spoiler">Spoiler Image</label></td></tr>
				<tr id="pswrdrow" style="display: none;" >
			<th>
				Password				
			</th>
			<td >
				<input type="text" name="pswrd" value="" size="12" maxlength="18"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="9607cde239071cfffb3d990b2f79b4757c946afc">
</form>
<div style="text-align:center">
	<input type="button" id="polldisplay" value="Create New Poll" style="font-size: 18px;"/>
</div>
<script type="text/javascript">
	rememberStuff();
	document.getElementById("polldisplay").onclick = function(){
		this.style = "display:none";

		document.getElementById("pollheader").style = "display:block";
		document.getElementById("pollform").style = "display:block";
}
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><h2></h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/poll/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/poll/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="poll" />
		<div class="thread" id="thread_33" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_33" ><p class="intro"><input type="checkbox" class="delete" name="delete_33" id="delete_33" /><label for="delete_33"><span class="subject">zzz</span> <span class="name">Anonymous</span> <time datetime="2019-09-29T19:52:00Z">09/29/19 (Sun) 19:52:00</time></label>&nbsp;<a class="post_no" id="post_no_33" onclick="return highlightReply(33, event)" href="/poll/res/33#33">No.</a><a class="post_no" onclick="return citeReply(33)" href="/poll/res/33#q33">33</a><a href="/poll/res/33">[Reply]</a></p><div class="body"><div data-lifespan='24' class='lolyoucantnestforms'><label><input type='checkbox' name='pollopt' value='0'/>zz</label><br/><label><input type='checkbox' name='pollopt' value='1'/>zzz</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a onclick='return false'><br/>[View Responses]</a></div><hr/>asdc</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_32" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_32" ><p class="intro"><input type="checkbox" class="delete" name="delete_32" id="delete_32" /><label for="delete_32"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:50:05Z">09/29/19 (Sun) 19:50:05</time></label>&nbsp;<a class="post_no" id="post_no_32" onclick="return highlightReply(32, event)" href="/poll/res/32#32">No.</a><a class="post_no" onclick="return citeReply(32)" href="/poll/res/32#q32">32</a><a href="/poll/res/32">[Reply]</a></p><div class="body"><div class='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>345</label><br/><label><input type='radio' name='pollopt' value='1'/>ds</label><br/><label><input type='radio' name='pollopt' value='2'/>g</label><br/><label><input type='radio' name='pollopt' value='3'/>d</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a onclick='return false'><br/>[View Responses]</a></div><hr/>sdsdfg</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_31" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_31" ><p class="intro"><input type="checkbox" class="delete" name="delete_31" id="delete_31" /><label for="delete_31"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:42:25Z">09/29/19 (Sun) 19:42:25</time></label>&nbsp;<a class="post_no" id="post_no_31" onclick="return highlightReply(31, event)" href="/poll/res/31#31">No.</a><a class="post_no" onclick="return citeReply(31)" href="/poll/res/31#q31">31</a><a href="/poll/res/31">[Reply]</a></p><div class="body"><div id='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>3</label><br/><label><input type='radio' name='pollopt' value='1'/>5</label><br/><input type='submit' onclick='return false' value='Make Response'><a onclick='return false'>[View Responses]</a></div><hr/>345z</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_30" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_30" ><p class="intro"><input type="checkbox" class="delete" name="delete_30" id="delete_30" /><label for="delete_30"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:39:55Z">09/29/19 (Sun) 19:39:55</time></label>&nbsp;<a class="post_no" id="post_no_30" onclick="return highlightReply(30, event)" href="/poll/res/30#30">No.</a><a class="post_no" onclick="return citeReply(30)" href="/poll/res/30#q30">30</a><a href="/poll/res/30">[Reply]</a></p><div class="body"><div id='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>asd2</label><br/><label><input type='radio' name='pollopt' value='1'/>as1</label><br/><label><input type='radio' name='pollopt' value='2'/>33</label><br/><input type='submit' onclick='return false' value='Make Response'></div><hr/>asdz</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_29" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_29" ><p class="intro"><input type="checkbox" class="delete" name="delete_29" id="delete_29" /><label for="delete_29"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:38:04Z">09/29/19 (Sun) 19:38:04</time></label>&nbsp;<a class="post_no" id="post_no_29" onclick="return highlightReply(29, event)" href="/poll/res/29#29">No.</a><a class="post_no" onclick="return citeReply(29)" href="/poll/res/29#q29">29</a><a href="/poll/res/29">[Reply]</a></p><div class="body"><form onsubmit='return false'><label><input type='radio' name='pollopt' value='0'/>12</label><br/><label><input type='radio' name='pollopt' value='1'/>21</label><br/><input type='submit' value='Make Response'></form><hr/>ad</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_28" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_28" ><p class="intro"><input type="checkbox" class="delete" name="delete_28" id="delete_28" /><label for="delete_28"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:35:06Z">09/29/19 (Sun) 19:35:06</time></label>&nbsp;<a class="post_no" id="post_no_28" onclick="return highlightReply(28, event)" href="/poll/res/28#28">No.</a><a class="post_no" onclick="return citeReply(28)" href="/poll/res/28#q28">28</a><a href="/poll/res/28">[Reply]</a></p><div class="body"><form onsubmit='return false'><label><input type='radio' name='pollopt' value='0'/>asd2</label><br/><label><input type='radio' name='pollopt' value='1'/>asd1</label><br/><input type='submit' value='Make Response'></form><hr/>asd</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_27" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_27" ><p class="intro"><input type="checkbox" class="delete" name="delete_27" id="delete_27" /><label for="delete_27"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:33:50Z">09/29/19 (Sun) 19:33:50</time></label>&nbsp;<a class="post_no" id="post_no_27" onclick="return highlightReply(27, event)" href="/poll/res/27#27">No.</a><a class="post_no" onclick="return citeReply(27)" href="/poll/res/27#q27">27</a><a href="/poll/res/27">[Reply]</a></p><div class="body"><form onsubmit='return false'><label><input type='radio' name='pollopt' value='0'/>te1</label><br/><label><input type='radio' name='pollopt' value='1'/>tw2</label><br/><input type='submit' value='Make Response'></form><hr/></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_26" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_26" ><p class="intro"><input type="checkbox" class="delete" name="delete_26" id="delete_26" /><label for="delete_26"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:31:27Z">09/29/19 (Sun) 19:31:27</time></label>&nbsp;<a class="post_no" id="post_no_26" onclick="return highlightReply(26, event)" href="/poll/res/26#26">No.</a><a class="post_no" onclick="return citeReply(26)" href="/poll/res/26#q26">26</a><a href="/poll/res/26">[Reply]</a></p><div class="body"><form onpost='return false'><label><input type='radio' name='pollopt' value='0'/>test</label><br/><label><input type='radio' name='pollopt' value='1'/>test</label><br/><input type='submit' value='Make Response'></form><hr/>tetef</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_25" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_25" ><p class="intro"><input type="checkbox" class="delete" name="delete_25" id="delete_25" /><label for="delete_25"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:30:34Z">09/29/19 (Sun) 19:30:34</time></label>&nbsp;<a class="post_no" id="post_no_25" onclick="return highlightReply(25, event)" href="/poll/res/25#25">No.</a><a class="post_no" onclick="return citeReply(25)" href="/poll/res/25#q25">25</a><a href="/poll/res/25">[Reply]</a></p><div class="body"><hr/>tete</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_21" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_21" ><p class="intro"><input type="checkbox" class="delete" name="delete_21" id="delete_21" /><label for="delete_21"><span class="name">Anonymous</span> <time datetime="2019-09-29T18:55:27Z">09/29/19 (Sun) 18:55:27</time></label>&nbsp;<a class="post_no" id="post_no_21" onclick="return highlightReply(21, event)" href="/poll/res/21#21">No.</a><a class="post_no" onclick="return citeReply(21)" href="/poll/res/21#q21">21</a><a href="/poll/res/21">[Reply]</a></p><div class="body"><form><input></form>test</div></div><div class="post reply" id="reply_22"><p class="intro"><input type="checkbox" class="delete" name="delete_22" id="delete_22" /><label for="delete_22"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:03:54Z">09/29/19 (Sun) 19:03:54</time></label>&nbsp;<a class="post_no" id="post_no_22" onclick="return highlightReply(22, event)" href="/poll/res/21#22">No.</a><a class="post_no" onclick="return citeReply(22)" href="/poll/res/21#q22">22</a></p>        <div class="files">    </div>         <div class="body" >te</div></div><br/><div class="post reply" id="reply_23"><p class="intro"><input type="checkbox" class="delete" name="delete_23" id="delete_23" /><label for="delete_23"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:03:57Z">09/29/19 (Sun) 19:03:57</time></label>&nbsp;<a class="post_no" id="post_no_23" onclick="return highlightReply(23, event)" href="/poll/res/21#23">No.</a><a class="post_no" onclick="return citeReply(23)" href="/poll/res/21#q23">23</a></p>        <div class="files">    </div>         <div class="body" >te</div></div><br/><div class="post reply" id="reply_24"><p class="intro"><input type="checkbox" class="delete" name="delete_24" id="delete_24" /><label for="delete_24"><span class="name">Anonymous</span> <time datetime="2019-09-29T19:07:38Z">09/29/19 (Sun) 19:07:38</time></label>&nbsp;<a class="post_no" id="post_no_24" onclick="return highlightReply(24, event)" href="/poll/res/21#24">No.</a><a class="post_no" onclick="return citeReply(24)" href="/poll/res/21#q24">24</a></p>        <div class="files">    </div>         <div class="body" >tr</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_20" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_20" ><p class="intro"><input type="checkbox" class="delete" name="delete_20" id="delete_20" /><label for="delete_20"><span class="name">Anonymous</span> <time datetime="2019-09-29T17:45:25Z">09/29/19 (Sun) 17:45:25</time></label>&nbsp;<a class="post_no" id="post_no_20" onclick="return highlightReply(20, event)" href="/poll/res/20#20">No.</a><a class="post_no" onclick="return citeReply(20)" href="/poll/res/20#q20">20</a><a href="/poll/res/20">[Reply]</a></p><div class="body">asdasd</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_19" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_19" ><p class="intro"><input type="checkbox" class="delete" name="delete_19" id="delete_19" /><label for="delete_19"><span class="name">Anonymous</span> <time datetime="2019-09-29T17:45:13Z">09/29/19 (Sun) 17:45:13</time></label>&nbsp;<a class="post_no" id="post_no_19" onclick="return highlightReply(19, event)" href="/poll/res/19#19">No.</a><a class="post_no" onclick="return citeReply(19)" href="/poll/res/19#q19">19</a><a href="/poll/res/19">[Reply]</a></p><div class="body">tets</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_18" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_18" ><p class="intro"><input type="checkbox" class="delete" name="delete_18" id="delete_18" /><label for="delete_18"><span class="name">Anonymous</span> <time datetime="2019-09-29T17:44:12Z">09/29/19 (Sun) 17:44:12</time></label>&nbsp;<a class="post_no" id="post_no_18" onclick="return highlightReply(18, event)" href="/poll/res/18#18">No.</a><a class="post_no" onclick="return citeReply(18)" href="/poll/res/18#q18">18</a><a href="/poll/res/18">[Reply]</a></p><div class="body">sdfdsf</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_17" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_17" ><p class="intro"><input type="checkbox" class="delete" name="delete_17" id="delete_17" /><label for="delete_17"><span class="name">Anonymous</span> <time datetime="2019-09-29T17:44:04Z">09/29/19 (Sun) 17:44:04</time></label>&nbsp;<a class="post_no" id="post_no_17" onclick="return highlightReply(17, event)" href="/poll/res/17#17">No.</a><a class="post_no" onclick="return citeReply(17)" href="/poll/res/17#q17">17</a><a href="/poll/res/17">[Reply]</a></p><div class="body">yesy</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_16" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_16" ><p class="intro"><input type="checkbox" class="delete" name="delete_16" id="delete_16" /><label for="delete_16"><span class="name">Anonymous</span> <time datetime="2019-09-29T16:10:25Z">09/29/19 (Sun) 16:10:25</time></label>&nbsp;<a class="post_no" id="post_no_16" onclick="return highlightReply(16, event)" href="/poll/res/16#16">No.</a><a class="post_no" onclick="return citeReply(16)" href="/poll/res/16#q16">16</a><a href="/poll/res/16">[Reply]</a></p><div class="body">testzzz</div></div><br class="clear"/><hr/></div>
	<div id="post-moderation-fields">
		<div id="delete-fields">
		Delete Post [<input title="Delete file only" type="checkbox" name="file" id="delete_file" />
				 <label for="delete_file">File</label>] <label for="password">Password</label> 
		<input id="pswrd" type="text" name="pswrd" size="12" maxlength="18" />
<script>document.getElementById("pswrd").value = localStorage.getItem("pswrd");</script>
		<input type="submit" name="delete" value="Delete" />
	</div>
		
	<div id="report-fields">
		<label for="reason">Reason</label> 
		<input id="reason" type="text" name="reason" size="20" maxlength="30" />
		<input type="submit" name="report" value="Report" />
	</div>
</div>
	
	
			<span id="thread-links">
				<a id="thread-return" href="">[Refresh]</a>
				<a id="thread-top" href="#top">[Top]</a>
                							<a id="thread-catalog" href="/poll/catalog">[Catalog]</a>
		                <a id="archive-link-bottom" href="/poll/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>]				 [<a href="/poll/2">2</a>] 		 <form action="/poll/2" method="get"><input type="submit" value="Next" /></form>
					 | <a href="/poll/catalog">Catalog</a>
			</div>
	

	

	<footer>
	<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
		<a href="https://engine.vichan.net/">vichan</a> 5.1.4 
		+ <a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> 0.8.1 -
	<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
	<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel
	<br><a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> Copyleft 2018-2019</p>
		<p class="unimportant" style="text-align:center;">All trademarks, copyrights, comments, and images on this page are owned by and are the responsibility of their respective parties.</p><p class="unimportant" style="text-align:center;">Concerns to the gmail of ECVerniy</p></footer>
	<script type="text/javascript">
		ready();
	</script>
	</div>
</body>
</html>
<?php
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/bans.php');
	require_once ('inc/functions.php');
	loadConfig();
	
	if($config['ban_block']){
		if(!isset($t2)){
			$t1 = explode(" ", microtime())[0];
			checkDNSBL();
			checkBan();
			$t2 = explode(" ", microtime())[0];
		}
		else{
			echo ($t2 - $t1);
		}
	}

?>