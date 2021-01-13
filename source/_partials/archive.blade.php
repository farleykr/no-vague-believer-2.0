<section id="archive">
    <p class="pb-6 uppercase text-center border-b border-gray-400">All Essays</p>
    <ul>
        @foreach($essays as $essay)
            <li class="py-6 border-b border-gray-400">
                <div class="flex justify-between">
                <h2>
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