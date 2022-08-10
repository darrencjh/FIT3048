<?php
$this->disableAutoLayout();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking with us - Shelbourne legal</title>
    <?= $this->Html->meta('csrfToken',$this->request->getAttribute('csrfToken')); ?>

    <?= $this->Html->css(['normalize.min', 'evo-calendar', 'bootstrap']) ?>

    <style>

        /*.bookingForm{*/
        /*    height: 1000px;*/
        /*}*/
    </style>
</head>
<body>


<div class="container">
    <div id="calendar"></div>

    <div class="bookingForm mt-5">
        <h1 class="text-center">This is form section</h1>
    </div>

    <!--    Name-->
    <div class="mb-3">
        <label for="InputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp">
    </div>

    <!--    email-->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <!--    location-->
    <label for="InputLocation" class="form-label">Location</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="MSTeams">
        <label class="form-check-label" for="MSTeams">
            Microsoft Teams
            <div id="emailHelp" class="form-text">Web conferencing details provided upon confirmation</div>
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Branch1">
        <label class="form-check-label" for="Branch1">
            Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Branch2">
        <label class="form-check-label" for="Branch2">
            Suite 2, 681 Burke Road, Camberwell VIC 3124
        </label>
    </div>

    <!--    phone number-->
    <div class="mb-3">
        <label for="validationTooltip05">Phone Number</label>
        <input type="text" class="form-control" id="validationTooltip05">
        <div class="invalid-tooltip">
            Please provide a valid zip.
        </div>
    </div>

    <!--    Referral-->
    <div class="mb-3">
        <label for="referralName" class="form-label">Referred by</label>
        <input type="text" class="form-control" id="referralName" aria-describedby="referralHelp">
    </div>

    <!--    button-->
    <button type="button" class="btn btn-primary"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        Schedule Event
    </button>

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


        //add time events into calendar
        console.log($('#calendar').evoCalendar('getActiveDate')) // get the selected date:08/08/2022

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


        //console.log($('.calendar-day').length)//31
        //visitor click a date to see which time is available
        $('#calendar').on('selectDate', function (event, newDate, oldDate) {
            //get current events for this date
            let active_events = $('#calendar').evoCalendar('getActiveEvents');
            if (active_events.length == 0) {
                let newDateArray = newDate.split('/')//08/10/2022
                let selectedDate = new Date(newDateArray[2], newDateArray[0] - 1, newDateArray[1])
                console.log(selectedDate)
                const allMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
                let selectedDateWithFormat = allMonths[selectedDate.getMonth()] + '/' + selectedDate.getDate() + '/' + selectedDate.getFullYear()

                let monthFormat=selectedDate.getMonth()+1
                if(monthFormat<10){
                    monthFormat="0"+monthFormat
                }
                let selectedDateWithDbFormat=selectedDate.getFullYear()+'-'+monthFormat+'-'+selectedDate.getDate()//2022-08-15
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
                        console.log(result);
                        eventsList.forEach(function(item){
                            result.forEach(function(bookedTime){
                                if(item.name==bookedTime){
                                    eventsList.splice(eventsList.indexOf(item),1)
                                }
                            })
                        })
                        $('#calendar').evoCalendar('addCalendarEvent', eventsList);

                    }
                })


            }


        });


        // select an Event
        $('#calendar').on('selectEvent', function (event, activeEvent) {
            alert("click time,navigate to other page")

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

    });


</script>
</body>
</html>
