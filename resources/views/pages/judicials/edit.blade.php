@extends('layouts.master')

@section('title')
    {{ trans('Judicial_trans.edit_judicial') }}
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
       <li class="active">{{ trans('Judicial_trans.edit_judicial') }}</li>
     </ol>
   </section>

   <section class="content">
      <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">{{ trans('Judicial_trans.edit_judicial') }}</h3>
          </div>
            <div class="box-body">
                    <form action="{{ route('judicials.update','test') }}" method="POST" autocomplete="off">
                        @csrf
                        {{ method_field('PATCH') }}

                        {{-- 1 --}}
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>{{ trans('Judicial_trans.name_judicial') }}</label>
                                 <input type="hidden" value="{{ $judicials->id }}" name="id">
                                 <input type="text" name="name" value="{{ $judicials->name }}" class="form-control" required>
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>{{ trans('Judicial_trans.statement') }}</label>
                                 <input type="text" name="statement" value="{{ $judicials->statement }}" class="form-control" required>
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label>{{ trans('Judicial_trans.council_or_court') }}</label>
                                   <input type="text" name="council_or_court" value="{{ $judicials->council_or_court }}" class="form-control" required>
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 2 --}}
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                               <label>{{ trans('Judicial_trans.case_number') }}</label>
                               <input type="text" name="case_number" value="{{ $judicials->case_number }}" class="form-control" required>
                               <span class="help-block with-errors"></span>
                            </div>
                          </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>{{ trans('Judicial_trans.index_number') }}</label>
                                <input type="text" name="index_number" value="{{ $judicials->index_number }}" class="form-control" required>
                                <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label>{{ trans('Judicial_trans.session_day') }}</label>
                                  <input type="date" name="session_day" value="{{ $judicials->session_day }}"  class="form-control" required>
                                  <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 2 --}}

                        {{-- 3 --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.room') }}</label>
                                    <input type="text" name="room" value="{{ $judicials->room }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.investigation_number') }}</label>
                                    <input type="text" name="investigation_number" value="{{ $judicials->investigation_number }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.prosecution_number') }}</label>
                                    <input type="text" name="prosecution_number" value="{{ $judicials->prosecution_number }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 3 --}}

                        {{-- 4 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.deposit_date') }}</label>
                                    <input type="date" name="deposit_date" value="{{ $judicials->deposit_date }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.deposit_number') }}</label>
                                    <input type="text" name="deposit_number" value="{{ $judicials->deposit_number }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 4 --}}

                        {{-- 5 --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.advance_amount') }}</label>
                                    <input type="text" name="advance_amount" value="{{ $judicials->advance_amount }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.amount_invoice') }}</label>
                                    <input type="text" name="amount_invoice" value="{{ $judicials->amount_invoice }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ trans('Judicial_trans.estimated_amount') }}</label>
                                    <input type="text" name="estimated_amount" value="{{ $judicials->estimated_amount }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 5 --}}

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ trans('Judicial_trans.note') }}</label>
                                <textarea name="note" class="form-control" placeholder="Enter ...">{{ $judicials->note }}</textarea>
                            </div>
                          </div>
                        </div>

                        <br><br>
                        <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> {{ trans('Judicial_trans.saving_data') }}</button>
                            <a href="{{ route('judicials.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> {{ trans('Judicial_trans.back') }}</a>
                        </div>
                    </form>
                </div>
        </div>
   </section>
</div>

@endsection

@section('scripts')

@endsection
