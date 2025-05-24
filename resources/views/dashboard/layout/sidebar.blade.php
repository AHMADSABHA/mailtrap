<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="{{ asset('dashboard-assets/images/mobile.jpg') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">MAIL TRAP</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="{{ route('plans.list.view') }}">
        <div class="menu-title">لوحة التحكم</div>
        <i class="bi bi-house-fill"></i>
      </a>
    </li>
    <li>
      <a href="#" class="has-arrow">
        <div class="menu-title">إدارة الايميلات</div>
        <i class="bi bi-grid-fill"></i>
      </a>
      <ul>
<<<<<<< HEAD
       
        <li> <a href="{{ route('plans.create.view') }}">Enter Email Manually</a>
        </li>
        <li> <a href="{{ route('plans.list.view') }}">Emails List</a>
        </li>
        <li> <a href="{{ route('plans.em') }}">Send to All</a>
        </li>
        <li> <a href="{{ route('plans.view') }}">Import Email With Excel File</a>
        </li>
        <li> <a href="{{ route('plans.email.form') }}">Send An Email</a>
        </li>
        </li>
        
      </ul>
=======
        <li><a href="{{ route('plans.create.view') }}"><span>ادخل الايميل</span> <i class="bi bi-envelope-plus"></i></a></li>
        <li><a href="{{ route('plans.list.view') }}"><span>قائمة الايميلات</span> <i class="bi bi-envelope"></i></a></li>
        <li><a href="{{ route('plans.em') }}"><span>الارسال للجميع</span> <i class="bi bi-send"></i></a></li>
        <li><a href="{{ route('plans.view') }}"><span>جلب ايميلات من ملف</span> <i class="bi bi-file-earmark-arrow-up"></i></a></li>
      </ul>
    </li>
    @if (auth()->user()->is_admin == 0)
    <li>
      <a href="{{ route('attendance.index') }}">
        <div class="menu-title">التفقد اليومي</div>
        <i class="bi bi-calendar-check"></i>
      </a>
    </li>
    @endif
    @if (auth()->user()->is_admin)
    <li>
      <a href="{{ route('plans.employees.list.view') }}">
        <div class="menu-title">قائمة الموظفين</div>
        <i class="bi bi-people-fill"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('plans.department.create') }}">
        <div class="menu-title">اضافة قسم</div>
        <i class="bi bi-building"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('plans.employees.add') }}">
        <div class="menu-title">اضافة موظف</div>
        <i class="bi bi-person-plus"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('plans.email.form') }}">
        <div class="menu-title">ارسال ايميل</div>
        <i class="bi bi-envelope-fill"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('attendance.weekly.report') }}">
        <div class="menu-title">تقرير الحضور الاسبوعي</div>
        <i class="bi bi-calendar-week"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('attendance.monthly.report') }}">
        <div class="menu-title">تقرير الحضور الشهري</div>
        <i class="bi bi-calendar-month"></i>
      </a>
    </li>
    @endif
    <li>
      <a href="{{ route('leaves.create') }}">
        <div class="menu-title">طلب اجازة</div>
        <i class="bi bi-calendar-x"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('mailer.email.form') }}">
        <div class="menu-title">ارسال ايميل من قسم</div>
        <i class="bi bi-envelope-paper"></i>
      </a>
    </li>
    <li>
      <a href="{{ route('plans.salary.view') }}">
        <div class="menu-title">تفاصيل الراتب</div>
        <i class="bi bi-cash"></i>
      </a>
>>>>>>> a8d13f2 (جميع تعديلات المشروع)
    </li>
  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->