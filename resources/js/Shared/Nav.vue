<template>
 
<div class="container ">
<nav class="navbar fixed-top    navbar-expand-lg bg-white shadow mb-5">
  <div class="container">
    <Link class="navbar-brand" href="/">Locktec</Link>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <Link :class="{'text-danger':$page.component==='Home'}" class="nav-link" aria-current="page" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link :class="{'text-danger':$page.component==='Produkte'}" class="nav-link" aria-current="page" href="/Produkte">Produkte</Link>
        </li>
        <li class="nav-item">
          <Link :class="{'text-danger':$page.component==='About'}" class="nav-link" aria-current="page" href="/About">About</Link>
        </li>

      
       
       
      </ul>
    </div>
  </div>
</nav>
</div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
props:{

},
components:{Link}
}
</script>

<style  scoped>

</style>

