<?php
// var_dump($details);
// die();

?>
<section class="content-header">
            <h1>
        Day Book
       
            </h1>
          
          </section>
          <section class="content">
          <div class="col-md-12">
          <div class="box box-success">
          <div class="box-body">
          <form role="form" >
                  <div class="box-body" style="min-height:auto;">
                 
                    <div class=" row">
                    <div class="form-group col-md-3">
                    <label for="from">From</label>
                      <input type="text" class="form-control" required id="from" name="from" value="2020-01-01">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="to">To</label>
                      <input type="text" class="form-control" required id="to" name="to" value="<?php echo date('yy/m/d');?>">
                    </div>
                    <div class="form-group col-md-2">
                  
                    <button type="button" style="margin-top: 25px;" class="btn btn-success" id="find" onclick="finddata();" name="find">Find</button>
                    </div>
                    <div class="form-group col-md-2">
                    <button type="button"  style="margin-top: 25px;" class="btn btn-success" id="print" name="print">Print</button>

                    </div>
                    <div class="form-group col-md-2">
                    <button type="button" style="margin-top: 25px;" class="btn btn-success" id="export" name="export">Export Excel</button>

                    </div>
                    </div>
                    
                   </div>
                   </form>
                  
                  <div class="box box-solid ">
                    <div>
                      <table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_GridView1" style="width:100%;border-collapse:collapse;">
                       <tbody>
                       <tr>
                          <th scope="col">
                           <div id="CashbookmHead" style=" width:100%;  background-color: rgba(82, 107, 1, 1);color: #FFFFFF; height: 23px;">
                           <div style=" width:10%; float:left;">Date</div>
                           <div style=" width:90%; float:left; height: 23px;">
                           <div style=" width:54%; float:left;">Particular</div>
                           <div style=" width:22%; float:left;">Voucher Type</div>
                           <div style=" width:12%; float:left; text-align:right;">Credit</div>
                           <div style=" width:12%; float:left; text-align:right;"> Debit</div>
                           </div>
                           </div>
                          </th>
                        </tr>
                    <?php    
                     $previousdate="";
                     $credittotal=0;
                     $debittotal=0;
                     foreach ($details as $key => $values) { 
                  // $previousdate=$values->TransferDate;
                      // if($values->TransferDate==$previousdate)
                      // {
                    echo   $previousdate;  
                   if( $previousdate=="")
                   {

                   }
                   else
                   {
                   
                     ?>

                     
                      <div id="Totalofall" style=" width:100%; font-weight: bold; color:red; font-size: 15px; ">
                                     <div style=" width:76%; float:left;">
                                           Total</div>
                                       <div style=" width:12%; float:left; text-align:right;  border-bottom-style: solid; border-bottom-width: 1px; border-color:Black ">
                                           <span id="ContentPlaceHolder1_GridView1_lblDebitTotal_0">3160</span></div>
                                      <div style=" width:12%; float:left; text-align:right;  border-bottom-style: solid; border-bottom-width: 1px; border-color:Black   ">
                                           <span id="ContentPlaceHolder1_GridView1_lblCreditTotal_0">3160</span></div>
                                                                                             
                              </div>
                    <?php

                 }
                 if($values->TransferDate==$previousdate)
                  {
                  
                   ?>
                        <tr><td>                                                                     
                          <div id="Cashbookm" style=" width:100%; margin-top:5px;">
                          <div style=" width:10%; float:left; height:21px; overflow:hidden; color:Gray">
                          <span id="ContentPlaceHolder1_GridView1_lblTranscationDate_0" dataformatstring="{0:dd/MM/yyyy}"><?php  echo $values->TransferDate ; ?></span>
                          </div>
                          <div style=" width:90%; float:left;">
                          <div id="repeater">
                          <div style=" width:54%; float:left;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray; ">
                          <span class="skinnytip" style="overflow:hidden;height: 14px;  width:300px;" data-text="Payment Recived 0  for Job No :69 credited Amount :3160.00                                                                                                                                                            
                          <br> <br>
                           <span style=' color:black'>Amount </span> : <span style=' color:red'> 3160</span>  - <span style=' color:green'>(Debit)  </span> " data-options="borderColor: #864710, backColor: #F5F1E7, width: 150px, textPadding: 10px, textColor: #5A2B02, width:400px; ">   
                             
                           <?php  echo $values->PARTICULARLS; ?>	</span>
                                             </div>
                                               <div style=" width:22%; float:left;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray">
                                                  <span id="ContentPlaceHolder1_GridView1_Repeater2_0_Label1_0"> <?php echo $values->VoucherType; ?></span>
                                               </div>
                                              <div style=" width:12%; float:left; text-align:right;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray">
                                                 <span id="ContentPlaceHolder1_GridView1_Repeater2_0_Label2_0"><?php  echo $values->CreditAmount; ?> </span>
                                                </div>
                                              <div style=" width:12%; float:left; text-align:right;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray">
                                                  <span id="ContentPlaceHolder1_GridView1_Repeater2_0_Label3_0"><?php  echo $values->Amount; ?></span>
                                              </div>
                                           </div>
                                                                                          
                                 
                           </div>
                         <br>
                               <br><br><br> 
                             
                        </div></td>
                        </tr>
                                        <?php 
                           
                     }
                      
                   else
                   {
                     ?>
                        <tr><td>                                                                     
                          <div id="Cashbookm" style=" width:100%; margin-top:5px;">
                          <div style=" width:10%; float:left; height:21px; overflow:hidden; color:Gray">
                          <span id="ContentPlaceHolder1_GridView1_lblTranscationDate_0" dataformatstring="{0:dd/MM/yyyy}"><?php  echo $values->TransferDate ; ?></span>
                          </div>
                          <div style=" width:90%; float:left;">
                          <div id="repeater">
                          <div style=" width:54%; float:left;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray; ">
                          <span class="skinnytip" style="overflow:hidden;height: 14px;  width:300px;" data-text="Payment Recived 0  for Job No :69 credited Amount :3160.00                                                                                                                                                            
                          <br> <br>
                           <span style=' color:black'>Amount </span> : <span style=' color:red'> 3160</span>  - <span style=' color:green'>(Debit)  </span> " data-options="borderColor: #864710, backColor: #F5F1E7, width: 150px, textPadding: 10px, textColor: #5A2B02, width:400px; ">   
                             
                           <?php  echo $values->PARTICULARLS; ?>	</span>
                                             </div>
                                               <div style=" width:22%; float:left;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray">
                                                  <span id="ContentPlaceHolder1_GridView1_Repeater2_0_Label1_0"> <?php echo $values->VoucherType; ?></span>
                                               </div>
                                              <div style=" width:12%; float:left; text-align:right;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray">
                                                 <span id="ContentPlaceHolder1_GridView1_Repeater2_0_Label2_0"><?php  echo $values->CreditAmount; ?> </span>
                                                </div>
                                              <div style=" width:12%; float:left; text-align:right;    border-bottom: solid 1px #EAEAEA;font-size: 14px; color:gray">
                                                  <span id="ContentPlaceHolder1_GridView1_Repeater2_0_Label3_0"><?php  echo $values->Amount; ?></span>
                                              </div>
                                           </div>
                                                                                          
                                  
                           </div>
                         <br>
                               <br><br><br> 
                             
                        </div></td>
                        </tr>
                        
                                           <?php
                                           $previousdate= $values->TransferDate;          
                                     
                   }
                     
                  
                    
                     } ?>

                                      
                                      </tbody></table>
                                    </div>
                                                     </div><!-- /.box-body -->
<!-- 
                  <div class="box-footer">
                    <button type="button" class="btn btn-success" onclick="store();">Create</button>
                  </div> -->
   
          </div>
</div>
</div>



          </section>
         
      
          <script src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
          <script src="<?php echo base_url(); ?>/assets/js/alert.js"></script>
          <!-- <script src="<?php echo base_url(); ?>/assets/user_scripts/accounts/day_book.js"></script> -->
        