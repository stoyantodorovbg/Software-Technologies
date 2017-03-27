function solve(args) {
    let obj = {};

    for (let arg of args.slice(0, args.length - 1)){
        let tokens = arg.split(' ');

        let key = tokens[0];
        let value = tokens[1];

        obj[key] = value;
    }

    let key = args[args.length - 1];

    console.log(obj[key] || "None");
}
