@extends('layouts.master')

@section('title')
    Edit Judicial
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
       <li class="active">Edit Judicial</li>
     </ol>
   </section>

   <section class="content">
      <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Edit Judicial</h3>
          </div>
            <div class="box-body">
                    <form action="{{ route('judicials.update','test') }}" method="POST" autocomplete="off">
                        @csrf
                        {{ method_field('PATCH') }}

                        {{-- 1 --}}
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="hidden" value="{{ $judicials->id }}" name="id">
                                 <input type="text" name="name" value="{{ $judicials->name }}" class="form-control" required>
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Statement</label>
                                 <input type="text" name="statement" value="{{ $judicials->statement }}" class="form-control" required>
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label>Council or Court</label>
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
                               <label>Case Number</label>
                               <input type="text" name="case_number" value="{{ $judicials->case_number }}" class="form-control" required>
                               <span class="help-block with-errors"></span>
                            </div>
                          </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Index Number</label>
                                <input type="text" name="index_number" value="{{ $judicials->index_number }}" class="form-control" required>
                                <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label>Session Day</label>
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
                                    <label>Room</label>
                                    <input type="text" name="room" value="{{ $judicials->room }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Investigation Number</label>
                                    <input type="text" name="investigation_number" value="{{ $judicials->investigation_number }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Prosecution Number</label>
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
                                    <label>Deposit Day</label>
                                    <input type="date" name="deposit_date" value="{{ $judicials->deposit_date }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Deposit Number</label>
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
                                    <label>Advance Amount</label>
                                    <input type="text" name="advance_amount" value="{{ $judicials->advance_amount }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Amount Invoice</label>
                                    <input type="text" name="amount_invoice" value="{{ $judicials->amount_invoice }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Estimated Amount</label>
                                    <input type="text" name="estimated_amount" value="{{ $judicials->estimated_amount }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 5 --}}

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label>Note</label>
                                <textarea name="note" class="form-control" placeholder="Enter ...">{{ $judicials->note }}</textarea>
                            </div>
                          </div>
                        </div>

                        <br><br>
                        <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Saving Data</button>
                            <a href="{{ route('judicials.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Back</a>
                        </div>
                    </form>
                </div>
        </div>
   </section>
</div>

@endsection

@section('scripts')

@endsection
