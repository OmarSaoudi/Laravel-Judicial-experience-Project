@extends('layouts.master')

@section('title')
    {{ trans('Judicial_trans.show_judicial') }}
@stop

@section('css')

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
      <li><a href="{{ route('judicials.index') }}">{{ trans('Judicial_trans.judicials') }}</a></li>
      <li class="active">{{ trans('Judicial_trans.show_judicial') }}</li>
    </ol>
   </section>
   <section class="content">
    <div class="row">
     <div class="col-xs-12">
     <div class="box">
      <div class="box-header">
           <h3 class="box-title">{{ trans('Judicial_trans.judicial_details') }}</h3><br><br>
      </div>
      <br>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">{{ trans('Judicial_trans.judicial_information') }}</a></li>
          <li><a href="#tab_2" data-toggle="tab">{{ trans('Judicial_trans.attachments') }}</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <table class="table table-striped" style="text-align:center">
                <tbody>
                    <tr>
                        <th scope="row">{{ trans('Judicial_trans.name_judicial') }}</th>
                        <td>{{ $judicials->name }}</td>
                        <th scope="row">{{ trans('Judicial_trans.statement') }}</th>
                        <td>{{ $judicials->statement }}</td>
                        <th scope="row">{{ trans('Judicial_trans.council_or_court') }}</th>
                        <td>{{ $judicials->council_or_court }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('Judicial_trans.case_number') }}</th>
                        <td>{{ $judicials->case_number }}</td>
                        <th scope="row">{{ trans('Judicial_trans.index_number') }}</th>
                        <td>{{ $judicials->index_number }}</td>
                        <th scope="row">{{ trans('Judicial_trans.session_day') }}</th>
                        <td>{{ $judicials->session_day }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('Judicial_trans.room') }}</th>
                        <td>{{ $judicials->room }}</td>
                        <th scope="row">{{ trans('Judicial_trans.investigation_number') }}</th>
                        <td>{{ $judicials->investigation_number }}</td>
                        <th scope="row">{{ trans('Judicial_trans.prosecution_number') }}</th>
                        <td>{{ $judicials->prosecution_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('Judicial_trans.deposit_date') }}</th>
                        <td>{{ $judicials->deposit_date }}</td>
                        <th scope="row">{{ trans('Judicial_trans.deposit_number') }}</th>
                        <td>{{ $judicials->deposit_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('Judicial_trans.advance_amount') }}</th>
                        <td>{{ $judicials->advance_amount }}</td>
                        <th scope="row">{{ trans('Judicial_trans.amount_invoice') }}</th>
                        <td>{{ $judicials->amount_invoice }}</td>
                        <th scope="row">{{ trans('Judicial_trans.estimated_amount') }}</th>
                        <td>{{ $judicials->estimated_amount }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('Judicial_trans.note') }}</th>
                        <td>{{ $judicials->note }}</td>
                    </tr>
                </tbody>
            </table>
          </div>

          <div class="tab-pane" id="tab_2">
            <div class="card-body">
                <p class="text-danger">* {{ trans('Judicial_trans.attachment_format') }} : jpg , jpeg , png , pdf , docx , xlsx , zip , txt </p>
                  <h5 class="card-title">{{ trans('Judicial_trans.add_attachments') }}</h5>
                  <form method="POST" action="{{ route('UploadAttachment') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="custom-file">
                      <input type="file" accept=".pdf, .docx, .xlsx, .zip, .txt, .mp4, .mp3, .jpg, .png, image/jpeg, image/png" name="photos[]" multiple required>
                      <input type="hidden" name="judicial_name" value="{{ $judicials->name }}">
                      <input type="hidden" name="judicial_id" value="{{ $judicials->id }}">
                    </div>
                    <br>
                      <button type="submit" class="btn btn-primary">{{ trans('Judicial_trans.save_changes') }}</button>
                  </form>
            </div>
            <br>
            <table class="table center-aligned-table mb-0 table-hover">
                <thead>
                    <tr class="text-dark">
                        <th>#</th>
                        <th>{{ trans('Judicial_trans.file_name') }}</th>
                        <th>{{ trans('Judicial_trans.created_at') }}</th>
                        <th>{{ trans('Judicial_trans.operation') }}</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($judicials->attachments as $attachment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attachment->filename }}</td>
                        <td>{{ $attachment->created_at->format('Y-m-d  H:i:s');  }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ url('DownloadAttachment') }}/{{ $attachment->attachmentable->name }}/{{ $attachment->filename }}" role="button"><i class="fa fa-download"></i></a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#DeleteAttachment{{ $attachment->id }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                  @include('pages.judicials.DeleteImg')
                  @endforeach
                </tbody>
                <tfoot>
                    <tr class="text-dark">
                      <th>#</th>
                      <th>{{ trans('Judicial_trans.file_name') }}</th>
                      <th>{{ trans('Judicial_trans.created_at') }}</th>
                      <th>{{ trans('Judicial_trans.operation') }}</th>
                    </tr>
                </tfoot>
            </table>
          </div>

        </div>
        <div class="modal-footer">
            <a href="{{ route('judicials.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> {{ trans('Judicial_trans.back') }}</a>
        </div>
      </div>
     </div>
    </div>
    </div>
   </section>
</div>

@endsection


@section('scripts')

@endsection
