/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var x = "User-agent header sent: " + navigator.userAgent;
strArch1 = new String("32");
strArch2 = new String("64");
if (x.search(strArch2) !== -1) {
    document.getElementById("bt2").className = "btn btn-lg btn-outline";
    document.getElementById("bt1").className = "btn btn-lg btn-outline-info";
}

if (x.search(strArch1) !== -1) {
    document.getElementById("bt1").className = "btn btn-lg btn-outline";
    document.getElementById("bt2").className = "btn btn-lg btn-outline-info";
}

$(document).ready(function () {
    $("bt2").click(function () {
        alert("Olá mundo!");
    });

    function downloadClick32() {
        window.alert("32");
    }

    function downloadClick64() {
        window.alert("64");
    }

});


