<?php
$this->disableAutoLayout();
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking with us - Shelbourne legal</title>
    <?= $this->Html->meta('icon', $this->Url->build('/logo.png',['fullBase'=>true]));?>
    <?= $this->Html->meta('csrfToken',$this->request->getAttribute('csrfToken')); ?>

    <?= $this->Html->css(['normalize.min', 'evo-calendar', 'bootstrap','fontawesome-free/css/all.min']) ?>

<!--#01ab9d-->

</head>
<body>


<div class="container">
    <div id="calendar"></div>



    <!-- Company info and booking time   -->
    <div class="row no-gutters mb-5">
        <div class="col-4">
            <div class="mt-5 pt-3">
                <div class="text-center">
                    <?= $this->Html->image('legal_logo.jpg', ['alt' => 'Shelbourne legal','class' => '']); ?>
                </div>
                <div class="text-center mt-3 h3 fw-bold">Leonie Dubbelman</div>
                <div class="text-muted">
                    <div class="mt-4">
                        <i class="fas fa-clock"></i>
                        <span>&nbsp; 1 hr</span>
                    </div>
                    <div class="mt-4">
                        <i class="fas fa-calendar"></i>
                        <span>&nbsp; <span class="selectedTime"></span></span>
                    </div>
                    <div class="mt-4">
                        <i class="fas fa-location-arrow"></i>
                        <span>&nbsp; Sydney, Melbourne Time</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="bookingForm mt-5">
                <h1 class="text-center" id="details">Enter Details</h1>
            </div>


            <?= $this->Form->create($booking) ?>
            <?php
            echo $this->Form->control('date',['label' => false,'class'=>'d-none']);
            echo $this->Form->control('booked_time',['label' => false,'class'=>'d-none']);

            ?>



            <!--    Service-->
            <div class="mb-4">
                <label for="InputService" class="form-label fw-bold">Service *</label>
                <select class="form-select" aria-label="select a service" id="InputService" name="service" required>
                    <option selected class="text-muted" value="0">Selected a service you want to book</option>
                    <option value="Wills & Estate Planning Appointment">1-Wills & Estate Planning Appointment</option>
                    <option value="Probate and Estate Administration Appointment">2-Probate and Estate Administration Appointment</option>
                    <option value="Signing Appointment">3-Signing Appointment</option>
                    <option value="Call back only">4-Call back only</option>
                </select>
                <div class="invalid-feedback">Please select a service</div>
            </div>

            <!--    Name-->
            <div class="mb-4">
                <label for="InputName" class="form-label fw-bold">Name *</label>
                <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" name="name" required>
                <div class="invalid-feedback">Please give your name</div>
            </div>

            <!--    email-->
            <div class="mb-4">
                <label for="InputEmail1" class="form-labe fw-bold">Email *</label>
                <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder = 'eg. example@email.com' required pattern='^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$'>
                <div id="emptyEmailMsg" class="invalid-feedback">
                    Please provide an email.
                </div>
                <div id="validEmailMsg" class="d-none">
                    Please provide a valid email.
                </div>
            </div>

            <!--    location-->
            <div class="mb-4" id="allLocations">
                <label for="InputLocation" class="form-label fw-bold">Location *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" id="MSTeams" value="Microsoft Teams">
                    <label class="form-check-label" for="MSTeams">
                        <img src="//assets.calendly.com/packs/booking/media/ms-teams-e0858e32c5245a478456.svg" alt="" width="24px" height="24px">
                        <span>Microsoft Teams</span>
<!--                        <div id="emailHelp" class="form-text">Web conferencing details provided upon confirmation</div>-->
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" id="Branch1" value="Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192">
                    <label class="form-check-label" for="Branch1">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" color="#e55cff" width="24px" height="24px" data-testid="physical"><title>Physical location</title><path d="M12 0C7.453 0 3.623 3.853 3.623 8.429c0 6.502 7.18 14.931 7.42 15.172.479.482 1.197.482 1.675.24l.24-.24c.239-.24 7.419-8.67 7.419-15.172C20.377 3.853 16.547 0 12 0zm0 11.56c-1.675 0-2.872-1.445-2.872-2.89S10.566 5.78 12 5.78c1.436 0 2.872 1.445 2.872 2.89S13.675 11.56 12 11.56z" fill="currentColor"></path></svg>
                        <span>Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" id="Branch2" value="Suite 2, 681 Burke Road, Camberwell VIC 3124">
                    <label class="form-check-label" for="Branch2">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" color="#e55cff"  width="24px" height="24px" data-testid="physical"><title>Physical location</title><path d="M12 0C7.453 0 3.623 3.853 3.623 8.429c0 6.502 7.18 14.931 7.42 15.172.479.482 1.197.482 1.675.24l.24-.24c.239-.24 7.419-8.67 7.419-15.172C20.377 3.853 16.547 0 12 0zm0 11.56c-1.675 0-2.872-1.445-2.872-2.89S10.566 5.78 12 5.78c1.436 0 2.872 1.445 2.872 2.89S13.675 11.56 12 11.56z" fill="currentColor"></path></svg>
                        <span>Suite 2, 681 Burke Road, Camberwell VIC 3124</span>
                    </label>
                    <div class="invalid-feedback">Please select a place you want to meet</div>

                </div>
            </div>


            <!--    phone number-->
            <div class="mb-4">
                <label for="validationTooltip05" class="fw-bold">Phone Number *</label>
                <input type="phone" class="form-control" id="InputPhone" name="phone" placeholder="eg. 04xxxxxxxx" maxlength="10" pattern='04[0-9]{8}' required>
                <div id="emptyPhoneMsg" class="invalid-feedback">
                    Please provide your phone number.
                </div>
                <div id="validPhoneMsg" class="d-none">
                    Please provide a valid phone number.
                </div>
            </div>

            <!--    Referral-->
            <div class="mb-4">
                <label for="referralName" class="form-label fw-bold">Referred by</label>
                <input type="text" class="form-control" id="referralName" aria-describedby="referralHelp" name="referred_by">
            </div>

            <!--    button to submit-->
            <?= $this->Form->button(__('Schedule Event'),['class'=>'btn btn-primary rounded-pill fw-bold py-3 mt-4','id'=>'scheduleEvent']) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>



</div>


<?= $this->Html->script('jquery-3.6.0.min') ?>
<?= $this->Html->script('evo-calendar.min') ?>

<script>
    $(function () {
        $("#calendar").evoCalendar({
            'sidebarToggler': false,
            'firstDayOfWeek': 1,
            'eventListToggler': false,
            calendarEvents: []

        });

        //Weekend is unavailable
        $('.--weekend').css('pointer-events', 'none')
        $('.--weekend .day').css('color', '#ccc')


        //previous months are unavailable
        let date = new Date()
        console.log()
        let currentMonthValue = date.getMonth()
        let currentYear = date.getFullYear()

        let displayedYear = $('.calendar-year p').text()
        if (displayedYear == currentYear) {
            $('.calendar-year button').remove()
            $(`.calendar-months>li:lt(${currentMonthValue})`)
                .css('pointer-events', 'none')
                .css('color', '#ccc');
        }

        //the day before tomorrow is unavailable
        let todayDate = date.getDate()
        $(`.calendar-day .day:lt(${todayDate})`)
            .css('pointer-events', 'none')
            .css('color', '#ccc');


        //add green indicators for week days
        $(`.calendar-day:gt(${todayDate - 1}) .day`).append($('<span class="event-indicator"><div class="type-bullet"><div class="type-event" style="background-color:#63d867"></div></div></span>'))
        $(`.--weekend .day .event-indicator`).remove()


        const allMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        const allWeekdays=['Monday','Tuesday','Wednesday','Thursday','Friday']
        //console.log($('.calendar-day').length)//31
        //visitor click a date to see which time is available
        $('#calendar').on('selectDate', function (event, newDate, oldDate) {
            //get current events for this date
            let active_events = $('#calendar').evoCalendar('getActiveEvents');
            if (active_events.length == 0) {
                let newDateArray = newDate.split('/')//08/10/2022
                let selectedDate = new Date(newDateArray[2], newDateArray[0] - 1, newDateArray[1])
                console.log(selectedDate)
                let selectedDateWithFormat = allMonths[selectedDate.getMonth()] + '/' + selectedDate.getDate() + '/' + selectedDate.getFullYear()

                let selectedDateWithDbFormat=selectedDate.getFullYear()+'-'+newDateArray[0]+'-'+selectedDate.getDate()//2022-08-15
                let weekday = selectedDate.getDay()
                let eventsList = []
                if (weekday == 1 || weekday == 3) {
                    eventsList = [
                        {
                            id: Math.random(),
                            name: '9:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '10:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '11:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '8:00pm',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        }
                    ]
                } else if (weekday == 5) {
                    eventsList = [
                        {
                            id: Math.random(),
                            name: '9:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '10:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"
                        },
                        {
                            id: Math.random(),
                            name: '11:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        }
                    ]

                } else if (weekday == 2 || weekday == 4) {
                    eventsList = [
                        {
                            id: Math.random(),
                            name: '9:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '10:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '11:00am',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '12:00pm',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '1:00pm',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '2:00pm',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        },
                        {
                            id: Math.random(),
                            name: '3:00pm',
                            date: selectedDateWithFormat,
                            type: 'event',
                            color: "#63d867"

                        }
                    ]
                }

                if (weekday == 4) {
                    eventsList.push({
                        id: Math.random(),
                        name: '4:00pm',
                        date: selectedDateWithFormat,
                        type: 'event',
                        color: "#63d867"
                    })
                }

                //delete the time already booked
                //access the database
                $.ajax({
                    url: "<?= $this->Url->build(['controller' => 'Bookings', 'action' => 'getBookedTime']) ?>",
                    type: "get",
                    data: {'selectedDate': selectedDateWithDbFormat},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                    },
                    dataType: "json",
                    success: function (result) {
                        //console.log(result);

                        let finalEventsList=[]
                        for(var i=0;i<eventsList.length;i++){
                            let findBooked=false
                            for(let j=0;j<result.length;j++){
                                if(eventsList[i].name==result[j]){
                                    findBooked=true
                                    break
                                    //eventsList.splice(eventsList.indexOf(eventsList[i]),1)
                                }

                            }
                            if(!findBooked){
                                finalEventsList.push(eventsList[i])
                            }

                        }


                        $('#calendar').evoCalendar('addCalendarEvent', finalEventsList);

                    }
                })


            }


        });

        // select a Month
        $('#calendar').on('selectMonth', function (event, activeMonth, monthIndex) {
            if (monthIndex == date.getMonth()) {
                //the day before tomorrow is unavailable
                let todayDate = date.getDate()
                $(`.calendar-day .day:lt(${todayDate})`)
                    .css('pointer-events', 'none')
                    .css('color', '#ccc');
                //add green indicators
                $(`.calendar-day:gt(${todayDate - 1}) .day`).append($('<span class="event-indicator"><div class="type-bullet"><div class="type-event" style="background-color:#63d867"></div></div></span>'))
                $(`.--weekend .day .event-indicator`).remove()
            } else {
                //add green indicator
                $(`.calendar-day .day`).append($('<span class="event-indicator"><div class="type-bullet"><div class="type-event" style="background-color:#63d867"></div></div></span>'))
                $(`.--weekend .day .event-indicator`).remove()
            }
            //Weekend is unavailable
            $('.--weekend').css('pointer-events', 'none')
            $('.--weekend .day').css('color', '#ccc')

        });




        // select an Event
        //It will navigate to Enter Details. Meanwhile,display the selected date time,1 hour here
        $('#calendar').on('selectEvent', function (event, activeEvent) {
            // navigate to form section
            document.getElementById('details').scrollIntoView(true)
            console.log($('#calendar').evoCalendar('getActiveDate')) // get the selected date:08/08/2022
            console.log(activeEvent)//{id: 0.6927114948990831, name: '1:00pm', date: '08/11/2022', type: 'event', color: '#63d867'}

            let startTime=parseInt(activeEvent.name.split(':')[0])
            let endTime=startTime>=11 ? startTime+1+":00pm" : startTime+1+":00am"
            let newDateArray = activeEvent.date.split('/')//08/10/2022
            let selectedDate = new Date(newDateArray[2], newDateArray[0] - 1, newDateArray[1])

            let selectedTime= activeEvent.name+' - '+endTime+', '+allMonths[selectedDate.getMonth()]+', '+allWeekdays[selectedDate.getDay()-1]+ ' '+selectedDate.getDate()+', '+selectedDate.getFullYear()

            $('.selectedTime').text(selectedTime)

            let selectedDateWithDbFormat=selectedDate.getFullYear()+'-'+newDateArray[0]+'-'+selectedDate.getDate()//2022-08-15
            $('[name="date"]').val(selectedDateWithDbFormat)
            $('[name="booked_time"]').val(activeEvent.name)
        });

        //when user click,remove error message
        $("#InputService").change(function(){
            if($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
        })
        $("#InputName").mousedown(function(){
            if($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
        })
        $("#InputEmail").mousedown(function(){
            if($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
        })
        //drop down
        $('[name="location"]').click(function(){
            if($(this).hasClass('is-invalid')){
                $("#MSTeams").removeClass("is-invalid")
                $("#Branch1").removeClass("is-invalid")
                $("#Branch2").removeClass("is-invalid")
            }
        })
        $("#InputPhone").mousedown(function(){
            if($(this).hasClass('is-invalid')) $(this).removeClass('is-invalid')
        })


        //form validations
        $("#scheduleEvent").click(function(){
            let service=InputService.value
            let name=InputName.value
            let email=InputEmail.value
            let selectedlocation=""
            $('[name="location"]').each(function(index,domEle){
                if(domEle.checked){
                    selectedlocation=domEle.value
                }
            })
            let phone=InputPhone.value
            if(service==0) $("#InputService").addClass("is-invalid")
            if(name=="") $("#InputName").addClass("is-invalid")
            //validate email
            if(email==""){
                $("#InputEmail").addClass("is-invalid")
            }else if(email.indexOf('@')==-1){
                $("#InputEmail").addClass("is-invalid")
                $("#emptyEmailMsg").addClass("d-none")
                $("#validEmailMsg").removeClass("d-none").addClass("invalid-feedback")
            }
            if(selectedlocation==""){
                $("#MSTeams").addClass("is-invalid")
                $("#Branch1").addClass("is-invalid")
                $("#Branch2").addClass("is-invalid")
            }
            //validate phone number
            if(phone==""){
                $("#InputPhone").addClass("is-invalid")
            }else if(phone.length!=10){
                $("#InputPhone").addClass("is-invalid")
                $("#emptyPhoneMsg").addClass("d-none")
                $("#validPhoneMsg").removeClass("d-none").addClass("invalid-feedback")
            }

            if(service && name && email && email.indexOf('@')!=-1 && selectedlocation && phone && phone.length==10){
                return true
            }else{
                return false
            }



        })



    });


</script>
</body>
</html>
