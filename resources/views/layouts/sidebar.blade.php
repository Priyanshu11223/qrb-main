@php
use App\Models\Form;
$users = \Auth::user();
$currantLang = $users->currentLanguage();
$languages = Utility::languages();
$role_id = $users->roles->first()->id;
if (Auth::user()->type=='Admin') {
 $forms=Form::all();
}else{
    $forms =  Form::select(['forms.*'])
    ->leftJoin('users', 'users.id', 'forms.created_by')
    ->whereIn('forms.id', function ($query) use ($role_id) {
        $query->select('form_id')->from('user_forms')->where('role_id', $role_id);
    })->get();
}
@endphp
<div class="main-sidebar ">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            @if (setting('app_logo'))
                <img src="{{ Storage::url(setting('app_logo')) ? Storage::url('uploads/appLogo/app-logo.png') : '' }}"
                    alt="logo" class="app-logo" width="60px">
            @else
                <a href="{{ route('home') }}">{{ config('app.name') }}</a>
            @endif
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            @if (setting('app_small_logo'))
                <img src="{{ Storage::url(setting('app_small_logo')) ? Storage::url('uploads/appLogo/app-small-logo.png') : '' }}"
                    alt="logo" height="30px" width="30px">
            @else
                <a href="{{ route('home') }}">{{ __('PL') }}</a>
            @endif
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fire text-primary"></i>
                    <span class="nav-link-text">{{ __('Dashboard') }}</span>
                </a>
            </li>
            @can('manage-user')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="fas fa-users text-primary"></i>
                        <span class="nav-link-text">{{ __('Users') }}</span>
                    </a>
                </li>
            @endcan
            @can('manage-role')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <i class="fas fa-key text-primary"></i>
                        <span class="nav-link-text">{{ __('Roles') }}</span>
                    </a>
                </li>
            @endcan
            @can('manage-setting')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('settings') }}">
                        <i class="fas fa-cog text-primary"></i>
                        <span class="nav-link-text">{{ __('Application Settings') }}</span>
                    </a>
                </li>
            @endcan
            @can('manage-form')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('forms.index') }}">
                        <i class="fas fa-book text-primary"></i>
                        <span class="nav-link-text">{{ __('Forms') }}</span>
                    </a>
                </li>
            @endcan
            @can('manage-submitted-form')
                <li class="nav-item dropdown  ">
                    <a class="nav-link  has-dropdown" href="#">
                        <i class="fas fa-list text-primary"></i>
                        <span class="nav-link-text">{{ __('Submitted Forms') }}</span>
                    </a>
                    <ul class="dropdown-menu {{   (Request::route()->getName() == 'view.form.values') ? 'd-block' : '' }}">
                        @foreach ($forms as $form)
                            <li><a class="nav-link {{   (Request::route()->getName() == 'view.form.values') ? 'show' : '' }}" href="{{ route('view.form.values', $form->id) }}">{{ $form->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endcan

           

        </ul>
    </aside>
</div>
