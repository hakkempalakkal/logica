//hide div
$(document).ready(function()
{
    $("#suppliertitle").addClass("hidden");
    $("#supplierdescription").addClass("hidden");
});

//view all supplier details
function get_supplier_data()
{
  // if($('#supplier_name').val()="")
  // {
  //   alert("choose supplier name");
  // }
  
    $("#suppliertitle").removeClass("hidden");
    $("#supplierdescription").removeClass("hidden");
    supplier_id=$('#supplier_id').val();
 // alert(supplier_id);
    var request = $.ajax({
        url: 'supplier-data/'+supplier_id,
        type: 'GET',
        dataType: 'JSON'
        });
        request.done( function (result) {
      
        var values=JSON.stringify(result);
      
//supplier details
        $("#suppliername").text(result["supplierdata"][0].supplier_name);
        $("#contactperson").text(result["supplierdata"][0].contact_person);
        $("#address").text(result["supplierdata"][0].address);
        $("#country").text(result["supplierdata"][0].country);
        $("#phone").text(result["supplierdata"][0].mobile);
       
        
        console.log(result["supplierdata"][0].supplier_name );
//supplier invoice total
        $("#supplierinvtotal").text(result["supplierinvoicetotal"][0].sum);
//supplier paid invoice total
$("#supplierinvpaid").text(result["supplierpaidinvoice"][0].sum);
//due
var unpaid=$("#supplierinvtotal").text(result["supplierinvoicetotal"][0].sum);
var paid=$("#supplierinvpaid").text(result["supplierpaidinvoice"][0].sum);
 var due=unpaid-paid;

$("#dueamount").text=due;
console.log(due);
//supplier ledger
var slno=0;

        $.each(result["viewledgerdata"],function(index,value) {
            slno=slno+1;
            date=value.Dates;
          type=value.types;
          description=value.Descriptions;
          credit=value.Credit;
          debit=value.Debit;
            $(".ledgerdatatable").append( "<tr class='tbl_row'><td class='slno'>"+slno+" </td> <td class='date'>"+date+"</td> <td class='type'>"+type+"</td> <td class='description'>"+description+"</td>  <td class='credit'>"+credit+"</td><td class='debit'>"+debit+"</td> </tr>" );
        });
 //post expense
 $("#supplierexpense_id").val(result["postedexpense"][0].id);
 var eid=$("#supplierexpense_id").val();
console.log(eid);
        var expno=0;    
        var postsum=0;
        $.each(result["postedexpense"],function(index,value) {
         expno=expno+1;
            invdate=value.Dates;
            doc=value.doc;
            particulars=value.particulars;
            ref=value.refinv;
         supplier=value.suppliername;
         
          amount=parseFloat(value.amount).toFixed(2);
          postsum=parseFloat(postsum)+parseFloat(amount);
        
            $(".postedexpensedetails").append( "<tr class='tbl_row'><td class='expno'>"+expno+" </td> <td class='date'>"+invdate+"</td> <td class='doc'>"+doc+"</td>  <td class='particulars'>"+particulars+"</td>  <td class='ref'>"+ref+"</td><td class='supplier'>"+supplier+"</td> <td class='amount'>"+amount+"</td><td><a class='edit' onclick='editexpense("+eid+");'><i class='fa fa-edit'></i></a></td></tr>" );
        });
        postsum=parseFloat(postsum).toFixed(2);
        $(".postedexpensedetails").append( "<tr class='tbl_row' style='background-color: #e6e6ff;'><td colspan='6' > Total Expenditure </td><td style='text-align: right;'>"+postsum+"</td></tr>"); 

//debit note details
var debno=0;
var debitsum=0;
$(".debitnotedata").html("");
        $.each(result["debitnotedata"],function(index,value) {
            deb_no=debno+1;
            invdate=value.Dates;
            doc=value.doc;
            particulars=value.particulars;
            ref=value.refinv;  
         supplier=value.suppliername;
          amount=parseFloat(value.amount).toFixed(2);
          debitsum=parseFloat(debitsum)+parseFloat(amount);
         

            $(".debitnotedata").append( "<tr class='tbl_row'><td class='debno'>"+deb_no+" </td> <td class='date'>"+invdate+"</td> <td class='doc'>"+doc+"</td>  <td class='particulars'>"+particulars+"</td>  <td class='ref'>"+ref+"</td><td class='supplier'>"+supplier+"</td> <td class='amount'>"+amount+"</td></tr>" );
        });
        debitsum=parseFloat(debitsum).toFixed(2);
        $(".debitnotedata").append( "<tr class='tbl_row' style='background-color: #e6e6ff;'><td colspan='6' > Total Debitnote </td><td style='text-align: right;'>"+debitsum+"</td></tr>"); 

//supplier payment
        var supno=0;
        var paymentsum=0;
        $.each(result["supplierpaymentdata"],function(index,value) {
            supno=supno+1;
            invdate=value.Dates;
            doc=value.doc;
            particulars=value.particulars;
            ref=value.refinv;  
         supplier=value.suppliername;
         amount=parseFloat(value.amount).toFixed(2);
         paymentsum=parseFloat(paymentsum)+parseFloat(amount);

        
            $(".supplierpaymentdata").append( "<tr class='tbl_row'><td class='debno'>"+supno+" </td> <td class='date'>"+invdate+"</td> <td class='doc'>"+doc+"</td>  <td class='particulars'>"+particulars+"</td>  <td class='ref'>"+ref+"</td><td class='supplier'>"+supplier+"</td> <td class='amount'>"+amount+"</td></tr>" );
        });
        paymentsum=parseFloat(paymentsum).toFixed(2);
        $(".supplierpaymentdata").append( "<tr class='tbl_row' style='background-color: #e6e6ff;'><td colspan='6' > Total Payment </td><td style='text-align: right;'>"+paymentsum+"</td></tr>"); 

       
        });
        request.fail( function ( jqXHR, textStatus) {
            //   console.log(jqXHR)
          alert(0);
           
              });
        
}
function editexpense(eid)
{
  var eid= eid;   
  window.location = 'edit-supplier-expense/' + eid;
}
