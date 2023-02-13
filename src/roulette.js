function voorbeeld(getal){
    const waarde = document.getElementById("amount").value;
    const lijstVanGeselecteerden = [];
    lijstVanGeselecteerden.push(getal);
    console.log(lijstVanGeselecteerden);

   }
   
function inzet(){
   const waarde = document.getElementById("amount").value;
   const lijstVanInzetten = [];
   lijstVanInzetten.push(waarde);
   //document.cookie = `lijst=${lijstVanInzetten}`;
   //let s = document.cookie;
   toonLijst(lijstVanInzetten);
}

function toonLijst(lijst){
   s = lijst;
   for(let i = 0; i < s.length; i++){
      console.log(s[i])
   }
   
}