
    //add permission
    function add($type)
    {
      var now = moment().format('YYYY-MM-DD h:mm:ss a');
  
      postData = {
            "type":$type
             
      };
      var request = $.ajax({
      url: 'transportation-store',
      type: 'POST',
      data: {postData:postData} ,
      dataType: 'JSON'
      });
      request.done( function ( data ) {
  //console.log(data);
  $('#id').val(data);
  $("#type").val($type);
  //console.log(postData); 
  return postData;
      });
    
  
    }
  //  update
    function update()
    {
     var typevqal=$("#type").val();
    // alert( $('#id').val());
    // alert(typevqal);
      if(typevqal=="air")
      {
        var etd=$("#etd_air").val();  
        var eta=$("#eta_air").val();  
        var Origin=$("#origin_air").val();
        var Destination=$("#destination_air").val();
        var carrier=$("#Carrier_air").val();
        var PoNo=$("#PoNo_air").val();
        var Mawb=$("#Mawb_air").val();
        var Nopcs=$("#Nopcs_air").val();
        var ActualWeight=$("#ActualWeight_air").val();
        var ChargeableWeight=$("#ChargeableWeight_air").val();
      // console.log(etd) ;
      // console.log(eta) ;
     }
      else if(typevqal=="sea")
      {
        var etd=$("#etd_sea").val();
        var eta=$("#eta_sea").val(); 
        var carrier=$("#Carrier_sea").val();
        var PoNo=$("#PoNo_sea").val(); 
        var Mbl=$("#Mbl_sea").val(); 
        var ActualWeight=$("#ActualWeight_sea").val();
       
      }
      else if(typevqal=="transportation")
      {
        var etd=$("#etd_transport").val();
        var eta=$("#eta_transport").val();
        var Origin=$("#Origin_transport").val();
        var Destination=$("#Destination_transport").val(); 
        var carrier=$("#Carrier_transport").val(); 
        var PoNo=$("#PoNo_transport").val();
        var Mbl=$("#Mbl_transport").val(); 
        var Nopcs=$("#Nopcs_transport").val(); 
        var ActualWeight=$("#ActualWeight_transport").val();
       
      }
      else if(typevqal=="land")
      {
        var etd=$("#etd_land").val();
        var eta=$("#eta_land").val();
        var Origin=$("#Origin_land").val();
        var Destination=$("#Destination_land").val(); 
        var carrier=$("#Carrier_land").val();
        var PoNo=$("#PoNo_land").val(); 
        var Nopcs=$("#Nopcs_land").val(); 
        var Mawb=$("#Mawb_land").val();
        var ChargeableWeight=$("#ChargeableWeight_land").val();
      
      }


      var now = moment().format('YYYY-MM-DD h:mm:ss a');
      Data = {
        "Number":$('#code').val(),
        "Date": $('#date').val(),
        "Shipper": $('#shippername').val(),
        "Consignee": $('#consigneename').val(),
        "client_name": $('#client_name').val(),
        "shipment_type": $('#shipment_type').val(),
        "ShipmentTerms": $('#Shipment_Terms').val(),
        "CargoDescription": $('#cargo_description').val(),
        "Origin":Origin,
        "Destination": Destination,        
        "Etd":etd,
        "Eta":eta,
        "Carrier":carrier,
        "PoNo":PoNo,
        "Mawb":Mawb,
        "Hawb": $('#Hawb').val(),
        "Nopcs": Nopcs,
        "ActualWeight": ActualWeight,
        "ChargeableWeight": ChargeableWeight,
        "Dimension": $('#Dimension').val(),
        "Pol": $('#Pol').val(),
        "Pod": $('#Pod').val(),
        "Mbl": Mbl,
        "Hbl": $('#Hbl').val(),
        "ContType": $('#ContType').val(),
        "NoContainers": $('#NoContainers').val(),
        "ContainerNo": $('#ContainerNo').val(),
        "TruckNo": $('#TruckNo').val(),
        "BayanNo": $('#BayanNo').val(),
        "BayanDate": $('#BayanDate').val(),
        "Status": $('#Status').val(),
        "JobStatus": $('#JobStatus').val(),
        "LabUndertaking": $('#LabUndertaking').val(),
        "DocsGuarantee": $('#DocsGuarantee').val(),
        "Description": $('#Description').val(),
        "PoP": $('#PoP').val(),
        "salesman": $('#salesman').val(),
        "consignor_id": $('#consignor_id').val(),
        "consignee_id": $('#shipperid').val()

  };

      var postData = {
       postData1: Data,
        id: $('#id').val(),
  
    };
    console.log(postData);
      var request = $.ajax({
      url: 'transportation-update',
      type: 'POST',
      data: {postData:postData} ,
      dataType: 'JSON'
      });
      request.done( function ( data ) {
     
     
      });
      request.fail( function ( jqXHR, textStatus) {
       
      
       
      });

   }

   
  
