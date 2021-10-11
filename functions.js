"use strict";

document.addEventListener("DOMContentLoaded", function() {
  //console.log(audio_clap1);
  
});

document.addEventListener('keydown', keyDownHandler);
document.addEventListener('keyup', keyUpHandler);

function keyDownHandler(event) {
  console.log(event.code);

  if (event.code === 'KeyQ') {
    kick.play();
  }
  if (event.code === 'KeyW') {
    hat.play();
  }
  if (event.code === 'KeyE') {
    clap.play();
  }
  if (event.code === 'KeyR') {
    snare.play();
  }
}

function keyUpHandler(event) {
  //audio_clap1.pause();
  //audio_clap1.currentTime = 0;
  if (event.code === 'KeyQ') {
    kick.pause();
    kick.currentTime = 0;
  }
  if (event.code === 'KeyW') {
    hat.pause();
    hat.currentTime = 0;
  }
  if (event.code === 'KeyE') {
    clap.pause();
    clap.currentTime = 0;
  }
  if (event.code === 'KeyR') {
    snare.pause();
    snare.currentTime = 0;
  }

}

let kick = new Audio('/resources/wav/kick/P - NNF V2 KICK 2 (ZDRAVSTVUITE).wav');
let hat = new Audio('/resources/wav/hat/P - NNF V2 HI HAT 10.wav');
let clap = new Audio('/resources/wav/clap/P - NNF V2 CLAP 3 (EGOIST).wav');
let snare = new Audio('/resources/wav/snare/P - NNF V2 SNARE REV 1 (HOOKAH).wav');
//let audio_clap1 = new Audio('/resources/wav/clap/P - NNF V2 CLAP 5.wav');