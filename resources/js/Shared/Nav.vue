!<template>
  <nav>
  <ul class="d-flex align-items-center   mb-2 mb-lg-0">
    <li ><Link class="nav-item m-2" :class="{'text-danger':$page.component==='Home'}" href="/">Home</Link></li>
    <li><Link href="/users">Users</Link></li>
    <li><Link href="/about">About</Link></li>
    <li><Link class="btn btn-primary" href="/logout" method='post' as="button">Logout</Link></li>
  </ul>
</nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
props:{

},
components:{Link}
}
</script>

<style>

</style>