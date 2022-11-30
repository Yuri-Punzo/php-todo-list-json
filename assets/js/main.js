const { createApp } = Vue

createApp({
    data() {
        return {
            error: false,
            newTask: {
                text: "",
                done: false,
            },
            tasks: [
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
            ]
        }
    },
    methods: {
        addTask() {
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
        }
    }
}).mount('#app')