<template>
<main class="main">
     <!-- Breadcrumb -->


                  <Estudiantes></Estudiantes>




         <!-- Fin ejemplo de tabla Listado -->


     </main>
</template>

<script>

    export default {

        mounted() {
            console.log('Component Administrativo.')
        },
        data()
        {
          return{
            administativos: [],
            administrativo: {Nombre: '',Apellido_P: '', Apellido_M: '', CURP: '', Contraseña: '', Apellido_M: '', CURP:'',
            Contraseña : ''}
          }
        },
        methods:{
          
        }
    }
</script>
