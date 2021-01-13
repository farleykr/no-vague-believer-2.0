<section id="archive" class="mb-12">
    <h3 class="py-6 uppercase text-center border-b border-gray-400 font-sans">All Essays</h3>
    <ul>
        @foreach($essays as $essay)
            @if($loop->last)
            <li class="py-6">
            @else
            <li class="py-6 border-b border-gray-400">
            @endif
                <div class="flex justify-between align-baseline">
                <h2 class="underline">
                    <a href="{{ $essay->getUrl() }}">{{ $essay->title }}</a>
                </h2>
                <date class="block mb-2">{{ date('m/d/Y', $essay->date) }}</date>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quibusdam officiis numquam, recusandae at voluptatum placeat. Consequuntur facilis libero minus!
                </p>
                <a class="block italic text-right" href="{{ $essay->getUrl() }}">read &rarr;</a>
            </li>
        @endforeach
    </ul>
</section>