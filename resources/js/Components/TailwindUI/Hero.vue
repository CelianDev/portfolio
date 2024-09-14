<template>
  <IntersectionObserver v-slot="{ isIntersecting }">
    <CircleProfile
      :class="[
        isIntersecting
          ? 'animate__animated animate__fadeInDown'
          : 'animate__animated animate__fadeOutUp',
      ]"
    />
  </IntersectionObserver>

  <div class="relative lg:h-[calc(100vh-100px)]">
    <div class="mx-auto lg:h-[calc(100vh-100px)] max-w-7xl">
      <IntersectionObserver v-slot="{ isIntersecting }">
        <div
          :class="[
            'relative z-10 py-14 lg:w-full lg:max-w-2xl',
            isIntersecting ? '' : 'animate__animated animate__fadeOutLeft',
          ]"
        >
          <svg
            class="absolute lg:h-[calc(100vh-100px)] inset-y-0 right-8 hidden w-80 translate-x-1/2 transform fill-white lg:block"
            viewBox="0 0 100 100"
            preserveAspectRatio="none"
            aria-hidden="true"
          >
            <polygon points="0,0 90,0 50,100 0,100" />
          </svg>

          <div class="relative px-6 lg:px-8 lg:py-56 lg:pr-0">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
              <!-- Titre -->
              <h1
                :class="[
                  'text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl',
                  isIntersecting
                    ? 'animate__animated animate__fadeInLeft'
                    : 'animate__animated animate__fadeOutLeft',
                ]"
                :style="
                  isIntersecting
                    ? 'animation-delay: 0s; animation-duration: 1s;'
                    : 'animation-duration: 1s;'
                "
              >
                Célian Kouas
              </h1>
              <!-- Paragraphe -->
              <p
                :class="[
                  'mt-6 text-lg leading-8 text-gray-600',
                  isIntersecting
                    ? 'animate__animated animate__fadeInLeft'
                    : 'animate__animated animate__fadeOutLeft',
                ]"
                :style="
                  isIntersecting
                    ? 'animation-delay: 0.2s; animation-duration: 1s;'
                    : 'animation-duration: 1s;'
                "
              >
                Développeur web full stack passionné, je maîtrise front-end et
                back-end pour concevoir des applications performantes et
                intuitives.
              </p>
              <!-- Boutons -->
              <div
                :class="[
                  'mt-10 flex items-center gap-x-6',
                  isIntersecting
                    ? 'animate__animated animate__fadeInLeft'
                    : 'animate__animated animate__fadeOutLeft',
                ]"
                :style="
                  isIntersecting
                    ? 'animation-delay: 0.4s; animation-duration: 1s;'
                    : 'animation-duration: 1s;'
                "
              >
                <a
                  href="#"
                  class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                  >Voir mon CV</a
                >
                <a
                  href="#"
                  class="text-sm font-semibold leading-6 text-gray-900"
                  >Me contacter <span aria-hidden="true">→</span></a
                >
              </div>
            </div>
          </div>
        </div>
      </IntersectionObserver>
    </div>

    <IntersectionObserver v-slot="{ isIntersecting }">
      <div
        :class="[
          'bg-gray-50 hidden lg:block lg:h-[calc(100vh-100px)] lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2',
          isIntersecting
            ? 'animate__animated animate__fadeInRight'
            : 'animate__animated animate__fadeOutRight',
        ]"
      >
        <img
          class="aspect-[3/2] hidden lg:block object-cover lg:aspect-auto lg:h-full lg:w-full"
          src="http://127.0.0.1:8000/storage/images/me_v4.jpg"
          alt=""
        />
      </div>
    </IntersectionObserver>
  </div>
</template>

<script setup>
import "animate.css";
import CircleProfile from "@/Components/Mine/CircleProfile.vue";
import IntersectionObserver from "@/Directives/IntersectionObserver.vue";
</script>
