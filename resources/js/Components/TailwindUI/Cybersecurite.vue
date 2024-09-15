<template>
  <div class="bg-white pt-0 pb-12 sm:py-12 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <!-- Title and description -->
      <IntersectionObserver v-slot="{ isIntersecting }">
        <div
          class="mx-auto max-w-2xl sm:text-center animate__animated"
          :class="isIntersecting ? 'animate__fadeInDown' : ''"
          style="animation-delay: 0.2s; animation-duration: 1s"
        >
          <h2 class="text-base font-semibold leading-7 text-red-600">
            Certificat de Suivi - SecNumacadémie
          </h2>
          <p
            class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
          >
            Modules en Sécurité Informatique
          </p>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            Ce certificat atteste que j'ai suivi les cours de la SecNumacadémie
            et obtenu les scores suivants aux évaluations des quatre modules sur
            la sécurité informatique.
          </p>
        </div>
      </IntersectionObserver>
    </div>

    <!-- PNG Image with smoother animation -->
    <IntersectionObserver v-slot="{ isIntersecting }">
      <div
        class="relative pt-16 animate__animated"
        :class="isIntersecting ? 'animate__fadeIn' : ''"
        style="
          animation-duration: 1s;
          animation-delay: 0.3s;
          opacity: 0;
          visibility: hidden;
        "
        :style="isIntersecting ? 'opacity: 1; visibility: visible;' : ''"
      >
        <div class="mx-auto max-w-7xl px-6 lg:px-8 flex justify-center">
          <img
            src="http://127.0.0.1:8000/storage/images/Certificat_ANSSI_CK.png"
            alt="Certificat de Suivi SecNumacadémie"
            class="w-[100%] lg:w-[80%] rounded-xl shadow-2xl ring-1 ring-gray-900/10 relative z-10"
          />
        </div>
      </div>
    </IntersectionObserver>

    <!-- Galleria with primevue and fade up animation -->
    <div class="mt-32 mx-auto max-w-7xl px-6 lg:px-8">
      <IntersectionObserver v-slot="{ isIntersecting }">
        <div
          class="mx-auto max-w-2xl sm:text-center animate__animated"
          :class="isIntersecting ? 'animate__fadeInDown' : ''"
          style="animation-delay: 0.2s; animation-duration: 1s"
        >
          <h2 class="text-base font-semibold leading-7 text-red-600">
            Certifications RGPD - CNIL
          </h2>
          <p
            class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
          >
            Modules sur la Protection des Données
          </p>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            J'ai obtenu les certifications suivantes après avoir complété
            plusieurs modules proposés par la CNIL, portant sur le RGPD et la
            sécurité des données.
          </p>
        </div>
      </IntersectionObserver>

      <!-- Galleria with fade up animation and centered -->
      <div class="flex justify-center mt-12">
        <IntersectionObserver
          v-slot="{ isIntersecting }"
          class="w-full lg:w-[60%] h-full shadow-lg flex justify-center items-center"
          :class="isIntersecting ? 'animate__fadeInUp' : ''"
          style="animation-duration: 1s; animation-delay: 0.3s"
        >
          <div class="w-full" style="animation-duration: 1s">
            <Galleria
              :value="images"
              :responsiveOptions="responsiveOptions"
              :numVisible="5"
              :showItemNavigators="true"
              containerStyle="width: 100%; padding: 3rem; margin: 0 auto"
              class="animate__animated animate__fadeInUp"
              style="animation-duration: 1s"
            >
              <template #item="slotProps">
                <img
                  :src="slotProps.item.itemImageSrc"
                  :alt="slotProps.item.alt"
                  class="w-full h-auto"
                />
              </template>
              <template #thumbnail="slotProps">
                <img
                  :src="slotProps.item.thumbnailImageSrc"
                  :alt="slotProps.item.alt"
                  class="w-full h-auto"
                />
              </template>
            </Galleria>
          </div>
        </IntersectionObserver>
      </div>
    </div>
  </div>
</template>

<script setup>
import IntersectionObserver from "@/Directives/IntersectionObserver.vue"; // Intersection Observer
import "animate.css"; // Animation styles
import Galleria from "primevue/galleria"; // PrimeVue Galleria
import { ref } from "vue"; // Ref for reactivity

// Galleria images (Replace with your own URLs)
const images = ref([
  {
    itemImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_1_CK.png",
    thumbnailImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_1_CK.png",
    alt: "Certificat RGPD Module 1",
  },
  {
    itemImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_2_CK.png",
    thumbnailImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_2_CK.png",
    alt: "Certificat RGPD Module 2",
  },
  {
    itemImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_3_CK.png",
    thumbnailImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_3_CK.png",
    alt: "Certificat RGPD Module 3",
  },
  {
    itemImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_4_CK.png",
    thumbnailImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_4_CK.png",
    alt: "Certificat RGPD Module 4",
  },
  {
    itemImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_5_CK.png",
    thumbnailImageSrc:
      "http://127.0.0.1:8000/storage/images/Certificat_Module_5_CK.png",
    alt: "Certificat RGPD Module 5",
  },
]);

// Responsive options for Galleria
const responsiveOptions = ref([
  {
    breakpoint: "1300px",
    numVisible: 4,
  },
  {
    breakpoint: "575px",
    numVisible: 1,
  },
]);
</script>
