<div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
              <a href="/admin"> <img alt="image" src="/log.png"  width="60px" /> <span
                    class="logo-name">babm</span>
              </a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header"></li>
              @can('role-list')
              <li class="dropdown {{ request()->is('admin/roles') ? 'active' : ''}} or {{ request()->is('admin/users') ? 'active' : ''}}">
                  <a href="#" class="menu-toggle nav-link has-dropdown">
                      <i class="fas fa-folder"></i><span>Ruxsatlar</span></a>
                  <ul class="dropdown-menu">
                      <li class="{{ request()->is('admin/roles/index*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.roles.index') }}">Rollar</a></li>
                      <li class="{{ request()->is('admin/users/index*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.users.index') }}">Adminlar</a></li>
                  </ul>
              </li>
               @endcan
               <li class="dropdown 
               or {{ request()->is('admin/posts') ? 'active' : ''}}
               or {{ request()->is('admin/categories') ? 'active' : ''}}
               or {{ request()->is('admin/events') ? 'active' : ''}}
               or {{ request()->is('admin/abouts') ? 'active' : ''}}
               or {{ request()->is('admin/teams') ? 'active' : ''}}
               or {{ request()->is('admin/fogs') ? 'active' : ''}}
               or {{ request()->is('admin/courses') ? 'active' : ''}}
               or {{ request()->is('admin/talents') ? 'active' : ''}}
               or {{ request()->is('admin/contacts') ? 'active' : ''}}
               or {{ request()->is('admin/statistics') ? 'active' : ''}}">
                  <a href="#" class="menu-toggle nav-link has-dropdown">
                      <i class="fas fa-folder"></i><span>Hammasi</span></a>
                  <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('admin.abouts.index') }}"></i><span>Biz haqimizda</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.teams.index') }}"></i><span>Bizning jamoa</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.posts.index') }}"></i><span>Yangiliklar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.events.index') }}"></i><span>Tadbirlar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.categories.index') }}"></i><span>Kategoriya</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.courses.index') }}"></i><span>Kurslar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.statistics.index') }}"></i><span>Statistika</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.talents.index') }}"></i><span>Iqtidorlilar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.fogs.index') }}"></i><span>Tumanlar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.contacts.index') }}"></i><span>Murojatlar</span></a></li>
                  </ul>
              </li>
              <li class="menu-header">  </li>
          </ul>
      </aside>
  </div>





