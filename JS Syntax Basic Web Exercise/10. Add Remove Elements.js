function  solve(args) {
    let result = [];
    for (let i = 0; i < args.length; i++) {
        let line = args[i].split(' ');
        let command = line[0];
        let value = Number(line[1]);
        if (command == 'add') {
            result.push(value);
        }
        else if(command == 'remove' && value < args.length){
                result.slice(value, 1);

                for(let e = value; e < result.length - 1; e++) {
                    result[e] = result[e + 1];
                }
                result.slice(result.length - 1, 1);
            }

    }
    for (let i = 0; i < result.length; i++){
        console.log(result[i])
    }

}
solve(['add 3', 'add 5', 'remove 1', 'add 2']);