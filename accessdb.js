/*
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021
    */

/*
    Gets weapon name and returns material name
*/
function showWeaponMat(weapon) {
    const xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onload = function() {
        document.getElementById("weaponInfo").innerHTML = this.responseText;
    }

    xmlhttp.open("GET", "getWeapon.php?q=" + weapon);
    xmlhttp.send(); 
}

/*
    Gets Weapon name and uses that to get a material and returns corrosponding domain
*/
function showWeaponLoc(weapon){
    const xmlhttp = new XMLHttpRequest();

    xmlhttp.onload = function() {
        document.getElementById("weaponLoc").innerHTML = this.responseText;
    }

    xmlhttp.open("GET", "showWeaponLoc.php?q=" + weapon);
    xmlhttp.send();
}

/*
    Gets Weapon name and uses that to get a material and returns corrosponding days 
*/
function showWeaponDay(weapon){
    const xmlhttp = new XMLHttpRequest();

    xmlhttp.onload = function() {
        document.getElementById("weaponDay").innerHTML = this.responseText;
    }

    xmlhttp.open("GET", "showWeaponDay.php?q=" + weapon);
    xmlhttp.send();
}

/*
    Gets Character name and returns corrosponding material
*/
function showCharacterInfo(charName) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        document.getElementById("charInfo").innerHTML = this.responseText;
    }
    xmlhttp.open("GET", "getCharacter.php?q=" + charName);
    xmlhttp.send(); 
}

/*
    Gets Character name and uses that to get material name and returns corrosponding domain
*/
function showDomLocation(charName) {    
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        document.getElementById("matLocation").innerHTML = this.responseText;
    }
    xmlhttp.open("GET", "getDomLoc.php?q=" + charName);
    xmlhttp.send();
}

/*
    Gets character name and uses that to get material name and returns corrosponding days
*/
function showDay(charName) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        document.getElementById("days").innerHTML = this.responseText;
    }
    xmlhttp.open("GET", "getDays.php?q=" + charName);
    xmlhttp.send();
}
