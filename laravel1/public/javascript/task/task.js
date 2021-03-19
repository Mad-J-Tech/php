function taskRadio() {
    radio = document.getElementsByName('status');

    var all = document.querySelectorAll('tr.true, tr.false');
    var done = document.querySelectorAll('tr.true');
    var current = document.querySelectorAll('tr.false');

    if (radio[0].checked) {
        all.forEach(function (elem) {
            elem.style.display = "";
        });
    } else if (radio[1].checked) {
        done.forEach(function (elem) {
            elem.style.display = "none";
        });
        current.forEach(function (elem) {
            elem.style.display = "";
        });
    } else if (radio[2].checked) {
        done.forEach(function (elem) {
            elem.style.display = "";
        });
        current.forEach(function (elem) {
            elem.style.display = "none";
        });
    }
}

window.onload = taskRadio;