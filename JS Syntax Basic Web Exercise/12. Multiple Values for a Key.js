function  solve(args) {
    let obj = {};

    for (let arg of args.slice(0, args.length - 1)){
        let line = arg.split(' ');
        let key = line[0];
        let value = line[1];
        if (obj[key]) {
            obj[key].push(value);
        } else {
            obj[key] = [value];
        }

    }

    let key = args[args.length - 1];

    console.log(obj[key] ? obj[key].join('\n') : "None");
}
