// JavaScript Document
var selectedTerm = "";

function showInstructions() {
    $('#introPage').fadeOut('slow', function() {
        $('#instructionPage').fadeIn('slow', function() {});
    });
}

function selectTerm(term) {
    selectedTerm = term;
    document.getElementById("winter").style.background = "#BCD52F";
    document.getElementById("winter").style.color = "#FFF";
    document.getElementById("fall").style.background = "#BCD52F";
    document.getElementById("fall").style.color = "#FFF";
    document.getElementById("summer").style.background = "#BCD52F";
    document.getElementById("summer").style.color = "#FFF";
    document.getElementById(term).style.background = "#181848";
    document.getElementById(term).style.color = "#BCD52F";
}

function buildScheduleTable() {
    if (selectedTerm == "");
    else {
        document.getElementById("schedules").innerHTML = "";
        schedTable = document.createElement("table");
        schedTable.id = "schedTable";
        schedTable.cellSpacing = 0;

        var times = new Date();
        times.setMinutes(0);
        times.setHours(8);

        schedRow = document.createElement("tr");
        schedHead = document.createElement("th");

        schedHead.innerHTML = "TIME";
        schedHead.id = "timeSide";
        schedRow.appendChild(schedHead);

        schedHead = document.createElement("th");
        schedHead.innerHTML = "Mon";
        schedRow.appendChild(schedHead);

        schedHead = document.createElement("th");
        schedHead.innerHTML = "Tue";
        schedRow.appendChild(schedHead);

        schedHead = document.createElement("th");
        schedHead.innerHTML = "Wed";
        schedRow.appendChild(schedHead);

        schedHead = document.createElement("th");
        schedHead.innerHTML = "Thu";
        schedRow.appendChild(schedHead);

        schedHead = document.createElement("th");
        schedHead.innerHTML = "Fri";
        schedRow.appendChild(schedHead);

        schedTable.appendChild(schedRow);

        for (var i = 0; i < 60; i++) {
            schedTimeRow = document.createElement("tr");
            for (var j = 0; j <= 5; j++) {
                schedTimeSlot = document.createElement("td");
                if (j == 0) {
                    times.setTime(times.getTime() + (15 * 60 * 1000));
                    minutes = times.getMinutes();
                    hours = times.getHours();
                    if (minutes < 10) {
                        minutes = "0" + minutes
                    }
                    if (hours < 10) {
                        hours = "0" + hours
                    }
                    schedTimeSlot.innerHTML = hours + ":" + minutes;
                    schedTimeSlot.id = "timeSide";
                    schedTimeRow.appendChild(schedTimeSlot);
                }
                else {
                    schedTimeSlot.id = '' + j + ',' + i;
                    schedTimeRow.appendChild(schedTimeSlot);
                }
            }
            schedTable.appendChild(schedTimeRow);
        }
        document.getElementById("introPage").style.display = "none";
        document.getElementById("instructionPage").style.display = "none";
        document.getElementById("addCourseWindow").style.display = "none";
        document.getElementById("schedules").appendChild(schedTable);
        $('#schedules').fadeIn(1000, function() {});
    }

/*
    document.getElementById("2,2").rowSpan = "4";
    document.getElementById("2,3").style.display = "none";
    document.getElementById("2,4").style.display = "none";
    document.getElementById("2,5").style.display = "none";
    */

}

function showAddCourse() {
    if (selectedTerm == "");
    else {
        $('#left_container').fadeTo('slow', 0.3, function() {
            $('#addCourseWindow').fadeIn('slow', function() {});
        });
    }
}

function closeAddWindow() {
    $('#addCourseWindow').fadeOut('slow', function() {
        $('#left_container').fadeTo('slow', 1.0, function() {});
    });
}

function showCourses() {

}