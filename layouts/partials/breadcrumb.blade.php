@php
    if(!isset($class)){
        $class='pl-0  justify-content-center';
    }
    if(!isset($_panel)) return;
    //dddx(get_defined_vars());
@endphp

<ol class="breadcrumb {{$class}}">
    {{--
        <li class="breadcrumb-item">
            <a href="{{ asset(App::getLocale()) }}">Home</a>
        </li>
    --}}
    @foreach($_panel->breadcrumbs() as $bc)
        <li class="breadcrumb-item">
            <a href="{{ $bc->url }}">
                {{ $bc->title }}
            </a>
        </li>
    @endforeach
    {{--
            @foreach ($items as $item)
                @php
                    try{
                      $panel=Panel::get($item);
                    }catch(\Eception $e){
                        dddx('qui');
                    }
                @endphp
                <li class="breadcrumb-item">
                    <a href="{{ $panel->indexUrl() }}">
                        {{ $item->post_type }}
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ $panel->showUrl() }}">
                        {{ $item->title }}
                    </a>
                </li>
            @endforeach
            @if(count($containers)> count($items))
                @php
                    $tmp=Theme::xotModel(last($containers));
                    $panel_tmp=Panel::get($tmp->first());
                @endphp
                <li class="breadcrumb-item active">
                    <a href="">
                        {{ last($containers) }}
                    </a>
                </li>
            @endif
            --}}
        </ol>
