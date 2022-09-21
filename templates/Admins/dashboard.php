<?php
$this->assign('title', $pageTitle);

$this->Html->script('echarts.min', ['block' => true]);

?>
<h1><?= $pageTitle; ?></h1>

<div class="row g-0 my-4">
    <div class="col-12 col-lg-8">
        <!--        Bookings chart-->
        <div class="bg-white p-3">
            <div id="monthlyBookings" style="width: 100%;height:790px;"></div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="row g-0">
            <div class="col-12 mt-3 mt-lg-0">
                <!--                Pie chart-->
                <div class="bg-white p-3">
                    <div id="referrerSource" style="width: 100%;height:500px;"></div>
                </div>
            </div>
            <div class="col-12 my-4">
                <div class="bg-white p-3">
                    <h5 class="text-dark font-weight-bold">Total Client number</h5>
                    <h1 class="text-shelbourne"><?= $client_counts ?></h1>
                </div>
            </div>

            <div class="col-12 mt-1">
                <div class="bg-white p-3">
                    <h5 class="text-dark font-weight-bold">Today's bookings</h5>
                    <h1 class="text-shelbourne"><?= $toadyBooking_counts ?></h1>
                </div>
            </div>


        </div>

    </div>

</div>


<script>
    $(() => {
        //1.bar chart
        // Initialize the echarts instance based on the prepared dom
        var bookingsChart = echarts.init(document.getElementById('monthlyBookings'));

        // Specify the configuration items and data for the chart
        var bookingsOption = {
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
                {
                    name: 'Direct',
                    type: 'bar',
                    barWidth: '60%',
                    data: [10, 52, 70, 80, 66, 33, 21, 67, 77, 89, 53, 59, 99] //fetch data from controller
                }
            ],
            color: [
                '#17BCB9'
            ],
            title: {
                text: "Monthly Bookings",
                left: 10
            },
        };
        // Display the chart using the configuration items and data just specified.
        bookingsChart.setOption(bookingsOption);




        //2.Pie chart
        let refererData=[]
        <?php
        foreach ($referer_source as $oneResult):
        ?>
        refererData.push({
            value:"<?= $oneResult['value']  ?>",
            name:"<?= $oneResult['name']  ?>",
        })
        <?php endforeach; ?>

        var referrerChart = echarts.init(document.getElementById('referrerSource'));
        var referrerOption = {
            title: {
                text: 'Referer of Clients',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left'
            },
            series: [
                {
                    name: 'Access From',
                    type: 'pie',
                    radius: '50%',

                    data: refererData,
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]

        };
        referrerChart.setOption(referrerOption);


        window.onresize = function () {
            bookingsChart.resize();
            referrerChart.resize();
        };
    })

</script>
