@if (Auth::check() AND (Auth::user()->role_id < 3))
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Create Category</span></a>
</li>
@endif

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('supportDocuments*') ? 'active' : '' }}">
    <a href="{{ route('supportDocuments.index') }}"><i class="fa fa-edit"></i><span>Support Documents</span></a>
</li>
 @if (Auth::check() AND (Auth::user()->role_id < 3))
    <li class="{{ Request::is('reportAConcerns*') ? 'active' : '' }}">
        <a href="{{ route('reportAConcerns.index') }}"><i class="fa fa-edit"></i><span>Report a Concern</span></a>
    </li>
    @else
    <li class="{{ Request::is('reportAConcerns*') ? 'active' : '' }}">
        <a href="{{ route('reportAConcerns.create') }}"><i class="fa fa-edit"></i><span>Report a Concern</span></a>
    </li>
@endif

{{-- <li class="{{ Request::is('courseProgresses*') ? 'active' : '' }}">
    <a href="{{ route('courseProgresses.index') }}"><i class="fa fa-edit"></i><span>View Course Progress</span></a>
</li> --}}

{{-- <li class="{{ Request::is('courseProgresses*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-edit"></i><span>Archived Courses</span></a>
</li> --}}

@if (Auth::check() AND (Auth::user()->role_id < 3))
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

{{-- <li class="{{ Request::is('certificates*') ? 'active' : '' }}">
    <a href="{{ route('certificates.index') }}"><i class="fa fa-edit"></i><span>View Certificate</span></a>
</li> --}}

{{--  <li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li> --}}

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endif

<li class="{{ Request::is('roles*')}}">
    <a href="{{ url('/logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-edit"></i><span>Logout</span>
    </a>
</li>

