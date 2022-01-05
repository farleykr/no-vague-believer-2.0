<section id="archive">
    <h2>All Essays</h2>
    <ul>
        @foreach($essays as $essay)
            @if($loop->last)
            <li>
            @else
            <li>
            @endif
                <div>
                <h3>
                    <a href="{{ $essay->getUrl() }}">{{ $essay->title }}</a>
                </h3>
                <date>{{ date('F j, Y', $essay->date) }}</date>
                </div>
                <p>
                    {{ $essay->getExcerpt() }}...
                </p>
                <a href="{{ $essay->getUrl() }}">
                    <span>read</span> &rarr;
                </a>
                <center><h2>&#10086;</h2></center>   
            </li>
        @endforeach
    </ul>
</section>