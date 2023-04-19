let input = require('fs').readFileSync('./test.txt').toString().split('\n'); // 제출용 : /dev/stdin
let a = parseInt(input[0]);
let b = parseInt(input[1]);
console.log(a*(b%10));
console.log(a*(Math.floor(b/10)%10));
console.log(a*(Math.floor(b/100)));
console.log(a*b);