<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task List</div>

                    <div class="card-body">
                        <ul>
							<li v-for="task in tasks" :key="task.id">{{task.title}}</li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                tasks:[],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
              axios.get('./api/task')
            .then(response => this.tasks = response.data);
               Event.$on('taskCreated',(title)=> {
                  this.tasks.push(title)  
               })
			   
           
        }
    }
</script>
