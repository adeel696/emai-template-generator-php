<?php 
  include('config/config.php');
 
  include('includes/functions.php');
  include('includes/class.User.php');

  include('includes/class.ReportsAllVoucher.php');

  include('accountingTemplate/templateFunction.php');

$adminObj = new User();


//this function will redirect user to login page if user is not logged in

$adminObj->isLogin();

if($_SESSION['FinancePermit'] == 0)
{
	header("Location:".SITE_URL_MAIN."dashboard.php");
}
if($_SESSION['HR_USER_PERM']['6']['READ_RIGHT']=='0')
{
	header("Location:index.php");
}


$objReportsAllVoucher = new  ReportsAllVoucher();


$allBankVouchersPresent = $objReportsAllVoucher->listAllBankVoucherReconcilationPresent();
$allBankVouchersNotPresent = $objReportsAllVoucher->listAllBankVoucherReconcilationNotPresent();
if($_POST['reconcileDateSearch'])
{
$reconcileSum = $objReportsAllVoucher->bankReconcileTransactionrRecieveSum();
$reconcilePaySum = $objReportsAllVoucher->bankReconcileTransactionrPaymentSum();

}
					
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
$title = "List of Bank Enteries Report";
 ?>
<title><?php echo $title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/default.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/datepickr.css" />
<!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
<!--<link rel="icon" type="image/ico" href="favicon.ico"/>-->
<link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery.js"></script>

  <script src="js/plugins/jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="js/glDatePicker.min.js"></script>

        <script type="text/javascript">
        $(window).load(function()
        {
		
			//var timeInMs = Date.now();
			//alert(timeInMs);

			$('#bankEnteriesFromDate').glDatePicker({

 		 onClick: function(target, cell, date, data) {
        target.val(date.getDate() + '/' +
                   (date.getMonth()+1) + '/' +
                    date.getFullYear());

        if(data != null) {
            alert(data.message + '\n' + date);
        }
    }	

      
});
			$('#bankEnteriesToDate').glDatePicker({
 onClick: function(target, cell, date, data) {
        target.val(date.getDate() + '/' +
                    (date.getMonth()+1) + '/' +
                    date.getFullYear());

        if(data != null) {
            alert(data.message + '\n' + date);
        }
    }	

});
			

        });

    </script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/accounts.js"></script>
<script src="js/attachment_row.js"></script>
<!-- Optionally enable responsive features in IE8 -->
<script src="js/respond.js"></script>
<!-- for print JS includeded -->
<script>
function printContents(){
	
 var dispSetting="toolbar=yes,location=no,directories=yes,menubar=yes,scrollbars=yes, left=100, top=25";
 var printingContents = document.getElementById("printing").innerHTML;
 
 var docprint=window.open("","",printing);
 docprint.document.open();
 docprint.document.write('<html><head><title>Journal Voucher</title>');
 docprint.document.write('<link rel="stylesheet" href="css/bootstrap.min.css">');
 docprint.document.write('<link rel="stylesheet" href="css/style.css">');
 docprint.document.write('<link rel="stylesheet" href="css/default.css">');
 docprint.document.write('</head><body onLoad="self.print(); self.close()"><center>');
 docprint.document.write(printingContents);
 docprint.document.write('</center></body></html>');
 docprint.document.close();
 docprint.focus();
}
</script>
<!-- for print JS includeded end-->
</head>
<body>
<div class="container box">
  <?php  echo topHeader(); ?>
  
  <!-- BreadCrumb -->
  <?php 	$bc = new breadcrumbs;
		/*** set the pointer if you like ***/
		$bc->setPointer('->');
		/*** create the trail ***/
		$bc->crumbs();
		/*** output ***/
		echo $bc->breadcrumbs.'<li><a class="current">'. $title.'</a></li></ul>';?>
  <div class="jumbotron">
    <div class="panel">
      <div class="panel-heading">
      
      <center><table cellspacing="0" cellpadding="2" class="tablestyle2">
          <tbody><tr>
          <td ><input name="back"  id="cancel" type="button" value="Back" class="btn btn-default"  tabindex="10" onClick="javascript:goBack()"/></td>
          <td>Reconcile Date:</td><td><span id="_fyear_sel">
          <form action="" method="post">
          
          <select required="required" style="width:200px"   name="reconcileDateSearch" id="reconcileDateSearch"  >
          <option value="">Select Bank Reconcile Date</option>
          <?php						
          $allReconcile = $objReportsAllVoucher->listAllReconcile(); 
                            
          foreach($allReconcile as $allReconcile)
          {?>
          <option <?php if($_POST['reconcileDateSearch']==$allReconcile->id){echo "selected";} ?>  value="<?php echo $allReconcile->id;?>"><?php echo $allReconcile->bankReconcailDate;?>
       </option>
          <?php
          }
          ?>
          </select>
          <td><input  type="submit" class="btn btn-default"   name="search" id="search" value="Search"></td>
          <td>  <input class="btn btn-default" style="float:right; margin-right:40px" type="button"  name="printbutton" value="Print" onclick="printContents()"/></td>
          </form>
          </span>
          </td>
          
          </tr>
          



</table></center>
  <div id="printing">
                           <form action="exportExcel.php" method="post"   
    onsubmit='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
      <table id="ReportTable" class="callout_main" border="0" cellpadding="0" cellspacing="0">
          <tbody>
        
          <tr>
        
          <td colspan="2" rowspan="2">
        <table class="main_page" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td><center>
                  <table width="90%" border="1px" >
                    <tbody>
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:center">
                         Public Procurement Regulatory Authority </br>
                        </br>
                       
                        </td>
                       
                      </tr>
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:left">
                         BANK RECONCILATION STATEMENT as on      <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  $reconcileDetail = $objReportsAllVoucher->reconcileInfoView($_POST['reconcileDateSearch']);
							 echo dateFormat($reconcileDetail[0]->bankReconcailDate) ;
						}
						  ?> 
                       
                        </td>
                         <td class="titletext" width="100%" style=" text-align:center">
                         <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  $reconcileDetail = $objReportsAllVoucher->reconcileInfoView($_POST['reconcileDateSearch']);
							 echo number_format($reconcileDetail[0]->amounts,2) ;
						}
						  ?>
                       
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:left">
                         Balance as per Cash Book on
                          <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  $reconcileDetail = $objReportsAllVoucher->reconcileInfoView($_POST['reconcileDateSearch']);
							 echo dateFormat($reconcileDetail[0]->bankReconcailDate) ;
						}
						  ?> 
                       
                        </td>
                        <td class="titletext" width="100%" style=" text-align:center">
              			 <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  
							echo number_format($reconcileSum[0]->TotalDebit,2); 
						}
						  ?> 
                       
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:left">
                         Presented Cheque
                       
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </center>
               
                <div id="_page_body">
                  
                  <div id="balance_tbl">
                  <?php  
					$counter = 1; 
					?> 
                    <center>
                        <table border="1px" cellspacing="0" cellpadding="2" class="tablestyle" width="90%">
                        <tbody>
                          <tr class="odd">
                            <td width="6%" style="font-weight:bold"> S.#</td>
                            <td width="6%" style="font-weight:bold"> Vou.#</td>
                            <td width="10%" style="font-weight:bold">Cash Book</td>
                            <td width="10%" style="font-weight:bold">Cheque #</td>
                            <td style="font-weight:bold">Date</td>
                            <td style="font-weight:bold">Pak Rs</td>
                            <td style="font-weight:bold" >Supplier</td>
                            
                          </tr>
                        
					  <?php
                      
					
					  //print $allBankVouchersPresent;
                      $result = mysql_query($allBankVouchersPresent);
                      while($rowAllBankVoucher = mysql_fetch_assoc( $result  ))
                      { 
                    	
                      ?>
                        
             
                      <tr>
                      <td ><?php
                     
                      echo $counter  ?></td>
                      <td ><span class="adtext" id="adtext_5"><a class="brand" href="<?php echo ADMIN_URL ?>bankPaymentTransaction.php?recordID=<?php echo $rowAllBankVoucher['id']  ?>" target="_blank"><?php echo $rowAllBankVoucher['id']  ?> </a></span></td>
                      <td><span class="adtext" id="adtext_5"><?php echo $rowAllBankVoucher['chequeNo']  ?></span></td>
                      <td><span class="adtext" id="adtext_5"><?php echo $rowAllBankVoucher['chequeNo']  ?></span></td>
                      <td><span class="adtext" id="adtext_5"><?php echo dateFormat($rowAllBankVoucher['date_of_transaction'])  ?></span></td>
                      <td style="text-align:right"><span class="adtext" id="adtext_5"><?php echo number_format($rowAllBankVoucher['debit'],2)  ?></span></td>
                      <td></td>
                     
                      </tr>
                         <?php 	
							$counter++;
							}
							?>
                       
                          
                        </tbody>
                      </table>
                 
                        



 
                    </center>
                    <br>
                  </div>
                 
                  
      				 
                  <br>
                </div>
            
            </td>
          
            </tr>
          
            </tbody>
          
        </table>
        
        
        <!--------------------------------------------------------------------------------------------------------->
        
        <table class="main_page" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td><center>
                  <table width="90%" border="1px" >
                    <tbody>
                      
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:left">
                         BANK RECONCILATION STATEMENT as on 
                         <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  $reconcileDetail = $objReportsAllVoucher->reconcileInfoView($_POST['reconcileDateSearch']);
							 echo dateFormat($reconcileDetail[0]->bankReconcailDate) ;
						}
						  ?> 
                       
                        </td>
                         <td class="titletext" width="100%" style=" text-align:center">
                             <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  $reconcileDetail = $objReportsAllVoucher->reconcileInfoView($_POST['reconcileDateSearch']);
							 echo number_format($reconcileDetail[0]->amounts,2) ;
						}
						  ?>
                       
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:left">
                         Balance as per Cash Book on 
                         
                         <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  $reconcileDetail = $objReportsAllVoucher->reconcileInfoView($_POST['reconcileDateSearch']);
							 echo dateFormat($reconcileDetail[0]->bankReconcailDate) ;
						}
						  ?> 
                       
                        </td>
                        <td class="titletext" width="100%" style=" text-align:center">
                        	 <?php 
						 if($_POST['reconcileDateSearch'])
						 {
							  
							echo number_format($reconcilePaySum[0]->TotalCredit,2) ;
						}
						  ?> 
                         
                       
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4" class="titletext" width="100%" style=" text-align:left">
                         Un presented Cheque
                       
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </center>
               
                <div id="_page_body">
                  
                  <div id="balance_tbl">
                  <?php  
					$counterpay = 1; 
					?> 
                    <center>
                        <table border="1px" cellspacing="0" cellpadding="2" class="tablestyle" width="90%">
                        <tbody>
                          <tr class="odd">
                            <td width="6%" style="font-weight:bold"> S.#</td>
                            <td width="6%" style="font-weight:bold"> Vou.#</td>
                            <td width="10%" style="font-weight:bold">Cash Book</td>
                            <td width="10%" style="font-weight:bold">Cheque #</td>
                            <td style="font-weight:bold">Date</td>
                            <td style="font-weight:bold">Pak Rs</td>
                            <td style="font-weight:bold" >Supplier</td>
                            
                          </tr>
                        
					  <?php
                      
					
					  
                      $result = mysql_query($allBankVouchersNotPresent);
                      while($rowAllBankVoucher = mysql_fetch_assoc( $result  ))
                      { 
                    	
                      ?>
                        
             
                      <tr>
                      <td ><?php
                     
                      echo $counterpay  ?></td>
                      <td ><span class="adtext" id="adtext_5"><a class="brand" href="<?php echo ADMIN_URL ?>bankPaymentTransaction.php?recordID=<?php echo $rowAllBankVoucher['id']  ?>" target="_blank"><?php echo $rowAllBankVoucher['id']  ?> </a></span></td>
                      <td><span class="adtext" id="adtext_5"><?php echo $rowAllBankVoucher['chequeNo']  ?></span></td>
                      <td><span class="adtext" id="adtext_5"><?php echo $rowAllBankVoucher['chequeNo']  ?></span></td>
                      <td><span class="adtext" id="adtext_5"><?php echo dateFormat($rowAllBankVoucher['date_of_transaction'])  ?></span></td>
                      <td style="text-align:right"><span class="adtext" id="adtext_5"><?php echo number_format($rowAllBankVoucher['credit'],2)  ?></span></td>
                      <td></td>
                     
                      </tr>
                         <?php 	
							$counterpay++;
							}
							?>
                       
                          
                        </tbody>
                      </table>
                 
                        



 
                    </center>
                    <br>
                  </div>
                 
                  
      				 
                  <br>
                </div>
            
            </td>
          
            </tr>
          
            </tbody>
          
        </table>
        
        
        
          </td>
        
          </tr>
        
          </tbody>
        
      </table>
      
                <center>
                  <table border="1px" id="title">
                    <tbody>
                      <tr>
                      
                        
                        <td style="text-align:right; padding-right:80px">
                          <input type="hidden" id="datatodisplay" name="datatodisplay">  
            
            <input  type="submit" value="Export to Excel" class="btn btn-default"  tabindex="10" /> 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </center>
    
       
          
        
                </form>
    </div>
  </div>
  </div>
</div>
<?php  echo footer(); ?>
</div>
<!--<script type="text/javascript" src="js/datepickr.min.js"></script> 
<script type="text/javascript">
			
			
			new datepickr('bankEnteriesFromDate', {
				'dateFormat': 'm/d/y'
			});
				new datepickr('bankEnteriesToDate', {
				'dateFormat': 'm/d/y'
			});
		
		</script>-->
</body>
</html>