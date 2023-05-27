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
        }
    });
// Fetch purchase items
var sellerId = $('#sellerId').val();
$('#description, #itemRate, #itemQty').val('');
$('#purchased-items').html('');
$.ajax({
    url: "/fetch-purchase-item",
    type: "GET",
    data: { 'id': sellerId },
    success: function (response) {
        sum = 0;
        $.each(response, function(key,value){
            var description = value.description;
            var itemRate  = value.itemRate;
            var itemQty   = value.itemQty ;
            var total = itemRate * itemQty;
            sum += parseFloat(total);

            $('#purchased-items').append(
                '<tr>'+
                '<td >'+ (key + 1) +'</td>'+
                '<td >'+description+'</td>'+
                '<td >'+itemRate+'</td>'+
                '<td >'+itemQty+'</td>'+
                '<td >'+total.toFixed(2).toLocaleString()+'</td>'+ 
                '<td class="text-center">' +
                    '<input type="hidden" id="customer_id" value=' + value.customerId + '>' +
                    '<a class="invoice-remove text-danger">' + 'X' + '</a>' +
                    '</td>' +              
                '</tr>'
            );
            //calculation total
            var sellerId = value.sellerId;
            var purchaseDate = value.purchaseDate;
            var invoiceId = Math.floor((Math.random() * 9999));
            $('#calculation').empty();
            $('#calculation').append(
                "<tr>" +
                "<td class='text-right'>" + "PAYABLE" + "</td>" +
                "<td style='width:2%;' class='text-left'>" + "=" + "</td>" +
                "<td class='text-left'>" +
                 sum.toFixed(2).toLocaleString() + " " + "TK" +
                 "<input type='hidden' name='sellerId' value=" + sellerId + ">" +
                 "<input type='hidden' name='purchaseDate' value=" + purchaseDate + ">" +
                 "<input type='hidden' name='invoiceId' value=" + invoiceId + ">" +
                 "<input type='hidden' name='amount' value=" + sum + ">" +
                  "</td>" +
                "</tr>" 
            );
        });
       
    }
 });

});
