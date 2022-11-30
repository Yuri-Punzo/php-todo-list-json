const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: {},
            api_url: "../../server.php"
            /* error: false,
            newTask: {
                text: "",
                done: false,
            }, */
            /* tasks: [
                {
                    text: "spazzare",
                    done: false,
                },
                {
                    text: "spolverare",
                    done: false,
                },
                {
                    text: "passare lo straccio",
                    done: false,
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
                })
                .catch(error => {
                    console.error(error.message);
                })
        }

        /* addTask() {
            if (this.newTask.text.length < 5) {
                this.error = true
            } else {
                this.tasks.unshift(this.newTask)
                this.newTask = {
                    text: "",
                    done: false,
                }
            }
        },
        taskDone(i) {
            //console.log("clicked", i);
            this.tasks[i].done = !this.tasks[i].done;
        },
        removeTask(i) {
            this.tasks.splice(i, 1)
        } */
    },
    mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')