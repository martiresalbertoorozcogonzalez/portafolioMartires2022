<template>
 <div class="container">  
     
   <div class="text-3xl font-bold text-center mb-5 mt-5">
         <h2>Portafolio</h2>
   </div>
    

   <div class="flex justify-evenly text-center p-3">
         <Button class="bg-blue-400 hover:bg-blue-500 p-3" @click="llamarPaginasUno">Paginas 1</Button>
         <Button class="bg-yellow-400 hover:bg-yellow-500 p-3">Paginas 2</Button>
         <Button class="bg-purple-400 hover:bg-purple-600 p-3">Paginas 2</Button>
   </div>
</div>       
</template>

<script>
    export default {
        methods:{
          llamarPaginasUno() {
           console.log("Diste Click en el boton de paginaUno");
         }
      }  
    }
</script>
