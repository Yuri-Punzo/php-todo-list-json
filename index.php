<!-- 
Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in, un file JSON.

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca
a comunicare correttamente con il vostro script PHP (le vostre “API”).
Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che
manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task
 -->
<?php

?>

<!doctype html>
<html lang="en">

<head>
    <title>VueJS - To Do List </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/48d660b4b7.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container" id="app">
        <div>
            <h1 class="mt-3">To Do List</h1>
            <form action="server.php" method="post">
                <input type="text" @keyup.enter="addTask" v-model="newTask.text" class="mt-5">
                <button type="submit" class="mx-3 px-2 rounded-1" @click="addTask">Add Task</button>
                <small v-show="error" class="text-danger">Devi inserire almeno 5 caratteri</small>
            </form>
        </div>
        <div>
            <h5 class="mt-5">things to do:</h3>
                <ul v-if="tasks.length !== 0">
                    <li v-for="(task,i) in tasks" @click.stop="taskDone(i)" class="list_item" :class="{crossed: tasks[i].done}">
                        {{task.text}}
                        <i class="bold mx-2 text-danger fs-5 fa-solid fa-xmark" @click.stop="removeTask(i)"></i>
                    </li>
                </ul>
                <p v-else>
                    MISSION ACCOMPLISHED ! Ora puoi nerdare !
                </p>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>