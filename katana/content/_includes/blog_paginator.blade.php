<div class="pagination">
    @if($previousPage)
        <div class="clearfix">
                <a class="btn btn-sm btn-primary m-2" href="@url($previousPage)">Newer posts</a>
        </div>
    @endif

    @if($nextPage)
        <div class="clearfix">
                <a class="btn btn-sm btn-primary m-2" href="@url($nextPage)">Previous posts</a>
        </div>
    @endif
</div>