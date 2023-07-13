<template>
    <div>
        App sheesh
        <div>
            Count: {{ count }} <button @click ="addOne()">+</button>
            <button @click ="addTen">+10</button>
            <button @click ="minusOne">-</button>
            <br>
            Age: {{ age }}
            <button @click ="minusAge">-</button>
            <button @click ="addAge">+</button>
        </div>
        <div>
            Total: {{ addPlusCount }}
            <Age :age="age"></Age>
        </div>
    </div>
</template>

<script>
    import Age from "./Age.vue";

    export default {
        // components
        components: {
            Age
        },

        // data = states
        data() {
            return {
                count: 0,
                age: 25

            }
        },

        methods: {
            addOne() {
                this.count += 1;
            },
            minusOne () {
                this.count --;
            },
            addTen () {
                this.count += 10;
            },
            
            addAge (){
                this.age += 1;
            },
            minusAge (){
                this.age --;
            }
        },

        computed: {
            addPlusCount () {
                return this.age + this.count;
            }
            
        }

    }
</script>

<style>
/* css inline */

</style>