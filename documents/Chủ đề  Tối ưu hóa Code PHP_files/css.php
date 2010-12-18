/* bbcode.css */

@charset "UTF-8";

/* CSS Document */



.bbcode_container {

	margin:20px;

	margin-top:5px;

	display:block;

}



.bbcode_container .bbcode_desc {

	margin-bottom:2px;

	font-size:12px;

}



.bbcode_container div.bbcode_code,

.bbcode_container pre.bbcode_code {

	margin:0;

	padding:6px;

	border:1px inset;

	text-align:left;

	overflow:scroll;

	direction:ltr;

	background:#f2f6f8  repeat-x;

	/*height:;*/

	font-size:12px;

}



.bbcode_container code.bbcode_code {

	margin:0;

	text-align:left;

	direction:ltr;

	font-size:12px;

}



.bbcode_container code.bbcode_code code {

	white-space:nowrap;

}



.bbcode_container div.bbcode_quote {

	margin:0 10px;

	margin-bottom: 10px;

	-moz-border-radius: 5px;

	-webkit-border-radius: 5px;

	background: #f2f6f8 none   ;

	border-radius: 5px;

	border: 1px solid #417394;

	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;

	position: relative;

	top: 0;

}



.bbcode_container .bbcode_quote_container {

	background: transparent url(images/misc/quote-left.png) no-repeat  left;

	display:block;

	width: 9px;

	height: 13px;

	position: absolute;

	top: 5;

	left: -9px;

}



.bbcode_quote div.quote_container {

	-moz-border-radius: 5px;

	-webkit-border-radius: 5px;

	padding: 5px 10px 5px 10px;

}



.bbcode_quote .bbcode_postedby img {

	position: relative;

	top: 1px;

}



.bbcode_container div.bbcode_quote.printable {

	background:none;

	border:none;

}



.bbcode_container div.bbcode_quote div.message {

	/*font-style:italic;*/

	padding:8px 0px;

}



/* fix the bug where li's in quotes are floated */

.bbcode_container div.bbcode_quote div.message ol>li, .bbcode_container div.bbcode_quote div.message ul>li{

	float: none;

}



/* from components.css */

.bbcode_postedby {

	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;

}



.bbcode_postedby img {

	margin:0;

} 

.formcontrols .blockrow.texteditor {
	border-top:none;
}

.editor {
	border-top:solid 1px #6b91ab;
}

.editor.quickreply,
.editor.quickedit {
	border-top:none;
}

.editor_controls {
	padding:6px 6px 6px 0;
        _display:none; /* disabling clickable controls for IE6, although the form remains fully-functional, including keyboard-controls: select a word, hit control-b to bold a word in the editor. */
	float:left;
	width:100%;
}

.editor_controls > ul {
	clear:left;
}

.editor_controls > ul.right li > * {
	display:inline;
	float:left;
}

.editor_controls > ul.right {
	float:right;
}
.editor_control_group_item { 	
	margin-right: 5px; 
}
.editor_controls ul.right {
	_float:right;
}

.editor_controls > ul > li {
	background:transparent url(images/editor/separator.gif) no-repeat left;
	padding-left:6px;
	float:left;
	position: relative;
}
.editor_controls li , .editor_controls ul.right li, .editor_controls .popupmenu div.popupctrl {
	_display: inline;
}
.editor_controls > ul > li:first-child {
	background-image:none;
	padding-left:0px;
}

.editor_controls > ul.right > li:first-child {
	background-image:none;
	padding-right:5px;
}

.editor_controls a.popupctrl img,
.popupmenu .popupbody li img {
	vertical-align:middle;
}

.editor_controls a.popupctrl {
	text-decoration:none;
}

.editor_controls .imagebutton {
	padding:1px;
	background-color: transparent;
}

.editor_controls .colorbutton {
	float:left;
	margin:1px;
	border:0;
}

.editor_controls .colorbutton div {
	border:1px solid #ACA899;
	height:10px;
	width:10px;
	margin:2px;
}

.editor_controls .vbedit_colorbutton {
	padding-bottom:4px;
}

.editor_controls .vbedit_colorbar {
	position:absolute;
	background-color:black;
	top:15px;
	left:6px;
}

.formcontrols .blockrow .editor_textbox textarea:focus {
	background-color:rgb(244, 244, 244);
}

.editor_container {
	float:left;
	margin-right:-90px;
	width:100%
}

.editor_smiliebox {
	float:right;
	width:100px;
	height:200px;
	_background-color:rgb(244, 244, 244);
	_border:solid 1px #6b91ab;
	padding:0 3px 3px 3px;
}

.editor_smiliebox .blocksubhead {
	padding:0;
	font-size:12px;
	font-weight:normal;
	text-align:center;
	background:#f2f6f8;
	border:solid 1px #6b91ab;
	border-width:1px 0;
}

.editor_smiliebox ul.smiliebox {
	height:190px;
	overflow:hidden;
}

.editor_smiliebox ul.smiliebox li {
	float:left;
	height:20px;
	width:20px;
	margin:2px;
	overflow:hidden;
	position:relative;
	text-align:center;
}

.editor_smiliebox ul.smiliebox li div.table {
	display:table;
	height:100%;
	margin:auto;
	/* IE8 needs the following, see https://connect.microsoft.com/IE/feedback/ViewFeedback.aspx?FeedbackID=425785#tabs */
	table-layout:fixed;
	width:20px;
}

.editor_smiliebox ul.smiliebox li div.tablecell {
	display:table-cell;
	vertical-align:middle;
}

.editor_smiliebox ul.smiliebox li img {
	height:auto;
	max-width:20px;
	width:auto !important;
}

.editor_smiliebox div.moresmilies {
	text-align:center;
	font-size:12px;
}

.editor_textbox_container {
	width:100%;
	float:left;
	margin-right:-190px;
}

.editor_textbox_smilie {
	margin-right:110px;
}

.editor_textbox textarea,
.editor_textbox iframe {
	width:500px;
	max-width:99%;
	min-width:99%;
	height:200px;
	float:none;
	background-color:rgb(244, 244, 244);
	font:   13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.editor_textbox textarea,
.editor_textbox iframe, #ie8#fix {
	width:99%;
}

.editor_textbox textarea.forum {
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}

.editor_textbox iframe {
	margin:0;
	padding:0;
	height:206px;
}

.editor_textbox .hider {
	background-color:rgb(244, 244, 244);
}

.editor_textbox.quickreply textarea {
	height:100px;
}

.editor_textbox.quickreply iframe {
	height:106px;
}

.editor_textbox .description {
	float:none;
	width:auto;
	margin-top:2px;
}

.editorpopupbody {
	max-height:250px;
	*overflow:auto;
	overflow-y:auto;
	overflow-x:hidden;
}

.popupmenu.sizes .popupbody {
	min-width:50px;
	text-align:center;
}

.popupmenu.colors .popupbody {
	min-width:144px;
}

.editor_controls .popupmenu .popupbody {
	background:#ffffff;
	border: 1px solid #C4C4C4;
}

.editor_controls .category,
.editor_controls .smilie ,
.editor_controls .attachment {
	font-size:12px;
	border-top:none;
	padding:1px;
	position: relative;
}

.editor_controls .smilie,
.editor_controls .attachment,
.editor_controls .attach .category {
	cursor:pointer;
}

.editor_controls .category {
	background:#f2f6f8;
	border:solid 1px #6b91ab;
	border-width:1px 0;
}

.editor_controls .smilie div,
.editor_controls .category div,
.editor_controls .attachment div {
	padding:2px;
	white-space:nowrap;
	overflow:hidden;
}

.editor_controls .fontsize,
.editor_controls .fontname {
	padding:1px;
	border-top:none;
	font-size:14px;
}

.editor_controls .popupmenu .popupbody li > a {
	padding:1px 3px;
	overflow:hidden;
	background:none;
	-moz-border-radius:0;
	-webkit-border-radius:0;
	color:#000000;
}

.editor_controls .popupmenu .popupbody li > a:hover {
	color:#000000;
}

.popupmenu.colors {
	position:relative;
}

.popupmenu.fonts div.popupctrl {
	width:91px;
}

.popupmenu.sizes div.popupctrl {
	width:45px;
}

.editor_controls a.popupctrl {
	border:1px solid #e1e1e1;
	height:18px;
	line-height:17px;
}

.editor_controls .popupmenu div.popupctrl {
	height:18px;
	border:1px solid #e1e1e1;
	color:#000000;
	line-height:17px;
	background-color:#ffffff;
	padding-right:10px;
	background-image:url(images/misc/popupctrl.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding: 1px;
	padding-right: 10px;
}

.popupmenu.imagemenu div.popupctrl, .editor_controls .popupmenu .popupctrl {
	padding:1px;
	padding-right:10px;
	background-color: transparent;
	border:none;
}

.popupmenu.imagemenu div.popupctrl.active {
	padding:0px;
	padding-right:10px;
	margin-right:-1px;
}

.popupmenu.fonts div.popupctrl div,
.popupmenu.sizes div.popupctrl div {
	font-size:12px;
	font-family:tahoma;
	overflow:hidden;
	white-space:nowrap;
	padding:0 3px 0 3px;
	_display:inline;
}

.editor_controls .imagebutton_selected,
.editor_controls .imagebutton_hover,
.editor_controls .imagebutton_down,
.editor_controls a.popupmenu {
	padding:0;
	margin:0;
}

.editor_controls .popupmenu .popupctrl.active,
.editor_controls .popupmenu .popupctrl.imagebutton_hover,
.editor_controls .imagebutton_selected,
.editor_controls .imagebutton_down,
.editor_controls .imagebutton_hover {
	background-color: #C1D2EE;
	border:solid 1px #6B91AB;
	padding: 0;
}

.editor_controls .popupmenu .popupctrl.active {
	padding-right: 10px;
	margin: 0;
}

.editor_controls .popupmenu .popupctrl.imagebutton_hover {
	padding-right: 10px;
	margin-right: -1px;
}

.editor_controls .popupmenu.fonts div.popupctrl.active,
.editor_controls .popupmenu.fonts div.popupctrl.imagebutton_hover,
.editor_controls .popupmenu.sizes div.popupctrl.active,
.editor_controls .popupmenu.sizes div.popupctrl.imagebutton_hover {
	padding: 1px;
	padding-right: 10px;
	margin-right: 0;
}

.editor_controls .popupmenu .popupctrl.active div,
.editor_controls .popupmenu .popupctrl.imagebutton_hover div {
	font-size: 12px;
	font-family: tahoma;
	overflow: hidden;
	white-space: nowrap;
	padding: 0 3px;
	_display: inline;
}

.editor_controls .popupmenu .popupctrl.active,
.editor_controls .popupmenu .popupctrl.imagebutton_hover,
.editor_controls .imagebutton_hover {
	background-color: #C1D2EE;
	border: solid 1px #6B91AB;
	padding: 0;
}

.editor_controls .imagebutton_selected {
	background-color: #F1F6F8;
	border: solid 1px #6B91AB;
	padding: 0;
}

.editor_controls .imagebutton_down {
	background-color: #97B5E2;
	border: solid 1px #6B91AB;
	padding: 0;
}

.editor_controls .popupmenu .popupctrl.active {
	padding-right: 10px;
	margin: 0;
}

.editor_controls .popupmenu .popupctrl.imagebutton_hover {
	padding-right: 10px;
	margin-right: -1px;
}

.editor_controls .popupmenu.fonts div.popupctrl.active,
.editor_controls .popupmenu.fonts div.popupctrl.imagebutton_hover,
.editor_controls .popupmenu.sizes div.popupctrl.active,
.editor_controls .popupmenu.sizes div.popupctrl.imagebutton_hover {
	padding: 1px;
	padding-right: 10px;
	margin-right: 0;
}

.editor_controls .popupmenu .popupctrl.active div,
.editor_controls .popupmenu .popupctrl.imagebutton_hover div {
	font-size: 12px;
	font-family: tahoma;
	overflow: hidden;
	white-space: nowrap;
	padding: 0 3px;
	_display: inline;
}

.editor_controls .imagebutton_disabled {
	opacity:0.4;
	-moz-opacity:0.4;
	filter:alpha(opacity=40);
}

.controlgroup_3 button.imagebutton {
	 display:inline;
	 margin:0;
	 padding:2px;
	 text-align:left;
	 cursor:pointer;
	 border:0px;	 
 }

.popupbody > li:first-child {}

.wysiwyg {
background-color:#f3f7f9;
}

body.wysiwyg {
	margin:0;
	padding:2px;
}

/* Used within the iframe */
.wysiwyg hr.previewbreak {
	color:red;
	background-color:red;
	height:6px;
	border:none;
}

.wysiwyg,
.wysiwyg.content {
	font:    13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.wysiwyg.forum {
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}

.wysiwyg p {
	margin:0;
}

.wysiwyg .inlineimg {
	vertical-align: middle
}

.wysiwyg img.previewthumb {
	max-width:150px;
	max-height:150px;
	height:auto !important;
	width:auto !important;
	width:150px;
	height:150px;
	margin:1px;
}

.wysiwyg ol.decimal li {
	list-style:decimal outside;
}

.wysiwyg ol.upper-roman li {
	list-style:upper-roman outside;
}

.wysiwyg ol.lower-roman li {
	list-style:lower-roman outside;
}

.wysiwyg ol.upper-alpha li {
	list-style:upper-alpha outside;
}

.wysiwyg ol.lower-alpha li {
	list-style:lower-alpha outside;
}

/* IE createStyleSheet() falls over on img.previewthumb.active  */
.wysiwyg img.previewthumbactive {
	border:1px solid red;
	margin:0;
}

.editoroverlay {
	position:relative;
}

.editoroverlay.tableoverlay,
.editoroverlay.videooverlay {
	width:350px;
}

.editoroverlay.uploadoverlay {
	width:445px;
}

.editoroverlay.imageoverlay {
	width:550px;
}

.editoroverlay hr {
	border:solid 1px #6b91ab;
}

.editoroverlay .blockrow {
	background:rgb(255, 255, 255)  bottom repeat-x;
	border:solid 1px #6b91ab;
	margin:10px;
	text-align: left;
}

.editoroverlay .blockrow .group {
	width:72%;
	float:right;
	margin-top:10px;
}

.editoroverlay ul.group li {
	float:left;
	margin-left:10px;
	font-size:12px;
}

.editoroverlay ul.group .textbox {
	margin-top:0;
	width:auto;
	float:none;
}

.editoroverlay ul.group li:first-child {
	margin-left:0;
}

.editoroverlay .cancelbutton {
	position:absolute;
	right:6px;
	top:6px;
	background-color:red;
	color:white;
	font-weight:bold;
	border:1px solid black;
	width:15px;
}

.editoroverlay .cancelbutton:hover {
	background-color:crimson;
}

.editoroverlay input.textbox:focus,
.editoroverlay textarea:focus {
	background-color:rgb(255,255,200);
}

.editoroverlay p.shade {
	font-size:12px;
	margin-bottom:10px;
}

.editoroverlay div.foot {
	text-align:center;
	padding:10px;
	position:relative;
}

.editoroverlay.uploadoverlay div.foot {
	padding-bottom:0;
}

.editoroverlay.videooverlay input.textbox {
	width:95%;
	margin-top:10px;
}

/* Table Overlay */
.editoroverlay.tableoverlay .primary,
.editoroverlay.tableoverlay ul.checkradio.group {
	float:right;
	width:45%;
	margin-top:0;
	margin-bottom:5px;
}

.editoroverlay.tableoverlay ul.group li {
	margin-left:0;
	float:none;
}

/* imageoverlay */

.editoroverlay.imageoverlay .blockrow .fullwidth > label {
	float:left;
	clear:both;
	width:25%;
	overflow:hidden;
	margin-top:10px;
}

.editoroverlay.imageoverlay .textbox {
	margin-top:0;
	width:95%;
}

.editoroverlay.imageoverlay div.imagetarget {
	margin-left:25%;
	border:solid 1px #6b91ab;
	padding:5px;
	font-size:12px;
	background-color:#f2f6f8;
}

.editoroverlay.imageoverlay #imageconfigtarget {
	max-width:100px;
	max-height:100px;
	height:auto !important;
	width:auto !important;
	width:100px;
	height:100px;
}

.editoroverlay.imageoverlay #imageconfigtarget.right {
	float:right;
	margin-left:5px;
}

.editoroverlay.imageoverlay #imageconfigtarget.left {
	float:left;
	margin-right:5px;
}

.editoroverlay.imageoverlay #imageconfigtarget.center {
	display:block;
	margin-left:auto;
	margin-right:auto;
}

.editoroverlay.imageoverlay #imageoverlay_progress {
	display:none;
	position:absolute;
	right:10px;
}

.editoroverlay.uploadoverlay h2 {
	font-size: 123.1%;
	font-weight:bold;
}

.editoroverlay.uploadoverlay p,
.editoroverlay.uploadoverlay h2 {
	margin-bottom:5px;
}

.editoroverlay.uploadoverlay label {
	margin-bottom:2px;
}
.editoroverlay.uploadoverlay input.textbox {
	width:95%;
	margin-bottom:5px;
}
.editor {
	border-top-width: 0px;
}
.postpreview {
	border: 1px solid #B5CCDB ;
	border-top: 0px;
}


.right_editor_button{
	width: 25px;
	float: right;	

}
.right_editor_buttons{
	width: 52px;
	float: right;	
}
 


/* CSS Document */
.popupmenu {
	*z-index:999;
	position: relative;
}

.popupmenu a.popupctrl {
	background-image:url(images/misc/black_downward_arrow.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:15px;
	_padding-right:25px;
}

.popupmenu a.popupctrl.nogadget {
	padding-right:0;
	background-image:none;
}

.popupgroup .popupmenu a.popupctrl {
	font-size:12px;
	padding:2px 4px;
	border: 0;
	background-color:transparent;
	text-decoration:none;
	padding-right:15px;
	margin-left:5px;
}

.popupgroup .popupmenu:hover a.popupctrl {
	border:0;
	background-color:transparent;
}

/* see PopupMenu.set_control_style() */
.popupgroup .popupmenu {
	float:left;
}

.blockfoot .popupctrl {
	text-decoration:none;
	padding:2px 6px;
	padding-right:15px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
}

.blockhead .popupctrl {
	color: #ffffff;
}

.blockhead .popupctrl:hover {
	color: rgb(255, 102, 0);
}
.popupbody {
	background:#e1e1e1 url(images/misc/blog/top-highlight.png) repeat-x  ;
	border:1px solid #c4c4c4; 
	padding:2px;
	position:absolute;
	z-index:1000;
	top:1.5em;
	left:0;
	display:none;
	min-width:200px;
}

.popupmenu:hover ul.popuphover {
	display:block;
}

.popupbody li {
	border-top:solid 1px #e1e1e1;
}

.popupbody > li:first-child {
	border-top:none;
}

.popupbody li > a,
.popupbody li > label {
	display:block;
	color:inherit;
	padding:6.235px 10px;
	background:rgb(255, 255, 255)  bottom repeat-x;
	text-decoration:none;
	text-align:left;
	white-space:nowrap;
	font:   normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}
.blockhead .popupbody li > a {
	color:#3e3e3e;
}

/* vbmenu_hilite and vbmenu_option are for the ajax popup menus (tags) */
.popupbody li > a:hover,
.popupbody li > label:hover,
.popupbody li.vbmenu_hilite > a {
	background-color:#ffe0a3;
	color:#3e3e3e;
}

.popupbody li.vbmenu_hilite, li.vbmenu_option {
	float: none;
	display:list-item;
	width: 100%;
}

.popupbody li.vbmenu_option > a:hover {
	background:rgb(255, 255, 255)  bottom repeat-x;
}

.popupbody li input.searchbox {
	width:180px;
	padding:0px;
	font-size:10pt;
	font-style:italic;
	color:#777777;
}

.popupbody li input.searchbox:focus {
	font-style:normal;
	color:#3e3e3e;
}

.popupbody li.formsubmit {
	text-align:right;
	padding:0px;
	background:transparent;
}

.popupbody li.formsubmit .submitoptions {
	float:left;
	text-align:left;
}

.popupbody li.formsubmit .submitoptions label {
	display:block;
}

.popupbody li.formsubmit.jumptopage > label {
	display:inline;
	background:none;
}

.popupbody li.formsubmit input[type="submit"],
.popupbody li.formsubmit input[type="reset"],
.popupbody li.formsubmit input[type="button"] {
	font:9pt Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding:2px;
	padding-bottom:1px;
}

.popupbody li.formsubmit input[type="submit"]:hover,
.popupbody li.formsubmit input[type="reset"]:hover,
.popupbody li.formsubmit input[type="button"]:hover {
	color:rgb(0, 0, 0);
}

.blockhead .popupmenu,
.blocksubhead .popupmenu {
	display:block;
	float: right;
	clear: left;
	text-transform: none;
}

/* MEMBER ACTION DROP-DOWN */
.memberaction.popupmenu {
	position: relative;
	top: 0;
	display: inline-block;
}
.postdetails .memberaction.popupmenu {
	position: static; /* Opera 10.10 Fix */
}
.memberaction.popupmenu a.popupctrl {
	background: none;
	padding: 0;
}
.memberaction_body.popupbody {
	width: 280px;
	background: rgb(255, 255, 255);
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;	
	-moz-box-shadow: 0px 4px 7px ;
	-webkit-box-shadow: 0px 4px 7px ;
}
.memberaction_body.popupbody li {
	border: none;
	width: 140px;
}
.memberaction_body.popupbody li.left {
	float: left;
	clear: left;
}
.memberaction_body.popupbody li.right {
	float: right;
	clear: right;
}
.memberaction_body.popupbody li img {
        float: left;
        padding: 4px;
        position: relative;
        top: -2px;
}
.memberaction_body.popupbody li > a {
	padding: 4px;
}
.memberaction_body.popupbody hr {
	float: left;
	height: 96px;
	width: 0;
	display: inline;
} 

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align: left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;} 


/* CSS Document */

/*THIS*/

html {
	background: url(styles/xmas/bg.jpg) repeat 0 0;
	
}

/* REVERSE SOME YUI RESET STUFF */
em {}
strong {}

/* BASIC PAGE ELEMENTS */

body {
	width:980px;
	min-width:800px;
	max-width:;
	margin: 0px auto 0px auto;
	font-size:13px;
	color:#3e3e3e;
	line-height:1.230;
}

body a {
	color:rgb(0, 0, 0);
	text-decoration:none;
}
body a:hover,
body a:hover .time,
body a:hover .shade,
body a:hover .understate {
	color:rgb(0, 0, 0);
	text-decoration:underline;
}

body a.understate,
body a .understate {
	color:inherit;
	text-decoration:none;
	*clear:expression(style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

.body_wrapper {
	padding: 10px 20px 10px 20px;
	background: #fafafa none   ;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}

input,
textarea,
button,
select {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.button {
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #a8a8a8;
	color:#424242;
	background:#e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
}

.button:hover {
	background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
	color: #424242;
}
body,
legend {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.shade {
	color:#777777;
}

.time {
	color:#0066a9;
}

.nocss_label {
	display:none;
}

.normal {
	font-size:13px;
	font-weight:normal;
}

/* BLOCK STUFF */

.block {
	background:transparent none   ;
	clear:both;
	padding:0;
	color:;
	font:    ;
}

.block a { color:; }
.block a:hover { color:; }

.blockhead {
	font:  normal 12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color:#ffffff;
	background:#A60000 url(images/gradients/gradient-white-down.png) repeat-x  ;
	_background-image: none;
	padding:4px 10px 4px 10px;
	border:1px solid rgb(102, 102, 102);
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
}

.blockhead h2 {
	font-weight:bold;
}

.blockhead a { color:#ffffff; }
.blockhead a:hover { color:rgb(255, 102, 0); }

.blockhead img {
	margin-bottom: -4px;
}

.blocksubhead {
	font:  normal 12px ;
	color:#3e3e3e;
	background:#179c0b url(images/gradients/subheading-gradient-alpha.png) repeat-x  ;
	padding:4px 10px 4px 10px;
	border-top:1px solid #cecece;
}

.blocksubhead img {
	vertical-align:middle;
}

.blocksubhead a { color:#3e3e3e; text-decoration:none; }
.blocksubhead a:hover { color:#417394; }

.blockhead_info, .blocksubhead_info {
	float:right;
	font-weight:normal;
}

/*.blockhead + */.blockbody { /* not sure why I had this .blockhead + .blockbody selector... need to look out for breakage */
	background:rgb(255, 255, 255) none no-repeat  ;
	padding-left:0px;
	padding-right:0px;
}

.blockrow {
	background:rgb(255, 255, 255) none   ;
	padding:5px 10px 5px 10px;
	border:  ;
	color:;
	font:    ;
}
.blockrow a { color:; }
.blockrow a:hover { color:; }

.blockfoot, .blocksubfoot {
	display:block;
	clear:both;
	background:#ffffff none   ;
	padding:5px 0px 5px 0px;
	border:0  rgb(102, 204, 0);
	color:;
	font:    ;

}
.blockfoot a { color:; }
.blockfoot a:hover { color:; }

.blockfoot,
.blocksubfoot {
	padding:5px 0px 5px 0px;
}

.blocksubfoot {
	text-align:right;
}
/* END BLOCK STUFF */

/* WYSIWYG */
.wysiwyg_block {
	margin-bottom: 10px;
}

.wysiwyg_block .blockrow:first-child {
	background: transparent url(images/gradients/gradient-greytowhite.png) repeat-x top left;
}

.wysiwyg_block iframe.textbox {
	border: 1px solid #6b91ab;
	background: #f3f7f9 none   ;
	padding-bottom: 0;
}

.wysiwyg_block .formcontrols .blockrow {
	border-top: 0;
}

/* CSS TABLE STUFF */
.table { display:table; table-layout:fixed; }
.thead { width:100%; padding:0; }
.tr    { display:table-row; }
.td    { display:table-cell; }

/* PAGINATION LINKS */

.pagination span {
	display: block;
	float: left;
	clear: right;
}

.pagination span a {
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border: 1px solid #cedfeb;
	height: 15.99px;
	padding: 2px 4px;
	margin-left: 1px;
	background:#f2f6f8 none   ;
	text-decoration:none;
	color: #417394;
}

.pagination span a:hover {
	border: 1px solid #417394;
}

.pagination span.prev_next a, .pagination span.first_last a {
	position: relative;
	top: -2px;
}

.pagination span.prev_next a img, .pagination span.first_last a img {
	position: relative;
	display: inline;
	top: 3px;
}
.pagination dt.label {
	display:none;
}

.pagination span.selected a {
	background: #759fbb url(images/buttons/newbtn_middle.png) repeat-x  ;
	color: #ffffff;
	border: 1px solid #417394;
	height: 15.99px;
	font-weight:bold;
	padding: 2px 4px;
	margin-left: 1px;
}

.pagination .separator,
.pagination .elipsis {
	background: none;
	border: 0;
}

.pagination .separator:hover {
	border: 0;
}

.pagination li.jumptopage {
	text-align:center;
}


.pagination span a.popupctrl {
	height: 15.99px;
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-right: 4px;
	padding-left: 18px;
}

.pagination .popupmenu:hover a.popupctrl {
	border: 1px solid #417394;
	color: #3e3e3e;
}

/* TEXT CONTROLS */

.textcontrols a,
a.textcontrol {
	position:relative;
	padding: 3px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	line-height: 1.230;
	text-decoration:none;
	border: 1px solid #a8a8a8;
	color: #424242;
	background:#e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
}

.textcontrols a img,
a.textcontrol img {
	position:absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover img,
a:hover.textcontrol img {
	position: absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover,
a:hover.textcontrol {
	background:#efefef url(images/gradients/generic_button.png) repeat-x  ;
	text-decoration:none;
	color: #417394;
}

.textcontrols a:hover,
a:hover.textcontrol {
	text-decoration:none;
}

.blockhead a.textcontrol {
	float:right;
	font:  bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: -4.5px;
	text-transform: none;
}

.blockhead a.textcontrol:hover {
	color: #417394;
}

/* FORUMJUMP (navpopup) */

.navpopupmenu {
	text-align:right;
	float: right;
	display:block;
	padding: 0;
	padding-top: 3px;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 0;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu a.textcontrol, .navpopupmenu a.popupctrl, .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	text-decoration:none;
	color: #424242;
	border: 1px solid #a8a8a8;
	background: #e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;
	_background-image: none;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.33333333333px 6.66666666667px;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
}

.navpopupmenu a.textcontrol:hover, .navpopupmenu a.popupctrl:hover, .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
        background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
        color: #417394;
        _background-image: none;
}

.navpopupmenu .popupctrl .ctrlcontainer {
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
	white-space:nowrap;
}

.navpopupbody {
	width:auto;
	max-height:350px;
	text-align:left;
	*overflow:auto;
	overflow-y:scroll;
	left:auto;
	right:0;
}

.navpopupbody li {
	overflow:hidden;
}

.navpopupbody li.optionlabel {
	text-align:center;
	font-weight:bold;
}

/**
* Not pretty, but it works...
*/
.navpopupbody .d1  a, option.d1  { text-indent:20px; }
.navpopupbody .d2  a, option.d2  { text-indent:40px; }
.navpopupbody .d3  a, option.d3  { text-indent:60px; }
.navpopupbody .d4  a, option.d4  { text-indent:80px; }
.navpopupbody .d5  a, option.d5  { text-indent:100px; }
.navpopupbody .d6  a, option.d6  { text-indent:120px; }
.navpopupbody .d7  a, option.d7  { text-indent:140px; }
.navpopupbody .d8  a, option.d8  { text-indent:160px; }
.navpopupbody .d9  a, option.d9  { text-indent:180px; }
.navpopupbody .d10 a, option.d10 { text-indent:200px; }
.navpopupbody .d11 a, option.d11 { text-indent:220px; }
.navpopupbody .d12 a, option.d12 { text-indent:240px; }
.navpopupbody .d13 a, option.d13 { text-indent:260px; }
.navpopupbody .d14 a, option.d14 { text-indent:280px; }
.navpopupbody .d15 a, option.d15 { text-indent:300px; }
.navpopupbody .d16 a, option.d16 { text-indent:320px; }
.navpopupbody .d17 a, option.d17 { text-indent:340px; }
.navpopupbody .d18 a, option.d18 { text-indent:360px; }
.navpopupbody .d19 a, option.d19 { text-indent:380px; }
.navpopupbody .d20 a, option.d20 { text-indent:400px; }

/* LEFT / RIGHT DT+DD */

dl.stats.totals {
	float:right;
	padding:5px;
}

dl.stats dt {
	display:inline;
	color:#777777;
}
dl.stats dt:after {
	content:":";
}
dl.stats dd {
	display:inline;
}

/* BLOCK STATS */
dl.statsblock dt {
	display:block;
	float:left;
	clear:left;
	width:25%;
}

dl.statsblock dd {
	display:block;
	float:left;
	margin-left:10px;
}

/* LIGHT-TABS */

dl.tabslight {
	border-bottom:solid 1px #6b91ab;
	padding-left:20px;
	margin-bottom:1em;
	height:23px;
	margin-top:15px;
}

dl.tabslight dt {
	display:none;
}

dl.tabslight dd {
	float:left;
}

dl.tabslight dd a {
	font-size:12px;
	font-weight:bold;
	color:#3e3e3e;
	text-decoration:none;
	text-align:center;

	padding:0 10px;
	min-width:55;
	height:22;
	line-height:22px;
	display:block;

	border:1px solid #6b91ab;
	background-color:#179c0b;

	margin-left:-1;
	margin-bottom:-1;

	-moz-border-radius-topleft:5px;
	-moz-border-radius-topright:11px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-top-right-radius:11px;
}

html>/**/body dl.tabslight dd.selected a,
html>/**/body dl.tabslight dd.selected a:hover {
	position:relative;
	border-bottom: 1px solid transparent;
	background:#f1f3f8 none   ;
}
* dl.tabslight dd.selected a, * dl.tabslight dd.selected a:hover {
	border-bottom: 1px solid transparent;
	background:#f1f3f8 none   ;
}

dl.tabslight dd a:hover {
	color:rgb(0, 0, 0);
	background:#9c0003 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x 0 -4px;
}

/* COLUMN SORT LINKS */

.columnsort a,
.columnsort span {
	display:block;
	text-decoration:none;
	white-space:nowrap;
	text-align: left;
}

.columnsort a:hover {
	background-color:#ffe0a3;
	text-decoration:none;
	color:inherit;
}

tr.columnsort th {
	white-space:nowrap;
}

/* MISC */

div.collapse {
	position:relative;
}

a.collapse {
	float:right;
	right:10px;
	top:20px;
	position:absolute;
}

.blockhead a.collapse {
	top: 10px;
}

#forumrules {
	margin-bottom: 10px;
	border-bottom: 1px solid #c4c4c4;
	border-left: 1px solid #c4c4c4;
	border-right: 1px solid #c4c4c4;
	border-top: 1px solid rgb(255, 255, 255);
	background: rgb(255, 255, 255) url(images/gradients/gradient-greytowhite.png) repeat-x  ;
}

#forumrules ul.youcandoblock {
	float:left;
	width:55%;
	margin-bottom: 10px;
	overflow:hidden;
}

#forumrules ul.bbcodeblock {
	float:right;
	width:42%;
	text-align:right;
	overflow:hidden;
}

#forumrules .rules_link {
	margin-top: 10px;
	width: 42%;
	padding-left: 55%;
}

.errorblock ul.blockrow.error > li {
	border-bottom:solid 1px #cedfeb;
	padding-bottom:10px;
	margin-bottom:10px;
}

.errorblock ul.blockrow.error li:last-child {
	border-bottom:none;
	padding-bottom:0;
	margin-bottom:0;
}

blockquote.preview {
	font:   13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

blockquote.preview.forumcontent {
	font:   13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}

blockquote.preview .bbcode_container div.bbcode_code,
blockquote.preview .bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:auto;
	direction:ltr;
	background:#f2f6f8  repeat-x;
	/*height:;*/
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

blockquote.preview fieldset.postattachlist {
	background:rgb(255, 255, 255)  bottom repeat-x;
	border-top:solid 1px #cedfeb;
	padding-bottom:1em;
}

blockquote.preview .bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #f2f6f8 none   ;
	border-radius: 5px;
	border: 1px solid #417394;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}


blockquote.preview .bbcode_container .bbcode_quote_container {
	background: transparent url(images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

blockquote.preview .bbcode_quote div.quote_container {
	border-top: 1px solid #fafafa;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.attachments {
	border: 1px solid #cecece;
	background: #ececec none   ;
	margin: 20px 30px;
	-moz-border-radius: 5px;
	padding: 5px 10px 5px 10px;
	font-size: 12px;
}

.attachments fieldset {
	margin: 5px 0;
}

.attachments img.inlineimg {
	position: relative;
	top: 2px;
}


blockquote.preview .signature {
	margin-top:1.5em;
	border-top:solid 1px rgb(187,187,187);
	padding-top:0.5em;
}

.commalist li {
	display:inline;
}

.commalist li:after {
	content:",";
}

.commalist li:last-child:after {
	content:"";
}

ul.username li a,
ol.username li a,
a.username {}
.commalist li a.username {
	display:inline;
}


.standard_error {
	max-width:600px;
	margin:0 auto;
	padding:4em 0 6em;
}

a.extlink {
	width:10px;
	height:10px;
	text-indent:-9999px;
	position:absolute;
	margin-left:2px;
	background:transparent url(images/buttons/extlink.png) no-repeat  ;
}

.hidden {
	display:none;
}

/* Auto-clearing of floats */
.floatcontainer:after,
.formcontrols .blockrow:after,
dl.stats:after {
	content:".";
	display:block;
	height:0;
	clear:both;
	visibility:hidden;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:inline-block;
	font-weight:normal;
}
/* IE-Mac hide \*/
* html .floatcontainer,
.formcontrols .blockrow,
dl.stats {
	height:1%;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:block;
}
.floatcontainer.hidden {
	display:none;
}
/* End IE-Mac hide */


/* INLINEMOD */

#inlinemod_formctrls {
	float:right;
}

#inlinemod_formctrls .popupctrl {
	text-decoration:none;
	background: #e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;
	padding-right: 0;
	color: #424242;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	float: left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
}

#inlinemod_formctrls a.popupctrl:hover {
	background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
	color: #417394;
}

#inlinemod_formctrls a.popupctrl span.ctrlcontainer {
	display:inline-block;
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-top: 3.33333333333px;
	padding-right: 5px;
	padding-bottom: 3.33333333333px;
	padding-left: 15px;
	font-size: 12px;
	float: left;
}

#inlinemod_formctrls .popupbody {
	left:auto;
	right:0px;
}


/* FORUM DISABLED */
div.forum_disabled {
	text-align:center;
	color:red;
	background-color:white;
	padding:10px;
	font-size:20px;
}

/**
* UN-RESET
*
* These definitions are designed to undo the effects of YUI Reset, but only when contained within a *.reset element.
* Code is based on YUI Base
*/

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
/**
 * YUI Base
 * @module base
 * @namespace yui-
 * @requires reset, fonts
*/

.restore body {
	/* For breathing room between content and viewport. */
	margin:10px;
}

.restore h1 {
	/* 18px via YUI Fonts CSS foundation. */
	font-size: 138.5%;
}

.restore h2 {
	/* 16px via YUI Fonts CSS foundation. */
	font-size: 123.1%;
}

.restore h3 {
	/* 14px via YUI Fonts CSS foundation. */
	font-size: 108%;
}

.restore h1,
.restore h2,
.restore h3 {
	/* Top & bottom margin based on font size. */
	margin: 1em 0;
}

.restore h1,
.restore h2,
.restore h3,
.restore h4,
.restore h5,
.restore h6,
.restore strong,
.restore dt {
	/* Bringing boldness back to headers and the strong element. */
	font-weight: bold;
}
.restore optgroup {
	font-weight:normal;
}

.restore abbr,
.restore acronym {
	/* Indicating to users that more info is available. */
	border-bottom: 1px dotted #000;
	cursor: help;
}

.restore em {
	/* Bringing italics back to the em element. */
	font-style: italic;
}

.restore del {
	/* Striking deleted phrases. */
	text-decoration: line-through;
}

.restore blockquote,
.restore ul,
.restore ol,
.restore dl {
	/* Giving blockquotes and lists room to breath. */
	margin: 1em;
}

.restore ol,
.restore ul,
.restore dl {
	/* Bringing lists on to the page with breathing room. */
	margin-left: 2em;
}

.restore ol li,
.restore ol.decimal li {
	list-style:decimal outside;
}

.restore ol.upper-roman li {
	list-style:upper-roman outside;
}

.restore ol.lower-roman li {
	list-style:lower-roman outside;
}

.restore ol.upper-alpha li {
	list-style:upper-alpha outside;
}

.restore ol.lower-alpha li {
	list-style:lower-alpha outside;
}

.restore ul li {
	/* Giving UL's LIs generated disc markers. */
	list-style: disc outside;
}

.restore dl dd {
	/* Giving UL's LIs generated numbers. */
	margin-left: 1em;
}

.restore th,
.restore td {
	/* Borders and padding to make the table readable. */
	border: 1px solid #000000;
	padding: 0.5em;
}

.restore th {
	/* Distinguishing table headers from data cells. */
	font-weight: bold;
	text-align: center;
}

.restore caption {
	/* Coordinated margin to match cell's padding. */
	margin-bottom: .5em;
	/* Centered so it doesn't blend in to other content. */
	text-align: center;
}

.restore sup {
	/* to preserve line-height and selector appearance */
	vertical-align: super;
}

.restore sub {
	/* to preserve line-height and selector appearance */
	vertical-align: sub;
}

.restore p,
.restore fieldset,
.restore table,
.restore pre {
	/* So things don't run into each other. */
	margin-bottom: 1em;
}
/* Opera requires 1px of passing to render with contemporary native chrome */
.restore button,
.restore input[type="checkbox"],
.restore input[type="radio"],
.restore input[type="reset"],
.restore input[type="submit"] {
	padding:1px;
}


.unread {
	font-weight:bold;
}

/* Cloud tags */
li.tag {
	display:inline;
	margin-right:5pxpx;
}

li.tag label.mine {
	font-weight:bold;
}

li.tag a {
	text-decoration:none;
}

li.taglevel1 {
	font-size:xx-small;
}

li.taglevel2 {
	font-size:small;
}

li.taglevel3 {
	font-size:medium;
}

li.taglevel4,
li.taglevel5 {
	font-size:large;
}

li.taglevel5 {
	font-weight:bold;
}

li.tag.option {
	padding:10px;
}

/* Tag Controls */
/* Tagging Controls */

#thread_tags_list input#tag_add_input {
	display:block;
	width:90%;
	margin-top:2px;
	margin-bottom:0.5em;
}

#thread_tags_list  .description {
	color:#777777;
}

#thread_tags_list  .actionbuttons {
	text-align:right;
	margin-bottom:1em;
}

#tag_edit_list {
	list-style:none;
	margin:0;
	padding:0;
}

#tag_edit_list li {
	float:left;
	display:block;
	width:100px;
}

#tag_edit_list li.mine {
	font-weight:bold;
}

/* We don't use class="inlineimg" in vB4
img.inlineimg {
	padding:0 10px;
}
*/


/* Social Bookmarks */

#social_bookmarks_list li {
	display:block;
	float:left;
	padding-left:10px;
}

/* Imagereg */
#imagereg {
	vertical-align:middle;
	margin-bottom:5px;
}


#wol_navpopup.navpopupmenu {
	margin-bottom:6px;
}
.navlinks {
	background: #f5f5f5 none   ;
	border-top: 1px solid #e7e7e7;
	padding: 10px 0;
	text-align: center;
	color: #5d5d5d;
	font-size: ;
        margin-top: 20px;
        margin-bottom: 20px;
width:100%;
clear:both;
}

.cleardiv {
	clear:both;
}

#ajax_post_errors {
	position:absolute;
	width:420px;
	z-index:500;
	padding:2px;
	background-color:#FFFFFF;
	-moz-border-radius-topright:5px;
	-moz-border-radius-topleft:5px;
	-webkit-border-top-right-radius:5px;
	-webkit-border-top-left-radius:5px;
}

#ajax_post_errors .blockrow {
	border-bottom:1px solid #efefef;
	border-left:1px solid #efefef;
	border-right:1px solid #efefef;
}
#ajax_post_errors .blockfoot {
	text-align:center;
}

#ajax_post_errors_message ol {
	margin:1em;
	margin-left:2em;
}

#ajax_post_errors_message ol.numeric li,
#ajax_post_errors_message ol li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:decimal;
}

.highlight {
	background: #FFEB90 none repeat-x  ;
}

.clear {
	clear: both;
}

/* Facebook Section */
label#fb_pulishlabel {
	font-size: 12px;
	font-weight: normal;
	margin-right: 10px;
	vertical-align: middle;
}

#fb_likeframe {
	border: none;
	overflow: hidden;
	height: 27px;
	width: 260px;
	vertical-align: text-bottom;
}
#pagetitle #fb_likeframe {
	float: right;
}
.blogbit #fb_likeframe {
	margin-top: 7px;
}

/* Fix for Facebook Connect rtl scrollbar */


#recaptcha_area {
	direction:ltr;
	display:inline;
}

#recaptcha_widget_div {
	float:left;
} 


/* CSS Document */

/**
* CHROME: HEADER, NAVBAR, BREADCRUMB, FOOTER
*/

/*************************************************/
/* HEADER */

.above_body {
	background:#550705 url(styles/xmas/xmas_red.jpg) no-repeat  ;
	_background-image: none;
	margin: 0px 0px 10px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
}

.doc_header {
	_background-image:none;
	border:  ;
	color:#e8e8e8;
	font:normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	position:relative;
	min-height:35px;
	/*padding-bottom:5px;*/
	/*margin-bottom:52px;*/
}
.doc_header a { color:; }
.doc_header a:hover { color:; }
.doc_header hr { display: none; }
.logo-image {
        float: left;
        clear: right;
        min-height: 2em;
        height: auto !important;
        height: 2em;
        padding:    ;
}

.toplinks {
	position:absolute;
	right:20px;
	top:0;
	color:#ffffff;
	font: normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	text-align:right;
}

.toplinks ul.isuser li#fb_headerbox.hidden,
.toplinks ul.nouser li#fb_headerbox.hidden {
	display: none;
}
.toplinks ul.isuser li#fb_headerbox a,
.toplinks ul.nouser li#fb_headerbox a {
	padding-top: 0;
	background: none;
	cursor: pointer;
}
	li#fb_headerbox a#fb_link {
		position: relative;
	}
	li#fb_headerbox a#fb_link #fb_squarepic{
		position:absolute;
		right:-6px;
		top:5px;
		z-index:1;
		border:1px solid #B3CCE7;
		padding:1px;
	}
	li#fb_headerbox a#fb_link #fb_icon{
		position:absolute;
		right:10px;
		top:1px;
		z-index:2;
	}

.toplinks ul.isuser, .toplinks ul.nouser {
	display:block;
	float: right;
	clear: left;
	list-style: none;
}

.toplinks ul.isuser li {
	display:inline;
	position: relative; 
	color: #e8e8e8;
	float: right;
	clear: left;
	padding-right: 10px;
        background:;
}

.toplinks ul.isuser .popupbody li {
	display:block;
	float: none;
	clear: none;
	padding:0;
	margin:0;
}

.toplinks ul.isuser li.welcomelink {
	display: block;
	float: right;
	clear: left;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
}

.toplinks ul.isuser li.logoutlink {
	top: 0;
}

.toplinks ul.isuser li a {
	display: block;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	font-weight:bold;
	color:#ffffff;
}

.toplinks ul.isuser li li a {
	float: none;
	margin-left: 0;
}

.toplinks ul.isuser li.welcomelink a {
	display:inline;
	float: none;
	clear: none;
	margin-left: 0;
}

.toplinks ul.isuser li a:hover {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	background: #9c0003;
	color:rgb(255, 255, 255);
}

.toplinks ul.nouser li {
	display:inline;
}

.toplinks ul.nouser li a {
	float:left;
	clear:right;
	color:#ffffff;
}

.toplinks ul.nouser li a{
	display: block;
	float: right;
	clear: left;
	color:#ffffff;
	position: relative;
	padding: 6px 10px 0 10px;
	background: #9c0003;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	height:20px;
	font-weight:bold;
	font-size:12px;
	margin-right: 10px;
}

.toplinks ul.nouser li a:hover {
	background: #9c0003;
	color:rgb(255, 255, 255);
}

.toplinks ul.isuser li.popupmenu, .toplinks ul.isuser .notifications, .toplinks ul.isuser .nonotifications  {
	color: rgb(0, 0, 0);
	position: relative;
}

.toplinks ul.isuser li.popupmenu ul li {
	position: relative;
	top: 0;
	margin: 0;
	text-align: left;
}

.toplinks ul.isuser .notifications .popupbody {
	background: #9c0003;
	border: 1px solid #9c0003; /* makes it look consistent with the popup background */
}

.toplinks ul.isuser .notifications .popupbody li a{
	color: rgb(0, 0, 0);
	padding: 0 5px;
	font-weight: normal;
	background:rgb(255, 255, 255);
	border-top:1px solid #9c0003; /* makes it look consistent with the popup background */
	/*position: relative;*/
	text-align: left;
	padding-left: 30px;
	line-height: 26px;
}

.toplinks ul.isuser .notifications .popupbody li a span {
	position: absolute;
	line-height: 26px;
	left: 5px;
}

.toplinks ul.isuser .notifications .popupbody li a:hover {
	background:#ffe0a3;
	color: rgb(0, 0, 0);
	text-decoration: underline;
}

.toplinks form {
	min-width: 220px;
	display:block;
	margin-right: 10px;
	text-align: left;
	float: right;
	clear: left;
        _width:30%;
}

.toplinks .logindetails {
	padding: 0 10px;
	text-align: center;
	background: #9c0003;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	height: 26px;
}

.toplinks form input {
	margin: 3px 0 0;
	vertical-align: baseline;
	font-size: 11px;
	padding: 1px;
	border: 0;
}

.toplinks form input.textbox {
	color: #303030;
}

.toplinks form input.default-value {
	color: #828282;
}

.toplinks .remember {
	margin: -3.33333333333px 0 0 20px;
	font-size: 10px;
        color: ;
}

.toplinks .remember input {
	vertical-align: baseline;
}

.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}

.notifications a.popupctrl:link, .notifications a.popupctrl:visited,
.toplinks a:link, .toplinks a:visited {
	color: #ffffff;
	text-decoration:none;
}

.notifications>a:link, .notifications>a:visited {
        /* ie6 hack: broke this rule out on its own: the > selector makes ie6 ignore rule entirely. */
	color: #ffffff;
	text-decoration:none;
}

.notifications > a:hover,
.notifications a.popupctrl:hover {
	color: rgb(255, 255, 255);
}

.notifications {
	font-size:12px;
	color: #ffffff;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
}

.notifications a {
	text-decoration:none;
}

.notifications .popupbody {
	color:rgb(0, 0, 0);
}

.header hr,
.header h2 {
	display:none;
}

/*************************************************/
/* NAVBAR */

.navbar {
	position:relative;
	height:53px;
	background:#550705 none   ;
	margin:10px 0px 0px 0px;
	color:rgb(255, 255, 255);
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	border:0px solid rgb(255, 255, 255);
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
}
.navbar a { color:rgb(255, 255, 255); }
.navbar a:hover { color:rgb(255, 255, 255); }

.navtabs {
	background:#9c0003 url(images/gradients/gradient-white-down-sm.png) repeat-x  ;
	padding: 0px 0px 0px 20px;
	height: 26px;
        _background-image:none;
}

.navtabs li:first-child {
	border-left: 1px solid rgb(51, 51, 51);
}

.navtabs ul {
/*	background: #550705; */
	position:absolute;
	top:26px;
	left:0px;
	width:100%;
        border-top:1px solid rgb(51, 51, 51);
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	margin-right:-80px;
/* This is to fix RTL menu issue under Opera */
	direction:ltr;
}

.navtabs li {
	float:left;
	border-right: 1px solid rgb(51, 51, 51);
}

.navtabs ul li:first-child {
	text-indent: 20px;
	border-left: 0;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}

.navtabs li a {
	height:26px;
	line-height:26px;
	padding:0 10px;
}

.navtabs li a.navtab {
	border-top: 1px solid #e00c1a;
	border-left: 1px solid #e00c1a;
	display:block;
	background:#9c0003 url(images/gradients/gradient-white-down-sm.png) repeat-x  ;
        _background-image:none;
	min-width:60px;
	width:auto !important;
	width:60px;
	_min-width:75px;
	_width:auto !important;
	_width:75px;
	text-align:center;
	color: #ffffff;
	font:  bold 12px Arial, Calibri, Verdana, Geneva, sans-serif;
	text-decoration:none;
	line-height:26px;
}

.navtabs li a.navtab:hover {
	background:#9c0003 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x   0 -4px;
        _background-image:none;
	/*color:rgb(0, 0, 0);*/
	color:#000000;
}

.navtabs li.selected {
	height:26px;
	color:#000000;
}

.navtabs li.selected a.navtab {
	color:#000000;
	background:#9c0003 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x  ;
        _background-image:none;
	position:relative;
	top:-4px;
	padding-top:4px;
	z-index:10;
}
.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	line-height: 26px;
}
.navtabs li.selected li a {
	color:rgb(255, 255, 255);
	padding:2px 5px;
}

.navbar_advanced_search li {
	height: 26px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:rgb(255, 255, 255);
}

.navbar_advanced_search li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs li.selected li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs li.selected .popupbody li > a {
	padding:0px 10px;
	text-indent: 0;
	color: rgb(0, 0, 0);
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border:solid 1px transparent;
	_border: none;
	background:transparent url(images/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/misc/arrow.gif');
	color: rgb(255, 255, 255);
}

.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #9c0003 url(images/misc/arrow.png) right center no-repeat ;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
       _background-image:url('images/misc/arrow.gif');
}

.toplinks .nonotifications a.popupctrl {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: transparent url(images/misc/arrow.png) no-repeat right center;
        _background-image:url('images/misc/arrow.gif');
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active , .toplinks .notifications a.popupctrl.active{
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #9c0003 url(images/misc/arrow.png) no-repeat right center;
        _background-image:url('images/misc/arrow.gif');
}

.toplinks .notifications a.popupctrl:hover {
	padding-top: 3px;
}

.navtabs li.selected li:hover a.popupctrl {
	border-color:#550705;
	background-color:#9c0003;
	text-decoration:none;
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active {
	border-color:#9c0003;
	background-color:#9c0003;
	color:rgb(255, 255, 255);
	text-decoration:none;
}

.navtabs .popupbody {
	border: 1px solid #9c0003;
	background: #9c0003;
	width: auto;
}

.navtabs .popupbody li {
	float:none;
	border-top: 1px solid #9c0003;
}

.navtabs .popupbody li a:hover {
	background-color: #ffe0a3;
}

.nonotifications div.popupbody {
	min-width: 170px;
	width: auto !important;
	width: 170px;
	background: #9c0003;
	border: 1px solid #9c0003;
}

.nonotifications .popupbody p {
	color: rgb(0, 0, 0);
	text-align: left;
	background: rgb(255, 255, 255);
	border-top: 1px solid #9c0003;
	padding: 0;
	text-indent: 5px;
	line-height: 26px;
	display:block;
}

.toplinks .nonotifications .popupbody a {
	background: rgb(255, 255, 255);
	color: rgb(0, 0, 0);
	float: none;
	clear: none;
	padding: 0 5px;
	margin-left: 0;
	text-align: left;
	line-height: 26px;
}

.toplinks .nonotifications .popupbody a:hover {
	background:#ffe0a3;
	color: rgb(0, 0, 0);
	text-decoration: underline;
	padding: 0 5px;
}

.globalsearch {
	position:absolute;
	width:180px;
	right: 20px;
	top: 0px;
	float: right;
	clear: left;
	text-align:right;
	line-height: 1.0em;
	display:block;
}

.navbar_search {
	position:relative;
	width:180px;
	right: -20px;
	display:block;
}

.navbar_search input {
	font-size: 11px;
	vertical-align:middle;
	padding: 1px;
	border:1px solid #5a7f97;
}

.globalsearch .textboxcontainer {
	height: 26px;
	border-left:1px solid rgb(51, 51, 51);
	display:inline-block;
	float: left;
	text-align:center;
}

.globalsearch .textboxcontainer span {
	border-top: 1px solid #e00c1a;
	border-left: 1px solid #e00c1a;
	display: inline-block;
	height: 22px;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 3px;
	margin-bottom: 1px;
	width: 147px;
        _width:140px; /* ie6 hack */
}

.globalsearch input.textbox {
	width: 120px;
}

.toplinks form input.loginbutton {
	font-size: 11px;
	padding: 0 5px;
	background-color:  ;
	border:solid 1px rgb(65,93,141);
}

.globalsearch .buttoncontainer {
	height: 26px;
	border-left:1px solid rgb(51, 51, 51);
	display:inline-block;
	border-right:1px solid rgb(51, 51, 51);
	width: 25px;
	overflow: hidden;
	float: right;
}

.globalsearch .buttoncontainer span{
	border-top: 1px solid #e00c1a;
	border-left: 1px solid #e00c1a;
	height: 23px;
	padding-left: 4px;
	padding-top: 2.5px;
	display:inline-block;
}

.globalsearch .searchbutton {
	border: 0;
	padding: 0;
	width: 22px;
	margin-top: -2px;
	margin-left: -2px;
}

/*************************************************/
/* BREADCRUMB */

.breadcrumb > ul {
	background:transparent url(images/misc/navbit-home.png) left top no-repeat;
	border:none;
}

.breadcrumb .navbit {
	float:left;
	background-image:url(images/misc/navbit-arrow-right.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit:first-child {
	padding-left:0;
}

.breadcrumb .navbit.lastnavbit {
	background: transparent;
}

.breadcrumb .navbit.lastnavbit span {
	float:left;
	background: transparent;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit > a, .breadcrumb .lastnavbit > span {
	display:block;
	padding:2px 4px;
	float:left;
	background-color:transparent;
	border:1px solid transparent;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;	
}

.breadcrumb .navbit a:hover {
	border-color:#cedfeb;
	background-color:rgb(246,248,249);
}

.breadcrumb .navbit a {
	text-decoration:none;
}

.breadcrumb .navbit a.popupctrl {
	background-image:url(images/misc/navbit-arrow-right.png);
	background-position:center center;
	padding:2px 6px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.breadcrumb .navbit a.popupctrl:hover {
	background-color:#ffe0a3;
	color:rgb(0, 0, 0);
}

.breadcrumb hr {
	display:none;
}

/*************************************************/
/* PAGE TITLE */
	
#pagetitle {
	padding:0px 0px 0px 0px;
	clear:both;
	padding-top: 5px;
	background: none   ;
	border:  ;
}
#pagetitle a { color:; }
#pagetitle a:hover { color:; }

#pagetitle h1 {
	color: inherit;
	font-size:14px;
	font-weight:bold;
}

#pagetitle .description {
	color: inherit;
	font-size: 11.05px;
}

/*************************************************/
/* NEW CONTENT LINK */
.newcontent_textcontrol {
	background: #024e2a url(images/buttons/newbtn_middle.png) repeat-x left top;
	_background-image: none;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-box-shadow: 0 3px 8px #dddddd;
	-webkit-box-shadow: 0 3px 8px #dddddd;
	font:   normal 14px Arial, sans-serif;
	color: rgb(255, 255, 255);
	padding: 4px 15px 4px 15px;
	border: 0  ;
	display:block;
	float: left;
	clear: right;
}
.newcontent_textcontrol span {
	font-size:15px;
	font-weight:bold;
	display:inline;
}
.newcontent_textcontrol:hover {
	background: rgb(102, 153, 102) url(images/buttons/newbtn_middle.png) repeat-x left top;
	_background-image: none;
	color: rgb(255, 255, 255);
	text-decoration: none;
}


/*************************************************/
/* FOOTER */

.footer {
	clear:both;
	margin-top:15px;
	text-align:right;
	display:block;
	width: 100%;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	background:#520000 none   ;
	padding:5px 0px 0px 0px;
	border:1px solid #000000;
	color:;
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}
.footer a { color:rgb(255, 255, 255); }
.footer a:hover { color:rgb(255, 255, 255); }


.footer_copyright,
.footer_morecopyright {
	padding-bottom:5px;
	color:rgb(204, 204, 204);
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: 10px;
	text-align:center;
	display:block;
}

.footer_time {
	color:rgb(204, 204, 204);
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding-top:10px;
	text-align:center;
}

.footer_select {
	float:left;
	text-align:left;
	margin-left: 10px;
	margin-top: 0;
}

.footer_links {
	margin-right: 10px;
	margin-top: 2px;
}

.footer_links li {
	display:inline;
	margin-left:5px;
}

.below_body .time {
	color: #3e3e3e;
}

.notices {
	background: #fafafa;
	margin: 5px 0;
}

.notices li {
	background: #ffeb90 none   ;
	font-size: 12px;
	color: #3e3e3e;
	padding:5px 10px;
	margin-bottom:5px;
	-moz-box-shadow: -2px 2px 2px ;
	-webkit-box-shadow: -2px 2px 2px ;
	text-align: left;
	clear:both;
}

/* from components.css */
/* start styles for template: navbar */
/*doesn't seem to be used anywhere
.popup_inline_break {
	color:#262626;
	margin-left:5px;
	font-weight:bold;
	padding:4px 0px;
}*/
.breadcrumb > ul {
	background-image:none;
	padding-left:0px;
}
.breadcrumb .navbithome {
	float: left;
	padding: 3.5px 0;
}
/* end styles for template: navbar */

/*************************************************/
/* ADS GLOBAL */
.ad_global_header {
}
#ad_global_header1 {
        float:left;
        clear:right;
        padding:0 0 0 0;
        margin:0 0 0 0;
}
#ad_global_header2 {
        float:left;
        padding:0 0 0 0;
        margin:0 0 0 0;
}
#ad_global_below_navbar {
        width:100%;
        padding:0 0 0 0;
        margin:0 0 0 0;
}
#ad_global_above_footer {
        width:100%;
        padding:0 0 0 0;
        margin:0 0 0 0;
        text-align:left;
        clear:both;
}
#ad_board_below_whats_going_on {
        width:100%;
        padding:0 0 0 0;
        margin:0 0 0 0;
        text-align:left;
}
#ad_thread_first_post_content {
        float:right;
        margin:0 0 0 0;
}
#ad_thread_last_post_content {
        float:right;
        margin:0 0 0 0;
        z-index: 1000;
}
.google_adsense_footer {
        clear:both;
} 


/* CSS Document */

/* Use border box for form elements */
.formcontrols input,select,textarea {
	box-sizing:border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing:border-box;
}
.formcontrols input.textbox {
	height:25px;
	*height:12px;
}
.formcontrols .blocksubhead {
	font-weight:bold;
}

.vbform .blockhead {
	margin-top:2em;
}

.vbform .blockhead:first-child {
	margin-top:0;
}
.settings_form_top_border {
	border-top: 1px solid #6b91ab;
}
.blockbody.settings_form_border {
	border-right: 1px solid #6b91ab;
	border-left: 1px solid #6b91ab;
	border-bottom: 1px solid #6b91ab;
}
.vbform {
	clear:both;
	width:auto;
	max-width:750px;
	_width:750px;
	margin:0 auto 2em;
}

.formcontrols {
	border-right: 1px solid #6b91ab;
	border-left: 1px solid #6b91ab;
	border-bottom: 1px solid #6b91ab;
}

.formcontrols .blockrow {
	background:rgb(255, 255, 255)  bottom repeat-x;
	border-top:solid 1px #cedfeb;
	padding:10px 5px;
}

/* div.section is needed to resolve IE7 percentage width bug */
.formcontrols .section {
	padding:0 15px;
}

.formcontrols > *:first-child,
.formcontrols .blocksubhead + .blockrow,
.formcontrols .section .blockrow:first-child {
	border-top:none;
}

/* BASIC CONTROL STYLING */

input, textarea, select, button {
	font:  bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	font-weight: normal;
}

.button {
	padding:2px 2px;
}

.button:hover {
	color:#417394;
}

.button[type="reset"]:hover {
	color:#417394;
}

.textbox,
textarea,
select {
	background:rgb(255, 255, 255) none   ;
	border:solid 1px #6b91ab;
	padding:4px 5px;
	outline:0;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.textbox[disabled],
textarea[disabled] {
	font-style:italic;
	color:#777777;
}

.formcontrols .blockrow input.textbox:focus,
.formcontrols .blockrow textarea:focus {
	background: #f2f6f8 none   ;
}

/* INPUT / SELECT / TEXTAREA / GROUP */

form .rightcol {
	display:block;
	margin-left:212px;
	max-width:496px;
	*margin-left:0;
	float:none;
}

.blockbody.formcontrols .blockrow .rightcol * {
	margin-left:0;
	width:auto;
}

.blockbody.formcontrols .blockrow .rightcol .primary {
	width:50%;
}
.blockbody.formcontrols .blockrow .rightcol textarea.primary {
	width:70%;
}
.blockbody.formcontrols .blockrow .rightcol .description {
	width:auto;
}

.formcontrols .blockrow .primary {
	width:248px;
}
.formcontrols .blockrow .primary.full {
	width:496px;
	float:left;
}

.formcontrols .blockrow .group {
	width:100%;
}

.formcontrols .blockrow .group li {
	margin-top:5px;
}
.formcontrols .blockrow .group li:first-child {
	margin-top:0;
}
.formcontrols .blockrow .group .textbox {
	width:248px;
}

.formcontrols .blockrow .primary.center {

}

.formcontrols .blockrow .primary.center img.icon {
	border:1px solid rgb(65,93,141);
}

.formcontrols .blockrow .titleprefix {
	float:left;
	margin-right:0.5em;
}

.formcontrols .blockrow * .group {
	width:auto;
	float:none;
}

.formcontrols .blockrow input.textbox[size] {
	width:auto;
}

.formcontrols .blockrow.texteditor textarea {
	width:500px;
	max-width:98%;
	min-width:98%;
	height:200px;
	float:none;
}

.formcontrols .blockrow.texteditor textarea, #ie8#fix {
	width:98%;
}

.formcontrols .blockrow input.numeric,
.formcontrols .blockrow select.numeric {
	text-align:right;
}

/* LABELS */

.formcontrols .blockrow label,
.formcontrols .blockrow .group.multifield label,
.formcontrols .blockrow .groupoption label {
	display:block;
	margin-bottom:2px;
}

.formcontrols .blockrow label {
	width:212px;
	float:left;
	font-size:13px;

}
.formcontrols .blockrow label.full {
	width:auto;
	float:none;
	font-weight:bold;
}

.formcontrols .blockrow label.floatlabel {
	margin-left: 10px;

}

.formcontrols .blockrow * label {
	/* undoes the above two rules */
	display:block;
	margin-bottom:auto;
	width:auto;
	float:none;
}

.formcontrols .blockrow .group li label,
.formcontrols .blockrow .group dt label {
	width:212px;
	float:left;
}

.formcontrols .blockrow .group.full li label,
.formcontrols .blockrow .group.full dt label {
	width:auto;
}



.formcontrols .blockrow .label {
	margin-bottom:8px;

}

.formcontrols .blockrow.singlecheck label {
	float:left;
}

.formcontrols fieldset.blockrow legend {
	margin:0;
	font-size:13px;
	font-weight:bold;
	padding-bottom:10px\9; /*IE Hack*/
}

/* DESCRIPTIONS */

.formcontrols .blockrow .description {
	color:#777777;
	font-size:12px;
	max-width:496px;
	margin-left:212px;
	overflow:hidden;
	line-height:150%;
	margin-bottom:5px;
}

.formcontrols .blockrow .group.multifield + .description {
	padding-top:1.3em;
}

.formcontrols .blockrow.texteditor .description {
	float:none;
	width:auto;
	margin-top:2px;
}

.formcontrols .blockrow .group.numeric + .description {
	/* descriptions to the right of numeric groups */
}

.formcontrols .blockrow .singledescription {
	display:block;
	clear:left;
	margin-bottom:10px;
}

/* CHECKBOX / RADIO EXCLUSIVE GROUPS */

.formcontrols .blockrow .group.checkradio {
	width:auto;
}

.formcontrols .blockrow .group.checkradio li label {
	float:none;
}

.formcontrols .blockrow .group.checkradio.full {
	width:100%;
}


.formcontrols .blockrow .group.checkradio.partial {
	width:212px;
}

.formcontrols .blockrow .group.checkradio.horizontal {
	height:30px;
}
.formcontrols .blockrow .group.checkradio.horizontal li label {
	float:left;
	padding-right:10px;
}

.formcontrols .blockrow .group.checkradio > li {
	margin-bottom:0.5em; /* maybe questionable */
}

/* MULTI-FIELD GROUPS (dd, mm, yyyy fields etc.) */

.formcontrols .blockrow .group.multifield li {
	float:left;
	margin-right:1em;
	margin-top:0;
}

/* Display multi-field controls vertically */
.formcontrols .blockrow .group.multifield.stacked li {
	float:none;
	margin-top:2px;
}

.formcontrols .blockrow .group.multifield label {
	margin-bottom:2px;
	display:block;
	float:none;
	width:auto;
}

.formcontrols .blockrow .group.multifield select,
.formcontrols .blockrow .group.multifield input.textbox {
	float:none;
}

/* NUMERIC GROUP (rgb color etc.) */

.formcontrols .blockrow .group.numeric {
	width:auto;
	*width:24%;
	max-width:212px;
	margin-right:2%;
}

.formcontrols .blockrow .group.numeric li {
	clear:both;
}

.formcontrols .blockrow .group.numeric label {
	float:left;
	margin-top:1px;
}

.formcontrols .blockrow .group.numeric input.textbox {
	float:right;
	text-align:right;
	margin-left:20px;
	margin-bottom:2px;
}

.formcontrols .blockrow .group.numeric .description {
	clear:both;
	text-align:right;
	margin:auto;
	margin-bottom:0.2em;
}

/* NUMERIC INPUT */

.formcontrols .blockrow input.textbox.numeric {
	text-align:right;
}

/* ACTION BUTTONS */

.formcontrols input.button,
.actionbuttons {
	max-width:100%;
}

.blockfoot.actionbuttons.redirect_button {
	background-color:transparent;
	padding-top:5px;
}
.blockfoot.actionbuttons.redirect_button  .group {
	padding-right: 0px;
}
.actionbuttons .group {
	float:none;
	text-align:right;
	padding-right: 10px;
}

.vbform .actionbuttons .group {
	margin:0 auto;
	width:auto;
	max-width:750px;
}

.actionbuttons .small_text_buttons, .actionbuttons .small_text_buttons input.button {
    padding-left:10px;
    padding-right:10px;
}


.actionbuttons .group .button {
   	cursor:pointer;
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #a8a8a8;
	color:#424242;
	background:#e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;
}

.actionbuttons .group .button:hover {
	background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
	color: #417394;
}

/* *** SPECIAL ITEMS *** */

/* POST ICONS */

.formcontrols .blockrow #posticon_preview {
	width:16px;
	height:16px;
	margin-left:10px;
}

.formcontrols .blockrow.posticons table {
	width:496px;
}

.formcontrols .blockrow.posticons td {
	padding:2px;
}

/* RATING SELECT */

.formcontrols .blockrow select.rating option {
	background-image:url(images/rating/rating-15_3.png);
	background-repeat:no-repeat;
	background-position:left center;
	padding-left:85px
}

/* DEP GROUPS */
.formcontrols .blockrow dl.dep_group dd, .formcontrols .blockrow .dep_group .deps {
	margin-left:1.5em;
	margin-top:0.5em;
	margin-bottom:0.2em;
}

.formcontrols .blockrow dl.dep_group dd dl.dep_group {
	/*margin-top:1em;*/ /* Handles the margin above sub-dependent controls, remove? */
}

input[type="submit"][disabled]#blog_deletebtn:active, input[type="submit"][disabled]#blog_deletebtn {
	color:graytext;
}

/* ATTACH FILES */

.formcontrols .blockrow .group.attachments li {
	margin-bottom:0.5em;
}

.formcontrols .blockrow .group.attachments li img {
	vertical-align:middle;
}

.formcontrols .blockrow .group.attachments li:last-child {
	margin-top:1em;
}

/* Upper / Lower comparison and IM FIELDS (AIM, Skype...) */

.formcontrols .group.upperlower li,
.formcontrols .group.imfields li {
	width:45%;
	padding-bottom:0.3em;
}

.formcontrols .group.upperlower li input.textbox,
.formcontrols .group.imfields li input.textbox,
.formcontrols .group.imfields li select {
	width:100%;
}

.formcontrols .group.imfields li select {
	margin-bottom:-0.3em;
}

/* Group of text controls */
.groupcontrols {
	text-align:right;
	clear:both;	
}

.groupcontrols .textcontrol {
	margin-left:10px;
	margin-top:0;
}

/* Single Button */
.formcontrols .blockrow.singlebutton .button {
}

/* IE7 Float Fix */
.formcontrols .groupoption {
	display:block;
	clear:left;
}

/* DEBUG */
.group.radio,
.group.checkbox {
	background:#f2f6f8 none   ;
}

/* NEWEVENT.php TEMP */
.formcontrols .blockrow .group.checkradio .daycheckboxes li {
	float:left;
	padding-right:1em;
	padding-top:0.5em;
}

/*For the search, not worth creating a new css file*/
.savepreferences {
	float:left;text-align:left;width:49.5%;
}

/* Facebook Stuff */
.formcontrols #fbregbox.blockrow.hidden {
	visibility: hidden;
}

/* Fix for item 37360 */
#tag_list_cell .formcontrols .blockrow .group li label, #tag_list_cell .formcontrols .blockrow .group dt label { width: auto; }
#tag_edit_list li { clear: right; width: auto; margin-right: 10px;}
#tag_list_cell .formcontrols .blockrow .group li { margin-top: 0; }


.config_customize{
	background-color: transparent;
	padding: 0px;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
	overflow: auto;
	overflow-x: hidden;
	overflow-y: auto;
	margin-bottom: 5px;
}

.config_customize_header{
	width: 100%;
	clear: both;
	display: block;
	text-align: left;
	background-color: #666666;
	height: 31px;
}

.config_editlink {
	padding: 0px 20px 3px 20px;
	background-color: #444444;
	border: 1px solid #444444;
	font-weight: bold;
	font-size: 110%;
	color: #C0C0C0;
	height: 25px;
	margin: 3px 10px 3px 0px;
	text-align:center;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-border-radius:  5px;
	cursor:pointer;
	text-shadow: 2px 2px 2px #000000;
}

.config_editlink:hover{
	background-color: #666666;

}
.config_save {
	padding: 0px 20px 3px 20px;
	background-color: #77AA11;
	border: 1px solid #77AA11;
	font-weight: bold;
	font-size: 110%;
	color: #ffffff;
	height: 25px;
	margin: 3px 10px 3px 10px;
	margin: 3px 10px 3px 10px;
	text-align:center;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-border-radius:  5px;
	cursor:pointer;
	text-shadow: 3px 3px 3px #333333;
}

.config_save:hover{
	background-color: #AADD11;

}
.config_customize_pages {
	background-color: transparent;
	color: #222222;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

.config_customize_page {
	background-color: transparent;
	color: #222222;
	display:block;
	padding: 15px;
	width:100%;
	clear:right;
	float:left;
	font-weight: bold;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}


.picker-holder
{
	display:block;
	text-align:center;
	margin:auto;
	top: 20px;
	background-color: #ffffff;
}


.picker{
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#eeeeee,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) ); 
	display:block;
}


.lightgraybackground{
	background-color: #ffffff;
	background: -moz-linear-gradient(#ffffff,#cccccc);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#cccccc) ); 
}


.centerbar
{
	position: absolute;
	width:2px;
	left: 50%;
}

.hbar
{
	height:2px;
	text-align:center;
	display:block;
	width:100%;
	margin-bottom: 4px;
}


.alert_box
{
	text-align:center;
	display:block;
	position:absolute;
	color: #222222;
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border: #000000 2px solid;
	z-index: 10;
}
.alert_box .hd
{
	text-align:center;
	display:none;
	color: #ffffff;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}

.alert_box .bd
{
	color: #222222;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-radius-topleft: 10px;
	-webkit-border-radius-topright: 10px;
}

.alert_box .ft
{
	text-align: right;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
}

.alert_box .ft input.btn {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	float: right;
	font-weight:bold;
}


.ok_button {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	width:80px;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	float: right;
	font-weight:bold;
}

.attach_popup
{
	display: none;
	border: 1px #000000 solid;
	margin: 0px;
	padding: 0px;
	background-color: #aaaaaa;
	-moz-border-radius: 5px;
	border-radius: 5px;
}


.assetpicker_body
{
	display:block;
	width: 100%;
	background-color: #bbbbbb;
	background: -moz-linear-gradient(#ffffff,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) );
	padding: 5px;
}
.transparent
{
	background-color: transparent;

}

.tall_select
{
	height: 30px;
} 

.tabs { margin: 0; padding: 0;}
.tabs { padding-bottom: 26px; margin-bottom: 15px; background: #EFEFEF; border-top: 1px solid #FFF; border-bottom: 1px solid #CAD9EA; }
.tabs li { list-style: none;float: left; line-height: 27px; border-right: 1px solid #CAD9EA; height: 27px; font-size: 11px;cursor:pointer; }
.tabs li.current { background: #F7F7F7; height: 27px; font-weight: bold; }
.mainbox { background: #F7F7F7; border: 1px solid #9DB3C5; padding: 1px;margin:1px;}
.left-mainbox {float:left; width:27%;margin:0px;}
.right-mainbox {width:73%;float:right;margin:0px;}
.topx-content	{
	background: url('vietvbb/topx/listbg.gif') repeat;
	display:block;
	border-top: 0px none;
	padding: 0px;
	line-height: 20px;
	width:100%;
}
.topx-bit	{
	overflow: hidden;
	height: 20px;
	width: 100%; font-size:11.5px;
}
.topx-bit em	{float: right; padding-top: 2px;margin-right:3px;}
.topx-bit span.topx-content-tab	{float: left;margin-left:3px;}
.topx-bit span.topx-content-menu {float: left;margin-left:26px;}
.topx-tip-head	span {padding-left:4px;}
.topx-tip-info	{padding: 4px 6px;} 
#vietvbb_topstats_result	{
	float:right;
	right:30px;
	top:3px;
	position:absolute;
} 