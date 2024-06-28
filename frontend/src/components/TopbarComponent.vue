<template>
    <div class="container">
        <p>{{ currentTime.toLocaleTimeString() }}</p>
        <p>{{ currentTime.toLocaleDateString() }}</p>
    </div>
</template>

<script>
import { useCurrentTime } from "../composables/useCurrentTime";
export default {
  name: "CurrentTimeExample",
  setup() {
    const { currentTime } = useCurrentTime();
    console.log(currentTime.value);
    return { currentTime };
  },
};
</script>

<style>
.topbar {
  background-color: #198754; 
  color: white; 
}
</style>