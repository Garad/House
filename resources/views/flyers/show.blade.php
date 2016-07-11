@extends('layout')

@section('content')

    <h1>{!!  $flyer->street !!}</h1>
    <h1>RM {!!  number_format($flyer->price) !!}</h1>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="description"> {!! nl2br($flyer->description)!!}</div>

        </div>

        <div class="col-md-9">
            @foreach($flyer->photos as $photo)
                <img src="{{ $photo->path }}" alt="" width="200px" height="200px">

            @endforeach

        </div>
    </div>
    <br>
    <form id="addPhotoForm"
          action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}"
          method="POST"
          class="dropzone">
        {{ csrf_field() }}
    </form>

 @stop
@section('scripts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotoForm = {
            paramName: 'photo',
            maxFilesize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        };
    </script>

@stop