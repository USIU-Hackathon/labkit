/**
 * Created by ammly on 01/08/15.
 */
window.onload = function () {
    var chart = new CanvasJS.Chart("myChart", {

        title:{
            text: "Voltage by Current"
        },
        data: [//array of dataSeries
            { //dataSeries object

                /*** Change type "column" to "bar", "area", "line" or "pie"***/
                type: "line",
                dataPoints: [
                    { label: "Current", y: 18 },
                    { label: "Coltage", y: 29 },
                    { label: "Distance", y: 40 },
                    { label: "Current", y: 34 },
                    { label: "Time", y: 24 }
                ]
            }
        ]
    });

    chart.render();
}