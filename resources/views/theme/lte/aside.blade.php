<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link ">
      <img src="{{asset("assets/lte/dist/img/FCIGCH11.jpg")}}"
           alt="FCIGCH Logo"
           class="brand-image img-circle elevation-3 animated infinite flip  slower"
           style="opacity: .8">
      <span class="brand-text font-weight-light ">SGD FCIGCH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("assets/lte/dist/img/EscudoUajms11.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">UAJMS</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Usuarios
                      <i class="fas fa-angle-left right"></i>
                     
                    </p>
                  </a> 
        @auth
        
          @if (auth()->user()->role->nombrerol === "admin")
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a class="nav-link" href= "{{route('user.index')}}">  <i class="far fa-circle nav-icon"></i><p>lista de usuarios</p>   
                </a>
              </li> 
              
            </ul>
          @endif
       
            
        @endauth
      </li>
      <li class="header">----</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              F. DOCENTES
              <i class="fas fa-angle-left right"></i>
             
            </p>
          </a>
          @auth
          @if (auth()->user()->role->nombrerol === "informatica" ||auth()->user()->role->nombrerol === "admin" ||auth()->user()->role->nombrerol === "comercial" ||auth()->user()->role->nombrerol === "contaduria" ||auth()->user()->role->nombrerol === "agronomia" ||auth()->user()->role->nombrerol === "rec.hidricos"||auth()->user()->role->nombrerol === "ambiental"||auth()->user()->role->nombrerol === "ges.publica" )
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a class="nav-link" href="{{route('estudiante.index')}} ">  <i class="far fa-circle nav-icon"></i><p>estudiantes</p>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href= "{{route('proyecto.index')}}">  <i class="far fa-circle nav-icon"></i><p>proyectos</p>   
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href= "{{route('notas.index')}}">  <i class="far fa-circle nav-icon"></i><p>notas</p>   
              </a>
            </li> 
          </ul>  
          @endif
         
      
        
          @endauth
        </li>
        <li class="header">----</li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                F. DIRECTOR DEPTO.
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @auth
                @if (auth()->user()->role->nombrerol === 'admin'||auth()->user()->role->nombrerol === 'Dir. Informatica y Ciencias Exactas'||auth()->user()->role->nombrerol === 'Dir. Ciencias Economicas y Empresariales'||auth()->user()->role->nombrerol === 'Dir. Ciencias Contables, Financieras y Economicas'||auth()->user()->role->nombrerol === 'Dir. Ciencias Agronomicas')
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('docente.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Docentes</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('funcion.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Asignar funciones</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('defensa.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>defensas</p>
                      </a>
                    </li>
                  </ul>  
                @endif
            @endauth
          </li>
          <li class="header">----</li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  ADMINISTRATIVOS
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
         @auth
             @if (auth()->user()->role->nombrerol === 'admin')
             
                <ul class="nav nav-treeview">
                 
                  <li class="nav-item">
                      <a class="nav-link" href= "{{route('doc-tutores.index')}}">  <i class="far fa-circle nav-icon"></i><p>doc. tutores</p>   
                      </a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href= "{{route('doc-tutores.tribunal')}}">  <i class="far fa-circle nav-icon"></i><p>doc. tribunales</p>   
                      </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href= "{{route('doc-tutores.defensa')}}">  <i class="far fa-circle nav-icon"></i><p>memo. defensa</p>   
                        </a>
                      </li> 
                   
                    <li class="nav-item">
                      <a class="nav-link" href= "{{route('actas.crear')}}">  <i class="far fa-circle nav-icon"></i><p>Actas</p>   
                      </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href= "{{route('director.index')}}">  <i class="far fa-circle nav-icon"></i><p> director de dpto.</p>   
                        </a>
                      </li> 
                      <li class="nav-item">
                          <a class="nav-link" href= "{{route('director.index')}}">  <i class="far fa-circle nav-icon"></i><p>decano.</p>   
                          </a>
                        </li> 
                      <li class="nav-item">
                          <a class="nav-link" href= "{{route('lugar.index')}}">  <i class="far fa-circle nav-icon"></i><p> lugares de defensa.</p>   
                          </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href= "{{route('plan.index')}}">  <i class="far fa-circle nav-icon"></i><p> plan de estudio.</p>   
                            </a>
                          </li>
                    
                      
                        
                </ul>
               
              </li>  
             @endif
         @endauth
         <li class="header">----</li>
         <li class="nav-item has-treeview">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-sms"></i>
               <p>
                 Notificaciones
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
        @auth
            @if (auth()->user()->role->nombrerol === 'admin')
            
               <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a class="nav-link" href= "{{route('notificaciones.notify')}}">  <i class="far fa-circle nav-icon"></i><p>envio de correo</p>   
                  </a>
                </li> 
                
                       <li class="nav-item">
                           <a class="nav-link" href= "{{route('listsms.index')}}">  <i class="far fa-circle nav-icon"></i><p> envio de sms.</p>   
                           </a>
                         </li>
                   
                     
                       
               </ul>
              
             </li>  
            @endif
        @endauth

          <li class="header">----</li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-laptop"></i>
                <p>
                  sesiones
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
               
               
                  
                      <li class="nav-item">
                          <a class="nav-link" href= "{{route('register')}}">  <i class="far fa-circle nav-icon"></i><p>Registrar usuarios</p>   
                          </a>
                        </li> 
                      
              </ul>
             
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  