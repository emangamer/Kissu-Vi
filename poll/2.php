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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-19.jpg" alt="" />
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
<input name="⚦34u7b☝hqxwdvkfn♻a65gr1z2isy8" value="" type="hidden" >
<div style="display:none"><input type="text" name="⚂78☋zuox29ewyr" value=""></div>
<input type="hidden" name="board" value="poll">
<textarea   style="display:none"   name="username">VcE@fBr?$AF!(4&gt;5K-P_|8⚜Y*{.J%3]9nUwMaS♞z&amp;\I2kb1 d⚣ 6iC+♓O☮0&lt;[v}#^N,⛳Z⛉yoHG⚷x=XD</textarea>
	<input type="hidden" name="page" value="2">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="W{16o4Nzx⚆vp[+(Fjc9X=Q⛖)" name="url" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value="G?UL5♯oI`wO@4lVu!iAD♚/Z,]c|'sBhmb⛶3821ydJT%&amp;&gt; gS^0+tXEM;vf79_}⚙$~RK#♛q⛕Q-e.W YHP{F⚬♯" name="lastname" >
			</td>
		</tr>		<tr id="emailrow" style="display:none">
			<th>
				Options				
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
								
			
			
				
			</td>
		</tr>		<tr id="subjectrow" style="display:table-row">
			<th>
				Subject				
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
				Comment				
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

<input type="hidden" name="hash" value="1390a77414ac6edf7a7d1ac05aa1b9aeb72ce31e">
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
		<div class="thread" id="thread_15" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569773052565.png">1569773052565.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569773052565.png" target="_blank"><img class="post-image" src="/poll/thumb/1569773052565.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_15" ><p class="intro"><input type="checkbox" class="delete" name="delete_15" id="delete_15" /><label for="delete_15"><span class="name">Anonymous</span> <time datetime="2019-09-29T16:04:12Z">09/29/19 (Sun) 16:04:12</time></label>&nbsp;<a class="post_no" id="post_no_15" onclick="return highlightReply(15, event)" href="/poll/res/15#15">No.</a><a class="post_no" onclick="return citeReply(15)" href="/poll/res/15#q15">15</a><a href="/poll/res/15">[Reply]</a></p><div class="body">test</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_14" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569771621529.png">1569771621529.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569771621529.png" target="_blank"><img class="post-image" src="/poll/thumb/1569771621529.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_14" ><p class="intro"><input type="checkbox" class="delete" name="delete_14" id="delete_14" /><label for="delete_14"><span class="name">Anonymous</span> <time datetime="2019-09-29T15:40:21Z">09/29/19 (Sun) 15:40:21</time></label>&nbsp;<a class="post_no" id="post_no_14" onclick="return highlightReply(14, event)" href="/poll/res/14#14">No.</a><a class="post_no" onclick="return citeReply(14)" href="/poll/res/14#q14">14</a><a href="/poll/res/14">[Reply]</a></p><div class="body">test</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569720868242.png">1569720868242.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569720868242.png" target="_blank"><img class="post-image" src="/poll/thumb/1569720868242.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><span class="name">Anonymous</span> <time datetime="2019-09-29T01:34:28Z">09/29/19 (Sun) 01:34:28</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="return highlightReply(1, event)" href="/poll/res/1#1">No.</a><a class="post_no" onclick="return citeReply(1)" href="/poll/res/1#q1">1</a><a href="/poll/res/1">[Reply]</a></p><div class="body">test</div><span class="omitted">7 posts omitted. Click reply to view.</span></div><div class="post reply" id="reply_9"><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span class="name">Anonymous</span> <time datetime="2019-09-29T06:05:15Z">09/29/19 (Sun) 06:05:15</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="return highlightReply(9, event)" href="/poll/res/1#9">No.</a><a class="post_no" onclick="return citeReply(9)" href="/poll/res/1#q9">9</a></p>        <div class="files">    </div>         <div class="body" >zzzzasdx</div></div><br/><div class="post reply" id="reply_10"><p class="intro"><input type="checkbox" class="delete" name="delete_10" id="delete_10" /><label for="delete_10"><span class="name">Anonymous</span> <time datetime="2019-09-29T06:07:15Z">09/29/19 (Sun) 06:07:15</time></label>&nbsp;<a class="post_no" id="post_no_10" onclick="return highlightReply(10, event)" href="/poll/res/1#10">No.</a><a class="post_no" onclick="return citeReply(10)" href="/poll/res/1#q10">10</a></p>        <div class="files">    </div>         <div class="body" >zxcvzxcvvv</div></div><br/><div class="post reply" id="reply_11"><p class="intro"><input type="checkbox" class="delete" name="delete_11" id="delete_11" /><label for="delete_11"><span class="name">Anonymous</span> <time datetime="2019-09-29T06:07:28Z">09/29/19 (Sun) 06:07:28</time></label>&nbsp;<a class="post_no" id="post_no_11" onclick="return highlightReply(11, event)" href="/poll/res/1#11">No.</a><a class="post_no" onclick="return citeReply(11)" href="/poll/res/1#q11">11</a></p>        <div class="files">    </div>         <div class="body" >zxcvzxcvvvzzzzzzzzzzzzzc</div></div><br/><div class="post reply" id="reply_12"><p class="intro"><input type="checkbox" class="delete" name="delete_12" id="delete_12" /><label for="delete_12"><span class="name">Anonymous</span> <time datetime="2019-09-29T06:12:38Z">09/29/19 (Sun) 06:12:38</time></label>&nbsp;<a class="post_no" id="post_no_12" onclick="return highlightReply(12, event)" href="/poll/res/1#12">No.</a><a class="post_no" onclick="return citeReply(12)" href="/poll/res/1#q12">12</a></p>        <div class="files">    </div>         <div class="body" >zxx</div></div><br/><div class="post reply" id="reply_13"><p class="intro"><input type="checkbox" class="delete" name="delete_13" id="delete_13" /><label for="delete_13"><span class="name">Anonymous</span> <time datetime="2019-09-29T06:12:46Z">09/29/19 (Sun) 06:12:46</time></label>&nbsp;<a class="post_no" id="post_no_13" onclick="return highlightReply(13, event)" href="/poll/res/1#13">No.</a><a class="post_no" onclick="return citeReply(13)" href="/poll/res/1#q13">13</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="return highlightReply('12', event);" href="/poll/res/1#12">&gt;&gt;12</a><br/>zxx</div></div><br/><br class="clear"/><hr/></div>
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
		<form action="/poll/index" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/poll/index">1</a>]				 [<a class="selected">2</a>] 		 Next
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