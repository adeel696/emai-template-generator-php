$(document).ready(function() {
	var i=0;
	$('#editor').Editor();
	
	$( "#add_content_mail" ).sortable();
	
	$('#buttonBar > div').each(function () { 
		$("#"+this.id).draggable({  helper: "clone" }); 
	});
	
	$( "#add_content_mail" ).droppable({
      drop: function( event , ui ) {
		 if($(ui.draggable).parent().attr('id')=="buttonBar")
		 {
		 	AddMailContent($(ui.draggable).attr('id'));
		 }
      }
    });
	
	
	
	var glbEdit;
    $('.TButton').click(function() { 
		AddMailContent(this.id);
    });
	
	
	//function AddMailContent(ContentID)
	AddMailContent = function(ContentID)
	{
		i++;
		var text = ContentID+i;
		glbEdit="#"+text;
		//alert(glbEdit);
		if (ContentID == 'initTxt')
	   	{
			$('#add_content_mail').append("<div id='"+text+"Main' style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a href='#' title=\"Edit\" id='"+text+"Edt' onclick='' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a href='#' title=\"Delete\" id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id=\""+text+"Text\" class=\"editor\" contenteditable=\"true\" data-text=\"Enter text here\" ></div></div>");
			$('#buttonBar').fadeOut();
			$('#editBarText').fadeIn();
			$( "#add_content_mail" ).sortable("disable");
			
			$('#btnDoneText').click(function() {
				$( "#add_content_mail" ).sortable("enable");
				$('#editBarText').fadeOut();
				$('#buttonBar').fadeIn();
				
				//$('#editBar').html("");
				//$().attr("contenteditable").attr("false");
				$(glbEdit+"Text").attr("contenteditable", "false");
				glbEdit='';					
			});
		}
		else
		if (ContentID == 'initImg')
		{
			
			$('#add_content_mail').append("<div id='"+text+"Main' style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a href='#' title=\"Edit\" id='"+text+"Edt' onclick='' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a href='#' title=\"Delete\" id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id='"+text+"Image' class=\"droparea text-center\" ><img src=\"images/place.png\" id=\"file_preview"+text+"\" ></div><input type=\"file\" name=\""+text+"file\" id=\""+text+"file\" accept=\"image/*\" style=\"display: none;\" ></div></div>");
			
			$('#'+text+'Image').droparea({} , text );
			
			$('#buttonBar').fadeOut();
			$('#editBarImage').fadeIn();
			$( "#add_content_mail" ).sortable("disable");
			
			$('#btnDoneImage').click(function(){
				$( "#add_content_mail" ).sortable("enable");
				$('#'+text+'Image').unbind();
				$('#editBarImage').fadeOut();
				$('#buttonBar').fadeIn();
				$('#editBarImageForm input').unbind( "change" );
				$('#btnDoneImage').unbind( "click" );
			});
			
			$('#editBarImageForm input').on('change', function() {
			   $(glbEdit+"Image").attr("class", $('input:radio[name=txtImageText]:checked').val()); 
			});
		}
		else
		if (ContentID == 'initImgTxt')
		{
			
			$('#add_content_mail').append("<div id='"+text+"Main' style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a href='#' title=\"Edit\" id='"+text+"Edt' onclick='' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a href='#' title=\"Delete\" id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id='"+text+"Image' class=\"droparea text-center\" ><img src=\"images/place.png\" id=\"file_preview"+text+"\" ></div><input type=\"file\" name=\""+text+"file\" id=\""+text+"file\" accept=\"image/*\" style=\"display: none;\" ><div id=\""+text+"Text\" class=\"editor\" contenteditable=\"true\" data-text=\"Enter text here\" ></div></div></div>");
			
			$('#'+text+'Image').droparea({} , text );
		}
		else
		if (ContentID == 'initDiv')
		{
			
			$('#add_content_mail').append("<div id='"+text+"Main' style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a href='#' title=\"Edit\" id='"+text+"Edt' onclick='' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a href='#' title=\"Delete\" id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id=\"Div"+text+"\" class=\"editor\" ><hr /></div></div>");
						

		}
		else
		if (ContentID == 'initBtn')
		{
			
			$('#add_content_mail').append("<div id='"+text+"Main' style=\"position:relative;\"><div id='"+text+"Edl' class=\"delEdit\" style=\"display:none\"><a href='#' title=\"Edit\" id='"+text+"Edt' onclick='' style=\"background:url(images/edt.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<a href='#' title=\"Delete\" id='"+text+"Del' onclick='' style=\"background:url(images/del.png)\">&nbsp;&nbsp;&nbsp;&nbsp;</a></div><div id="+text+"ButtonDiv class=\"btnEditor\" align=\"left\"><a id="+text+"Button class=\"btn btn-default\" target=\"_blank\">Visit</a></div></div>");
			$("#txtLink").val("http://www.abc.com");
			$("#txtLinkText").val("Visit");
			$('#buttonBar').fadeOut();
			$('#editBarButton').fadeIn();
			$( "#add_content_mail" ).sortable("disable");
			
			$('#btnDoneButton').click(function(){
				$( "#add_content_mail" ).sortable("enable");
				$('#editBarButton').fadeOut();
				$('#buttonBar').fadeIn();
				$(glbEdit+"Button").attr("href", $("#txtLink").val());
				$(glbEdit+"Button").html($("#txtLinkText").val());
				$('#editBarButtonForm input').unbind( "change" );
				$('#editBarButtonForm a').unbind( "click" );
				$('#btnDoneButton').unbind( "click" );
				
			});
			
			$('#editBarButtonForm input').on('change', function() {
			   $(glbEdit+"ButtonDiv").attr("align", $('input:radio[name=txtLinkText]:checked').val());
			});
			$('#editBarButtonForm a').on('click', function() {
			   $(glbEdit+"Button").attr("class", this.id);
			});
			
		}
		$("#"+text+"Main").focus();

		$(glbEdit+"Main").hover(function() {
			$('#'+text+"Edl").fadeIn();
		  }, function() {
			$('#'+text+"Edl").fadeOut();
			//hide = setTimeout(function() {$('#'+text+"Edit").fadeOut("slow");}, 250);
		  });
		
		$('#'+text+"Edt").click(function() {
			var id=this.id.replace('Edt', '');
			var mainId="#"+id;
			var mainType=mainId.substr(0, (mainId.length)-1);
			//alert(mainType +"  "+ mainId);
			
			if(mainType == '#initBtn')
			{
				
				//alert($(mainId+"Button").html())
				$("#txtLink").val($(mainId+"Button").attr("href"));
				$("#txtLinkText").val($(mainId+"Button").html());
				$('#buttonBar').fadeOut();
				$('#editBarButton').fadeIn();
				$("#add_content_mail").sortable("disable");
				
				$('#btnDoneButton').click(function(){
					$("#add_content_mail" ).sortable("enable");
					$("#editBarButton").fadeOut();
					$('#buttonBar').fadeIn();
					$(mainId+"Button").attr("href", $("#txtLink").val());
					$(mainId+"Button").html($("#txtLinkText").val());
					$('#editBarButtonForm input').unbind( "change" );
					$('#editBarButtonForm a').unbind( "click" );
					$('#btnDoneButton').unbind( "click" );
					
				});
				
				$('#editBarButtonForm input').on('change', function() {
					$(mainId+"ButtonDiv").attr("align", $('input:radio[name=txtLinkText]:checked').val()); 
				});
				$('#editBarButtonForm a').on('click', function() {
				   $(mainId+"Button").attr("class", this.id);
				});
			}
			else
			if(mainType == '#initTxt')
			{
				
				$('#buttonBar').fadeOut();
				$('#editBarText').fadeIn();
				$( "#add_content_mail" ).sortable("disable");
				$(mainId+"Text").attr("contenteditable", "true");
				
				$('#btnDoneText').click(function() {
					$( "#add_content_mail" ).sortable("enable");
					$('#editBarText').fadeOut();
					$('#buttonBar').fadeIn();
					
					//$('#editBar').html("");
					//$().attr("contenteditable").attr("false");
					$(mainId+"Text").attr("contenteditable", "false");
					glbEdit='';					
				});
			}
			else
			if(mainType == '#initImg')
			{
				$(mainId+'Image').droparea({} , id );
				$('#buttonBar').fadeOut();
				$('#editBarImage').fadeIn();
				$( "#add_content_mail" ).sortable("disable");
				$('#btnDoneImage').click(function(){
					$( "#add_content_mail" ).sortable("enable");
					$(mainId+'Image').unbind();
					$('#editBarImage').fadeOut();
					$('#buttonBar').fadeIn();
					$('#editBarImageForm input').unbind( "change" );
					$('#btnDoneImage').unbind( "click" );
				});
				
				$('#editBarImageForm input').on('change', function() {
				   $(mainId+"Image").attr("class", $('input:radio[name=txtImageText]:checked').val()); 
				});
			}
			
		 });
		
		$('#'+text+"Del").click(function() {
			var DivId=("#"+this.id.replace('Del', '')+"Main");
			//alert(DivId)
			$(DivId).remove();
			$('#editBarText').fadeOut();
			$('#editBarButton').fadeOut();
			$('#editBarImage').fadeOut();
			$('#buttonBar').fadeIn()
		 });
	};
	
	
	$('#SButton').click(function() {
       	var content = $('#add_content_mail').html();
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
       $('#add_content_mail').html("");;
     });
	
	
	$(window).scroll(function(){
	  $("#buttonBar").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
	  $("#editBarText").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
	  $("#editBarImage").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
	  $("#editBarButton").css({"margin-top": ($(window).scrollTop()) + "px", "margin-left":($(window).scrollLeft()) + "px"});
	});
		
});

/*$(function() {
	$( "#add_content_mail" ).draggable();
});*/
