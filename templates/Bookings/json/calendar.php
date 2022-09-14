<?php
$data=[];
foreach ($bookings as $booking){
    $item=[
        'title'=>$booking->booked_time . '|' .$booking->name . '|' . $booking->service . '|' . $booking->location,
        'start'=>$booking->date,
        'id'=>$booking->id,
    ];
    $data[]=$item;
}
echo json_encode($data);
