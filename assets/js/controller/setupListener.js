import {showInputError} from "../view/showInputError.js";

export const setupListener = () => {
    document.getElementById("post").addEventListener("click", () => {
        console.log("post")
    })

    let inputs = document.getElementsByClassName("text-input")
    for (let input of inputs) {
        input.addEventListener("Keyup", () => {
            showInputError(input)
        })
    }
}