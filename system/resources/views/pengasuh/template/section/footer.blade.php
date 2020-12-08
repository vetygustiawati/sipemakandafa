@if ((request()->user()->level) == 'admin')
    @include('pengasuh.layouts.footerAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('pengasuh.layouts.footerWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('pengasuh.layouts.footerPengasuh')
@endif