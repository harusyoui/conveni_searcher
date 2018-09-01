<ul class="media-list">
@foreach ($histories as $history)
    <?php $user = $history->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                <p>{!! nl2br(e($history->content)) !!}</p>
            </div>
            <div>
                @if (Auth::id() == $history->user_id)
                    {!! Form::open(['route' => ['histories.destroy', $history->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>