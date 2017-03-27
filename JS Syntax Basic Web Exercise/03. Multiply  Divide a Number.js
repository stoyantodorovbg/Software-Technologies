function solve (args) {
    let numberOne = Number(args[0])
    let numberTwo = Number(args[1])

    if (numberOne <= numberTwo){
        console.log(numberOne * numberTwo)
    }
    else {
        console.log(numberOne / numberTwo)
    }
}
