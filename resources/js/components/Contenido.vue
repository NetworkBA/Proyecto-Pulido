<template>


<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Sistema Gestor Escolar</a></li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">

               <h2>Listado de Opciones</h2><br/>

            </div>

            <button type="button" class="btn btn-primary btn-lg btn-block"></button>
            <button type="button" class="btn btn-secondary btn-lg btn-block">Alumnos</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Clases</button>

            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->



</main>
<!-- /Fin del contenido principal -->



</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted Contenido.')
        }
    }
</script>
