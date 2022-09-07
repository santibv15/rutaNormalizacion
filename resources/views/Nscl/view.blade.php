@extends('layouts.app')

@section('contenido')

    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Titulo</th>
                                        <th>Codigo</th>
                                        <th>Version</th>
                                        <th>Mesa</th>
                                        <th>Estado producto</th>
                                        <th>Centro Formacion</th>
                                        <th>Categoria</th>
                                        <th>Fecha Publicación</th>
                                        <th>Fecha Revisión</th>
                                       <th>Fecha Aprobación</th>
                                       <th>Numero Aprobación</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
            </section>
            <!--/ Basic table -->


        </div>
    </div>

@include('layouts.Footer')
<script>
  function borrar(id) {
    var url2 ='{{route('DeleteNscl','id')}}';
    url2 = url2.replace('id', id);
    location.href=url2;
  }


</script>
<script>

$(function () {
  'use strict';

  var dt_basic_table = $('.datatables-basic'),
    dt_date_table = $('.dt-date'),
    dt_complex_header_table = $('.dt-complex-header'),
    dt_row_grouping_table = $('.dt-row-grouping'),
    dt_multilingual_table = $('.dt-multilingual'),
    assetPath = 'app-assets/';

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }

  if (dt_basic_table.length) {
    var dt_basic = dt_basic_table.DataTable({
      ajax: '{{ route('listaNscl') }}',
      columns: [
            { data: 'id' },
            { data: 'titulo' },
            { data: 'codigo_nscl' },
            {data: 'version'},
            { data:'nombre_sector' },
            {data: 'tipo_estado'},
            { data: 'nombre' },
            { data: 'tipo_categoria' },
            {data: 'fecha_publicacion'},
            {data: 'fecha_revision'},
            {data: 'fecha_aprobacion'},
            {data: 'n_aprobacion'},
            { data: 'Acciones' },
            
          ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          orderable: false,
          responsivePriority: 2,
          targets: 0
        },
        {
          // Actions
          targets: -1,
          orderable: false,
          render: function (data, type, full, meta) {

            var id = full ['id'];
            var documento = full ['documento']
            var url = '{{route('UpdateNscl', 'id')}}';
            url = url.replace('id', id);
            var url2= '{{route('DeleteNscl','id')}}';
            url2 = url2.replace('id', id);
            var pdf = '{{asset('storage/' . 'documento')}}';
            pdf = pdf.replace('documento', documento);
            
           
            return (
              '<div class="d-inline-flex">' +
              '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
              feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
              '</a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
              '<a href="javascript:;" class="dropdown-item">' +
              feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
              'Detalles</a>' +

              '<a href="'+pdf+'" class="dropdown-item">' +
              feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
              'descargar</a>' +

              '<a onclick="borrar('+id+')" class="dropdown-item delete-record">' +
              feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
              'Borrar</a>' +
              '</div>' +
              '</div>' +
              '<a href="'+url+'" class="item-edit">' +
              feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
              '</a>'
            );
          }
        }
      ],
      order: [[2, 'desc']],
      dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 7,
      lengthMenu: [7, 10, 25, 50, 75, 100],
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-outline-secondary dropdown-toggle me-2',
          text: feather.icons['share'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
          buttons: [
            {
              extend: 'print',
              text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'csv',
              text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'excel',
              text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'pdf',
              text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'copy',
              text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            }
          ],
        },
      ],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== ''
                ? '<tr data-dt-row="' +
                    col.rowIdx +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
          }
        }
      },
      language: {
            "lengthMenu": "Mostrando _MENU_ registros por pagina",
            "zeroRecords": "No se encontraros registros",
            "info": "Mostrando page _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros con esos parametros",
            "infoFiltered": "(Filtrados de _MAX_ datos)",
            "search": "Buscar Datos",
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
    $('div.head-label').html('<h6 class="mb-0">Listado de Programas</h6>');
  }

  // Flat Date picker
  if (dt_date_table.length) {
    dt_date_table.flatpickr({
      monthSelectorType: 'static',
      dateFormat: 'm/d/Y'
    });
  }
  $('.datatables-basic tbody').on('click', '.delete-record', function () {
    dt_basic.row($(this).parents('tr')).remove().draw();
  });

});

</script>
@endsection















{{-- @extends('layouts.app')

@section('contenido')

<div class="ui success mesagge">
   <i class="close icon"></i>
   <div class="header">
      {{session('hecho')}}
   </div>
</div>

<table class="table">
   <thead>
     <tr>
        <th scope="col">titulo </th>
       <th scope="col">codigo</th>

       <th scope="col">mesa </th>
       <th scope="col">estado producto</th>
       <th scope="col">centro formacion</th>
       <th scope="col">categoria</th>
       <th scope="col">descargar</th>
       <th scope="col">opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $nscl)
          
      
     <tr>

        <td>{{$nscl->titulo}}</td>
        <td>{{$nscl->codigo_nscl}}</td>
        <td>{{$nscl->nombre_sector}}</td>
        <td>{{$nscl->tipo_estado}}</td>
        <td>{{$nscl->nombre}}</td>
        <td>{{$nscl->tipo_categoria}}</td>
        <td><a href="{{asset('Storage/'.$nscl,documento)}}"> <i class='bx bxs-downvote'></i></a></td>
       
        <td>
            <a href="{{route('DeleteNscl', $nscl->id)}}"> <i class='bx bxs-message-square-x'></i></a>
            <a href="{{route('UpdateNscl', $nscl->id)}}"><i class='bx bx-rotate-right'></i></a> 
             {{-- <i class='bx bxs-bullseye'></i> --}}
  