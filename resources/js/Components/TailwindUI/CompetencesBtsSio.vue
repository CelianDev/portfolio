<template>
  <div class="bg-white pt-0 pb-12 sm:py-12 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <!-- Titre et description -->
      <IntersectionObserver v-slot="{ isIntersecting }">
        <div
          class="mx-auto max-w-2xl sm:text-center animate__animated"
          :class="isIntersecting ? 'animate__fadeInDown' : 'animate__fadeOutUp'"
        >
          <h2 class="text-base font-semibold leading-7 text-red-600">
            Tableau de synthèse des réalisations professionnelles
          </h2>
          <p
            class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
          >
            BTS SIO SLAM
          </p>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            Découvrez le tableau récapitulatif des compétences validées et des
            réalisations professionnelles réalisées dans le cadre de mes études
            à Aristée Formation.
          </p>
        </div>
      </IntersectionObserver>

      <!-- Bouton pour télécharger le PDF -->
      <IntersectionObserver v-slot="{ isIntersecting }">
        <div
          class="mt-8 sm:flex sm:justify-center animate__animated"
          :class="isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'"
        >
          <a
            href="http://127.0.0.1:8000/storage/documents/Celian_Kouas_Tableau_de_synthese.pdf"
            download
            class="inline-block rounded-md bg-red-600 px-5 py-3 text-sm font-semibold text-white shadow-[0_10px_20px_rgba(0,0,0,0.5)] hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 relative z-10"
          >
            Télécharger le tableau en PDF
          </a>
        </div>
      </IntersectionObserver>
    </div>

    <!-- Image PNG avec animation venant du bas -->
    <IntersectionObserver v-slot="{ isIntersecting }">
      <div
        class="relative pt-16 animate__animated"
        :class="isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'"
        :style="
          isIntersecting ? 'animation-delay: 0.2s; animation-duration: 1s;' : ''
        "
      >
        <div class="mx-auto max-w-7xl px-6 lg:px-8 flex justify-center">
          <img
            src="http://127.0.0.1:8000/storage/images/Celian_Kouas_Tableau_de_synthese.png"
            alt="Tableau de synthèse des réalisations professionnelles"
            class="w-[100%] lg:w-[80%] rounded-xl shadow-2xl ring-1 ring-gray-900/10 relative z-10"
          />
        </div>
      </div>
    </IntersectionObserver>
  </div>
</template>

<script setup>
import IntersectionObserver from "@/Directives/IntersectionObserver.vue"; // Votre composant d'observation
import "animate.css"; // Importation des animations
</script>
