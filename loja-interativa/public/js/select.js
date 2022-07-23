$('#fabricante-select').change(function (event) {

    event.preventDefault();

    const fabricante = $('#fabricante-select').val();

    const categorias = [$('.categorias').val()];

    console.log(categorias);
});