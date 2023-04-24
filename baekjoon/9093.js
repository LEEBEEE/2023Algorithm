let input = require('fs').readFileSync('./test.txt').toString().split('\n'); // 제출용 : /dev/stdin
const cnt = input[0];
const arr = [];
for (let i = 1; i <= cnt; i++) {
    const wordArray = input[i].replaceAll("\r", "").split(" ");
    let answer = '';
    const temp = [];
    wordArray.forEach(word => {
        temp.push(word.split('').reverse().join('')); // 거꾸로 뒤집은 단어
    });
    arr.push(temp.join(" "));
}
console.log(arr.join("\n"));