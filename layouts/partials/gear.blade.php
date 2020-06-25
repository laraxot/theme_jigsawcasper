@php

    Theme::add('pub_theme::resources/js/gear.js');
    //dddx(get_defined_vars());
    $act=last(explode('.',$routename));
    $routename_next=implode('.',array_slice(explode('.',$routename),0,-1));
    switch($act){
      case 'show':
        $act_next='edit';
        $icon='<i class="fa fa-edit"></i>';
      break;
      case 'edit':
        $act_next='show';
        $icon='<i class="fa fa-edit"></i>';
      break;
      case 'index':
        $act_next='index_edit';
        $icon='<i class="fa fa-edit"></i>';
      break;
      case 'index_edit':
        $act_next='index';
        $icon='<i class="fa fa-edit"></i>';
      break;
      default:
        return ;
      break;
    }
    $func= Str::camel($act_next);
    $route=route($routename_next.'.'.$act_next,$params);
    //[$icon,$route]=$_panel->toggleAdmin();
    //dddx($row);
@endphp
@can($func,$row)
<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-lg-block">
      <svg class="svg-icon svg-icon-md">
        <use xlink:href="#configuration-1"> </use>
      </svg>
</button>
    <div id="style-switch" class="collapse">
      <div class="p-4">
        <a class="btn btn-primary" href="{{ $route }}">
          @lang('theme::txt.'.$act_next) {!! $icon !!}
        </a>
      </div>
    </div>
@endcan