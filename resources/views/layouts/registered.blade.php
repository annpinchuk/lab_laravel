<div class="registered">
    <h3>All registered users:</h3>
    @php
        $registered = DB::table('login')->pluck('username');
    @endphp
    @if(!$registered->isEmpty())
        <ul>
            @foreach ($registered as $registered_user)
                <li>
                    <span>
                        {{$registered_user}}
                    </span>
                </li>
            @endforeach
        </ul>
    @else
        <h3>Nobody is registered here yet</h3>
    @endif
</div>
