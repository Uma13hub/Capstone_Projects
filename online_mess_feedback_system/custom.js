
let items = []
const days = ["sunday","monday","tuesday","wednesday","thursday","friday","saturday"];


async function getArrays(){
  console.log(new Date().getDay());
  const currentDay = new Date().getDay() == 0 ? 6 : (new Date().getDay() - 1);
  console.log(`http://localhost/mess_feedback_project/timetable.php?day=${days[currentDay]}`);
  const res = await fetch(`http://localhost/mess_feedback_project/timetable.php?day=${days[currentDay]}`);
  let data = await res.json();
  data = data.filter(ele=>ele.length != 0);
  console.log(data);

  items = data;

  valueArr=[];
  vArr=[];

  var ajax = new XMLHttpRequest();
      ajax.open("GET", "data.php", true);
      ajax.send();
  
      ajax.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              var data = JSON.parse(this.responseText);
              console.log(data);
              console.log("-----------ksjadnqnal---------------")
              valueArr=Object.values(data[0]);
              for(var i =0; i<valueArr.length; i++){
                vArr.push(parseFloat(valueArr[i]));
              }
              console.log(vArr);





              var ctx = document.getElementById("myChart").getContext("2d");
  // Creating Chart Class Object
  var myChart = new Chart(ctx, {
    
    type: "bar",

    // The data for our dataset
    data: {
      // Data Labels
      labels: items,

      datasets: [
        // Data Set 1
        {
          //  Chart Label
          label: "Feedback Rating",

          // Actual Data
          data: vArr,

          // Background Color
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
          ],

          // Border Color
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
          ],

          // Border Width
          borderWidth: 1,
              },

            
            ],
          },

          // Configuration options go here
          options: {

            responsive: false,

            // Set Padding
            layout: {
              padding: {
                left: 10,
                right: 0,
                top: 0,
                bottom: 0,
              },
            },

            // Configure ToolTips
            tooltips: {
              enabled: true,
            },

            // Custom Chart Title
            title: {
              display: true,
              text: "Yesterday's Report",
              position: "bottom",
              fontSize: 25,
              fontFamily: "Arial",
              fontColor: "red",
              fontStyle: "bold",
              padding: 20,
              //lineHeight: 5,
            },

            animation: {
              duration: 5000,
              easing: "easeInOutBounce",
            },
          },
        });
          }
      };





  }

getArrays();


