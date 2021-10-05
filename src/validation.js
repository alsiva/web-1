let hitDataForm = document.querySelector("#hitDataForm");
hitDataForm.addEventListener("submit", validate)

function validate(event) {
    let xAsStr = hitDataForm.querySelector("#xInput").value
    let yAsStr = hitDataForm.querySelector("#yInput").value
    let radiusAsString = hitDataForm.querySelector("#radiusInput").value

    let x = parseNumber(xAsStr);
    if (x === null) {
        alert("x: " + xAsStr + " не является числом")
        event.preventDefault();
        return;
    }

    let y = parseNumber(yAsStr);
    if (y === null) {
        alert("y: " + yAsStr + " не является числом")
        event.preventDefault();
        return;
    }

    let radius = parseNumber(radiusAsString);
    if (radiusAsString === null) {
        alert("radius: " + radiusAsString + " не является числом")
        event.preventDefault();
        return;
    }

    if (radius <= 0) {
        alert("радиус должен быть больше 0")
        event.preventDefault();
        return;
    }
}

function parseNumber(str) {
    let value = Number.parseInt(str);
    if (isNaN(value)) {
        return null;
    } else {
        return value;
    }
}