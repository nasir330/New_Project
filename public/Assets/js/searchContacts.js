
//contact search input
$('#searchContact').on('keyup', function () {
   var name = $(this).val();
   //post form data          
   $.ajax({
      url: "/contacts-search",
      type: "GET",
      data: { 'name': name },
      success: function (data) {
         $('#search-name').html(data);
      }
   });
});
//collect contact name from search list
$(document).on('click', 'li', function () {
   var item = $(this).text();
   $('#searchContact').val(item);
   $('#search-name').empty();
});

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

//collect contact details on button click 
$('#btn-selectContact').on('click', function (e) {
   e.preventDefault();
   var jsonObject = jsonConversion('#selectContact-form');

   $('#customer-info').empty();
   //post form data          
   $.ajax({
      url: "/contacts-select",
      type: "POST",
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: jsonObject,
      dataType: "json",
      contentType: "application/json",
      success: function (response) {
         var lineBreak = '<br/>';
         var id = response.id;
         var photo = response.photo;
         var rootUrl = window.location.protocol + "//" + window.location.host + '/';
         var imageSrc = rootUrl + photo;
         var name = response.name;
         var company = response.company;

         $('#contactsData').append(
            '<div class="row">' +
            '<div class="col-auto">' +
            '<input type="hidden" class="form-control" name="customerId" value=' + id + '>' + lineBreak +
            '<img style="width:80px; margin-top:-20px" src="' + imageSrc + '" alt="User">' +
            '</div>' +
            '<div class="col-auto">' +
            ' <strong class="text-uppercase">' + company + '</strong>' + lineBreak +
            ' <strong>' + name + '</strong>' +
            '</div>' +
            '</div>'
         );
         $('#sellerId').val(id);
      }
   });      
});
