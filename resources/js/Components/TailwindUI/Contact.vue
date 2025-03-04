<template>
  <div class="relative isolate bg-white">
    <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
      <!-- Section de gauche : Infos -->
      <div
        class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48"
      >
        <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
          <div
            class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-red-200 ring-1 ring-gray-900/10 lg:w-1/2"
          >
            <svg
              class="absolute inset-0 size-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
              aria-hidden="true"
            >
              <defs>
                <pattern
                  id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527"
                  width="200"
                  height="200"
                  x="100%"
                  y="-1"
                  patternUnits="userSpaceOnUse"
                >
                  <path d="M130 200V.5M.5 .5H200" fill="none" />
                </pattern>
              </defs>
              <rect width="100%" height="100%" stroke-width="0" fill="white" />
              <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
              </svg>
              <rect
                width="100%"
                height="100%"
                stroke-width="0"
                fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)"
              />
            </svg>
          </div>
          <h2
            class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
          >
            Me Contacter
          </h2>
          <p class="mt-6 text-lg/8 text-gray-600">
            Vous pouvez m'écrire un mail directement ou bien passer par le
            formulaire de contact.
          </p>
          <dl class="mt-10 space-y-4 text-base/7 text-gray-600">
            <div class="flex gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Email</span>
                <EnvelopeIcon
                  class="h-7 w-6 text-gray-400"
                  aria-hidden="true"
                />
              </dt>
              <dd>
                <a class="hover:text-gray-900" href="mailto:celian_ck@proton.me"
                  >celian_ck@proton.me</a
                >
              </dd>
            </div>
          </dl>
        </div>
      </div>

      <!-- Section de droite : Formulaire -->
      <!-- On empêche le rechargement en utilisant @submit.prevent, et on déclenche la fonction submitForm -->
      <form
        @submit.prevent="submitForm"
        class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48"
      >
        <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
          <!-- Champ Nom -->
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
              <label
                for="name"
                class="block text-sm/6 font-semibold text-gray-900"
                >Votre nom</label
              >
              <div class="mt-2.5">
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  id="name"
                  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
                />
                <!-- Afficher les erreurs de validation si existantes -->
                <div v-if="form.errors.name" class="text-red-600 text-sm mt-1">
                  {{ form.errors.name }}
                </div>
              </div>
            </div>

            <!-- Champ Email -->
            <div class="sm:col-span-2">
              <label
                for="email"
                class="block text-sm/6 font-semibold text-gray-900"
                >Votre e-mail</label
              >
              <div class="mt-2.5">
                <input
                  v-model="form.email"
                  type="email"
                  name="email"
                  id="email"
                  autocomplete="email"
                  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
                />
                <div v-if="form.errors.email" class="text-red-600 text-sm mt-1">
                  {{ form.errors.email }}
                </div>
              </div>
            </div>

            <!-- Champ Message -->
            <div class="sm:col-span-2">
              <label
                for="body"
                class="block text-sm/6 font-semibold text-gray-900"
                >Votre message</label
              >
              <div class="mt-2.5">
                <textarea
                  v-model="form.body"
                  name="body"
                  id="body"
                  rows="4"
                  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
                />
                <div v-if="form.errors.body" class="text-red-600 text-sm mt-1">
                  {{ form.errors.body }}
                </div>
              </div>
            </div>
          </div>
          <div class="mt-8 flex justify-end">
            <button
              type="submit"
              class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
              :disabled="form.processing"
            >
              <!-- Tu peux afficher un loader si tu le souhaites -->
              Envoyer
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { EnvelopeIcon } from "@heroicons/vue/24/outline";
// Import utile pour la gestion du formulaire Inertia :
import { useForm } from "@inertiajs/vue3";

// On définit le "form state" géré par Inertia, avec les champs name/email/body
const form = useForm({
  name: "",
  email: "",
  body: "",
});

/**
 * Appelé quand l’utilisateur soumet le formulaire
 */
function submitForm() {
  form.post(route("mail.send"), {
    onSuccess: () => {
      // Par exemple : reset du formulaire, affichage d’une alerte, etc.
      form.reset();
      alert("Votre message a bien été envoyé !");
    },
    onError: (errors) => {
      // Les erreurs de validation sont automatiquement placées dans form.errors.<champ>
      // Tu peux faire un traitement spécifique si besoin
      console.error("Erreurs de validation :", errors);
    },
  });
}
</script>
