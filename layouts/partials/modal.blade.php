<!-- Modal ajax-->
<div id="myModalAjax" tabindex="-1" role="dialog" aria-labelledby="myModalAjax" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title mb-3">Modal title</h2>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">× </span></button>
        </div>
        <div class="modal-body">
            <p class="text-muted"><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
          </div>
          {{--
            <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
        </div>
        --}}
      </div>
    </div>
  </div>
<!-- Modal iframe-->
  <div id="myModalIframe" tabindex="-1" role="dialog" aria-labelledby="myModalIframe" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title mb-3">Modal title</h2>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">× </span></button>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-1by1">
          <iframe class="embed-responsive-item" src="{{ url('/html/loading.html') }}"></iframe>
        </div>

          </div>
          {{--
            <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
        </div>
        --}}
      </div>
    </div>
  </div>
