@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send Us Message') }}</div>

                <div class="card-body">
                    <form action="{{ route('sendmail') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label>Message</label>
                                <textarea class="form-control" name="msg" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <button class="btn btn-danger ml-auto">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
