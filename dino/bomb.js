export class Bomb{
    constructor(gameWidth,gameHeight){
        this.gameWidth = gameWidth;
        this.gameHeight = gameHeight;
        this.image = document.getElementById("img_bomb");
        this.offset = 20;
        this.r = 60;
        this.width = this.r*2;　//幅
        this.height = this.r*2; //高さ
        this.position = {
            x:this.gameWidth,
            y:this.gameHeight-this.offset-this.height
        };
        this.speed = 8;
       
        this.audio = new Audio("./ta_ge_kotaiko02.mp3");
    }
    //二つの円：中心座標（x1,y1）、半径r1の円と、中心が（x2,y2）で半径r2の円が接触したかどうかの判定
    checkHit(x1,y1,r1,x2,y2,r2){
        var a = x2-x1;
        var b = y2-y1;
        var r = r1+r2;
        return r*r >= a*a+b*b;

    }
    //爆弾の位置が画面外かどうかの判定
    offScreen(){
        if(this.position.x <= -this.width){
            
            return true;
        }else{
            return false;
        }
    }

    update(deltaTime){
        this.position.x -= this.speed;
    }

    draw(ctx){
        /*ctx.beginPath();
        ctx.arc(this.position.x+this.r,this.position.y+this.r,this.r,0,2*Math.PI);
        ctx.stroke();*/
        
        ctx.drawImage(this.image,this.position.x,this.position.y,this.width,this.height);
    }
}