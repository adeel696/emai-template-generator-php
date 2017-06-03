<style>/*!
 * Start Bootstrap - Shop Homepage HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
.slide-image {
    width: 100%;
}

.mainDIV
{
	position:relative;
}
.carousel-holder {
    margin-bottom: 30px;
}

.carousel-control,
.item {
    border-radius: 4px;
}

.caption {
    height: 130px;
    overflow: hidden;
}

.caption h4 {
    white-space: nowrap;
}

.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}

footer {
    margin: 50px 0;
}

#DivContentArea
{
	height:600px;
	overflow:auto;
}

.content_full
{
	
	min-height:400px;
	max-width:800px;
	width:800px;
	height:auto;
	background-color:#FFF;
}

.content_left
{
	float:left;
	
	min-height:600px;
	max-width:500px;
	width:500px;
	height:auto;
	background-color:#FFF;
}
.content_right
{
	
	min-height:600px;
	max-width:300px;
	width:300px;
	height:auto;
	background-color:#FFF;
}

#editBar
{
	position:static;
	height:auto;
	overflow:auto;
}

.editor {
	min-height: 25px;
	height: auto;
	overflow: auto;
	background-color: white;
	background-color : transparent;
	border-collapse: separate; 
}
.editorTab {
	min-height: 100px;
	max-height: 100px;
	overflow: auto;
	background-color: white;
	background-color : transparent;
	border-collapse: separate; 
}
.divider
{

	max-width:100%;
	min-width:800px;
	background-color: white;
	border-collapse: separate; 
	resize: both;
	background-color : transparent;
}

.btnEditor {
	height: auto;
	overflow: auto;
	background-color: white;
	border-collapse: separate; 
	background-color : transparent;
}

.editor:hover,.btnEditor:hover,.editorIt:hover,.divider:hover { 
	 
}
.droparea {
	color: #aaa;
    height: auto;
    min-height: 200px;
    max-height: 200px;
	background-color : transparent;
}
.droparea:hover, .dropareaIt:hover { 
	 
}
.txtBtnDiv {
	color: #aaa;
    height: 400px;
	background-color : transparent;
}
.editorImgtxtBtn {
	height: 365px;
	max-height: 365px;
	overflow: auto;
	background-color: white;
	border-collapse: separate; 
	background-color : transparent;
}
.btnEditortxtBtn {
	height: 35px;
	overflow: auto;
	background-color : transparent;
	border-collapse: separate; 
	background-color : transparent;
}

.dropareaIt {
	color: #aaa;
    height: 400px;
    width:50%;
	background-color : transparent;
	float:left;
	overflow: auto;
	width:400px;
	float:left;
}
.editorIt {
	height: 400px;
	max-height: 400px;
	overflow: auto;
	background-color: white;
	border-collapse: separate; 
	background-color : transparent;
}
.deleteItem:hover,.editItem:hover
{
	cursor:hand;
}


/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
.row.content {height: 700px;}

/* Set gray background color and 100% height */
.sidenav {
  background-color: #f1f1f1;
  height: 100%;
}

/* Set black background color, white text and some padding */
footer {
  background-color: #555;
  color: white;
  padding: 15px;
}

/* On small screens, set height to 'auto' for sidenav and grid */
@media screen and (max-width: 767px) {
  .sidenav {
	height: auto;
	padding: 15px;
  }
  .row.content {height: auto;} 
}


[contentEditable=true]:empty:not(:focus):before{
	content:attr(data-text)
}

.delEdit
{
	background-color:#2A3F00;
	
	position:absolute;
	top: 0px;
	right: 0px;
	display:none;
	border-radius:5px;
}
.delEdit a:hover
{
	text-decoration:none;
}
.TButton
{
	border: 1px solid #bac3ca;
	border-bottom-color: #929ba2;
	border-top-color: #c5ced5;
	border-radius: 3px;
	color: #6b7a8a;
	display: inline-block;
	font-size: 13px;
	height: 86px;
	line-height: 9.9;
	position: static;
	text-align: center;
	width: 86px;
	z-index: 11;
	font-weight:bold;
}

.SButton
{
	border: 1px solid #bac3ca;
	border-bottom-color: #929ba2;
	border-top-color: #c5ced5;
	border-radius: 3px;
	color: #6b7a8a;
	display: inline-block;
	font-size: 13px;
	height: 86px;
	line-height: 9.9;
	position: static;
	text-align: center;
	width: 86px;
	z-index: 11;
	font-weight:bold;
}

div.SButton:hover{
	cursor: pointer; cursor: hand;
	border: 1px solid #bac3ca;
	border-bottom-color: #929ba2;
	border-top-color: #c5ced5;
	border-radius: 6px;
	background-color:#0CF;
	color:#FFF;
	z-index: 11;
}


div.TButton:hover{
	cursor: pointer; cursor: hand;
	border: 1px solid #bac3ca;
	border-bottom-color: #929ba2;
	border-top-color: #c5ced5;
	border-radius: 6px;
	background-color:#0CF;
	color:#FFF;
	z-index: 11;
}
#drag {
	width: 100%;
	height: auto;
	border: 1px solid #bac3ca;
	border-bottom-color: #929ba2;
	border-top-color: #c5ced5;
	border-radius: 3px;
	color: #6b7a8a;
	display: inline-block;
	cursor: pointer; cursor: hand;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

html{
font-family:sans-serif;
-webkit-text-size-adjust:100%;
-ms-text-size-adjust:100%
}
body{
margin:0
}
article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{
display:block
}
audio,canvas,progress,video{
display:inline-block;
vertical-align:baseline
}
audio:not([controls]){
display:none;
height:0
}
[hidden],template{
display:none
}
a{
background-color:transparent
}
a:active,a:hover{
outline:0
}
abbr[title]{
border-bottom:1px dotted
}
b,strong{
font-weight:700
}
dfn{
font-style:italic
}
h1{
margin:.67em 0;
font-size:2em
}
mark{
color:#000;
background:#ff0
}
small{
font-size:80%
}
sub,sup{
position:relative;
font-size:75%;
line-height:0;
vertical-align:baseline
}
sup{
top:-.5em
}
sub{
bottom:-.25em
}
img{
border:0
}
svg:not(:root){
overflow:hidden
}
figure{
margin:1em 40px
}
hr{
height:0;
-webkit-box-sizing:content-box;
-moz-box-sizing:content-box;
box-sizing:content-box
}
pre{
overflow:auto
}
code,kbd,pre,samp{
font-family:monospace,monospace;
font-size:1em
}
button,input,optgroup,select,textarea{
margin:0;
font:inherit;
color:inherit
}
button{
overflow:visible
}
button,select{
text-transform:none
}
button,html input[type=button],input[type=reset],input[type=submit]{
-webkit-appearance:button;
cursor:pointer
}
button[disabled],html input[disabled]{
cursor:default
}
button::-moz-focus-inner,input::-moz-focus-inner{
padding:0;
border:0
}
input{
line-height:normal
}
input[type=checkbox],input[type=radio]{
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
padding:0
}
input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{
height:auto
}
input[type=search]{
-webkit-box-sizing:content-box;
-moz-box-sizing:content-box;
box-sizing:content-box;
-webkit-appearance:textfield
}
input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{
-webkit-appearance:none
}
fieldset{
padding:.35em .625em .75em;
margin:0 2px;
border:1px solid silver
}
legend{
padding:0;
border:0
}
textarea{
overflow:auto
}
optgroup{
font-weight:700
}
table{
border-spacing:0;
border-collapse:collapse
}
td,th{
padding:0
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{
*,:after,:before{
color:#000!important;
text-shadow:none!important;
background:0 0!important;
-webkit-box-shadow:none!important;
box-shadow:none!important
}
a,a:visited{
text-decoration:underline
}
a[href]:after{
content:" (" attr(href) ")"
}
abbr[title]:after{
content:" (" attr(title) ")"
}
a[href^="javascript:"]:after,a[href^="#"]:after{
content:""
}
blockquote,pre{
border:1px solid #999;
page-break-inside:avoid
}
thead{
display:table-header-group
}
img,tr{
page-break-inside:avoid
}
img{
max-width:100%!important
}
h2,h3,p{
orphans:3;
widows:3
}
h2,h3{
page-break-after:avoid
}
.navbar{
display:none
}
.btn>.caret,.dropup>.btn>.caret{
border-top-color:#000!important
}
.label{
border:1px solid #000
}
.table{
border-collapse:collapse!important
}
.table td,.table th{
background-color:#fff!important
}
.table-bordered td,.table-bordered th{
border:1px solid #ddd!important
}

}
@font-face{
font-family:'Glyphicons Halflings';
src:url(../fonts/glyphicons-halflings-regular.eot);
src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
}
.glyphicon{
position:relative;
top:1px;
display:inline-block;
font-family:'Glyphicons Halflings';
font-style:normal;
font-weight:400;
line-height:1;
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale
}
.glyphicon-asterisk:before{
content:"\2a"
}
.glyphicon-plus:before{
content:"\2b"
}
.glyphicon-eur:before,.glyphicon-euro:before{
content:"\20ac"
}
.glyphicon-minus:before{
content:"\2212"
}
.glyphicon-cloud:before{
content:"\2601"
}
.glyphicon-envelope:before{
content:"\2709"
}
.glyphicon-pencil:before{
content:"\270f"
}
.glyphicon-glass:before{
content:"\e001"
}
.glyphicon-music:before{
content:"\e002"
}
.glyphicon-search:before{
content:"\e003"
}
.glyphicon-heart:before{
content:"\e005"
}
.glyphicon-star:before{
content:"\e006"
}
.glyphicon-star-empty:before{
content:"\e007"
}
.glyphicon-user:before{
content:"\e008"
}
.glyphicon-film:before{
content:"\e009"
}
.glyphicon-th-large:before{
content:"\e010"
}
.glyphicon-th:before{
content:"\e011"
}
.glyphicon-th-list:before{
content:"\e012"
}
.glyphicon-ok:before{
content:"\e013"
}
.glyphicon-remove:before{
content:"\e014"
}
.glyphicon-zoom-in:before{
content:"\e015"
}
.glyphicon-zoom-out:before{
content:"\e016"
}
.glyphicon-off:before{
content:"\e017"
}
.glyphicon-signal:before{
content:"\e018"
}
.glyphicon-cog:before{
content:"\e019"
}
.glyphicon-trash:before{
content:"\e020"
}
.glyphicon-home:before{
content:"\e021"
}
.glyphicon-file:before{
content:"\e022"
}
.glyphicon-time:before{
content:"\e023"
}
.glyphicon-road:before{
content:"\e024"
}
.glyphicon-download-alt:before{
content:"\e025"
}
.glyphicon-download:before{
content:"\e026"
}
.glyphicon-upload:before{
content:"\e027"
}
.glyphicon-inbox:before{
content:"\e028"
}
.glyphicon-play-circle:before{
content:"\e029"
}
.glyphicon-repeat:before{
content:"\e030"
}
.glyphicon-refresh:before{
content:"\e031"
}
.glyphicon-list-alt:before{
content:"\e032"
}
.glyphicon-lock:before{
content:"\e033"
}
.glyphicon-flag:before{
content:"\e034"
}
.glyphicon-headphones:before{
content:"\e035"
}
.glyphicon-volume-off:before{
content:"\e036"
}
.glyphicon-volume-down:before{
content:"\e037"
}
.glyphicon-volume-up:before{
content:"\e038"
}
.glyphicon-qrcode:before{
content:"\e039"
}
.glyphicon-barcode:before{
content:"\e040"
}
.glyphicon-tag:before{
content:"\e041"
}
.glyphicon-tags:before{
content:"\e042"
}
.glyphicon-book:before{
content:"\e043"
}
.glyphicon-bookmark:before{
content:"\e044"
}
.glyphicon-print:before{
content:"\e045"
}
.glyphicon-camera:before{
content:"\e046"
}
.glyphicon-font:before{
content:"\e047"
}
.glyphicon-bold:before{
content:"\e048"
}
.glyphicon-italic:before{
content:"\e049"
}
.glyphicon-text-height:before{
content:"\e050"
}
.glyphicon-text-width:before{
content:"\e051"
}
.glyphicon-align-left:before{
content:"\e052"
}
.glyphicon-align-center:before{
content:"\e053"
}
.glyphicon-align-right:before{
content:"\e054"
}
.glyphicon-align-justify:before{
content:"\e055"
}
.glyphicon-list:before{
content:"\e056"
}
.glyphicon-indent-left:before{
content:"\e057"
}
.glyphicon-indent-right:before{
content:"\e058"
}
.glyphicon-facetime-video:before{
content:"\e059"
}
.glyphicon-picture:before{
content:"\e060"
}
.glyphicon-map-marker:before{
content:"\e062"
}
.glyphicon-adjust:before{
content:"\e063"
}
.glyphicon-tint:before{
content:"\e064"
}
.glyphicon-edit:before{
content:"\e065"
}
.glyphicon-share:before{
content:"\e066"
}
.glyphicon-check:before{
content:"\e067"
}
.glyphicon-move:before{
content:"\e068"
}
.glyphicon-step-backward:before{
content:"\e069"
}
.glyphicon-fast-backward:before{
content:"\e070"
}
.glyphicon-backward:before{
content:"\e071"
}
.glyphicon-play:before{
content:"\e072"
}
.glyphicon-pause:before{
content:"\e073"
}
.glyphicon-stop:before{
content:"\e074"
}
.glyphicon-forward:before{
content:"\e075"
}
.glyphicon-fast-forward:before{
content:"\e076"
}
.glyphicon-step-forward:before{
content:"\e077"
}
.glyphicon-eject:before{
content:"\e078"
}
.glyphicon-chevron-left:before{
content:"\e079"
}
.glyphicon-chevron-right:before{
content:"\e080"
}
.glyphicon-plus-sign:before{
content:"\e081"
}
.glyphicon-minus-sign:before{
content:"\e082"
}
.glyphicon-remove-sign:before{
content:"\e083"
}
.glyphicon-ok-sign:before{
content:"\e084"
}
.glyphicon-question-sign:before{
content:"\e085"
}
.glyphicon-info-sign:before{
content:"\e086"
}
.glyphicon-screenshot:before{
content:"\e087"
}
.glyphicon-remove-circle:before{
content:"\e088"
}
.glyphicon-ok-circle:before{
content:"\e089"
}
.glyphicon-ban-circle:before{
content:"\e090"
}
.glyphicon-arrow-left:before{
content:"\e091"
}
.glyphicon-arrow-right:before{
content:"\e092"
}
.glyphicon-arrow-up:before{
content:"\e093"
}
.glyphicon-arrow-down:before{
content:"\e094"
}
.glyphicon-share-alt:before{
content:"\e095"
}
.glyphicon-resize-full:before{
content:"\e096"
}
.glyphicon-resize-small:before{
content:"\e097"
}
.glyphicon-exclamation-sign:before{
content:"\e101"
}
.glyphicon-gift:before{
content:"\e102"
}
.glyphicon-leaf:before{
content:"\e103"
}
.glyphicon-fire:before{
content:"\e104"
}
.glyphicon-eye-open:before{
content:"\e105"
}
.glyphicon-eye-close:before{
content:"\e106"
}
.glyphicon-warning-sign:before{
content:"\e107"
}
.glyphicon-plane:before{
content:"\e108"
}
.glyphicon-calendar:before{
content:"\e109"
}
.glyphicon-random:before{
content:"\e110"
}
.glyphicon-comment:before{
content:"\e111"
}
.glyphicon-magnet:before{
content:"\e112"
}
.glyphicon-chevron-up:before{
content:"\e113"
}
.glyphicon-chevron-down:before{
content:"\e114"
}
.glyphicon-retweet:before{
content:"\e115"
}
.glyphicon-shopping-cart:before{
content:"\e116"
}
.glyphicon-folder-close:before{
content:"\e117"
}
.glyphicon-folder-open:before{
content:"\e118"
}
.glyphicon-resize-vertical:before{
content:"\e119"
}
.glyphicon-resize-horizontal:before{
content:"\e120"
}
.glyphicon-hdd:before{
content:"\e121"
}
.glyphicon-bullhorn:before{
content:"\e122"
}
.glyphicon-bell:before{
content:"\e123"
}
.glyphicon-certificate:before{
content:"\e124"
}
.glyphicon-thumbs-up:before{
content:"\e125"
}
.glyphicon-thumbs-down:before{
content:"\e126"
}
.glyphicon-hand-right:before{
content:"\e127"
}
.glyphicon-hand-left:before{
content:"\e128"
}
.glyphicon-hand-up:before{
content:"\e129"
}
.glyphicon-hand-down:before{
content:"\e130"
}
.glyphicon-circle-arrow-right:before{
content:"\e131"
}
.glyphicon-circle-arrow-left:before{
content:"\e132"
}
.glyphicon-circle-arrow-up:before{
content:"\e133"
}
.glyphicon-circle-arrow-down:before{
content:"\e134"
}
.glyphicon-globe:before{
content:"\e135"
}
.glyphicon-wrench:before{
content:"\e136"
}
.glyphicon-tasks:before{
content:"\e137"
}
.glyphicon-filter:before{
content:"\e138"
}
.glyphicon-briefcase:before{
content:"\e139"
}
.glyphicon-fullscreen:before{
content:"\e140"
}
.glyphicon-dashboard:before{
content:"\e141"
}
.glyphicon-paperclip:before{
content:"\e142"
}
.glyphicon-heart-empty:before{
content:"\e143"
}
.glyphicon-link:before{
content:"\e144"
}
.glyphicon-phone:before{
content:"\e145"
}
.glyphicon-pushpin:before{
content:"\e146"
}
.glyphicon-usd:before{
content:"\e148"
}
.glyphicon-gbp:before{
content:"\e149"
}
.glyphicon-sort:before{
content:"\e150"
}
.glyphicon-sort-by-alphabet:before{
content:"\e151"
}
.glyphicon-sort-by-alphabet-alt:before{
content:"\e152"
}
.glyphicon-sort-by-order:before{
content:"\e153"
}
.glyphicon-sort-by-order-alt:before{
content:"\e154"
}
.glyphicon-sort-by-attributes:before{
content:"\e155"
}
.glyphicon-sort-by-attributes-alt:before{
content:"\e156"
}
.glyphicon-unchecked:before{
content:"\e157"
}
.glyphicon-expand:before{
content:"\e158"
}
.glyphicon-collapse-down:before{
content:"\e159"
}
.glyphicon-collapse-up:before{
content:"\e160"
}
.glyphicon-log-in:before{
content:"\e161"
}
.glyphicon-flash:before{
content:"\e162"
}
.glyphicon-log-out:before{
content:"\e163"
}
.glyphicon-new-window:before{
content:"\e164"
}
.glyphicon-record:before{
content:"\e165"
}
.glyphicon-save:before{
content:"\e166"
}


.glyphicon-open:before{
content:"\e167"
}
.glyphicon-saved:before{
content:"\e168"
}
.glyphicon-import:before{
content:"\e169"
}
.glyphicon-export:before{
content:"\e170"
}
.glyphicon-send:before{
content:"\e171"
}
.glyphicon-floppy-disk:before{
content:"\e172"
}
.glyphicon-floppy-saved:before{
content:"\e173"
}
.glyphicon-floppy-remove:before{
content:"\e174"
}
.glyphicon-floppy-save:before{
content:"\e175"
}
.glyphicon-floppy-open:before{
content:"\e176"
}
.glyphicon-credit-card:before{
content:"\e177"
}
.glyphicon-transfer:before{
content:"\e178"
}
.glyphicon-cutlery:before{
content:"\e179"
}
.glyphicon-header:before{
content:"\e180"
}
.glyphicon-compressed:before{
content:"\e181"
}
.glyphicon-earphone:before{
content:"\e182"
}
.glyphicon-phone-alt:before{
content:"\e183"
}
.glyphicon-tower:before{
content:"\e184"
}
.glyphicon-stats:before{
content:"\e185"
}
.glyphicon-sd-video:before{
content:"\e186"
}
.glyphicon-hd-video:before{
content:"\e187"
}
.glyphicon-subtitles:before{
content:"\e188"
}
.glyphicon-sound-stereo:before{
content:"\e189"
}
.glyphicon-sound-dolby:before{
content:"\e190"
}
.glyphicon-sound-5-1:before{
content:"\e191"
}
.glyphicon-sound-6-1:before{
content:"\e192"
}
.glyphicon-sound-7-1:before{
content:"\e193"
}
.glyphicon-copyright-mark:before{
content:"\e194"
}
.glyphicon-registration-mark:before{
content:"\e195"
}
.glyphicon-cloud-download:before{
content:"\e197"
}
.glyphicon-cloud-upload:before{
content:"\e198"
}
.glyphicon-tree-conifer:before{
content:"\e199"
}
.glyphicon-tree-deciduous:before{
content:"\e200"
}
.glyphicon-cd:before{
content:"\e201"
}
.glyphicon-save-file:before{
content:"\e202"
}
.glyphicon-open-file:before{
content:"\e203"
}
.glyphicon-level-up:before{
content:"\e204"
}
.glyphicon-copy:before{
content:"\e205"
}
.glyphicon-paste:before{
content:"\e206"
}
.glyphicon-alert:before{
content:"\e209"
}
.glyphicon-equalizer:before{
content:"\e210"
}
.glyphicon-king:before{
content:"\e211"
}
.glyphicon-queen:before{
content:"\e212"
}
.glyphicon-pawn:before{
content:"\e213"
}
.glyphicon-bishop:before{
content:"\e214"
}
.glyphicon-knight:before{
content:"\e215"
}
.glyphicon-baby-formula:before{
content:"\e216"
}
.glyphicon-tent:before{
content:"\26fa"
}
.glyphicon-blackboard:before{
content:"\e218"
}
.glyphicon-bed:before{
content:"\e219"
}
.glyphicon-apple:before{
content:"\f8ff"
}
.glyphicon-erase:before{
content:"\e221"
}
.glyphicon-hourglass:before{
content:"\231b"
}
.glyphicon-lamp:before{
content:"\e223"
}
.glyphicon-duplicate:before{
content:"\e224"
}
.glyphicon-piggy-bank:before{
content:"\e225"
}
.glyphicon-scissors:before{

content:"\e226"
}
.glyphicon-bitcoin:before{
content:"\e227"
}
.glyphicon-btc:before{
content:"\e227"
}
.glyphicon-xbt:before{
content:"\e227"
}
.glyphicon-yen:before{
content:"\00a5"
}
.glyphicon-jpy:before{
content:"\00a5"
}
.glyphicon-ruble:before{
content:"\20bd"
}
.glyphicon-rub:before{
content:"\20bd"
}
.glyphicon-scale:before{
content:"\e230"
}
.glyphicon-ice-lolly:before{
content:"\e231"
}
.glyphicon-ice-lolly-tasted:before{
content:"\e232"
}
.glyphicon-education:before{
content:"\e233"
}
.glyphicon-option-horizontal:before{
content:"\e234"
}
.glyphicon-option-vertical:before{
content:"\e235"
}
.glyphicon-menu-hamburger:before{
content:"\e236"
}
.glyphicon-modal-window:before{
content:"\e237"
}
.glyphicon-oil:before{
content:"\e238"
}
.glyphicon-grain:before{
content:"\e239"
}
.glyphicon-sunglasses:before{
content:"\e240"
}
.glyphicon-text-size:before{
content:"\e241"
}
.glyphicon-text-color:before{
content:"\e242"
}
.glyphicon-text-background:before{
content:"\e243"
}
.glyphicon-object-align-top:before{
content:"\e244"
}
.glyphicon-object-align-bottom:before{
content:"\e245"
}
.glyphicon-object-align-horizontal:before{
content:"\e246"
}
.glyphicon-object-align-left:before{
content:"\e247"
}
.glyphicon-object-align-vertical:before{
content:"\e248"
}
.glyphicon-object-align-right:before{
content:"\e249"
}
.glyphicon-triangle-right:before{
content:"\e250"
}
.glyphicon-triangle-left:before{
content:"\e251"
}
.glyphicon-triangle-bottom:before{
content:"\e252"
}
.glyphicon-triangle-top:before{
content:"\e253"
}
.glyphicon-console:before{
content:"\e254"
}
.glyphicon-superscript:before{
content:"\e255"
}
.glyphicon-subscript:before{
content:"\e256"
}
.glyphicon-menu-left:before{
content:"\e257"
}
.glyphicon-menu-right:before{
content:"\e258"
}
.glyphicon-menu-down:before{
content:"\e259"
}
.glyphicon-menu-up:before{
content:"\e260"
}
*{
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box
}
:after,:before{
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box
}
html{
font-size:10px;
-webkit-tap-highlight-color:rgba(0,0,0,0)
}
body{
font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
font-size:14px;
line-height:1.42857143;
color:#333;
background-color:#fff
}
button,input,select,textarea{
font-family:inherit;
font-size:inherit;
line-height:inherit
}
a{
color:#337ab7;
text-decoration:none
}
a:focus,a:hover{
color:#23527c;
text-decoration:underline
}
a:focus{
outline:thin dotted;
outline:5px auto -webkit-focus-ring-color;
outline-offset:-2px
}
figure{
margin:0
}
img{
vertical-align:middle
}
.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{
display:block;
max-width:100%;
height:auto
}
.img-rounded{
border-radius:6px
}
.img-thumbnail{
display:inline-block;
max-width:100%;
height:auto;
padding:4px;
line-height:1.42857143;
background-color:#fff;
border:1px solid #ddd;
border-radius:4px;
-webkit-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}
.img-circle{
border-radius:50%
}
hr{
margin-top:20px;
margin-bottom:20px;
border:0;
border-top:1px solid #eee
}
.sr-only{
position:absolute;
width:1px;
height:1px;
padding:0;
margin:-1px;
overflow:hidden;
clip:rect(0,0,0,0);
border:0
}
.sr-only-focusable:active,.sr-only-focusable:focus{
position:static;
width:auto;
height:auto;
margin:0;
overflow:visible;
clip:auto
}
[role=button]{
cursor:pointer
}
.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{
font-family:inherit;
font-weight:500;
line-height:1.1;
color:inherit
}
.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{
font-weight:400;
line-height:1;
color:#777
}
.h1,.h2,.h3,h1,h2,h3{
margin-top:20px;
margin-bottom:10px
}
.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{
font-size:65%
}
.h4,.h5,.h6,h4,h5,h6{
margin-top:10px;
margin-bottom:10px
}
.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{
font-size:75%
}
.h1,h1{
font-size:36px
}
.h2,h2{
font-size:30px
}
.h3,h3{
font-size:24px
}
.h4,h4{
font-size:18px
}
.h5,h5{
font-size:14px
}
.h6,h6{
font-size:12px
}
p{
margin:0 0 10px
}
.lead{
margin-bottom:20px;
font-size:16px;
font-weight:300;
line-height:1.4
}
@media (min-width:768px){
.lead{
font-size:21px
}

}
.small,small{
font-size:85%
}
.mark,mark{
padding:.2em;
background-color:#fcf8e3
}
.text-left{
text-align:left
}
.text-right{
text-align:right
}
.text-center{
text-align:center
}
.text-justify{
text-align:justify
}
.text-nowrap{
white-space:nowrap
}
.text-lowercase{
text-transform:lowercase
}
.text-uppercase{
text-transform:uppercase
}
.text-capitalize{
text-transform:capitalize
}
.text-muted{
color:#777
}
.text-primary{
color:#337ab7
}
a.text-primary:focus,a.text-primary:hover{
color:#286090
}
.text-success{
color:#3c763d
}
a.text-success:focus,a.text-success:hover{
color:#2b542c
}
.text-info{
color:#31708f
}
a.text-info:focus,a.text-info:hover{
color:#245269
}
.text-warning{
color:#8a6d3b
}
a.text-warning:focus,a.text-warning:hover{
color:#66512c
}
.text-danger{
color:#a94442
}
a.text-danger:focus,a.text-danger:hover{
color:#843534
}
.bg-primary{
color:#fff;
background-color:#337ab7
}
a.bg-primary:focus,a.bg-primary:hover{
background-color:#286090
}
.bg-success{
background-color:#dff0d8
}
a.bg-success:focus,a.bg-success:hover{
background-color:#c1e2b3
}
.bg-info{
background-color:#d9edf7
}
a.bg-info:focus,a.bg-info:hover{
background-color:#afd9ee
}
.bg-warning{
background-color:#fcf8e3
}
a.bg-warning:focus,a.bg-warning:hover{
background-color:#f7ecb5
}
.bg-danger{
background-color:#f2dede
}
a.bg-danger:focus,a.bg-danger:hover{
background-color:#e4b9b9
}
.page-header{
padding-bottom:9px;
margin:40px 0 20px;
border-bottom:1px solid #eee
}
ol,ul{
margin-top:0;
margin-bottom:10px
}
ol ol,ol ul,ul ol,ul ul{
margin-bottom:0
}
.list-unstyled{
padding-left:0;
list-style:none
}
.list-inline{
padding-left:0;
margin-left:-5px;
list-style:none
}
.list-inline>li{
display:inline-block;
padding-right:5px;
padding-left:5px
}
dl{
margin-top:0;
margin-bottom:20px
}
dd,dt{
line-height:1.42857143
}
dt{
font-weight:700
}
dd{
margin-left:0
}
@media (min-width:768px){
.dl-horizontal dt{
float:left;
width:160px;
overflow:hidden;
clear:left;
text-align:right;
text-overflow:ellipsis;
white-space:nowrap
}
.dl-horizontal dd{
margin-left:180px
}

}
abbr[data-original-title],abbr[title]{
cursor:help;
border-bottom:1px dotted #777
}
.initialism{
font-size:90%;
text-transform:uppercase
}
blockquote{
padding:10px 20px;
margin:0 0 20px;
font-size:17.5px;
border-left:5px solid #eee
}
blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{
margin-bottom:0
}
blockquote .small,blockquote footer,blockquote small{
display:block;
font-size:80%;
line-height:1.42857143;
color:#777
}
blockquote .small:before,blockquote footer:before,blockquote small:before{
content:'\2014 \00A0'
}
.blockquote-reverse,blockquote.pull-right{
padding-right:15px;
padding-left:0;
text-align:right;
border-right:5px solid #eee;
border-left:0
}
.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{
content:''
}
.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{
content:'\00A0 \2014'
}
address{
margin-bottom:20px;
font-style:normal;
line-height:1.42857143
}
code,kbd,pre,samp{
font-family:Menlo,Monaco,Consolas,"Courier New",monospace
}
code{
padding:2px 4px;
font-size:90%;
color:#c7254e;
background-color:#f9f2f4;
border-radius:4px
}
kbd{
padding:2px 4px;
font-size:90%;
color:#fff;
background-color:#333;
border-radius:3px;
-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);
box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)
}
kbd kbd{
padding:0;
font-size:100%;
font-weight:700;
-webkit-box-shadow:none;
box-shadow:none
}
pre{
display:block;
padding:9.5px;
margin:0 0 10px;
font-size:13px;
line-height:1.42857143;
color:#333;
word-break:break-all;
word-wrap:break-word;
background-color:#f5f5f5;
border:1px solid #ccc;
border-radius:4px
}
pre code{
padding:0;
font-size:inherit;
color:inherit;
white-space:pre-wrap;
background-color:transparent;
border-radius:0
}
.pre-scrollable{
max-height:340px;
overflow-y:scroll
}
.container{
padding-right:15px;
padding-left:15px;
margin-right:auto;
margin-left:auto
}
@media (min-width:768px){
.container{
width:750px
}

}
@media (min-width:992px){
.container{
width:970px
}

}
@media (min-width:1200px){
.container{
width:1170px
}

}
.container-fluid{
padding-right:15px;
padding-left:15px;
margin-right:auto;
margin-left:auto
}
.row{
margin-right:-15px;
margin-left:-15px
}
.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{
position:relative;
min-height:1px;
padding-right:15px;
padding-left:15px
}
.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{
float:left
}
.col-xs-12{
width:100%
}
.col-xs-11{
width:91.66666667%
}
.col-xs-10{
width:83.33333333%
}
.col-xs-9{
width:75%
}
.col-xs-8{
width:66.66666667%
}
.col-xs-7{
width:58.33333333%
}
.col-xs-6{
width:50%
}
.col-xs-5{
width:41.66666667%
}
.col-xs-4{
width:33.33333333%
}
.col-xs-3{
width:25%
}
.col-xs-2{
width:16.66666667%
}
.col-xs-1{
width:8.33333333%
}
.col-xs-pull-12{
right:100%
}
.col-xs-pull-11{
right:91.66666667%
}
.col-xs-pull-10{
right:83.33333333%
}
.col-xs-pull-9{
right:75%
}
.col-xs-pull-8{
right:66.66666667%
}
.col-xs-pull-7{
right:58.33333333%
}
.col-xs-pull-6{
right:50%
}
.col-xs-pull-5{
right:41.66666667%
}
.col-xs-pull-4{
right:33.33333333%
}
.col-xs-pull-3{
right:25%
}
.col-xs-pull-2{
right:16.66666667%
}
.col-xs-pull-1{
right:8.33333333%
}
.col-xs-pull-0{
right:auto
}
.col-xs-push-12{
left:100%
}
.col-xs-push-11{
left:91.66666667%
}
.col-xs-push-10{
left:83.33333333%
}
.col-xs-push-9{
left:75%
}
.col-xs-push-8{
left:66.66666667%
}
.col-xs-push-7{
left:58.33333333%
}
.col-xs-push-6{
left:50%
}
.col-xs-push-5{
left:41.66666667%
}
.col-xs-push-4{
left:33.33333333%
}
.col-xs-push-3{
left:25%
}
.col-xs-push-2{
left:16.66666667%
}
.col-xs-push-1{
left:8.33333333%
}
.col-xs-push-0{
left:auto
}
.col-xs-offset-12{
margin-left:100%
}
.col-xs-offset-11{
margin-left:91.66666667%
}
.col-xs-offset-10{
margin-left:83.33333333%
}
.col-xs-offset-9{
margin-left:75%
}
.col-xs-offset-8{
margin-left:66.66666667%
}
.col-xs-offset-7{
margin-left:58.33333333%
}
.col-xs-offset-6{
margin-left:50%
}
.col-xs-offset-5{
margin-left:41.66666667%
}
.col-xs-offset-4{
margin-left:33.33333333%
}
.col-xs-offset-3{
margin-left:25%
}
.col-xs-offset-2{
margin-left:16.66666667%
}
.col-xs-offset-1{
margin-left:8.33333333%
}
.col-xs-offset-0{
margin-left:0
}
@media (min-width:768px){
.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{
float:left
}
.col-sm-12{
width:100%
}
.col-sm-11{
width:91.66666667%
}
.col-sm-10{
width:83.33333333%
}
.col-sm-9{
width:75%
}
.col-sm-8{
width:66.66666667%
}
.col-sm-7{
width:58.33333333%
}
.col-sm-6{
width:50%
}
.col-sm-5{
width:41.66666667%
}
.col-sm-4{
width:33.33333333%
}
.col-sm-3{
width:25%
}
.col-sm-2{
width:16.66666667%
}
.col-sm-1{
width:8.33333333%
}
.col-sm-pull-12{
right:100%
}
.col-sm-pull-11{
right:91.66666667%
}
.col-sm-pull-10{
right:83.33333333%
}
.col-sm-pull-9{
right:75%
}
.col-sm-pull-8{
right:66.66666667%
}
.col-sm-pull-7{
right:58.33333333%
}
.col-sm-pull-6{
right:50%
}
.col-sm-pull-5{
right:41.66666667%
}
.col-sm-pull-4{
right:33.33333333%
}
.col-sm-pull-3{
right:25%
}
.col-sm-pull-2{
right:16.66666667%
}
.col-sm-pull-1{
right:8.33333333%
}
.col-sm-pull-0{
right:auto
}
.col-sm-push-12{
left:100%
}
.col-sm-push-11{
left:91.66666667%
}
.col-sm-push-10{
left:83.33333333%
}
.col-sm-push-9{
left:75%
}
.col-sm-push-8{
left:66.66666667%
}
.col-sm-push-7{
left:58.33333333%
}
.col-sm-push-6{
left:50%
}
.col-sm-push-5{
left:41.66666667%
}
.col-sm-push-4{
left:33.33333333%
}
.col-sm-push-3{
left:25%
}
.col-sm-push-2{
left:16.66666667%
}
.col-sm-push-1{
left:8.33333333%
}
.col-sm-push-0{
left:auto
}
.col-sm-offset-12{
margin-left:100%
}
.col-sm-offset-11{
margin-left:91.66666667%
}
.col-sm-offset-10{
margin-left:83.33333333%
}
.col-sm-offset-9{
margin-left:75%
}
.col-sm-offset-8{
margin-left:66.66666667%
}
.col-sm-offset-7{
margin-left:58.33333333%
}
.col-sm-offset-6{
margin-left:50%
}
.col-sm-offset-5{
margin-left:41.66666667%
}
.col-sm-offset-4{
margin-left:33.33333333%
}
.col-sm-offset-3{
margin-left:25%
}
.col-sm-offset-2{
margin-left:16.66666667%
}
.col-sm-offset-1{
margin-left:8.33333333%
}
.col-sm-offset-0{
margin-left:0
}

}
@media (min-width:992px){
.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{
float:left
}
.col-md-12{
width:100%
}
.col-md-11{
width:91.66666667%
}
.col-md-10{
width:83.33333333%
}
.col-md-9{
width:75%
}
.col-md-8{
width:66.66666667%
}
.col-md-7{
width:58.33333333%
}
.col-md-6{
width:50%
}
.col-md-5{
width:41.66666667%
}
.col-md-4{
width:33.33333333%
}
.col-md-3{
width:25%
}
.col-md-2{
width:16.66666667%
}
.col-md-1{
width:8.33333333%
}
.col-md-pull-12{
right:100%
}
.col-md-pull-11{
right:91.66666667%
}
.col-md-pull-10{
right:83.33333333%
}
.col-md-pull-9{
right:75%
}
.col-md-pull-8{
right:66.66666667%
}
.col-md-pull-7{
right:58.33333333%
}
.col-md-pull-6{
right:50%
}
.col-md-pull-5{
right:41.66666667%
}
.col-md-pull-4{
right:33.33333333%
}
.col-md-pull-3{
right:25%
}
.col-md-pull-2{
right:16.66666667%
}
.col-md-pull-1{
right:8.33333333%
}
.col-md-pull-0{
right:auto
}
.col-md-push-12{
left:100%
}
.col-md-push-11{
left:91.66666667%
}
.col-md-push-10{
left:83.33333333%
}
.col-md-push-9{
left:75%
}
.col-md-push-8{
left:66.66666667%
}
.col-md-push-7{
left:58.33333333%
}
.col-md-push-6{
left:50%
}
.col-md-push-5{
left:41.66666667%
}
.col-md-push-4{
left:33.33333333%
}
.col-md-push-3{
left:25%
}
.col-md-push-2{
left:16.66666667%
}
.col-md-push-1{
left:8.33333333%
}
.col-md-push-0{
left:auto
}
.col-md-offset-12{
margin-left:100%
}
.col-md-offset-11{
margin-left:91.66666667%
}
.col-md-offset-10{
margin-left:83.33333333%
}
.col-md-offset-9{
margin-left:75%
}
.col-md-offset-8{
margin-left:66.66666667%
}
.col-md-offset-7{
margin-left:58.33333333%
}
.col-md-offset-6{
margin-left:50%
}
.col-md-offset-5{
margin-left:41.66666667%
}
.col-md-offset-4{
margin-left:33.33333333%
}
.col-md-offset-3{
margin-left:25%
}
.col-md-offset-2{
margin-left:16.66666667%
}
.col-md-offset-1{
margin-left:8.33333333%
}
.col-md-offset-0{
margin-left:0
}

}
@media (min-width:1200px){
.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{
float:left
}
.col-lg-12{
width:100%
}
.col-lg-11{
width:91.66666667%
}
.col-lg-10{
width:83.33333333%
}
.col-lg-9{
width:75%
}
.col-lg-8{
width:66.66666667%
}
.col-lg-7{
width:58.33333333%
}
.col-lg-6{
width:50%
}
.col-lg-5{
width:41.66666667%
}
.col-lg-4{
width:33.33333333%
}
.col-lg-3{
width:25%
}
.col-lg-2{
width:16.66666667%
}
.col-lg-1{
width:8.33333333%
}
.col-lg-pull-12{
right:100%
}
.col-lg-pull-11{
right:91.66666667%
}
.col-lg-pull-10{
right:83.33333333%
}
.col-lg-pull-9{
right:75%
}
.col-lg-pull-8{
right:66.66666667%
}
.col-lg-pull-7{
right:58.33333333%
}
.col-lg-pull-6{
right:50%
}
.col-lg-pull-5{
right:41.66666667%
}
.col-lg-pull-4{
right:33.33333333%
}
.col-lg-pull-3{
right:25%
}
.col-lg-pull-2{
right:16.66666667%
}
.col-lg-pull-1{
right:8.33333333%
}
.col-lg-pull-0{
right:auto
}
.col-lg-push-12{
left:100%
}
.col-lg-push-11{
left:91.66666667%
}
.col-lg-push-10{
left:83.33333333%
}
.col-lg-push-9{
left:75%
}
.col-lg-push-8{
left:66.66666667%
}
.col-lg-push-7{
left:58.33333333%
}
.col-lg-push-6{
left:50%
}
.col-lg-push-5{
left:41.66666667%
}
.col-lg-push-4{
left:33.33333333%
}
.col-lg-push-3{
left:25%
}
.col-lg-push-2{
left:16.66666667%
}
.col-lg-push-1{
left:8.33333333%
}
.col-lg-push-0{
left:auto
}
.col-lg-offset-12{
margin-left:100%
}
.col-lg-offset-11{
margin-left:91.66666667%
}
.col-lg-offset-10{
margin-left:83.33333333%
}
.col-lg-offset-9{
margin-left:75%
}
.col-lg-offset-8{
margin-left:66.66666667%
}
.col-lg-offset-7{
margin-left:58.33333333%
}
.col-lg-offset-6{
margin-left:50%
}
.col-lg-offset-5{
margin-left:41.66666667%
}
.col-lg-offset-4{
margin-left:33.33333333%
}
.col-lg-offset-3{
margin-left:25%
}
.col-lg-offset-2{
margin-left:16.66666667%
}
.col-lg-offset-1{
margin-left:8.33333333%
}
.col-lg-offset-0{
margin-left:0
}

}
table{
background-color:transparent
}
caption{
padding-top:8px;
padding-bottom:8px;
color:#777;
text-align:left
}
th{
text-align:left
}
.table{
width:100%;
max-width:100%;
margin-bottom:20px
}
.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{
padding:8px;
line-height:1.42857143;
vertical-align:top;
border-top:1px solid #ddd
}
.table>thead>tr>th{
vertical-align:bottom;
border-bottom:2px solid #ddd
}
.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{
border-top:0
}
.table>tbody+tbody{
border-top:2px solid #ddd
}
.table .table{
background-color:#fff
}
.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{
padding:5px
}
.table-bordered{
border:1px solid #ddd
}
.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{
border:1px solid #ddd
}
.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{
border-bottom-width:2px
}
.table-striped>tbody>tr:nth-of-type(odd){
background-color:#f9f9f9
}
.table-hover>tbody>tr:hover{
background-color:#f5f5f5
}
table col[class*=col-]{
position:static;
display:table-column;
float:none
}
table td[class*=col-],table th[class*=col-]{
position:static;
display:table-cell;
float:none
}
.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{
background-color:#f5f5f5
}
.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{
background-color:#e8e8e8
}
.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{
background-color:#dff0d8
}
.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{
background-color:#d0e9c6
}
.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{
background-color:#d9edf7
}
.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{
background-color:#c4e3f3
}
.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{
background-color:#fcf8e3
}
.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{
background-color:#faf2cc
}
.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{
background-color:#f2dede
}
.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{
background-color:#ebcccc
}
.table-responsive{
min-height:.01%;
overflow-x:auto
}
@media screen and (max-width:767px){
.table-responsive{
width:100%;
margin-bottom:15px;
overflow-y:hidden;
-ms-overflow-style:-ms-autohiding-scrollbar;
border:1px solid #ddd
}
.table-responsive>.table{
margin-bottom:0
}
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{
white-space:nowrap
}
.table-responsive>.table-bordered{
border:0
}
.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{
border-left:0
}
.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{
border-right:0
}
.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{
border-bottom:0
}

}
fieldset{
min-width:0;
padding:0;
margin:0;
border:0
}
legend{
display:block;
width:100%;
padding:0;
margin-bottom:20px;
font-size:21px;
line-height:inherit;
color:#333;
border:0;
border-bottom:1px solid #e5e5e5
}
label{
display:inline-block;
max-width:100%;
margin-bottom:5px;
font-weight:700
}
input[type=search]{
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box
}
input[type=checkbox],input[type=radio]{
margin:4px 0 0;
margin-top:1px\9;
line-height:normal
}
input[type=file]{
display:block
}
input[type=range]{
display:block;
width:100%
}
select[multiple],select[size]{
height:auto
}
input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{
outline:thin dotted;
outline:5px auto -webkit-focus-ring-color;
outline-offset:-2px
}
output{
display:block;
padding-top:7px;
font-size:14px;
line-height:1.42857143;
color:#555
}
.form-control{
display:block;
width:100%;
height:34px;
padding:6px 12px;
font-size:14px;
line-height:1.42857143;
color:#555;
background-color:#fff;
background-image:none;
border:1px solid #ccc;
border-radius:4px;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s
}
.form-control:focus{
border-color:#66afe9;
outline:0;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}
.form-control::-moz-placeholder{
color:#999;
opacity:1
}
.form-control:-ms-input-placeholder{
color:#999
}
.form-control::-webkit-input-placeholder{
color:#999
}
.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{
background-color:#eee;
opacity:1
}
.form-control[disabled],fieldset[disabled] .form-control{
cursor:not-allowed
}
textarea.form-control{
height:auto
}
input[type=search]{
-webkit-appearance:none
}
@media screen and (-webkit-min-device-pixel-ratio:0){
input[type=date].form-control,input[type=time].form-control,input[type=datetime-local].form-control,input[type=month].form-control{
line-height:34px
}
.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{
line-height:30px
}
.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{
line-height:46px
}

}
.form-group{
margin-bottom:15px
}
.checkbox,.radio{
position:relative;
display:block;
margin-top:10px;
margin-bottom:10px
}
.checkbox label,.radio label{
min-height:20px;
padding-left:20px;
margin-bottom:0;
font-weight:400;
cursor:pointer
}
.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{
position:absolute;
margin-top:4px\9;
margin-left:-20px
}
.checkbox+.checkbox,.radio+.radio{
margin-top:-5px
}
.checkbox-inline,.radio-inline{
position:relative;
display:inline-block;
padding-left:20px;
margin-bottom:0;
font-weight:400;
vertical-align:middle;
cursor:pointer
}
.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{
margin-top:0;
margin-left:10px
}
fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{
cursor:not-allowed
}
.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{
cursor:not-allowed
}
.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{
cursor:not-allowed
}
.form-control-static{
min-height:34px;
padding-top:7px;
padding-bottom:7px;
margin-bottom:0
}
.form-control-static.input-lg,.form-control-static.input-sm{
padding-right:0;
padding-left:0
}
.input-sm{
height:30px;
padding:5px 10px;
font-size:12px;
line-height:1.5;
border-radius:3px
}
select.input-sm{
height:30px;
line-height:30px
}
select[multiple].input-sm,textarea.input-sm{
height:auto
}
.form-group-sm .form-control{
height:30px;
padding:5px 10px;
font-size:12px;
line-height:1.5;
border-radius:3px
}
.form-group-sm select.form-control{
height:30px;
line-height:30px
}
.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{
height:auto
}
.form-group-sm .form-control-static{
height:30px;
min-height:32px;
padding:6px 10px;
font-size:12px;
line-height:1.5
}
.input-lg{
height:46px;
padding:10px 16px;
font-size:18px;
line-height:1.3333333;
border-radius:6px
}
select.input-lg{
height:46px;
line-height:46px
}
select[multiple].input-lg,textarea.input-lg{
height:auto
}
.form-group-lg .form-control{
height:46px;
padding:10px 16px;
font-size:18px;
line-height:1.3333333;
border-radius:6px
}
.form-group-lg select.form-control{
height:46px;
line-height:46px
}
.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{
height:auto
}
.form-group-lg .form-control-static{
height:46px;
min-height:38px;
padding:11px 16px;
font-size:18px;
line-height:1.3333333
}
.has-feedback{
position:relative
}
.has-feedback .form-control{
padding-right:42.5px
}
.form-control-feedback{
position:absolute;
top:0;
right:0;
z-index:2;
display:block;
width:34px;
height:34px;
line-height:34px;
text-align:center;
pointer-events:none
}
.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{
width:46px;
height:46px;
line-height:46px
}
.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{
width:30px;
height:30px;
line-height:30px
}
.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{
color:#3c763d
}
.has-success .form-control{
border-color:#3c763d;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075)
}
.has-success .form-control:focus{
border-color:#2b542c;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;
box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168
}
.has-success .input-group-addon{
color:#3c763d;
background-color:#dff0d8;
border-color:#3c763d
}
.has-success .form-control-feedback{
color:#3c763d
}
.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{
color:#8a6d3b
}
.has-warning .form-control{
border-color:#8a6d3b;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075)
}
.has-warning .form-control:focus{
border-color:#66512c;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;
box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b
}
.has-warning .input-group-addon{
color:#8a6d3b;
background-color:#fcf8e3;
border-color:#8a6d3b
}
.has-warning .form-control-feedback{
color:#8a6d3b
}
.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{
color:#a94442
}
.has-error .form-control{
border-color:#a94442;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075)
}
.has-error .form-control:focus{
border-color:#843534;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;
box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483
}
.has-error .input-group-addon{
color:#a94442;
background-color:#f2dede;
border-color:#a94442
}
.has-error .form-control-feedback{
color:#a94442
}
.has-feedback label~.form-control-feedback{
top:25px
}
.has-feedback label.sr-only~.form-control-feedback{
top:0
}
.help-block{
display:block;
margin-top:5px;
margin-bottom:10px;
color:#737373
}
@media (min-width:768px){
.form-inline .form-group{
display:inline-block;
margin-bottom:0;
vertical-align:middle
}
.form-inline .form-control{
display:inline-block;
width:auto;
vertical-align:middle
}
.form-inline .form-control-static{
display:inline-block
}
.form-inline .input-group{
display:inline-table;
vertical-align:middle
}
.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{
width:auto
}
.form-inline .input-group>.form-control{
width:100%
}
.form-inline .control-label{
margin-bottom:0;
vertical-align:middle
}
.form-inline .checkbox,.form-inline .radio{
display:inline-block;
margin-top:0;
margin-bottom:0;
vertical-align:middle
}
.form-inline .checkbox label,.form-inline .radio label{
padding-left:0
}
.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{
position:relative;
margin-left:0
}
.form-inline .has-feedback .form-control-feedback{
top:0
}

}
.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{
padding-top:7px;
margin-top:0;
margin-bottom:0
}
.form-horizontal .checkbox,.form-horizontal .radio{
min-height:27px
}
.form-horizontal .form-group{
margin-right:-15px;
margin-left:-15px
}
@media (min-width:768px){
.form-horizontal .control-label{
padding-top:7px;
margin-bottom:0;
text-align:right
}

}
.form-horizontal .has-feedback .form-control-feedback{
right:15px
}
@media (min-width:768px){
.form-horizontal .form-group-lg .control-label{
padding-top:14.33px;
font-size:18px
}

}
@media (min-width:768px){
.form-horizontal .form-group-sm .control-label{
padding-top:6px;
font-size:12px
}

}
.btn{
display:inline-block;
padding:6px 12px;
margin-bottom:0;
font-size:14px;
font-weight:400;
line-height:1.42857143;
text-align:center;
white-space:nowrap;
vertical-align:middle;
-ms-touch-action:manipulation;
touch-action:manipulation;
cursor:pointer;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none;
background-image:none;
border:1px solid transparent;
border-radius:4px
}
.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{
outline:thin dotted;
outline:5px auto -webkit-focus-ring-color;
outline-offset:-2px
}
.btn.focus,.btn:focus,.btn:hover{
color:#333;
text-decoration:none
}
.btn.active,.btn:active{
background-image:none;
outline:0;
-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);
box-shadow:inset 0 3px 5px rgba(0,0,0,.125)
}
.btn.disabled,.btn[disabled],fieldset[disabled] .btn{
cursor:not-allowed;
filter:alpha(opacity=65);
-webkit-box-shadow:none;
box-shadow:none;
opacity:.65
}
a.btn.disabled,fieldset[disabled] a.btn{
pointer-events:none
}
.btn-default{
color:#333;
background-color:#fff;
border-color:#ccc
}
.btn-default.focus,.btn-default:focus{
color:#333;
background-color:#e6e6e6;
border-color:#8c8c8c
}
.btn-default:hover{
color:#333;
background-color:#e6e6e6;
border-color:#adadad
}
.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{
color:#333;
background-color:#e6e6e6;
border-color:#adadad
}
.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{
color:#333;
background-color:#d4d4d4;
border-color:#8c8c8c
}
.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{
background-image:none
}
.btn-default.disabled,.btn-default.disabled.active,.btn-default.disabled.focus,.btn-default.disabled:active,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled],.btn-default[disabled].active,.btn-default[disabled].focus,.btn-default[disabled]:active,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default,fieldset[disabled] .btn-default.active,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:active,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{
background-color:#fff;
border-color:#ccc
}
.btn-default .badge{
color:#fff;
background-color:#333
}
.btn-primary{
color:#fff;
background-color:#337ab7;
border-color:#2e6da4
}
.btn-primary.focus,.btn-primary:focus{
color:#fff;
background-color:#286090;
border-color:#122b40
}
.btn-primary:hover{
color:#fff;
background-color:#286090;
border-color:#204d74
}
.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{
color:#fff;
background-color:#286090;
border-color:#204d74
}
.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover{
color:#fff;
background-color:#204d74;
border-color:#122b40
}
.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{
background-image:none
}
.btn-primary.disabled,.btn-primary.disabled.active,.btn-primary.disabled.focus,.btn-primary.disabled:active,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled],.btn-primary[disabled].active,.btn-primary[disabled].focus,.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-primary.active,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:active,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{
background-color:#337ab7;
border-color:#2e6da4
}
.btn-primary .badge{
color:#337ab7;
background-color:#fff
}
.btn-success{
color:#fff;
background-color:#5cb85c;
border-color:#4cae4c
}
.btn-success.focus,.btn-success:focus{
color:#fff;
background-color:#449d44;
border-color:#255625
}
.btn-success:hover{
color:#fff;
background-color:#449d44;
border-color:#398439
}
.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{
color:#fff;
background-color:#449d44;
border-color:#398439
}
.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover{
color:#fff;
background-color:#398439;
border-color:#255625
}
.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{
background-image:none
}
.btn-success.disabled,.btn-success.disabled.active,.btn-success.disabled.focus,.btn-success.disabled:active,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled],.btn-success[disabled].active,.btn-success[disabled].focus,.btn-success[disabled]:active,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success,fieldset[disabled] .btn-success.active,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:active,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{
background-color:#5cb85c;
border-color:#4cae4c
}
.btn-success .badge{
color:#5cb85c;
background-color:#fff
}
.btn-info{
color:#fff;
background-color:#5bc0de;
border-color:#46b8da
}
.btn-info.focus,.btn-info:focus{
color:#fff;
background-color:#31b0d5;
border-color:#1b6d85
}
.btn-info:hover{
color:#fff;
background-color:#31b0d5;
border-color:#269abc
}
.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{
color:#fff;
background-color:#31b0d5;
border-color:#269abc
}
.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover{
color:#fff;
background-color:#269abc;
border-color:#1b6d85
}
.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{
background-image:none
}
.btn-info.disabled,.btn-info.disabled.active,.btn-info.disabled.focus,.btn-info.disabled:active,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled],.btn-info[disabled].active,.btn-info[disabled].focus,.btn-info[disabled]:active,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info,fieldset[disabled] .btn-info.active,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:active,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{
background-color:#5bc0de;
border-color:#46b8da
}
.btn-info .badge{
color:#5bc0de;
background-color:#fff
}
.btn-warning{
color:#fff;
background-color:#f0ad4e;
border-color:#eea236
}
.btn-warning.focus,.btn-warning:focus{
color:#fff;
background-color:#ec971f;
border-color:#985f0d
}
.btn-warning:hover{
color:#fff;
background-color:#ec971f;
border-color:#d58512
}
.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{
color:#fff;
background-color:#ec971f;
border-color:#d58512
}
.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover{
color:#fff;
background-color:#d58512;
border-color:#985f0d
}
.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{
background-image:none
}
.btn-warning.disabled,.btn-warning.disabled.active,.btn-warning.disabled.focus,.btn-warning.disabled:active,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled],.btn-warning[disabled].active,.btn-warning[disabled].focus,.btn-warning[disabled]:active,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning,fieldset[disabled] .btn-warning.active,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:active,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{
background-color:#f0ad4e;
border-color:#eea236
}
.btn-warning .badge{
color:#f0ad4e;
background-color:#fff
}
.btn-danger{
color:#fff;
background-color:#d9534f;
border-color:#d43f3a
}
.btn-danger.focus,.btn-danger:focus{
color:#fff;
background-color:#c9302c;
border-color:#761c19
}
.btn-danger:hover{
color:#fff;
background-color:#c9302c;
border-color:#ac2925
}
.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{
color:#fff;
background-color:#c9302c;
border-color:#ac2925
}
.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover{
color:#fff;
background-color:#ac2925;
border-color:#761c19
}
.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{
background-image:none
}
.btn-danger.disabled,.btn-danger.disabled.active,.btn-danger.disabled.focus,.btn-danger.disabled:active,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled],.btn-danger[disabled].active,.btn-danger[disabled].focus,.btn-danger[disabled]:active,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger,fieldset[disabled] .btn-danger.active,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:active,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{
background-color:#d9534f;
border-color:#d43f3a
}
.btn-danger .badge{
color:#d9534f;
background-color:#fff
}
.btn-link{
font-weight:400;
color:#337ab7;
border-radius:0
}
.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{
background-color:transparent;
-webkit-box-shadow:none;
box-shadow:none
}
.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{
border-color:transparent
}
.btn-link:focus,.btn-link:hover{
color:#23527c;
text-decoration:underline;
background-color:transparent
}
.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{
color:#777;
text-decoration:none
}
.btn-group-lg>.btn,.btn-lg{
padding:10px 16px;
font-size:18px;
line-height:1.3333333;
border-radius:6px
}
.btn-group-sm>.btn,.btn-sm{
padding:5px 10px;
font-size:12px;
line-height:1.5;
border-radius:3px
}
.btn-group-xs>.btn,.btn-xs{
padding:1px 5px;
font-size:12px;
line-height:1.5;
border-radius:3px
}
.btn-block{
display:block;
width:100%
}
.btn-block+.btn-block{
margin-top:5px
}
input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{
width:100%
}
.fade{
opacity:0;
-webkit-transition:opacity .15s linear;
-o-transition:opacity .15s linear;
transition:opacity .15s linear
}
.fade.in{
opacity:1
}
.collapse{
display:none
}
.collapse.in{
display:block
}
tr.collapse.in{
display:table-row
}
tbody.collapse.in{
display:table-row-group
}
.collapsing{
position:relative;
height:0;
overflow:hidden;
-webkit-transition-timing-function:ease;
-o-transition-timing-function:ease;
transition-timing-function:ease;
-webkit-transition-duration:.35s;
-o-transition-duration:.35s;
transition-duration:.35s;
-webkit-transition-property:height,visibility;
-o-transition-property:height,visibility;
transition-property:height,visibility
}
.caret{
display:inline-block;
width:0;
height:0;
margin-left:2px;
vertical-align:middle;
border-top:4px dashed;
border-top:4px solid\9;
border-right:4px solid transparent;
border-left:4px solid transparent
}
.dropdown,.dropup{
position:relative
}
.dropdown-toggle:focus{
outline:0
}
.dropdown-menu{
position:absolute;
top:100%;
left:0;
z-index:1000;
display:none;
float:left;
min-width:160px;
padding:5px 0;
margin:2px 0 0;
font-size:14px;
text-align:left;
list-style:none;
background-color:#fff;
-webkit-background-clip:padding-box;
background-clip:padding-box;
border:1px solid #ccc;
border:1px solid rgba(0,0,0,.15);
border-radius:4px;
-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);
box-shadow:0 6px 12px rgba(0,0,0,.175)
}
.dropdown-menu.pull-right{
right:0;
left:auto
}
.dropdown-menu .divider{
height:1px;
margin:9px 0;
overflow:hidden;
background-color:#e5e5e5
}
.dropdown-menu>li>a{
display:block;
padding:3px 20px;
clear:both;
font-weight:400;
line-height:1.42857143;
color:#333;
white-space:nowrap
}
.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{
color:#262626;
text-decoration:none;
background-color:#f5f5f5
}
.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{
color:#fff;
text-decoration:none;
background-color:#337ab7;
outline:0
}
.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{
color:#777
}
.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{
text-decoration:none;
cursor:not-allowed;
background-color:transparent;
background-image:none;
filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)
}
.open>.dropdown-menu{
display:block
}
.open>a{
outline:0
}
.dropdown-menu-right{
right:0;
left:auto
}
.dropdown-menu-left{
right:auto;
left:0
}
.dropdown-header{
display:block;
padding:3px 20px;
font-size:12px;
line-height:1.42857143;
color:#777;
white-space:nowrap
}
.dropdown-backdrop{
position:fixed;
top:0;
right:0;
bottom:0;
left:0;
z-index:990
}
.pull-right>.dropdown-menu{
right:0;
left:auto
}
.dropup .caret,.navbar-fixed-bottom .dropdown .caret{
content:"";
border-top:0;
border-bottom:4px dashed;
border-bottom:4px solid\9
}
.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{
top:auto;
bottom:100%;
margin-bottom:2px
}
@media (min-width:768px){
.navbar-right .dropdown-menu{
right:0;
left:auto
}
.navbar-right .dropdown-menu-left{
right:auto;
left:0
}

}
.btn-group,.btn-group-vertical{
position:relative;
display:inline-block;
vertical-align:middle
}
.btn-group-vertical>.btn,.btn-group>.btn{
position:relative;
float:left
}
.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{
z-index:2
}
.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{
margin-left:-1px
}
.btn-toolbar{
margin-left:-5px
}
.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{
float:left
}
.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{
margin-left:5px
}
.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){
border-radius:0
}
.btn-group>.btn:first-child{
margin-left:0
}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){
border-top-right-radius:0;
border-bottom-right-radius:0
}
.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){
border-top-left-radius:0;
border-bottom-left-radius:0
}
.btn-group>.btn-group{
float:left
}
.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{
border-radius:0
}
.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{
border-top-right-radius:0;
border-bottom-right-radius:0
}
.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{
border-top-left-radius:0;
border-bottom-left-radius:0
}
.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{
outline:0
}
.btn-group>.btn+.dropdown-toggle{
padding-right:8px;
padding-left:8px
}
.btn-group>.btn-lg+.dropdown-toggle{
padding-right:12px;
padding-left:12px
}
.btn-group.open .dropdown-toggle{
-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);
box-shadow:inset 0 3px 5px rgba(0,0,0,.125)
}
.btn-group.open .dropdown-toggle.btn-link{
-webkit-box-shadow:none;
box-shadow:none
}
.btn .caret{
margin-left:0
}
.btn-lg .caret{
border-width:5px 5px 0;
border-bottom-width:0
}
.dropup .btn-lg .caret{
border-width:0 5px 5px
}
.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{
display:block;
float:none;
width:100%;
max-width:100%
}
.btn-group-vertical>.btn-group>.btn{
float:none
}
.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{
margin-top:-1px;
margin-left:0
}
.btn-group-vertical>.btn:not(:first-child):not(:last-child){
border-radius:0
}
.btn-group-vertical>.btn:first-child:not(:last-child){
border-top-right-radius:4px;
border-bottom-right-radius:0;
border-bottom-left-radius:0
}
.btn-group-vertical>.btn:last-child:not(:first-child){
border-top-left-radius:0;
border-top-right-radius:0;
border-bottom-left-radius:4px
}
.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{
border-radius:0
}
.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{
border-bottom-right-radius:0;
border-bottom-left-radius:0
}
.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{
border-top-left-radius:0;
border-top-right-radius:0
}
.btn-group-justified{
display:table;
width:100%;
table-layout:fixed;
border-collapse:separate
}
.btn-group-justified>.btn,.btn-group-justified>.btn-group{
display:table-cell;
float:none;
width:1%
}
.btn-group-justified>.btn-group .btn{
width:100%
}
.btn-group-justified>.btn-group .dropdown-menu{
left:auto
}
[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{
position:absolute;
clip:rect(0,0,0,0);
pointer-events:none
}
.input-group{
position:relative;
display:table;
border-collapse:separate
}
.input-group[class*=col-]{
float:none;
padding-right:0;
padding-left:0
}
.input-group .form-control{
position:relative;
z-index:2;
float:left;
width:100%;
margin-bottom:0
}
.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{
height:46px;
padding:10px 16px;
font-size:18px;
line-height:1.3333333;
border-radius:6px
}
select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{
height:46px;
line-height:46px
}
select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{
height:auto
}
.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{
height:30px;
padding:5px 10px;
font-size:12px;
line-height:1.5;
border-radius:3px
}
select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{
height:30px;
line-height:30px
}
select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{
height:auto
}
.input-group .form-control,.input-group-addon,.input-group-btn{
display:table-cell
}
.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){
border-radius:0
}
.input-group-addon,.input-group-btn{
width:1%;
white-space:nowrap;
vertical-align:middle
}
.input-group-addon{
padding:6px 12px;
font-size:14px;
font-weight:400;
line-height:1;
color:#555;
text-align:center;
background-color:#eee;
border:1px solid #ccc;
border-radius:4px
}
.input-group-addon.input-sm{
padding:5px 10px;
font-size:12px;
border-radius:3px
}
.input-group-addon.input-lg{
padding:10px 16px;
font-size:18px;
border-radius:6px
}
.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{
margin-top:0
}
.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){
border-top-right-radius:0;
border-bottom-right-radius:0
}
.input-group-addon:first-child{
border-right:0
}
.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{
border-top-left-radius:0;
border-bottom-left-radius:0
}
.input-group-addon:last-child{
border-left:0
}
.input-group-btn{
position:relative;
font-size:0;
white-space:nowrap
}
.input-group-btn>.btn{
position:relative
}
.input-group-btn>.btn+.btn{
margin-left:-1px
}
.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{

z-index:2
}
.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{
margin-right:-1px
}
.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{
z-index:2;
margin-left:-1px
}
.nav{
padding-left:0;
margin-bottom:0;
list-style:none
}
.nav>li{
position:relative;
display:block
}
.nav>li>a{
position:relative;
display:block;
padding:10px 15px
}
.nav>li>a:focus,.nav>li>a:hover{
text-decoration:none;
background-color:#eee
}
.nav>li.disabled>a{
color:#777
}
.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{
color:#777;
text-decoration:none;
cursor:not-allowed;
background-color:transparent
}
.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{
background-color:#eee;
border-color:#337ab7
}
.nav .nav-divider{
height:1px;
margin:9px 0;
overflow:hidden;
background-color:#e5e5e5
}
.nav>li>a>img{
max-width:none
}
.nav-tabs{
border-bottom:1px solid #ddd
}
.nav-tabs>li{
float:left;
margin-bottom:-1px
}
.nav-tabs>li>a{
margin-right:2px;
line-height:1.42857143;
border:1px solid transparent;
border-radius:4px 4px 0 0
}
.nav-tabs>li>a:hover{
border-color:#eee #eee #ddd
}
.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{
color:#555;
cursor:default;
background-color:#fff;
border:1px solid #ddd;
border-bottom-color:transparent
}
.nav-tabs.nav-justified{
width:100%;
border-bottom:0
}
.nav-tabs.nav-justified>li{
float:none
}
.nav-tabs.nav-justified>li>a{
margin-bottom:5px;
text-align:center
}
.nav-tabs.nav-justified>.dropdown .dropdown-menu{
top:auto;
left:auto
}
@media (min-width:768px){
.nav-tabs.nav-justified>li{
display:table-cell;
width:1%
}
.nav-tabs.nav-justified>li>a{
margin-bottom:0
}

}
.nav-tabs.nav-justified>li>a{
margin-right:0;
border-radius:4px
}
.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{
border:1px solid #ddd
}
@media (min-width:768px){
.nav-tabs.nav-justified>li>a{
border-bottom:1px solid #ddd;
border-radius:4px 4px 0 0
}
.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{
border-bottom-color:#fff
}

}
.nav-pills>li{
float:left
}
.nav-pills>li>a{
border-radius:4px
}
.nav-pills>li+li{
margin-left:2px
}
.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{
color:#fff;
background-color:#337ab7
}
.nav-stacked>li{
float:none
}
.nav-stacked>li+li{
margin-top:2px;
margin-left:0
}
.nav-justified{
width:100%
}
.nav-justified>li{
float:none
}
.nav-justified>li>a{
margin-bottom:5px;
text-align:center
}
.nav-justified>.dropdown .dropdown-menu{
top:auto;
left:auto
}
@media (min-width:768px){
.nav-justified>li{
display:table-cell;
width:1%
}
.nav-justified>li>a{
margin-bottom:0
}

}
.nav-tabs-justified{
border-bottom:0
}
.nav-tabs-justified>li>a{
margin-right:0;
border-radius:4px
}
.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{
border:1px solid #ddd
}
@media (min-width:768px){
.nav-tabs-justified>li>a{
border-bottom:1px solid #ddd;
border-radius:4px 4px 0 0
}
.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{
border-bottom-color:#fff
}

}
.tab-content>.tab-pane{
display:none
}
.tab-content>.active{
display:block
}
.nav-tabs .dropdown-menu{
margin-top:-1px;
border-top-left-radius:0;
border-top-right-radius:0
}
.navbar{
position:relative;
min-height:50px;
margin-bottom:20px;
border:1px solid transparent
}
@media (min-width:768px){
.navbar{
border-radius:4px
}

}
@media (min-width:768px){
.navbar-header{
float:left
}

}
.navbar-collapse{
padding-right:15px;
padding-left:15px;
overflow-x:visible;
-webkit-overflow-scrolling:touch;
border-top:1px solid transparent;
-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);
box-shadow:inset 0 1px 0 rgba(255,255,255,.1)
}
.navbar-collapse.in{
overflow-y:auto
}
@media (min-width:768px){
.navbar-collapse{
width:auto;
border-top:0;
-webkit-box-shadow:none;
box-shadow:none
}
.navbar-collapse.collapse{
display:block!important;
height:auto!important;
padding-bottom:0;
overflow:visible!important
}
.navbar-collapse.in{
overflow-y:visible
}
.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{
padding-right:0;
padding-left:0
}

}
.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{
max-height:340px
}
@media (max-device-width:480px) and (orientation:landscape){
.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{
max-height:200px
}

}
.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{
margin-right:-15px;
margin-left:-15px
}
@media (min-width:768px){
.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{
margin-right:0;
margin-left:0
}

}
.navbar-static-top{
z-index:1000;
border-width:0 0 1px
}
@media (min-width:768px){
.navbar-static-top{
border-radius:0
}

}
.navbar-fixed-bottom,.navbar-fixed-top{
position:fixed;
right:0;
left:0;
z-index:1030
}
@media (min-width:768px){
.navbar-fixed-bottom,.navbar-fixed-top{
border-radius:0
}

}
.navbar-fixed-top{
top:0;
border-width:0 0 1px
}
.navbar-fixed-bottom{
bottom:0;
margin-bottom:0;
border-width:1px 0 0
}
.navbar-brand{
float:left;
height:50px;
padding:15px 15px;
font-size:18px;
line-height:20px
}
.navbar-brand:focus,.navbar-brand:hover{
text-decoration:none
}
.navbar-brand>img{
display:block
}
@media (min-width:768px){
.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{
margin-left:-15px
}

}
.navbar-toggle{
position:relative;
float:right;
padding:9px 10px;
margin-top:8px;
margin-right:15px;
margin-bottom:8px;
background-color:transparent;
background-image:none;
border:1px solid transparent;
border-radius:4px
}
.navbar-toggle:focus{
outline:0
}
.navbar-toggle .icon-bar{
display:block;
width:22px;
height:2px;
border-radius:1px
}
.navbar-toggle .icon-bar+.icon-bar{
margin-top:4px
}
@media (min-width:768px){
.navbar-toggle{
display:none
}

}
.navbar-nav{
margin:7.5px -15px
}
.navbar-nav>li>a{
padding-top:10px;
padding-bottom:10px;
line-height:20px
}
@media (max-width:767px){
.navbar-nav .open .dropdown-menu{
position:static;
float:none;
width:auto;
margin-top:0;
background-color:transparent;
border:0;
-webkit-box-shadow:none;
box-shadow:none
}
.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{
padding:5px 15px 5px 25px
}
.navbar-nav .open .dropdown-menu>li>a{
line-height:20px
}
.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{
background-image:none
}

}
@media (min-width:768px){
.navbar-nav{
float:left;
margin:0
}
.navbar-nav>li{
float:left
}
.navbar-nav>li>a{
padding-top:15px;
padding-bottom:15px
}

}
.navbar-form{
padding:10px 15px;
margin-top:8px;
margin-right:-15px;
margin-bottom:8px;
margin-left:-15px;
border-top:1px solid transparent;
border-bottom:1px solid transparent;
-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)
}
@media (min-width:768px){
.navbar-form .form-group{
display:inline-block;
margin-bottom:0;
vertical-align:middle
}
.navbar-form .form-control{
display:inline-block;
width:auto;
vertical-align:middle
}
.navbar-form .form-control-static{
display:inline-block
}
.navbar-form .input-group{
display:inline-table;
vertical-align:middle
}
.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{
width:auto
}
.navbar-form .input-group>.form-control{
width:100%
}
.navbar-form .control-label{
margin-bottom:0;
vertical-align:middle
}
.navbar-form .checkbox,.navbar-form .radio{
display:inline-block;
margin-top:0;
margin-bottom:0;
vertical-align:middle
}
.navbar-form .checkbox label,.navbar-form .radio label{
padding-left:0
}
.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{
position:relative;
margin-left:0
}
.navbar-form .has-feedback .form-control-feedback{
top:0
}

}
@media (max-width:767px){
.navbar-form .form-group{
margin-bottom:5px
}
.navbar-form .form-group:last-child{
margin-bottom:0
}

}
@media (min-width:768px){
.navbar-form{
width:auto;
padding-top:0;
padding-bottom:0;
margin-right:0;
margin-left:0;
border:0;
-webkit-box-shadow:none;
box-shadow:none
}

}
.navbar-nav>li>.dropdown-menu{
margin-top:0;
border-top-left-radius:0;
border-top-right-radius:0
}
.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{
margin-bottom:0;
border-top-left-radius:4px;
border-top-right-radius:4px;
border-bottom-right-radius:0;
border-bottom-left-radius:0
}
.navbar-btn{
margin-top:8px;
margin-bottom:8px
}
.navbar-btn.btn-sm{
margin-top:10px;
margin-bottom:10px
}
.navbar-btn.btn-xs{
margin-top:14px;
margin-bottom:14px
}
.navbar-text{
margin-top:15px;
margin-bottom:15px
}
@media (min-width:768px){
.navbar-text{
float:left;
margin-right:15px;
margin-left:15px
}

}
@media (min-width:768px){
.navbar-left{
float:left!important
}
.navbar-right{
float:right!important;
margin-right:-15px
}
.navbar-right~.navbar-right{
margin-right:0
}

}
.navbar-default{
background-color:#f8f8f8;
border-color:#e7e7e7
}
.navbar-default .navbar-brand{
color:#777
}
.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{
color:#5e5e5e;
background-color:transparent
}
.navbar-default .navbar-text{
color:#777
}
.navbar-default .navbar-nav>li>a{
color:#777
}
.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{
color:#333;
background-color:transparent
}
.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{
color:#555;
background-color:#e7e7e7
}
.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{
color:#ccc;
background-color:transparent
}
.navbar-default .navbar-toggle{
border-color:#ddd
}
.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{
background-color:#ddd
}
.navbar-default .navbar-toggle .icon-bar{
background-color:#888
}
.navbar-default .navbar-collapse,.navbar-default .navbar-form{
border-color:#e7e7e7
}
.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{
color:#555;
background-color:#e7e7e7
}
@media (max-width:767px){
.navbar-default .navbar-nav .open .dropdown-menu>li>a{
color:#777
}
.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{
color:#333;
background-color:transparent
}
.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{
color:#555;
background-color:#e7e7e7
}
.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{
color:#ccc;
background-color:transparent
}

}
.navbar-default .navbar-link{
color:#777
}
.navbar-default .navbar-link:hover{
color:#333
}
.navbar-default .btn-link{
color:#777
}
.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{
color:#333
}
.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{
color:#ccc
}
.navbar-inverse{
background-color:#222;
border-color:#080808
}
.navbar-inverse .navbar-brand{
color:#9d9d9d
}
.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{
color:#fff;
background-color:transparent
}
.navbar-inverse .navbar-text{
color:#9d9d9d
}
.navbar-inverse .navbar-nav>li>a{
color:#9d9d9d
}
.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{
color:#fff;
background-color:transparent
}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{
color:#fff;
background-color:#080808
}
.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{
color:#444;
background-color:transparent
}
.navbar-inverse .navbar-toggle{
border-color:#333
}
.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{
background-color:#333
}
.navbar-inverse .navbar-toggle .icon-bar{
background-color:#fff
}
.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{
border-color:#101010
}
.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{
color:#fff;
background-color:#080808
}
@media (max-width:767px){
.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{
border-color:#080808
}
.navbar-inverse .navbar-nav .open .dropdown-menu .divider{
background-color:#080808
}
.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{
color:#9d9d9d
}
.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{
color:#fff;
background-color:transparent
}
.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{
color:#fff;
background-color:#080808
}
.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{
color:#444;
background-color:transparent
}

}
.navbar-inverse .navbar-link{
color:#9d9d9d
}
.navbar-inverse .navbar-link:hover{
color:#fff
}
.navbar-inverse .btn-link{
color:#9d9d9d
}
.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{
color:#fff
}
.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{
color:#444
}
.breadcrumb{
padding:8px 15px;
margin-bottom:20px;
list-style:none;
background-color:#f5f5f5;
border-radius:4px
}
.breadcrumb>li{
display:inline-block
}
.breadcrumb>li+li:before{
padding:0 5px;
color:#ccc;
content:"/\00a0"
}
.breadcrumb>.active{
color:#777
}
.pagination{
display:inline-block;
padding-left:0;
margin:20px 0;
border-radius:4px
}
.pagination>li{
display:inline
}
.pagination>li>a,.pagination>li>span{
position:relative;
float:left;
padding:6px 12px;
margin-left:-1px;
line-height:1.42857143;
color:#337ab7;
text-decoration:none;
background-color:#fff;
border:1px solid #ddd
}
.pagination>li:first-child>a,.pagination>li:first-child>span{
margin-left:0;
border-top-left-radius:4px;
border-bottom-left-radius:4px
}
.pagination>li:last-child>a,.pagination>li:last-child>span{
border-top-right-radius:4px;
border-bottom-right-radius:4px
}
.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{
z-index:3;
color:#23527c;
background-color:#eee;
border-color:#ddd
}
.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{
z-index:2;
color:#fff;
cursor:default;
background-color:#337ab7;
border-color:#337ab7
}
.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{
color:#777;
cursor:not-allowed;
background-color:#fff;
border-color:#ddd
}
.pagination-lg>li>a,.pagination-lg>li>span{
padding:10px 16px;
font-size:18px;
line-height:1.3333333
}
.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{
border-top-left-radius:6px;
border-bottom-left-radius:6px
}
.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{
border-top-right-radius:6px;
border-bottom-right-radius:6px
}
.pagination-sm>li>a,.pagination-sm>li>span{
padding:5px 10px;
font-size:12px;
line-height:1.5
}
.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{
border-top-left-radius:3px;
border-bottom-left-radius:3px
}
.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{
border-top-right-radius:3px;
border-bottom-right-radius:3px
}
.pager{
padding-left:0;
margin:20px 0;
text-align:center;
list-style:none
}
.pager li{
display:inline
}
.pager li>a,.pager li>span{
display:inline-block;
padding:5px 14px;
background-color:#fff;
border:1px solid #ddd;
border-radius:15px
}
.pager li>a:focus,.pager li>a:hover{
text-decoration:none;
background-color:#eee
}
.pager .next>a,.pager .next>span{
float:right
}
.pager .previous>a,.pager .previous>span{
float:left
}
.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{
color:#777;
cursor:not-allowed;
background-color:#fff
}
.label{
display:inline;
padding:.2em .6em .3em;
font-size:75%;
font-weight:700;
line-height:1;
color:#fff;
text-align:center;
white-space:nowrap;
vertical-align:baseline;
border-radius:.25em
}
a.label:focus,a.label:hover{
color:#fff;
text-decoration:none;
cursor:pointer
}
.label:empty{
display:none
}
.btn .label{
position:relative;
top:-1px
}
.label-default{
background-color:#777
}
.label-default[href]:focus,.label-default[href]:hover{
background-color:#5e5e5e
}
.label-primary{
background-color:#337ab7
}
.label-primary[href]:focus,.label-primary[href]:hover{
background-color:#286090
}
.label-success{
background-color:#5cb85c
}
.label-success[href]:focus,.label-success[href]:hover{
background-color:#449d44
}
.label-info{
background-color:#5bc0de
}
.label-info[href]:focus,.label-info[href]:hover{
background-color:#31b0d5
}
.label-warning{
background-color:#f0ad4e
}
.label-warning[href]:focus,.label-warning[href]:hover{
background-color:#ec971f
}
.label-danger{
background-color:#d9534f
}
.label-danger[href]:focus,.label-danger[href]:hover{
background-color:#c9302c
}
.badge{
display:inline-block;
min-width:10px;
padding:3px 7px;
font-size:12px;
font-weight:700;
line-height:1;
color:#fff;
text-align:center;
white-space:nowrap;
vertical-align:middle;
background-color:#777;
border-radius:10px
}
.badge:empty{
display:none
}
.btn .badge{
position:relative;
top:-1px
}
.btn-group-xs>.btn .badge,.btn-xs .badge{
top:0;
padding:1px 5px
}
a.badge:focus,a.badge:hover{
color:#fff;
text-decoration:none;
cursor:pointer
}
.list-group-item.active>.badge,.nav-pills>.active>a>.badge{
color:#337ab7;
background-color:#fff
}
.list-group-item>.badge{
float:right
}
.list-group-item>.badge+.badge{
margin-right:5px
}
.nav-pills>li>a>.badge{
margin-left:3px
}
.jumbotron{
padding-top:30px;
padding-bottom:30px;
margin-bottom:30px;
color:inherit;
background-color:#eee
}
.jumbotron .h1,.jumbotron h1{
color:inherit
}
.jumbotron p{
margin-bottom:15px;
font-size:21px;
font-weight:200
}
.jumbotron>hr{
border-top-color:#d5d5d5
}
.container .jumbotron,.container-fluid .jumbotron{
border-radius:6px
}
.jumbotron .container{
max-width:100%
}
@media screen and (min-width:768px){
.jumbotron{
padding-top:48px;
padding-bottom:48px
}
.container .jumbotron,.container-fluid .jumbotron{
padding-right:60px;
padding-left:60px
}
.jumbotron .h1,.jumbotron h1{
font-size:63px
}

}
.thumbnail{
display:block;
padding:4px;
margin-bottom:20px;
line-height:1.42857143;
background-color:#fff;
border:1px solid #ddd;
border-radius:4px;
-webkit-transition:border .2s ease-in-out;
-o-transition:border .2s ease-in-out;
transition:border .2s ease-in-out
}
.thumbnail a>img,.thumbnail>img{
margin-right:auto;
margin-left:auto
}
a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{
border-color:#337ab7
}
.thumbnail .caption{
padding:9px;
color:#333
}
.alert{
padding:15px;
margin-bottom:20px;
border:1px solid transparent;
border-radius:4px
}
.alert h4{
margin-top:0;
color:inherit
}
.alert .alert-link{
font-weight:700
}
.alert>p,.alert>ul{
margin-bottom:0
}
.alert>p+p{
margin-top:5px
}
.alert-dismissable,.alert-dismissible{
padding-right:35px
}
.alert-dismissable .close,.alert-dismissible .close{
position:relative;
top:-2px;
right:-21px;
color:inherit
}
.alert-success{
color:#3c763d;
background-color:#dff0d8;
border-color:#d6e9c6
}
.alert-success hr{
border-top-color:#c9e2b3
}
.alert-success .alert-link{
color:#2b542c
}
.alert-info{
color:#31708f;
background-color:#d9edf7;
border-color:#bce8f1
}
.alert-info hr{
border-top-color:#a6e1ec
}
.alert-info .alert-link{
color:#245269
}
.alert-warning{
color:#8a6d3b;
background-color:#fcf8e3;
border-color:#faebcc
}
.alert-warning hr{
border-top-color:#f7e1b5
}
.alert-warning .alert-link{
color:#66512c
}
.alert-danger{
color:#a94442;
background-color:#f2dede;
border-color:#ebccd1
}
.alert-danger hr{
border-top-color:#e4b9c0
}
.alert-danger .alert-link{
color:#843534
}
@-webkit-keyframes progress-bar-stripes{
from{
background-position:40px 0
}
to{
background-position:0 0
}

}
@-o-keyframes progress-bar-stripes{
from{
background-position:40px 0
}
to{
background-position:0 0
}

}
@keyframes progress-bar-stripes{
from{
background-position:40px 0
}
to{
background-position:0 0
}

}
.progress{
height:20px;
margin-bottom:20px;
overflow:hidden;
background-color:#f5f5f5;
border-radius:4px;
-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);
box-shadow:inset 0 1px 2px rgba(0,0,0,.1)
}
.progress-bar{
float:left;
width:0;
height:100%;
font-size:12px;
line-height:20px;
color:#fff;
text-align:center;
background-color:#337ab7;
-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);
box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);
-webkit-transition:width .6s ease;
-o-transition:width .6s ease;
transition:width .6s ease
}
.progress-bar-striped,.progress-striped .progress-bar{
background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
-webkit-background-size:40px 40px;
background-size:40px 40px
}
.progress-bar.active,.progress.active .progress-bar{
-webkit-animation:progress-bar-stripes 2s linear infinite;
-o-animation:progress-bar-stripes 2s linear infinite;
animation:progress-bar-stripes 2s linear infinite
}
.progress-bar-success{
background-color:#5cb85c
}
.progress-striped .progress-bar-success{
background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)
}
.progress-bar-info{
background-color:#5bc0de
}
.progress-striped .progress-bar-info{
background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)
}
.progress-bar-warning{
background-color:#f0ad4e
}
.progress-striped .progress-bar-warning{
background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)
}
.progress-bar-danger{
background-color:#d9534f
}
.progress-striped .progress-bar-danger{
background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)
}
.media{
margin-top:15px
}
.media:first-child{
margin-top:0
}
.media,.media-body{
overflow:hidden;
zoom:1
}
.media-body{
width:10000px
}
.media-object{
display:block
}
.media-object.img-thumbnail{
max-width:none
}
.media-right,.media>.pull-right{
padding-left:10px
}
.media-left,.media>.pull-left{
padding-right:10px
}
.media-body,.media-left,.media-right{
display:table-cell;
vertical-align:top
}
.media-middle{
vertical-align:middle
}
.media-bottom{
vertical-align:bottom
}
.media-heading{
margin-top:0;
margin-bottom:5px
}
.media-list{
padding-left:0;
list-style:none
}
.list-group{
padding-left:0;
margin-bottom:20px
}
.list-group-item{
position:relative;
display:block;
padding:10px 15px;
margin-bottom:-1px;
background-color:#fff;
border:1px solid #ddd
}
.list-group-item:first-child{
border-top-left-radius:4px;
border-top-right-radius:4px
}
.list-group-item:last-child{
margin-bottom:0;
border-bottom-right-radius:4px;
border-bottom-left-radius:4px
}
a.list-group-item,button.list-group-item{
color:#555
}
a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{
color:#333
}
a.list-group-item:focus,a.list-group-item:hover,button.list-group-item:focus,button.list-group-item:hover{
color:#555;
text-decoration:none;
background-color:#f5f5f5
}
button.list-group-item{
width:100%;
text-align:left
}
.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{
color:#777;
cursor:not-allowed;
background-color:#eee
}
.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{
color:inherit
}
.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{
color:#777
}
.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{
z-index:2;
color:#fff;
background-color:#337ab7;
border-color:#337ab7
}
.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{
color:inherit
}
.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{
color:#c7ddef
}
.list-group-item-success{
color:#3c763d;
background-color:#dff0d8
}
a.list-group-item-success,button.list-group-item-success{
color:#3c763d
}
a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{
color:inherit
}
a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover{
color:#3c763d;
background-color:#d0e9c6
}
a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover,button.list-group-item-success.active,button.list-group-item-success.active:focus,button.list-group-item-success.active:hover{
color:#fff;
background-color:#3c763d;
border-color:#3c763d
}
.list-group-item-info{
color:#31708f;
background-color:#d9edf7
}
a.list-group-item-info,button.list-group-item-info{
color:#31708f
}
a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{
color:inherit
}
a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover{
color:#31708f;
background-color:#c4e3f3
}
a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover,button.list-group-item-info.active,button.list-group-item-info.active:focus,button.list-group-item-info.active:hover{
color:#fff;
background-color:#31708f;
border-color:#31708f
}
.list-group-item-warning{
color:#8a6d3b;
background-color:#fcf8e3
}
a.list-group-item-warning,button.list-group-item-warning{
color:#8a6d3b
}
a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{
color:inherit
}
a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover{
color:#8a6d3b;
background-color:#faf2cc
}
a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover,button.list-group-item-warning.active,button.list-group-item-warning.active:focus,button.list-group-item-warning.active:hover{
color:#fff;
background-color:#8a6d3b;
border-color:#8a6d3b
}
.list-group-item-danger{
color:#a94442;
background-color:#f2dede
}
a.list-group-item-danger,button.list-group-item-danger{
color:#a94442
}
a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{
color:inherit
}
a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover{
color:#a94442;
background-color:#ebcccc
}
a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover,button.list-group-item-danger.active,button.list-group-item-danger.active:focus,button.list-group-item-danger.active:hover{
color:#fff;
background-color:#a94442;
border-color:#a94442
}
.list-group-item-heading{
margin-top:0;
margin-bottom:5px
}
.list-group-item-text{
margin-bottom:0;
line-height:1.3
}
.panel{
margin-bottom:20px;
background-color:#fff;
border:1px solid transparent;
border-radius:4px;
-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);
box-shadow:0 1px 1px rgba(0,0,0,.05)
}
.panel-body{
padding:15px
}
.panel-heading{
padding:10px 15px;
border-bottom:1px solid transparent;
border-top-left-radius:3px;
border-top-right-radius:3px
}
.panel-heading>.dropdown .dropdown-toggle{
color:inherit
}
.panel-title{
margin-top:0;
margin-bottom:0;
font-size:16px;
color:inherit
}
.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a{
color:inherit
}
.panel-footer{
padding:10px 15px;
background-color:#f5f5f5;
border-top:1px solid #ddd;
border-bottom-right-radius:3px;
border-bottom-left-radius:3px
}
.panel>.list-group,.panel>.panel-collapse>.list-group{
margin-bottom:0
}
.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{
border-width:1px 0;
border-radius:0
}
.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{
border-top:0;
border-top-left-radius:3px;
border-top-right-radius:3px
}
.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{
border-bottom:0;
border-bottom-right-radius:3px;
border-bottom-left-radius:3px
}
.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{
border-top-left-radius:0;
border-top-right-radius:0
}
.panel-heading+.list-group .list-group-item:first-child{
border-top-width:0
}
.list-group+.panel-footer{
border-top-width:0
}
.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{
margin-bottom:0
}
.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{
padding-right:15px;
padding-left:15px
}
.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child{
border-top-left-radius:3px;
border-top-right-radius:3px
}
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{
border-top-left-radius:3px;
border-top-right-radius:3px
}
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{
border-top-left-radius:3px
}
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{
border-top-right-radius:3px
}
.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{
border-bottom-right-radius:3px;
border-bottom-left-radius:3px
}
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{
border-bottom-right-radius:3px;
border-bottom-left-radius:3px
}
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{
border-bottom-left-radius:3px
}
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{
border-bottom-right-radius:3px
}
.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{
border-top:1px solid #ddd
}
.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{
border-top:0
}
.panel>.table-bordered,.panel>.table-responsive>.table-bordered{
border:0
}
.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{
border-left:0
}
.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{
border-right:0
}
.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{
border-bottom:0
}
.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{
border-bottom:0
}
.panel>.table-responsive{
margin-bottom:0;
border:0
}
.panel-group{
margin-bottom:20px
}
.panel-group .panel{
margin-bottom:0;
border-radius:4px
}
.panel-group .panel+.panel{
margin-top:5px
}
.panel-group .panel-heading{
border-bottom:0
}
.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{
border-top:1px solid #ddd
}
.panel-group .panel-footer{
border-top:0
}
.panel-group .panel-footer+.panel-collapse .panel-body{
border-bottom:1px solid #ddd
}
.panel-default{
border-color:#ddd
}
.panel-default>.panel-heading{
color:#333;
background-color:#f5f5f5;
border-color:#ddd
}
.panel-default>.panel-heading+.panel-collapse>.panel-body{
border-top-color:#ddd
}
.panel-default>.panel-heading .badge{
color:#f5f5f5;
background-color:#333
}
.panel-default>.panel-footer+.panel-collapse>.panel-body{
border-bottom-color:#ddd
}
.panel-primary{
border-color:#337ab7
}
.panel-primary>.panel-heading{
color:#fff;
background-color:#337ab7;
border-color:#337ab7
}
.panel-primary>.panel-heading+.panel-collapse>.panel-body{
border-top-color:#337ab7
}
.panel-primary>.panel-heading .badge{
color:#337ab7;
background-color:#fff
}
.panel-primary>.panel-footer+.panel-collapse>.panel-body{
border-bottom-color:#337ab7
}
.panel-success{
border-color:#d6e9c6
}
.panel-success>.panel-heading{
color:#3c763d;
background-color:#dff0d8;
border-color:#d6e9c6
}
.panel-success>.panel-heading+.panel-collapse>.panel-body{
border-top-color:#d6e9c6
}
.panel-success>.panel-heading .badge{
color:#dff0d8;
background-color:#3c763d
}
.panel-success>.panel-footer+.panel-collapse>.panel-body{
border-bottom-color:#d6e9c6
}
.panel-info{
border-color:#bce8f1
}
.panel-info>.panel-heading{
color:#31708f;
background-color:#d9edf7;
border-color:#bce8f1
}
.panel-info>.panel-heading+.panel-collapse>.panel-body{
border-top-color:#bce8f1
}
.panel-info>.panel-heading .badge{
color:#d9edf7;
background-color:#31708f
}
.panel-info>.panel-footer+.panel-collapse>.panel-body{
border-bottom-color:#bce8f1
}
.panel-warning{
border-color:#faebcc
}
.panel-warning>.panel-heading{
color:#8a6d3b;
background-color:#fcf8e3;
border-color:#faebcc
}
.panel-warning>.panel-heading+.panel-collapse>.panel-body{
border-top-color:#faebcc
}
.panel-warning>.panel-heading .badge{
color:#fcf8e3;
background-color:#8a6d3b
}
.panel-warning>.panel-footer+.panel-collapse>.panel-body{
border-bottom-color:#faebcc
}
.panel-danger{
border-color:#ebccd1
}
.panel-danger>.panel-heading{
color:#a94442;
background-color:#f2dede;
border-color:#ebccd1
}
.panel-danger>.panel-heading+.panel-collapse>.panel-body{
border-top-color:#ebccd1
}
.panel-danger>.panel-heading .badge{
color:#f2dede;
background-color:#a94442
}
.panel-danger>.panel-footer+.panel-collapse>.panel-body{
border-bottom-color:#ebccd1
}
.embed-responsive{
position:relative;
display:block;
height:0;
padding:0;
overflow:hidden
}
.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{
position:absolute;
top:0;
bottom:0;
left:0;
width:100%;
height:100%;
border:0
}
.embed-responsive-16by9{
padding-bottom:56.25%
}
.embed-responsive-4by3{
padding-bottom:75%
}
.well{
min-height:20px;
padding:19px;
margin-bottom:20px;
background-color:#f5f5f5;
border:1px solid #e3e3e3;
border-radius:4px;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);
box-shadow:inset 0 1px 1px rgba(0,0,0,.05)
}
.well blockquote{
border-color:#ddd;
border-color:rgba(0,0,0,.15)
}
.well-lg{
padding:24px;
border-radius:6px
}
.well-sm{
padding:9px;
border-radius:3px
}
.close{
float:right;
font-size:21px;
font-weight:700;
line-height:1;
color:#000;
text-shadow:0 1px 0 #fff;
filter:alpha(opacity=20);
opacity:.2
}
.close:focus,.close:hover{
color:#000;
text-decoration:none;
cursor:pointer;
filter:alpha(opacity=50);
opacity:.5
}
button.close{
-webkit-appearance:none;
padding:0;
cursor:pointer;
background:0 0;
border:0
}
.modal-open{
overflow:hidden
}
.modal{
position:fixed;
top:0;
right:0;
bottom:0;
left:0;
z-index:1050;
display:none;
overflow:hidden;
-webkit-overflow-scrolling:touch;
outline:0
}
.modal.fade .modal-dialog{
-webkit-transition:-webkit-transform .3s ease-out;
-o-transition:-o-transform .3s ease-out;
transition:transform .3s ease-out;
-webkit-transform:translate(0,-25%);
-ms-transform:translate(0,-25%);
-o-transform:translate(0,-25%);
transform:translate(0,-25%)
}
.modal.in .modal-dialog{
-webkit-transform:translate(0,0);
-ms-transform:translate(0,0);
-o-transform:translate(0,0);
transform:translate(0,0)
}
.modal-open .modal{
overflow-x:hidden;
overflow-y:auto
}
.modal-dialog{
position:relative;
width:auto;
margin:10px
}
.modal-content{
position:relative;
background-color:#fff;
-webkit-background-clip:padding-box;
background-clip:padding-box;
border:1px solid #999;
border:1px solid rgba(0,0,0,.2);
border-radius:6px;
outline:0;
-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);
box-shadow:0 3px 9px rgba(0,0,0,.5)
}
.modal-backdrop{
position:fixed;
top:0;
right:0;
bottom:0;
left:0;
z-index:1040;
background-color:#000
}
.modal-backdrop.fade{
filter:alpha(opacity=0);
opacity:0
}
.modal-backdrop.in{
filter:alpha(opacity=50);
opacity:.5
}
.modal-header{
min-height:16.43px;
padding:15px;
border-bottom:1px solid #e5e5e5
}
.modal-header .close{
margin-top:-2px
}
.modal-title{
margin:0;
line-height:1.42857143
}
.modal-body{
position:relative;
padding:15px
}
.modal-footer{
padding:15px;
text-align:right;
border-top:1px solid #e5e5e5
}
.modal-footer .btn+.btn{
margin-bottom:0;
margin-left:5px
}
.modal-footer .btn-group .btn+.btn{
margin-left:-1px
}
.modal-footer .btn-block+.btn-block{
margin-left:0
}
.modal-scrollbar-measure{
position:absolute;
top:-9999px;
width:50px;
height:50px;
overflow:scroll
}
@media (min-width:768px){
.modal-dialog{
width:600px;
margin:30px auto
}
.modal-content{
-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);
box-shadow:0 5px 15px rgba(0,0,0,.5)
}
.modal-sm{
width:300px
}

}
@media (min-width:992px){
.modal-lg{
width:900px
}

}
.tooltip{
position:absolute;
z-index:1070;
display:block;
font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
font-size:12px;
font-style:normal;
font-weight:400;
line-height:1.42857143;
text-align:left;
text-align:start;
text-decoration:none;
text-shadow:none;
text-transform:none;
letter-spacing:normal;
word-break:normal;
word-spacing:normal;
word-wrap:normal;
white-space:normal;
filter:alpha(opacity=0);
opacity:0;
line-break:auto
}
.tooltip.in{
filter:alpha(opacity=90);
opacity:.9
}
.tooltip.top{
padding:5px 0;
margin-top:-3px
}
.tooltip.right{
padding:0 5px;
margin-left:3px
}
.tooltip.bottom{
padding:5px 0;
margin-top:3px
}
.tooltip.left{
padding:0 5px;
margin-left:-3px
}
.tooltip-inner{
max-width:200px;
padding:3px 8px;
color:#fff;
text-align:center;
background-color:#000;
border-radius:4px
}
.tooltip-arrow{
position:absolute;
width:0;
height:0;
border-color:transparent;
border-style:solid
}
.tooltip.top .tooltip-arrow{
bottom:0;
left:50%;
margin-left:-5px;
border-width:5px 5px 0;
border-top-color:#000
}
.tooltip.top-left .tooltip-arrow{
right:5px;
bottom:0;
margin-bottom:-5px;
border-width:5px 5px 0;
border-top-color:#000
}
.tooltip.top-right .tooltip-arrow{
bottom:0;
left:5px;
margin-bottom:-5px;
border-width:5px 5px 0;
border-top-color:#000
}
.tooltip.right .tooltip-arrow{
top:50%;
left:0;
margin-top:-5px;
border-width:5px 5px 5px 0;
border-right-color:#000
}
.tooltip.left .tooltip-arrow{
top:50%;
right:0;
margin-top:-5px;
border-width:5px 0 5px 5px;
border-left-color:#000
}
.tooltip.bottom .tooltip-arrow{
top:0;
left:50%;
margin-left:-5px;
border-width:0 5px 5px;
border-bottom-color:#000
}
.tooltip.bottom-left .tooltip-arrow{
top:0;
right:5px;
margin-top:-5px;
border-width:0 5px 5px;
border-bottom-color:#000
}
.tooltip.bottom-right .tooltip-arrow{
top:0;
left:5px;
margin-top:-5px;
border-width:0 5px 5px;
border-bottom-color:#000
}
.popover{
position:absolute;
top:0;
left:0;
z-index:1060;
display:none;
max-width:276px;
padding:1px;
font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
font-size:14px;
font-style:normal;
font-weight:400;
line-height:1.42857143;
text-align:left;
text-align:start;
text-decoration:none;
text-shadow:none;
text-transform:none;
letter-spacing:normal;
word-break:normal;
word-spacing:normal;
word-wrap:normal;
white-space:normal;
background-color:#fff;
-webkit-background-clip:padding-box;
background-clip:padding-box;
border:1px solid #ccc;
border:1px solid rgba(0,0,0,.2);
border-radius:6px;
-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);
box-shadow:0 5px 10px rgba(0,0,0,.2);
line-break:auto
}
.popover.top{
margin-top:-10px
}
.popover.right{
margin-left:10px
}
.popover.bottom{
margin-top:10px
}
.popover.left{
margin-left:-10px
}
.popover-title{
padding:8px 14px;
margin:0;
font-size:14px;
background-color:#f7f7f7;
border-bottom:1px solid #ebebeb;
border-radius:5px 5px 0 0
}
.popover-content{
padding:9px 14px
}
.popover>.arrow,.popover>.arrow:after{
position:absolute;
display:block;
width:0;
height:0;
border-color:transparent;
border-style:solid
}
.popover>.arrow{
border-width:11px
}
.popover>.arrow:after{
content:"";
border-width:10px
}
.popover.top>.arrow{
bottom:-11px;
left:50%;
margin-left:-11px;
border-top-color:#999;
border-top-color:rgba(0,0,0,.25);
border-bottom-width:0
}
.popover.top>.arrow:after{
bottom:1px;
margin-left:-10px;
content:" ";
border-top-color:#fff;
border-bottom-width:0
}
.popover.right>.arrow{
top:50%;
left:-11px;
margin-top:-11px;
border-right-color:#999;
border-right-color:rgba(0,0,0,.25);
border-left-width:0
}
.popover.right>.arrow:after{
bottom:-10px;
left:1px;
content:" ";
border-right-color:#fff;
border-left-width:0
}
.popover.bottom>.arrow{
top:-11px;
left:50%;
margin-left:-11px;
border-top-width:0;
border-bottom-color:#999;
border-bottom-color:rgba(0,0,0,.25)
}
.popover.bottom>.arrow:after{
top:1px;
margin-left:-10px;
content:" ";
border-top-width:0;
border-bottom-color:#fff
}
.popover.left>.arrow{
top:50%;
right:-11px;
margin-top:-11px;
border-right-width:0;
border-left-color:#999;
border-left-color:rgba(0,0,0,.25)
}
.popover.left>.arrow:after{
right:1px;
bottom:-10px;
content:" ";
border-right-width:0;
border-left-color:#fff
}
.carousel{
position:relative
}
.carousel-inner{
position:relative;
width:100%;
overflow:hidden
}
.carousel-inner>.item{
position:relative;
display:none;
-webkit-transition:.6s ease-in-out left;
-o-transition:.6s ease-in-out left;
transition:.6s ease-in-out left
}
.carousel-inner>.item>a>img,.carousel-inner>.item>img{
line-height:1
}
@media all and (transform-3d),(-webkit-transform-3d){
.carousel-inner>.item{
-webkit-transition:-webkit-transform .6s ease-in-out;
-o-transition:-o-transform .6s ease-in-out;
transition:transform .6s ease-in-out;
-webkit-backface-visibility:hidden;
backface-visibility:hidden;
-webkit-perspective:1000px;
perspective:1000px
}
.carousel-inner>.item.active.right,.carousel-inner>.item.next{
left:0;
-webkit-transform:translate3d(100%,0,0);
transform:translate3d(100%,0,0)
}
.carousel-inner>.item.active.left,.carousel-inner>.item.prev{
left:0;
-webkit-transform:translate3d(-100%,0,0);
transform:translate3d(-100%,0,0)
}
.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{
left:0;
-webkit-transform:translate3d(0,0,0);
transform:translate3d(0,0,0)
}

}
.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{
display:block
}
.carousel-inner>.active{
left:0
}
.carousel-inner>.next,.carousel-inner>.prev{
position:absolute;
top:0;
width:100%
}
.carousel-inner>.next{
left:100%
}
.carousel-inner>.prev{
left:-100%
}
.carousel-inner>.next.left,.carousel-inner>.prev.right{
left:0
}
.carousel-inner>.active.left{
left:-100%
}
.carousel-inner>.active.right{
left:100%
}
.carousel-control{
position:absolute;
top:0;
bottom:0;
left:0;
width:15%;
font-size:20px;
color:#fff;
text-align:center;
text-shadow:0 1px 2px rgba(0,0,0,.6);
filter:alpha(opacity=50);
opacity:.5
}
.carousel-control.left{
background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));
background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
background-repeat:repeat-x
}
.carousel-control.right{
right:0;
left:auto;
background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);
background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);
background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));
background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
background-repeat:repeat-x
}
.carousel-control:focus,.carousel-control:hover{
color:#fff;
text-decoration:none;
filter:alpha(opacity=90);
outline:0;
opacity:.9
}
.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{
position:absolute;
top:50%;
z-index:5;
display:inline-block;
margin-top:-10px
}
.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{
left:50%;
margin-left:-10px
}
.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{
right:50%;
margin-right:-10px
}
.carousel-control .icon-next,.carousel-control .icon-prev{
width:20px;
height:20px;
font-family:serif;
line-height:1
}
.carousel-control .icon-prev:before{
content:'\2039'
}
.carousel-control .icon-next:before{
content:'\203a'
}
.carousel-indicators{
position:absolute;
bottom:10px;
left:50%;
z-index:15;
width:60%;
padding-left:0;
margin-left:-30%;
text-align:center;
list-style:none
}
.carousel-indicators li{
display:inline-block;
width:10px;
height:10px;
margin:1px;
text-indent:-999px;
cursor:pointer;
background-color:#000\9;
background-color:rgba(0,0,0,0);
border:1px solid #fff;
border-radius:10px
}
.carousel-indicators .active{
width:12px;
height:12px;
margin:0;
background-color:#fff
}
.carousel-caption{
position:absolute;
right:15%;
bottom:20px;
left:15%;
z-index:10;
padding-top:20px;
padding-bottom:20px;
color:#fff;
text-align:center;
text-shadow:0 1px 2px rgba(0,0,0,.6)
}
.carousel-caption .btn{
text-shadow:none
}
@media screen and (min-width:768px){
.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{
width:30px;
height:30px;
margin-top:-15px;
font-size:30px
}
.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{
margin-left:-15px
}
.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{
margin-right:-15px
}
.carousel-caption{
right:20%;
left:20%;
padding-bottom:30px
}
.carousel-indicators{
bottom:20px
}

}
.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{
display:table;
content:" "
}
.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{
clear:both
}
.center-block{
display:block;
margin-right:auto;
margin-left:auto
}
.pull-right{
float:right!important
}
.pull-left{
float:left!important
}
.hide{
display:none!important
}
.show{
display:block!important
}
.invisible{
visibility:hidden
}
.text-hide{
font:0/0 a;
color:transparent;
text-shadow:none;
background-color:transparent;
border:0
}
.hidden{
display:none!important
}
.affix{
position:fixed
}
@-ms-viewport{
width:device-width
}
.visible-lg,.visible-md,.visible-sm,.visible-xs{
display:none!important
}
.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{
display:none!important
}
@media (max-width:767px){
.visible-xs{
display:block!important
}
table.visible-xs{
display:table!important
}
tr.visible-xs{
display:table-row!important
}
td.visible-xs,th.visible-xs{
display:table-cell!important
}

}
@media (max-width:767px){
.visible-xs-block{
display:block!important
}

}
@media (max-width:767px){
.visible-xs-inline{
display:inline!important
}

}
@media (max-width:767px){
.visible-xs-inline-block{
display:inline-block!important
}

}
@media (min-width:768px) and (max-width:991px){
.visible-sm{
display:block!important
}
table.visible-sm{
display:table!important
}
tr.visible-sm{
display:table-row!important
}
td.visible-sm,th.visible-sm{
display:table-cell!important
}

}
@media (min-width:768px) and (max-width:991px){
.visible-sm-block{
display:block!important
}

}
@media (min-width:768px) and (max-width:991px){
.visible-sm-inline{
display:inline!important
}

}
@media (min-width:768px) and (max-width:991px){
.visible-sm-inline-block{
display:inline-block!important
}

}
@media (min-width:992px) and (max-width:1199px){
.visible-md{
display:block!important
}
table.visible-md{
display:table!important
}
tr.visible-md{
display:table-row!important
}
td.visible-md,th.visible-md{
display:table-cell!important
}

}
@media (min-width:992px) and (max-width:1199px){
.visible-md-block{
display:block!important
}

}
@media (min-width:992px) and (max-width:1199px){
.visible-md-inline{
display:inline!important
}

}
@media (min-width:992px) and (max-width:1199px){
.visible-md-inline-block{
display:inline-block!important
}

}
@media (min-width:1200px){
.visible-lg{
display:block!important
}
table.visible-lg{
display:table!important
}
tr.visible-lg{
display:table-row!important
}
td.visible-lg,th.visible-lg{
display:table-cell!important
}

}
@media (min-width:1200px){
.visible-lg-block{
display:block!important
}

}
@media (min-width:1200px){
.visible-lg-inline{
display:inline!important
}

}
@media (min-width:1200px){
.visible-lg-inline-block{
display:inline-block!important
}

}
@media (max-width:767px){
.hidden-xs{
display:none!important
}

}
@media (min-width:768px) and (max-width:991px){
.hidden-sm{
display:none!important
}

}
@media (min-width:992px) and (max-width:1199px){
.hidden-md{
display:none!important
}

}
@media (min-width:1200px){
.hidden-lg{
display:none!important
}

}
.visible-print{
display:none!important
}
@media print{
.visible-print{
display:block!important
}
table.visible-print{
display:table!important
}
tr.visible-print{
display:table-row!important
}
td.visible-print,th.visible-print{
display:table-cell!important
}

}
.visible-print-block{
display:none!important
}
@media print{
.visible-print-block{
display:block!important
}

}
.visible-print-inline{
display:none!important
}
@media print{
.visible-print-inline{
display:inline!important
}

}
.visible-print-inline-block{
display:none!important
}
@media print{
.visible-print-inline-block{
display:inline-block!important
}

}
@media print{
.hidden-print{
display:none!important
}

}</style><center><div style="width:805px;" align="center">
        <div id="add_content_mail" class="content_full ui-sortable" style="background-color: rgb(123, 121, 145);">
                       
        <div id="initDiv6Main" class="mainDIV" name="initDiv" style="position:relative"><div id="initDiv6Edl" class="delEdit" style="display: none;"><a title="Edit" href="#" id="initDiv6Edt" onclick="" class="editItem" style="background:url(images/edt.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title="Delete" href="#" class="deleteItem" id="initDiv6Del" onclick="" style="background:url(images/del.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="DivinitDiv6" class="divider" style="width: 803px; height: 74px;"><hr></div></div><div id="initDiv5Main" class="mainDIV" name="initDiv" style="position:relative"><div id="initDiv5Edl" class="delEdit" style="display: none;"><a title="Edit" href="#" id="initDiv5Edt" onclick="" class="editItem" style="background:url(images/edt.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title="Delete" href="#" class="deleteItem" id="initDiv5Del" onclick="" style="background:url(images/del.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="DivinitDiv5" class="divider"><hr></div></div><div id="initImg3Main" class="mainDIV" name="initImg" style="position:relative"><div id="initImg3Edl" class="delEdit" style="display: none;"><a title="Edit" href="#" id="initImg3Edt" onclick="" class="editItem" style="background:url(images/edt.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title="Delete" href="#" class="deleteItem" id="initImg3Del" onclick="" style="background:url(images/del.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="initImg3Image" class="droparea" style="background-color: rgb(255, 255, 255);"><img src="data:image/png;base64,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np6bXllafv6hZ/Y/9tyOfbsGvf7JYyc3btt45buuOfDca4/d+eD0qunnHniaPG/auWXd1g0P/s29933t7nVb18+umfuNf/x7V73nuqOvvfHVf/oXR19/c/vF2zfu2HL3l75/8PlXXaezedeWTTu3rF6/hpn90Ltup9A7gqmZqeXFlQPPvbph+6Y911zy1qFjD379xytLK8uLS2dPngGw+8q9xw4ceeAbPz5/5tyWi3fMb16/ZtP8ez5766njJx/73sPs/Y59OycmJ575yU+fe+gZ13GX3HjZm68efuAb9xx68fW5tauff/CpD/7yR9/1sfcfe/3Ne778gx9/5Yer1q1et3n9j//yzge/fe8l112xcn5p3zuumF0z6wfD5YXFR75z3+bdWy6+/tJDLxy450vff+bHP12/bcPe6/b95v/z7117643P/OSJ5x94atDrd7odWUxoWu7RX+m5bueS6y+/9QsfXrNh7Xf/8BuPfOf+Y4eOdjpuzzWXfOYf/tLWPdv9cDi/ecMnfv/z+66/7LEfPvSdP/j6ySMnVpZX9ly999bPfehdH7vl1PETf/Ov/vJHX/7uZTdcsWbjuqvefd1w6P/4v/z/3vkX357fvGHnpRe98vSLT/348aVzCxdfc+nuKy5+4p6H/+K/+8MDz70yMTnx6b/3yx/5tU+6TqW/cFOzM0R0z1e+T3Drt2yanpm+56t3gmnzrm3zm9afO3n2pSdeWLdpw87LLnrqJ4/d/VffO7T/wKbdW2/51Ac//x//xs13vO+n9z728Hfvu+Kd127aufWVJ/f/8EvfXTh9jof++KGjs6tn59aseuGRZ56+74mP/c5n3/fpD54+fuqb/+LLrz77yrlTZ1etW3P1e6//3D/4ZR56Zu52nOu4gy+89qO//MGeK/defvM1rz3zyt1/9f1te3fccNvNM7MznU7n7Ftn7vvqjxbOLVx3yzs2796yev3aR3/wwAPf/vHq+TXD/mB61cw7P/reWz/3oZNHT9z7lTt/evejg8Fwem765jve84HPf/i2L37k0P4DT9//+LptG3bs29Xpdt//2Q/2llbu+ovvnT1x+qIr9mzcsfn5h5554+WDw8Fgem62rgchlXWDeKyFW5erJC2CXK/DMoyKRakIMZ4FQqNTi8I40Tdb66iMYEEmbC/swJwKZp00TBYJh5JsavRS1UfntFkk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XX/jh24+8urh4crA94d+6LsTnR2X7tq6d/vajfOdbvf4oaNP/ujRFx96enrVzMT0JBHY8xsvHXjr0PTaTfMn33xramby0puunJqdOn38FA09wVnOTEqSApAf8rA3GA6Gw4HvDwZ+MCDmyoyguuETkxOHX3j9+Qef2bBj0xXvumbXFXu73S5z5VPAIWbQex56X9EzE1OTnYlOf6U37A2qVdkPh2/sP9BbXNmyd/vRA2+uml97xTuvXrN+7fFDRwe9wbA/IOa5+VV7r71kYnJi9fq1RPT8A08/8p2fnDpycs2Gta7rYi+hlV/Fg6HruqmZqU6n21te6U5OwMEPeHJqav3WjTOrZhbPLhLRus3rV82vOvLaGxNT3UGfh4PhzNzsmg3rBoPBwplzdafh4vKjdz7w9P0//a1//Pdv/dyHe8sr/V7fe++cm5icXDi78IM//cYLjzy195rLtu7esXH7pvnNGz7225+/5n03/vX//GevPfvym68e9kNfeZeEdt3+Su/cyTOu6zquM0uzfuCJaNOOLavmV8+umptdM0dET/3k8Ye/95PFc4vTc9MTkxPOOfa+t9Ib9gfe86DfIyLX6YDghzzo9afWrpqcnvTe93t9JuIh+4FfvW5tp9shYGVp+cDzr64srWzYtjEIR733C6fPLZ49Pz03Mzk9CaKh93448N7XEU/MPPSevXNuZXF5eXF5w9bu6nVrCegtrTjn+r3+1Oz0mg3z3YnO4rnzveUVdEDMp46ffPQHD15/203v++wH3/eZD2zcsen8mYW6mOSir79AGKqlf9RhM13xSv3rUu+sMu9UaSYvERIr1kSQV6KBHtpVoGBQSFxCZLBkIZacJNOjiyD50C2YJBzo+oqsWrZzhIa9cmSxXFOOJy/s6wo8VFa7QwHICtbKct6Qc5xVsg5boeNpp5dSx4dnhORNmufVbRH75AIuUDFZj5lEkjYVjD2VGtByB852XKCt6lYuyo00tCx8tFxBf2FoyuzrQMFGYQzAQmmxEBrWYrQNdl4hbGW7CsdAkV+jelNEid/MjWqzaITpnhVtmofs/WC4en71mZNnv/RP//zRux8+euTo9e+64df/09/4hV/dPjE5MegPht5PTHa95x9/8yd//F//m0/+zmfefO2NmdmZX/8//+bqtau/+W//5uCLB9ZunK89mYiG3vPQL5xemN84f8ev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" id="initImg3file_preview" style="max-width: 100%; max-height: 100%; opacity: 1;"></div><input name="initImg3file" id="initImg3file" accept="image/*" style="display: none;" class="imageFile" type="file"></div><div id="initDiv7Main" class="mainDIV" name="initDiv" style="position:relative"><div id="initDiv7Edl" class="delEdit" style="display: none;"><a title="Edit" href="#" id="initDiv7Edt" onclick="" class="editItem" style="background:url(images/edt.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title="Delete" href="#" class="deleteItem" id="initDiv7Del" onclick="" style="background:url(images/del.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="DivinitDiv7" class="divider"><hr></div></div><div id="initDiv8Main" class="mainDIV" name="initDiv" style="position:relative"><div id="initDiv8Edl" class="delEdit" style="display: none;"><a title="Edit" href="#" id="initDiv8Edt" onclick="" class="editItem" style="background:url(images/edt.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title="Delete" href="#" class="deleteItem" id="initDiv8Del" onclick="" style="background:url(images/del.png)">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="DivinitDiv8" class="divider"><hr></div></div></div>
                
        <!--<div id="add_content_mail1" class="content_right">
                        
        </div>-->
    </div></center>