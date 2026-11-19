<div>
<a href="{{ route('students.index') }}"
class="{{ request()->routeIs('students.*') ? 'active' : '' }}">
Students
30 / 36
</a>
<a href="{{ route('courses.index') }}"
class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
Courses
</a>
</div>