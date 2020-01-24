<?php 

// var_dump($code[0]);
// die();
?>
<section class="content-header">
 <h1>
 Ledger Group
 </h1>
</section>
 <section class="content">
 <label for="heading">Trial  Balance</label>
    <div class="box box-success">
       <div class="box-body">
      
          <form role="form">                                                                                                                                                                                      
                  <div class="box-body"  style="min-height:auto;">
                             
                  <div class="row">  
                
                    <div class="form-group col-md-3">
                    <label for="from">From</label>
                      <input type="text" class="form-control" required id="from" name="from" value="<?php echo date('m/d/yy');?>">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="to">To</label>
                      <input type="text" class="form-control" required id="to" name="to" value="<?php echo date('m/d/yy');?>">
                    </div>
                    <div class="form-group col-md-2">
                  
                    <button type="button" style="margin-top: 25px;" class="btn btn-success" id="find" name="find">Find</button>
                    </div>
                    <div class="form-group col-md-2">
                    <button type="button"  style="margin-top: 25px;" class="btn btn-success" id="print" name="print">Print</button>

                   
                   </div>
                          </div>      </div>
                                
                         

               
                </form>
                <!-- <div class="box box-solid "> -->
                 
                <div style="width:84%; float:none;margin-left:10px;">
                                 
                                 <div style=" background-color:White; color:Black; width: 710px; float:left;position:relative; top: 0px; left: 0px;">
                                 <div id="CashbookmHead" style=" width:750px; background-color: rgba(82, 107, 1, 1); color: #FFFFFF; height: 23px; border:solid 1px gray">


 
    <div style=" width:240px; float:left;">Ledger </div>
     <div style=" width:309px; float:left; text-align:right;">Debit Balance</div>
    <div style=" width:198px; float:left; text-align:right;">Credit Balance </div>


    </div>

    </div>
                     
             <br>
                                                     
          <div id="Cashbookm" style=" width:849px; ">
                                                        
  <div style=" width:775px; float:left; font-size:15px">
                                     
                                                                   
                                                                 

                                                                     <div id="repeater" style="  width:741px;">
                                                                         <div style=" width:340px; float:left;   overflow:hidden; color:Gray;border-bottom: solid 1px #EAEAEA;  ">
                                                                             <span id="ContentPlaceHolder1_Repeater2_Label4_21" title="GAS ARABIAN SERVICES CO.LTD">GAS ARABIAN SERVICES CO.LTD</span>
                                                                         </div>
                                                                         <div style=" width:200px;float:left;text-align:right;color:Gray;border-bottom: solid 1px #EAEAEA;">
                                                                             <span id="ContentPlaceHolder1_Repeater2_label5_21">79581.26</span>
                                                                         </div>
                                                                         <div style=" width:200px;float:left;text-align:right; color:Gray;border-bottom: solid 1px #EAEAEA;">
                                                                             <span id="ContentPlaceHolder1_Repeater2_Label1_21">0.00</span>
                                                                         </div>
                                                                        
                                                                     </div>
                                                                 

                                                                 
                                                                   
                                                                 

                                                                   
                                                                 
                                                            <div style=" clear:both;"></div>
                                                           
                                                               <div id="Totalofall" style=" width:791px; font-weight: bold; color:#000000;">
                                                                 <div style=" width:395px; float:left;">
                                                                     Total</div>
                                                                 <div style=" border-top: 1px solid #333333; width:146px; float:left; text-align:right; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                      <span id="ContentPlaceHolder1_lblDebitTotal">510254.83</span></div>
                                                                 <div style=" border-top: 1px solid #333333; width:198px; float:left; text-align:right; border-bottom-style: solid; border-bottom-width: 1px;">
                                                                     <span id="ContentPlaceHolder1_lblCreditTotal">510254.83</span></div>
                                                             
                                                             
                                                         </div>
                                                     </div>
                                                     
                                                     </div>                                                   
                                                       <br>
                                                     <br>
                                            
     
                                                

                                </div>

                                 </div>
</div>
</div>
          </section>
          <script src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
          <script src="<?php echo base_url(); ?>/assets/js/alert.js"></script>
          <!-- <script src="<?php echo base_url(); ?>/assets/user_scripts/masters/bank.js"></script> -->




  