<template>
  <header class="bg-white">
    <nav
      class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
      aria-label="Global"
    >
      <div class="flex lg:flex-1">
        <Link
          :href="route('portfolio.index')"
          class="-m-1.5 p-1.5 flex items-center space-x-2"
        >
          <span class="sr-only">Your Portfolio</span>
          <div
            class="h-10 w-10 flex items-center justify-center rounded-full bg-gradient-to-r from-red-500 to-orange-500 shadow-md"
          >
            <span class="text-white font-bold text-lg">CK</span>
          </div>
        </Link>
      </div>
      <div class="flex lg:hidden">
        <button
          type="button"
          class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
          @click="mobileMenuOpen = true"
        >
          <span class="sr-only">Open main menu</span>
          <Bars3Icon class="h-6 w-6" aria-hidden="true" />
        </button>
      </div>
      <PopoverGroup class="hidden lg:flex lg:gap-x-12">
        <Link
          :href="route('portfolio.cv')"
          class="text-sm font-semibold leading-6 text-gray-900"
        >
          CV
        </Link>
        <Link
          :href="route('portfolio.competences')"
          class="text-sm font-semibold leading-6 text-gray-900"
        >
          Compétences BTS SIO
        </Link>

        <!-- <Popover class="relative">
          <PopoverButton
            class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
          >
            Réalisation Pro
            <ChevronDownIcon
              class="h-5 w-5 flex-none text-gray-400"
              aria-hidden="true"
            />
          </PopoverButton>

          <transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="opacity-0 translate-y-1"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition ease-in duration-150"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 translate-y-1"
          >
            <PopoverPanel
              class="absolute -left-8 top-full z-20 mt-3 w-56 rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5"
            >
              <Link
                v-for="item in company"
                :key="item.name"
                :href="route('portfolio.index')"
                class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50"
                >{{ item.name }}</Link
              >
            </PopoverPanel>
          </transition>
        </Popover>
        <Link
          href="{{ route('portfolio.index') }}"
          class="text-sm font-semibold leading-6 text-gray-900"
        >
          Veille Technologique
        </Link> -->
        <Link
          :href="route('portfolio.cybersecurite')"
          class="text-sm font-semibold leading-6 text-gray-900"
        >
          Cybersécurité
        </Link>
        <!-- <Link
          href="{{ route('portfolio.index') }}"
          class="text-sm font-semibold leading-6 text-gray-900"
        >
          Mes Projets
        </Link> -->
        <Link
          :href="route('portfolio.contact')"
          class="text-sm font-semibold leading-6 text-gray-900"
        >
          Contact
        </Link>
      </PopoverGroup>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end"></div>
    </nav>
    <Dialog
      class="lg:hidden"
      @close="mobileMenuOpen = false"
      :open="mobileMenuOpen"
    >
      <div class="fixed inset-0 z-20" />
      <DialogPanel
        class="fixed inset-y-0 right-0 z-20 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
      >
        <div class="flex items-center justify-between">
          <Link
            :href="route('portfolio.index')"
            class="-m-1.5 p-1.5 flex items-center space-x-2"
          >
            <span class="sr-only">Your Portfolio</span>
            <div
              class="h-10 w-10 flex items-center justify-center rounded-full bg-gradient-to-r from-red-500 to-orange-500 shadow-md"
            >
              <span class="text-white font-bold text-lg">CK</span>
            </div>
          </Link>
          <button
            type="button"
            class="-m-2.5 rounded-md p-2.5 text-gray-700"
            @click="mobileMenuOpen = false"
          >
            <span class="sr-only">Close menu</span>
            <XMarkIcon class="h-6 w-6" aria-hidden="true" />
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <Link
                :href="route('portfolio.cv')"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >CV</Link
              >
              <Link
                :href="route('portfolio.competences')"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >Compétences BTS SIO</Link
              >

              <!-- <Disclosure as="div" class="-mx-3" v-slot="{ open }">
                <DisclosureButton
                  class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >
                  Réalisation Pro
                  <ChevronDownIcon
                    :class="[open ? 'rotate-180' : '', 'h-5 w-5 flex-none']"
                    aria-hidden="true"
                  />
                </DisclosureButton>
                <DisclosurePanel class="mt-2 space-y-2">
                  <DisclosureButton
                    v-for="item in company"
                    :key="item.name"
                    as="Link"
                    :href="route('portfolio.index')"
                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                    >{{ item.name }}</DisclosureButton
                  >
                </DisclosurePanel>
              </Disclosure>
              <Link
                href="{{ route('portfolio.index') }}"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
              >
                Veille Technologique
              </Link> -->
              <Link
                :href="route('portfolio.cybersecurite')"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
              >
                Cybersécurité
              </Link>
              <!-- <Link
                href="{{ route('portfolio.index') }}"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
              >
                Mes Projets
              </Link> -->
              <Link
                :href="route('portfolio.contact')"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
              >
                Contact
              </Link>
            </div>
          </div>
        </div>
      </DialogPanel>
    </Dialog>
  </header>
</template>

<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import {
  Dialog,
  DialogPanel,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Popover,
  PopoverButton,
  PopoverGroup,
  PopoverPanel,
} from "@headlessui/vue";
import {
  ArrowPathIcon,
  Bars3Icon,
  ChartPieIcon,
  CursorArrowRaysIcon,
  FingerPrintIcon,
  SquaresPlusIcon,
  XMarkIcon,
} from "@heroicons/vue/24/outline";
import {
  ChevronDownIcon,
  PhoneIcon,
  PlayCircleIcon,
} from "@heroicons/vue/20/solid";

const products = [
  {
    name: "Analytics",
    description: "Get a better understanding of your traffic",
    href: "#",
    icon: ChartPieIcon,
  },
  {
    name: "Engagement",
    description: "Speak directly to your customers",
    href: "#",
    icon: CursorArrowRaysIcon,
  },
  {
    name: "Security",
    description: "Your customers’ data will be safe and secure",
    href: "#",
    icon: FingerPrintIcon,
  },
  {
    name: "Integrations",
    description: "Connect with third-party tools",
    href: "#",
    icon: SquaresPlusIcon,
  },
  {
    name: "Automations",
    description: "Build strategic funnels that will convert",
    href: "#",
    icon: ArrowPathIcon,
  },
];
const callsToAction = [
  { name: "Watch demo", href: "#", icon: PlayCircleIcon },
  { name: "Contact sales", href: "#", icon: PhoneIcon },
];
// const company = [
//   { name: "Réalisation professionelles en entreprise", href: "#" },
//   { name: "Réalisation professionelles en centre", href: "#" },
// ];

const mobileMenuOpen = ref(false);
</script>
