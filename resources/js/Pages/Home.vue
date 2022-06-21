<template>
<Layout>


<section id="home" class="p-4 a">
<div class="row mt-5 container justify-content-center align-items-center">
   <div class="col">
   <h2 class="fw-bolder mt-4">Refrigerated pickup station <br>Temperature-controlled lockers for groceries</h2>
   <p class="lead mt-2">The cool lockers locker system is a versatile, electronically controllable pick-up station designed according to the latest technology: Intelligent temperature control creates different temperature zones in the compartments - whether chilled, frozen or tempered</p>
   <Link href="/about" class="btn btn-outline-dark px-5 py-2">Lockers endecken</Link>
  </div>
  <div class="col">
   <img class="img-fluid" src="image/cool-lockers-img.png" alt="">
  </div>
 
</div>

</section>

<section id="swiper" class="container b">
  <h2 class="fw-bolder m-4 text-center">Beliebt im Locktec.</h2>
  <Swiper/>
</section>

<section  class="container c">
  
  <div class="row">
    <div class="col   m-1 one justify-content-center align-items-center text-center">
       <span>Lockers</span>
       <h2>Smart locker system <br> Velosafe</h2>
    <Link href="/about" class="btn btn-outline-dark px-5 py-2">Weitere Informationen</Link>
    <img class="img-fluid mt-5" src="image/velosafe1.png" alt="">
    </div>
    <div class="col  m-1 two justify-content-center align-items-center text-center">
       <span>Lockers</span>
       <h2>Smart locker system <br>Locksafe basic</h2>
    <Link href="/about" class="btn btn-outline-dark px-5 py-2">Weitere Informationen</Link>
    <img  class="img-fluid mt-5" src="image/locksafe-basic1.png" alt="">
    </div>
  </div>

</section>

<section  class="container  d">
  <h2 class="fw-bolder m-4 text-center">Nach Kategorie einkaufen.</h2>
 <div class="row">
  
  <div class="col m-2 bg-white p-1 shadow  justify-content-center align-items-center text-center rounded">
   <img    src="image/luggage.png" alt="">
   <Link class="d-block btn btn-outline-dark m-4" href="/">Transport Locker</Link>
 
  </div>
  <div class="col m-2 bg-white p-1 shadow justify-content-center align-items-center text-center rounded">
   <img    src="image/medicine.png" alt="">
   <Link class="d-block btn btn-outline-dark m-4" href="/">Medicine Locker </Link>
 
  </div>
  <div class="col m-2 bg-white p-1 shadow justify-content-center align-items-center text-center rounded">
   <img    src="image/shopping-bag.png" alt="">
   <Link class="d-block btn btn-outline-dark m-4" href="/">Groceries Locker</Link>
 
  </div>
  <div class="col m-2 bg-white p-1 shadow  justify-content-center align-items-center text-center rounded">
   <img    src="image/box.png" alt="">
   <Link class="d-block btn btn-outline-dark m-4" href="/">Parcel Locker</Link>
 
  </div>
 
 </div>
</section>


<section class="contaienr ff p-4 ">
<div class="row  mt-5  container justify-content-center align-items-center">
   <div class="col ">
   <h2 class="fw-bolder mt-4">Paketstation mit Click & Collect – Servicebox <br>Abholstation – Anlieferung und Abholung rund um die Uhr</h2>
   <p class="lead mt-2">Servicebox ist eine elektronisch gesteuerte Schließfachanlage, die für die unbeaufsichtigte Übergabe von Waren, Paketen und Dienstleistungen entwickelt wurde. Sie findet Anwendung als Übergabestation bei innerbetrieblichen Übergabeabläufen, als Pickup Station oder Paketstation für Endverbraucher. Aufgrund der Multi-Carrier-Funktion können die Paketboxen von allen Postdienstleistern, Kurierdiensten und Serviceanbietern gleichzeitig genutzt werden. LockTec's Last-Mile-Solution - Servicebox.

</p>
   <Link href="/about" class="btn btn-outline-dark px-5 py-2">Lockers endecken</Link>
  </div>
  <div class="col">
   <img class="img-fluid" src="image/ff.png" alt="">
  </div>
 
</div>
</section>
<section class="contaienr f p-4 ">
<div class="row  mt-5  container justify-content-center align-items-center">

  <div class="col">
   <img class="img-fluid" src="image/locksafe_white.png" alt="">
  </div>
     <div class="col ">
   <h2 class="fw-bolder mt-4">Schließfachschrank Locksafe <br>Die neueste Generation: clevere Schließfächer aus Stahl</h2>
   <p class="lead mt-2">Diese Gepäckschließfachanlage wurde für den öffentlichen Bereich entwickelt. Aufgrund der soliden Verarbeitung, bietet der Schließfachschrank ein hohes Maß an Sicherheit. Ob Reisegepäck, Handtaschen, Einkaufstüten, Kleidung, Laptops, Smartphones, Ski und Snowboards, Golftaschen oder Kinderwagen – die verschiedenen Schließfachgrößen bieten genügend Stauraum für Gepäck jeder Größe. </p>
   <Link href="/about" class="btn btn-outline-dark px-5 py-2">Lockers endecken</Link>
  </div>
 
</div>
</section>
</Layout>




  
</template>

<script>

import Layout from '../Shared/Layout.vue'
import Swiper from '../Shared/Swiper.vue'
import {Link} from '@inertiajs/inertia-vue3';
export default {
props:{

},
components:{Layout,Swiper,Link}
}
</script>

<style scoped>
#home{
  height: 60vh;
 background: rgb(209 157 157 / 27%);
 margin-top: 2rem;
 
}


.one{
  background: rgb(219 225 233 / 80%);
  border-radius: 10px;
  padding: 5rem 2rem;
 
  
}


.two{
   background: rgb(180 206 182 / 37%);
  border-radius: 10px;
  padding: 5rem 2rem;
}


.two img {
  height: 400px;
}
a{
  text-decoration: none;
}


.a{
  margin-bottom: 8rem;
}
.b{
  margin-bottom: 8rem;
}

.c{
  margin-bottom: 8rem;
}

.d{
    margin-bottom: 8rem;
}

.d img {
  width: 100px;
}

.f{
  height: 60vh;
 background: rgba(209, 180, 157, 0.27);
 margin-bottom: 2rem;
}

.ff{
  height: 70vh;
 background: rgba(209, 180, 157, 0.27);
 margin-bottom: 2rem;
}




</style>