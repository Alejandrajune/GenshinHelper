/*
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021
    */

/* 
    This function gets the current day of the week and then places it in the header on the Farming page
*/
function getDayOfWeek() {
    const d = new Date();

    const weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    let day = weekday[d.getDay()];
    document.getElementById("dayOfWeek").innerHTML = day;
}

/*
    This function gets the current day of the week and uses that to get corrosponding information from the database and place it in a table
    */
function getMaterialColumn() {
    var day = document.getElementById("dayOfWeek").innerHTML;
    const xmlhttp = new XMLHttpRequest();

    xmlhttp.onload = function() {
        document.getElementById("materialTable").innerHTML = this.responseText;
    }
    xmlhttp.open("GET", "createItemColumn.php?q=" + day);
    xmlhttp.send();
}
