<template>
  <footer class="bg-white">
    <div
      class="mx-auto border-t border-gray-300 max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8"
    >
      <nav
        class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12"
        aria-label="Footer"
      >
        <div v-for="item in navigation.main" :key="item.name" class="pb-6">
          <Link
            :href="item.href"
            class="text-sm leading-6 text-gray-600 hover:text-gray-900"
            >{{ item.name }}</Link
          >
        </div>
      </nav>
      <div class="mt-10 flex justify-center space-x-10">
        <Link
          v-for="item in navigation.social"
          :key="item.name"
          :href="item.href"
          class="text-gray-400 hover:text-gray-500"
        >
          <span class="sr-only">{{ item.name }}</span>
          <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
        </Link>
      </div>
      <p class="mt-10 text-center text-xs leading-5 text-gray-500">
        &copy; 2025 Célian Kouas - Développeur Web Full Stack. Tous droits
        réservés.
      </p>
    </div>
  </footer>
</template>

<script setup>
import { defineComponent, h } from "vue";
import { Link } from "@inertiajs/vue3";

const navigation = {
  main: [
    {
      name: "CV",
      href: route("portfolio.cv"),
    },
    {
      name: "Compétences BTS SIO",
      href: route("portfolio.competences"),
    },
    // {
    //   name: "Réalisation Pro",
    //   href: "#",
    // },
    // {
    //   name: "Veille Technologique",
    //   href: "#",
    // },
    {
      name: "Cybersécurité",
      href: route("portfolio.cybersecurite"),
    },
    // {
    //   name: "Mes Projets",
    //   href: "#",
    // },
    {
      name: "Contact",
      href: route("portfolio.contact"),
    },
  ],
  social: [
    {
      name: "GitHub",
      href: "https://github.com/CelianDev",
      icon: defineComponent({
        render: () =>
          h(
            "a",
            {
              href: "https://github.com/CelianDev",
              target: "_blank",
              rel: "noopener noreferrer",
            },
            [
              h("img", {
                src: "/images/github.png",
                alt: "GitHub",
                width: 24,
                height: 24,
              }),
            ]
          ),
      }),
    },
    {
      name: "LinkedIn",
      href: "https://linkedin.com/in/célian-kouas-66b8851aa",
      icon: defineComponent({
        render: () =>
          h(
            "a",
            {
              href: "https://linkedin.com/in/célian-kouas-66b8851aa",
              target: "_blank",
              rel: "noopener noreferrer",
            },
            [
              h("img", {
                src: "/images/linkedin.png",
                alt: "LinkedIn",
                width: 24,
                height: 24,
              }),
            ]
          ),
      }),
    },
    {
      name: "Codewars",
      href: "https://codewars.com/users/Kewans",
      icon: defineComponent({
        render: () =>
          h(
            "a",
            {
              href: "https://codewars.com/users/Kewans",
              target: "_blank",
              rel: "noopener noreferrer",
            },
            [
              h("img", {
                src: "/images/codewars.png",
                alt: "Codewars",
                width: 24,
                height: 24,
              }),
            ]
          ),
      }),
    },
  ],
};
</script>
