@if ((request()->user()->level) == 'admin')
    @include('pengasuh.layouts.headerAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('pengasuh.layouts.headerWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('pengasuh.layouts.headerPengasuh')
@endif