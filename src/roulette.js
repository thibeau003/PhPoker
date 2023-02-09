function voorbeeld(getal){
    const waarde = document.getElementById("amount").value;
    const lijstVanGeselecteerden = [];
    lijstVanGeselecteerden.push(getal);
    document.cookie = `saus=${lijstVanGeselecteerden}`;
    console.log(lijstVanGeselecteerden);
    let z = document.cookie;
   return z;
   }
   
function inzet(){
   const waarde = document.getElementById("amount").value;
   const lijstVanInzetten = [];
   lijstVanInzetten.push(waarde);
   document.cookie = `lijst=${lijstVanInzetten}`;
   let s = document.cookie;
   
   for(let i = 0; i < s.length; i++){
      console.log(s[i])
   }

}