class Rabbit {
  constructor(){
    this.r=100;
    this.x=width;
    this.y=height-this.r;
  }
  
  move() {
    this.x-=11;
  }
  
  show(){
    image(rImg,this.x,this.y,this.r,this.r)
  }
}