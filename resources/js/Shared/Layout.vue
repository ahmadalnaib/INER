<template>
<section class="bg-light">
<header class="d-flex justify-content-around align-items-center  ">
  <h1>{{$page.props.namee}}</h1>
 <Nav/>
</header>
</section>

 <section class="container">
  <slot/>
 </section>

</template>

<script>
import Nav from '../Shared/Nav.vue'
export default {
components:{
  Nav
}
}
</script>

<style>

</style>