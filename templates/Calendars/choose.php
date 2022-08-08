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
    <?= $this->Html->css(['normalize.min', 'evo-calendar', 'bootstrap']) ?>

    <style>

        .bookingForm{
            height: 1000px;
        }
    </style>
</head>
<body>


<div class="container">
    <div id="calendar"></div>

    <div class="bookingForm mt-5">
        <h1 class="text-center">This is form section</h1>
    </div>
</div>





<?= $this->Html->script('jquery-3.6.0.min') ?>
<?= $this->Html->script('evo-calendar.min') ?>
<script>
    $("#calendar").evoCalendar({
        'todayHighlight':true,
        'sidebarToggler':false,
        'firstDayOfWeek':1,
        'eventListToggler':false,
        calendarEvents: [
            {
                id: 'bHay68s', // Event's ID (required)
                name: "3:00 pm", // Event name (required)
                badge: "1 hour",
                date: "August/08/2022", // Event date (required)
                type: "event", // Event type (required)
                //everyYear: true // Same event every year (optional)
                color: "#63d867" // Event custom color (optional)

            },
            {
                id: 'bHay69s', // Event's ID (required)
                name: "Vacation Leave",
                badge: "08/15 - 08/17", // Event badge (optional)
                date: ["August/16/2022","August/18/2022"], // Date range
                description: "Vacation leave for 3 days.", // Event description (optional)
                type: "event",
                color: "#63d867" // Event custom color (optional)
            }
        ]

    });




</script>
<script>

    //Weekend is unavailable
    $('.--weekend').css('pointer-events','none')
    $('.--weekend .day').css('color','#ccc')


    //previous months are unavailable
    let date=new Date()
    let currentMonthValue=date.getMonth()
    let currentYear=date.getFullYear()

    let displayedYear=$('.calendar-year p').text()
    if(displayedYear==currentYear){
        $('.calendar-year button').remove()
        $(`.calendar-months>li:lt(${currentMonthValue})`)
            .css('pointer-events','none')
            .css('color','#ccc');
    }

    //the day before tomorrow is unavailable
    let todayDate=$('.calendar-today').text()
    $(`.calendar-day .day:lt(${todayDate})`)
        .css('pointer-events','none')
        .css('color','#ccc');



    //test dynamiclly add events into calendar
    $('#test').click(function(){
        //get the selected date
        console.log($('#calendar').evoCalendar('getActiveDate'))
        //add calendar event(time)
        // add multiple events
        $('#calendar').evoCalendar('addCalendarEvent', [
            {
                id: 'kNybja6',
                name: '1:00pm',
                date: 'August/08/2022',
                type: 'event',
                color: "#63d867"

            },
            {
                id: 'asDf87L',
                name: '2:00pm',
                date: 'August/08/2022',
                type: 'event',
                color: "#63d867"

            }
        ]);
    })

    // selectEvent
    $('#calendar').on('selectEvent', function(event, activeEvent) {
        alert("click time,navigate to other page")

    });
    // selectMonth
    $('#calendar').on('selectMonth', function(event, activeMonth, monthIndex) {
        //Weekend is unavailable
        $('.--weekend').css('pointer-events','none')
        $('.--weekend .day').css('color','#ccc')
    });


</script>
</body>
</html>
