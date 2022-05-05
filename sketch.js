let tortoise;
let rImg;
let tImg;
let fImg;
let rabbits=[];
var score = 0;

function preload(){
  tImg=loadImage('tortoise.png');
  rImg=loadImage('Rabbit.png');
  fImg=loadImage('farm.jpg');
  document.getElementById('scores1').style.display='none';

}

function setup(){
    createCanvas(1500,650);
    tortoise =new Tortoise();
}

function keyPressed(){
    if (key==' ')
    {
      score = score + 1;
      console.log(score);
      document.getElementById('scoreNum').innerHTML=score;
      tortoise.jumpTor();
    }
}



function draw (){
  if(random(1) < 0.005){
    rabbits.push(new Rabbit());
  }
    background(fImg);
  
   for (let r of rabbits){
    r.moveRab();
    r.showRab();
    if (tortoise.hitsTor_Rab(r)){
      console.log('Game Over');
      document.getElementById('gameScore').style.display='none';
      window.alert('Game Over \n the score is : '+score);
      document.getElementById('scores1').style.display='inline';
      var Myelement = document.querySelector('input[name="scores"]');
      Myelement.value = score;
      noloop();

       
    }
  }
    tortoise.showTor(); 
    tortoise.moveTor();
  
 
} 

function GetValue() {
  $.ajax({
      type: 'post',
      url: 'score.php',
      data: {
          someValue: str
      },
      success: function( score ) {
          console.log( score );
      }
  });
}
      
      