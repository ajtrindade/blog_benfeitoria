<template>
<div class="menu">
      <inertia-link  href="/">Home</inertia-link>
      <inertia-link  href="/register">Registro</inertia-link>
      <inertia-link  href="/login">Login</inertia-link>
    <div>
       <slot />
    </div>
</div>  
</template>

<script>
export default {

}
</script>

<style>
 .menu {
     font-size: 20px;
     margin-top: 80px;
     margin-left: 100px;
     
 }
</style>