var tblEgreso;
var lenguajeEspanol = {
  searchPlaceholder: "Buscar ingreso",
  sProcessing: "Procesando...",
  sLengthMenu: "Mostrar _MENU_ registros",
  sZeroRecords: "No se encontraron resultados",
  sEmptyTable: "Ningún dato disponible en esta tabla",
  sInfo: "Mostrando la página _PAGE_ de _PAGES_",
  sInfoEmpty: "No hay registros",
  sInfoFiltered: "",
  sInfoPostFix: "",
  sSearch: "Buscar:",
  sUrl: "",
  sInfoThousands: ",",
  sLoadingRecords: "Cargando...",
  oPaginate: {
    sFirst: "Primero",
    sLast: "Último",
    sNext: "Siguiente",
    sPrevious: "Anterior"
  },
  oAria: {
    sSortAscending: ": Activar para ordenar la columna de manera ascendente",
    sSortDescending: ": Activar para ordenar la columna de manera descendente"
  }
};

function init() {
  $(".select2").select2();
  $.post("../controladores/egreso.php?opcion=usuario", {}, function(data) {
    $("#idu").html(data);
  });

  $("#b2").hide();
  listar();
  $("#formEgreso").on("submit", function(e) {
    guardarEgreso(e);
  });
  $("#aa9").addClass("active");
}

function listar() {
  tblEgreso = $("#tblEgreso").DataTable({
    aProcessing: true,
    aServerSide: true,
    destroy: true,
    lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
    language: lenguajeEspanol,
    pagingType: "numbers",
    responsive: "true",
    ajax: {
      url: "../controladores/egreso.php?opcion=listar",
      type: "get",
      dataType: "json",
      error: function(e) {
        console.log(e.responseText);
      }
    },
    bDestroy: true,
    iDisplayLength: 10,
    order: [[4, "desc"]]
  });
}

function agregar() {
  $("#formEgreso")[0].reset();
  $("#idegreso").val("");
  $("#b1").hide();
  $("#b2").show();
  $("#tituloEgreso").text("Agregar egreso");
}

function cancelar() {
  $("#formEgreso")[0].reset();
  $("#idegreso").val("");
  $("#b2").hide();
  $("#b1").show();
}

function guardarEgreso(event) {
  event.preventDefault();
  event.stopPropagation();
  var formData = new FormData($("#formEgreso")[0]);
  $.ajax({
    url: "../controladores/egreso.php?opcion=guardarEgreso",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos) {
      tblEgreso.ajax.reload();
      if (datos) {
        bootbox.alert({
          backdrop: true,
          title: "¡Correcto!",
          message: "Se ejecutó correctamente.",
          size: "small"
        });
        $("#b2").hide();
        $("#b1").show();
      } else {
        bootbox.alert({
          backdrop: true,
          title: "¡Error!",
          message: "No se guardarón los datos.",
          size: "small"
        });
      }
    }
  });
}

function editar(idegreso) {
  $("#formEgreso")[0].reset();
  $("#b1").hide();
  $("#b2").show();
  $("#tituloEgreso").text("Editar egreso");
  $.post(
    "../controladores/egreso.php?opcion=mostrarEgreso",
    { idegreso: idegreso },
    function(data) {
      data = JSON.parse(data);
      $("#idegreso").val(data.idegreso);
      $("#tipo").val(data.tipo);
      $("#descripcion").val(data.descripcion);
      $("#fechahora").val(data.fecha + "T" + data.hora);
      $("#total").val(data.total);
    }
  );
}

function eliminar(idegreso) {
  bootbox.confirm({
    size: "small",
    title: "ELIMINAR",
    backdrop: true,
    message: "¿Está seguro de eliminar a este egreso?",
    buttons: {
      confirm: {
        label: "Si",
        className: "btn-success  btn-sm btn-w"
      },
      cancel: {
        label: "No",
        className: "btn-danger btn-sm btn-w"
      }
    },
    callback: function(result) {
      if (result) {
        $.post(
          "../controladores/egreso.php?opcion=eliminar",
          { idegreso: idegreso },
          function(data) {
            tblEgreso.ajax.reload();
            if (data) {
              bootbox.alert({
                backdrop: true,
                title: "¡Correcto!",
                message: "Egreso eliminado.",
                size: "small"
              });
            } else {
              bootbox.alert({
                backdrop: true,
                title: "¡Error!",
                message: "No se pudo eliminar el egreso.",
                size: "small"
              });
            }
          }
        );
      }
    }
  });
}

function cambiar(id) {
  $.post(
    "../controladores/egreso.php?opcion=mostrarUsuario",
    { id: id },
    function(data) {
      data = JSON.parse(data);
      $("#tipo").val("Pago de salario");
      $("#descripcion").val(
        "Pago de salario del empleado " +
          data.nombre +
          " " +
          data.apellido +
          " con cargo " +
          data.cargo +
          "."
      );
      $("#total").val(data.salario);
    }
  );
}
init();
