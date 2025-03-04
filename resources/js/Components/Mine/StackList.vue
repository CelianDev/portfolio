<template>
  <div class="mx-auto max-w-7xl overflow-hidden">
    <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <!-- Utilisation de IntersectionObserver pour le titre et les paragraphes -->
        <IntersectionObserver v-slot="{ isIntersecting }">
          <p
            class="text-base font-semibold leading-7 text-red-600 animate__animated"
            :class="
              isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'
            "
            style="animation-delay: 0.1s"
          >
            La trousse à outils
          </p>
        </IntersectionObserver>

        <IntersectionObserver v-slot="{ isIntersecting }">
          <h2
            class="mt-2 text-4xl uppercase font-bold tracking-tight text-gray-900 sm:text-6xl animate__animated"
            :class="
              isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'
            "
            style="animation-delay: 0.3s"
          >
            Ma stack
          </h2>
        </IntersectionObserver>

        <IntersectionObserver v-slot="{ isIntersecting }">
          <p
            class="mt-6 text-lg leading-8 text-gray-600 animate__animated"
            :class="
              isIntersecting ? 'animate__fadeInUp' : 'animate__fadeOutDown'
            "
            style="animation-delay: 0.5s"
          >
            Découvrez l'ensemble de mon arsenal de développeur 🧙‍♂️
          </p>
        </IntersectionObserver>
      </div>

      <!-- Grille pour afficher les éléments de stack -->
      <div
        class="pt-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-12"
      >
        <!-- Boucle v-for pour générer dynamiquement les div -->
        <div
          v-for="(item, index) in stack"
          :key="index"
          class="flex justify-center items-center flex-col"
        >
          <!-- Utilisation de IntersectionObserver pour chaque div -->
          <IntersectionObserver v-slot="{ isIntersecting }">
            <div
              class="flex justify-center items-center flex-col w-full max-w-[200px]"
              :class="
                isIntersecting
                  ? 'animate__animated animate__fadeInUp'
                  : 'animate__animated animate__fadeOutDown'
              "
              :style="
                isIntersecting ? `animation-delay: ${index * 0.07}s;` : ''
              "
            >
              <img
                :src="item.src"
                class="inline-block h-20 w-auto object-cover object-center"
                :alt="item.title"
              />
              <h4
                class="mt-4 text-lg font-semibold leading-6 text-gray-900 text-center"
              >
                {{ item.title }}
              </h4>
            </div>
          </IntersectionObserver>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { reactive } from "vue";
import "animate.css"; // Importer animate.css pour les animations
import IntersectionObserver from "@/Directives/IntersectionObserver.vue"; // Assurez-vous d'avoir le composant IntersectionObserver

// Données réactives de la stack
const stack = reactive([
  { title: "Laravel", src: "/images/laravel.png" },
  { title: "Vue.js", src: "/images/vue.png" },
  { title: "Flutter", src: "/images/flutter.png" },
  { title: "FastAPI", src: "/images/fastapi.png" },
  { title: "HTML5", src: "/images/html.png" },
  { title: "CSS3", src: "/images/css.png" },
  { title: "JS", src: "/images/js.png" },
  { title: "Tailwind/Bootstrap", src: "/images/tailwind.png" },
  { title: "PHP", src: "/images/php.png" },
  { title: "SQL", src: "/images/sql.png" },
  { title: "Python", src: "/images/python.png" },
  { title: "Git", src: "/images/git.png" },
  { title: "Jira", src: "/images/jira.png" },
  { title: "Docker", src: "/images/docker.png" },
  { title: "Raspberry Pi", src: "/images/raspberry.png" },
  { title: "VS Code", src: "/images/vsc.png" },
]);
</script>
