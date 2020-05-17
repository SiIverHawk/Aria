import Chart from "chart.js";

let ctx = document.getElementById("myChart");
let data = {
    type: "bar",
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [
            {
                label: "# of Votes",
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(255, 159, 64, 0.2)"
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                    "rgba(255, 159, 64, 1)"
                ],
                borderWidth: 1
            }
        ]
    },
    options: {
        scales: {
            yAxes: [
                {
                    ticks: {
                        beginAtZero: true
                    }
                }
            ]
        }
    }
};

let myChart = new Chart(ctx, data);

document
    .getElementById("btn-toggle")
    .addEventListener("click", onClickToggleBar);

document
    .getElementById("sidenav-close-btn")
    .addEventListener("click", onClickCloseBar);

function onClickToggleBar() {
    if (
        document
            .getElementById("mySidenav")
            .classList.contains("sidenav-mobile-close")
    ) {
        document
            .getElementById("mySidenav")
            .classList.remove("sidenav-mobile-close");
    }
    document.getElementById("mySidenav").classList.add("sidenav-mobile-open");
    document.getElementById("dashboard").style.marginLeft = "150px";
}

function onClickCloseBar() {
    if (
        document
            .getElementById("mySidenav")
            .classList.contains("sidenav-mobile-open")
    ) {
        document
            .getElementById("mySidenav")
            .classList.remove("sidenav-mobile-open");
    }
    document.getElementById("mySidenav").classList.add("sidenav-mobile-close");
    document.getElementById("dashboard").style.marginLeft = "0px";
}
