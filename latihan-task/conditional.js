const nilai = 98;
let grade = "";

if(nilai > 98){
    grade = "A";
}else if (nilai > 88){
    grade = "B";
}else {
    grade = "C";
}

console.log(`Grade Anda : ${grade}`);

const age = 19;

// if(age > 21){
//     console.log("Sudah Dewasa");
// }else{
//     console.log("Belum Dewasa");
// }

// menggunakan shart conditional (termary operator)
age > 21 ? console.log("Sudah Dewasa") : console.log("Belum Dewasa");