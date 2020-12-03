@extends('layouts.app')

@section('content')


        @if (auth()->user()->id_rol == 1)
        <menu-component> </menu-component>

        @endif
        @if (auth()->user()->id_rol == 2)
        <menu-component> </menu-component>

        @endif

        @if (auth()->user()->id_rol == 3)
        <menu-componentx> </menu-componentx>

        @endif
        @if (auth()->user()->id_rol == 4)
        <menu-component> </menu-component>

        @endif
      <!--Menu----------------------------------------------------->
      <!--FIN Menu----------------------------------------------------->





  <!--  <footer class="app-footer">
        <span><a href="http://www.webtraining-it.com/">webtraining-it.com</a> &copy; 2019</span>
        <span class="ml-auto">Desarrollado por <a href="http://www.webtraining-it.com/">webtraining-it.com</a></span>
    </footer>
-->
    <!-- Bootstrap and necessary plugins -->

@endsection
