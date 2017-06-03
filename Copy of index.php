<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mBuilder.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
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
	
	.TButton
	{
		fcfbfa 1px,#e8ebed);
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
		fcfbfa 1px,#e8ebed);
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
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Add Items</h4>
        <div class="TButton" style="background-image:url(images/TextI.png); background-repeat:no-repeat; background-position:top center;">
        	Text
        </div>&nbsp;&nbsp;&nbsp;
        <div class="TButton" style="background-image:url(images/imageI.png); background-repeat:no-repeat; background-position:top center;">
        	Image
        </div><br /><br />
        <div class="TButton" style="background-image:url(images/imageTextI.png); background-repeat:no-repeat; background-position:top center;">
       	 	Image/Text
        </div>&nbsp;&nbsp;
        <div class="TButton" style="background-image:url(images/dividerI.png); background-repeat:no-repeat; background-position:top center;">
        	Divider
        </div><br /><br />
        <div class="TButton" style="background-image:url(images/buttonI.png); background-repeat:no-repeat; background-position:top center;">
        	Button
        </div><br>
        
        <br>
        <br>
        <br>
        <br>

        <div class="SButton">
            Save
        </div><br>


    </div>
    <div class="col-sm-9">
      <h4><small>Contect Area</small></h4>
      <hr>
      	
      	<div id="add_content_mail">
        	
        </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>AddOfc</p>
</footer>

</body>
</html>
