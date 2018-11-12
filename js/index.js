function salvaCadastro() {
  var habilidades = [
    php = $('#check-habilidades-1').prop('checked') ? 1 : 0,
    java = $('#check-habilidades-2').prop('checked') ? 1 : 0,
    c = $('#check-habilidades-3').prop('checked') ? 1 : 0,
    delphi = $('#check-habilidades-4').prop('checked') ? 1 : 0,
    vba = $('#check-habilidades-5').prop('checked') ? 1 : 0,
    plsql = $('#check-habilidades-6').prop('checked') ? 1 : 0,
    webservices = $('#check-habilidades-7').prop('checked') ? 1 : 0
  ];

  $.ajax({
    type: 'POST',
    url: './php/controllers/cadastro/salvar',
    data: {
      id: $('#id').val(),
      nome: $('#nome').val(),
      cpf: $('#cpf').val(),
      dataNascimento: $('#data-nascimento').val(),
      email: $('#email').val(),
      habilidades: habilidades
    },
    success: function (data) {
      alert('Salvo com sucesso!');
      location.reload();
    }
  });
}

function listarUnico() {
  $.ajax({
    type: 'POST',
    url: './php/controllers/cadastro/listarUnico',
    data: {
      id: $('#id').val(),
    },
    success: function (data) {
      // metodo que irá montar listagem na tela; Ex.: montaListagem(data);
    }
  });
}

function listarTodos() {
  $.ajax({
    type: 'POST',
    url: './php/controllers/cadastro/listarTodos',
    success: function (data) {
      // metodo que irá montar listagem na tela; Ex.: montaListagem(data);
    }
  });
}

function montaListagem(dados) {
  $.each(dados, function (index, dado) {
    //Aqui irá ser preenchida a table do html sem precisar injetar a view.
  });
}
