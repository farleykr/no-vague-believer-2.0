@extends('_layouts.master')

@section('body')
<div>
    <section class="essay">
        <div>
            <h4>Newest Essay</h4>
            <h1>{{ $essays->first()->title }}</h1>
            <date>{{ date('F j, Y', $essays->first()->date) }}</date>
        </div>
        <div>
            @if ($essays->first()->verse)
            <aside>
                <p>{{ $essays->first()->verse }}</p>
                @if ($essays->first()->citation)
                    <p>&mdash; {{ $essays->first()->citation }} &mdash;</p>
                @endif
            </aside>
            @endif
            @if ($essays->first()->question)
            <aside>
                <p>{{ $essays->first()->question }}</p>
            </aside>
            @endif
            
            {!! $essays->first()->getContent() !!}
            <p>&mdash; {{ $page->author }} </p>
        </div>
    </section>
    
    @include('_partials.archive')
</div>
@endsection
