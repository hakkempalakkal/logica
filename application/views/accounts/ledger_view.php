<?php 

// var_dump($code[0]);
// die();
?>
<section class="content-header">
 <h1>
 Ledger View
 </h1>
</section>
 <section class="content">
    <div class="box box-success">
       <div class="box-body">
          <form role="form">                                                                                                                                                                                      
                  <div class="box-body"  style="min-height:auto;">
                             
                  <div class="row">  
                  <div class="form-group col-md-2">
                      <label for="exampleInputname1">From</label>
                <input type="text" id="from"  name="from" class="form-control" value="<?php echo date('m/d/yy');?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputname1">To</label>
                <input type="text" id="to"  name="to" class="form-control" value="<?php echo date('m/d/yy');?>">
                    </div>    
                  <div class="form-group col-md-2 ">
                      <label>Ledger</label>
                      <select class="form-control" required name="ledger" id="ledger" value="">
                      <option value="" selected="selected" diabled="disabled">----Select----</option>
                        <option value="cash">cash</option>
                        <option value="AOT-credit-account">AOT-credit-account</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                  
                  <button type="button" style="margin-top: 25px;" class="btn btn-success" id="find" name="find">Find</button>
                  </div>
                  <div class="form-group col-md-2">
                  <button type="button"  style="margin-top: 25px;" class="btn btn-success" id="print" name="print">Print</button>

                 
                 </div>
                                
                         
</div>
                  <!-- <div class="box-footer">
                    <button type="button"  onclick="store();" class="btn btn-success">Save</button>
                    <button type="reset"  class="btn btn-success">Cancel</button>
                  </div> -->
                </form>
                <div id="divexport">
                                 <div id="ContentPlaceHolder1_up_GridLedgerViewDetails">
	

                
    <div style="width:100%; float:none;">
   <div style=" background-color:White; color:Black; width: 100%; float:left;position:relative; top: 0px; left: 0px;">
   <div id="CashbookmHead" style=" width:100%; background-color: rgba(82, 107, 1, 1); color: #FFFFFF; height: 23px;font-size:17px;border:solid 1px gray">
 

    
    
    <div style=" width:10%; float:left;">Date</div>
    <div style=" width:50%; float:left;">Particular</div>
     <div style=" width:20%; float:left;">Voucher Type</div>
     <div style=" width:10%; float:left; text-align:right;">Credit</div>
    <div style=" width:10%; float:left; text-align:right; padding-right: 5px;">Debit</div>
    </div>
    </div>
                                             
                                                    
                                                    
                                                     <div id="Cashbookm" style=" width:100%; ">

                                                        
                                                             
                                                       
                                                       

                                                         <div style=" width:100%; float:left;">

                                                             <div id="Opening Balance" style=" width:100%; font-weight: bold;color:red; font-size:16px">

                                                                 <div style=" width:80%; float:left;">   Opening Balance </div>
                                                                    
                                                                 <div style=" width:10%; float:left; text-align:right; border-top-color: #333333; border-bottom-style: solid; border-bottom-width: 1px;">

                                                                     <span id="ContentPlaceHolder1_lblOpeningBalance"></span>

                                                                                 </div>

                                                                 <div style=" width:10%; padding-right: 5px;float:left; text-align:right; border-top-color: #333333; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                     0.00
                                                                     </div>
                                                             </div>


                                                            
                                                             <div class="">
                                                           
                                                             
                                                             

                                                             </div>
                                                             
                                                             
                                                               <div id="Totalofall" style=" width:100%; font-weight: bold; color:#000000; font-size:16px">
                                                                 <div style=" width:80%; float:left;">
                                                                     Total</div>
                                                                 <div style=" border-top: 1px solid #333333; width:10%; float:left; text-align:right; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                      <span id="ContentPlaceHolder1_lblDebitTotal"></span></div>
                                                                 <div style=" border-top: 1px solid #333333;padding-right: 5px; width:10%; float:left; text-align:right; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                     <span id="ContentPlaceHolder1_lblCreditTotal"></span></div>
                                                             
                                                             <div id="Closing Balance" style=" width:100%; font-weight: bold; color:red;">
                                                                 <div style=" width:80%; float:left;">
                                                                     Closing Balance</div>
                                                                 <div style=" width:10%; float:left; text-align:right; border-top-color: #333333; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                     0.00</div>
                                                                 <div style=" width:10%; padding-right: 5px; float:left; text-align:right; border-top-color: #333333; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                     <span id="ContentPlaceHolder1_lblClosingBalance"></span></div>
                                                             </div>
                                                         </div>

                                                     </div>
                                                     
                                                     </div>                                                   
                                                       <br>
                                                     <br>
                                            
     
                                                

                                </div>


<div style="width:100%; background-color: rgba(82, 107, 1, 1); color: #FFFFFF; height: 23px; font-weight:bold;float:left;">


<div style="float:left; width:548px;"> </div>
<div style="float:left; width:92px; text-align:right;">
    <span id="ContentPlaceHolder1_lblopen"></span></div>
<div style="float:left; width:172px; text-align:right;"><span id="ContentPlaceHolder1_lblclose"></span></div>

</div>
                                     






                                 </div>
                             
                        
&nbsp;
                                 
</div>
</div>
</div>
          </section>
          <script src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
          <script src="<?php echo base_url(); ?>/assets/js/alert.js"></script>
          <!-- <script src="<?php echo base_url(); ?>/assets/user_scripts/masters/bank.js"></script> -->




  