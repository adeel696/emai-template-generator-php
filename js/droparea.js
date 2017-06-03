/**
 * Droparea - Makes an easy and intuitive to upload upload files through drag and drop or select methods.  
 * Copyright (c) 2015, Rogério Taques. 
 * 
 * This plugin is inspired on the solution given by Ravishanker Kusuma (http://twitter.com/hayageek) 
 * at http://hayageek.com/drag-and-drop-file-upload-jquery/ where he describes how to create an easy way to 
 * drag and drop files and upload it to server. Many other enhancements were made.
 * 
 * Licensed under MIT license:
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this 
 * software and associated documentation files (the "Software"), to deal in the Software 
 * without restriction, including without limitation the rights to use, copy, modify, merge, 
 * publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons 
 * to whom the Software is furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all copies or 
 * substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING 
 * BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @requires jQuery v1.11 or above
 * @version 1.0.4
 * @cat Plugins/Image
 * @author Rogério Taques (rogerio.taques@gmail.com)
 * @see https://github.com/rogeriotaques/droparea
 */

/**
 * CHANGELOG
 * 
 * 1.0 	First release.
 *      Whenever user don't drop, but click to select an image instead, droparea opens the selection box.
 *      Validating the dropped file size, according on given initialization option.
 *      Don't force the next image to have the previous image size.
 */

(function( $ ) {
    "use strict";
    
    var
    
    // default options
    defaults = {
    	// server url
    	url: 'path/to/server/script',
    	
    	// whenever set to false, droparea won't upload the file to server, but set it into a local 'file' field instead.
    	// if false, a 'file_holder' is required
    	upload: true,
    	
    	// the file holder to place files when 'upload' is set to false
    	// ignored when 'upload' is set to true.
    	file_holder: '',
    	
    	// whenever uploading an image file and file_preview is given
    	// droparea tries to intercept the manual selection of files on 'file_holder'
    	// and display the selected image on 'file_preview' as soon as it is selected.
    	file_preview: '',
    	
    	// delay to remove the 'complete' notification (milisenconds)
    	notification_delay: 5000,
    	
    	// accepted extensions for upload
    	// set null or false for all files
    	accepted: '.jpg|.png|.gif',
    	
    	// the file max size allowed for upload
    	file_max_size: 2048,
    	
    	// extra data that would be necessary to subimit with file
    	// it's supposed to be only html form elements, such as: input, select, etc.
    	// must be an array with the id of elements (# is not required)
    	extra_data: [],
    		
    	// a success callback, called after upload is complete
    	// there are two arguments passed: server_response_obj and file_name whenever the server returns it
    	success: null,
    	
    	i18n: {
    		unable_to_upload: 'Unable to upload at this time.<br >Select a file.',
    		wrong_file_type: 'Unacceptable file type!<br >Try: %s',
    		wrong_file_size: 'Dropped file is too big!<br >Max file size allowed: %s',
    		abort: 'Abort',
    		mb: ' MB',
    		kb: ' KB',
    		percent: '% ',
    		dismiss: 'Dismiss',
    		error: 'Err: '
    	}
    },
    
    // 'o' extends options globally
    o = {},
    
    // plugin methods
    methods = {
    	
    	// initialize
    	init: function( options, id )
    	{
			//alert("#file_preview"+id +"  <>  "+"#"+id+"file");
    		
    		return this.each( function(){
        		
        		var drop_area = $( this	),
        			file = null,
        			form_data = null,
        			statusbar = null;
        		        		
        		
        		// intercepts the 'file_holder' element to assure that
        		// whenever user selects an image file from there, it will be displayed as preview.
        		if ( $("#"+id+"file").length && $("#"+id+"file_preview").length )
    			{
        			$( "#"+id+"file" ).on('change', function(ev)
        			{
        				var oFReader = new FileReader();
        				        				
        				oFReader.readAsDataURL( $( this )[0].files[0] );
        				oFReader.onload = function (oFREvent) 
        				{
        					$( "#"+id+"file_preview" ).animate({opacity: 0}, 'slow', function(){
        						// change the image source
        						$(this).attr('src', oFREvent.target.result).animate({opacity: 1}, 'slow');
        						
        						// remove the alert block whenever it exists.	
        						drop_area.find('.statusbar.alert-block').fadeOut('slow', function(){ $(this).remove(); });
        					});
            			};
        			});
    			}
        		
        		// need to explicit the parent position definition
        		// to prevent problems with statusbar style.
        		drop_area.parent().css('position', drop_area.parent().css('position') );
        		
        		// setup handlers
	    		drop_area
    				.on('click', function (ev) 
    		    	{
    	    				// prevent event bubble propagation
    		    		    ev.stopPropagation();
    		    		    ev.preventDefault();
    		    		    
    		    		    // simulate that user is selecting the file, but not dropping it instead
                            $( "#"+id+"file" ).click();
		    		})
    		} ); // this.each
    	}
    }; // _sendFileToServer
    
    $.fn.droparea = function( method , id)
    {
    	if( methods[method] )
    	{
    		return methods[method].apply( this, Array.prototype.slice.call(arguments, 1) );
    	}
    	else if( typeof method === 'object' || !method )
    	{
    		return methods.init.apply( this, arguments, id);
    	}
    	else
    	{
    		$.error('Method '+method+' does not exist on jQuery.droparea()');
    	}
    }; 
    
})(jQuery);