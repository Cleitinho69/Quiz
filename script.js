var resposta = [...document.querySelectorAll(".resposta")];
const caixa = [...document.getElementsByName("resposta")];
var el_certo = document.getElementById("certo");
var respondeu = false;
var vez = 1;
//aqui serve para desabilitar as caixas
var desabilitar = () => {
  resposta.map((el) => {
    el.children[0].disabled = true;
  });
};

//posicionar a dificuldade
var dificul = document.querySelector()
//aqui serve para selecionar as caixas
resposta.map((el) => {
  el.addEventListener("click", (check) => {
    respondeu = true;
    check = check.target;
    var habilitar = check.children[0].disabled;
    //aqui serve para ver se vc selecionou a certa ou errada
    const res = check.children[0].defaultValue;
    //aqui é para ativar as coisas
    if (res == "certo" && habilitar == false) {
      check.classList.add("certo");
      desabilitar();
    } else if (res == "errado" && habilitar == false) {
      //serve apenas para mostrar qual era a certa
      el_certo.classList.add("certo2");
      check.classList.add("errado");
      desabilitar();
    }
  });
});

var posi_left = caixa[0].offsetLeft;
var segundos = document.querySelector("#timer p");
var timer = document.querySelector("#timer div");
var sec = 10;

//diminuição da barra de tempo
timer.style.width = 0;

//gambiarra para deixar a barra de tempo na posição certa em qualquer tela
timer.style.left = posi_left + "px";

//escrever o tempo inicial
segundos.innerText = sec;
//contar o tempo
setInterval(() => {
  if (sec > 0 && respondeu == false) {
    //animação da barra de tempo
    if (sec == 9) {
      timer.style.backgroundColor = "rgb(255, 238, 2)";
    } else if (sec == 7) {
      timer.style.backgroundColor = "rgb(255, 123, 0)";
    } else if (sec == 5) {
      timer.style.backgroundColor = "red";
    }
    //contagem do tempo diminuindo
    sec--;
    //atualizar o tempo no display
    segundos.innerText = sec;
    //quando o tempo acabar
    if (segundos.innerText == "0") {
      setTimeout(() => {
        //mostrar qual é a resposta certa
        el_certo.classList.add("certo");
        desabilitar();
        setTimeout(() => {
          alert("Tempo esgotado!");
          if (window.location.href == "index.php") {
            window.location.replace("pagina2.php");
          } else if (window.location.href == "pagina2.php") {
            window.location.replace("pagina3.php");
          } else if (window.location.href == "pagina3.php") {
            window.location.replace("pagina4.php");
          } else if (window.location.href == "pagina4.php") {
            window.location.replace("pagina5.php");
          } else if (window.location.href == "pagina5.php") {
            window.location.replace("pagina6.php");
          } else if (window.location.href == "pagina6.php") {
            window.location.replace("pagina7.php");
          } else if (window.location.href == "pagina7.php") {
            window.location.replace("pagina8.php");
          } else if (window.location.href == "pagina8.php") {
            window.location.replace("pagina9.php");
          } else if (window.location.href == "pagina9.php") {
            window.location.replace("pagina10.php");
          } else if (window.location.href == "pagina10.php") {
            window.location.replace("pagina11.php");
          } else if (window.location.href == "pagina11.php") {
            window.location.replace("pagina12.php");
          } else if (window.location.href == "pagina12.php") {
            window.location.replace("pagina13.php");
          } else if (window.location.href == "pagina13.php") {
            window.location.replace("pagina14.php");
          } else if (window.location.href == "pagina14.php") {
            window.location.replace("pagina15.php");
          }
        }, 100);
      }, 1000);
    }
  } else if (vez == 1) {
    vez--;
    timer.backgroundColor = timer.backgroundColor;
    timer.style.width = timer.clientWidth + "px";
    if (el_certo.classList[1] == "certo") {
      alert("Parabens você acertou!");
    } else if (!el_certo.classList[1] == "") {
      alert("Que pena, você errou ");
    }
    if (window.location.href == "index.php") {
      window.location.replace("pagina2.php");
    } else if (window.location.href == "pagina2.php") {
      window.location.replace("pagina3.php");
    } else if (window.location.href == "pagina3.php") {
      window.location.replace("pagina4.php");
    } else if (window.location.href == "pagina4.php") {
      window.location.replace("pagina5.php");
    } else if (window.location.href == "pagina5.php") {
      window.location.replace("pagina6.php");
    } else if (window.location.href == "pagina6.php") {
      window.location.replace("pagina7.php");
    } else if (window.location.href == "pagina7.php") {
      window.location.replace("pagina8.php");
    } else if (window.location.href == "pagina8.php") {
      window.location.replace("pagina9.php");
    } else if (window.location.href == "pagina9.php") {
      window.location.replace("pagina10.php");
    } else if (window.location.href == "pagina10.php") {
      window.location.replace("pagina11.php");
    } else if (window.location.href == "pagina11.php") {
      window.location.replace("pagina12.php");
    } else if (window.location.href == "pagina12.php") {
      window.location.replace("pagina13.php");
    } else if (window.location.href == "pagina13.php") {
      window.location.replace("pagina14.php");
    } else if (window.location.href == "pagina14.php") {
      window.location.replace("pagina15.php");
    }
  }
}, 1000);
