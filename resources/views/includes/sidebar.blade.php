    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-mail-bulk"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Archive</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">

        {{-- Menu Menu Archive  --}}
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Archive
           </div>
     
          <!-- Nav Item - Tables -->
           <li class="nav-item">
           <a class="nav-link" href="{{route('archive.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Data Arsip</span></a>
           </li>
   
             <!-- Nav Item - Charts -->
             <li class="nav-item">
             <a class="nav-link" href="{{route('archive.create')}}">
                 <i class="fas fa-fw fa-cloud-upload-alt"></i>
                 <span>Upload Arsip</span></a>
             </li>
   
           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">
    
  
      {{-- Menu Project  --}}
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Project
        </div>
  
       <!-- Nav Item - Tables -->
        <li class="nav-item">
        <a class="nav-link" href="{{route('project.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Project</span></a>
        </li>

          <!-- Nav Item - Charts -->
          <li class="nav-item">
          <a class="nav-link" href="{{route('project.create')}}">
              <i class="fas fa-fw fa-cloud-upload-alt"></i>
              <span>Tambah Project</span></a>
          </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        {{-- Menu Menu Kategori Archive  --}}
  
        <!-- Heading -->
        <div class="sidebar-heading">
         Category Archive
        </div>
  
       <!-- Nav Item - Tables -->
        <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Category</span></a>
        </li>

          <!-- Nav Item - Charts -->
          <li class="nav-item">
          <a class="nav-link" href="{{route('category.create')}}">
              <i class="fas fa-fw fa-cloud-upload-alt"></i>
              <span>Tambah Kategori</span></a>
          </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


         


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->