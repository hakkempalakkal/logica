
   <style>
  .ui-autocomplete {
    position: absolute;
    z-index: 1000;
    cursor: default;
    padding: 0;
    margin-top: 2px;
    list-style: none;
    background-color: #ffffff;
    border: 1px solid #ccc;
    -webkit-border-radius: 5px;
       -moz-border-radius: 5px;
            border-radius: 5px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
       -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.ui-autocomplete > li {
  padding: 3px 20px;
}
.ui-autocomplete > li.ui-state-focus {
  background-color: #DDD;
}
.ui-helper-hidden-accessible {
  display: none;
}
  </style>
<script src="<?php echo base_url(); ?>/assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<section class="content">
<div class="row">
   <div class="col-md-12 ">
      <div class="panel panel-primary  " >
         <div class="panel-heading">
            <h3 class="panel-title">Credit Note</h3>
         </div>
         <div class="panel-body">
            <section class="content">
            <div class="col-md-10">
               <h4 class="box-title">Details</h4>
               <div class="box box-primary">
                  <div class="box-header with-border">
                     <div class="box-body">
                     <div class="row">
          <div class="form-group col-md-1">
                    <label class="control-label">CN Id</label>
                    <input type="hidden" name="id" id="id"  value="<?php  echo $job[0]->JobId; ?>" />
                    <input   type="text" id="post_code" required="required" class="form-control" readonly="readonly"  placeholder="<?php echo $code[0]->Code_Id+1;?>"  value="<?php echo $code[0]->Code_Id+1;?>"/>
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label" for="date">Posting Date</label>
      <input class="form-control" id="post_date" name="date" placeholder="YYY/MM/DD" type="text"/>
              </div>
              <div class="form-group col-md-2">
                  <label class="control-label" for="date">Inv Date</label>
      <input class="form-control" id="inv_date" name="date" placeholder="YYY/MM/DD" type="text"/>
              </div>
              
       
                <!-- <div class="form-group col-md-2">
                  <label class="control-label" for="date">Select Supplier</label>
                  <input maxlength="100" type="text" id="view_supplier_name" required="required" class="form-control" placeholder=" supplier_name" value="">
                  <input maxlength="100" type="hidden" id="supplier_id" class="form-control" value="">
              </div>
              <div class="form-group col-md-2">
                  <label class="control-label" for="date">Ref/Invoice</label>
                  <input maxlength="100" type="text" id="invoice" required="required" class="form-control" placeholder=" invoice" value="">
              </div>
              <div class="form-group col-md-1">
                  <label class="control-label" for="date">Our Inv</label>
                  <input maxlength="100" type="text" id="invoice_id" required="required" class="form-control" placeholder=" invoice" value="">
              </div>
              <div class="form-group col-md-2">
                              <label for="exampleInputname1">Mode </label>
                      <select class="form-control" id="mode" name="mode" value="--Select Type--">
                      <option value="bank">--Select Type--</option>
                        <option value="credit">CREDIT</option>
                        <option value="cash">CASH</option>
                        
                      </select>
                              </div> -->
              <div class="col-md-12" style="border-bottom:1px solid #eee; margin-bottom:10px; height:2px;"></div>
</div>
                        <div class="row">
                           <div class="form-group col-md-1">
                              <label class="control-label">Code</label>
                              <input maxlength="100"  onchange="getdata();" type="text" id="desc_code" name="desc_code" required="required" class="form-control" placeholder=" code" />
                           </div>
                           <div class="form-group col-md-2">
                              <label class="control-label">Description</label>
                              <input maxlength="100" type="text" id="description_job" required="required" class="form-control" placeholder=" Description" value=""/>
                           </div>
                           <div class="row">
                              <div class="form-group col-md-2">
                                 <label class="control-label">Unit Price</label>
                                 <input maxlength="100" type="text" id="unitprice" required="required" class="form-control " placeholder=" unit price" />
                              </div>
                              <div class="form-group col-md-2">
                                 <label class="control-label">Currency</label>
                                 <select class="form-control" id="unit_price" name="unit_price"  value="--Select Type--">
                                    <option value="bank">--Select Type--</option>
                                    <option value="INR">INR</option>
                                    <option value="EUR">EUR</option>
                                    <option value="USD">USD</option>
                                    <option value="AED">AED</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-1">
                                 <label class="control-label">Conv.Factor</label>
                                 <input maxlength="100" type="text" id="conv_factor"  required="required" class="form-control " value="1" />
                              </div>
                             
                              <div class="form-group col-md-1">
                                 <label class="control-label">Quantity</label>
                                 <input maxlength="100" type="text" id="quantity" required="required" class="form-control" value=" 0" />
                              </div>
                            
                           </div>
                           <input type="button" name="add" value="ADD" onclick="insert_credit_note();" id="add" class="btn btn-success" style="float: right;">
                        </div>
                        <!-- /.panel body -->
                        <div class="col-md-12">
                           <div>
                              <!-- /.box-header -->
                              <div class="">
                                 <div id="ContentPlaceHolder1_upDataList">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th>Description</th>
                                             <th>UnitPrice</th>
                                             <th>Quantity</th>
                                             <th>TOTAL</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody class="dataadd"> 
                                       </tbody>
                                       <tfoot>
                                       </tfoot>
                                    </table>
                                 </div>
                                 <div id="ContentPlaceHolder1_upTotals">
                                    <div style="float: right;">
                                       <!-- <span id="ContentPlaceHolder1_lbl">TOTAL</span>        
                                       <input name="total" type="text" value="0" readonly="readonly" id="total" class="form-control " style="width: 100%;">
                                       <span id="ContentPlaceHolder1_Label1">Vat Total</span>        
                                       <input name="vat_total" type="text" value="0" readonly="readonly" id="vat_total" class="form-control " style="width: 100%;">  -->
                                       <span id="ContentPlaceHolder1_Label2">Grand Total</span>        
                                       <input name="grand_total" type="text" value="0" readonly="readonly" id="grand_total" class="form-control " style="width: 100%;">                 
                                    </div>
                                 </div>
                                 <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 ">
                        <br><br>
                        <div class="row">
                         
                          
                           
                           <div class="form-group col-md-2">
                         
                              <input class=" btn btn-success" type="button" name="add_expense" onclick="insert_creditnote_details();" style=" margin-top:20px;" value="Submit" id="add_expense">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
               <div class="col-md-2">
                  <h4 class="box-title">Job Description </h4>
                  <div class="box box-primary">
                     <div class="box-header with-border">  
                     </div>
                     <div class="box-body">
                        <strong><i class=""></i> Job</strong>
                        <p class="text-muted" id="job_id">
                           <?php echo $jobdata[0]->JobId;?>
                        </p>
                        <hr>
                        <strong><i class=""></i> Shipper</strong>
                        <p class="text-muted">    <?php echo $jobdata[0]->Shipper;?></p>
                        <hr>
                        <strong><i class=""></i> Consignee</strong>
                        <p class="text-muted">    <?php echo $jobdata[0]->Consignee;?> </p>
                        <hr>
                        <strong><i class=""></i> Client </strong>
                        <p> <?php echo $jobdata[0]->client_name;?></p>
                        <hr>
                        <strong><i class=""></i>Mode</strong>
                        <p> <?php echo $jobdata[0]->Type;?> </p>
                        <hr>
                        <strong><i class=""></i>Weight</strong>
                        <p> <?php echo $jobdata[0]->ActualWeight;?> </p>
                        <hr>
                        <strong><i class=""></i>ETA</strong>
                        <p> <?php echo $jobdata[0]->Eta;?> </p>
                        <hr>
                        <strong><i class=""></i>ETD</strong>
                        <p><?php echo $jobdata[0]->Etd;?></p>
                        <hr>
                        <strong><i class=""></i>MBL/MAWB</strong>
                        <p><?php echo $jobdata[0]->Mbl;?> </p>
                        <hr>
                        <strong><i class=""></i>CARRIER</strong>
                        <p><?php echo $jobdata[0]->Carrier;?> </p>
                        <hr>
                        <strong><i class=""></i>POL</strong>
                        <p><?php echo $jobdata[0]->Pol;?></p>
                        <hr>
                        <strong><i class=""></i>POD</strong>
                        <p><?php echo $jobdata[0]->Pod;?></p>
                        <hr>
                        <strong><i class=""></i>PO NO</strong>
                        <p><?php echo $jobdata[0]->PoNo;?></p>
                     </div>
                  </div>
               </div>
               <!-- <button class="btn btn-primary nextBtn pull-right" style=" margin-top:20px;" type="button">Next</button> -->
            </div>
         </div>
      </div>
   </div>
   </div>
   </section>
<script src="<?php echo base_url(); ?>/assets/user_scripts/transaction/credit_note.js"></script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })

    
    </script>
   