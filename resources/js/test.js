$("#tabla_test").DataTable({
    "responsive": true,
    "autoWidth" : false,
    "serverSide" : true,
    "colReorder": true,
    "ajax" : {
        "url" : "../public/getdata",
        "type": "GET"
    },
    "columns" :[
        {"data" : "id"},
        {"data" : "nombre"},
        {"data" : "apellido"},
        {"data" : "telefono"},
        {"data" : "email"},
        {"data" : "direccion"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-info btn-sm btnAddListDespacho'><i class='fas fa-reply'></i></button></div></div>"}
    ]
})

