//ini Merupakaan Function Biaya sesuai Output Soal
var BiayaJarak=function(jarak){
    var jarakPertama=1;
    var kmpertama=5000;
    var jarakSelanjutnya=jarak-jarakPertama;
    var total=(jarakSelanjutnya*3000)+kmpertama;
    return total;
}


//ini Merupakaan Function Biaya sesuai SOal Cerita
var BiayaJarakSesuaiSoal=function(jarak){
    var jarakPertama=1.5;
    var kmpertama=5000;
    var jarakSelanjutnya=jarak-jarakPertama;
    var total=(jarakSelanjutnya*3000)+kmpertama;
    return total;
}

var arkaFood=function(biaya,voucher,jarak,pajak){
    var total;
    switch(voucher){
        case "ARKAFOOD5":
            if(biaya>50000){
                if(biaya<=100000){
                    total=biaya-((biaya*50)/100);
                }else{
                    total=biaya-50000;
                }
            }else{
                total=biaya;
            }
        break;
        case "DITRAKTIRDEMY":
            if(biaya>25000){
                if(biaya<=50000){
                    total=biaya-((biaya*60)/100);
                }else{
                    total=biaya-30000;
                }
            }else{
                total=biaya;
            }
        break;
        default:
            total=biaya;
    }


    var result=BiayaJarak(jarak)+total;
    var pajaknominal=0;
    if(pajak==true){
        pajaknominal=((biaya*5)/100);
    }
    return result+pajaknominal;
}
console.log(arkaFood(75000,"ARKAFOOD5",5,false));
//check https://repl.it/languages/nodejs
//
