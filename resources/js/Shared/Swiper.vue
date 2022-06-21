<template>
  <swiper
    :slidesPerView="3"
    :spaceBetween="30"
    :slidesPerGroup="3"
   
    :loopFillGroupWithBlank="true"
   
    :navigation="true"
    :modules="modules"
    class="mySwiper"
  >
    <swiper-slide class="shadow-sm">
      <Link href="/about">
      <img src="image/c.png" alt="">
      <Link class="btn btn-outline-dark  mt-2" href="/">Cool locker</Link>
   </Link>
    </swiper-slide>
    <swiper-slide class="shadow-sm">
      <Link href="/about">
      <img src="image/cool-lockers-img.png" alt="">
     <Link class="btn btn-outline-dark  mt-2" href="/">Servicebox</Link>
   </Link>
    </swiper-slide>
    <swiper-slide class="shadow-sm">
      <Link href="/about">
      <img src="image/locksafe_white.png" alt="">
     <Link class="btn btn-outline-dark  mt-2" href="/">Locksafe</Link>
   </Link>
    </swiper-slide>
    <swiper-slide class="shadow-sm a">
      <Link href="/about">
      <img src="image/mechanic_gross.svg" alt="">
     <Link class="btn btn-outline-dark mt-2" href="/">Locksafe mechanic</Link>
   </Link>
    </swiper-slide>
   
   
  </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
import {Link} from '@inertiajs/inertia-vue3';
// Import Swiper styles
import "swiper/css";


import "swiper/css/navigation";

// import "../css/style.css";

// import required modules
import {  Navigation } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
    Link
  },
  setup() {
    return {
      modules: [ Navigation],
    };
  },
};
</script>

<style scoped>


.swiper {
  width: 100%;
  height: 50vh;
  
}
.swiper-button-prev{
  background: red ;
}

.swiper .swiper-button-prev{
  color: red !important;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #f1f1f1;
  margin: 1rem auto;
  padding: 1rem;

  /* Center slide text vertically */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;

}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: contain;
 
}


a{
  text-decoration:  none;
}

.a img {
  height: 200px;
}

</style>