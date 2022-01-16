@if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
    <div class="text-muted ml-auto mr-auto">
      @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
      <a target="_blank" rel="noopener" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
      @endif
      @if (config('backpack.base.show_powered_by'))
      <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>.
      @endif
    </div>
@endif
