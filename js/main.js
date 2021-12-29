
 $('#addNewProduct').submit(function () {

    var form = $('#addNewProduct')[0];
    var formData = new FormData(form);
    event.preventDefault();  
    console.log(formData);
 

    request = $.ajax({  
        url: 'handler/add.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });
    console.log(request);
    request.done(function (response, textStatus, jqXHR) {
        console.log(textStatus);
        console.log(jqXHR);
      console.log(response);

        if (response === "Success") {
            alert("Uspesno dodato");
            
            
        }
        else {
       
            console.log("Neuspesno" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
}); 




function deleteProduct(deleteid){


    request = $.ajax({  
        url: 'handler/remove.php',  
        type: 'post', 
        data: {deleteid:deleteid},


        success: function(data, status){
            location.reload(true);
            alert("Uspesno obrisano!");
        }


    });



}
 

function updateCandy(updateid) {
   
    $(".products").html("");
    $.post("updateProduct.php", { updateid: updateid }, function (data) {
        $(".products").html(data);
    });
 

}

$('#EditProduct').submit(function () {

    var form = $('#EditProduct')[0];
    console.log(form);
    var formData = new FormData(form);
    event.preventDefault();  
    console.log(formData);
 
    
    request = $.ajax({  
        url: 'handler/edit.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });
    console.log(request);
    request.done(function (response, textStatus, jqXHR) {
        console.log(textStatus);
        console.log(jqXHR);
      console.log(response);

        if (response === "Success") {
            alert("Uspesno dodato");
            
            
        }
        else {
       
            console.log("Neuspesno" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
}); 


function sortirajPoCeni() {
    var sortiraj = $("#cena").val();
    console.log(sortiraj);
 //   var kategorijesel = $("#kategorija").val();

    $("#products").html("");
    $.post("productCards.php", { cena: sortiraj }, function (data) {
        $("#products").html(data);
    });
    $('html, body').animate({
        scrollTop: $("#products").offset().top
    }, 2000);

   


}

  
