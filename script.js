document.writeln("<h1>Welcome to JavaScript Programming</h1>");
alert("hello");

document.writeln("<h1 class='jcs'>Welcome to html, css and javascript</h1>");
window.alert("Welcome to \nJavaScript\nProgramming");

var a, b, c;
a=5;
b=6;
c=a+b;
alert("c = "+c);

sa=10;
sb=20;
var sum;
sum = sa+sb;
document.writeln("<h1 class='sum'> The sum is "+sum+" </h1>");

var person = prompt("Please enther the name of the person");
txt = "Hello "+person+" & Welcome";
window.alert(txt);

// var today = new Date();
// alert(today);
// alert(today.getDate());
// alert(today.getMonth());
// alert(today.getDay());
// alert(today.getFullYear());
// alert(today.getTime());

document.writeln("<h1>Sum of Even Intergers from 2 to 100</h1>");

var num = 0; 
var sum = 0;
for(num=2; num<=100;num=+2)
    sum += num;

    document.writeln("The sum of the even integers from 2 to 100 is "+sum);