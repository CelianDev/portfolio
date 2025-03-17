<template>
  <footer class="bg-white">
    <div
      class="mx-auto border-t border-gray-300 max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8"
    >
      <!-- Navigation principale -->
      <nav
        class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12"
        aria-label="Footer"
      >
        <div v-for="item in navigation.main" :key="item.name" class="pb-6">
          <Link
            :href="item.href"
            class="text-sm leading-6 text-gray-600 hover:text-gray-900"
          >
            {{ item.name }}
          </Link>
        </div>
      </nav>

      <!-- Réseaux sociaux -->
      <div class="mt-10 flex justify-center space-x-10">
        <a
          v-for="item in navigation.social"
          :key="item.name"
          :href="item.href"
          target="_blank"
          rel="noopener noreferrer"
          class="text-gray-400 hover:text-gray-500"
        >
          <span class="sr-only">{{ item.name }}</span>
          <img
            :src="item.icon"
            :alt="item.name"
            width="24"
            height="24"
            class="h-6 w-6"
          />
        </a>
      </div>

      <!-- Bas de page -->
      <p class="mt-10 text-center text-xs leading-5 text-gray-500">
        &copy; 2025 Célian Kouas - Développeur Web Full Stack. Tous droits
        réservés.
      </p>
    </div>
  </footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

/**
 * Tableau de navigation
 */
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
    {
      name: "Réalisations Pro en entreprise",
      href: route("portfolio.proEntreprise"),
    },
    {
      name: "Réalisations Pro en centre",
      href: route("portfolio.proCentre"),
    },
    {
      name: "Cybersécurité",
      href: route("portfolio.cybersecurite"),
    },
    {
      name: "Contact",
      href: route("portfolio.contact"),
    },
  ],
  social: [
    {
      name: "GitHub",
      href: "https://github.com/CelianDev",
      icon: "/images/github.png",
    },
    {
      name: "LinkedIn",
      href: "https://linkedin.com/in/célian-kouas-66b8851aa",
      icon: "/images/linkedin.png",
    },
    {
      name: "Codewars",
      href: "https://codewars.com/users/Kewans",
      icon: "/images/codewars.png",
    },
  ],
};
</script>
