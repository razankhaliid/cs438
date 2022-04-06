let tortoise;
let rImg;
let tImg;
let fImg;
let rabbits=[];

function preload(){
  tImg=loadImage('tortoise.png');
  rImg=loadImage('Rabbit.png');
  fImg=loadImage('farm.jpg');


}

function setup(){
    createCanvas(800,400);
    tortoise =new Tortoise();
}

function keyPressed(){
    if (key==' '){
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
    if (tortoise.hits(r)){
      console.log('Game Over');
      noLoop();
    }
  }
    tortoise.show(); 
    tortoise.moveTor();
  
 
}