let verifyBookingName=(bookingName)=>{
    if(bookingName==""){
        $("#nameError").text("Please enter your name")
        $("#bookingName").addClass("is-invalid")
        return false
    }else if(!/^[A-Za-z ,.'-]{2,}$/.test(bookingName)){
        $("#nameError").text("Name can only contain letters")
        $("#bookingName").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingEmail=(bookingEmail)=>{
    if(bookingEmail==""){
        $("#emailError").text("Please enter your email")
        $("#bookingEmail").addClass("is-invalid")
        return false
    }else if(!/^[0-9A-Za-z.!#$%&’*+/=?^_`{|}~-]+@[0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*$/.test(bookingEmail)){
        $("#emailError").text("Please follow the email format eg.example@email.com")
        $("#bookingEmail").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingPhone=(bookingPhone)=>{
    if(bookingPhone==""){
        $("#phoneError").text("Please enter your phone number")
        $("#bookingPhone").addClass("is-invalid")
        return false
    }else if(!/04[0-9]{8}/.test(bookingPhone)){
        $("#phoneError").text("Phone number can only contain numbers eg. 0412345678")
        $("#bookingPhone").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingReferrer=(bookingReferredBy)=>{
    if(bookingReferredBy!="" && !/^[A-Za-z ,.'-]{2,}$/.test(bookingReferredBy)){
        $("#referralNameError").text("Please check your referrer name")
        $("#bookingReferredBy").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingDate=(bookingDate)=>{
    var date = new Date()
    today = new Date(date)
    bookingDate = new Date(bookingDate)
    if(bookingDate=="" || (bookingDate < today)){
        $("#dateError").text("Please check your booking date")
        $("#bookingDate").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingTime=(bookingTime)=>{
    if(bookingTime==0){
        $("#timeError").text("Please choose a booking time")
        $("#bookingTime").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingService=(bookingService)=>{
    if(bookingService==0){
        $("#serviceError").text("Please choose a service")
        $("#bookingService").addClass("is-invalid")
        return false
    }
    return true
}

let verifyBookingLocation=(bookingLocation)=>{
    if(bookingLocation==0){
        $("#locationError").text("Please choose a location")
        $("#bookingLocation").addClass("is-invalid")
        return false
    }
    return true
}

$("#bookingName").blur(function () {
    verifyBookingName(this.value)
})
$("#bookingEmail").blur(function () {
    verifyBookingEmail(this.value)
})
$("#bookingPhone").blur(function () {
    verifyBookingPhone(this.value)
})
$("#bookingReferredBy").blur(function () {
    verifyBookingReferrer(this.value)
})
$("#bookingDate").blur(function () {
    verifyBookingDate(this.value)
})
$("#bookingTime").blur(function () {
    verifyBookingTime(this.value)
})
$("#bookingService").blur(function () {
    verifyBookingService(this.value)
})
$("#bookingLocation").blur(function () {
    verifyBookingLocation(this.value)
})

$("#bookingName").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingEmail").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingPhone").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingReferredBy").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingDate").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingTime").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingService").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
$("#bookingLocation").change(function () {
    if ($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
})
