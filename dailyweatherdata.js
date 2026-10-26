var dailydata_stoke='{"coord":{"lon":-2.8667,"lat":53.25},"weather":[{"id":802,"main":"Clouds","description":"scattered clouds","icon":"03d"}],"base":"stations","main":{"temp":13.12,"feels_like":12.5,"temp_min":10.9,"temp_max":14.58,"pressure":1004,"humidity":77},"visibility":10000,"wind":{"speed":7.2,"deg":240},"clouds":{"all":40},"dt":1632737331,"sys":{"type":1,"id":1399,"country":"GB","sunrise":1632722761,"sunset":1632765526},"timezone":3600,"id":2636868,"name":"Stoke","cod":200}'

window.onscroll = function(){myFunction()};

function myFunction(){
    var winScroll = document.body.scrollTop || 
    document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height)*100;
    document.getElementById("myBar").style.width = scrolled + "%";
}

