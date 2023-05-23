//function for converting form data into json
function jsonConversion(targetForm) {
    var itemData = $(targetForm).serializeArray();
    var formObject = {};
    for (var i = 0; i < itemData.length; i++) {
        formObject[itemData[i].name] = itemData[i].value;
    }
    var json_conversion = JSON.stringify(formObject);

    return json_conversion;
}

//add purchase item
$('#add-purchaseItem').on('click', function (e) {
    e.preventDefault();
    var jsonObject = jsonConversion('#add-purchase-form');
    //post form data          
    $.ajax({
        url: "/add-purchase-item",
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: jsonObject,
        dataType: "json",
        contentType: "application/json",
        success: function (response) {
            console.log(response);
            if (response.message !== '') {
                $('#addMessage').html(response.message);
                setTimeout(function () {
                    $('#addMessage').html('');
                }, 2000); // Set the timeout to 5 seconds (5000ms)
            }
        }
    });
 //fetch purchase item
 var sellerId = $('#sellerId').val();    
 $.ajax({
     url: "fetch-purchase-item/" + sellerId,
     type: "GET",
     success: function (response) {
         $.each(response, function (key, value) {
             var total = value.rate * value.qty;
             console.log(total);
         });
       
     }
 });
});

//add purchase item
$('#add-purchaseItem').on('click', function () {
   
 //fetch purchase item
 var sellerId = $('#sellerId').val();    
 $.ajax({
     url: "fetch-purchase-item/"+sellerId,
     type: "GET",
     success: function (response) {
         $.each(response, function (key, value) {
             var total = value.rate * value.qty;
             console.log(total);
         });
       
     }
 });
});

