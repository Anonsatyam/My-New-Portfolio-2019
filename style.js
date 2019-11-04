Chart.defaults.global.defaultFontFamily = "Heebo";

// Get Vertical bar chart canvas element
var bar_ctx_v = document.getElementById('vertical-chart-f').getContext('2d');

// Vertical grtadient one
var gradientColorV = bar_ctx_v.createLinearGradient(0, 0, 0, 700);
gradientColorV.addColorStop(0, '#e79aaf');
gradientColorV.addColorStop(1, '#e9198e');

// Vertical grtadient two
var gradientHoverV = bar_ctx_v.createLinearGradient(0, 0, 0, 700);
gradientHoverV.addColorStop(0, '#e9198e');
gradientHoverV.addColorStop(1, '#e79aaf');

// Vertical bar chart options
var bar_chart_v = new Chart(bar_ctx_v, {
    type: 'bar',
    data: {
        labels: ["H T M L 5", "C S S 3", "J A V A S C R I P T", "S A S S", "R E A C T  J S", "A N G U L A R  J S", "B O O T S T R A P"],
        datasets: [{
            label: "S K I L L  S C O R E",
            data: [99, 99, 80, 90, 80, 85, 85, 90],
            backgroundColor: gradientColorV,
            hoverBackgroundColor: gradientHoverV,
            hoverBorderWidth: 2,
            hoverBorderColor: '#ffffff'
        }]
    },
    options: {
        responsive: true,
	      maintainAspectRatio: true,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false
        },
        animation: {
            duration: 3000,
            easing: 'easeInBounce'
        },
        scales: {
            yAxes: [{
                gridLines: {
                    lineWidth: 3,
                    color: '#313154'
                },
                ticks: {
                    min: 25,
                    max: 100,
                    stepSize: 25,
                    fontSize: 13,
                    fontColor: "#FFFFFF"
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    fontSize: 13,
                    fontColor: "#FFFFFF",
                    padding: 10
                },
                barPercentage: 0.6
            }],
        },
      	tooltips: {
          backgroundColor: '#282843',
          titleFontFamily: 'Heebo',
          titleFontColor: '#e79aaf',
          titleFontSize: 13,
          titleMarginBottom: 8,
          bodyFontFamily: 'Heebo',
          bodyFontSize: 13,
          bodyFontColor: '#ffffff',
          multiKeyBackground: '#e9198e',
          borderColor: '#e9198e',
          borderWidth: 2,
          caretSize: 5,
          cornerRadius: 5,
          xPadding: 15,
          yPadding: 15
        }
    }
});

// Get Horizontal bar chart canvas element
var bar_ctx_h = document.getElementById('horizontal-chart-f').getContext('2d');

// Horizontal grtadient one
var gradientColorH = bar_ctx_h.createLinearGradient(300, 0, 0, 0);
gradientColorH.addColorStop(0, '#e79aaf');
gradientColorH.addColorStop(1, '#e9198e');

// Vertical grtadient two
var gradientHoverH = bar_ctx_h.createLinearGradient(300, 0, 0, 0);
gradientHoverH.addColorStop(0, '#e9198e');
gradientHoverH.addColorStop(1, '#e79aaf');

// Vertical bar chart options
var bar_chart_h = new Chart(bar_ctx_h, {
    type: 'horizontalBar',
    data: {
        labels: ["H T M L 5", "C S S 3", "J A V A S C R I P T", "S A S S", "R E A C T  J S", "A N G U L A R  J S", "B O O T S T R A P"],
        datasets: [{
            label: "S K I L L  S C O R E",
            data: [99, 99, 80, 90, 80, 85, 85, 90],
            backgroundColor: gradientColorH,
            hoverBackgroundColor: gradientHoverH,
            hoverBorderWidth: 1,
            hoverBorderColor: '#ffffff'
        }]
    },
    options: {
        responsive: true,
	      maintainAspectRatio: true,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false
        },
        animation: {
            duration: 3000,
            easing: 'easeInBounce'
        },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    fontSize: 13,
                    fontColor: "#FFFFFF"
                },
                barPercentage: 1
            }],
            xAxes: [{
                gridLines: {
                    lineWidth: 2,
                    color: '#313154'
                },
                ticks: {
                    min: 50,
                    max: 100,
                    stepSize: 25,
                    fontSize: 13,
                    fontColor: "#FFFFFF"
                }
            }],
        },
      	tooltips: {
          backgroundColor: '#282843',
          titleFontFamily: 'Heebo',
          titleFontColor: '#e79aaf',
          titleFontSize: 13,
          titleMarginBottom: 8,
          bodyFontFamily: 'Heebo',
          bodyFontSize: 13,
          bodyFontColor: '#ffffff',
          multiKeyBackground: '#e9198e',
          borderColor: '#e9198e',
          borderWidth: 2,
          caretSize: 5,
          cornerRadius: 5,
          xPadding: 15,
          yPadding: 15
        }
    }
});

//Backend Skills
// Get Vertical bar chart canvas element
var bar_ctx_v = document.getElementById('vertical-chart-b').getContext('2d');

// Vertical grtadient one
var gradientColorV = bar_ctx_v.createLinearGradient(0, 0, 0, 700);
gradientColorV.addColorStop(0, '#e79aaf');
gradientColorV.addColorStop(1, '#e9198e');

// Vertical grtadient two
var gradientHoverV = bar_ctx_v.createLinearGradient(0, 0, 0, 700);
gradientHoverV.addColorStop(0, '#e9198e');
gradientHoverV.addColorStop(1, '#e79aaf');

// Vertical bar chart options
var bar_chart_v = new Chart(bar_ctx_v, {
    type: 'bar',
    data: {
        labels: ["M Y S Q L", "M O N G O D B", "P H P", "J A V A S C R I P T", "P Y T H O N", "C++"],
        datasets: [{
            label: "S K I L L  S C O R E",
            data: [99, 99, 80, 90, 80, 85],
            backgroundColor: gradientColorV,
            hoverBackgroundColor: gradientHoverV,
            hoverBorderWidth: 2,
            hoverBorderColor: '#ffffff'
        }]
    },
    options: {
        responsive: true,
	      maintainAspectRatio: true,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false
        },
        animation: {
            duration: 3000,
            easing: 'easeInBounce'
        },
        scales: {
            yAxes: [{
                gridLines: {
                    lineWidth: 3,
                    color: '#313154'
                },
                ticks: {
                    min: 25,
                    max: 100,
                    stepSize: 25,
                    fontSize: 13,
                    fontColor: "#FFFFFF"
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    fontSize: 13,
                    fontColor: "#FFFFFF",
                    padding: 10
                },
                barPercentage: 0.6
            }],
        },
      	tooltips: {
          backgroundColor: '#282843',
          titleFontFamily: 'Heebo',
          titleFontColor: '#e79aaf',
          titleFontSize: 13,
          titleMarginBottom: 8,
          bodyFontFamily: 'Heebo',
          bodyFontSize: 13,
          bodyFontColor: '#ffffff',
          multiKeyBackground: '#e9198e',
          borderColor: '#e9198e',
          borderWidth: 2,
          caretSize: 5,
          cornerRadius: 5,
          xPadding: 15,
          yPadding: 15
        }
    }
});

// Get Horizontal bar chart canvas element
var bar_ctx_h = document.getElementById('horizontal-chart-b').getContext('2d');

// Horizontal grtadient one
var gradientColorH = bar_ctx_h.createLinearGradient(300, 0, 0, 0);
gradientColorH.addColorStop(0, '#e79aaf');
gradientColorH.addColorStop(1, '#e9198e');

// Vertical grtadient two
var gradientHoverH = bar_ctx_h.createLinearGradient(300, 0, 0, 0);
gradientHoverH.addColorStop(0, '#e9198e');
gradientHoverH.addColorStop(1, '#e79aaf');

// Vertical bar chart options
var bar_chart_h = new Chart(bar_ctx_h, {
    type: 'horizontalBar',
    data: {
        labels: ["M Y S Q L", "M O N G O D B", "P H P", "J A V A S C R I P T", "P Y T H O N", "C++"],
        datasets: [{
            label: "S K I L L  S C O R E",
            data: [99, 99, 80, 90, 80, 85],
            backgroundColor: gradientColorH,
            hoverBackgroundColor: gradientHoverH,
            hoverBorderWidth: 1,
            hoverBorderColor: '#ffffff'
        }]
    },
    options: {
        responsive: true,
	      maintainAspectRatio: true,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false
        },
        animation: {
            duration: 3000,
            easing: 'easeInBounce'
        },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    fontSize: 13,
                    fontColor: "#FFFFFF"
                },
                barPercentage: 1
            }],
            xAxes: [{
                gridLines: {
                    lineWidth: 2,
                    color: '#313154'
                },
                ticks: {
                    min: 50,
                    max: 100,
                    stepSize: 25,
                    fontSize: 13,
                    fontColor: "#FFFFFF"
                }
            }],
        },
      	tooltips: {
          backgroundColor: '#282843',
          titleFontFamily: 'Heebo',
          titleFontColor: '#e79aaf',
          titleFontSize: 13,
          titleMarginBottom: 8,
          bodyFontFamily: 'Heebo',
          bodyFontSize: 13,
          bodyFontColor: '#ffffff',
          multiKeyBackground: '#e9198e',
          borderColor: '#e9198e',
          borderWidth: 2,
          caretSize: 5,
          cornerRadius: 5,
          xPadding: 15,
          yPadding: 15
        }
    }
});