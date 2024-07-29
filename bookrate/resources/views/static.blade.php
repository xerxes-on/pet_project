<x-header-main></x-header-main>
    @if( session('message'))
      <div class="alert alert-success rounded-3xl" id="message">
          <span>{{ session('message')}}</span>
      </div>
    @endif
    @yield( 'content' )

<x-footer></x-footer>
