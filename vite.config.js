import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    emptyOutDir: true,           // clear old files
    lib: {
      entry: 'js/main.js',       // your source JS
      name: 'main',              // global name if needed
      fileName: () => 'main.js', // output file name (no hash)
      formats: ['iife']          // immediately-invoked for browser
    },
    rollupOptions: {
      external: [],              // dependencies to exclude
    }
  }
});
