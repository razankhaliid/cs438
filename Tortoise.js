class Tortoise{
  constructor() {
    this.r=130;
    this.x=20;
    this.y=height-this.r;
    this.vy=0;
    this.gravity=1.3;
  }


jumpTor() {
this.vy=-20;
}

hitsTor_Rab(rabbits){
return collideRectRect(this.x, this.y, this.r, this.r, rabbits.x, rabbits.y, rabbits.r, rabbits.r);

}

moveTor() {
this.y += this.vy;
this.vy += this.gravity; 
this.y = constrain(this.y,0,height-this.r); 
}

showTor() {
image(tImg,this.x,this.y,this.r,this.r);
}

}