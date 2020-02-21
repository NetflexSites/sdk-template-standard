@extends('layouts.base')

@push('scripts')
    @editorTools
@endpush

@section('body')
    @parent

    @inline('text_area_2', 'h2')
    @inline('area_name_1', 'img', ['size' => 256])
    @editButton('area_jonny', ['label' => 'Knappen Jonny'])

    {{-- @editable('area_name_yolo', 'image', [
        'description' => 'jifdjsifj'
    ])

    @editButton('area_name_yolo', ['title' => 'dkfo'])

    @content('area_name_yolo') --}}

    {{-- @each(content('area_name_yolo') as $image)

    @endeach --}}

    {{-- @editable('area_test', 'image')

    @content('area_test') --}}

    <main>
        {{-- @inline('hjsdfjifjijsdfi', 'img', ['size' => 256, 'alt' => '']) --}}
        {{-- @inline('dsfodsfosfkoarea_name_3', 'picture', [
            /* 'size' => '300x200', */,
            'image' => ['class' => ''],
            'picture' => ['class' => '']
        ]) --}}
        {{-- @inline('area_name_1', 'img', ['size' => 256]) --}}
        {{-- @inline('text_area') --}}
        {{-- @inline('text_area', 'h1', ['editable' => false])
        @inline('text_area_2', 'h2')
        @inline('area_name_1', 'img', ['size' => 256])
        @inline('area_name_1', 'img', ['size' => 512, 'editable' => false])
        @inline('area_name_2', 'img', ['size' => 1024, 'crop' => 'l'])

        @inline('area_name_3', 'picture', ['size' => 256])
        @inline('area_name_3', 'picture', ['size' => 512, 'editable' => false])
        @inline('area_name_4', 'picture', ['size' => 1024, 'crop' => 'l'])

        @blocks('sections') --}}
    </main>
@endsection
