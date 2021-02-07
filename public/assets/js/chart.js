FusionCharts.ready(function() {
   new FusionCharts({
      type: "realtimelinedy",
      renderAt: "chart-container",
      width: "100%",
      dataFormat: "json",
      dataSource: {
         chart: {
            // caption: "Average Electricity Consumption Reading",
            // subCaption:
            //    "Hillside Village Aparments{br}Rate per unit vs Units Consumed",
            showRealTimeValue: "0",
            numberprefix: "$",
            setadaptiveymin: "1",
            setadaptivesymin: "1",
            yAxisName: "Rate (cents/kilowatt-hour)",
            sYAxisName: "Units",
            labeldisplay: "Rotate",
            numDisplaySets: "10",
            theme: "fusion"
         },
         categories: [
            {
               category: [
                  {
                     label: "Start"
                  }
               ]
            }
         ],
         dataset: [
            {
               seriesname: "Rate/unit",
               plotToolText: "<b>$label</b><br>$seriesName: <b>$dataValue</b>",
               data: [
                  {
                     value: "2.3"
                  }
               ]
            },
            {
               seriesname: "Units Consumed",
               parentyaxis: "S",
               plotToolText:
                  "<b>$label</b><br>$seriesName # <b>$dataValue Units</b>",
               data: [
                  {
                     value: "23"
                  }
               ]
            }
         ]
      },
      events: {
         initialized: function(evt, arg) {
            // Get reference to the chart
            var chartRef = evt.sender;
            function formatTime(num) {
               return num <= 9 ? "0" + num : num;
            }

            function updateData() {
               var d = new Date(),
                  h = (d.getHours() < 10 ? "0" : "") + d.getHours(),
                  m = (d.getMinutes() < 10 ? "0" : "") + d.getMinutes(),
                  s = (d.getSeconds() < 10 ? "0" : "") + d.getSeconds(),
                  label = h + ":" + m + ":" + s,
                  //Get random number between provided range
                  ds1 = Math.floor(Math.random() * (12 - 2 + 1)) + 2,
                  //Get random number between provided range
                  ds2 = Math.floor(Math.random() * (60 - 10 + 1) + 10),
                  //Build Data String in format &label=...&value=...
                  strData = "&label=" + label + "&value=" + ds1 + "|" + ds2;
               //Feed it to chart.
               chartRef.feedData(strData);
            }
            chartRef.intervalUpdateId = setInterval(updateData, 5000);
         },

         disposed: function(evt, args) {
            clearInterval(evt.sender.intervalUpdateId);
         }
      }
   }).render();
});