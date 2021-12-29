
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

  
function pretraga(){
    var input, radios, radio_filter, text_filter, td0, i, divList;

    input = document.getElementById("form1");
    text_filter = input.value.toUpperCase();
    divList = $(".card");
    console.log(divList);

    for (i = 0; i < divList.length; i++) {
        console.log(divList[i]);
        td0 = divList[i].getElementsByTagName("h4")[0].innerHTML;
        console.log(td0);
        if (td0) {
          if (td0.toUpperCase().indexOf(text_filter) > -1) {
            divList[i].style.display = "";
          } else {
            divList[i].style.display = "none";
          }
        } 
      }
}
 
