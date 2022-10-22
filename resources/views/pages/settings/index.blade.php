@extends('layouts.master')

@section('title')
    {{ trans('Setting_trans.settings') }}
@stop

@section('css')
@endsection

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
        {{ trans('Setting_trans.settings') }}
     </h1>
     <ol class="breadcrumb">
       <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('Setting_trans.dashboard') }}</a></li>
       <li class="active">{{ trans('Setting_trans.settings') }}</li>
     </ol>
   </section>

   <section class="content">
      <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">{{ trans('Setting_trans.settings') }}</h3>
          </div>
            <div class="box-body">
                    <form action="{{ route('settings.update','test') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                        {{-- 1 --}}
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>{{ trans('Setting_trans.company_name') }}</label>
                                 <input name="company_name" value="{{ $setting['company_name'] }}" required type="text" class="form-control" placeholder="Name of Company">
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                 <label>{{ trans('Setting_trans.current_session') }}</label>
                                 <select name="current_session" id="current_session" class="form-control" required>
                                    @for($y=date('Y', strtotime('- 1 years')); $y<=date('Y', strtotime('+ 4 years')); $y++)
                                        <option {{ ($setting['current_session'] == (($y-=1).'-'.($y+=1))) ? 'selected' : '' }}>{{ ($y-=1).'-'.($y+=1) }}</option>
                                    @endfor
                                 </select>
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                        </div>
                        {{-- End 2 --}}

                        {{-- 3 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ trans('Setting_trans.company_title') }}</label>
                                    <input name="company_title" value="{{ $setting['company_title'] }}" required type="text" class="form-control" placeholder="Title of Company">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 3 --}}

                        {{-- 4 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>{{ trans('Setting_trans.phone') }}</label>
                                  <input name="phone" value="{{ $setting['phone'] }}" required type="text" class="form-control" placeholder="Phone of Company">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                         </div>
                        {{-- End 4 --}}

                        {{-- 5 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>{{ trans('Setting_trans.company_email') }}</label>
                                  <input name="company_email" value="{{ $setting['company_email'] }}" required type="text" class="form-control" placeholder="Email of Company">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                         </div>
                        {{-- End 5 --}}

                        {{-- 6 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>{{ trans('Setting_trans.address') }}</label>
                                  <input name="address" value="{{ $setting['address'] }}" required type="text" class="form-control" placeholder="Address of Company">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                         </div>
                        {{-- End 6 --}}

                        {{-- 7 --}}
                         <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>{{ trans('Setting_trans.end_first_term') }}</label>
                                  <input name="end_first_term" value="{{ $setting['end_first_term'] }}" required type="text" class="form-control" placeholder="Date Term Ends">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label>{{ trans('Setting_trans.end_second_term') }}</label>
                                   <input name="end_second_term" value="{{ $setting['end_second_term'] }}" required type="text" class="form-control" placeholder="Date Term Ends">
                                   <span class="help-block with-errors"></span>
                                </div>
                             </div>
                         </div>
                        {{-- End 7 --}}

                        {{-- 8 --}}
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                        <label>{{ trans('Setting_trans.logo') }}</label>
                                        <div class="mb-3">
                                            <img style="width:100px ; margin-bottom: 15px;" height="100px" src="{{ URL::asset('attachments/logo/'.$setting['logo']) }}" alt="">
                                        </div>
                                        <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
                                  </div>
                              </div>
                          </div>
                         {{-- End 8 --}}

                        <br><br>
                        <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> {{ trans('Setting_trans.saving_data') }}</button>
                        </div>
                    </form>
            </div>
        </div>
   </section>
</div>

@endsection

@section('js')
@endsection
