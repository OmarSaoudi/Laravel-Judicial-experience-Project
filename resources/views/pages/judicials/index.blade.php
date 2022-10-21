@extends('layouts.master')

@section('title')
    {{ trans('Judicial_trans.judicials') }}
@stop

@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        {{ trans('Judicial_trans.judicials') }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('Judicial_trans.dashboard') }}</a></li>
      <li class="active">{{ trans('Judicial_trans.judicials') }}</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{ trans('Judicial_trans.judicials_list') }} <small>{{ $judicials->count() }}</small></h3>
            <br><br>
            <a href="judicials/create" class="btn btn-success"><i class="fa fa-plus"></i> {{ trans('Judicial_trans.add') }}</a>
            <button type="button" class="btn btn-danger" id="btn_delete_all"><i class="fa fa-trash"></i> {{ trans('Judicial_trans.delete_all') }}</button>
          <!-- /.box-header -->
          <div class="box-body" id="datatable">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th><input type="checkbox" name="select_all" id="example-select-all" onclick="CheckAll('box1', this)"></th>
                <th>#</th>
                <th>{{ trans('Judicial_trans.name_judicial') }}</th>
                <th>{{ trans('Judicial_trans.statement') }}</th>
                <th>{{ trans('Judicial_trans.council_or_court') }}</th>
                <th>{{ trans('Judicial_trans.index_number') }}</th>
                <th>{{ trans('Judicial_trans.session_day') }}</th>
                <th>{{ trans('Judicial_trans.room') }}</th>
                <th>{{ trans('Judicial_trans.prosecution_number') }}</th>
                <th>{{ trans('Judicial_trans.deposit_date') }}</th>
                <th>{{ trans('Judicial_trans.deposit_number') }}</th>
                <th>{{ trans('Judicial_trans.operation') }}</th>
              </tr>
              </thead>
              <tbody>
              @foreach($judicials as $judicial)
              <tr>
                <td><input type="checkbox"  value="{{ $judicial->id }}" class="box1"></td>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $judicial->name }}</td>
                <td>{{ $judicial->statement }}</td>
                <td>{{ $judicial->council_or_court }}</td>
                <td>{{ $judicial->index_number }}</td>
                <td>{{ $judicial->session_day }}</td>
                <td>{{ $judicial->room }}</td>
                <td>{{ $judicial->prosecution_number }}</td>
                <td>{{ $judicial->deposit_date }}</td>
                <td>{{ $judicial->deposit_number }}</td>
                <td>
                  <a href="{{ route('judicials.edit',$judicial->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-info btn-sm" href="{{ route('judicials.show',$judicial->id) }}"><i class="fa fa-eye"></i></a>
                  <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteJudicial{{ $judicial->id }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @include('pages.judicials.delete')
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th><input type="checkbox" name="select_all" id="example-select-all" onclick="CheckAll('box1', this)"></th>
                <th>#</th>
                <th>{{ trans('Judicial_trans.name_judicial') }}</th>
                <th>{{ trans('Judicial_trans.statement') }}</th>
                <th>{{ trans('Judicial_trans.council_or_court') }}</th>
                <th>{{ trans('Judicial_trans.index_number') }}</th>
                <th>{{ trans('Judicial_trans.session_day') }}</th>
                <th>{{ trans('Judicial_trans.room') }}</th>
                <th>{{ trans('Judicial_trans.prosecution_number') }}</th>
                <th>{{ trans('Judicial_trans.deposit_date') }}</th>
                <th>{{ trans('Judicial_trans.deposit_number') }}</th>
                <th>{{ trans('Judicial_trans.operation') }}</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<!-- Delete All -->
<div class="modal fade" id="delete_all_j">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
              <h4 class="modal-title">{{ trans('Judicial_trans.delete_all_judicials') }}</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route('delete_all_j') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <p>{{ trans('Judicial_trans.Are_sure_of_the_deleting_process_?') }}</p><br>
                        <input class="text" type="hidden" id="delete_all_id" name="delete_all_id" value=''>
                    </div>

                    <div class="modal-footer">
                         <button type="submit" class="btn btn-danger">{{ trans('Judicial_trans.save_changes') }}</button>
                         <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{ trans('Judicial_trans.close') }}</button>
                    </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- End Delete All -->

@endsection


@section('scripts')
<script src="{{ URL::asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
<script type="text/javascript">
    $(function() {
       $("#btn_delete_all").click(function() {
           var selected = new Array();
           $("#datatable input[type=checkbox]:checked").each(function() {
               selected.push(this.value);
           });

           if (selected.length > 0) {
               $('#delete_all_j').modal('show')
               $('input[id="delete_all_id"]').val(selected);
           }
       });
    });
</script>
@endsection
