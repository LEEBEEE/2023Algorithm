let input = require('fs').readFileSync('./test.txt').toString().split('\n'); // 제출용 : /dev/stdin
let n = parseInt(input[0]);
let test = input[1].split(' ');
test.sort();
let m = parseInt(input[2]);
let numbers = input[3].split(' ');

let answer = [];
numbers.forEach(int => {
    let isset = false;
    let start = 0;
    let end = n - 1;

    while (start <= end) {
        let mid = parseInt((start + end) / 2);
        if (test[mid] == int) {
            isset = true;
            break;
        } else if (test[mid] < int) {
            start = mid + 1;
        } else {
            end = mid - 1;
        }
    }
    if (isset) {
        answer.push('1');
    } else {
        answer.push('0');
    }
});
console.log(answer.join("\n"));