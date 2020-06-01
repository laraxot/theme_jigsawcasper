@php
    //dddx(get_defined_vars());
    //dddx($_panel->getModuleName());
    /**
     * questa variabile forse utile ovunque
     *
     **/
    $mod_trad=$_panel->getModuleName().'::'.$last_container;
    //dddx($panel->getRowTabs());
@endphp
<div class="container">
    <nav class="navbar navbar-expand-lg  shadow navbar-light bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="{{ $panel->showUrl() }}" class="nav-link">
                            {{ __($mod_trad.'.tabs.info')  }}
                        </a>
                    </li>
                    @foreach($panel->getRowTabs() as $tab)
                        <li class="nav-item ">
                            <a href="{{ $tab->url }}" class="nav-link">
                                {{-- $tab->title --}}
                                {{ __($mod_trad.'.tabs.'.$tab->title)  }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</div>
