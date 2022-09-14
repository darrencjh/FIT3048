<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $bookings
 */

echo $this->Html->css('//cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css',['block'=>true]);
echo $this->Html->css('adminCalendar',['block'=>true]);
echo $this->Html->script('//cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js',['block'=>true]);

?>


<h3><?= __('Calendar Bookings') ?></h3>
<div id="calendar"></div>

<script>
    //Full calendar to display
    $(()=>{
        var calendarEl=document.getElementById('calendar');
        var calendar=new FullCalendar.Calendar(calendarEl,{
            height:"100vh",
            initialView:'dayGridMonth',
            events:'<?= $this->Url->build(['controller'=>'Bookings','action'=>'calendar','_ext'=>'json']) ?>',
            eventClick: function(info) {
                // alert('id: ' + info.event.id);
                // alert('Event: ' + info.event.title);
                // alert('View: ' + info.view.type);
                //info.el.style.borderColor = 'red';
                window.location.href = "<?= $this->Url->build(['controller'=>'bookings','action'=>'view']) ?>"+"/"+info.event.id;
            }

        });
        calendar.render();


    } );
</script>

