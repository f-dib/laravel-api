<section>
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin') }}">{{ __('Admin') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.projects.index') }}">{{ __('Progetti') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.types.index') }}">{{ __('Tipologie') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.technologies.index') }}">{{ __('Tecnologie') }}</a>
        </li>
    </ul> 
</section>