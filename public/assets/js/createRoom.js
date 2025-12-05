const btnNextStep = document.querySelector('.btnNextStep');
const firstStep = document.querySelector('.firstStep');
const secondStep = document.querySelector('.secondStep');
const container = document.getElementById('questionsContainer');
const inputQtd = document.getElementById('n_questions');

let totalQuestions = 0;
let currentQuestionIndex = 0;

const generateQuestionBlock = (i, num) => {
  const total = parseInt(inputQtd.value);
  return `
            <div class="question-page question-${i} mb-4 p-0" data-index="${i}">
                <h4 class="mb-3">Pergunta ${num} / ${total}</h4>

                <div class="mb-3">
                    <label class="text-white" for="question-${i}">Enunciado:</label>
                    <input id="question-${i}" type="text" name="perguntas[${i}][titulo]" class="mb-2 text-white" required />
                </div>

                <div class="mb-3">
                    <label for="difficulty-${i}">Dificuldade:</label>
                    <select id="difficulty-${i}" name="perguntas[${i}][nivel]" class="p-2 text-white">
                        <option value="1">Fácil</option>
                        <option value="2">Médio</option>
                        <option value="3">Difícil</option>
                    </select>
                </div>

                <label class="mb-2">Respostas (Marque a correta):</label>

                <div class="input-group mb-2">
                    <div class="input-group-text radio"><input type="radio" name="perguntas[${i}][correta]" value="0" required /></div>
                    <input type="text" name="perguntas[${i}][respostas][0]" class="p-2 text-white" required />
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-text radio"><input type="radio" name="perguntas[${i}][correta]" value="1" /></div>
                    <input type="text" name="perguntas[${i}][respostas][1]" class="p-2 text-white" required />
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-text radio"><input type="radio" name="perguntas[${i}][correta]" value="2" /></div>
                    <input type="text" name="perguntas[${i}][respostas][2]" class="p-2 text-white" required />
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-text radio"><input type="radio" name="perguntas[${i}][correta]" value="3" /></div>
                    <input type="text" name="perguntas[${i}][respostas][3]" class="p-2 text-white" required />
                </div>
            </div>
        `;
};

const displayCurrentQuestion = () => {
  document.querySelectorAll('.question-page').forEach(q => q.classList.add('d-none'));

  const currentQuestion = document.querySelector(`.question-${currentQuestionIndex}`);
  if (currentQuestion) {
    currentQuestion.classList.remove('d-none');
  }

  const btnNext = document.getElementById('btnNextQuestion');
  const btnSave = document.getElementById('btnSaveRoom');
  const btnPrev = document.getElementById('btnPrevQuestion');

  if (currentQuestionIndex === totalQuestions - 1) {
    if (btnNext) btnNext.classList.add('d-none');
    if (btnSave) btnSave.classList.remove('d-none');
  } else {
    if (btnNext) btnNext.classList.remove('d-none');
    if (btnSave) btnSave.classList.add('d-none');
  }

  if (btnPrev) {
    btnPrev.classList.toggle('d-none', currentQuestionIndex === 0);
  }
};

btnNextStep.addEventListener('click', () => {
  const qtd = parseInt(inputQtd.value);

  if (qtd > 0) {
    totalQuestions = qtd;
    currentQuestionIndex = 0;
    container.innerHTML = '';

    for (let i = 0; i < qtd; i++) {
      container.innerHTML += generateQuestionBlock(i, i + 1);
    }

    container.innerHTML += `
                <div class="d-flex justify-content-center mt-4 gap-4">
                    <button type="button" class="btn btn-primary p-3 d-none btnPrevQuestion" id="btnPrevQuestion">VOLTAR PERGUNTA</button>
                    
                    <button type="button" class="btn btn-primary p-3 btnNextQuestion" id="btnNextQuestion">PRÓXIMA PERGUNTA</button>
                    
                    <button type="submit" class="btn btn-primary p-3 d-none btnSaveRoom" id="btnSaveRoom">SALVAR SALA</button>
                </div>
            `;

    firstStep.classList.add('d-none');
    secondStep.classList.remove('d-none');

    displayCurrentQuestion();

    document.getElementById('btnNextQuestion').addEventListener('click', showNextQuestion);
    document.getElementById('btnPrevQuestion').addEventListener('click', showPrevQuestion);
  } else {
    alert('Por favor, insira um número de perguntas maior que zero.');
  }
});

const showNextQuestion = () => {
  if (currentQuestionIndex < totalQuestions - 1) {
    currentQuestionIndex++;
    displayCurrentQuestion();
  }
};

const showPrevQuestion = () => {
  if (currentQuestionIndex > 0) {
    currentQuestionIndex--;
    displayCurrentQuestion();
  } else if (currentQuestionIndex === 0) {
    secondStep.classList.add('d-none');
    firstStep.classList.remove('d-none');
  }
};
