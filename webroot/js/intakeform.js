//add blur events here




//In page 1,when you click "Next". Verify the basic information form first,then display next page
$("#page1Next").click(function(){


    //if pass verify,return true
    $("#page1").removeClass('show')
    $("#page2").addClass('show')
    window.scrollTo(0, 0);

    //if not pass,return false and scroll to top

})

$("#page2Prev").click(function(){
    $("#page2").removeClass('show')
    $("#page1").addClass('show')
    window.scrollTo(0, 0);
})
$("#page2Next").click(function(){
    $("#page2").removeClass('show')
    $("#page3").addClass('show')
    window.scrollTo(0, 0);
})

$("#page3Prev").click(function(){
    $("#page3").removeClass('show')
    $("#page2").addClass('show')
    window.scrollTo(0, 0);
})
$("#page3Next").click(function(){
    $("#page3").removeClass('show')
    $("#page4").addClass('show')
    window.scrollTo(0, 0);
})

$("#page4Prev").click(function(){
    $("#page4").removeClass('show')
    $("#page3").addClass('show')
    window.scrollTo(0, 0);
})

//Page 4: click submit button,the basic info should move to page1Next click event
$("#submitIntakeform").click(function () {
    let givenName = inputGivenName.value
    let lastName = inputLastName.value
    let DOB = inputDOB.value
    let occupation = inputOccupation.value
    let houseNumber = inputHouseNumber.value
    let address = inputAddress.value
    let state = inputState.value
    let postCode = inputPostCode.value
    let email = inputEmail.value
    let phoneNumber = inputPhoneNumber.value
    if (givenName == "") $("#inputGivenName").addClass("is-invalid")
    if (lastName == "") $("#inputLastName").addClass("is-invalid")
    if (DOB == "") $("#inputDOB").addClass("is-invalid")
    if (occupation == "") $("#inputOccupation").addClass("is-invalid")
    if (houseNumber == "") $("#inputHouseNumber").addClass("is-invalid")
    if (address == "") $("#inputAddress").addClass("is-invalid")
    if (state == "") $("#inputState").addClass("is-invalid")
    if (postCode == "") $("#inputPostCode").addClass("is-invalid")
    if (email == "") $("#inputEmail").addClass("is-invalid")
    if (phoneNumber == "") $("#inputPhoneNumber").addClass("is-invalid")

    if (!givenName || !lastName || !DOB || !occupation || !houseNumber || !address || !state || !postCode || !email || !phoneNumber) {
        document.getElementById('content').scrollIntoView(true)

        return false
    } else {
        return true
    }


})


// Yes/No button
$(".yesNo :radio").change(function (){
    $(this).parent().parent().addClass("yesNoSelected")
        .siblings().removeClass("yesNoSelected")
})
//health description display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=is_health]").change(function(){
    if($(this).val()==1) $("#health_desc").addClass("show")
    else $("#health_desc").removeClass("show")
})
//relationship button
$(".relationStatus :radio").change(function (){
    $(this).parent().parent().addClass("statusSelected")
        .siblings().removeClass("statusSelected")

    $(".relationFields").removeClass("show")
    let value=$(this).val()
    if(value=="married"){
        $("#marriedField").addClass("show")
    }else if(value=="de-facto"){
        $("#deFactoField").addClass("show")
    }else if(value=="separated or divorced"){
        $("#sepField").addClass("show")
    }
})

//Children fields. display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_child_current]").change(function(){
    if($(this).val()==1) $("#hasChildren").addClass("show")
    else $("#hasChildren").removeClass("show")
})
$(":radio[name=has_child_prev]").change(function(){
    if($(this).val()==1) $("#hasChildren").addClass("show")
    else $("#hasChildren").removeClass("show")
})

$(".addChild").click(function(){
    var $oneChildInputs=$(".childInputs:first").clone()
    $("#yourChildren").append($oneChildInputs)
})
