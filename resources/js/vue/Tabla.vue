<script setup>
import {ref} from "vue";


const{campos, filas}=defineProps({
    campos:{
        type:Array,
        required:true
    },
    filas:{
        type:Array,
        required:true
    }
});

console.log (campos);
</script>

<template>
    <h1>Listado de alumnos</h1>
        <table>
            <tr>
                <th v-for="(campo, index) in campos" :key="index" >
                    {{campo}}
                </th>
            </tr>
        </table>

</template>

<style scoped>

</style>
