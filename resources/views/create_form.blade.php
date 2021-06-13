@extends('layout')
@section('title','登録画面')
@section('content')
<div class="row">
    <div  style="margin: 0 auto;">
        <h2>Upload form</h2>
        <form action="{{ route('store') }}" method="POST" onsubmit="return checkSubmit()" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">
                    Title
                </label>
                <input 
                type="text" 
                id="title" 
                name="title" 
                class="form-control" 
                value="{{ old('title')}}">

                @if($errors->first('title')) 
                <div class="text-danger">
                    {{ $errors->first('title') }}
                </div>
                @endif
            </div>

            <br>

            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div>
            <p>※画像は必須です。拡張子はjpg・jpeg・pngのいずれか限定です。</p>

            @if ($errors->first('image'))
                <div class="text-danger">
                    {{ $errors->first('image') }}
                </div>
                @endif
            

            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('index') }}">
                    Cancel
                </a>
                <button type="submit" class="btn btn-primary">
                    Upload
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

