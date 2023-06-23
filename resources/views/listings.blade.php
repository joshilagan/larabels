<h1>{{$heading}}</h1>

{{-- -- conditional statement if there is no listing -- --}}

@unless(count($listings)==0)

        @foreach ($listings as $listing)
        <h2><a href="/listings/{{$listing['id']}}">{{ $listing['title']}} </a></h2>
            <p>{{$listing['description']}}</p>
        @endforeach

@else
    <p>No listings found</p>
@endunless