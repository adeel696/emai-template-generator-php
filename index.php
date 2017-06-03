<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Office</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/shop-homepage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"><!-- For Interface -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="editor.css" type="text/css" rel="stylesheet"/>
    
    <link rel="stylesheet" type="text/css" media="all" href="css/jquery.minicolors.css">
    
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="editor.js"></script>
    
    <script type="text/javascript" src="js/jquery.minicolors.min.js"></script>
    
    <script type="text/javascript" src="js/droparea.js"></script>
    <script src="js/mBuilder.js"></script>
   

    
    
</head>
<body>
<div class="container-fluid">
  <div>
        <div>
        	<a href="index.php">Home</a>
        </div>
  </div>
  <div class="row content">
    <div class="col-sm-3 sidenav">
    	<span style="color:  #A00;">
        <span style="font-family: trebuchet ms,sans-serif;">
        <font size="5"><b>Button Bar</b></font>
        </span>
        </span>
        <br /><br /><br /><br />

      	<div id="buttonBar">
          	<h4>Add Items</h4>
            <div id="initTxt" class="TButton" style="background-image:url(images/TextI.png); background-repeat:no-repeat; background-position:top center;">
                Text
            </div>&nbsp;&nbsp;&nbsp;
            <div id="initImg" class="TButton" style="background-image:url(images/imageI.png); background-repeat:no-repeat; background-position:top center;">
                Image
            </div>&nbsp;&nbsp;
            <div id="initImgTxt" class="TButton" style="background-image:url(images/imageTextI.png); background-repeat:no-repeat; background-position:top center;">
                Image/Text
            </div><br /><br />
            <div id="initBtn" class="TButton" style="background-image:url(images/buttonI.png); background-repeat:no-repeat; background-position:top center;">
                Button
            </div>&nbsp;&nbsp;
            <div id="initTxtBtn" class="TButton" style="background-image:url(images/TextButton.png); background-repeat:no-repeat; background-position:top center;">
                Text/Button
            </div>&nbsp;&nbsp;
            <div id="initImgTxtBtn" class="TButton" style="background-image:url(images/imageTextButton.png); background-repeat:no-repeat; background-position:top center;">
                Img/Txt/Btn
            </div>
            <br /><br />
            <div id="initDiv" class="TButton" style="background-image:url(images/dividerI.png); background-repeat:no-repeat; background-position:top center;">
                Divider
            </div>&nbsp;&nbsp;
            <div id="initTab" class="TButton" style="background-image:url(images/dividerI.png); background-repeat:no-repeat; background-position:top center;">
                Tab
            </div>&nbsp;&nbsp;
            <br /><br />
            

            <div>
                <div class="form-group">
                    <strong>Set Background Color</strong><input type="text" id="cPickerM" class="form-control" data-control="wheel" value="#FFFFFF">
                </div>
            </div> 

            <div id="SButton" class="btn btn-primary">
                Save
            </div>
            <div id="CButton" class="btn btn-primary">
                Clear
            </div><br /><br /><br /><br /><br />
      	</div>
        
        
        <div id="editBar">
        
        	<div id="editBarColor" style="display:none;">
                <div>
                    <div class="form-group">
                          <strong>Set Background Color</strong>
                          <input type="text" id="cPicker" class="form-control" data-control="wheel" value="#FFFFFF">
                    </div>
                </div> 
            </div>
            
             <div id="editBarImageText" style="display:none;">
                <div>
                    <strong>Image Text Align</strong>
                    <form id="editBarImgTxtForm">
                    <input type="radio" id="txtImgTxtAlign" name="txtImgTxtAlign" value="Left" checked/>Left&nbsp;
                    <input type="radio" id="txtImgTxtAlign" name="txtImgTxtAlign" value="Right"/>Right&nbsp; 
                    </form>
                    
                    <strong>Image Size</strong>
                    <form id="editBarImgTxtSForm">
                    <input type="radio" id="txtImgTxtSize" name="txtImgTxtSize" value="100" checked/>100x100&nbsp;
                    <input type="radio" id="txtImgTxtSize" name="txtImgTxtSize" value="200"/>200x200&nbsp; 
                    <input type="radio" id="txtImgTxtSize" name="txtImgTxtSize" value="400" checked/>400x400&nbsp;
                    </form>   
                    <br />
                </div> 
            </div>
            
            
                 
            
            <div id="editBarButton" style="display:none;">
                <div>
                    <div>
                        <strong>Add link:</strong> <input class="form-control" type="text" id="txtLink" name="txtLink" value="http://www.abc.com"/>
                        <strong>Add Text:</strong><input class="form-control" type="text" id="txtLinkText" name="txtLinkText" value="Visit"/>
                        <strong>Align</strong>
                        <form id="editBarButtonForm">
                        <input type="radio" id="txtLinkAlign" name="txtLinkText" value="Left" checked/>Left&nbsp;
                        <input type="radio" id="txtLinkAlign" name="txtLinkText" value="Center"/>Center&nbsp;
                        <input type="radio" id="txtLinkAlign" name="txtLinkText" value="Right"/>Right&nbsp;
                        <br />
                        <strong>Button Style</strong><br />
                        <div style="overflow:scroll; height:150px;">
                        <a id="btn" class="btn">Link</a><br /><br />
                        <a id="btn btn-default" class="btn btn-default">Default</a><br /><br />
                        <a id="btn btn-info" class="btn btn-info">Info</a><br /><br />
                        <a id="btn btn-success" class="btn btn-success">Success</a><br /><br />
                        <a id="btn active" class="btn active">Active</a><br /><br />
                        <a id="btn btn-warning" class="btn btn-warning">Warning</a><br /><br />
                        
                        <a id="btn btn-lg" class="btn btn-lg">Link</a><br /><br />
                        <a id="btn btn-default btn-lg" class="btn btn-default btn-lg">Default</a><br /><br />
                        <a id="btn btn-info btn-lg" class="btn btn-info btn-lg">Info</a><br /><br />
                        <a id="btn btn-success btn-lg" class="btn btn-success btn-lg">Success</a><br /><br />
                        <a id="btn active btn-lg" class="btn active btn-lg">Active</a><br /><br />
                        <a id="btn btn-warning btn-lg" class="btn btn-warning btn-lg">Warning</a><br /><br />
                        
                        <a id="btn btn-lg btn-block" class="btn btn-lg btn-block">Link</a><br /><br />
                        <a id="btn btn-default btn-lg btn-block" class="btn btn-default btn-lg btn-block">Default</a><br /><br />
                        <a id="btn btn-info btn-lg btn-block" class="btn btn-info btn-lg btn-block">Info</a><br /><br />
                        <a id="btn btn-success btn-lg btn-block" class="btn btn-success btn-lg btn-block">Success</a><br /><br />
                        <a id="btn active btn-lg btn-block" class="btn active btn-lg btn-block">Active</a><br /><br />
                        <a id="btn btn-warning btn-lg btn-block" class="btn btn-warning btn-lg btn-block">Warning</a><br /><br />
                        </div>
                        </form>
                    </div>
                </div> 
            </div>
            
            <div id="editBarImage" style="display:none;">
                <div>
                    <br />
                    <div>
                        <strong>Align</strong>
                        <form id="editBarImageForm">
                        <input type="radio" id="txtImageText" name="txtImageText" value="droparea text-left"/>Left&nbsp;
                        <input type="radio" id="txtImageText" name="txtImageText" value="droparea text-center" checked/>Center&nbsp;
                        <input type="radio" id="txtImageText" name="txtImageText" value="droparea text-right"/>Right&nbsp;
                        </form>
                    </div>
                </div> 
            </div>
            
            
            
            <div id="editBarAll" style="display:none; min-height:400px;">
                <div>
                    <br />
                    <button id="btnDoneAll" type="button" class="btn btn-primary">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Done Editing
                    </button>
                </div> 
            </div>
        </div>
        
        
      


    </div>
    <div style="background-color:#A0A0A4; height:auto;" align="center">
        <span style="color: rgb(243, 243, 243);">
        <span style="font-family: trebuchet ms,sans-serif;">
        <font size="5"><b>Content Area</b></font>
        </span>
        </span>
        <hr style="margin:5px;">
        <div id="editBarText">
        </div>
        
        <hr style="margin:5px;">
        
        <div id="DivContentArea">
        <div id="add_content_mail" class="content_full">
                       
        </div>
                
        <!--<div id="add_content_mail1" class="content_right">
                        
        </div>-->
    </div>
  </div>
</div>

<div id="editor" style="display:none"></div>
<input style="" id="counter" name="counter" value="0" type="hidden">

<footer id="footer">Copyright</footer>



</body>
</html>
