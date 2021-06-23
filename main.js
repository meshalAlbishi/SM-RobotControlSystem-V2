var power = $('#power');
var sliders = document.getElementsByClassName('range');
var slidersValue = document.getElementsByClassName('range-value');

addSlidersEvents();
powerEvenet();

// sliders event functions 
function addSlidersEvents() {
    for (let i = 0; i < sliders.length; i++) {

        sliders[i].addEventListener('change', () => changeRangeValue(slidersValue, i, sliders[i].value));

        sliders[i].addEventListener('mousemove', () => changeRangeValue(slidersValue, i, sliders[i].value));

    }
}

function changeRangeValue(slidersValue, index, value) {
    slidersValue[index].textContent = value;
}
// ---------------------------------------------------------------

// checkbox event

function powerEvenet() {
    power.click(() => {

        var isOn = $('#power').is(":checked");
        $.ajax({
            url: "includes/fetchLastMotors.php",
            method: "POST",
            data: { power: isOn },
            success: (data) => window.location.href = 'includes/fetchLastMotors.php'
        });

    });
}