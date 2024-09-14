<!-- IntersectionObserver.vue -->
<template>
  <div ref="observerRef">
    <slot :isIntersecting="isIntersecting"></slot>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch } from "vue";

// Props pour le seuil d'intersection et le rootMargin
const props = defineProps({
  threshold: {
    type: Number,
    default: 0.1, // Valeur par défaut si rien n'est fourni
  },
  rootMargin: {
    type: String,
    default: "0px", // Pas de marge par défaut
  },
});

const observerRef = ref(null);
const isIntersecting = ref(false);

let observer;

onMounted(() => {
  observer = new IntersectionObserver(
    ([entry]) => {
      isIntersecting.value = entry.isIntersecting;
    },
    {
      threshold: props.threshold, // Utilisation de la prop threshold
      rootMargin: props.rootMargin, // Utilisation de la prop rootMargin
    }
  );

  if (observerRef.value) {
    observer.observe(observerRef.value);
  }
});

onUnmounted(() => {
  if (observerRef.value) {
    observer.unobserve(observerRef.value);
  }
});
</script>
