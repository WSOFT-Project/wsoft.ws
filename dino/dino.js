export class Dino{
    constructor(gameWidth,gameHeight){
        this.gameWidth = gameWidth;
        this.gameHeight = gameHeight;
        this.image = document.getElementById("img_dino");
        this.offset = 20;
        this.r = 60;
        this.width = this.r*2;
        this.height = this.r*2;
        this.position = {
            x:60,
            y:this.gameHeight-this.offset-this.height
        };
        this.speed = 0;
        this.gravity = 0.5;
        this.lift = -12;
        this.jumpFlag = true;
        this.audio = new Audio("./bubble-burst1.mp3");   
    }
    up(){
        if(this.jumpFlag){
            
            this.speed = this.lift;
            this.jumpFlag = false;
            
            this.audio.play();　//ジャンプをしたときに「bubble-burst1.mp3」音声をplay
        }   
       
    }
    update(detlaTime){
       
        
        this.position.y += this.speed;
        this.speed += this.gravity;

        /*もし恐竜の位置が初期位置（this.gameHeight-this.offset-this.height）より大きい場合、
        位置を初期位置にする*/
        if(this.position.y >= this.gameHeight-this.offset-this.height){
            this.position.y = this.gameHeight-this.offset-this.height;
            this.speed = 0;
            this.jumpFlag = true;
        }
    }
    draw(ctx){
        /*ctx.beginPath();
        ctx.arc(this.position.x+this.r,this.position.y+this.r,this.r,0,2*Math.PI);
        ctx.stroke();*/
        ctx.drawImage(this.image,this.position.x,this.position.y,this.width,this.height);

    }
}