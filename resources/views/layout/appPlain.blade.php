<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Laravel-@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

     <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css')}}" rel="stylesheet">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')}}"></script>
 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css')}}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css')}}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js')}}"></script>
  </head>
  <body>
       
   		
         <div class="container" style="width: 100%; padding-left: 0px; padding-right: 0px;">
            @yield('content')
    
         
        </div>
        <!-- jQuery -->

    <!-- Bootstrap -->
   <script src="{{'vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{'vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{'vendors/nprogress/nprogress.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{build/js/custom.min.js')}}"></script>

     <script>
$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });

 load_data();

 function load_data(from_date = '', to_date = '')
 {
  $('#order_table').DataTable({
   processing: true,
   serverSide: true,
   ajax: {
    url:'{{ route("daterange.index") }}',
    data:{from_date:from_date, to_date:to_date}
   },
   columns: [
    {
     data:'id_gaji',
     name:'id_gaji'
    },
    {
     data:'nama',
     name:'nama'
    },
    {
     data:'sabtu',
     name:'sabtu'
    },
    {
     data:'senin',
     name:'senin'
    },
     {
     data:'selasa',
     name:'selasa'
    },
     {
     data:'rabu',
     name:'rabu'
    },
     {
     data:'kamis',
     name:'kamis'
    },
     {
     data:'jumat',
     name:'jumat'
    },
     {
     data:'jumlah_barang',
     name:'jumlah_barang'
    },
     {
     data:'cost',
     name:'cost'
    },
    {
     data:'date',
     name:'date'
    }
   ]
  });
 }

 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   $('#order_table').DataTable().destroy();
   load_data(from_date, to_date);
  }
  else
  {
   alert('Both Date is required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  $('#order_table').DataTable().destroy();
  load_data();
 });

});
</script>
    
    </body>

  </html>
