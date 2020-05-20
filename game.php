<!DOCTYPE html> 
<body onload="hide()">
<!-- On the creation of the page, start the game canvas-->
<canvas id="ctx" width="500" height="500" style="border:1px Solid #000000;"></canvas>
<img id="b" src="https://i.ibb.co/2j095Yk/Sky.jpg" alt="background" width="500" height="500"> </img>
<img id="f" src="https://i.ibb.co/jvcncWy/Grass-Cloud.png" alt="background" width="500" height="500"> </img>
<img id="w" src="https://i.ibb.co/jvcncWy/Grass-Cloud.png" alt="background" width="500" height="500"> </img>
<img id="g" src="https://i.ibb.co/jvcncWy/Grass-Cloud.png" alt="background" width="500" height="500"> </img>

<script>
hide = function(){
var hideb = document.getElementById("b");
var hidef = document.getElementById("f");
var hidew = document.getElementById("w");
var hideg = document.getElementById("g");



if (hideb.style.display === "none") {
    hideb.style.display = "block";
  } else {
    hideb.style.display = "none";
  }

  if (hidef.style.display === "none") {
    hidf.style.display = "block";
  } else {
    hidef.style.display = "none";
  }

  if (hidew.style.display === "none") {
    hidew.style.display = "block";
  } else {
    hidew.style.display = "none";
  }

  if (hideg.style.display === "none") {
    hideg.style.display = "block";
  } else {
    hideg.style.display = "none";
  }
}
// This creates the canvas that contains the game
var ctx = document.getElementById("ctx").getContext("2d");
ctx.font = "50px Verdana";





// Initialise Variables --------------------------------------------------------------------------------------------


// Initialises player
var player = {
hp: 1,
maxhp: 0,
att: 0,
def: 0,
spd: 0,
name:'N/A'
};
// Initialises Enemy
var enemy = {
hp: 1,
maxhp: 0,
att: 0,
def: 0,
spd: 0,
name:'N/A'
};

// Initialise Clouds

var fireC = {
hp: 39,
maxhp: 39,
att: 52,
def: 43,
spd: 65,
name: "Fire"

}
var waterC = {
hp: 44,
maxhp: 44,
att: 48,
def: 65,
spd: 43,
name: "Water"


}
var grassC = {
hp: 45,
maxhp: 45,
att: 49,
def: 49,
spd: 45,
name: "Grass"
}

var pHpX = 200;
var eHpX = 200; 

var pDam = 0;
var eDam = 0;

var pIsAtt = false;
var pIsDef = false;

var eIsAtt = false;
var eIsDef = false;



//--------------------------------------------------------------------------------------------------------------------


// This is a random number gen, used for enemy picking and damage calculations
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
function getRandomInt2(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
}




controller = function () {    
enemyturn();
fight();
updatebattle();
resetconditions();

if(player.hp <= 0){
    
    window.top.location='https://cloudcomp-a2.ts.r.appspot.com/main';
}
if(enemy.hp <= 0){

window.top.location='https://cloudcomp-a2.ts.r.appspot.com/main';
}
}

fight = function() { 
if(pIsAtt = true){
    enemy.hp = enemy.hp - pDam;
}
if(eIsAtt = true){
    player.hp = player.hp - eDam;
}

}

resetconditions = function () { 
pIsAtt = false;
pIsDef = false;

eIsAtt = false;
eIsDef = false;


}

// Creates a function that whipes the canvas, will be called each update for redraw.
clear = function(){ 
    ctx.clearRect(0,0,1000,1000);
}

background = function(){
var back = document.getElementById("b");
ctx.drawImage(back, 0, 0, 500, 500);
}

// draws the inital canvas
drawcanvas= function() { 
background();
// Draw player hp bar
ctx.fillStyle = "#000000";
ctx.fillRect(285,450,210,30)
ctx.fillStyle = "#FF0000";
ctx.fillRect(290,455,200,20)

// Draw enemy hp bar
ctx.fillStyle = "#000000";
ctx.fillRect(5,15,210,30)
ctx.fillStyle = "#FF0000";
ctx.fillRect(10,20,200,20)

cloudDraw();
}

cloudDraw = function() {
if(player.name == "Fire") {
var pcloud = document.getElementById("f");
ctx.drawImage(pcloud, 10, 400, 150, 75);
}
if(player.name == "Water") {
var pcloud = document.getElementById("w");
ctx.drawImage(pcloud, 10, 400, 150, 75);   
}
if(player.name == "Grass") {
var pcloud = document.getElementById("g");
ctx.drawImage(pcloud, 10, 400, 150, 75);   
}

if(enemy.name == "Fire"){
var ecloud = document.getElementById("f");
ctx.drawImage(ecloud, 300, 10, 150, 75);  
}

if(enemy.name == "Water"){
var ecloud = document.getElementById("w");
ctx.drawImage(ecloud, 300, 10, 150, 75);   
}

if(enemy.name == "Grass"){
var ecloud = document.getElementById("g");
ctx.drawImage(ecloud, 300, 10, 150, 75);
}

}

updateHp = function() { 
    
var pMax = player.maxhp;
var eMax = enemy.maxhp;    
var pHealth = player.hp;
var eHealth = enemy.hp;

var pbar = pHpX * (player.hp / player.maxhp);
if(pbar < 1){
    pbar = 1; 
}
if(ebar < 1){
    ebar = 1;
}
var ebar = eHpX * (enemy.hp / enemy.maxhp);

// Redraw player hp bars with updated values
ctx.fillStyle = "#000000";
ctx.fillRect(285,450,210,30)
ctx.fillStyle = "#FF0000";
ctx.fillRect(290,455, pbar ,20)

// Redraw enemy hp bars with updated values
ctx.fillStyle = "#000000";
ctx.fillRect(5,15,210,30)
ctx.fillStyle = "#FF0000";
ctx.fillRect(10,20,ebar,20)


}

updatebattle = function(){
    clear();
    background();
    cloudDraw();
    updateHp();


}

// Called if player becomes this type, sets players stats
pfireset = function() { 
    player.hp = fireC.hp;
    player.att = fireC.att;
    player.def = fireC.def;
    player.spd = fireC.spd;
    player.name = fireC.name;
    player.maxhp = fireC.maxhp;
}
// Called if player becomes this type, sets players stats
pwaterset = function() { 
    player.hp = waterC.hp;
    player.att = waterC.att;
    player.def = waterC.def;
    player.spd = waterC.spd;
    player.name = waterC.name;
    player.maxhp = waterC.maxhp;
}
// Called if player becomes this type, sets players stats
pgrassset = function() { 
    player.hp = grassC.hp;
    player.att = grassC.att;
    player.def = grassC.def;
    player.spd = grassC.spd;
    player.name = grassC.name;
    player.maxhp = grassC.maxhp;
}

// Sets the enemy to a random cloud type
eset = function() {
// Generates a random number for the enemy to pick a cloud
var choice = getRandomInt(3);

// Depending on the random number, it picks a type of cloud for the enemy 
if (choice == 0){ 
    enemy.hp = fireC.hp;
    enemy.att = fireC.att;
    enemy.def = fireC.def;
    enemy.spd = fireC.spd;
    enemy.name = fireC.name;
    enemy.maxhp = fireC.maxhp;
    console.log("the enemy chose fire")
}
if(choice == 1){
    enemy.hp = waterC.hp;
    enemy.att = waterC.att;
    enemy.def = waterC.def;
    enemy.spd = waterC.spd;
    enemy.name = waterC.name;
    enemy.maxhp = waterC.maxhp;
    console.log("the enemy chose water")
}
if(choice == 2){
    enemy.hp = grassC.hp;
    enemy.att = grassC.att;
    enemy.def = grassC.def;
    enemy.spd = grassC.spd;
    enemy.name = grassC.name;
    enemy.maxhp = grassC.maxhp;
    console.log("the enemy chose grass")
}

}


// Sets the cloud choice buttons to invisible once they have been chosen
hideButton = function(){
var hide = document.getElementById("cloudPick");
if (hide.style.display === "none") {
    hide.style.display = "block";
  } else {
    hide.style.display = "none";
  }
}





function Fire() {
    console.log("You chose fire");
    hideButton();
    pfireset();
    eset();
    drawcanvas();

}
function Water() {
    console.log("You chose water");
    hideButton();
    pwaterset();
    eset();
    drawcanvas();

}
function Grass() {
    console.log("You chose grass");
    hideButton();
    pgrassset();
    eset();
    drawcanvas();

}



function attack() {
var a = 5; 
var b = player.att;
var c = 50;
var d = enemy.def;
var x = 1;

var y = 1;
// A mess of code to check type effectiveness
if(enemy.name == "Fire" && player.name == "Water"){
y = 2;
}
if(enemy.name == "Fire" && player.name == "Fire"){
y = 1;
}
if(enemy.name == "Fire" && player.name == "Grass"){
y = 0.5;
}

if(enemy.name == "Water" && player.name == "Water"){
y = 1;
}
if(enemy.name == "Water" && player.name == "Fire"){
y = 0.5;
}
if(enemy.name == "Water" && player.name == "Grass"){
y = 2;
}

if(enemy.name == "Grass" && player.name == "Water"){
y = 0.5;
}
if(enemy.name == "Grass" && player.name == "Fire"){
y = 2;
}
if(enemy.name == "Grass" && player.name == "Grass"){
y = 1;
}

var z = getRandomInt2(217,255);
// Damage calculation (Using the pokemon algorythm)
if(eIsDef = true) {
pDam = ((((((((2*a)/5+2)*b*c)/d) + 2 ) *x*y/10)*z)/255) /2 ;
}
if(eIsDef = false) {
pDam = ((((((((2*a)/5+2)*b*c)/d) + 2 ) *x*y/10)*z)/255);
}


pIsAtt = true;
controller();
}

function defend() {
pIsDef = true;
controller();
}



enemyturn = function() {
// Enemy takes a random action     
var enemyAction = getRandomInt(1);

if(enemyAction == 0){

var a = 5; 
var b = enemy.att;
var c = 50;
var d = player.def;
var x = 1;

var y = 1;
// A mess of code to check type effectiveness
if(enemy.name == "Fire" && player.name == "Water"){
y = 0.5;
}
if(enemy.name == "Fire" && player.name == "Fire"){
y = 1;
}
if(enemy.name == "Fire" && player.name == "Grass"){
y = 2;
}

if(enemy.name == "Water" && player.name == "Water"){
y = 1;
}
if(enemy.name == "Water" && player.name == "Fire"){
y = 2;
}
if(enemy.name == "Water" && player.name == "Grass"){
y = 0.5;
}

if(enemy.name == "Grass" && player.name == "Water"){
y = 2;
}
if(enemy.name == "Grass" && player.name == "Fire"){
y = 0.5;
}
if(enemy.name == "Grass" && player.name == "Grass"){
y = 1;
}

var z = getRandomInt2(217,255);
// Damage calculation (Using the pokemon algorythm)
if(eIsDef = true) {
eDam = ((((((((2*a)/5+2)*b*c)/d) + 2 ) *x*y/10)*z)/255) /2 ;
}
if(eIsDef = false) {
eDam = ((((((((2*a)/5+2)*b*c)/d) + 2 ) *x*y/10)*z)/255);
}

console.log("the enemy chose to attack");
eIsAtt = true;
}
if(enemyAction == 1){
console.log("the enemy chose to defend");
eIsDef = true;    
}

}






</script>
</body>
<div id="cloudPick" style="text-align:center;width:480px;">
    <p> Pick a Cloud</p>
    <button onclick="Fire()">Fire</button><br><br>
    <button onclick="Water()">Water</button>
    <button onclick="Grass()">Grass</button><br><br>

  </div>
<div style="text-align:center;width:480px;">
    <button onclick="attack()">Attack</button><br><br>
    <button onclick="defend()">Defend</button>

  </div>
</html>