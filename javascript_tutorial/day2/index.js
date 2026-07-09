
let str = "this is a string";
console.log(str);

let str2 = 'this is also a string';
console.log(str2);
console.log('My car is "Brm"')
console.log(`my car is "bmw"`);

let val = 20;
console.log("the value is: " + val);

console.log(`this value is ${val}`);

let str3 = "Bangladesh";
console.log(str3.length);

console.log(str3.toUpperCase());
console.log(str3.toLowerCase());
console.log(str3.charAt(5));
console.log(str3.indexOf("a"));

console.log(str3.slice(2, 7));
console.log(str3.slice(-9, -3));
console.log(str3.slice(3));

console.log(str3.substring(2, 7));
console.log(str3.substring(3));

let str4 = "i,love,bangladesh,bangladesh";
console.log(str4.split(","));

console.log(str4.replaceAll("bangladesh", "usa"));
console.log(str4.includes("india"));
console.log(str4.match(/a/));
let str5 = "ccc";
console.log(str5.padEnd(7, "01"));

console.log("            bangladesh".trim());


let arr = [1, 2, 3];
console.log(arr.length);
console.log(arr[0]);
arr[0] = 10;
console.log(arr[0]);
arr[3] = 30;
console.log(arr[3]);


console.log("printing the arry");
for (ele of arr) {
    console.log(ele);
}

console.log("printing the arry after insertion");
arr.push("mango");
arr.unshift("banana");
for (ele of arr) {
    console.log(ele);
}



console.log("printing the arry after deletion");
arr.pop();
arr.shift();
for (ele of arr) {
    console.log(ele);
}

//object

let person = {
    name: "mr. meow",
    age: 20
}



console.log(typeof person);
console.log(person.name);
console.log(person.age);
console.log(person["name"]);

person.isBangladeshi = true;
person.name = "mr. tom";
console.log(person.isBangladeshi);
console.log(person.name);

let teacher = {
    name: "Mr. Meow",
    specialization: "Ml",
    publication: 30,

    printPublication: function () {
        console.log(this.publication);
    }
}


console.log(teacher.name);
console.log(teacher.specialization);
teacher.printPublication();

const book = {
    name: "b1",
    author: "brsdf"
}

book.isbn = "slfkbsd.";

console.log(book.name);
console.log(book.isbn);

