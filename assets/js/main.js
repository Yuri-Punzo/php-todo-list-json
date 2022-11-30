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
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    //console.log(response);
                    this.tasks = response.data
                    //console.log(this.tasks);
                })
                .catch(error => {
                    console.error(error.message);
                })
        },
        addTask() {
            const data = { task: this.newTask.text }
            axios
                .post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then((response) => {
                    this.tasks = response.data

                }).catch(err => {
                    console.log(err.message);
                })
            this.newTask.text = ""
        },
        taskDone(i) {
            //console.log("clicked", i);
            this.tasks[i].done = !this.tasks[i].done;
        },
        removeTask(i) {
            this.tasks.splice(i, 1)
        }
    },
    mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')