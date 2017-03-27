function  solve(args) {
  let students = args
      .map(studentString => studentString.split(' -> '))
      .map(line => {
          return{
              name: line[0],
              age: Number(line[1]),
              grade: Number(line[2])
          };
      })
    students.forEach(student => {
        console.log(`Name: ${student.name}`);
        console.log(`Age: ${student.age}`);
        console.log(`Grade: ${student.grade.toFixed(2)}`);
    });
}


solve('Pesho -> 13 - 6.00\nIvan -> 12 -> 5.57\nToni -> 13 -> 4.90'.split('\n'));
