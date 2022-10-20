export class InputHandler{
    constructor(dino){
        document.addEventListener("keydown",event =>{
            switch(event.keyCode){
                case 32: //キーボードの上↑のボタンが押されたとき
                    dino.up();
                    break;
               
            }
        })
addEventListener('touchstart', function(event) {
 dino.up();
})
    }
}