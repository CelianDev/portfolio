<template>
  <div ref="observerRef">
    <slot :isIntersecting="isIntersecting"></slot>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";

const props = defineProps({
  threshold: {
    type: Number,
    default: 0.1,
  },
  rootMargin: {
    type: String,
    default: "0px",
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
      threshold: props.threshold,
      rootMargin: props.rootMargin,
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
