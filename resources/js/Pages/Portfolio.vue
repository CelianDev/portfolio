<template>
  <div class="bg-white">
    <Navbar />

    <!-- Transition pour les pages -->
    <transition
      mode="out-in"
      appear
      enter-active-class="animate__animated animate__fadeIn"
      leave-active-class="animate__animated animate__fadeOut"
    >
      <div :key="content">
        <!-- Section Home -->
        <div v-if="content === 'home'" key="home">
          <Hero />
          <AristeeSection />
          <StackList />
        </div>
        <!-- Section CV -->
        <div v-if="content === 'cv'" key="cv">
          <CvSection />
        </div>
        <!-- Section Compétences BTS SIO -->
        <div v-if="content === 'competences'" key="cv">
          <CompetencesBtsSio />
        </div>
        <!-- Section Compétences BTS SIO -->
        <div v-if="content === 'cybersecurite'" key="cv">
          <Cybersecurite />
        </div>
      </div>
    </transition>

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
import CompetencesBtsSio from "@/Components/TailwindUI/CompetencesBtsSio.vue";
import Cybersecurite from "@/Components/TailwindUI/Cybersecurite.vue";

import { usePage } from "@inertiajs/vue3";
import "animate.css";

const page = usePage();
const content = page.props.content;
</script>
