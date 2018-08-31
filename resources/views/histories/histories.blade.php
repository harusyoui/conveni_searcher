<ul class="media-list">
sasisuseso
<!--ここから読み込んでくれない-->
@foreach ($histories as $history)
    tatitsuteto
    <?php $user = $history->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                kakikukeko
                <p>{!! nl2br(e($history->content)) !!}</p>
            </div>
        </div>
    </li>
@endforeach
<!---->
</ul>