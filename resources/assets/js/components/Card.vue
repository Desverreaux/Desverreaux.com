<template>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Data Parsing</h5>
        </div>
        <div class="card-body">         
        <p class="card-text">A simple bootstrap table and logging console to use as an interface while I write the php scripts to write and read some basic data to the database.</p>
        <a href="http://localhost/Playground/DataParsing" class="btn btn-primary btn-block">View</a>
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
.card {
    flex: .2 0 350px;
    min-width: 300px;
    max-width: 500px;
    
    margin: 10px;
}

.card-body {
    height: 70%;
    overflow:hidden;
    padding: 5% 5%;
}

.card-title {
    font-size: 26px;
}

.card-text {
    font-size: 18px;
}

.card-header {
    height: 64px;
}

</style>
