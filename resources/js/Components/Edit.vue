<template>
    <div>
        <p class = "title">
            CAR BUY AND SOUL
        </p>
    </div>
    <div>
        <form @submit.prevent="submitForm"
        class="form-style-9">
            <p>
                UPDATE CAR DETAILS
            </p>
                <ul>
                    <li>
                        <label for="brand">Brand</label>
                        <input type="text" name="field3" v-model="brand" class="field-style field-full align-none" placeholder="car brand" />
                    </li>
                    <li>
                        <label for="brand">Model</label>
                        <input type="text" name="field3" v-model="model" class="field-style field-full align-none" placeholder="car model" />
                    </li>
                    <li>
                        <label for="brand">Date Purchased</label>
                        <input type="date" name="field3" v-model="datePurchased" class="field-style field-full align-none" placeholder="date of purchase" />
                    </li>
                    <li>
                        <label for="brand">Previous Owner</label>
                        <input type="text" name="field3" v-model="prevOwner" class="field-style field-full align-none" placeholder="name of the previous car owner" />
                    </li>
                    <li>
                        <label for="brand">Cellphone Number</label>
                        <input type="text" name="field3" v-model="cpNum" class="field-style field-full align-none" placeholder="your cellphone number" />
                    </li>
                    <li>
                        <label for="brand">Status</label>
                        <textarea name="field5" class="field-style" v-model="status" placeholder="car status (e.g. secondhand, no issue, rusty, etc.)"></textarea>
                    </li>
                    <li>
                        <label for="brand">Ownership</label>
                        <input type="text" name="field3" v-model="ownership" class="field-style field-full align-none" placeholder="e.g. first, second, etc." />
                    </li>
                    <li>
                        <button type = "submit">Save</button>
                        <button @click.prevent="$emit('cancelEdit')">Cancel</button>
                    </li>
                </ul>
            </form>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props:["name"],
        data() {
            return {
                id: 0,
                brand: '',
                model: '',
                datePurchased:'',
                prevOwner:'',
                cpNum:'',
                status:'',
                ownership:'',
            };
        },
        mounted() {
            this.id = this.name.id;
            this.brand = this.name.brand;
            this.model = this.name.model;
            this.datePurchased = this.name.datePurchased;
            this.prevOwner = this.name.prevOwner;
            this.cpNum = this.name.cpNum;
            this.status = this.name.status;
            this.ownership = this.name.ownership;
        },
        methods: {
            submitForm() {
                let {id, brand, model, datePurchased, prevOwner, cpNum, status, ownership} = this;

                // alert ("Please wait..");
                axios.post ('/submitName', {
                    id, 
                    brand, 
                    model, 
                    datePurchased,
                    prevOwner,
                    cpNum,
                    status,
                    ownership
                })
                .then(({data}) => {
                    alert ("Added Successfully");
                    this.id = 0;
                    this.brand = "";
                    this.model = "";
                    this.datePurchased = "";
                    this.prevOwner = "";
                    this.cpnum = "";
                    this.status = "";
                    this.ownership = "";
                    this.$emit ("Submitted");
                });
            },
            submitFormAlt() {
                alert ("Added successfully");
                axios.post ('/submitName', {
                    id:this.id,
                    brand:this.brand,
                    model:this.model,
                    datePurchased:this.datePurchased,
                    prevOwner:this.prevOwner,
                    cpNum:this.cpNum,
                    status:this.status,
                    ownership:this.ownership,
                })
                .then(({data}) => {
                    alert("Successful");
                    this.id = 0;
                    this.brand = "";
                    this.model = "";
                    this.datePurchased = "";
                    this.prevOwner = "";
                    this.cpnum = "";
                    this.status = "";
                    this.ownership = "";
                    this.$emit("Submitted");
                });
            }
        },
    }
</script>

<style>
    /* css inline */
    .form-style {
        /* display: block;
        flex-direction: row;
        align-items: flex;
        display: inline-flex;
        justify-content: center;
        padding: 2px;
        border-radius: 25px;
        border: 2px solid #000000;
        padding: 1%;
        width: 1100px;
        height: 100px;
        border-style: dotted; */
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    /* p.style {
        border-style: outset;
        font-size: 120%;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    } */

    style {
        align-items: center;
    }

    input {
        display: block;
        flex-direction: row;
        align-items: flex;
    } 
</style>