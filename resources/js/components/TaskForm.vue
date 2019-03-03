<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task form</div>

                    <div class="card-body">
                        <form action="./api/task" method="post" @submit.prevent= "addTask()">
                            <div class="form-group">
                              <input type="text" name="title" id="" class="form-control" placeholder="Task title" aria-describedby="helpId" v-model="title">
                              
                            </div>
                            <div class="form-group">
                              <input type="submit" name="submit" id="" class="form-control" vslue="Add Task">
                              
                            </div>
                        </form>
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
                title:'',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addTask(){
               axios.post('./api/task',{title:this.title});
               Event.$emit('taskCreated',{title:this.title});
               this.title = '';
            }
        }
    }
</script>
