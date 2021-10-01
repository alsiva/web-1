let hitDataForm = document.querySelector("#hitDataForm");
hitDataForm.addEventListener("submit", validate)

function validate(e) {
    let x = hitDataForm.querySelector("#x").value

    if (x > 10) {
        e.preventDefault()
        return;
    }


    // let y = hitDataForm.getElementById("y")
    // let r = hitDataForm.getElementById("r")
}