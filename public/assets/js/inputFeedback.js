(() => {
  // Ativa o modo restrito do JavaScript, ajudando a evitar erros silenciosos.
  "use strict";

  // Seleciona todos os formulários que possuem a classe "needs-validation".
  // Essa classe é usada pelo Bootstrap para aplicar o estilo de validação customizada.
  const forms = document.querySelectorAll(".needs-validation");

  // Converte a NodeList (Lista de Nodes) em array e percorre cada formulário.
  Array.from(forms).forEach((form) => {
    // Adiciona um listener para o evento "submit" do formulário.
    form.addEventListener(
      "submit",
      (event) => {
        // Verifica se o formulário é válido de acordo com as regras HTML5.
        // Se não for, impede o envio (preventDefault) e bloqueia a propagação do evento.
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        // Adiciona a classe "was-validated", que faz o Bootstrap aplicar os estilos visuais de feedback (verde/vermelho) nos campos.
        form.classList.add("was-validated");
      },
      false // Captura na fase de bubbling (padrão).
    );
  });
})();
