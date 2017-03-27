function solve (args) {
    let studentsData = args.map(studentString => studentString.split(' -> '))

    let student = {};
    studentsData.forEach(tokens => {
        let key = tokens[0];
        let value = tokens[1];

        if(key === 'age' || key === 'grade'){
            value = Number(value);
        }

        student[key] = value;
    });

    console.log(JSON.stringify(student));
}
