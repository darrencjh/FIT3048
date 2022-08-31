//-------------------------Page 1---------------------------------------------------
let verifyFirstName=(inputGivenName)=>{
    if(inputGivenName==""){
        $("#nameError").text("Please enter your first name")
        $("#inputGivenName").addClass("is-invalid")
        return false
    } else if(!/^[a-zA-Z\s]{2,}$/.test(inputGivenName)){
        $("#nameError").text("Name can only contain letters")
        $("#inputGivenName").addClass("is-invalid")
        return false
    }
    return true
}

let verifyLastName=(inputLastName)=>{
    if(inputLastName==""){
        $("#lastNameError").text("Please enter your last name")
        $("#inputLastName").addClass("is-invalid")
        return false
    } else if(!/^[a-zA-Z\s]{2,}$/.test(inputLastName)){
        $("#lastNameError").text("Name can only contain letters")
        $("#inputLastName").addClass("is-invalid")
        return false
    }
    return true
}

let verifyPreviousName=(inputPrevName)=>{
    if(inputPrevName!= "" &&!/^[a-zA-Z\s]{2,}$/.test(inputPrevName)){
        $("#nameError").text("Name can only contain letters(more than 1 letter)")
        $("#inputPrevName").addClass("is-invalid")
        return false
    }
    return true
}

let verifyDOB=(inputDOB)=>{
    if(inputDOB==""){
        $("#dateError").text("Please enter your date of birth")
        $("#inputDOB").addClass("is-invalid")
        return false
    }
    return true
}

let verifyOccupation=(inputOccupation)=>{
    if(inputOccupation==""){
        $("#occupationError").text("Please enter your occupation")
        $("#inputOccupation").addClass("is-invalid")
        return false
    } else if(!/^[a-zA-Z\s]{2,}$/.test(inputOccupation)){
        $("#occupationError").text("Occupation can only contain letters")
        $("#inputOccupation").addClass("is-invalid")
        return false
    }
    return true
}

//street number need validation?
let verifyUnit=(inputUnit)=>{
    if(inputUnit==""){
        $("#unitError").text("Please enter your unit/House number")
        $("#inputUnit").addClass("is-invalid")
        return false
    } else if(!/[#0-9a-zA-Z\s]/.test(inputUnit)){
        $("#unitError").text("check your unit/House number")
        $("#inputUnit").addClass("is-invalid")
        return false
    }
    return true
}


let verifyAddress=(inputStreet)=>{
    if(inputStreet==""){
        $("#addressError").text("Please enter your street address")
        $("#inputStreet").addClass("is-invalid")
        return false
    } else if(!/[0-9a-zA-Z\s]/.test(inputStreet)){
        $("#addressError").text("check your street address")
        $("#inputStreet").addClass("is-invalid")
        return false
    }
    return true
}

let verifySuburb=(inputSuburb)=>{
    if(inputSuburb==""){
        $("#suburbError").text("Please enter your suburb")
        $("#inputSuburb").addClass("is-invalid")
        return false
    } else if(!/[a-zA-Z]/.test(inputSuburb)){
        $("#suburbError").text("check your suburb")
        $("#inputSuburb").addClass("is-invalid")
        return false
    }
    return true

}

let verifyState=(inputState)=>{
    if(inputState==0){
        $("#inputState").addClass("is-invalid")
        return false
    }
    return true
}

let verifyPostcode=(inputPostCode)=>{
    if(inputPostCode==""){
        $("#postcodeError").text("Please provide your postcode")
        $("#inputPostCode").addClass("is-invalid")
        return false
    } else if(!/[1-9][0-9]{3}/.test(inputPostCode)){
        $("#postcodeError").text("Postcode can only contain numbers")
        $("#inputPostCode").addClass("is-invalid")
        return false
    }
    return true

}
// let verifyPostalAddress=(inputPostalAddress)=>{
//     if(inputPostalAddress!="" && !/^[#.0-9a-zA-Z\s,-]+$/.test(inputPostalAddress)){
//         $("#postalAddressError").text("Please provide a valid address")
//         $("#inputPostAddress").addClass("is-invalid")
//     }
// }

let verifyEmail=(inputEmail)=>{
    if(inputEmail==""){
        $("#emailError").text("Please enter your email")
        $("#inputEmail").addClass("is-invalid")
        return false
    } else if(!/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(inputEmail)){
        $("#emailError").text("Please follow the email format")
        $("#inputEmail").addClass("is-invalid")
        return false
    }
    return true
}

let verifyPhone=(inputPhone)=>{
    if(inputPhone==""){
        $("#phoneError").text("Please provide your phone number")
        $("#inputPhone").addClass("is-invalid")
        return false
    } else if(!/04[0-9]{8}/.test(inputPhone)){
        $("#phoneError").text("Phone number can only contain numbers")
        $("#inputPhone").addClass("is-invalid")
        return false
    }
    return true
}


//add blur events here
$("#inputGivenName").blur(function () {
    verifyFirstName(this.value)
})
$("#inputLastName").blur(function () {
    verifyLastName(this.value)
})
$("#inputPrevName").blur(function () {
    verifyPreviousName(this.value)
})
$("#inputDOB").blur(function () {
    verifyDOB(this.value)
})
$("#inputOccupation").blur(function () {
    verifyOccupation(this.value)
})
$("#inputUnit").blur(function () {
    verifyUnit(this.value)
})
$("#inputStreet").blur(function () {
    verifyAddress(this.value)
})
$("#inputSuburb").blur(function () {
    verifySuburb(this.value)
})
$("#inputState").blur(function () {
    verifyState(this.value)
})
$("#inputPostCode").blur(function () {
    verifyPostcode(this.value)
})
// $("#inputPostAddress").blur(function () {
//     verifyPostalAddress(this.value)
// })
$("#inputEmail").blur(function () {
    verifyEmail(this.value)
})
$("#inputPhone").blur(function () {
    verifyPhone(this.value)
})


$("#inputGivenName").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputLastName").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputPrevName").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputDOB").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputOccupation").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputUnit").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputStreet").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputSuburb").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputState").click(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputPostCode").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
// $("#inputPostAddress").mousedown(function () {
//     if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
// })
$("#inputEmail").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputPhone").mousedown(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})


//In page 1,when you click "Next". Verify the basic information form first,then display next page
$("#page1Next").click(function(){

    let firstName = inputGivenName.value
    let lastName = inputLastName.value
    let previousName = inputPrevName.value
    let dob = inputDOB.value
    let occupation = inputOccupation.value
    let unit=inputUnit.value
    let street = inputStreet.value
    let suburb = inputSuburb.value
    let state = inputState.value
    let postcode = inputPostCode.value
    // let postalAddress=inputPostAddress.value
    let email = inputEmail.value
    let phone = inputPhone.value


    let firstNameResult = verifyFirstName(firstName)
    let lastNameResult = verifyLastName(lastName)
    let prevNameResult = verifyPreviousName(previousName)
    let dobResult = verifyDOB(dob)
    let occupationResult = verifyOccupation(occupation)
    let unitResult=verifyUnit(unit)
    let streetResult = verifyAddress(street)
    let suburbResult = verifySuburb(suburb)
    let stateResult = verifyState(state)
    let postcodeResult = verifyPostcode(postcode)
    // let postalAddressResult=verifyPostalAddress(postalAddress)
    let emailResult = verifyEmail(email)
    let phoneResult = verifyPhone(phone)


    console.log('firstNameResult: ',firstNameResult)
    console.log('lastNameResult: ',lastNameResult)
    console.log('prevNameResult: ',prevNameResult)
    console.log('dobResult: ',dobResult)
    console.log('occupationResult: ',occupationResult)
    console.log('unitResult: ',unitResult)
    console.log('streetResult: ',streetResult)
    console.log('suburbResult: ',suburbResult)
    console.log('stateResult: ',stateResult)
    console.log('postcodeResult: ',postcodeResult)
    console.log('emailResult: ',emailResult)
    console.log('phoneResult: ',phoneResult)
    if (firstNameResult && lastNameResult && prevNameResult && dobResult && occupationResult && unitResult && streetResult && suburbResult
    && stateResult && postcodeResult && emailResult && phoneResult){
        //if pass verify,return true
        console.log("pass")
        $("#page1").removeClass('show')
        $("#page2").addClass('show')
        window.scrollTo(0, 0);
        return true
    }
    else {
        //if not pass,return false and scroll to top
        document.getElementById('page1').scrollIntoView(true)
        return false
    }

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
// Yes/No button. When selected,make it color
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


//Functions
//display when 'Yes',disappear when 'no'
let radioShowDisappearInputs=(target,hiddenDivId)=>{
    if($(target).val()==1) $(`#${hiddenDivId}`).slideDown()
    else $(`#${hiddenDivId}`).slideUp()
}
//Add or Delete a row. such as add a children,a home member,a financial dependant
let addDeleteRow=(e,outerDivId)=>{
    e.stopPropagation()
    if($(e.target).parent().hasClass('add')){
        //if more than 1 row,add "-" button below "+" button
        $(`#${outerDivId} .delete`).parent().addClass('show')
        //clone the first row
        let $oneRow=$(`#${outerDivId}>.inputsRow:first`).clone()
        //make the row inputs value to empty
        $oneRow.find(":input").val("")
        //append to its father div
        $(`#${outerDivId}`).append($oneRow)
    }else if($(e.target).parent().hasClass('delete')){
        //find the target row and remove it
        let $targetRow=$(e.target).parent().parent().parent().parent().parent()
        $targetRow.remove()
        //if only one row left,remove the '-' button
        if($(`#${outerDivId}>.inputsRow`).length==1){
            $(`#${outerDivId} .delete`).parent().removeClass('show')
        }
    }
}


//health description display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=is_health]").change(function(){
    radioShowDisappearInputs(this,'health_desc')
})

//relationship status selection
$(".relationStatus").change(function (e){
    //add color/background-color for the selected one
    $(e.target).parent().parent().addClass("statusSelected")
        .siblings().removeClass("statusSelected")

    //find the index of radio input which is clicked
    let index=$(".relationStatus :radio").index(e.target)
    $(`#relationFields>div:nth-child(${index+1})`).addClass('show').siblings().removeClass('show')
})


//Children fields.
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_child_current]").change(function(){
    if($(this).val()==1) $("#hasChildren").slideDown()
    else if($(":radio[name=has_child_prev]:checked").val()!=1) $("#hasChildren").slideUp()
})
$(":radio[name=has_child_prev]").change(function(){
    if($(this).val()==1) $("#hasChildren").slideDown()
    else if($(":radio[name=has_child_current]:checked").val()!=1) $("#hasChildren").slideUp()
})

// 2.Add a children row
$("#yourChildren").click(function(e){
    // if($(e.target).parent().hasClass('add')){
    //     $("#yourChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").addClass('show')
    //     let $oneChildInputs=$("#yourChildren>.childInputs:first").clone()
    //     $("#yourChildren").append($oneChildInputs)
    //
    // }else if($(e.target).parent().hasClass('delete')){
    //     $(e.target).parent().parent().parent().parent().parent().remove()
    //     if($(this).children().length==2){
    //         //hide the minus button,when only one child
    //         $("#yourChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").removeClass('show')
    //     }
    // }
    addDeleteRow(e,"yourChildren")

})
$("#yourGrandChildren").click(function(e){
    // if($(e.target).parent().hasClass('add')){
    //     $("#yourGrandChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").addClass('show')
    //     let $oneChildInputs=$("#yourGrandChildren>.childInputs:first").clone()
    //     $("#yourGrandChildren").append($oneChildInputs)
    //
    // }else if($(e.target).parent().hasClass('delete')){
    //     $(e.target).parent().parent().parent().parent().parent().remove()
    //     if($(this).children().length==2){
    //         //hide the minus button,when only one grandchild
    //         $("#yourGrandChildren>.childInputs:first").children(":last-child").prev().children(":first-child").children(":last-child").removeClass('show')
    //     }
    // }
    addDeleteRow(e,"yourGrandChildren")

})


//householder member
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_household_member]").change(function(){
    radioShowDisappearInputs(this,'yourHouseMembers')
})
//2.add a householder member
$("#yourHouseMembers").click(function(e){
    addDeleteRow(e,"yourHouseMembers")
})


//Dependents
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_financial_dependent]").change(function(){
    radioShowDisappearInputs(this,'yourOtherDep')
})
//2.add a dependents
$("#yourOtherDep").click(function(e){
    addDeleteRow(e,"yourOtherDep")
})



//-----------------Page 3-------------------------------
//Accountant/Adviser/referral
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_accountant]").change(function(){
    radioShowDisappearInputs(this,'yourAccountant')
})
$(":radio[name=has_adviser]").change(function(){
    radioShowDisappearInputs(this,'yourAdvisor')
})
$(":radio[name=has_referrer]").change(function(){
    radioShowDisappearInputs(this,'yourReferral')
})
