export const showInputError = (input) => {
    if (input.value === "") {
        input.style.textDecoration = "wavy underline red"
    }
}