@extends('layouts.master')

@section('title')
    Show Judicial
@stop

@section('css')

@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
   <section class="content-header">
    <h1>
      Judicials
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('judicials.index') }}">Judicials</a></li>
      <li class="active">Show Judicial</li>
    </ol>
   </section>
   <section class="content">
    <div class="row">
     <div class="col-xs-12">
     <div class="box">
      <div class="box-header">
           <h3 class="box-title">Judicials Details</h3><br><br>
      </div>
      <br>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Judicial information</a></li>
          <li><a href="#tab_2" data-toggle="tab">Attachments</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <table class="table table-striped" style="text-align:center">
                <tbody>
                    <tr>
                        <th scope="row">Judicial Name</th>
                        <td>{{ $judicials->name }}</td>
                        <th scope="row">Statement</th>
                        <td>{{ $judicials->statement }}</td>
                        <th scope="row">Council or Court</th>
                        <td>{{ $judicials->council_or_court }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Case Number</th>
                        <td>{{ $judicials->case_number }}</td>
                        <th scope="row">Index Number</th>
                        <td>{{ $judicials->index_number }}</td>
                        <th scope="row">Session Day</th>
                        <td>{{ $judicials->session_day }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Room</th>
                        <td>{{ $judicials->room }}</td>
                        <th scope="row">Investigation Number</th>
                        <td>{{ $judicials->investigation_number }}</td>
                        <th scope="row">Prosecution Number</th>
                        <td>{{ $judicials->prosecution_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Deposit Day</th>
                        <td>{{ $judicials->deposit_date }}</td>
                        <th scope="row">Deposit Number</th>
                        <td>{{ $judicials->deposit_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Advance Amount</th>
                        <td>{{ $judicials->advance_amount }}</td>
                        <th scope="row">Amount Invoice</th>
                        <td>{{ $judicials->amount_invoice }}</td>
                        <th scope="row">Estimated Amount</th>
                        <td>{{ $judicials->estimated_amount }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Note</th>
                        <td>{{ $judicials->note }}</td>
                    </tr>
                </tbody>
            </table>
          </div>

          <div class="tab-pane" id="tab_2">
            <div class="card-body">
                <p class="text-danger">* Attachment Format : jpg , jpeg , png , pdf , docx , xlsx , zip , txt </p>
                  <h5 class="card-title">Add Attachments</h5>
                  <form method="POST" action="{{ route('UploadAttachment') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="custom-file">
                      <input type="file" accept=".pdf, .docx, .xlsx, .zip, .txt, .mp4, .mp3, .jpg, .png, image/jpeg, image/png" name="photos[]" multiple required>
                      <input type="hidden" name="judicial_name" value="{{ $judicials->name }}">
                      <input type="hidden" name="judicial_id" value="{{ $judicials->id }}">
                    </div>
                    <br>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
            </div>
            <br>
            <table class="table center-aligned-table mb-0 table-hover">
                <thead>
                    <tr class="text-dark">
                        <th>#</th>
                        <th>File Name</th>
                        <th>Created At</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($judicials->attachments as $attachment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attachment->filename }}</td>
                        <td>{{ $attachment->created_at->diffForHumans() }}</td>
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
                      <th>File Name</th>
                      <th>Created At</th>
                      <th>Operation</th>
                    </tr>
                </tfoot>
            </table>
          </div>

        </div>
        <div class="modal-footer">
            <a href="{{ route('judicials.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Back</a>
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
