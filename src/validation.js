let hitDataForm = document.querySelector("#hitDataForm");
let xInput = hitDataForm.querySelector("#xInput");
let yInput = hitDataForm.querySelector("#yInput");
let yIncrementButton = hitDataForm.querySelector("#yIncrementButton");

yIncrementButton.addEventListener('click', () => {
    let y = Number.parseInt(yInput.value) + 1
    if (y > 3) {
        y = -5;
    }
    yInput.value = y;
})

hitDataForm.addEventListener("submit", event => {
    let xAsStr = xInput.value.trim()
    let value = parseFloat(xAsStr);

    let maxLength = value < 0 ? 5 : 4

    if (isNaN(value)) {
        event.preventDefault();
        alert("x: " + xAsStr + " не является числом");
        return
    }

    if (xAsStr.length > maxLength) {
        event.preventDefault();
        alert("Зачем вы уснули на клавиатуре");
    }
})
