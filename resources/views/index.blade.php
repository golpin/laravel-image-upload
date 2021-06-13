@extends('layout')
@section('title','uploader')
@section('content')

<div class="row" style="margin: 0 50px;">
    <h2 style="text-align:center;">
        ---List---
    </h2>
    <div style="text-align: center">
        @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
        @endif
        <table class="table table-bordered table-hover my-3">
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th></th>
            </tr>

            @foreach($images as $image)

            <tr>
                <td style="vertical-align: middle; font-size:2rem;">
                    {{ $image->title }}
                </td>
                <td class="p-4">
                    <img src="{{ asset('/storage/images/'.$image->image)}}" alt="image"
                        style="max-width:560px;,max-height:520px;," 　>
                </td>
                <td class="px-2" style="vertical-align: middle;;">
                    <form action="{{ route('delete',$image->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary my-1">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
@endsection