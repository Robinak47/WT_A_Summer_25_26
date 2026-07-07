var a = 10;
var a = 20;
console.log(a);

let b = 20;
const pi = 3.1416;



function testFunc() {

    if (true) {
        var d = "moew";
        let e = "tom"
    }

    console.log(d);
    // console.log(e);
}

testFunc();

let n1 = 1;
let n2 = 1.9888;
let n3 = 3.0998080989098;
console.log(typeof n1);
console.log(typeof n2);
console.log(typeof n3);

console.log(typeof "meow");
console.log(typeof 'm');

let testBool = true;
console.log(typeof testBool);

let testUndefine;
console.log(typeof testUndefine);

let testNull = null;
console.log(typeof testNulls);

let arr = [1, "meow", [], {}];
console.log(typeof arr);

let num1 = 10;
let num2 = 20;

// if (num1 < num2) {

//     console.log("num2 is grater than num1");
// }

// else {
//     console.log("num1 i grater than num2");
// }

console.log((num1 < num2) ? "num2 is grater than num1" : (num1 == num2) ? "all are eqal" : "number 1 is grater than number 2");


function sayMeow() {
    console.log("meow meow from function");
}

sayMeow();


function sayHi() {
    return "hi";
}

console.log(sayHi());

function greetUser(name = "abc") {
    console.log("Hello " + name);
}

greetUser();

console.log(typeof greetUser);

let funTest = function () {
    console.log("this is fun test");

}

funTest();

let arrowTest = () => {
    console.log("this is arrow func 1");
}

arrowTest();

let arrowTest2 = name => {
    console.log("hello " + name);
}


arrowTest2("meow");


let arrowTest3 = testNum => testNum * 3;
console.log(arrowTest3(10));

for (let i = 0; i < 5; i++) {
    console.log("bangladesh");
}

let j = 0;
while (j < 5) {
    console.log("moew");
    j++;
}

let arr2 = ["meow", "mango", 10, { id: "1223" }];

arr2.forEach((element) => {
    console.log(element);
});


arr2.forEach(function (element) {
    console.log(element);
})

for (index in arr2) {
    console.log(arr2[index]);
}