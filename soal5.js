var genap=function(nilai){
    var result = false;
    if(nilai%2==0){
        result=true;
    }
    return result;
}//validasi bilangan Genap

var ganjil=function(nilai){
    var result = false;
    if(nilai%2==1){
        result=true;
    }
    return result;
} //validasi bilangan Ganjil


var soal5a=function(batas){
    var a=0;
    var b=0;
    var c=1;
    var jumlah=0;
    while(c<batas){
        if(genap(c)==true){
            jumlah=jumlah+c;
        }
        a=b;
        b=c;
        c=a+b;
    }
    return jumlah;
} //fungsi untuk Soal 5 A



var soal5b=function(batas){
    var a=0;
    var b=0;
    var c=1;
    var jumlah=0;
    while(c<batas){
        if(ganjil(c)==true){
            jumlah=jumlah+c;
        }
        a=b;
        b=c;
        c=a+b;
    }
    return jumlah-1;
}//fungsi untuk Soal 5 B




console.log(soal5a(1000));//soal 5a
console.log(soal5b(1000));//soal 5b

