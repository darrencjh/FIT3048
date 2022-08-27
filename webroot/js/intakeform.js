//-------------------------Page 1---------------------------------------------------
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


//-----------------------Page 2----------------------------------------------------
// Yes/No button. When selected,make it
$(".yesNo :radio").change(function (){
    $(this).parent().parent().addClass("yesNoSelected")
        .siblings().removeClass("yesNoSelected")
})
//Documents to bring when client click yes for each document
//事件委托
$("#documentsGroup").on("change",":radio",function(e){
    let targetLi;
    if(this.name=="has_will"){
        targetLi=$("#documentsToBring>li:nth-child(2)")
    }else if(this.name=="has_power"){
        targetLi=$("#documentsToBring>li:nth-child(3)")
    }else if(this.name=="has_binding"){
        targetLi=$("#documentsToBring>li:nth-child(4)")
    }else if(this.name=="has_decision_maker"){
        targetLi=$("#documentsToBring>li:nth-child(5)")
    }else if(this.name=="has_superannu_deed"){
        targetLi=$("#documentsToBring>li:nth-child(6)")
    }else if(this.name=="has_family_deed"){
        targetLi=$("#documentsToBring>li:nth-child(7)")
    }
    if(this.value==1) targetLi.addClass("show")
    else targetLi.removeClass("show")
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

//Children fields.
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_child_current]").change(function(){
    if($(this).val()==1) $("#hasChildren").slideDown()
    else $("#hasChildren").slideUp()
})
$(":radio[name=has_child_prev]").change(function(){
    if($(this).val()==1) $("#hasChildren").slideDown()
    else $("#hasChildren").slideUp()
})

// 2.Add a children row
$("#yourChildren").click(function(e){
    if($(e.target).parent().hasClass('addChild')){
        $("#yourChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").addClass('show')
        let $oneChildInputs=$("#yourChildren>.childInputs:first").clone()
        $("#yourChildren").append($oneChildInputs)

    }else if($(e.target).parent().hasClass('deleteChild')){
        $(e.target).parent().parent().parent().parent().parent().remove()
        if($(this).children().length==2){
            //hide the minus button,when only one child
            $("#yourChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").removeClass('show')
        }
    }
})
$("#yourGrandChildren").click(function(e){
    if($(e.target).parent().hasClass('addChild')){
        $("#yourGrandChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").addClass('show')
        let $oneChildInputs=$("#yourGrandChildren>.childInputs:first").clone()
        $("#yourGrandChildren").append($oneChildInputs)

    }else if($(e.target).parent().hasClass('deleteChild')){
        $(e.target).parent().parent().parent().parent().parent().remove()
        if($(this).children().length==2){
            //hide the minus button,when only one grandchild
            $("#yourGrandChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").removeClass('show')
        }
    }
})


//householder member
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_household_member]").change(function(){
    if($(this).val()==1) $("#yourHouseMembers").slideDown()
    else $("#yourHouseMembers").slideUp()
})
//2.add a householder member
$("#yourHouseMembers").click(function(e){
    e.stopPropagation()
    if($(e.target).parent().hasClass('addHouseMember')){
        $(".houseMemberInputs>div:last").children(":last-child").children(":last-child").addClass('show')
        let $oneRow=$("#yourHouseMembers>.houseMemberInputs:first").clone()//clone the first row
        $("#yourHouseMembers").append($oneRow)
    }else if($(e.target).parent().hasClass('deleteHouseMember')){
        let $targetRow=$(e.target).parent().parent().parent().parent().parent()
        $targetRow.remove()
        if($(".houseMemberInputs").length==1){
            console.log("only one left")
            $(".houseMemberInputs>div:last").children(":last-child").children(":last-child").removeClass('show')
        }
    }
})


//Dependents
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_financial_dependent]").change(function(){
    if($(this).val()==1) $("#yourOtherDep").slideDown()
    else $("#yourOtherDep").slideUp()
})
//2.add a dependents
$("#yourOtherDep").click(function(e){
    e.stopPropagation()
    if($(e.target).parent().hasClass('addDependent')){
        $(".otherDepInputs>div:last").children(":last-child").children(":last-child").addClass('show')
        let $oneRow=$("#yourOtherDep>.otherDepInputs:first").clone()//clone the first row
        $("#yourOtherDep").append($oneRow)
    }else if($(e.target).parent().hasClass('deleteDependent')){
        let $targetRow=$(e.target).parent().parent().parent().parent().parent()
        $targetRow.remove()
        if($(".otherDepInputs").length==1){
            console.log("only one left")
            $(".otherDepInputs>div:last").children(":last-child").children(":last-child").removeClass('show')
        }
    }
})
