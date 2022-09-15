import {showInputError} from "../view/showInputError.js";

import {fetchResponse} from "./models/insertResponse.js";

export const setupListener = () => {
    document.getElementById("post").addEventListener("click", () => {
        console.log("post")
        fetchResponse().then(r => console.log(r))
    })

    let inputs = document.getElementsByClassName("text-input")
    for (let input of inputs) {
        input.addEventListener("onChange", () => {
            showInputError(input)
        })
    }
}
