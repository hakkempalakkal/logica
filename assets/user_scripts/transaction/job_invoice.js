
$( document ).ready(function() {
  $('#receipt').addClass("hidden");
  $('#description').addClass("hidden");
  $('#amnt').addClass("hidden");

});
 function visible_cash()
 {
    
    var selected_value = $('#type').val();
// alert(selected_value);
    if(selected_value!="credit")
    {
      $('#receipt').removeClass("hidden");
      $('#description').removeClass("hidden");
      $('#amnt').removeClass("hidden");
       
    }
    else{
      $('#receipt').addClass("hidden");
      $('#description').addClass("hidden");
      $('#amnt').addClass("hidden");
    }
    
  }


  function getdata()
{

postData=$('#desc_code').val();
//  alert(postData);
var request = $.ajax({
  url: 'job-invoice-description/'+postData,
  type: 'GET',
  dataType: 'JSON'
  });
  request.done( function (result) {
    console.log(result);
  var values=JSON.stringify(result);
  $("#description_job").val(result[0].description);
  $("#description_id").val(result[0].id);
console.log(result[0].id);
  });

}
function insert_job_invoice()
{
  if($('#unitprice,#unit_price,#conv_factor,#quantity,#vat').val() == ''){
    alert('Insert all fields');
 }
else{
  insertRow();
}
}

$(document).on("click", '.rmvbutton', function() {
         
  $(this).closest("tr").remove();
  calculates();
return false;
});
function insertRow()
{
  var descID=0;
    var desc= $("#description_job").val();
    var price=parseFloat($("#unitprice").val());
    var price1=parseFloat($("#unitprice").val());
    var conv_factor=parseFloat($("#conv_factor").val());
     var price = price *  conv_factor;

    var quantity=$("#quantity").val();
    var currency=$("#unit_price").val();
    
    var vatAmount=parseFloat($("#vat").val());
   var SubTotal=quantity*price;
 var taxvalue=((SubTotal * vatAmount) / 100);
 var total=SubTotal+taxvalue;
//  var currency=parseFloat($("#unit_price").val());
$(".dataadd").append( "<tr class='tbl_row'><td class='job_desc'>"+desc+" </td> <td class='job_price'>"+price1+"</td><td class='job_quantity'>"+quantity+"</td> <td class='subtotalval_data'>"+SubTotal+"</td> <td class='taxval_data'>"+taxvalue+"</td>  <td class='totalval_data'>"+total+"</td> <td><a class='rmvbutton'><i class='fa fa-trash-o'></i></a><input type='hidden' class='currency' value='"+currency+"'/><input type='hidden' class='cov_factor' value='"+conv_factor+"'/> </td></tr>" );
calculates();
}
function calculates() {
  var totsub_val=0;
  $(".subtotalval_data").each(function(td) {
      var s = parseFloat($(this).html());
      totsub_val=parseFloat(totsub_val)+s;
  });

  var taxval_data_val=0;
  $(".taxval_data").each(function(td) {
      var s = parseFloat($(this).html());
      taxval_data_val=parseFloat(taxval_data_val)+s;
  });

  var totalval_data_val=0;
  $(".totalval_data").each(function(td) {
      var s = parseFloat($(this).html());
      totalval_data_val=parseFloat(totalval_data_val)+s;
  });
 

  $("#total").val(totsub_val.toFixed(2));

 $("#vat_total").val(taxval_data_val.toFixed(2));
 $("#grand_total").val(totalval_data_val.toFixed(2));


}
//insert data to job-details table

function insert_job_details() {
// var Data;
var JobData = {
              
  "Inv": $('#inv_code').val(),
  "Date":$('#date').val(),
  "JobId":$('#job_id').val(),
  "Bank":$('#bank').val(),
  "InvoiceType":$('#type').val(),
  "ReceiptNo":$('#receipt_no').val(),
  "ReceiptDescription":$('#adv_desc').val(),
  "Amount":$('#amount').val(),
  "Status":"Drafted",
  "Active":"active",
  "Total":$('#total').val(),
  "VatTotal":$('#vat_total').val(),
  "GrandTotal":$('#grand_total').val()
};
  var JobDetails = [];
          $(".tbl_row").each(function () {
              var Data = {
                "Description":$(this).find('.job_desc').text(),
                  "UnitPrice": $(this).find('.job_price').text(),
                  "Currency": $(this).find('.currency').val(),
                  "ConvFactor": $(this).find('.cov_factor').val(),
                   "Quantity":$(this).find('.job_quantity').text(),
                   "Vat": parseFloat($(this).find('.taxval_data').text()),
                   "Total": parseFloat($(this).find('.totalval_data').text())
                  
              };
              JobDetails.push(Data);
             // console.log(JobDetails);
          });
     var  inv_code=$('#inv_code').val();  

var postData = {
  JobDetails: JobDetails,
  JobData: JobData
    };
    console.log(postData);
    var request = $.ajax({
      url: '../insert-job-details',
      type: 'POST',
      data: {postData:postData} ,
      dataType: 'JSON'
      });
    request.done( function ( data ) {
 
    });
    request.fail( function ( jqXHR, textStatus) {
    //   console.log(jqXHR)
    // alert("Job Invoice Created Successfully");
    window.location.href='../invoice-print/'+inv_code
      });

  }



