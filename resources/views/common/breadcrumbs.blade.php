<!-- breadcrumb section -->
<div class="col-md-12 col-sm-12 col-xs-12">
    <ul class="breadcrumb" style="margin-bottom: 0;">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <?php $key = 1 ?>
        @foreach(Request::segments() as $segment)
            @if(count(Request::segments()) == $key)
                <li class="active" style="text-transform: capitalize;">
                    {{ str_replace('_', ' ', Request::segment($key)) }}
                </li>
            @else
                <li>
                    <a style="text-transform: capitalize;" href="{{ url('/') }}@for($i = 1; $i <= $key; $i++)/{{Request::segment($i)}}@endfor">
                        {{ str_replace('_', ' ', Request::segment($key)) }}
                    </a>
                </li>
            @endif
            <?php $key++; ?>
        @endforeach

    </ul>
</div>
