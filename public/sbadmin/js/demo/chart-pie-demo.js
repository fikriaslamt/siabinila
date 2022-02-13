// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var j_pria = document.getElementById("dom-pria").textContent;
var j_wanita = document.getElementById("dom-wanita").textContent;
var j_lain = document.getElementById("dom-lain").textContent;
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Perempuan","Laki-laki", "Lainnya"],
    datasets: [{
      data: [j_wanita, j_pria, j_lain],
      backgroundColor: ['#ff5d8f', '#4e73df', '#999'],
      hoverBackgroundColor: ['#ff5d58', '#4e73bf', '#777'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
