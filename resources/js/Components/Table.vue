<template lang="">
    <div>
        <p class = "title">
            AVAILABLE CAR LIST
        </p>
    </div>

    <div>
        <table class = "table">
            
            <thead>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Date Purchased</th>
                <th>Previous Owner</th>
                <th>CP Number</th>
                <th>Status</th>
                <th>Ownership</th>
            </thead>

            <tbody>
                <tr v-for="(name, index) in getNames" :key="index">
                    <td>{{name.id}}</td>
                    <td>{{name.brand}}</td>
                    <td>{{name.model}}</td>
                    <td>{{name.datePurchased}}</td>
                    <td>{{name.prevOwner}}</td>
                    <td>{{name.cpNum}}</td>
                    <td>{{name.status}}</td>
                    <td>{{name.ownership}}</td>
                    <td>

                        <button @click="$emit('sold',name)">Sell</button>
                        <button @click="$emit('edit',name)">Edit</button>
                        <button @click="deleteName(name.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
// import axios from 'axios';

export default {
    props: ["names"],
    data() {
        return {
            getNames: []
        }
    },
    // DELETE DATA
    methods: {
        deleteName(id) {
            if(confirm('Are you sure?')) {
                axios.post('/delete-name',{id})
                .then(({data}) => {
                    if (data) {
                        // alert("Deleted");
                        this.$emit("Successful")
                    }
                });
            }
        },
    },
    // I THINK PARA LIVE MO SYANG MAKIKITANG MAGCHAcHANGE SA SAME PAGE
    watch: {
        names (New, Old) {
            this.getNames = New;
            // this.getnames = Old;
        }
    }
}
</script>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: sans-serif;
    }

    th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }

    tr:hover {background-color: rgba(132, 165, 176, 0.511);}

    .title {
        text-align: center;
        font-family: 'Lucida Sans';
        font-size: 160%;
    }
</style>