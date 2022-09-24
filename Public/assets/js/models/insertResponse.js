export const fetchResponse = async () => {
    const response = await fetch("php/insert.php")
    const json = await response.json()
    console.log(json)
}