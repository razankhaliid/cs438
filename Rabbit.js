class Rabbit {
  constructor(){
    this.r=100;
    this.x=width;
    this.y=height-this.r;
  }
  
  moveRab() {
    this.x-=11;
  }
  
  showRab(){
    image(rImg,this.x,this.y,this.r,this.r)
  }
} 