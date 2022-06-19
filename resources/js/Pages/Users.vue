<template>
 <Nav/>
<h1>Users</h1>
<p>
  {{time}}
</p>

  
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import Nav from '../Shared/Nav.vue'
export default {
props:{

},
components:{Link,Nav},
props:{
  time:String
}
}
</script>

<style>

</style>