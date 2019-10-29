@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('courses.courses')</div>
                <div class="card-body">
                    
                    @if (Auth::user()->hasRole(\App\Role::INTERNET_ADMIN))
                    
                    <div class="col-md-3">
                        <input type="submit" class="form-control btn btn-primary" value="@lang('courses.registerCourse') " onClick="javascript:toggle()"/>
                    </div>
                    <script>
                    function toggle(){
                        var div = document.getElementById('registerCourse');
                        if (div.style.display == 'none') {
                            div.style.display = 'block';
                        } else {
                            div.style.display = 'none';
                        }
                    }
                    </script>

                    <div class="card-body" id="registerCourse" style="display:none">
                        @include('courses.form')
                    </div>
                    
                    
                    @endif


                </div>
            </div>
        </div>
    </div>

    
@endsection