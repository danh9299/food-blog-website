@extends('dashboard')

@section('content')

<div class="mt-5 card">
    <div class="card-header">Sửa mạng xã hội</div>
    <div class="card-body">
        <form method="post" action="{{ route('socialnetwork.update', $socialnetwork->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{ $socialnetwork->id }}" hidden/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Facebook</label>
                <div class="col-sm-10">
                    <input type="text" name="Facebook" class="form-control" value="{{ $socialnetwork->Facebook }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Github</label>
                <div class="col-sm-10">
                    <input type="text" name="Github" class="form-control" value="{{ $socialnetwork->Github }}"
                     />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Instagram</label>
                <div class="col-sm-10">
                    <input type="text" name="Instagram" class="form-control" value="{{ $socialnetwork->Instagram }}"
                     />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $socialnetwork->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>

@endsection('content')