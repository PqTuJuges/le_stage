<script setup>
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Mentions légales" />

    <main class="mx-auto max-w-2xl p-6">
        <h1 class="text-2xl font-semibold">Mentions légales</h1>

        <h2 class="mt-6 text-xl font-semibold">Éditeur du site</h2>
        <p class="mt-2">
            Cette application est un projet scolaire réalisé par Mathias Malo et Wassim Bourhanzour, étudiants au BES
            Web Developer de l'IFOSUP Wavre, dans
            le cadre du cours Projet web dynamique. Elle ne poursuit aucun but
            commercial.
        </p>

        <h2 class="mt-6 text-xl font-semibold">Contact</h2>
        <p class="mt-2">Pour toute question : mathias.malo@ifosup.wavre.be</p>

        <h2 class="mt-6 text-xl font-semibold">Hébergement</h2>
        <p class="mt-2">
            L'application est hébergée par [nom de l'hébergeur, à compléter lors
            de la mise en ligne].
        </p>

        <h2 class="mt-6 text-xl font-semibold">Données personnelles</h2>
        <p class="mt-2">
            L'application conserve le nom, l'adresse e-mail, les journées de
            stage encodées (date, heures, lieu, tâches) et les informations sur
            le stage (entreprise, maître de stage). Ces données servent
            uniquement au suivi des stages par le superviseur. Les comptes sont
            créés par le superviseur, et les données ne sont ni vendues ni
            transmises à des tiers. Pour demander l'accès, la correction ou la
            suppression de tes données, contacte l'adresse ci-dessus.
        </p>
    </main>
</template>