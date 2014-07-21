$(document).ready(function(){
    $("dd").click(function(){

        if ($(this).find("i").hasClass("fi-plus")) {
            $(this).find("i").removeClass("fi-plus");
            $(this).find("i").addClass("fi-minus");
        }else{
            $(this).find("i").removeClass("fi-minus");
            $(this).find("i").addClass("fi-plus");             
        }
        var teamDD = $("#teamsDiv").find("dd");
        for(var i=0; i<teamDD.length; i++){
            if(teamDD.get(i) != $(this).get(0)){
                teamDD.get(i).getElementsByTagName("i")[0].setAttribute("class","fi-plus");
            }
        }
    });

    $(window).stellar();
    
    setActiveNavItem();
    
});  

function setActiveNavItem(){
    var url = document.URL; // get the url
    console.log(url);

    var splitUrl = url.split("/"); // split the string on the /
    
    var page = splitUrl[splitUrl.length - 1]; // get the last string in the url : index.php
    
    console.log(page);
    if (page.indexOf("#") != -1){
        var actualPage = page.substring(0,page.indexOf("#"));
    }
    else{
        var actualPage = page;
    }
    
    console.log(actualPage);
    
    switch (actualPage) {
        case "about.php":
            document.getElementById("navItemAbout").setAttribute("class","navActive");
            break;
        case "office.php":
            document.getElementById("navItemOffice").setAttribute("class","navActive");
            break;
        case "portfolio.php":
            document.getElementById("navItemPortfolio").setAttribute("class","navActive");
            break;
        case "jobs.php":
            document.getElementById("navItemContact").setAttribute("class","navActive");
            break;
    }
}

function submitContactMessage(){
    // some form validation
    
    // send form
    $.ajax({
        method: "POST",
        url: "contact.php",
        data:{
            name: $("#contact_name").val(),
            email: $("#contact_email").val(),
            phone: $("#contact_phone").val(),
            message: $("#contact_message").val()
        },
        success: submitContactMessageCallBack
    }); 
}

function submitContactMessageCallBack(data){
    console.log(data);
    
    var result = JSON.parse(data);
    if (result.result == true) {
        //code
        $("#contact_message_result").html("Your message was submitted successfully!");
        $("#contact_message_row").removeClass("alert");
        $("#contact_message_row").addClass("success");
    }
    else{
        $("#contact_message_result").html("Please fill in all required fields.");
        $("#contact_message_row").removeClass("success");
        $("#contact_message_row").addClass("alert");
    }
    
    $("#contact_message_row").fadeIn(400).delay(3000).fadeOut(400);
}