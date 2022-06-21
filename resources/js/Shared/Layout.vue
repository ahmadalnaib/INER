<template>
<section class="">
<header class="">

 <Nav/>
</header>
</section>

 <section class="container ">
  <slot/>
 </section>
<section class="mt-5">
  <Footer/>
</section>
</template>

<script>
import Nav from '../Shared/Nav.vue'
import Footer from '../Shared/Footer.vue'
export default {
components:{
  Nav,
  Footer
}
}
</script>

<style>

</style>