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
            Mon Curriculum Vitae
          </h2>
          <p
            class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
          >
            Célian Kouas
          </p>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            Développeur passionné, j'apporte des solutions innovantes en matière
            de développement web full stack. Voici un aperçu de mon parcours
            professionnel et académique ainsi que de mes compétences techniques.
          </p>
        </div>
      </IntersectionObserver>
      <!-- Bouton pour télécharger le CV -->
      <IntersectionObserver v-slot="{ isIntersecting }">
        <div
          class="mt-8 sm:flex sm:justify-center animate__animated"
          :class="isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'"
        >
          <a
            href="http://127.0.0.1:8000/storage/documents/CV_Celian_Kouas.pdf"
            download
            class="inline-block rounded-md bg-red-600 px-5 py-3 text-sm font-semibold text-white shadow-[0_10px_20px_rgba(0,0,0,0.5)] hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 relative z-10"
          >
            Télécharger mon CV en PDF
          </a>
        </div>
      </IntersectionObserver>
    </div>

    <!-- Image avec animation venant du bas -->
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
            src="http://127.0.0.1:8000/storage/images/CV_Celian_Kouas.png"
            alt="Aperçu du CV"
            class="w-[100%] lg:w-[50%] rounded-xl shadow-2xl ring-1 ring-gray-900/10 relative z-10"
          />
        </div>
      </div>
    </IntersectionObserver>

    <!-- Liste des fonctionnalités -->
    <IntersectionObserver v-slot="{ isIntersecting }">
      <div
        class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8 animate__animated"
        :class="isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'"
      >
        <dl
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16"
        >
          <div
            v-for="(feature, index) in features"
            :key="feature.name"
            class="relative pl-9 animate__animated"
            :class="
              isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'
            "
            :style="`animation-delay: ${index * 0.1}s`"
          >
            <dt class="inline font-semibold text-gray-900">
              <component
                :is="feature.icon"
                class="absolute left-1 top-1 h-5 w-5 text-red-600"
                aria-hidden="true"
              />
              {{ feature.name }}
            </dt>
            {{ " " }}
            <dd class="inline">{{ feature.description }}</dd>
          </div>
        </dl>
      </div>
    </IntersectionObserver>
  </div>
</template>

<script setup>
import {
  AcademicCapIcon,
  BriefcaseIcon,
  CodeBracketIcon,
  FingerPrintIcon,
  ServerIcon,
  GlobeAltIcon,
} from "@heroicons/vue/20/solid";
import IntersectionObserver from "@/Directives/IntersectionObserver.vue"; // Votre composant d'observation
import "animate.css"; // Importation des animations

const features = [
  {
    name: "Expérience professionnelle",
    description:
      "Plusieurs années d'expérience en développement web full stack, dans la création et la gestion de projets complexes.",
    icon: BriefcaseIcon,
  },
  {
    name: "Formation",
    description:
      "Diplôme de BTS Services Informatiques aux Organisations, option Solutions Logicielles et Applications Métiers (SLAM).",
    icon: AcademicCapIcon,
  },
  {
    name: "Compétences techniques",
    description:
      "Maîtrise de nombreux langages ainsi que de frameworks comme Laravel, Vue.js, et React.",
    icon: CodeBracketIcon,
  },
  {
    name: "Cybersécurité",
    description:
      "Connaissance approfondie des bonnes pratiques en matière de sécurité des applications web et gestion des données sensibles.",
    icon: FingerPrintIcon,
  },
  {
    name: "Gestion de serveurs",
    description:
      "Administration et maintenance des serveurs dédiés pour l'hébergement d'applications web complexes.",
    icon: ServerIcon,
  },
  {
    name: "Projets collaboratifs",
    description:
      "Participation à des projets collaboratifs avec des équipes multidisciplinaires, mettant en avant l'importance de la communication.",
    icon: GlobeAltIcon,
  },
];
</script>
