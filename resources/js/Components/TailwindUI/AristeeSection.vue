<template>
  <div class="overflow-hidden bg-slate-100 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div
        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
      >
        <!-- Section de gauche : Image -->
        <IntersectionObserver v-slot="{ isIntersecting }">
          <div
            :class="[
              'flex items-start justify-end lg:order-first',
              isIntersecting
                ? 'animate__animated animate__fadeInLeft'
                : 'animate__animated animate__fadeOutLeft',
            ]"
          >
            <img
              src="/images/aristee.jpg"
              alt="Photo de l'école Aristée Valgora La Valette"
              class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
              width="2432"
              height="1442"
            />
          </div>
        </IntersectionObserver>

        <!-- Section de droite : Contenu -->
        <IntersectionObserver v-slot="{ isIntersecting }">
          <div
            :class="[
              'lg:ml-auto lg:pl-4 lg:pt-4',
              isIntersecting
                ? 'animate__animated animate__fadeInRight'
                : 'animate__animated animate__fadeOutRight',
            ]"
          >
            <div class="lg:max-w-lg">
              <h2
                :class="[
                  'text-base font-semibold leading-7 text-red-600',
                  isIntersecting
                    ? 'animate__animated animate__fadeInRight'
                    : 'animate__animated animate__fadeOutRight',
                ]"
              >
                Mon Parcours Académique
              </h2>
              <p
                :class="[
                  'mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl',
                  isIntersecting
                    ? 'animate__animated animate__fadeInRight'
                    : 'animate__animated animate__fadeOutRight',
                ]"
              >
                BTS SIO option SLAM en Alternance
              </p>
              <p
                :class="[
                  'mt-6 text-md leading-8 text-gray-600',
                  isIntersecting
                    ? 'animate__animated animate__fadeInRight'
                    : 'animate__animated animate__fadeOutRight',
                ]"
              >
                J'ai obtenu mon diplôme de BTS Services Informatiques aux
                Organisations, option Solutions Logicielles et Applications
                Métiers (SLAM), en alternance. Cette formation m'a permis de
                développer des compétences solides en développement
                d'applications et en gestion de projets informatiques.
              </p>
              <dl
                class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none"
              >
                <div
                  v-for="(feature, index) in features"
                  :key="feature.name"
                  :class="[
                    'relative pl-9',
                    isIntersecting
                      ? 'animate__animated animate__fadeInRight'
                      : 'animate__animated animate__fadeOutRight',
                  ]"
                  :style="
                    isIntersecting
                      ? 'animation-delay: ' +
                        index * 0.3 +
                        's; animation-duration: 1s;'
                      : ''
                  "
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
          </div>
        </IntersectionObserver>
      </div>
    </div>
  </div>
</template>

<script setup>
import IntersectionObserver from "@/Directives/IntersectionObserver.vue";
import "animate.css";

import {
  AcademicCapIcon,
  BriefcaseIcon,
  BuildingLibraryIcon,
} from "@heroicons/vue/20/solid";

const features = [
  {
    name: "Formation en alternance : ",
    description:
      "J'ai alterné entre les cours à l'école Aristée et le travail en entreprise, ce qui m'a offert une expérience professionnelle enrichissante dès ma formation.",
    icon: BriefcaseIcon,
  },
  {
    name: "École Aristée, La Valette-du-Var : ",
    description:
      "Située à La Valette-du-Var, l'école Aristée offre un environnement propice à l'apprentissage avec des enseignants passionnés et un suivi individuel.",
    icon: BuildingLibraryIcon,
  },
  {
    name: "Compétences développées : ",
    description:
      "Analyse des besoins, conception et développement d'applications, gestion de bases de données, cybersécurité et maîtrise de nombreux langages de programmation.",
    icon: AcademicCapIcon,
  },
];
</script>

