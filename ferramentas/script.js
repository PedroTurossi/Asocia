const tmpPom = 25*60;
const tmpDsc = 5*60;

let tempoPomodoro = tmpPom;
let tempoDescanso = tmpDsc;
let intervalo;
let pausado = false;

function iniciarPomodoro() {
  if (pausado) {
    pausado = false;
  } else {
    clearInterval(intervalo);
    tempoPomodoro = tmpPom;
  }

  intervalo = setInterval(() => {
    if (tempoPomodoro > 0) {
      tempoPomodoro--;
      exibirTempo(tempoPomodoro, tmpPom);
    } else {
      clearInterval(intervalo);
      document.getElementById('somAl').play();
      setTimeout(() => {
        alert("Acabou o tempo, hora de descansar!");
        iniciarDescanso(); // Inicia o descanso após o Pomodoro
      }, 2000);
    }
  }, 1000); // Atualiza a cada segundo
}

function iniciarDescanso() {
  intervalo = setInterval(() => {
    if (tempoDescanso > 0) {
      tempoDescanso--;
      exibirTempo(tempoDescanso, tmpDsc);
    } else {
      clearInterval(intervalo);
      document.getElementById('somAl').play();
        setTimeout(() => {
          alert("Acabou o tempo, hora de descançar!");
          iniciarPomodoro(); // Reinicia o Pomodoro após o descanso
        }, 2000);
    }
  }, 1000); // Atualiza a cada segundo
}

function exibirTempo(segundos, tmpto) {
    const minutos = Math.floor(segundos / 60);
    const segundosRestantes = segundos % 60;
    const formatoTempo = `${minutos.toString().padStart(2, '0')}:${segundosRestantes.toString().padStart(2, '0')}`;
    document.getElementById('timerDisplay').textContent = formatoTempo;
  
    const circulo = document.querySelector('.progress-ring-circle');
    const comprimentoCircunferencia = circulo.getTotalLength();
    circulo.style.strokeDasharray = comprimentoCircunferencia;
  
    const percentual = segundos / (tmpto); // Muda esse valor se quiser relacionar a outro tempo
    circulo.style.strokeDashoffset = comprimentoCircunferencia * (1 - percentual);
    circulo.classList.add('progress');
}

function pausarTimer() {
  clearInterval(intervalo);
  pausado = true; // Define a flag de pausa como verdadeira
}