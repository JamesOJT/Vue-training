<template>
    <div>
        <p class = "title">
            CAR BYE AND SOUL
        </p>
    </div>
    <div>
        <!-- <h4>Edit</h4> -->
        <!-- <form @submit.prevent="submitForm">
            <div class = "form-style">
                <div>
                    <label for=""><p class="style">Brand</p></label>
                    <input type="text" v-model="brand">
                </div>
                <div>
                    <label for=""><p class="style">Model</p></label>
                    <input px="3cm" type="text" v-model="model">
                </div>
                <div >
                    <label for=""><p class="style">Date Purchased</p></label>
                    <input type="date" v-model="datePurchased">
                </div>
                <div >
                    <label for=""><p class="style">Previous Owner</p></label>
                    <input type="text" v-model="prevOwner">
                </div>
                <div >
                    <label for=""><p class="style">CP Number</p></label>
                    <input type="text" v-model="cpNum">
                </div>
                <div >
                    <label for=""><p class="style">Status</p></label>
                    <input type="text" v-model="status">
                </div>
                <div >
                    <label for="ownership"><p class="style">Ownership</p></label>
                    <input type="input" v-model="ownership">
                </div>
            </div>
                <div class="">
                    <button type = "submit">Add Car</button>
                </div>
        </form> -->
        <form @submit.prevent="submitForm"
        class="form-style-9">
            <p>
                REGISTER CAR
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
                        <button type = "submit">Add Car</button>
                    </li>
                </ul>
            </form>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
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
            }
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

<style type="text/css">
    .form-style-9{
        max-width: 450px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 6px solid #305A72;
    }
    .form-style-9 ul{
        padding:0;
        margin:0;
        list-style:none;
    }
    .form-style-9 ul li{
        display: block;
        margin-bottom: 10px;
        min-height: 35px;
    }
    .form-style-9 ul li  .field-style{
        box-sizing: border-box; 
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box; 
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;

    }.form-style-9 ul li  .field-style:focus{
        box-shadow: 0 0 5px #B0CFE0;
        border:1px solid #B0CFE0;
    }
    .form-style-9 ul li .field-split{
        width: 49%;
    }
    .form-style-9 ul li .field-full{
        width: 100%;
    }
    .form-style-9 ul li input.align-left{
        float:left;
    }
    .form-style-9 ul li input.align-right{
        float:right;
    }
    .form-style-9 ul li textarea{
        width: 100%;
        height: 100px;
    }
    .form-style-9 ul li input[type="button"], 
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        padding: 8px 18px;
        text-decoration: none;
        font: 12px Arial, Helvetica, sans-serif;
    }
    .form-style-9 ul li input[type="button"]:hover, 
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }

    button {
        background-color: #305A72;
        border: none;
        border-radius: 50px;
        color: white;
        padding: 5px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;

    }


</style>