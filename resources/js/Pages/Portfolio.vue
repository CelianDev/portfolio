<template>
  <div class="bg-white">
    <Navbar />
    <div v-if="content === 'home'">
      <Hero />
      <AristeeSection />
      <StackList />
    </div>
    <div v-if="content === 'cv'">
      <CvSection />
    </div>
    <Footer />
  </div>
  <scrollTop />
</template>

<script setup>
import Navbar from "@/Components/TailwindUI/Navbar.vue";
import Hero from "@/Components/TailwindUI/Hero.vue";
import AristeeSection from "@/Components/TailwindUI/AristeeSection.vue";
import StackList from "@/Components/Mine/StackList.vue";
import Footer from "@/Components/TailwindUI/Footer.vue";
import scrollTop from "@/Components/Mine/ScrollTop.vue";
import CvSection from "@/Components/TailwindUI/CvSection.vue";

import { usePage } from "@inertiajs/vue3";
const page = usePage();
const content = page.props.content;
</script>
