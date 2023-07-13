<template lang="">
    <div>
        <!-- Bootstrap CDN -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
        
        <div>
            <Form @submitted="getter" v-if="!is_edit" />
            <Edit @submitted="getter" :name="name" @cancelEdit="cancelEdit" v-else />
        </div>
        <div>
            <Table :names="names"  @successful="getter" @edit="editName" />
        </div>
    </div>
</template>

<script>
// IMPORTING THINGS
// import axios from 'axios';
import Form from './Form.vue';
import Table from './Table.vue';
import Edit from './Edit.vue';

export default {
    components: {
        Form,
        Table,
        Edit
    },
    data() {
        return {
            names: [],
            is_edit: false,
            name:[]
        };
    },
    mounted() {
        this.getter();
    },
    methods: {
        getter() {
            axios.get('/get-names').then(({data})=>{
                this.names = data;
            });
            this.cancelEdit();
        },
        editName(name){
            this.is_edit = true;
            this.name = name;
            console.log(name);
        },
        cancelEdit(){
            this.is_edit = false;
            this.name = [];
        }
    }
}
</script>
<style lang="">

</style>