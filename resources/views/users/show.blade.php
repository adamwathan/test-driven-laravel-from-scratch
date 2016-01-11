<ul>
    @foreach ($user->tweets as $tweet)
    <li>{{ $tweet->body }}</li>
    @endforeach
</ul>
