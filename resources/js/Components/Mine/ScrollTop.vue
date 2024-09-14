<template>
  <div>
    <transition
      enter-active-class="animate__animated animate__fadeInUp custom-speed"
      leave-active-class="animate__animated animate__fadeOutDown custom-speed"
    >
      <button
        v-if="isVisible"
        @click="scrollToTop"
        class="fixed w-12 h-12 bottom-12 right-12 bg-red-600 text-white p-3 rounded-full shadow-lg hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-300"
      >
        ↑
      </button>
    </transition>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import "animate.css"; // Importation d'Animate.css

const isVisible = ref(false);

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

const handleScroll = () => {
  isVisible.value = window.scrollY > 200;
};

onMounted(() => {
  window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
  window.removeEventListener("scroll", handleScroll);
});
</script>

<style scoped>
/* Ajoutez une animation plus rapide */
.custom-speed {
  animation-duration: 0.3s; /* Ajustez la durée à 300ms */
}
</style>
