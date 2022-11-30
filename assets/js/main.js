const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: "server.php",
            error: false,
            newTask: {
                text: "",
                done: false
            },
            /* tasks: [
                {
                    text: "spazzare",
                    done: false
                },
                {
                    text: "spolverare",
                    done: false
                },
                {
                    text: "passare lo straccio",
                    done: false
                }
            ] */
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.tasks = response.data
                    console.log(this.tasks);
                })
                .catch(error => {
                    console.error(error.message);
                })
        },
        taskDone(i) {
            //console.log("clicked", i);
            this.tasks[i].done = !this.tasks[i].done;
        },
        /* removeTask(i) {
            this.tasks.splice(i, 1)
        } */
    },
    mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')