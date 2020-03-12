$("#iniciar_quiz").click(function () {
  var id_tema = $("#iniciar_quiz").val();
  //console.log(id_tema);

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: "./examenes/" + id_tema,
    dataType: 'json',
    type: "GET",
    data: id_tema,
    contentType: false,
    processData: false,
    error: function () {
      console.log('entrom a error');
    },
    success: function (data) {
      console.log('entro a la funcion');

    }

  });
});

/*let preguntas = [
  {
    id: 1,
    pregunta: "¿Cuanto tiempo tardas?",
    respuesta: "Poco",
    opciones: [
      "Poco",
      "Muy poco",
      "Mucho",
      "Extremo"
    ]
  },
];*/


/*let preguntas = [
  {
    id: 1,
    pregunta: "¿Puntualidad del ejecutivo?",
    respuesta: "Puntual",
    opciones: [
      "Puntual",
      "Despues de 10 min",
      "Despues de 15 min",
      "mas de 15 minutos"
    ]
  },
  {
    id: 2,
    pregunta: "¿Como fue la atención del ejecutivo?",
    respuesta: "Excelente",
    opciones: [
      "Excelente",
      "Buena",
      "Mala",
      "Ninguna"
    ]
  },
  {
    id: 3,
    pregunta: "¿Que dominio tiene de la platica el ejecutivo?",
    respuesta: "Si",
    opciones: [
      "Si",
      "No",
      "Ninguno dominio",
      "No especifico"
    ]
  }
];*/

/*let pregunta_count = 0;
let points = 0;

window.onload = function() {
  show(pregunta_count);

};

function next() {
  // si la pregunta es la última, redirige a la página final
  if (pregunta_count == preguntas.length - 1) {
    sessionStorage.setItem("time", time);
    clearInterval(mytime);
    location.href = "fin_examen";
  }
  console.log(pregunta_count);

  let user_respuesta = document.querySelector("li.option.active").innerHTML;

  // verifica si la respuesta es correcta o incorrecta
  if (user_respuesta == preguntas[pregunta_count].respuesta) {
    points += 10;
    sessionStorage.setItem("points", points);
  }
  console.log(points);

  pregunta_count++;
  show(pregunta_count);
}

function show(count) {
  let pregunta = document.getElementById("preguntas");
  let [first, second, third, fourth] = preguntas[count].opciones;

  pregunta.innerHTML = `
  <h2>P${count + 1}. ${preguntas[count].pregunta}</h2>
   <ul class="option_group">
  <li class="option">${first}</li>
  <li class="option">${second}</li>
  <li class="option">${third}</li>
  <li class="option">${fourth}</li>
</ul> 
  `;
  toggleActive();
}

function toggleActive() {
  let option = document.querySelectorAll("li.option");
  for (let i = 0; i < option.length; i++) {
    option[i].onclick = function() {
      for (let i = 0; i < option.length; i++) {
        if (option[i].classList.contains("active")) {
          option[i].classList.remove("active");
        }
      }
      option[i].classList.add("active");
    };
  }
}*/
