@if ((request()->user()->level) == 'admin')
    @include('walisantri.layouts.headerAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('walisantri.layouts.headerWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('walisantri.layouts.headerPengasuh')
@endif