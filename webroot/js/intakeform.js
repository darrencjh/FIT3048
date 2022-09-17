//-------------------------Page 1---------------------------------------------------
let verifyFirstName=(inputGivenName)=>{
    if(inputGivenName==""){
        $("#nameError").text("Please enter your first name")
        $("#inputGivenName").addClass("is-invalid")
        return false
    } else if(!/^[A-Za-z ,.'-]{2,}$/.test(inputGivenName)){
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
    } else if(!/^[A-Za-z ,.'-]{2,}$/.test(inputLastName)){
        $("#lastNameError").text("Last Name can only contain letters")
        $("#inputLastName").addClass("is-invalid")
        return false
    }
    return true
}

let verifyPreviousName=(inputPrevName)=>{
    if(inputPrevName!= "" && !/^[A-Za-z ,.'-]{2,}$/.test(inputPrevName)){
        $("#prevNameError").text("Name can only contain letters")
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
    } else if(!/^[A-Za-z\s]{2,}$/.test(inputOccupation)){
        $("#occupationError").text("Occupation can only contain letters")
        $("#inputOccupation").addClass("is-invalid")
        return false
    }
    return true
}

//Address
let verifyUnit=(inputUnit)=>{
    if(inputUnit==""){
        $("#unitError").text("Please enter your unit/House number")
        $("#inputUnit").addClass("is-invalid")
        return false
    } else if(!/^[#.0-9A-Za-z\s,-]+$/.test(inputUnit)){
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
    } else if(!/^[#.0-9A-Za-z\s,-]+$/.test(inputStreet)){
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
    } else if(!/^[A-Za-z\s]+$/.test(inputSuburb)){
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
    } else if(!/[0-9]{3,4}/.test(inputPostCode)){
        $("#postcodeError").text("Please check the postcode")
        $("#inputPostCode").addClass("is-invalid")
        return false
    }
    return true

}
let verifyPostalAddress=(inputPostalAddress)=>{
    if(inputPostalAddress!="" && !/^[#.0-9a-zA-Z\s,-]+$/.test(inputPostalAddress)){
        // $("#postalAddressError").text("Please provide a valid address")
        $("#inputPostAddress").addClass("is-invalid")
    }
}

let verifyEmail=(inputEmail)=>{
    if(inputEmail==""){
        $("#emailError").text("Please enter your email")
        $("#inputEmail").addClass("is-invalid")
        return false
    } else if(!/^[0-9A-Za-z.!#$%&’*+/=?^_`{|}~-]+@[0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*$/.test(inputEmail)){
        $("#emailError").text("Please check the email format")
        $("#inputEmail").addClass("is-invalid")
        return false
    }
    return true
}
let verifyCommonEmail=(target)=>{
    if(target.value!="" && !/^[0-9A-Za-z.!#$%&’*+/=?^_`{|}~-]+@[0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*$/.test(target.value)){
        $(target).next().text("Please check the email format")
        $(target).addClass("is-invalid")
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
        $("#phoneError").text("phone number can only contain numbers")
        $("#inputPhone").addClass("is-invalid")
        return false
    }
    else if(inputPhone.length != 10){
        $("#phoneError").text("Phone number can only contain 10 numbers")
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
$("#inputPostAddress").blur(function () {
    verifyPostalAddress(this.value)
})

$("input[type=email]").blur(function () {
    verifyCommonEmail(this)
})
$("#inputEmail").blur(function () {
    verifyEmail(this.value)
})

$("#inputPhone").blur(function () {
    verifyPhone(this.value)
})


//when changed
$("#inputGivenName").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputLastName").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputPrevName").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputDOB").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputOccupation").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputUnit").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputStreet").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputSuburb").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputState").click(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputPostCode").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputPostAddress").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#inputEmail").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("input[type=email]").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})

$("#inputPhone").change(function () {
    console.log("change")
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})


//In page 1,when you click "Next". Verify the basic information form first,then display next page
$("#page1Next").click(function(){

    // let firstName = inputGivenName.value
    // let lastName = inputLastName.value
    // let previousName = inputPrevName.value
    // let dob = inputDOB.value
    // let occupation = inputOccupation.value
    // let unit=inputUnit.value
    // let street = inputStreet.value
    // let suburb = inputSuburb.value
    // let state = inputState.value
    // let postcode = inputPostCode.value
    // // let postalAddress=inputPostAddress.value
    // let email = inputEmail.value
    // let phone = inputPhone.value
    //
    //
    // let firstNameResult = verifyFirstName(firstName)
    // let lastNameResult = verifyLastName(lastName)
    // let prevNameResult = verifyPreviousName(previousName)
    // let dobResult = verifyDOB(dob)
    // let occupationResult = verifyOccupation(occupation)
    // let unitResult=verifyUnit(unit)
    // let streetResult = verifyAddress(street)
    // let suburbResult = verifySuburb(suburb)
    // let stateResult = verifyState(state)
    // let postcodeResult = verifyPostcode(postcode)
    // // let postalAddressResult=verifyPostalAddress(postalAddress)
    // let emailResult = verifyEmail(email)
    // let phoneResult = verifyPhone(phone)
    //
    // if (firstNameResult && lastNameResult && prevNameResult && dobResult && occupationResult && unitResult && streetResult && suburbResult
    // && stateResult && postcodeResult && emailResult && phoneResult){
    //     //if pass verify,return true
    //     $("#page1").removeClass('show')
    //     $("#page2").addClass('show')
    //     window.scrollTo(0, 0);
    //     return true
    // }
    // else {
    //     //if not pass,return false and scroll to top
    //     document.getElementById('page1').scrollIntoView(true)
    //     return false
    // }


    $("#page1").removeClass('show')
    $("#page2").addClass('show')
    window.scrollTo(0, 0);


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
    }else if(this.name=="is_office_holder"){
        targetLi=$("#documentsToBring>li:nth-child(8)")
    }else if(this.name=="is_beneficiary"){
        targetLi=$("#documentsToBring>li:nth-child(9)")
    }else if(this.name=="in_partnership"){
        targetLi=$("#documentsToBring>li:nth-child(10)")
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
let addDeleteAssetRow=(e,outerDivId)=>{
    e.stopPropagation()
    if($(e.target).parent().hasClass('add')){
        $(`#${outerDivId} .delete`).parent().addClass('show')
        let $oneRow=$(`#${outerDivId}>.inputsRow:first`).clone()
        $oneRow.find(":input").val("")
        $(`#${outerDivId}`).append($oneRow)
    }else if($(e.target).parent().hasClass('delete')){
        let $targetRow=$(e.target).parent().parent().parent().parent().parent().parent()
        $targetRow.remove()
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

//--------------------------------Children--------------------------------------------------------
let childContainer = $('#children-container')
let grandChildContainer=$('#grandChildren-container')
let childrenTemplate = _.template($('#children-template').remove().text());
let grandchildrenTemplate = _.template($('#grandchildren-template').remove().text());
let childNumbersRows = childContainer.find('.inputsRow').length;
let grandChildNumbersRows = grandChildContainer.find('.inputsRow').length;


// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_child_current]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#hasChildren").addClass('show')
        $(childrenTemplate({child_key: childNumbersRows++})).hide().appendTo(childContainer).fadeIn()
        $(grandchildrenTemplate({grandchild_key: grandChildNumbersRows++})).hide().appendTo(grandChildContainer).fadeIn()
        $(".error-message").text('')
    }
    else if($(":radio[name=has_child_prev]:checked").val()!=1){
        $("#hasChildren").removeClass('show')
        $("#hasChildren").find('.inputsRow').remove()
    }
})
$(":radio[name=has_child_prev]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#hasChildren").addClass('show')
        $(childrenTemplate({child_key: childNumbersRows++})).hide().appendTo(childContainer).fadeIn()
        $(grandchildrenTemplate({grandchild_key: grandChildNumbersRows++})).hide().appendTo(grandChildContainer).fadeIn()
        $(".error-message").text('')
    }
    else if($(":radio[name=has_child_current]:checked").val()!=1){
        $("#hasChildren").removeClass('show')
        $("#hasChildren").find('.inputsRow').remove()
    }
})


//dynamic listen to new element
childContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(childrenTemplate({child_key: childNumbersRows++})).hide().appendTo(childContainer).fadeIn('fast')
    $(".error-message").text('')
})
childContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})
grandChildContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(grandchildrenTemplate({grandchild_key: grandChildNumbersRows++})).hide().appendTo(grandChildContainer).fadeIn('fast')
    $(".error-message").text('')
})
grandChildContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})



//-----------------------------------------householder member--------------------------------------------
let hhContainer = $('#householder-container')
let hhTemplate = _.template($('#householder-template').remove().text());
let hhNumbersRows = hhContainer.find('.inputsRow').length;
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_household_member]").change(function(e){
    //radioShowDisappearInputs(this,'yourHouseMembers')
    e.preventDefault();
    if($(this).val()==1){
        $("#yourHouseMembers").addClass('show')
        $(hhTemplate({householder_key: hhNumbersRows++})).hide().appendTo(hhContainer).fadeIn('fast')
        $(".error-message").text('')

    } else{
        $("#yourHouseMembers").removeClass('show')
        hhContainer.children('.inputsRow').remove()
    }
})

//dynamic listen to new element
hhContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(hhTemplate({householder_key: hhNumbersRows++})).hide().appendTo(hhContainer).fadeIn('fast')
    $(".error-message").text('')
})
hhContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})


// ----------------------------------Dependents----------------------------------------------------
let depdContainer = $('#dependent-container')
let depdTemplate = _.template($('#dependent-template').remove().text());
let depdNumbersRows = depdContainer.find('.inputsRow').length;
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_financial_dependent]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#yourOtherDep").addClass('show')
        $(depdTemplate({dependent_key: depdNumbersRows++})).hide().appendTo(depdContainer).fadeIn('fast')
        $(".error-message").text('')
    } else{
        $("#yourOtherDep").removeClass('show')
        depdContainer.children('.inputsRow').remove()
    }
})
//2.add a dependents
//dynamic listen to new element
depdContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(depdTemplate({dependent_key: depdNumbersRows++})).hide().appendTo(depdContainer).fadeIn('fast')
    $(".error-message").text('')
})
depdContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})

//page 2 previous+next button
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






//-----------------Page 3----------------------------------------------------------------------------------------
//Accountant/Adviser/referral
// 1.display when 'Yes',disappear when 'no',default is disappear
$(":radio[name=has_accountant]").change(function(){
    radioShowDisappearInputs(this,'yourAccountant')
})
$(":radio[name=has_adviser]").change(function(){
    radioShowDisappearInputs(this,'yourAdvisor')
})
$("#inputReferral").change(function(){
    if(this.value=="accountant" ||this.value=="financial adviser"  ){
        $(`#yourReferral`).slideDown();
    }else{
        $(`#yourReferral`).slideUp();
    }
})

//2. Assets & Liabilities
//-----------------------------------Real estate: add a real estate--------------------------------------
let estateContainer = $('#estate-container')
let estateTemplate = _.template($('#estate-template').remove().text());
let estateNumbersRows = estateContainer.find('.inputsRow').length;
$(":radio[name=has_estate]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#yourRealEstate").addClass('show')
        $(estateTemplate({estate_key: estateNumbersRows++})).hide().appendTo(estateContainer).fadeIn('fast')
    } else{
        $("#yourRealEstate").removeClass('show')
        estateContainer.find('.inputsRow').remove()
    }
})
estateContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(estateTemplate({estate_key: estateNumbersRows++})).hide().appendTo(estateContainer).fadeIn('fast')
})
estateContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})

//-----------------------------------Bank Accounts : add a bank account-----------------------------------
let bankContainer = $('#bank-container')
let bankTemplate = _.template($('#bank-template').remove().text());
let bankNumbersRows = bankContainer.find('.inputsRow').length;
$(":radio[name=has_bankaccount]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#yourBankAccount").addClass('show')
        $(bankTemplate({bank_key: bankNumbersRows++})).hide().appendTo(bankContainer).fadeIn('fast')
    } else{
        $("#yourBankAccount").removeClass('show')
        bankContainer.find('.inputsRow').remove()
    }
})
bankContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(bankTemplate({bank_key: bankNumbersRows++})).hide().appendTo(bankContainer).fadeIn('fast')
})
bankContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})
//-----------------------------------Vehicle----------------------------------------------------------------
let vehicleContainer = $('#vehicle-container')
let vehicleTemplate = _.template($('#vehicle-template').remove().text());
let vehicleNumbersRows = vehicleContainer.find('.inputsRow').length;
$(":radio[name=has_vehicle]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#yourVehicle").addClass('show')
        $(vehicleTemplate({vehicle_key: vehicleNumbersRows++})).hide().appendTo(vehicleContainer).fadeIn('fast')
    } else{
        $("#yourVehicle").removeClass('show')
        vehicleContainer.find('.inputsRow').remove()
    }
})
vehicleContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(vehicleTemplate({vehicle_key: vehicleNumbersRows++})).hide().appendTo(vehicleContainer).fadeIn('fast')
})
vehicleContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})
//-----------------------------------Investment----------------------------------------------------------------
let investmentContainer = $('#investment-container')
let investmentTemplate = _.template($('#investment-template').remove().text());
let investmentNumbersRows = investmentContainer.find('.inputsRow').length;
$(":radio[name=has_investment]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#yourInvestment").addClass('show')
        $(investmentTemplate({investment_key: investmentNumbersRows++})).hide().appendTo(investmentContainer).fadeIn('fast')
    } else{
        $("#yourInvestment").removeClass('show')
        investmentContainer.find('.inputsRow').remove()
    }
})
investmentContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(investmentTemplate({investment_key: investmentNumbersRows++})).hide().appendTo(investmentContainer).fadeIn('fast')
})
investmentContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})



//insurance
$(":radio[name=insure_house]").change(function(){
    radioShowDisappearInputs(this,'yourInsuranceHouse')
})
$(":radio[name=insure_vehicle]").change(function(){
    radioShowDisappearInputs(this,'yourInsuranceVehicle')
})
$(":radio[name=insure_health]").change(function(){
    radioShowDisappearInputs(this,'yourInsuranceHealth')
})
$(":radio[name=insure_life]").change(function(){
    radioShowDisappearInputs(this,'yourInsuranceLife')
})

//--------------------------------------------Superannuation--------------------------------------------------------
let superannuationContainer = $('#superannuation-container')
let superannuationTemplate = _.template($('#superannuation-template').remove().text());
let superannuationNumbersRows = superannuationContainer.find('.inputsRow').length;
$(":radio[name=has_superannuation]").change(function(e){
    e.preventDefault();
    if($(this).val()==1){
        $("#yourSuperannuation").addClass('show')
        $(superannuationTemplate({superannuation_key: superannuationNumbersRows++})).hide().appendTo(superannuationContainer).fadeIn('fast')
    } else{
        $("#yourSuperannuation").removeClass('show')
        superannuationContainer.find('.inputsRow').remove()
    }
})
superannuationContainer.on('click','a.add',function (e){
    e.preventDefault();
    $(superannuationTemplate({superannuation_key: superannuationNumbersRows++})).hide().appendTo(superannuationContainer).fadeIn('fast')
})
superannuationContainer.on('click','a.delete',function (e){
    e.preventDefault();
    $(this).closest('.inputsRow').fadeOut();
})


//page 3: Previous+Next button
$("#page3Prev").click(function(){
    $("#page3").removeClass('show')
    $("#page2").addClass('show')
    window.scrollTo(0, 0);
})

let page3ShowError=function(id){
    $(`#${id}`).addClass('show')
    document.getElementById('inputReferral').scrollIntoView(true)
}
$("#page3Next").click(function(){
    //Estates
    if( $("#yourRealEstate").hasClass('show') && !$("#estates-estate-key-address").val()){
        page3ShowError('estateError')
        return false
    }
    //Bank
    if($("#yourBankAccount").hasClass('show') && !$("#bankaccounts-bank-key-bank").val()){
        page3ShowError('bankError')
        return false
    }
    //Vehicles
    if($("#yourVehicle").hasClass('show') && !$("#vehicles-vehicle-key-make").val()){
        page3ShowError('vehicleError')
        return false
    }
    //Investments
    if($("#yourInvestment").hasClass('show') && !$("#investments-investment-key-type").val()){
        page3ShowError('investError')
        return false
    }
    //Superannuations
    if($("#yourSuperannuation").hasClass('show') && !$("#superannuations-superannuation-key-fund").val()){
        page3ShowError('superannuationError')
        return false
    }


    $("#page3").removeClass('show')
    $("#page4").addClass('show')
    window.scrollTo(0, 0);
})




//-----------------Page 4-------------------------------
//Executor
$("#yourExecutors").click(function(e){
    addDeleteAssetRow(e,"yourExecutors")
})
$("#yourAltExecutors").click(function(e){
    addDeleteAssetRow(e,"yourAltExecutors")
})

// 4.Guardian
$(":radio[name=wish_appoint_child]").change(function(){
    radioShowDisappearInputs(this,'yourGuardian')
})
// 5. Specific Bequests
$(":radio[name=wish_property_special]").change(function(){
    radioShowDisappearInputs(this,'yourSpecial')
})
$("#yourSpecial").click(function(e){
    addDeleteAssetRow(e,"yourSpecial")
})

//6. Beneficiaries of the Residue
$("#yourLeaveEstate").click(function(e){
    addDeleteAssetRow(e,"yourLeaveEstate")
})
$("#yourLeaveEstateSecond").click(function(e){
    addDeleteAssetRow(e,"yourLeaveEstateSecond")
})
$("#yourFeelResp").click(function(e){
    addDeleteAssetRow(e,"yourFeelResp")
})
$("#yourProvision").click(function(e){
    addDeleteAssetRow(e,"yourProvision")
})

//7. Enduring Powers of Attorney and Medical Decision Makers
$("#yourAttorney").click(function(e){
    addDeleteAssetRow(e,"yourAttorney")
})
$("#yourAltAttorney").click(function(e){
    addDeleteAssetRow(e,"yourAltAttorney")
})



//Page 4: Previous + Submit button
$("#page4Prev").click(function(){
    $("#page4").removeClass('show')
    $("#page3").addClass('show')
    window.scrollTo(0, 0);
})

$("#submitIntakeform").click(function () {
    return true

})
