<template>
  <div>
    <h1>Wardrobe</h1>
    <button @click="logout">Logout</button>
  </div>
</template>

<script setup>
import { useAuthStore } from '../stores/auth';

const auth = useAuthStore();
const logout = () => auth.logout();
</script>
