function solve(args) {
    for(let index in args){
        let input = args[index]
        if (input != 'Stop') {
            console.log(args[index])
        }
        else{
            break;
        }
    }
}

solve(['Line 1', 'Line 2', 'Stop'])