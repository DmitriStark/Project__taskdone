import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [vue()],
  root: 'resources', // Make sure this points to your 'resources' directory
  build: {
    outDir: '../public/build', // The build will be output to the 'public/build' folder
    manifest: true, // Enable manifest for Laravel to know the compiled assets
  },
});
