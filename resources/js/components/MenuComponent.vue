<template>
  <div>

      <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <header class="app-header navbar">
              <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!--PONER LOGO-->
              <!--<a class="navbar-brand" href="#"></a>-->
              <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>

        </header>

          <div class="app-body">

             <div class="sidebar">
                  <nav class="sidebar-nav">
                      <ul class="nav">
                          <li class="nav-item">
                              <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Menu</a>
                          </li>
                          <li class="nav-title">
                              Menú
                          </li>


                          <li class="nav-item">
                              <a class="nav-link" href="#"  @click="$router.push('Principal')" ><i class="fa fa-list"></i> Inicio</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="#" @click="$router.push('Administrativo')" ><i class="fa fa-users"></i>Administrativos</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="#" @click="$router.push('Profesor')"><i class="fa fa-shopping-cart"></i>Profesores</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="#" @click="$router.push('PradredeFamilia') "><i class="fa fa-users"></i> Padres de Familia</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="#" @click="$router.push('Estudiante')" ><i class="fa fa-users"  ></i> Estudiante</a>
                          </li>


                          <li class="nav-item">
                              <a class="nav-link" href="#" @click="$router.push('Materia')"><i class="fa fa-user"></i> Materias</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="#" @click="$router.push('Clase')"><i class="fa fa-list"  ></i> Clases</a>
                          </li>


                      </ul>
                  </nav>
                  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
              </div>

              <!-- Contenido Principal -->
              <main class="main">

              <transition>
                  <router-view></router-view>
              </transition>

              </main>

              <!-- /Fin del contenido principal -->
          </div>

          <footer class="app-footer">
              <span><a href="http://www.webtraining-it.com/">webtraining-it.com</a> &copy; 2019</span>
              <span class="ml-auto">Desarrollado por <a href="http://www.webtraining-it.com/">webtraining-it.com</a></span>
          </footer>

      </body>


</div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component Menu montado.')
        }
    }
</script>
