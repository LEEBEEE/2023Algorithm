// 리즈 : 오늘도 (PHP한테) 졌다

let input = require('fs').readFileSync('/dev/stdin').toString().split('\n');
const wzScore = input[0].split(" ").map(Number);
const stScore = input[1].split(" ").map(Number);
let wSum = 0;
let sSum = 0;
let flag = false;
for (let i = 0; i < 9; i++) {
    wSum += wzScore[i];
    if (wSum > sSum) {
        flag = true;
    }
    sSum += stScore[i];
}
if (wSum < sSum && flag) {
    console.log('Yes');

} else {
    console.log('No');
}