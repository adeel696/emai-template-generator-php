function getStyle(className) {
    var classes = document.styleSheets[0].rules || document.styleSheets[0].cssRules
	
    for(var x=0;x<classes.length;x++) {
    	if(classes[x].selectorText==className) {
			(classes[x].cssText) ? alert(classes[x].cssText) : alert(classes[x].style.cssText);
		}
    }
}
$(document).ready(function() {
	
	//getStyle('.btn');
	var i;
	var colorID='';
	var AddItemFlag=0;
	$('#editor').Editor();
	
	bindMailContent(); //Bind prev content
	
	$('#buttonBar > div').each(function () { 
		$("#"+this.id).draggable({ connectToSortable: "#add_content_mail, #add_content_mail1" , helper: function(e) {
			AddItemFlag=1;
			var cID=this.id;
			var rtnData=getDivContent(cID);
			return 	rtnData;
		},
         });
	});
	
	$( "#add_content_mail, #add_content_mail1" ).sortable({
      update: function( event , ui ) {

		 var cID=ui.item.attr("name").replace('Main', ''); //Get Current Div ID
		 
		 if(AddItemFlag==1)
		 {
			//alert("#"+ui.item.attr("id"));
			$("#"+ui.item.attr("id")).attr("style", "position:relative");
			AddItemFlag=0;
		 	AddMailContent(cID);
		 }
      }
    });
	
	
	
	var glbEdit;
    $('.TButton').click(function() { 
		//AddMailContent(this.id);
    });
	
	
	//function AddMailContent(ContentID)
	AddMailContent = function(ContentID)
	{
		var text = ContentID+i;
		glbEdit="#"+text;
		//alert(glbEdit);
		AddFuncBindFunc(text);
		$("#"+text+"Main").focus();
		bindMailContent();
	};
	
	//Retrun Div Value
	function getDivContent(ContentID)
	{
		i=$('#counter').val();
		i++;
		$('#counter').val(i);
		var text = ContentID+i;			
		if (ContentID == 'initTxt')
		{
			return "<div id=\""+text+"Main\" name=\""+ContentID+"\" class=\"mainDIV\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id=\""+text+"Text\" class=\"editor\" contenteditable=\"true\" data-text=\"Enter text here\" ></div></div>";
		}
		else
		if (ContentID == 'initImg')
		{
			
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id='"+text+"Image' class=\"droparea\" ><img src=\"images/place800x200.png\" id=\""+text+"file_preview\" style=\"max-width:100%; max-height:100%;\" ></div><input type=\"file\" name=\""+text+"file\" id=\""+text+"file\" accept=\"image/*\" style=\"display: none;\" class=\"imageFile\" ></div></div>";
		}
		else
		if (ContentID == 'initImgTxt')
		{
			
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id='"+text+"Image'  class=\"dropareaIt\"><img src=\"images/place400x400.png\" id=\""+text+"file_preview\" style=\"max-width:100%; max-height:100%;\"></div><input type=\"file\" name=\""+text+"file\" id=\""+text+"file\" accept=\"image/*\" style=\"display: none;\" class=\"imageFile\" ><div id=\""+text+"Text\" class=\"editorIt\" align=\"left\" contenteditable=\"true\" data-text=\"Enter text here\" ></div></div>";
		}
		else
		if (ContentID == 'initDiv')
		{
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem'  style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id=\"Div"+text+"\" class=\"divider\" ><hr /></div></div>";
		}
		else
		if (ContentID == 'initBtn')
		{
			
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="+text+"ButtonDiv class=\"btnEditor\" align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div></div>";
		}
		else
		if (ContentID == 'initImgTxtBtn')
		{
			
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id='"+text+"Image'  class=\"dropareaIt\" ><img src=\"images/place400x400.png\" id=\""+text+"file_preview\" style=\"max-width:100%; max-height:100%;\"></div><input type=\"file\" name=\""+text+"file\" id=\""+text+"file\" accept=\"image/*\" style=\"display: none;\" class=\"imageFile\" ><div id=\""+text+"txtBtnDiv\" class=\"txtBtnDiv\"><div id=\""+text+"Text\" class=\"editorImgtxtBtn \" align=\"left\" contenteditable=\"true\" data-text=\"Enter text here\" ></div><div id="+text+"ButtonDiv class=\"btnEditortxtBtn \" align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div></div></div>";
		}
		else
		if (ContentID == 'initTxtBtn')
		{
			
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div class=\""+text+"txtBtnDiv\"><div id=\""+text+"Text\" align=\"left\" class=\"editor\" contenteditable=\"true\" data-text=\"Enter text here\" ></div><div id="+text+"ButtonDiv align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div></div></div>";
		}
		else
		if (ContentID == 'initTab')
		{
			
			//return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div class=\""+text+"txtBtnDiv\"><div id=\""+text+"Text\" align=\"left\" class=\"editor\" contenteditable=\"true\" data-text=\"Enter text here\" ></div><div id="+text+"ButtonDiv align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div></div></div>";
			return "<div id='"+text+"Main' class='mainDIV' name=\""+ContentID+"\" style=\"position:relative;\"> <div id='"+text+"Main' class='mainDIV' , name=\""+ContentID+"\" style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a title=\"Edit\" href=\"#\" id='"+text+"Edt' onclick='' class='editItem' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a title=\"Delete\"  href=\"#\" class='deleteItem' id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div class=\"col-xs-12 col-sm-6 col-lg-4\"> <div class=\"box\"> <div class=\"icon\"> <div class=\"info\"><div id=\""+text+"Text\" align=\"left\" class=\"editorTab\" contenteditable=\"true\" data-text=\"Enter text here\" ></div> <img src=\"images/place200x200.png\" class=\"img-responsive\"> <div id=\""+text+"Text\" align=\"left\" class=\"editorTab\" contenteditable=\"true\" data-text=\"Enter text here\" ></div> <div id="+text+"ButtonDiv align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div> </div> </div> <div class=\"space\"></div> </div> </div>	<div class=\"col-xs-12 col-sm-6 col-lg-4\"> <div class=\"box\"> <div class=\"icon\"> <div id=\""+text+"Text\" align=\"left\" class=\"editorTab\" contenteditable=\"true\" data-text=\"Enter text here\" ></div> <img src=\"images/place200x200.png\" class=\"img-responsive\"> <div id=\""+text+"Text\" align=\"left\" class=\"editorTab\" contenteditable=\"true\" data-text=\"Enter text here\" ></div> <div id="+text+"ButtonDiv align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div> </div> </div> <div class=\"space\"></div> </div> </div>	<div class=\"col-xs-12 col-sm-6 col-lg-4\"> <div class=\"box\"> <div class=\"icon\"> <div id=\""+text+"Text\" align=\"left\" class=\"editorTab\" contenteditable=\"true\" data-text=\"Enter text here\" ></div> <img src=\"images/place200x200.png\" class=\"img-responsive\"> <div id=\""+text+"Text\" align=\"left\" class=\"editorTab\" contenteditable=\"true\" data-text=\"Enter text here\" ></div> <div id="+text+"ButtonDiv align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\" href=\"http://www.xyz.com\">Visit</a></div> </div> </div> <div class=\"space\"></div> </div> </div> </div> </div></div>";
		}
	}
	
	//Bind Function
	function bindMailContent()
	{
		
		//For Edit bind the function
		$(".editItem").click(function() {
			var ContentID=this.id.replace('Edt', '');
			AddFuncBindFunc(ContentID);
		});

		$(".deleteItem").click(function() {
			var DivId=("#"+this.id.replace('Del', '')+"Main");
			$(DivId).remove();
			$("#add_content_mail, #add_content_mail1" ).sortable("enable");
			$('#buttonBar').fadeIn();
			$("#editBarButton").fadeOut();
			$('#editBarColor').fadeOut();
			$('#editBarAll').fadeOut();
			$('#editBarButtonForm input').unbind( "change" );
			$('#editBarButtonForm a').unbind( "click" );
			$('#btnDoneAll').unbind( "click" );
			//$('#editBarText').fadeOut();
			$(mainId+"Text").attr("contenteditable", "false");
			colorID = '';
			$(mainId+'Image').unbind();
			$('#editBarImage').fadeOut();
			$('#editBarImageForm input').unbind( "change" );
			$('#editBarImgTxtSForm input').unbind( "change" );
			$('#editBarImageText').fadeOut();
			glbEdit='';
			$('#editBarDiv').fadeOut();
			$('#cPicker').val("#FFFFFF");
			$('#editBarButtonSForm input').unbind( "change" );
		 });
		
		
		$(".mainDIV").hover(function() {
			var text=this.id.replace('Main', '');
			$('#'+text+"Edl").fadeIn();
		  }, function() {
			var text=this.id.replace('Main', '');
			$('#'+text+"Edl").fadeOut();
			//hide = setTimeout(function() {$('#'+text+"Edit").fadeOut("slow");}, 250);
		  });
	}
	
	
	//Add show and bind divs and button
	function AddFuncBindFunc(ContentID)
	{
		var mainId="#"+ContentID;
		var mainType=$("#"+ContentID+"Main").attr("name");
		//alert(mainType +"  "+ mainId);
		if(mainType == 'initBtn')
		{
			
			//alert($(mainId+"Button").html())
			$("#txtLink").val($(mainId+"Button").attr("href"));
			$("#txtLinkText").val($(mainId+"Button").html());
			$('#buttonBar').fadeOut();
			$('#editBarButton').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			colorID = mainId+"Main";
			
			$('#btnDoneAll').click(function(){
				$("#add_content_mail, #add_content_mail1" ).sortable("enable");
				$("#editBarButton").fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				$(mainId+"Button").attr("href", $("#txtLink").val());
				$(mainId+"Button").html($("#txtLinkText").val());
				$('#editBarButtonForm input').unbind( "change" );	
				$('#editBarButtonForm a').unbind( "click" );
				$('#btnDoneAll').unbind( "click" );
				colorID = '';
				
			});
			
			$('#editBarButtonForm input').on('change', function() {
				$(mainId+"ButtonDiv").attr("align", $('input:radio[name=txtLinkText]:checked').val()); 
			});
			$('#editBarButtonForm a').on('click', function() {
			   $(mainId+"Button").attr("class", this.id);
			   
			   /*$(mainId+"Button").attr("style", $("#"+this.id).attr("style"));
			   $(mainId+"Button").attr("onMouseOver", $("#"+this.id).attr("onMouseOver"));
			   $(mainId+"Button").attr("onMouseOut", $("#"+this.id).attr("onMouseOut"));*/

			});
		}
		else
		if(mainType == 'initTxt')
		{
			
			$('#buttonBar').fadeOut();
			//$('#editBarText').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			$(mainId+"Text").attr("contenteditable", "true");
			colorID = mainId+"Text";
			
			$('#btnDoneAll').click(function() {
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				//$('#editBarText').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				$('#btnDoneAll').unbind( "click" );
				
				$(mainId+"Text").attr("contenteditable", "false");	
				colorID = '';
			});
		}
		else
		if(mainType == 'initImg')
		{
			
			$(mainId+'Image').droparea({} , ContentID );
			$('#buttonBar').fadeOut();
			$('#editBarImage').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			colorID = mainId+"Image";
			
			$('#btnDoneAll').click(function(){
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				$(mainId+'Image').unbind();
				$('#editBarImage').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				$('#editBarImageForm input').unbind( "change" );
				$('#editBarImgTxtSForm input').unbind( "change" );
				$('#btnDoneAll').unbind( "click" );
				colorID = '';
			});
			
			$('#editBarImageForm input').on('change', function() {
			   $(mainId+"Image").attr("class", $('input:radio[name=txtImageText]:checked').val()); 
			});
		}
		else
		if(mainType == 'initImgTxt')
		{
			$(mainId+'Image').droparea({} , ContentID );
			$('#buttonBar').fadeOut();
			//$('#editBarText').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarImageText').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			$(mainId+"Text").attr("contenteditable", "true");
			
			colorID = mainId+"Main";
			
			$('#btnDoneAll').click(function() {
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				$(mainId+'Image').unbind();
				//$('#editBarText').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarImageText').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				$('#btnDoneAll').unbind( "click" );
				$('#editBarImgTxtForm input').unbind( "change" );
				$('#editBarImgTxtSForm input').unbind( "change" );
				colorID = '';
				
				$(mainId+"Text").attr("contenteditable", "false");
				glbEdit='';					
			});
			
			
			$('#editBarImgTxtForm input').on('change', function() {
				$(mainId+"Image").css("float", $('input:radio[name=txtImgTxtAlign]:checked').val());
			});
			
			$('#editBarImgTxtSForm input').on('change', function() {
			   $(mainId+"Image").css("height", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"Image").css("width", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"Text").css("height", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"Text").css("max-height", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"Text").css("max-height", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"file_preview").attr("src", "images/place"+$('input:radio[name=txtImgTxtSize]:checked').val()+"x"+$('input:radio[name=txtImgTxtSize]:checked').val()+".png");
			});
		}
		else
		if(mainType == 'initDiv')
		{
			$('#buttonBar').fadeOut();
			$('#editBarDiv').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			
			colorID = mainId+"Main";
			
			$('#btnDoneAll').click(function() {
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				$('#editBarDiv').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				
				$('#btnDoneAll').unbind( "click" );
				$('#cPicker').val("#FFFFFF");
				colorID='';
			});
		}
		else
		if(mainType == 'initImgTxtBtn')
		{
			
			$(mainId+'Image').droparea({} , ContentID );
			$("#txtLink").val($(mainId+"Button").attr("href"));
			$("#txtLinkText").val($(mainId+"Button").html());
			$('#editBarButton').fadeIn();
			$('#buttonBar').fadeOut();
			//$('#editBarText').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarImageText').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			$(mainId+"Text").attr("contenteditable", "true");
			
			colorID = mainId+"Main";
			
			$('#btnDoneAll').click(function() {
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				$(mainId+'Image').unbind();
				$("#editBarButton").fadeOut();
				//$('#editBarText').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarImageText').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				
				$(mainId+"Button").attr("href", $("#txtLink").val());
				$(mainId+"Button").html($("#txtLinkText").val());
				
				$('#btnDoneAll').unbind( "click" );
				$('#editBarImgTxtForm input').unbind( "change" );
				$('#editBarButtonForm input').unbind( "change" );
				$('#editBarButtonSForm input').unbind( "change" );
				$('#editBarButtonForm a').unbind( "click" );
				
				colorID = '';

				$(mainId+"Text").attr("contenteditable", "false");
				glbEdit='';					
			});
			
			
			$('#editBarImgTxtForm input').on('change', function() {
				$(mainId+"Image").css("float", $('input:radio[name=txtImgTxtAlign]:checked').val());
			});
			
			$('#editBarButtonForm input').on('change', function() {
				$(mainId+"ButtonDiv").attr("align", $('input:radio[name=txtLinkText]:checked').val()); 
			});
			$('#editBarButtonForm a').on('click', function() {
			   $(mainId+"Button").attr("class", this.id);
			});
			$('#editBarImgTxtSForm input').on('change', function() {
			   $(mainId+"Image").css("height", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"Image").css("width", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"txtBtnDiv").css("height", $('input:radio[name=txtImgTxtSize]:checked').val()+"px");
			   $(mainId+"Text").css("height", ($('input:radio[name=txtImgTxtSize]:checked').val()-35)+"px");
			   $(mainId+"Text").css("max-height", ($('input:radio[name=txtImgTxtSize]:checked').val()-35)+"px");
			   $(mainId+"file_preview").attr("src", "images/place"+$('input:radio[name=txtImgTxtSize]:checked').val()+"x"+$('input:radio[name=txtImgTxtSize]:checked').val()+".png");
			});
		}
		else
		if(mainType == 'initTxtBtn')
		{
			$('#editBarButton').fadeIn();
			$('#buttonBar').fadeOut();
			//$('#editBarText').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			$(mainId+"Text").attr("contenteditable", "true");
			
			colorID = mainId+"Main";
			
			$('#btnDoneAll').click(function() {
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				$(mainId+'Image').unbind();
				$("#editBarButton").fadeOut();
				//$('#editBarText').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				
				$(mainId+"Button").attr("href", $("#txtLink").val());
				$(mainId+"Button").html($("#txtLinkText").val());
				
				$('#btnDoneAll').unbind( "click" );
				
				colorID = '';

				$(mainId+"Text").attr("contenteditable", "false");
				glbEdit='';					
			});
			
			
			$('#editBarButtonForm input').on('change', function() {
				$(mainId+"ButtonDiv").attr("align", $('input:radio[name=txtLinkText]:checked').val()); 
			});
			$('#editBarButtonForm a').on('click', function() {
			   $(mainId+"Button").attr("class", this.id);
			});
		}
		else
		if(mainType == 'initTab')
		{
			$(mainId+'Image').droparea({} , ContentID );
			
			$('#editBarButton').fadeIn();
			$('#buttonBar').fadeOut();
			//$('#editBarText').fadeIn();
			$('#editBarColor').fadeIn();
			$('#editBarAll').fadeIn();
			$( "#add_content_mail, #add_content_mail1" ).sortable("disable");
			$(mainId+"Text").attr("contenteditable", "true");
			
			colorID = mainId+"Main";
			
			$('#btnDoneAll').click(function() {
				$( "#add_content_mail, #add_content_mail1" ).sortable("enable");
				$(mainId+'Image').unbind();
				$("#editBarButton").fadeOut();
				//$('#editBarText').fadeOut();
				$('#editBarColor').fadeOut();
				$('#editBarAll').fadeOut();
				$('#buttonBar').fadeIn();
				
				$(mainId+"Button").attr("href", $("#txtLink").val());
				$(mainId+"Button").html($("#txtLinkText").val());
				
				$('#btnDoneAll').unbind( "click" );
				
				colorID = '';

				$(mainId+"Text").attr("contenteditable", "false");
				glbEdit='';					
			});
			
			
			$('#editBarButtonForm input').on('change', function() {
				$(mainId+"ButtonDiv").attr("align", $('input:radio[name=txtLinkText]:checked').val()); 
			});
			$('#editBarButtonForm a').on('click', function() {
			   $(mainId+"Button").attr("class", this.id);
			});
		}
	}
	
	$('#SButton').click(function() {
		//$(".delEdit").remove();
		//$(".imageFile").remove();
       	var content = $('#DivContentArea').html();
		content="<center><div style=\"width:805px;\" align=\"center\">"+content+"</div></center>";
    	$.ajax({
			  type: 'POST',
			  url: 'safeMail.php',
			  data: {id: content}
			}).done(
					function( data ){
						//alert(data);
					});
     });
	
	$('#CButton').click(function() {
       $('#add_content_mail, #add_content_mail1').html("");
     });
	
	
	$(window).scroll(function(){
	 	//$("#buttonBar").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
	 	//$("#editBar").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
		//$("#add_content_mail, #add_content_mail1").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
	});
	var colpick = $('#cPickerM').each( function() {
		$(this).minicolors({
		  change: function(hex, opacity) {
			$("#add_content_mail, #add_content_mail1").css("background-color", hex); 
		  },
		  theme: 'bootstrap'
		});
	});
	
	var colpick = $('#cPicker').each( function() {
		$(this).minicolors({
		  change: function(hex, opacity) {
			$(colorID).css("background-color", hex); 
		  },
		  theme: 'bootstrap'
		});
	});
	
	
});

/*$(function() {
	$( "#add_content_mail, #add_content_mail1" ).draggable();
});*/
