<template>
    <div class="container">
    <main class="main">

        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                   <h2>Listado de Opciones</h2><br/>

                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">Administrativo</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block">Profesores</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Alumnos</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Clases </button>

                </div>
            </div>
            <!-- Fin ejemplo de tabla Listado -->



    </main>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
